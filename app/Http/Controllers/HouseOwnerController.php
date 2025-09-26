<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HouseOwnerController extends Controller
{
    public function index()
    {
        $houseOwners = auth()->user()->houseOwners;

        return Inertia::render('houseOwners/index',[
            'houseOwners' => $houseOwners
        ]);
    }

    public function create()
    {
        
    }
}
