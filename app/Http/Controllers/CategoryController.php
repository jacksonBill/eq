<?php

namespace App\Http\Controllers;


use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public function index(Group $g)
    {
        $rootCategories = $g->rootGroup();
        return view('/menu', compact('rootCategories'));

    }

}
