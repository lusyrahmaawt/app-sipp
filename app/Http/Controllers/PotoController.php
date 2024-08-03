<?php

namespace App\Http\Controllers;

use App\Models\Poto;
use Illuminate\Http\Request;

class PotoController extends Controller
{
    public function index()
    {
        $potos = Poto::orderBy('id', 'desc')->get();
        return view('poto.index', compact('potos'));
    }

    public function createpoto()
    {
        return view('poto.createpoto');
    }

    public function storepoto(Request $request)
    {
        $request->validate([
            'poto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'kegiatan' => 'required|string|max:255',
        ]);

        // Proses penyimpanan foto
        $imageName = time().'.'.$request->poto->extension();  
        $request->poto->storeAs('public/poto', $imageName); // Simpan di storage/app/public/poto

        // Simpan informasi foto ke database
        Poto::create([
            'poto' => $imageName,
            'kegiatan' => $request->kegiatan,
        ]);

        return redirect()->route('admin.poto')->with('success', 'Foto berhasil ditambahkan');
    }

    public function editpoto($id)
    {
        $poto = Poto::find($id);
        
        if (!$poto) {
            return redirect()->route('admin.poto')->with('error', 'Foto tidak ditemukan');
        }

        return view('poto.editpoto', compact('poto'));
    }

    public function updatepoto(Request $request, $id)
    {
        $poto = Poto::find($id);

        if (!$poto) {
            return redirect()->route('admin.poto')->with('error', 'Foto tidak ditemukan');
        }

        $rules = [
            'kegiatan' => 'required|string|max:255',
        ];

        if ($request->hasFile('poto')) {
            $rules['poto'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000';
        }

        $request->validate($rules, [
            'poto.required' => 'Foto harus diisi!',
            'kegiatan.required' => 'Kegiatan harus diisi!',
        ]);

        // Update kegiatan
        $poto->kegiatan = $request->kegiatan;

        // Update foto jika ada
        if ($request->hasFile('poto')) {
            // Hapus foto lama jika ada
            if ($poto->poto && \Storage::exists('public/poto/' . $poto->poto)) {
                \Storage::delete('public/poto/' . $poto->poto);
            }

            // Simpan foto baru
            $imageName = time().'.'.$request->poto->extension();  
            $request->poto->storeAs('public/poto', $imageName);
            $poto->poto = $imageName;
        }

        $poto->save();

        return redirect()->route('admin.poto')->with('success', 'Foto berhasil diupdate');
    }

    public function destroypoto($id)
    {
        $poto = Poto::find($id);
        if (!$poto) {
            return redirect()->route('admin.poto')->with('error', 'Foto tidak ditemukan');
        }

        if (\File::exists('storage/poto/' . $poto->poto)) {
            \File::delete('storage/poto/' . $poto->poto);
        }

        $poto->delete();

        return redirect()->route('admin.poto')->with('success', 'Foto berhasil dihapus');
    }
}
