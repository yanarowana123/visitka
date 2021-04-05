<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Block3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Block3Controller extends Controller
{

    public function index()
    {
        // get all the sharks
        $items = Block3::all();

        return view('admin.block3.index', compact('items'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Block3 $block3)
    {

    }

    public function edit(Block3 $block3)
    {

    }

    public function update(Request $request, Block3 $block3)
    {

    }

    public function destroy(Block3 $block3)
    {

    }

}
