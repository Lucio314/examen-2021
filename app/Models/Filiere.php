<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $primaryKey = 'idFiliere';
    protected $guarded = [];
    public function clusters()
    {
        return $this->hasMany(Cluster::class, 'idFiliere', 'idFiliere');
    }
}
