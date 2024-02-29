<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'por_project';
    
    protected $primaryKey = 'pro_id';
    public $incrementing = true;

    public $timestamps = false;

    public static function getFromName(string $name): Project {
        return Project::where('pro_name', $name)->first();
    }
}
