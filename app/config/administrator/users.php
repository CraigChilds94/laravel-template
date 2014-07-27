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
        ],
        'acl' => [
            'title' => 'Access Control'
        ],
        'created_at' => [
            'title' => 'Created At'
        ],
        'updated_at' => [
            'title' => 'Updated At'
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
        ],
        'acl' => [
            'title' => 'Access Control',
            'type' => 'enum',
            'options' => [
                'admin',
                'user',
                'contributer'
            ]
        ]
    ],

    // Filters
    'filters' => [
        'username' => [
            'title' => 'Username'
        ]
    ],

    // Set the width of the form
    'form_width' => 550,

    // Set the permissions for this section
    'permission' => function()
    {
        return Auth::user()->isAdmin();
    }

];
