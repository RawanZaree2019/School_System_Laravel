<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasFactory, HasTranslations;
    public $translatable= ['name'];

    protected $fillable= ['name', 'stage_id', 'classroom_id'];

    public function stages()
    {
        return $this->belongsTo(Stage::class, 'stage_id');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

}
