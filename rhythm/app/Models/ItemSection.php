<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSection extends Model
{
    use HasFactory;

    public $timestamps = false;

    // переменная для работы с полями базы данных
    protected $fillable = [
        'item',
        'description',
        'section_id',
    ];

    // функция для связи с секциями
    public function section() {
        return $this->belongsTo(Section::class);
    }
}
