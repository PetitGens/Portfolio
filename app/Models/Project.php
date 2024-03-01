<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $table = 'por_project';
    
    protected $primaryKey = 'pro_id';
    public $incrementing = true;

    public $timestamps = false;

    public function getSkills() : array{
        return DB::table('por_usage')
            ->join('por_skill', 'por_usage.ski_id', '=', 'por_skill.ski_id')
            ->where('pro_id', $this->pro_id)
            ->get()
            ->toArray();
    }

    public static function getFromName(string $name): Project {
        return Project::where('pro_name', $name)->first();
    }
}
