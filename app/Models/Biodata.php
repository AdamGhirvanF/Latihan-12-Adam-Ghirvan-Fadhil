<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'nik', 'umur', 'alamat', 'file'];

    public $timestamps = true;
}
