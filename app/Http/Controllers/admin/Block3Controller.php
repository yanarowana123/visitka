<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Block3StoreRequest;
use App\Models\Block3;
use App\Services\Block3CRUDService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Block3Controller extends Controller
{

    private $crudService;

    public function __construct(Block3CRUDService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        // get all the sharks
        $items = Block3::all();

        return view('admin.block3.index', compact('items'));
    }

    public function create()
    {
        return view('admin.block3.create');
    }

    public function store(Block3StoreRequest $request)
    {
        $this->crudService->create($request->validated());
        return redirect()->route('admin.block3.index')->with('success', 'Вы успешно создали!');
    }

    public function show(Block3 $block3)
    {
        return view('admin.block3.show', compact('block3'));
    }

    public function edit(Block3 $block3)
    {
        return view('admin.block3.edit', compact('block3'));
    }

    public function update(Block3StoreRequest $request, Block3 $block3)
    {
        $this->crudService->update($block3, $request->validated());
        return redirect()->route('admin.block3.index')->with('success', 'Вы успешно обновили!');
    }

    public function destroy(Block3 $block3)
    {

        $block3->delete();
        return redirect()->route('admin.block3.index')->with('success', 'Вы успешно удалили!');

    }

}
