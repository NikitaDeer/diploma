<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Advantage;

class MainController extends Controller
{
  public function index()
  {
    // $page = Page::latest()->first();
    $page = Page::where('is_published', 1)->latest()->first();
    $advantages = Advantage::where('is_published', 1)->get();
    // $advantages = [];

    return view('main', compact('page', 'advantages'));
  }
}
