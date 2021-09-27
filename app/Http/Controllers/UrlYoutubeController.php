<?php

namespace App\Http\Controllers;

use App\Models\Url_Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class UrlYoutubeController extends Controller
{
    public function index()
    {
        return view('Youtube.table', [
            'url_youtubes' => Url_Youtube::latest()->paginate(10),
        ]);
    }

    public function create(Request $request)
    {
        return view('youtube.create');
    }
   
    public function store(Request $request)
    {

        $img = \DefaultProfileImage::create("thumbnail");
        Storage::put("profile.png", $img->encode());

            
        Url_Youtube::Create([
            'thumbnail' => $request->file('thumbnail') ? $request->file('thumbnail')->store('youtube/images') : 'profile.png',
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'tag_video' => $request->tag_video,
            'iframe_video' => $request->tag_video,
        ]);

        Alert::success('Successfully', 'Created new youtube successfully');
        return redirect('/url_youtube/table');

    }
}
