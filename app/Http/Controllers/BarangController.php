<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('admin.barang.index',[
            'data' => Barang::all()
        ]);
    }

    public function create()
    {
        $ruangan = Ruangan::all();
        return view('admin.barang.create', 
        compact('ruangan'));
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
        $petugas = User::where('isAdmin', false)->get();
        return view('admin.ruangan.detail', compact('data', 'petugas'));
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'nama_ruangan' => ['required', 'string', 'max:30'],
            'id_user' => ['required', 'numeric'],
            'ukuran' => ['required'],
            'deskripsi' => ['required'],
        ]);

        $data = Ruangan::find($id);
        $data->update([
            'nama_ruangan' => $request->input('nama_ruangan'),
            'id_user' => $request->input('id_user'),
            'ukuran' => $request->input('ukuran'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
        return back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Ruangan::find($id);
        $data->delete();
        return redirect()->route('ruangan.index')->with('success', 'Data berhasil dihapus');
    }
}
