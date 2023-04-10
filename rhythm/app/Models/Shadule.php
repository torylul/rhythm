<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\DateTime;

class Shadule extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'group_id',
        'day_id',
        'hall_id',
        'time_start',
        'time_end',
    ];

    protected function dateCreated(): Attribute
    {
        return Attribute::make(
            get: fn () => date_format(new DateTime($this->time_start), 'H:i'),
        );
    }

    protected function dateUpdated(): Attribute
    {
        return Attribute::make(
            get: fn () => date_format(new DateTime($this->time_end), 'H:i'),
        );
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function day() {
        return $this->belongsTo(Day::class);
    }

    public function hall() {
        return $this->belongsTo(Hall::class);
    }

    protected $casts = [
        'time_start' => 'datetime',
        'time_end' => 'datetime',
    ];
}
