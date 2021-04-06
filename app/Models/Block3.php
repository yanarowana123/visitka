<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed is_active
 */
class Block3 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function isActive()
    {
        return $this->is_active ? 'Да' : 'Нет';
    }

    public function getImage()
    {
        return $this->image ? asset($this->image) : 'Нет';
    }

}
