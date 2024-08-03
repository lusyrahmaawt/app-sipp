<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return view('video.video', [
            'videos' => Video::orderBy('id', 'desc')->get(),
        ]);
    }

    public function createvideo()
    {
        return view('video.createvideo');
    }

    public function storevideo(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

    $messages = [
        'judul.required' => 'Judul video harus diisi',
        'youtube_code.required' => 'Kode video harus diisi',
    ];

    $this->validate($request, $rules, $messages);

    Video::create([
        'judul' => $request->judul,
        'youtube_code' => $request->youtube_code,
    ]);

    return redirect(route('admin.video'))->with('success', 'data video berhasil di simpan');

    }

    // public function updatevideo(Request $request, $id)
    // {
    //     $video = Video::find($id);

    //     $rules = [
    //         'judul' => 'required',
    //         'youtube_code' => 'required',
    //     ];

    //     $messages = [
    //         'judul.required' => 'Judul video harus diisi',
    //         'youtube_code.required' => 'Kode video harus diisi',
    //     ];

    //     $this->validate($request, $rules, $messages);

    //     $video->update([
    //         'judul' => $request->judul,
    //         'youtube_code' => $request->youtube_code,
    //     ]);
    //     return redirect(route('admin.video'))->with('success', 'data video berhasil di update');
    // }
    public function updatevideo(Request $request, $id)
    {
        $video = Video::find($id);
    
        if (!$video) {
            return redirect()->route('admin.video')->with('error', 'Video tidak ditemukan');
        }
    
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];
    
        $messages = [
            'judul.required' => 'Judul video harus diisi',
            'youtube_code.required' => 'Kode video harus diisi',
        ];
    
        $this->validate($request, $rules, $messages);
    
        $video->update([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);
    
        return redirect(route('admin.video'))->with('success', 'Data video berhasil diupdate');
    }
    


    public function editvideo($id)
    {
            $video = Video::find($id);
			 return view('video.editvideo', [
                'video' => $video
             ]);
    }

    public function destroyvideo($id)
{
    $video = Video::find($id);

    if (!$video) {
        // Jika video tidak ditemukan, kembalikan dengan pesan error
        return redirect()->route('admin.video')->with('error', 'Video tidak ditemukan');
    }

    $video->delete();

    return redirect()->route('admin.video')->with('success', 'Data video berhasil dihapus');
}

}

