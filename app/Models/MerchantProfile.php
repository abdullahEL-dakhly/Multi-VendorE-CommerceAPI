<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantProfile extends Model
{
    public $fillable = [
        "business_type",
        "tax_number",
        "commercial_registration",
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
