<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coache extends Model
{
    use HasFactory;

    public $timestamps = false;

    // переменная для работы с полями базы данных
    protected $fillable = [
        'name',
        'surname',
        'email',
        'image',
        'description',
    ];

    // функция для вывод имени и фамили вместе
    protected function fullName():Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->surname} {$this->name}"
        );
    }

    // функция для связи с группой
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
