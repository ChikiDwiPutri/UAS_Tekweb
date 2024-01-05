<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataPetController extends Controller
{
     public function show($id)
    {
        // Logika untuk menampilkan biodata hewan dengan ID $id
        return view('biodata-pet/1', ['id' => $id]);
    }
}
