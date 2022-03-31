<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'rooms';

    // Primary Key
    public $primaryKey = 'id';
}
