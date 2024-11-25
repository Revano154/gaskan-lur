<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    // Koneksi MongoDB
    protected $connection = 'mongodb';

    // Nama database dan collection
    protected $database = 'PraUAS';
    protected $collection = 'users';

    // Kolom yang dapat diisi
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Menyembunyikan kolom tertentu
    protected $hidden = [
        'password',
    ];

    // Aktifkan timestamps
    public $timestamps = true;

    // Primary key
    protected $primaryKey = '_id';

    // Tipe data pada field
    protected $casts = [
        '_id' => 'string',
        'email' => 'string',
        'username' => 'string',
    ];

    // Mutator untuk password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}