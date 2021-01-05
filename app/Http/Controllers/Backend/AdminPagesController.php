<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPagesController extends Controller
{
  public function index()
  {
    return view('backend.pages.index');
  }


}
