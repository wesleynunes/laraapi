<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = ['equipe_id', 'equipe_nome', 'equipe_inativo', 'equipe_deletado'];


    public function getResults($name = null)
    {
        if(!$name)
            return $this->get();
        else{
            return $this->where('equipe_nome', 'LIKE', "%{$name}%")->get();
        }
    }
}
