<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program($id){
        $data = array( 'nama' => $id);
            return view('program', $data);
            
    }
}
