<?php

namespace App\Http\Controllers;

use App\Models\Socmed;
use Illuminate\Database\Eloquent\Relations\Relation;

class SocmedController extends Controller
{
    /* @var Socmed|Relation */
    protected $socmed;

    public function __construct()
    {
        $this->socmed = new Socmed();
    }

    public function index()
    {
        $socmed = $this->socmed->where('show', 1)->get();
        return response()->json($socmed);
    }
}
