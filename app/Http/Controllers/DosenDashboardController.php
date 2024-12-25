<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     ///untuk mengarahkan ke alamat nya
    public function index()
    {
        $data_dosen = Dosen::with('prodi')->latest()->paginate(10);
        return view('backend.dosen.index', ['dosens' => $data_dosen]);
    }

    /**
     * Show the form for creating a new resource.
     */

     // untuk input data
    public function create()
    {

        $prodis = Prodi::whereIn('nama', ['TEKKOM', 'MI', 'TRPL', 'ANIMASI'])->get();
        return view('backend.dosen.create', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:dosens,nik|max:20',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email',
            'no_telp' => 'required|string|max:15',
            'prodi_id' => 'required|exists:prodis,id', //// relasi dengan prodi_id
            'alamat' => 'required|string',
        ]);

        Dosen::create($validatedData);
        return redirect()->route('dosen-dashboard.index')->with('success', 'Data dosen berhasil ditambahkan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Dosen::find($id); // Ambil data dosen berdasarkan ID
        $prodis = Prodi::all(); // Ambil semua data prodi

        if (!$data) {
            return redirect()->route('dosen-dashboard.index')->with('error', 'Data dosen tidak ditemukan.');
        }

        return view('backend.dosen.edit', compact('data', 'prodis')); // Kirim data dosen dan prodi ke view
    }


    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nik' => 'required|max:20|unique:dosens,nik,' . $id,
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email,' . $id,
            'no_telp' => 'required|string|max:15',
            'prodi_id' => 'required|string|max:100',
            'alamat' => 'required|string',
        ]);

        $dosen = Dosen::find($id);
        if (!$dosen) {
            return redirect()->route('dosen-dashboard.index')->with('error', 'Data dosen tidak ditemukan.');
        }

        $dosen->update($validatedData);
        return redirect()->route('dosen-dashboard.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        if (!$dosen) {
            return redirect()->route('dosen-dashboard.index')->with('error', 'Data dosen tidak ditemukan.');
        }

        $dosen->delete();
        return redirect()->route('dosen-dashboard.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}