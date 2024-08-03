<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\DaftarCppob;
use App\Models\DaftarSipp;
use App\Models\Jadwal;
use Barryvdh\DomPDF\Facade\Pdf;

class PendaftaranController extends Controller
{
    public function daftar()
    {
        $jadwal = DaftarSipp::all();
        return view('pendaftaran', compact('jadwal'));
    }

    public function DaftarCppobPost(Request $request)
{
    $user = Auth::user();

    // Validasi data form
    $request->validate([
        'nama_ukm' => 'required|string|max:255',
        'nama_lengkap' => 'required|string|max:255',
        'alamat_lengkap' => 'required|string|max:255',
        'alamat_produksi' => 'required|string|max:255',
        'email_aktif' => 'required|email|max:255',
        'no_hp' => 'required|string|max:15',
        'nomer_nik' => 'required|string|max:16',
        'nomer_npwp' => 'required|string|max:15',
        'jenisusaha' => 'required|integer',
        'jenisproduk' => 'required|string',
        'namaproduk' => 'required|string|max:255',
        'no_nib' => 'required|string|max:20',
        'sibakul' => 'required|string|max:20',
        'kemasan' => 'required|string',
        'tanggal_daftar' => 'required|date',
        'penjadwalan_id' => 'required|integer'
    ]);

    $nikExists = DaftarSipp::where('nomer_nik', $request->nomer_nik)->exists();

    if ($nikExists) {
        return redirect()->back()->withInput()->withErrors(['error' => 'NIK sudah terdaftar. Silahkan daftar dengan NIK yang lain']);
    }

    // // Cek apakah data yang sama sudah ada di database
    // $exists = DaftarSipp::where('user_id', $user->id)
    //     ->where('penjadwalan_id', $request->penjadwalan_id)
    //     ->exists();

    // if ($exists) {
    //     return redirect()->back()->withInput()->withErrors(['error' => 'Data pendaftaran dengan informasi yang sama sudah ada.']);
    // }

    // Menyimpan data ke database
    $cppob = DaftarSipp::create([
        'user_id' => $user->id,
        'penjadwalan_id' => $request->penjadwalan_id,
        'nama_ukm' => $request->nama_ukm,
        'nama_lengkap' => $request->nama_lengkap,
        'alamat_lengkap' => $request->alamat_lengkap,
        'alamat_produksi' => $request->alamat_produksi,
        'email_aktif' => $request->email_aktif,
        'no_hp' => $request->no_hp,
        'nomer_nik' => $request->nomer_nik,
        'nomer_npwp' => $request->nomer_npwp,
        'jenisusaha' => $request->jenisusaha,
        'jenisproduk' => $request->jenisproduk,
        'namaproduk' => $request->namaproduk,
        'no_nib' => $request->no_nib,
        'sibakul' => $request->sibakul,
        'kemasan' => $request->kemasan,
        'tanggal_daftar' => $request->tanggal_daftar,
    ]);

    // if($request->get('export') == 'pdf'){
    //     $pdf = PDF::loadView('pdf.create');
    // }

    return redirect()->route('daftar.cppob.detail', $cppob->id)->with('success', 'Pendaftaran UKM berhasil ditambahkan');
}


    public function rincianPendaftaran($id)
    {
        $cppob = DaftarSipp::findOrFail($id);
        return view('rinciandaftar', ['cppob' => $cppob]);
    }

    public function riwayatdaftar(Request $request)
    {
        // Ambil ID pengguna yang sedang login
        $userId = Auth::user()->id;

        // Ambil data pendaftaran dari pengguna yang sedang login
        $dataLayanan = DaftarSipp::where('id_user', $userId)->get();

        $layanan = [];

        foreach ($dataLayanan as $dl) {
            $layanan[] = [
                'nama_lengkap' => $dl->nama_lengkap,
                'nama_ukm' => $dl->nama_ukm,
                'alamat_lengkap' => $dl->alamat_lengkap,
                'alamat_produksi' => $dl->alamat_produksi,
                'email_aktif' => $dl->email_aktif,
                'no_hp' => $dl->no_hp,
                'nomer_nik' => $dl->nomer_nik,
                'nomer_npwp' => $dl->nomer_npwp,
                'jenisusaha' => $dl->jenisusaha,
                'jenisproduk' => $dl->jenisproduk,
                'namaproduk' => $dl->namaproduk,
                'no_nib' => $dl->no_nib,
                'sibakul' => $dl->sibakul,
                'kemasan' => $dl->kemasan,
                'tanggal_daftar' => $dl->tanggal_daftar,
            ];
        }

        // Kembalikan data layanan ke tampilan atau API response
        return view('rinciandaftar', compact('layanan'));
    }

