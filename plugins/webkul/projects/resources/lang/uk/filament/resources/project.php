<?php

return [
    'navigation' => [
        'title' => 'Проекти',
        'group' => 'Проект',
    ],

    'global-search' => [
        'project-manager' => 'Керівник проекту',
        'customer'        => 'Клієнт',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Загальне',

                'fields' => [
                    'name'             => 'Назва',
                    'name-placeholder' => 'Назва проекту...',
                    'description'      => 'Опис',
                ],
            ],

            'additional' => [
                'title' => 'Додаткова інформація',

                'fields' => [
                    'project-manager'             => 'Керівник проекту',
                    'customer'                    => 'Клієнт',
                    'start-date'                  => 'Дата початку',
                    'end-date'                    => 'Дата завершення',
                    'allocated-hours'             => 'Виділені години',
                    'allocated-hours-helper-text' => 'У годинах (наприклад, 1,5 години означає 1 годину 30 хвилин)',
                    'tags'                        => 'Теги',
                    'company'                     => 'Компанія',
                ],
            ],

            'settings' => [
                'title' => 'Налаштування',

                'fields' => [
                    'visibility'                   => 'Видимість',
                    'visibility-hint-tooltip'      => 'Дозвольте співробітникам отримувати доступ до вашого проекту або завдань, додаючи їх як підписників. Вони автоматично отримають доступ до будь-яких завдань, призначених їм.',
                    'private-description'          => 'Тільки запрошені внутрішні користувачі.',
                    'internal-description'         => 'Всі внутрішні користувачі можуть бачити.',
                    'public-description'           => 'Запрошені користувачі порталу та всі внутрішні користувачі.',
                    'time-management'              => 'Управління часом',
                    'allow-timesheets'             => 'Дозволити табелі обліку часу',
                    'allow-timesheets-helper-text' => 'Реєструйте час на завданнях і відстежуйте прогрес',
                    'task-management'              => 'Управління завданнями',
                    'allow-milestones'             => 'Дозволити етапи',
                    'allow-milestones-helper-text' => 'Відстежуйте ключові етапи, які є важливими для досягнення успіху.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => 'Назва',
            'customer'        => 'Клієнт',
            'start-date'      => 'Дата початку',
            'end-date'        => 'Дата завершення',
            'planned-date'    => 'Запланована дата',
            'remaining-hours' => 'Залишкові години',
            'project-manager' => 'Керівник проекту',
        ],

        'groups' => [
            'stage'           => 'Стадія',
            'project-manager' => 'Керівник проекту',
            'customer'        => 'Клієнт',
            'created-at'      => 'Створено',
        ],

        'filters' => [
            'name'             => 'Назва',
            'visibility'       => 'Видимість',
            'start-date'       => 'Дата початку',
            'end-date'         => 'Дата завершення',
            'allow-timesheets' => 'Дозволити табелі обліку часу',
            'allow-milestones' => 'Дозволити етапи',
            'allocated-hours'  => 'Виділені години',
            'created-at'       => 'Створено',
            'updated-at'       => 'Оновлено',
            'stage'            => 'Стадія',
            'customer'         => 'Клієнт',
            'project-manager'  => 'Керівник проекту',
            'company'          => 'Компанія',
            'creator'          => 'Створювач',
            'tags'             => 'Теги',
        ],

        'actions' => [
            'tasks'      => ':count Завдань',
            'milestones' => ':completed етапів завершено з :all',

            'restore' => [
                'notification' => [
                    'title' => 'Проект відновлено',
                    'body'  => 'Проект було успішно відновлено.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Проект видалено',
                    'body'  => 'Проект було успішно видалено.',
                ],
            ],

            'force-delete' => [

                'notification' => [

                    'success' => [
                        'title' => 'Проект було остаточно видалено',
                        'body'  => 'Проект було остаточно видалено успішно.',
                    ],

                    'error' => [
                        'title' => 'Проект не може бути остаточно видалений',
                        'body'  => 'Проект пов’язаний з іншими записами.',
                    ],

                ],
            ],

        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Загальні',

                'entries' => [
                    'name'             => 'Назва',
                    'name-placeholder' => 'Назва проекту...',
                    'description'      => 'Опис',
                ],
            ],

            'additional' => [
                'title' => 'Додаткова інформація',

                'entries' => [
                    'project-manager'        => 'Керівник проекту',
                    'customer'               => 'Клієнт',
                    'project-timeline'       => 'Термін виконання проекту',
                    'allocated-hours'        => 'Виділені години',
                    'allocated-hours-suffix' => ' Годин',
                    'remaining-hours'        => 'Залишкові години',
                    'remaining-hours-suffix' => ' Годин',
                    'current-stage'          => 'Поточна стадія',
                    'tags'                   => 'Теги',
                ],
            ],

            'statistics' => [
                'title' => 'Статистика',

                'entries' => [
                    'total-tasks'         => 'Всього завдань',
                    'milestones-progress' => 'Прогрес етапів',
                ],
            ],

            'record-information' => [
                'title' => 'Інформація про запис',

                'entries' => [
                    'created-at'   => 'Створено',
                    'created-by'   => 'Створено користувачем',
                    'last-updated' => 'Останнє оновлення',
                ],
            ],

            'settings' => [
                'title' => 'Налаштування проекту',

                'entries' => [
                    'visibility'         => 'Видимість',
                    'timesheets-enabled' => 'Табелі обліку часу увімкнено',
                    'milestones-enabled' => 'Етапи увімкнено',
                ],
            ],
        ],
    ],
];
