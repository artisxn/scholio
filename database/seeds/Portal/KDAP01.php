<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiria19 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;




     /*=============== 1 Νηπιαγωγείο Ντεκρολί ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Νηπιαγωγείο Ντεκρολί, Ωραιόκαστρο', 'email' => 'ntekroli@otenet.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ntekroli'])->id,
         'address' => 'Ωραιόκαστρο, Θεσσαλονίκη',
         'region' => 'Ωραιόκαστρο',
         'city' => 'Θεσσαλονίκη',
         'phone' => 2310696712,
         'type_id' => 9,
         'website' => 'ntekroli.gr',
         'approved' => 1,
         'about' => '
 Ο παιδικός σταθμός – νηπιαγωγείο Ντεκρολί ιδρύθηκε το 1987 από τους εκπαιδευτικούς Νίκο Κυριακίδη και Ειρήνη Αργυριάδου. Το όνομά του το οφείλει στον σημαντικό Βέλγο παιδαγωγό Οβίδιο Ντεκρολί, του οποίου την εκπαιδευτική φιλοσοφία εφαρμόζει από την πρώτη μέρα της λειτουργίας του.
  Αρχικά ο σταθμός στεγάστηκε σε μία μονοκατοικία στον οικισμό Γαλήνη του Ωραιοκάστρου. Σύντομα η μεγάλη αύξηση του αριθμού των παιδιών δημιούργησε την ανάγκη για μεγαλύτερους χώρους. Έτσι, το 1993 το Ντεκρολί μεταφέρθηκε στο κτίριο όπου στεγάζεται και σήμερα, στην ίδια περιοχή.
  Στα 30 χρόνια λειτουργίας του το Ντεκρολί έγινε γνωστό για τα μοναδικά εκπαιδευτικά του προγράμματα και την ποιότητα των υπηρεσιών του, όπως τα προγράμματα ψυχικής υγείας, οι ομάδες γονέων κ.ά., που ανέβασαν ψηλά τον πήχη της προσχολικής εκπαίδευσης στη Θεσσαλονίκη.
  Από το 2014 συνεχίζει τη λειτουργία του υπό νέα διεύθυνση, πάντοτε στο ίδιο πνεύμα και με την ίδια υπευθυνότητα και φροντίδα για το παιδί. Στον καινούργιο αυτό κύκλο λειτουργίας του, νέες δραστηριότητες, με έμφαση στον αθλητισμό, έρχονται να συμπληρώσουν το εκπαιδευτικό πρόγραμμα του Ντεκρολί και να προσφέρουν στο παιδί ένα μεγαλύτερο φάσμα επιλογών
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio', 50);

     Scholio::portalStudy($fake, 'Βρεφικό', '', '');
     Scholio::portalStudy($fake, 'Προνηπιακό', '', '');
    Scholio::portalStudy($fake, 'Νηπιαγωγείο', '', '');
    Scholio::portalStudy($fake, 'Δημιουργική Εκπαίδευση', 'Μαθησιακές Περιοχές', 'Γλώσσα');
    Scholio::portalStudy($fake, 'Δημιουργική Εκπαίδευση', 'Μαθησιακές Περιοχές', 'Φυσικές επιστήμες');
    Scholio::portalStudy($fake, 'Δημιουργική Εκπαίδευση', 'Μαθησιακές Περιοχές', 'Μαθηματικά');
    Scholio::portalStudy($fake, 'Δημιουργική Εκπαίδευση', 'Μαθησιακές Περιοχές', 'Αγγλικά');
    Scholio::portalStudy($fake, 'Δημιουργική Εκπαίδευση', 'Μαθησιακές Περιοχές', 'Τέχνες');

    Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', 'Πηλοπλαστική');
    Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', 'Μικροί Επιστήμονες');
    Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', 'Μονοπάτια της Φύσης');
    Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', 'Μουσική');
    Scholio::portalStudy($fake, 'Δημιουργική Απασχόληση', 'Δραστηριότητες', 'Μαγειρική');











    Scholio::portalSocial($fake, 'facebook', 'facebook.com/ntekroli/');


          /*=============== 2 ================*/


     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
         'address' => '',
         'region' => '',
         'city' => 'Θεσσαλονίκη',
         'phone' => 2310,
         'type_id' => 3,
         'website' => '',
         'approved' => 1,
         'about' => '

            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio', 50);

     Scholio::portalStudy($fake, '', '', '');


//     Scholio::portalSocial($fake, 'facebook', '');

    }



}
