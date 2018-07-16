<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiria4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*=============== 1 Μαθητεία ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Μαθητεία', 'email' => 'info@mathiteia.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'mathiteia'])->id,
            'address' => 'Πολυτεχνίου 45, Νέα Ραιδεστός',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310462071,
            'type_id' => 3,
            'website' => 'mathiteia.edu.gr',
            'approved' => 1,
            'about' => '
            Ομάδες Προσανατολισμού Γ΄Λυκείου. Τμήματα Γυμνασίου, Α΄ και Β΄Λυκείου και Αποφοίτων.

            -Προετοιμασία για την εισαγωγή στις Ανώτατες και Ανώτερες Σχολές
            -Προσανατολισμοί Γ΄Λυκείου
            -Τμήματα Γυμνασίου, Α΄ Λυκείου, Β΄Λυκείου, Αποφοίτων
            ',
            'background' => $background,
        ]);

        new Portal($fake, 7, 'frontistirio');

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/mathiteia1');
//        Scholio::portalSocial($fake, 'instagram', 'https://www.instagram.com/');
//        Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/');




        /*=============== 2  ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310,
            'type_id' => 3,
            'website' => '',
            'approved' => 1,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio');

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

//        Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/');
//        Scholio::portalSocial($fake, 'instagram', 'https://www.instagram.com/');
//        Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/');

    }

}
