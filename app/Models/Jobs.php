<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    const NOT_DELETED = NULL;
    const DELETED = !NULL;

    protected $connection = 'mysql';
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
}
