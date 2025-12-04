<?php

return [
    'navigation' => [
        'title' => 'Теги',
    ],

    'form' => [
        'name'  => 'Назва',
        'color' => 'Колір',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Назва',
            'color'      => 'Колір',
            'created-at' => 'Створено',
            'updated-at' => 'Оновлено',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Тег оновлено',
                    'body'  => 'Тег було успішно оновлено.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Тег відновлено',
                    'body'  => 'Тег було успішно відновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Тег видалено',
                    'body'  => 'Тег було успішно видалено.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Тег остаточно видалено',
                    'body'  => 'Тег було остаточно видалено успішно.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Теги відновлено',
                    'body'  => 'Теги було успішно відновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Теги видалено',
                    'body'  => 'Теги було успішно видалено.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Теги остаточно видалено',
                    'body'  => 'Теги було остаточно видалено успішно.',
                ],
            ],
        ],
    ],
];
