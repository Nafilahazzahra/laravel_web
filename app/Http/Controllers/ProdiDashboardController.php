<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_prodi = Prodi::latest()->paginate(10);
        return view('backend.prodi.index', ['prodis' => $data_prodi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /// return view('backend.prodi.create');

        $prodis = Prodi::all(); // Ambil semua data dari tabel prodis
        return view('backend.prodi.create', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255|unique:prodis,nama',
        ]);

        Prodi::create($validatedData);
        return redirect()->route('prodi-dashboard.index')->with('success', 'Data Prodi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Prodi::find($id);

        if (!$data) {
            return redirect()->route('prodi-dashboard.index')->with('error', 'Data Prodi tidak ditemukan.');
        }

        return view('backend.prodi.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255|unique:prodis,nama,' . $id,
        ]);

        $prodi = Prodi::find($id);
        if (!$prodi) {
            return redirect()->route('prodi-dashboard.index')->with('error', 'Data Prodi tidak ditemukan.');
        }

        $prodi->update($validatedData);
        return redirect()->route('prodi-dashboard.index')->with('success', 'Data Prodi berhasil diperbarui.');
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = Prodi::find($id);

        if (!$prodi) {
            return redirect()->route('prodi-dashboard.index')->with('error', 'Data Prodi tidak ditemukan.');
        }

        $prodi->delete();
        return redirect()->route('prodi-dashboard.index')->with('success', 'Data Prodi berhasil dihapus.');
    }
}