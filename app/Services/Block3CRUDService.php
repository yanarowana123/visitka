<?php


namespace App\Services;


use App\Interfaces\CrudInterface;
use App\Models\Block3;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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

    public function update($block3, array $validatedRequest)
    {
        if (array_key_exists('is_active', $validatedRequest)) {
            $validatedRequest['is_active'] = 1;
        } else {
            $validatedRequest['is_active'] = 0;
        }
        if (array_key_exists('image', $validatedRequest)) {
            Storage::delete($block3->image);
            $imagePath = $this->uploadImage($validatedRequest['image']);
            $validatedRequest['image'] = $imagePath;
        }
        $block3->update($validatedRequest);
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
