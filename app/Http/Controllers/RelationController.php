<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    public function formation(){

        // $formations = Formation::all() ;
        $formations = Formation::paginate(2) ;

        return view ("formation", compact ("formations")) ;
    }

    public function detail($id){

        $formation = Formation::findOrFail($id) ;

        return view ("detail", compact ("formation")) ;
    }
}
