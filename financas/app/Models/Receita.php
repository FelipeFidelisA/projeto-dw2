<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;
    
    protected $table = 'receitas';
    
    protected $fillable = [
        'descricao',
        'categoria',
        'valor',
        'data_referencia',
        'user_id',
        'is_recorrente'
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