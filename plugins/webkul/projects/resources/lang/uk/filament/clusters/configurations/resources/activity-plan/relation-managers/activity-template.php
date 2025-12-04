<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Деталі активності',

                'fields' => [
                    'activity-type' => 'Тип активності',
                    'summary'       => 'Опис',
                    'note'          => 'Примітка',
                ],
            ],

            'assignment' => [
                'title' => 'Призначення',

                'fields' => [
                    'assignment' => 'Призначення',
                    'assignee'   => 'Виконавець',
                ],
            ],

            'delay-information' => [
                'title' => 'Інформація про затримку',

                'fields' => [
                    'delay-count'            => 'Кількість затримки',
                    'delay-unit'             => 'Одиниця затримки',
                    'delay-from'             => 'Затримка від',
                    'delay-from-helper-text' => 'Джерело розрахунку затримки',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'Тип активності',
            'summary'       => 'Опис',
            'assignment'    => 'Призначення',
            'assigned-to'   => 'Призначено',
            'interval'      => 'Інтервал',
            'delay-unit'    => 'Одиниця затримки',
            'delay-from'    => 'Затримка від',
            'created-by'    => 'Створено',
            'created-at'    => 'Дата створення',
            'updated-at'    => 'Дата оновлення',
        ],

        'groups' => [
            'activity-type' => 'Тип активності',
            'assignment'    => 'Призначення',
            'assigned-to'   => 'Призначено',
            'interval'      => 'Інтервал',
            'delay-unit'    => 'Одиниця затримки',
            'delay-from'    => 'Затримка від',
            'created-by'    => 'Створено',
            'created-at'    => 'Дата створення',
            'updated-at'    => 'Дата оновлення',
        ],

        'filters' => [
            'activity-type'   => 'Тип активності',
            'activity-status' => 'Статус активності',
            'has-delay'       => 'Є затримка',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Шаблон активності оновлено',
                    'body'  => 'Шаблон активності було успішно оновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Шаблон активності видалено',
                    'body'  => 'Шаблон активності було успішно видалено.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Шаблони активності видалено',
                    'body'  => 'Шаблони активності було успішно видалено.',
                ],
            ],
        ],
    ],
];
