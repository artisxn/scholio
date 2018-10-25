<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ScholioGreeklishFacade extends Facade {
    protected static function getFacadeAccessor() { 
        return 'ScholioGreeklish'; 
    } 
}