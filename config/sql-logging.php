<?php
return [

    /*
      |--------------------------------------------------------------------------
      | SQL logging enable
      |--------------------------------------------------------------------------
      |
      | Enable or disable the SQL logging
      |
     */

    'log' => env('SQL_LOG', true),
    'log_request' => env('SQL_LOG_REQUEST', true),
];