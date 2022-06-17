<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;

class IndexController extends Controller
{
    public function index_list()
    {
        $owners = Owner::orderBy('surname')
            ->limit(20)
            ->get();

        return view('index', compact("owners"));
    }
}
