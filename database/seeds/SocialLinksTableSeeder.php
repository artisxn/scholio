<?php

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [
            'facebook',
            'twitter',
            'google',
            'instagram',
            'youtube',
            'snapchat',
            'linkedIn',
            'skype',
            'github',
            'bitbucket',
            'gitlab',
            'stackOverflow',
            'dribbble',
            'tumblr',
            'viber',
            'vk',
            'pinterest',
            'telegram',
            'reddit',
            'foursqare',
            'mySpace',
            'stumbleUpon',
            'flickr',
            'meetup',
        ];

        foreach ($socials as $media) {
            $social = new SocialLink;
            $social->name = $media;
            $social->save();
        }

    }
}
