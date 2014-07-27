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
        'id' => [
            'title' => 'ID'
        ],
        'username' => [
            'title' => 'Username'
        ],
        'email' => [
            'title' => 'Email'
        ]
    ],

    // Editable fields
    'edit_fields' => [
        'username' => [
            'title' => 'Username',
            'type' => 'text'
        ],
        'password' => [
            'title' => 'Password',
            'type' => 'password'
        ],
        'email' => [
            'title' => 'Email',
            'type' => 'text'
        ]
    ],

    // Filters
    'filters' => [
        'username' => [
            'title' => 'Username'
        ]
    ],

    // Set the width of the form
    'form_width' => 550

];
