<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','contact_first_name','contact_last_name','contact_email','contact_subject','contact_message','created_at'
    ];
}