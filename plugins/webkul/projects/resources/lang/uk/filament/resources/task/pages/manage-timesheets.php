<?php

return [
    'title' => 'Таймшити',

    'form' => [
        'date'                   => 'Дата',
        'employee'               => 'Співробітник',
        'description'            => 'Опис',
        'time-spent'             => 'Витрачений час',
        'time-spent-helper-text' => 'Витрачений час у годинах (наприклад, 1,5 години означає 1 годину 30 хвилин)',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Додати таймшит',

                'notification' => [
                    'title' => 'Таймшит створено',
                    'body'  => 'Таймшит було успішно створено.',
                ],
            ],
        ],

        'columns' => [
            'date'                   => 'Дата',
            'employee'               => 'Співробітник',
            'description'            => 'Опис',
            'time-spent'             => 'Витрачений час',
            'time-spent-on-subtasks' => 'Витрачений час на підзадачах',
            'total-time-spent'       => 'Загальний витрачений час',
            'remaining-time'         => 'Залишковий час',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Таймшит оновлено',
                    'body'  => 'Таймшит було успішно оновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Таймшит видалено',
                    'body'  => 'Таймшит було успішно видалено.',
                ],
            ],
        ],
    ],
];
