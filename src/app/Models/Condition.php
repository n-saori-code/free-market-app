<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'condition_name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