    public function editdaftar($id)
    {
        $daftar = DaftarSipp::find($id);
        return view('editdaftar', compact('daftar'));
    }

    public function updatedaftar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_ukm' => 'required|string|max:255',
            'nama_lengkap'=> 'required|string|max:255',
            'alamat_lengkap'=> 'required|string|max:255',
            'alamat_produksi'=> 'required|string|max:255',
            'email_aktif'=> 'required|string|max:255',
            'no_hp'=> 'required|string|max:255',
            'nomer_nik'=> 'required|string|max:255',
            'nomer_npwp'=> 'required|string|max:255',
            'jenisusaha'=> 'required',
            'jenisproduk'=> 'required',
            'namaproduk'=> 'required|string|max:255',
            'no_nib'=> 'required|string|max:255',
            'sibakul'=> 'required|string|max:255',
            'kemasan'=> 'required|string|max:255',
            'tanggal_daftar'=> 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $daftar = DaftarSipp::find($id);
        if (!$daftar) {
            return redirect()->route('admin.pendaftaran')->with('error', 'Pendaftaran UKM tidak ditemukan');
        }

        $daftar->update([
            'nama_ukm' => $request->nama_ukm,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat_lengkap' => $request->alamat_lengkap,
            'alamat_produksi' => $request->alamat_produksi,
            'email_aktif' => $request->email_aktif,
            'no_hp' => $request->no_hp,
            'nomer_nik' => $request->nomer_nik,
            'nomer_npwp' => $request->nomer_npwp,
            'jenisusaha' => $request->jenisusaha,
            'jenisproduk' => $request->jenisproduk,
            'namaproduk' => $request->namaproduk,
            'no_nib' => $request->no_nib,
            'sibakul' => $request->sibakul,
            'kemasan' => $request->kemasan,
            'tanggal_daftar' => $request->tanggal_daftar,
        ]);

        return redirect()->route('admin.pendaftaran')->with('success', 'Pendaftaran UKM berhasil diperbarui');
    }

    public function deletedaftar($id)
    {
        $daftar = DaftarSipp::find($id);

        if ($daftar) {
            $daftar->delete();
            return redirect()->route('admin.pendaftaran')->with('success', 'Pendaftaran berhasil dihapus');
        }

        return redirect()->route('admin.pendaftaran')->with('error', 'Pendaftaran UKM tidak ditemukan');
    }

//     public function showForm($id)
// {
//     $cppob = DaftarSipp::findOrFail($id);
//     return view('pendaftaran', compact('cppob'));

// }
public function showForm($id)
{
    $user = Auth::user();
    $registrationStatus = DaftarSipp::where('id', $user->id)->pluck('nomer_nik', 'id')->toArray();
    $penjadwalanId = $id;
    return view('pendaftaran', compact('registrationStatus', 'user', 'penjadwalanId')); // Pastikan 'item' juga dikirimkan
}

public function store(Request $request, $id)
{
    // Validasi inputan form
    $request->validate([
        'email_aktif' => 'required|email',
        'no_hp' => 'required|numeric',
        'nomer_nik' => 'required|numeric',
        'nomer_npwp' => 'required|numeric',
        'no_nib' => 'required|numeric',
        'sibakul' => 'required|string',
    ]);

    $user = Auth::user();
    $cppob = new DaftarSipp();
    $cppob->id_user = $user->id;
    $cppob->email_aktif = $request->email_aktif;
    $cppob->no_hp = $request->no_hp;
    $cppob->nomer_nik = $request->nomer_nik;
    $cppob->nomer_npwp = $request->nomer_npwp;
    $cppob->no_nib = $request->no_nib;
    $cppob->sibakul = $request->sibakul;

    // Set field lainnya dari inputan form
    $cppob->save();

    return redirect()->route('pendaftaran', ['id' => $id])->with('success', 'Pendaftaran berhasil.');
}

    public function exportPdf()
{
    $cppob = DaftarSipp::all();
    $pdf = PDF::loadView('pdf.users', compact('cppob'))->setPaper('a3', 'landscape');
    return $pdf->download('data_pendaftar_cppob.pdf');
}

}
