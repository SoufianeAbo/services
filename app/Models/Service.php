<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service', 'description', 'firstName', 'lastName', 'email', 'categoryId', 'cost',
    ];

    public function categoryPull() {
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
