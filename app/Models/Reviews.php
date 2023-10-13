<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['foto_profile', 'name_review','review_desc','created_at','updated_at'];
}


