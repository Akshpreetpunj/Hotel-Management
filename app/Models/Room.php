<?php

/**
 * "StAuth10127: I Akshpreet Singh Punj, 000820040 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else."
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'rooms';

    // Fillable Attributes 
    protected $fillable = ['room_name', 'room_description', 'max_occupancy'];

    // Primary Key
    public $primaryKey = 'id';
}
