<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';
    protected $fillable = [
        'name',
        'rarity_id',
        'image_url',
        'description',
    ];

    public function rarity() {
        return $this->belongsTo(Rarity::class, 'rarity_id');
    }

    public function history() {
        return $this->belongsTo(History::class);
    }
}
