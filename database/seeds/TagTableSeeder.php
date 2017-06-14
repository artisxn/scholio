<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Vegan',
            'For red hat',
            'Swimming Pool',
            'Bar',
            'Sports',
            'Open',
            'Trela',
        ];

        foreach ($tags as $tag) {
            $t = new Tag;
            $t->name = $tag;
            $t->slag = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $tag));
            $t->save();
        }
    }
}
