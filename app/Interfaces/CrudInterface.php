<?php


namespace App\Interfaces;


interface CrudInterface
{
    public function create(array $validatedRequest);

    public function update();

    public function delete();
}
