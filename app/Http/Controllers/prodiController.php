<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => "Nurmalinda", 'foto' => 'Linda.jpeg'];
        $prodi = DB::table('prodi') -> get();
        return view('prodi', compact(['data', 'prodi']));
    }
}
