<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $primaryKey = 'idDepartement';
    protected $guarded = [];
    public function communes()
    {
        return $this->hasMany(Commune::class, 'idDepartement', 'idDepartement');
    }
}
