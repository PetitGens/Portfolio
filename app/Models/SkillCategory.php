<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    use HasFactory;

    protected $table = 'por_skill_category';

    protected $primaryKey = 'skicat_code';
    protected $keyType = 'string';

    public $timestamps = false;
}
