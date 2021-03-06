<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'files';

    protected $primaryKey = 'file_code';

    protected $fillable = ['file_code','file_name','subsi_code','file','section','type'];

    protected $dates = ['created_at','updated_at','deleted_at'];
}
