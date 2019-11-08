<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $profileImagePath = '';

        if($this->image) {
            $profileImagePath = '/storage/' . $this->image;
        } else {
            $profileImagePath = '/images/defaults/user.png';
        }

        return $profileImagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
