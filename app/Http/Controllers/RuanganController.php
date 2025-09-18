<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        return view('admin.ruangan.index',[
            'data' => Ruangan::all()
        ]);
    }

    public function create()
    {
        $petugas = User::where('isAdmin', false)->get();
        return view('admin.ruangan.create', compact('petugas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => ['required', 'string', 'max:30'],
            'id_user' => ['required', 'numeric'],
            'ukuran' => ['required'],
            'deskripsi' => ['required'],
        ]);
        $simpan = [
            'nama_ruangan' => $request->input('nama_ruangan'),
            'id_user' => $request->input('id_user'),
            'ukuran' => $request->input('ukuran'),
            'deskripsi' => $request->input('deskripsi'),
        ];
        Ruangan::create($simpan);
        return redirect()->route('ruangan.index')
        ->with('success', 'Berhasil disimpan');
    }
    
    public function detail($id)
    {
        $data = Ruangan::find($id);
        return view('admin.ruangan.detail', compact('data'));
    }

}
