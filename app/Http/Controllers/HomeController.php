<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    public function dashboard(){
        $data = User::get();
  return view('dashboard', compact('data'));
    }
    public function index(){
        $data = User::get();

        return view('index', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'required', 
            'nik' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'no_whatsapp' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator); 

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);
        $data['nik'] = $request->nik;
        $data['nama_usaha'] = $request->nama_usaha;
        $data['jenis_usaha'] = $request->jenis_usaha;
        $data['alamat_usaha'] = $request->alamat;
        $data['no_whatsapp'] = $request->no_whatsapp;

        User::create($data);

        return redirect()->route('index');
    }

    public function edit(Request $request, $id){
        $data = User::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id ){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'nullable', 
            'nik' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'no_whatsapp' => 'required',

        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator); 

        $data['email'] = $request->email;
        $data['name'] = $request->nama;

        if($request->password){
        $data['password'] = Hash::make($request->password);
        }
        User::whereId($id)->update($data);

        return redirect()->route('index');
    }

    public function delete(Request $request, $id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }

        return \redirect()->route('index');
    }
}
