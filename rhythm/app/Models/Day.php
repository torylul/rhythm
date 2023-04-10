<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\DateTime;

class Day extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function shadules()
    {
        return $this->hasMany(Shadule::class);
    }
}
