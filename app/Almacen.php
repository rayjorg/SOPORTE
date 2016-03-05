 <?php

namespace Soporte;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
  protected $table = 'almacen';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'password'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
}
