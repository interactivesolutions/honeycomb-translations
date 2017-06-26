<?php

return [
    'id'                 => 'ID',
    'name'               => 'Name',
    'description'        => 'Description',
    'copyright'          => '© ' . config ('app.name') . ' ' . \Carbon\Carbon::now ()->year . '.',
    'list'               => 'List',
    'core'               => 'All',
    'unknown_action'     => 'Unknown action:',
    'nothing_to_delete'  => 'Nothing to delete',
    'nothing_to_restore' => 'Nothing to restore',
    'language_not_found' => 'Language not found',
    'label'              => 'Label',
    'title'              => 'Title',
    'index'              => 'Index',
    'filter'             => 'Filter',
    'administration'     => 'Administration',
    'dev_env'            => 'Development environment',
    'general'            => 'General',
    'translations'       => 'Translations',
    'dimensions'         => 'Dimensions',
    'more'               => 'More',
    'users'              => 'Users',
    'seo'                => 'Seo',
    'groups'             => 'Groups',
    'ownership'          => 'Ownership',

    'buttons' => [
        'submit'   => 'Submit',
        'register' => 'Register',
        'cancel'   => 'Cancel',
        'login'    => 'Login',
        'send'     => 'Send',
    ],

    'checkbox' => [
        'yes' => 'Yes',
        'no'  => 'No',
    ],

    'weekdays' => 'Weekdays',
    'weekday'  => [
        'monday'    => 'Monday',
        'tuesday'   => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday'  => 'Thursday',
        'friday'    => 'Friday',
        'saturday'  => 'Saturday',
        'sunday'    => 'Sunday',
    ],
];