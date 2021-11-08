<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;
    protected $primaryKey='nama';
    protected $keyType='string';
    protected $fillable =['merk', 'nama', 'plat'];
}
