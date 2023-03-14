<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    // Se puede hacer asi o como esta abajo

    // protected $fillable = [
    //     'title',
    //     'name',
    //     'email',
    //     'website',
    //     'picture',
    //     'about',
    // ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
