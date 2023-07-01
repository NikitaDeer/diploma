<?php

namespace App\Http\Controllers;

use App\Models\OldPage;
use Illuminate\Http\Request;

class PageController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $pages = OldPage::all();
    return view('main', compact('pages'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(OldPage $page)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(OldPage $page)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, OldPage $page)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(OldPage $page)
  {
    //
  }
}
