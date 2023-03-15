<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class susunanMK extends Model
{
    use HasFactory;
    public $table = 'susunanMK';
    protected $primaryKey = 'kodeMK';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['kodeMK', 'namaMK', 'bk', 'sks', 'smt', 'keterangan'];
}
