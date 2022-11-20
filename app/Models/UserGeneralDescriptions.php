<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGeneralDescriptions extends Model
{
    use HasFactory;

    protected $table = 'user_general_descriptions';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
	'user_id',
	'general_description',
	'skills',
	'experience',
	'courses',
	'computer_skills',
	'created_at',
	'updated_at'
    ];

}
