<?php

/**
 * "StAuth10127: I Akshpreet Singh Punj, 000820040 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else."
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'bookings';

    // Fillable Attributes 
    protected $fillable = ['room_number', 'guest_name', 'date'];

    // Primary Key
    public $primaryKey = 'id';
}
