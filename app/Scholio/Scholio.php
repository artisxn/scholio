<?php

namespace App\Scholio;

use App\Models\Image;
use App\Models\Scholarship;
use App\Models\School;
use App\User;
use Illuminate\Support\Facades\Route;

class Scholio
{
    public static function panelRoutes()
    {
        if (app()->environment('local')) {
            include 'development-routes.php';
        }

        Route::get('/dashboard', function () {
            return redirect('/panel/dashboard');
        });

        Route::get('/panel/dashboard', 'AdminPanelController@index');

        Route::get('/panel/notifications', 'AdminPanelController@notifications');

        Route::get('/panel/allusers', 'AdminPanelController@allUsers');

        Route::get('/panel/schools', 'AdminPanelController@schools');

        Route::get('/panel/profile', 'AdminPanelController@profile');

        Route::group(['middleware' => 'auth', 'prefix' => 'panel/users'], function () {
            include 'user-routes.php';
        });

        Route::group(['middleware' => 'auth', 'prefix' => 'panel/school'], function () {
            include 'school-routes.php';
        });

        Route::group(['middleware' => 'admin', 'prefix' => 'panel/admin'], function () {
            include 'admin-routes.php';
        });
    }

    public function interested($studentID, $scholarshipID)
    {
        $student = User::find($studentID);
        $scholarship = Scholarship::find($scholarshipID);
        $student->interested()->toggle($scholarship);
    }

    public function createImages($school, $path, $from, $until)
    {
        for ($i = $from; $i <= $until; $i++) {
            $image = factory(Image::class)->create(['type' => 'Image', 'path' => $path . 'pic' . $i . '.jpg', 'full_path' => $path . 'pic' . $i . '.jpg']);
            $school->image()->toggle($image);
        }
    }

    public function createStudy($school, $id)
    {
        foreach ($id as $key) {
            $school->study()->attach(Study::find($key));
        }
    }

    public function createUsers($school, $type, $id)
    {
        if ($type == 'student') {
            foreach ($id as $key) {
                $school->users()->toggle(User::find($key));
            }
        } else {
            foreach ($id as $key) {
                $school->users()->toggle(User::find($key));
            }
        }
    }

    public function connectUserWithSchool(School $school, User $user)
    {
        $school->users()->toggle($user);
    }
}
