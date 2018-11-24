<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    public function phone()
    {
        return $this->hasOne(Phone::class, 'user_id', 'id');
    }
}
