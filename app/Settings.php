<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'home_img_url',
        'home_heading',
        'home_subheading',
        'about_img_url',
        'about_heading',
        'about_subheading',
        'contact_img_url',
        'contact_heading',
        'contact_subheading',
        'social_links',
        'copyright_text',
    ];
}
