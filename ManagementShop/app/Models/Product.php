<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "author",
        "cover_form",
        "publishing_year",
        "packaging_size",
        "weight",
        "quantity",
        "description_long",
        "delete_flag",
        "category_id",
        "provider_id",
    ];

    public $timestamps = true;
}
