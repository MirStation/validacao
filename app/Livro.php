<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    //
    protected $fillable = ['nome', 'preco', 'editora_id'];

    public function editora() {
    	   return $this->belongsTo(Editora::class);
    }
}
