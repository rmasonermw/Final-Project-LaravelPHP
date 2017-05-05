<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    function memberIndex(){
        return view('members');
    }

    function showPeople($state_prefix = "MO"){

        $queryString = "SELECT city, state_prefix, zip_code FROM zips WHERE state_prefix LIKE '$state_prefix%' ORDER BY state_prefix, zip_code";

        $rows = \DB::connection('misc')->select($queryString);

        $n = count($rows);

        return view('people',[
            'rows' => $rows
        ]);
    }

    function showHorses(){
        return view('horses');
    }

    function showSchedule(){
        return view('showSchedule');
    }

    function memberID($memberID){
        $message = "Your member ID is ".$memberID;
        return $message;
    }

}
