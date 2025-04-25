<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'descricao',
        'categoria',
        'valor',
        'data_referencia',
        'user_id',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
