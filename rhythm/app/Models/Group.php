<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Nette\Utils\DateTime;

class Group extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'coach_id',
        'created_at',
    ];

    protected function dateCreated(): Attribute
    {
        return Attribute::make(
            get: fn () => date_format(new DateTime($this->created_at), 'd.m.y'),
        );
    }

    public function structures()
    {
        return $this->hasMany(Structure::class);
    }

    public function coach() {
        return $this->belongsTo(Coache::class);
    }

    public function shadules()
    {
        return $this->hasMany(Shadule::class);
    }

}
