<?php

namespace App\Http\Controllers;

use App\Models\pinjamen;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\member as ModelsMember;
use App\Models\pinjam;

// use App\Http\Controllers\Member;
// use App\Models\member;


class pinjaman extends Controller
{

    public function index()
    {
        $pinjamen = DB::table('pinjamen')
            ->join('members', 'members.id', '=', 'pinjamen.id_members')
            ->join('books', 'books.id', '=', 'pinjamen.id_books')
            ->get();
        return view('pinjaman.pinjaman', $pinjamen)->with('pinjamen', $pinjamen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pinjamen = pinjamen::getAllpinjamen()->get();
        // dd($pinjamen);
        return view('pinjaman.tambah_pinjaman', ['pinjamen' => $pinjamen]);
    }


    public function create_action(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pinjamen')->insert([
            'id_members' => $request->id_members,
            'id_books' => $request->id_books,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pinjaman');
    }

    public function hapus($id)
    {
        // DB::table('pinjamen')->where('id',$id)->delete();
        pinjam::where('id', $id)->delete();
        return redirect('/pinjaman')->with(['success' => 'Berhasil Menghapus Data Mahasiswa']);
    }
    public function edit($id)
    {
        $pinjamen = DB::table('pinjamen')
            ->join('members', 'members.id', '=', 'pinjamen.id_members')
            ->join('books', 'books.id', '=', 'pinjamen.id_books')
            ->where('pinjamen.id', $id)
            ->first();
            dd($pinjamen);


        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pinjaman.edit_pinjaman', ['pinjamen' => $pinjamen]);
        // dd($members);
    }
    public function edit_action($id, Request $request)
    {
        DB::table('pinjamen')->where('id', $request->id)->update([
            'id_members' => $request->id_members,
            'id_books' => $request->id_books,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pinjaman')->with(['success' => 'Berhasil Mengubah Data Mahasiswa']);
    }

}
