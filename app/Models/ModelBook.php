<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'book';

    public function relUsers() { //função para criar os relacionamentos das tableas hasOne = um para um

        return $this->hasOne('app\Models\User', 'id', localKey:'id_user');
    }
}
