<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Eurognosi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============   NAFPLIO   ================*/
        $nafplio = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΕΥΡΩΓΝΩΣΗ – EuroL@b Ναύπλιο', 'email' => 'nafplio@eurognosi.info', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'eurognosinafplio'])->id,
            'address' => 'Μεσσολογγίου 50',
            'city' => 'Ναύπλιο',
            'phone' => 2752027808,
            'type_id' => 4,
            'website' => 'www.eurognosi.com',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        new Portal($robotsetgo, 5, 'kdap');

        Scholio::portalStudy($robotsetgo, 'Τμήμα Προσχολικής Ηλικίας', 'Εκπαιδευτική Ρομποτική', 'Ρομποτική με Bee-Bot®', 'http://www.robotsetgo.gr/product/%CF%80%CF%81%CE%BF%CF%83%CF%87%CE%BF%CE%BB%CE%B9%CE%BA%CE%AE-%CE%B7%CE%BB%CE%B9%CE%BA%CE%AF%CE%B1/');

        Scholio::portalSocial($robotsetgo, 'facebook', 'https://www.facebook.com/robotsetgo/?fref=ts');
        Scholio::portalSocial($robotsetgo, 'instagram', 'https://www.instagram.com/robot_set_go/');
        Scholio::portalSocial($robotsetgo, 'google', 'https://plus.google.com/110353112033208285923');
        Scholio::portalSocial($robotsetgo, 'youtube', 'https://www.youtube.com/channel/UCxSRrd4JBJCL7hzwWcaPpAQ');
        
    }
}
