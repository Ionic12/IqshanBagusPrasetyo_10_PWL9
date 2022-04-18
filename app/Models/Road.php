<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Road as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $table='road'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'models',
        'type',
        'wheels',
        'chain',
        'shifters',
        'handlebar',
        'caliper',
        'carrousel1',
        'carrousel2',
        'carrousel3',
        'desc1',
        'desc2',
        'desc3',
        'type1',
        'type2',
        'typedesc1',
        'typedesc2',
    ];
    public $timestamps = true;

}
