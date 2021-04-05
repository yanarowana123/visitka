<?php


namespace App\Services;


use App\Interfaces\CrudInterface;
use App\Models\Block3;
use Illuminate\Http\UploadedFile;

class Block3CRUDService implements CrudInterface
{

    public function create(array $validatedRequest)
    {
        if (array_key_exists('is_active', $validatedRequest)) {
            $validatedRequest['is_active'] = 1;
        }
        $imagePath = $this->uploadImage($validatedRequest['image']);
        $validatedRequest['image'] = $imagePath;
        Block3::create($validatedRequest);
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    protected function uploadImage(UploadedFile $file)
    {
        return $file->storePublicly('block3');
    }
}
