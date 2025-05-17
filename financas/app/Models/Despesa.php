<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'user_id',
        'descricao',
        'categoria',
        'valor',
        'data_referencia',
        'is_recorrente',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
