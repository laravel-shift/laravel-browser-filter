<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blocked devices, browsers and/or versions
    |--------------------------------------------------------------------------
    |
    | This array defines the items to be filtered out when a request is made
    | to all routes.  There is a three level structure to the array where it
    | goes device -> browser -> version.  The device string can be "Mobile",
    | "Other", or "Tablet" as defined by UAParser\Parser. You can define an
    | array of specific browser names that you are targeting or use "*" to
    | block all browsers of that device type.  At the final level, you can
    | define an array of comparison operators to use for that specific browser
    | or you can use a "*" to block all versions of that browser.  We are
    | using php's version_compare function...
    |
    |      @link http://php.net/manual/en/function.version-compare.php
    |
    | so you can see the operations documented there.
    |
    | Here is an example...
    |
    | 'blocked' => [
    |     'Mobile' => '*',
    |     'Other'  => [
    |         'IE'    => '*',
    |     ],
    |     'Tablet' => [
    |         'Opera' => [
    |             '<' => '6',
    |         ]
    |     ],
    | ],
    |
    | In this example, we are blocking the following...
    |
    |     * All mobile devices
    |     * All versions of IE that is not on a tablet
    |     * Any version of Opera less than 6 on a tablet
    */
    'blocked' => [
        'Mobile' => [],
        'Other'  => [],
        'Tablet' => [],
    ],

];
