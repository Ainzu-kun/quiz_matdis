<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    protected $table = 'rarities';
    protected $fillable = [
        'name',
        'probability',
    ];

    public function character() {
        return $this->hasMany(Character::class, 'rarity_id');
    }
}
