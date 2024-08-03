<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Penjadwalan;

class PenjadwalanController extends Controller
{
    public function index() {
        $jadwal = Penjadwalan::all();
        return view('penjadwalan', compact('jadwal'));
    }

    public function beranda(){
        $jadwal = Penjadwalan::all();
        return view('beranda', compact('jadwal'));
    }

    public function tambahjadwal() {
        return view('tambahjadwal');
    }

    public function penjadwalan(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'waktu_kegiatan' => 'required',
            'tempat_kegiatan' => 'required|string|max:255',
            'keterangan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Penjadwalan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'waktu_kegiatan' => $request->waktu_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.penjadwalan')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function editjadwal($id) {
        $jadwal = Penjadwalan::find($id);
        return view('editjadwal', compact('jadwal'));
    }

    public function updatejadwal(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'waktu_kegiatan' => 'required',
            'tempat_kegiatan' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        $jadwal = Penjadwalan::find($id);
        if (!$jadwal) {
            return redirect()->route('admin.penjadwalan')->with('error', 'Jadwal tidak ditemukan');
        }
    
        $jadwal->nama_kegiatan = $request->nama_kegiatan;
        $jadwal->tanggal_kegiatan = $request->tanggal_kegiatan;
        $jadwal->waktu_kegiatan = $request->waktu_kegiatan;
        $jadwal->tempat_kegiatan = $request->tempat_kegiatan;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->save();
    
        return redirect()->route('admin.penjadwalan')->with('success', 'Jadwal berhasil diperbarui');
    }
    
    public function deletejadwal($id) {
        $jadwal = Penjadwalan::find($id);
    
        if ($jadwal) {
            $jadwal->delete();
            return redirect()->route('admin.penjadwalan')->with('success', 'Jadwal berhasil dihapus');
        }
    
    }

}
