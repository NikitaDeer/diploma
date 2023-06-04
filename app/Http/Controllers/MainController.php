<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Advantage;

class MainController extends Controller
{
  public function index()
  {
    $page = Page::latest()->first();
    $advantages = Advantage::latest()->take(6)->get();
    // $advantages = [];

    return view('main', compact('page', 'advantages'));
  }
}
