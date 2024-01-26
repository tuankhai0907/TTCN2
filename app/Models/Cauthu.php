<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cauthu extends Model
{
    protected $table = 'cauthu';
    protected $primaryKey = 'id';
    protected $fillable = ['tencauthu', 'hinhanh', 'tuoi', 'vitri', 'thanhtich', 'clb'];
}
