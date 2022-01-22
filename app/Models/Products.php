<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['title','picture','is_active','is_draft','mrp','created_at','modified_at'];
}
