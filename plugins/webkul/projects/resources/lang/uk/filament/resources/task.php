<?php

return [
    'title' => 'Задачі',

    'navigation' => [
        'title' => 'Задачі',
        'group' => 'Проект',
    ],

    'global-search' => [
        'project'   => 'Проект',
        'customer'  => 'Клієнт',
        'milestone' => 'Етап',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Загальне',

                'fields' => [
                    'title'             => 'Назва',
                    'title-placeholder' => 'Назва задачі...',
                    'tags'              => 'Теги',
                    'name'              => 'Ім\'я',
                    'color'             => 'Колір',
                    'description'       => 'Опис',
                    'project'           => 'Проект',
                    'status'            => 'Статус',
                    'start_date'        => 'Дата початку',
                    'end_date'          => 'Дата завершення',
                ],
            ],

            'additional' => [
                'title' => 'Додаткова інформація',
            ],

            'settings' => [
                'title' => 'Налаштування',
                'fields' => [
                    'project'                     => 'Проект',
                    'milestone'                   => 'Етап',
                    'milestone-hint-text'         => 'Автоматично доставляйте свої послуги при досягненні етапу, пов’язуючи його з елементом замовлення на продаж.',
                    'name'                        => 'Ім\'я',
                    'deadline'                    => 'Крайній термін',
                    'is-completed'                => 'Виконано',
                    'customer'                    => 'Клієнт',
                    'assignees'                   => 'Виконавці',
                    'allocated-hours'             => 'Виділені години',
                    'allocated-hours-helper-text' => 'У годинах (наприклад, 1,5 години означає 1 годину 30 хвилин)',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                  => 'ID',
            'priority'            => 'Пріоритет',
            'state'               => 'Стан',
            'new-state'           => 'Новий стан',
            'update-state'        => 'Оновити стан',
            'title'               => 'Назва',
            'project'             => 'Проект',
            'project-placeholder' => 'Приватна задача',
            'milestone'           => 'Етап',
            'customer'            => 'Клієнт',
            'assignees'           => 'Виконавці',
            'allocated-time'      => 'Виділений час',
            'time-spent'          => 'Витрачений час',
            'time-remaining'      => 'Залишковий час',
            'progress'            => 'Прогрес',
            'deadline'            => 'Крайній термін',
            'tags'                => 'Теги',
            'stage'               => 'Стадія',
        ],

        'groups' => [
            'state'      => 'Стан',
            'project'    => 'Проект',
            'milestone'  => 'Етап',
            'customer'   => 'Клієнт',
            'deadline'   => 'Крайній термін',
            'stage'      => 'Стадія',
            'created-at' => 'Створено',
        ],

        'filters' => [
            'title'             => 'Назва',
            'priority'          => 'Пріоритет',
            'low'               => 'Низький',
            'high'              => 'Високий',
            'state'             => 'Стан',
            'tags'              => 'Теги',
            'allocated-hours'   => 'Виділені години',
            'total-hours-spent' => 'Всього витрачено годин',
            'remaining-hours'   => 'Залишкові години',
            'overtime'          => 'Переробка',
            'progress'          => 'Прогрес',
            'deadline'          => 'Крайній термін',
            'created-at'        => 'Створено',
            'updated-at'        => 'Оновлено',
            'assignees'         => 'Виконавці',
            'customer'          => 'Клієнт',
            'project'           => 'Проект',
            'stage'             => 'Стадія',
            'milestone'         => 'Етап',
            'company'           => 'Компанія',
            'creator'           => 'Створювач',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Задача відновлена',
                    'body'  => 'Задача була успішно відновлена.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Задача видалена',
                    'body'  => 'Задача була успішно видалена.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Задача примусово видалена',
                    'body'  => 'Задача була успішно примусово видалена.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Задачі відновлені',
                    'body'  => 'Задачі були успішно відновлені.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Задачі видалені',
                    'body'  => 'Задачі були успішно видалені.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Задачі примусово видалені',
                    'body'  => 'Задачі були успішно примусово видалені.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Загальне',

                'entries' => [
                    'title'       => 'Назва',
                    'state'       => 'Стан',
                    'tags'        => 'Теги',
                    'priority'    => 'Пріоритет',
                    'description' => 'Опис',
                ],
            ],

            'project-information' => [
                'title' => 'Інформація про проект',

                'entries' => [
                    'project'   => 'Проект',
                    'milestone' => 'Етап',
                    'customer'  => 'Клієнт',
                    'assignees' => 'Виконавці',
                    'deadline'  => 'Крайній термін',
                    'stage'     => 'Стадія',
                ],
            ],

            'time-tracking' => [
                'title' => 'Відстеження часу',

                'entries' => [
                    'allocated-time'        => 'Виділений час',
                    'time-spent'            => 'Витрачений час',
                    'time-spent-suffix'     => ' Години',
                    'time-remaining'        => 'Залишився час',
                    'time-remaining-suffix' => ' Години',
                    'progress'              => 'Прогрес',
                ],
            ],

            'additional-information' => [
                'title' => 'Додаткова інформація',
            ],

            'record-information' => [
                'title' => 'Інформація про запис',
                'entries' => [
                    'created-at'   => 'Створено',
                    'created-by'   => 'Створено користувачем',
                    'last-updated' => 'Останнє оновлення',
                ],
            ],

            'statistics' => [
                'title' => 'Статистика',

                'entries' => [
                    'sub-tasks'         => 'Підзадачі',
                    'timesheet-entries' => 'Записи табеля',
                ],
            ],
        ],
    ],
];
