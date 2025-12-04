<?php

return [
    'title' => 'Завдання',

    'header-actions' => [
        'create' => [
            'label' => 'Нове завдання',
        ],
    ],

    'table' => [
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Завдання відновлено',
                    'body'  => 'Завдання було успішно відновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Завдання видалено',
                    'body'  => 'Завдання було успішно видалено.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Завдання остаточно видалено',
                    'body'  => 'Завдання було остаточно видалено успішно.',
                ],
            ],
        ],
    ],

    'tabs' => [
        'open-tasks'       => 'Активні завдання',
        'my-tasks'         => 'Мої завдання',
        'unassigned-tasks' => 'Непризначені завдання',
        'closed-tasks'     => 'Закриті завдання',
        'starred-tasks'    => 'Відзначені завдання',
        'archived-tasks'   => 'Архівовані завдання',
    ],
];
