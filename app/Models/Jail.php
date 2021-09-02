<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jail extends Model
{
    use HasFactory;

    public $table = 'jails';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name'
    ];

    public function napi()
    {
        return $this->hasMany(Napi::class, 'idJail');
    }
}
