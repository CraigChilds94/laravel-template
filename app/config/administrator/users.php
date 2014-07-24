<?php

/**
 * Users model configuration for the admin panel
 */

return [

    // The name of the Model in title form
    'title' => 'Users',

    // Singular name of the Model
    'single' => 'user',

    // The actual name of the model ie. the classes name
    'model' => 'User',

    // Columns to display
    'columns' => [
        'username' => [
            'title' => 'Username'
        ]
    ],

    // Editable fields
    'edit_fields' => [
        'username' => [
            'title' => 'Username',
            'type' => 'string'
        ]
    ]

];
