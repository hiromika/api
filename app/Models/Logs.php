<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
     /**
     * Set tablename.
     *
     */
    protected $table = 'logs';
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'camp',
        'page',
    ];

    /**
     * Set timestamps true for created_at and updated_at.
     *
     * @var array
     */
	public $timestamps = true;
}
