<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('layouts.peminjaman', [
            'pinjam' => Peminjaman::all()
        ]);
    }

    public function store(Request $request)
    {
        $validates = $request->validate([
            'member_id' => 'required',
            'book_id' => 'required'
        ]);

        $validates['user_id'] = $request->user()->id;

        Peminjaman::create($validates);
        return redirect('/peminjaman');
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('layouts.editPinjam', [
            'borrow' => $peminjaman,
            'pinjam' => Peminjaman::all()
        ]);    
    }

    public function update(Request $request)
    {
        DB::table('peminjaman')->where('id', $request->id)->update([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id
        ]);
        
        return redirect('/peminjaman');
    }

    public function destroy($id)
    {
        Peminjaman::where('id', $id)->delete();
        return redirect('/peminjaman');
    }
}
