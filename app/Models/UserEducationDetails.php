<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducationDetails extends Model
{
    use HasFactory;

    protected $table = 'user_education_details';
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
	'certificate_degree_name',
	'university',
	'specialty',
	'starting_date',
	'completion_date',
	'cgpa',
	'created_at',
	'updated_at'
    ];


}
