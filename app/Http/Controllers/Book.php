<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class Book extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('books')->get();
        return view('book.book')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.tambah_book');
    }


    public function create_action(Request $request)
    {
        // insert data ke table pegawai
        DB::table('books')->insert([
            'nama_buku' => $request->nama_buku,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/book');
    }
    public function hapus($id)
    {
        DB::table('books')->where('id',$id)->delete();
        return redirect('/book')->with(['success' => 'Berhasil Menghapus Data Mahasiswa']);
    }
    public function edit($id)
    {
        $books = DB::table('books')->where('id', $id)->first();
        return view('book.edit_book', ['books' => $books]);
    }
    public function edit_action($id, Request $request)
    {
        DB::table('books')->where('id', $request->id)->update([
            'nama_buku' => $request->nama_buku,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/book')->with(['success' => 'Berhasil Mengubah Data Mahasiswa']);
    }
}
