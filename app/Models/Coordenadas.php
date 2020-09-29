<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coordenadas extends Model
{
    
    protected $table = 'tb_alerts';
    
    public $timestamps = false;
    
    // Relacionar tablas con las columnas correspondientes

    public function TipoIncidencia() {
        return $this->belongsTo('App\Models\TipoIncidencia','type_alert', 'code_munser');
    }
    
    public function scopesearch($query,$name){
        return $query ->where ('type_alert','LIKE',"%$name%");

    }

    public function scopedate($query,$inicio,$fin){
        return $query ->whereBetween('date_alert',[ $inicio, $fin]);


    }


}