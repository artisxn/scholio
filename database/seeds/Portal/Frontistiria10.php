<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiri10 extends Seeder
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

//     $fake = factory(App\Models\School::class)->create([
//         'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
//         'address' => '',
//         'city' => 'Αθήνα',
//         'phone' => 210,
//         'type_id' => 3,
//         'website' => '',
//         'approved' => 1,
//         'about' => '
//
//            ',
//         'background' => $background,
//     ]);
//
//     new Portal($fake, 5, 'frontistirio');
//
//     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
//     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
//     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
//     Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
//     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
//     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
//     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
//     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
//     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

//       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/');
//       Scholio::portalSocial($fake, 'instagram', 'https://www.instagram.com/');
//       Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/'





     /*=============== 2 ================*/

//     $fake = factory(App\Models\School::class)->create([
//         'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
//         'address' => '',
//         'city' => 'Αθήνα',
//         'phone' => 210,
//         'type_id' => 3,
//         'website' => '',
//         'approved' => 1,
//         'about' => '
//
//            ',
//         'background' => $background,
//     ]);
//
//     new Portal($fake, 5, 'frontistirio');
//
//     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
//     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
//     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
//     Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
//     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
//     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
//     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
//     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
//     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

//       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/');
//       Scholio::portalSocial($fake, 'instagram', 'https://www.instagram.com/');
//       Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/'



    }



}
