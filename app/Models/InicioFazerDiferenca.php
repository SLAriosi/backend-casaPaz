<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InicioFazerDiferenca extends Model
{
    use HasFactory;

    protected $table = 'inicio_fazer_diferenca';

    protected $fillable = ['imagem'];
}