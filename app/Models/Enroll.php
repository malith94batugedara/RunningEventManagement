<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Run;

class Enroll extends Model
{
    use HasFactory;
    protected $table = 'enrolls';
    protected $fillable = [
          'runner_id',
          'run_id'
    ];

    public function run(){
        return $this->belongsTo(Run::class,'run_id','run_id');
    }

}
