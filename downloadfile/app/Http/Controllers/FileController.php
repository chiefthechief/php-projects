<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
   public function download($filename){
      $file = public_path("C:\\Users\\chief\\Downloads\\".$filename);
      if(file_exists($file)){
         return response()->download($file);
      } else{
         return abort(404);
      }
   }
}
