<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Penjadwalan;
use App\Models\Video;
use App\Models\DaftarSipp;
use App\Models\Poto;
use Illuminate\Http\Request;


class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'potos' => Poto::orderBy('id', 'desc')->limit(3)->get(),
            'videos' => Video::orderBy('id', 'desc')->limit(3)->get(),
            'jadwals' => Penjadwalan::orderBy('id', 'desc')->first()
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }
    // public function detail ($slug)
    // {
    //     $artikel = Blog::where('slug', $slug)->first();
    //     return view('berita.berita', [
    //         'artikel' => $artikel
    //     ]);
    // }
    public function detail($slug)
    {
        $artikels = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikels
        ]);
    }


    public function beranda()
    {
        $jadwals = Penjadwalan::orderBy('id', 'desc')
            ->get()[0];
        $userId = auth()->user()->id;
        $daftarSipp = DaftarSipp::where('user_id', $userId)
            ->where('penjadwalan_id', $jadwals['id'])
            ->first();
        $status = $daftarSipp ? true : false;

        \Log::info($jadwals); // Tambahkan log untuk debugging
        return view('beranda', [
            'jadwals' => $jadwals,
            'status' => $status
        ]);
    }

    public function penjadwalan()
    {
        return view('penjadwalan', [
            'jadwals' => Penjadwalan::orderBy('nama_kegiatan', 'tanggal_kegiatan', 'waktu_kegiatan', 'tempat kegiatan', 'keterangan')->first()
        ]);
        // $jadwals = Penjadwalan::orderBy('nama_kegiatan', 'tanggal_kegiatan', 'waktu_kegiatan', 'tempat kegiatan', 'keterangan')->first(); // Menampilkan hanya 1 jadwal terbaru
        // return view('penjadwalan', [
        //     'jadwals' => $jadwals // Pastikan variabel ini sesuai dengan nama yang digunakan di view
        // ]);
    }

    public function showJadwal()
    {
        $user = Auth::user();
        $jadwals = Jadwal::all();

        // Membuat array untuk status pendaftaran tiap kegiatan
        $registrationStatus = [];
        foreach ($jadwals as $jadwal) {
            $registrationStatus[$jadwal->id] = DaftarSipp::where('id_user', $user->id)
                ->where('id_jadwal', $jadwal->id)
                ->exists();
        }

        return view('jadwal.index', [
            'jadwals' => $jadwals,
            'registrationStatus' => $registrationStatus
        ]);
    }

    public function videoKegiatan()
    {
        $video = Video::all();

        return view('video', [
            'videos' => $video
        ]);
    }

    public function fotoKegiatan()
    {
        $potos = Poto::all();

        return view('fotokegiatan', [
            'potos' => $potos
        ]);
    }
}
