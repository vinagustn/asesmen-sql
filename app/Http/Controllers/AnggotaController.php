<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function create()
    {
        return view('layouts.anggota', [
            'anggotas' => Anggota::all()
        ]);
    }

    public function store(Request $request)
    {
        $validates = $request->validate([
            'nama' => 'required|max:200',
            'gender' => 'required|max:1',
            'alamat' => 'required|max:250',
            'no_hp' => 'required|min:11|max:13'
        ]);
        $validates['user_id'] = $request->user()->id;

        Anggota::create($validates);
        return redirect(route('tampilAnggota'));
    }

    public function edit(Anggota $anggota)
    {
        return view('layouts.editMember', [
            'member' => $anggota,
            'anggotas' => Anggota::all()
        ]);    
    }

    public function update(Request $request)
    {
        DB::table('anggota')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);
        
        return redirect()->route('tampilAnggota');
    }

    public function delete($id)
    {
        Anggota::where('id', $id)->delete();
        return redirect(route('tampilAnggota'));
    }
}