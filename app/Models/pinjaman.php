<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pinjaman extends Model
{
    use HasFactory;
    protected $table = "pinjamen";
    //pemanggilan semua field yang ada ditabel
    protected $guarded = [];
    public static function getAllpinjamen()
    {
        $pinjamen = DB::table('pinjamen')
            ->join('members', 'members.id', '=', 'pinjamen.id_members')
            ->join('books', 'books.id', '=', 'pinjamen.id_books');
        return $pinjamen;
    }
}
