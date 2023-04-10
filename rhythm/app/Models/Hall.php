<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    public $timestamps = false;

    // переменная для работы с полями базы данных
    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    // функция для связи с распсианием
    public function shadules()
    {
        return $this->hasMany(Shadule::class);
    }
}
