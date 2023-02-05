<?php 

namespace App\Helpers;

use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Helper {


    public function __construct() {}

    public static function logs_page($camp,$page){

        try {
            if (($pos = strpos($camp, "=")) !== FALSE) { 
                $get_camp = substr($camp, $pos+1); 
            }

            $log = new Logs;
            $log->camp = $get_camp;
            $log->page = $page;
            $log->save();
        } catch (\Throwable $th) {
            return false;
        }

        return true;
        
    }
}

?> 