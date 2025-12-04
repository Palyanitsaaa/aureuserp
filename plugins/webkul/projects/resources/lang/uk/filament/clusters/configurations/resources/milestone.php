<?php

return [
    'navigation' => [
        'title' => 'Етапи',
    ],

    'form' => [
        'name'         => 'Назва',
        'deadline'     => 'Крайній термін',
        'is-completed' => 'Виконано',
        'project'      => 'Проєкт',
    ],

    'table' => [
        'columns' => [
            'name'         => 'Назва',
            'deadline'     => 'Крайній термін',
            'is-completed' => 'Виконано',
            'completed-at' => 'Завершено',
            'project'      => 'Проєкт',
            'creator'      => 'Створювач',
            'created-at'   => 'Створено',
            'updated-at'   => 'Оновлено',
        ],

        'groups' => [
            'name'         => 'Назва',
            'is-completed' => 'Виконано',
            'project'      => 'Проєкт',
            'created-at'   => 'Створено',
        ],

        'filters' => [
            'is-completed' => 'Виконано',
            'project'      => 'Проєкт',
            'creator'      => 'Створювач',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Етап оновлено',
                    'body'  => 'Етап було успішно оновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Етап видалено',
                    'body'  => 'Етап було успішно видалено.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Етапи видалено',
                    'body'  => 'Етапи було успішно видалено.',
                ],
            ],
        ],
    ],
];
