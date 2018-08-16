<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Documentation;

class APIDocumentationController extends Controller
{
    public function getAll()
    {
      $documentation = Documentation::all();
      return view('documentation',compact('documentation'));
    }
}
