<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $timestamps = false;

    // переменная для работы с полями базы данных
    protected $fillable = [
        'name',
        'price',
        'count',
        'description',
    ];

    // функция для связи с аккаунтом
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
