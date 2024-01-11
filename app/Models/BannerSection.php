<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSection extends Model
{
    use HasFactory;
    protected $fillable = ['title','name','pro','description','image','status'];
}