<?php

namespace App\Http\Controllers;

use App\Services\VideoUpload\Uploader;
use App\User;
use App\Video;
use Closure;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * @var User
     */
    private $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function (Request $request, Closure $next) {
            $this->user = auth()->user();

            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'string|required|max:255',
            'year' => 'integer|nullable|min:0|max:' . date('Y'),
            'file' => 'file|required|mimes:mp4,avi,mkv',
            'subtitles' => 'file|nullable|mimes:txt,srt',
            'description' => 'string|nullable|max:255',
            'parental_control' => 'nullable|boolean',
            'private' => 'nullable|boolean',
        ]);

        $videoFile = $request->file('file');

        $videoData = array_merge($validData, [
            'file_location' => Uploader::upload($videoFile),
        ]);

        $this->user->videos()->create($videoData);

        return redirect()->route('home')->with([
            'success_upload' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
