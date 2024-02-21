<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $fillable = [

        'item_id',
        "asset_tag",
        "quantity",
        'item_name',
        'cover_url',
        'status',

    ];
}
