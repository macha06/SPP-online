<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TagihanDetail extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $guarded = [];
}
