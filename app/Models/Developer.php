<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
       	'cargo',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
    	'experiencia'
    ];

    public function getExperienciaAttribute()
    {
    	return 4 . ' Años';
    }


}
