<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['pname','ptype','start_date','end_date','duration','cost','client','progress','status'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
