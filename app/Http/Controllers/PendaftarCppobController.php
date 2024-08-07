<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\DaftarSipp;

class PendaftarCppobController extends Controller
{
    public function dashboard()
    {
        $cppob = DaftarSipp::get();
        return view('dashboard', compact('cppob'));
    }

    public function index(Request $request)
    {
        $cppob = DaftarSipp::query();

        if ($request->query('search')) {
            $cppob->where('nama_ukm', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('nama_lengkap', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('alamat_lengkap', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('alamat_produksi', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('email_aktif', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('no_hp', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('nomer_nik', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('nomer_npwp', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('jenisusaha', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('jenisproduk', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('namaproduk', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('no_nib', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('sibakul', 'like', '%' . $request->query('search') . '%');
            $cppob->orWhere('kemasan', 'like', '%' . $request->query('search') . '%');
        }

        $cppob = $cppob->paginate(10);
        return view('pendaftarcppob', compact('cppob'));
    }

    public function createcppob()
    {
        return view('createcppob');
    }

    public function storecppob(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        DaftarSipp::create([
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


        return redirect()->route('admin.pendaftarcppob')->with('success', 'Data berhasil disimpan');
    }

    public function editcppob($id)
    {
        $cppob = DaftarSipp::find($id);
        if (!$cppob) {
            return redirect()->route('admin.pendaftarcppob')->with('error', 'Data tidak ditemukan');
        }
        return view('editcppob', compact('cppob'));
    }

    public function updatecppob(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_ukm' => 'required',
            'nama_lengkap' => 'required',
            'alamat_lengkap' => 'required',
            'alamat_produksi' => 'required',
            'email_aktif' => 'required',
            'no_hp' => 'required',
            'nomer_nik' => 'required',
            'nomer_npwp' => 'required',
            'jenisusaha' => 'required',
            'jenisproduk' => 'required',
            'namaproduk' => 'required',
            'no_nib' => 'required',
            'sibakul' => 'required',
            'kemasan' => 'required',
            'tanggal_daftar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $cppob = [
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
        ];

        if (!empty($request->password)) {
            $cppob['password'] = Hash::make($request->password);
        }

        DaftarSipp::where('id', $id)->update($cppob);

        return redirect()->route('admin.pendaftarcppob')->with('success', 'Data berhasil diperbarui');
    }

    public function deletecppob($id)
    {
        $cppob = DaftarSipp::find($id);

        if (!$cppob) {
            return redirect()->route('admin.pendaftarcppob')->with('error', 'Data tidak ditemukan');
        }

        $cppob->delete();

        return redirect()->route('admin.pendaftarcppob')->with('success', 'Data berhasil dihapus');
    }
}
