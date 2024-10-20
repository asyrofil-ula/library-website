<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\member as ModelsMember;

// use App\Http\Controllers\Member;
// use App\Models\member;


class Member extends Controller
{

    public function index()
    {
        $members = DB::table('members')->get();
        return view('member.member')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('member.tambah_member');
    }


    public function create_action(Request $request)
    {
        // insert data ke table
        DB::table('members')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role
        ]);
        // alihkan halaman ke halaman
        return redirect('/member');
    }

    public function hapus($id)
    {
        DB::table('members')->where('id',$id)->delete();
        
        return redirect('/member')->with(['success' => 'Berhasil Menghapus Data Mahasiswa']);
    }
    public function edit($id)
    {
        $members = DB::table('members')->where('id', $id)->first();
        return view('member.edit_member', ['members' => $members]);
    }
    public function edit_action($id, Request $request)
    {
        DB::table('members')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/member')->with(['success' => 'Berhasil Mengubah Data Mahasiswa']);
    }

}
