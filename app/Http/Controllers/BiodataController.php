<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Biodata as BiodataResource;
use App\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
      return BiodataResource::collection(Biodata::all());
    }
}
