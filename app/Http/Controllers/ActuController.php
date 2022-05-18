<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class ActuController extends Controller
{
    //
    public function actumaq(){

        $actus = Actu::all() ;

        return view ("actumaq", compact ("actus")) ;
    }
}
