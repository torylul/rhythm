<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public $timestamps = false;

    // функция для связи со страницами
    public function page() {
        return $this->belongsTo(Category::class);
    }

    // функция для связи с элементами секции
    public function itemSections()
    {
        return $this->hasMany(ItemSection::class);
    }

}
