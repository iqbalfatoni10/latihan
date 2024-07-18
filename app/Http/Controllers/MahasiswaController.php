<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import Mahasiswa model
use App\Models\Mahasiswa;

// import view
use illuminate\View\View;

// import RedirectResponse
use Illuminate\Http\RedirectResponse;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua data mahasiswa
        $mahasiswas = Mahasiswa::all();
        // Mengirim data mahasiswa ke view 'mahasiswa'
        return view('mahasiswa', compact('mahasiswas'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan file foto dengan nama unik ke dalam direktori public
        $path = $request->file('foto')->store('mahasiswas', 'public');

        // Simpan data mahasiswa
        Mahasiswa::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'universitas' => $request->universitas,
            'keterangan' => $request->keterangan,
            'foto' => $path,
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('status', 'Data berhasil ditambah!');
    }

    public function destroy($id)
    {
        // Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Menghapus data mahasiswa berdasarkan ID
        $mahasiswa->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('status', 'Data berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        // Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update data mahasiswa
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nip = $request->nip;
        $mahasiswa->universitas = $request->universitas;
        $mahasiswa->keterangan = $request->keterangan;

        // Cek jika ada file foto yang diupload
        if ($request->hasFile('foto')) {
            // Simpan file foto dengan nama unik ke dalam direktori public
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $mahasiswa->foto = 'fotos/' . $fileName;
        }

        // Simpan perubahan data mahasiswa
        $mahasiswa->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('status', 'Data berhasil diupdate!');
    }
};
