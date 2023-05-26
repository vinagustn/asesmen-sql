<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function create()
    {
        return view('layouts.buku',[
            'buku' => Buku::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'deskripsi' => 'required',
            'tahun_terbit' => 'required'
        ]);

        $validateData['user_id'] = $request->user()->id;
        Buku::create($validateData);
        return redirect('/buku');
    }

    public function edit(Buku $buku)
    {
        return view('layouts.editBuku',[
            'books' => $buku
        ]);
    }

    public function update(Request $request)
    {
        DB::table('buku')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'deskripsi' => $request->deskripsi,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        return redirect('/buku');
    }

    public function destroy($id)
    {
        Buku::where('id',$id)->delete();
        return redirect('/buku');
    }
}
