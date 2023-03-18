<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Database\Eloquent\Relations\Relation;

class VideoController extends Controller
{
    /* @var Video|Relation */
    protected $video;

    public function __construct()
    {
        $this->video = new Video();
    }

    public function index()
    {
        $video = $this->video->where('show', 1)->get();
        return response()->json($video);
    }
}
