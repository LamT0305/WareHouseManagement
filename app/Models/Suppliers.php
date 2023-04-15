<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'address'];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
