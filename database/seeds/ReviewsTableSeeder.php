<?php

use App\Models\Category;
use App\Models\CategoryReview;
use App\Models\Review;
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
            ['name' => 'Πρόγραμμα Σπουδών', 'type' => 1, 'icon' => 'fa fa-book'],
            ['name' => 'Οργάνωση', 'type' => 1, 'icon' => 'fa fa-cogs'],
            ['name' => 'Ανθρώπινο Δυναμικό', 'type' => 1, 'icon' => 'fa fa-user'],
            ['name' => 'Εγκαταστάσεις', 'type' => 1, 'icon' => 'fa fa-building-o'],
            ['name' => 'Διασύνδεση με αγορά εργασίας', 'type' => 1, 'icon' => 'fa fa-link'],
            ['name' => 'Όμιλοι Ενδιαφέροντος (Clubs)', 'type' => 2, 'icon' => 'fa fa-futbol-o'],
            ['name' => 'Ευέλικτα Τμήματα', 'type' => 2, 'icon' => 'fa fa-calendar'],
            ['name' => 'Ενημέρωση', 'type' => 2, 'icon' => 'fa fa-newspaper-o'],
        ];

        foreach ($categories as $category) {
            $cat = new Category;
            $cat->name = $category['name'];
            $cat->type_id = $category['type'];
            $cat->icon = $category['icon'];
            $cat->save();
        }

        $reviews = [
            ['review' => [1, 24, 'OK'], 'category' => [['id' => 1, 'stars' => 3], ['id' => 2, 'stars' => 5], ['id' => 3, 'stars' => 4], ['id' => 4, 'stars' => 4], ['id' => 5, 'stars' => 3]]],
            ['review' => [1, 25, 'OK'], 'category' => [['id' => 1, 'stars' => 1], ['id' => 2, 'stars' => 1], ['id' => 3, 'stars' => 1], ['id' => 4, 'stars' => 1], ['id' => 5, 'stars' => 1]]],
            ['review' => [1, 26, 'OK'], 'category' => [['id' => 1, 'stars' => 3], ['id' => 2, 'stars' => 2], ['id' => 3, 'stars' => 3], ['id' => 4, 'stars' => 1], ['id' => 5, 'stars' => 4]]],
        ];

        foreach ($reviews as $review) {
            $school = $review['review'][0];
            $user = $review['review'][1];
            $text = $review['review'][2];
            $r = new Review;
            $r->user_id = $user;
            $r->school_id = $school;
            $r->text = $text;
            $r->save();

            $countStars = 0;
            $countCategories = 0;

            foreach ($review['category'] as $category) {
                $id = $category['id'];
                $stars = $category['stars'];

                $catReview = new CategoryReview;
                $catReview->review_id = $r->id;
                $catReview->category_id = $id;
                $catReview->stars = $stars;
                $catReview->save();

                $countStars += $stars;
                $countCategories++;
            }

            $r->average = $countStars / $countCategories;
            $r->save();
        }
    }
}
