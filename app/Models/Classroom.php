<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{
    use HasFactory, HasTranslations;
    protected $table = 'classrooms';

    public $translatable = ['name'];

    protected $fillable= ['stage_id', 'name'];


    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id');
    }

}
