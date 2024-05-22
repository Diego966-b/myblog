<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function getShow($id)
  {
    echo "<p>".$id."</p>";
  }

  public function getEdit($id)
  {
    echo "<p>".$id."</p>";
  }

  public function getCreate()
  {
    return view('category/create');
  }
  
  public function getIndex()
  {
    return view('category/index');
  }
}
