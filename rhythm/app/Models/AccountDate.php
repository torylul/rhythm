<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\DateTime;

class AccountDate extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'date',
    ];

    protected function dateCreated(): Attribute
    {
        return Attribute::make(
            get: fn () => date_format(new DateTime($this->date), 'd.m.Y'),
        );
    }
}
