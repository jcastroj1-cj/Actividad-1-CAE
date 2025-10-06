<?php
namespace App\Infrastructure\Adapters\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'email',
        'name',
        'password',
    ];
}
