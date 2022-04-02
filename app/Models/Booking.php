<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

     // Table Name
     protected $table = 'bookings';

     //protected $fillable = ['room_name', 'room_description' , 'max_occupancy'];
 
     // Primary Key
     public $primaryKey = 'id';
}
