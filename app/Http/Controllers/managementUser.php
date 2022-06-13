<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\dataPengajuan;
use PDF;

class managementUser extends Controller
{
    public function tampilUser()
    {
        $dataUsers = User::latest()->paginate(5); 
        return view('admins.datauser.tampilUser',compact(['dataUsers']))
        ->with('no',1);
    }

    public function formTambahUser()
    {
        return view('admins.datauser.inputUser',[

        ]);
    }

    public function insertUser(Request $request)
    {
        $this->validate($request,[
            'namaUser' => 'required|max:255',
            'emailUser' => 'required',
            'password' => 'required|min:8',
        ]);
        User::create([
            'name' => $request->namaUser,
            'email' => $request->emailUser,
            'password' => Hash::make($request->password),
            'is_admin' => $request->level,
        ]);
        return redirect('/tampil_user')->with('success','Data Berhasil Disimpan');
    }
    
    public function destroy($id)
    {
        $dataUser = User::find($id);
        $dataUser->delete();
        return redirect('/tampil_user')->with('success','Data Berhasil Dihapus');
    }

    public function editUsers($id)
    {
        $editUser = User::find($id);
        return view('admins.datauser.editUser', compact(['editUser']));
    }

    public function updateUsers(Request $request, $id)
    {
        $this->validate($request,[
            'namaUser' => 'required|max:255',
            'emailUser' => 'required',
            'password' => 'required|min:8',
        ]);

        $dataUser= User::find($id);

        $dataUser->update([
            'name' => $request->namaUser,
            'email' => $request->emailUser,
            'password' => Hash::make($request->password),
            'is_admin' => $request->level,
        ]);

        return redirect('/tampil_user')->with('success','Data Berhasil Di Update');
    }

   
}
