<?php


namespace App\Interfaces;


use App\Models\Block3;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;

interface CrudInterface
{
    public function create(array $validatedRequest);

    public function update( $model, array $validatedRequest);

    public function delete();
}
