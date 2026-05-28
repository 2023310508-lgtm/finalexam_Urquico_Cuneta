<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'address',
        'dob',
        'contactNo',

    ];
}
