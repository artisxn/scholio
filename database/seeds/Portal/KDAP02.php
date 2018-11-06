<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Kdap02 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;



       /*=============== 1 ================*/


        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'region' => '',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310,
            'type_id' => 9,
            'website' => '',
            'approved' => 1,
            'ranking'=>50,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'kdap');

        Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', '');
        Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', '');
        Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', '');

//     Scholio::portalSocial($fake, 'facebook', '');



    }
}
