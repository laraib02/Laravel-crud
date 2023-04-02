<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coustomers extends Model
{
    use HasFactory;
    protected $table = "coustomers";
    protected $primaryKey = "id";
}
