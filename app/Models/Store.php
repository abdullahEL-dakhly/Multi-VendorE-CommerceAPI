<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $fillable = [
       "name",
       "slug",
       "description",
       "logo",
       "banner",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
