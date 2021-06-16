<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recovery extends Model
{
    use HasFactory;
    protected $table ="recoveries";

    protected $fillable = ["user_id","code","expiration_date"];

}
