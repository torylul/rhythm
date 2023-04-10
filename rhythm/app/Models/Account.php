<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ticket_id',
        'status_id',
        'created_at',
        'updated_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function ticket() {
        return $this->belongsTo(Ticket::class);
    }

    protected function dateCreated(): Attribute
    {
        return Attribute::make(
            get: fn () => date_format(new DateTime($this->created_at), 'd.m.Y'),
        );
    }
}
