<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';
    protected $fillable = [
        'user_id',
        'character_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function character() {
        return $this->belongsTo(Character::class, 'character_id');
    }
}
