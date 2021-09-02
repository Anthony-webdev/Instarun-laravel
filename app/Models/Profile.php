<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/7C2W3cKI2NVZCQuOcLa1Rj0mZc93skRTtJW573mz.jpg';
        return '/storage/' . $imagePath;
    }
    public function user ()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
