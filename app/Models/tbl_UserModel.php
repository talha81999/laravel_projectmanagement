<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_UserModel extends Model
{
    use HasFactory;
    protected $table      = "tbl_user";
    protected $primarykey = "user_id";
}
