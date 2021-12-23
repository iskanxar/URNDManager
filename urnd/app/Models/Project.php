<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = ['pname','ptype','start_date','end_date','duration','cost','client','progress','status','leader_name'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function teams(){
        return $this->belongsTo(Team::class);
    }
}
