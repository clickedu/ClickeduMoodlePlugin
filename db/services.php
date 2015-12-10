<?php

$functions = array(

    'local_clickedu_get_activities' => array(
        'classname'   => 'local_clickedu_external',
        'methodname'  => 'get_activities',
        'classpath'   => 'local/clickedu/externallib.php',
        'description' => 'Get list of activities in a course.',
        'type'        => 'read',
    ),

    'local_clickedu_get_grades' => array(
        'classname'   => 'local_clickedu_external',
        'methodname'  => 'get_grades',
        'classpath'   => 'local/clickedu/externallib.php',
        'description' => 'Get grades of a grade item.',
        'type'        => 'read',
    ),
);

$services = array(
    'Clickedu' => array(
        'functions' => array_keys($functions),
        'restrictedusers' => true,
        'enabled' => true,
    ),
);
