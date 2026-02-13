<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // PERBAIKAN: Gunakan $request->validate
        $request->validate([
            'nim'     => 'required|unique:mahasiswas,nim',
            'nama'    => 'required',
            'kelas'   => 'required',
            'matakuliah' => 'required'
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        // PERBAIKAN: Gunakan $request->validate
        $request->validate([
            'nama'    => 'required',
            'kelas'   => 'required',
            'matakuliah' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Update data (kecuali NIM, karena primary key biasanya tidak diubah)
        $mahasiswa->update([
            'nama'    => $request->nama,
            'kelas'   => $request->kelas,
            'matakuliah' => $request->matakuliah
        ]);

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}