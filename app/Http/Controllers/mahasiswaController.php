<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => "Nurmalinda", 'foto' => 'Linda.jpeg'];
        $mahasiswa = DB::table('mahasiswa') -> get();
        return view('mahasiswa', compact(['data', 'mahasiswa']));
    
    }
}
