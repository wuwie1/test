<?php

namespace Output\Standardlog;

use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Log;

class Standardlog
{

//    use CommonResponse;

    /**
     * Packagetest constructor
     */
    public function __construct()
    {
    
    }

    /**
     * @param int $code
     * @param array $param
     * @return mixed|string
     */
    public function info()
    {
        echo 'asd info';die;
        Log::channel()->info();
    }
}