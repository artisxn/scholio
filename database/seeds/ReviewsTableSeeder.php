<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            // Κολλεγιο
            ['name' => 'Πρόγραμμα Σπουδών', 'type' => [1, 2], 'icon' => 'fa fa-book'],
            ['name' => 'Οργάνωση', 'type' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 'icon' => 'fa fa-cogs'],
            ['name' => 'Ανθρώπινο Δυναμικό', 'type' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 'icon' => 'fa fa-user'],
            ['name' => 'Εγκαταστάσεις', 'type' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 'icon' => 'fa fa-building-o'],
            ['name' => 'Διασύνδεση με αγορά εργασίας', 'type' => [1, 2], 'icon' => 'fa fa-link'],

            // Φροντ - Σχολές
            ['name' => 'Ευέλικτα Τμήματα', 'type' => [3, 4, 10, 11], 'icon' => 'fa fa-calendar'],

            // Φροντ - Λυκειο
            ['name' => 'Όμιλοι Ενδιαφέροντος (Clubs)', 'type' => [6, 7, 8], 'icon' => 'fa fa-futbol-o'],
            ['name' => 'Ενημέρωση', 'type' => [3, 4, 6, 7, 8], 'icon' => 'fa fa-newspaper-o'],

        ];

        foreach ($categories as $category) {
            foreach ($category['type'] as $type) {
                $cat = new Category;
                $cat->name = $category['name'];
                $cat->type_id = $type;
                $cat->icon = $category['icon'];

                $cat->save();
            }
        }
    }
}
