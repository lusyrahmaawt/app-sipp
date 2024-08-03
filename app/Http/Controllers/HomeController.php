<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    public function dashboard()
    {
        $data = User::get();
        return view('dashboard', compact('data'));
    }

    public function index()
    {
        $data = User::get();
        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'nama' => 'required',
            'password' => 'required',
            'nik' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'no_whatsapp' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = [
            'email' => $request->email,
            'name' => $request->nama,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'nama_usaha' => $request->nama_usaha,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'no_whatsapp' => $request->no_whatsapp,
        ];

        User::create($data);

        return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = User::find($id);
        if (!$data) {
            return redirect()->route('admin.index')->with('error', 'Data tidak ditemukan');
        }
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'nullable',
            'nik' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'no_whatsapp' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = [
            'email' => $request->email,
            'name' => $request->nama,
            'nik' => $request->nik,
            'nama_usaha' => $request->nama_usaha,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'no_whatsapp' => $request->no_whatsapp,
        ];

        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        }

        User::where('id', $id)->update($data);

        return redirect()->route('admin.index')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $data = User::find($id);

        if (!$data) {
            return redirect()->route('admin.index')->with('error', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus');
    }
}
