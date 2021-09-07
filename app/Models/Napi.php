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
        'idPk',
        'idType',
        'date_disposition',
        'number_tpp',
        'date_tpp',
        'date_send',
        'date_start',
        'date_end',
        'status',
        'description'
    ];

    public function jail()
    {
        return $this->belongsTo(Jail::class, 'idJail');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'idType');
    }
    public function pk()
    {
        return $this->belongsTo(Pk::class, 'idPk');
    }
}
