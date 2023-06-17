<?php

namespace App\Http\Controllers;

use App\Models\OldPage;
use App\Models\Service;
use App\Models\Advantage;

class MainController extends Controller
{
  public function index()
  {
    // $page = Page::latest()->first();
    $page = OldPage::where('is_published', 1)->latest()->first();
    $advantages = Advantage::where('is_published', 1)->get();
    $services = Service::where('is_published', 1)->get();
    // $services = Service::all();
    // $advantages = [];

    return view('main', compact('page', 'advantages', 'services'));
  }
}
