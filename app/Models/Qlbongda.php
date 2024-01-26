<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qlbongda extends Model
{
    protected $table = 'qlbongdas';
    protected $primaryKey = 'id';
    protected $fillable = ['tendoibong', 'hinhanh', 'quocgia', 'sannha','thanhtich','bietdanh'];
}