<?php

namespace App\Models;

use App\Http\Controllers\controllerProducto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use function Laravel\Prompts\table;

class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $fillable = [
        'nombre',
        'descripcion',
        'precio'

    ];
    public static function boot(){
        parent::boot();
    }


}
