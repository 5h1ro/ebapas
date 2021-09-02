<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Napi extends Model
{
    use HasFactory;

    public $table = 'napis';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'idJail',
        'case',
        'pk',
        'type',
        'disposition',
        'number_tpp',
        'date_tpp',
        'status',
        'description'
    ];

    public function jail()
    {
        return $this->belongsTo(Jail::class, 'idJail');
    }
}
