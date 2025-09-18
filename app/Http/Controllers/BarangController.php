<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use Carbon\Carbon;
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
            'nama_barang' => ['required', 'string', 'max:30'],
            'id_ruangan' => ['required', 'numeric'],
            'merk' => ['required', 'string', 'max:30'],
            'tanggal_pembelian' => ['required', 'date'],
            'gambar' => ['required', 'file', 'max:2048', 'mimes:png,jpg,jpeg,svg,heic,webp'],
            'kondisi' => ['required'],
        ]);
        $simpan = [
            'nama_barang' => $request->input('nama_barang'),
            'id_ruangan' => $request->input('id_ruangan'),
            'merk' => $request->input('merk'),
            'tanggal_pembelian' => $request->input('tanggal_pembelian'),
            'kondisi' => $request->input('kondisi'),
        ];
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar'); //mengambil gambar
            $path = 'public/gambar/barang'; //path penyimpanan
            $nama = 'gambar_barang_' . Carbon::now()
            ->format('Ymdhis') . '.' . $gambar
            ->getClientOriginalExtension(); //gambar_barang_tanggal.jpg
            $simpan['gambar'] = $nama; //data yang akan disimipan di database (nama)
            $gambar->storeAs($path, $nama);
        }
        Barang::create($simpan);
        return redirect()->route('barang.index')
        ->with('success', 'Barang berhasil ditambahkan');

    }
    
    public function detail($id)
    {
        $data = Barang::find($id);
        $ruangan = Ruangan::all();
        return view('admin.barang.detail', compact('data', 'barang'));
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
