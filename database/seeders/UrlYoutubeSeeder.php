<?php

namespace Database\Seeders;

use App\Models\Url_Youtube;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UrlYoutubeSeeder extends Seeder
{
    public function run()
    {

        Url_Youtube::create([
            'thumbnail' => 'profile.png',
            'name' => 'Makan sup buntut',
            'slug' => 'Makan sup buntut',
            'tag_video' => 'https://www.youtube.com/embed/slvfMym2tY4',
            'iframe_video' => 'https://www.youtube.com/embed/slvfMym2tY4',
        ]);
        Url_Youtube::create([
            'thumbnail' => 'profile.png',
            'name' => 'Leonel messi',
            'slug' => 'leonal messi',
            'tag_video' => 'https://www.youtube.com/embed/VE3bJIC9Swk',
            'iframe_video' => 'https://www.youtube.com/embed/VE3bJIC9Swk',
        ]);
    }
}
