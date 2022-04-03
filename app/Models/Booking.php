<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'bookings';

    protected $fillable = ['room_number', 'guest_name', 'date'];

    // Primary Key
    public $primaryKey = 'id';
}
