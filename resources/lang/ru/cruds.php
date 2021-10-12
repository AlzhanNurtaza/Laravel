<?php

return [
    'userManagement' => [
        'title'          => 'Управление пользователями',
        'title_singular' => 'Управление пользователями',
    ],
    'permission' => [
        'title'          => 'Разрешения',
        'title_singular' => 'Разрешение',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Роли',
        'title_singular' => 'Роль',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Пользователи',
        'title_singular' => 'Пользователь',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'kpiGeneral' => [
        'title'          => 'КПД Ген. директора',
        'title_singular' => 'КПД Ген. директора',
    ],
    'kpiGenAnpz' => [
        'title'          => 'АНПЗ',
        'title_singular' => 'АНПЗ',
    ],
    'kpiGenPnhz' => [
        'title'          => 'ПНХЗ',
        'title_singular' => 'ПНХЗ',
    ],
    'kpiGenPkop' => [
        'title'          => 'ПКОП',
        'title_singular' => 'ПКОП',
    ],
    'kpiGenCB' => [
        'title'          => 'КБ',
        'title_singular' => 'КБ',
    ],
    'kpiZpp' => [
        'title'          => 'КПД ЗПП',
        'title_singular' => 'КПД ЗПП',
    ],
    'kpiKlpe' => [
        'title'          => 'KLPE',
        'title_singular' => 'KLPE',
    ],
    'kpiKpi' => [
        'title'          => 'KPI',
        'title_singular' => 'KPI',
    ],
];
