<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ["admin_id", "admin_name", "admin_email", "admin_password", "admin_role", "remember_token", "created_at", "updated_at"];
}
