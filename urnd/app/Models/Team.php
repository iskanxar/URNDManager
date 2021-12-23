<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = ['tname','leader_name','member1_name','member2_name','member3_name'];

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
