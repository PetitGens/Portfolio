<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'por_skill';

    protected $primaryKey = 'ski_id';
    protected $keyType = 'int';
    public $incrementing = true;

    public $timestamps = false;

    public static function getFromName(string $name): Skill{
        return Skill::where('ski_name', $name)->first();
    }
}
