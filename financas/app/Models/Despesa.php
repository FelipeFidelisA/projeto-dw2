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
    
    protected $casts = [
        'valor' => 'decimal:2',
        'data_referencia' => 'date',
        'is_recorrente' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
