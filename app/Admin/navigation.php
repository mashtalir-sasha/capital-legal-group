<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => "Головна сторінка",
        'icon' => 'fas fa-home',
        'priority' => '1',
        'pages' => [
            (new Page(\App\Models\MainNumbers::class))
                ->setIcon('fas fa-list-ol')
                ->setPriority(1)
                ->setTitle('Про нас в цифрах'),
            (new Page(\App\Models\MainAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(2)
                ->setTitle('Про нас'),
            (new Page(\App\Models\MainTeam::class))
                ->setIcon('fas fa-users')
                ->setPriority(3)
                ->setTitle('Команда'),
            (new Page(\App\Models\MainClients::class))
                ->setIcon('fas fa-images')
                ->setPriority(4)
                ->setTitle('Клієнти і партнери'),
            (new Page(\App\Models\MainReviews::class))
                ->setIcon('fas fa-image')
                ->setPriority(5)
                ->setTitle('Відгуки'),
        ]
    ],
    AdminSection::addMenuPage(\App\Models\Contacts::class)
        ->setIcon('fas fa-info')
        ->setPriority(2)
        ->setTitle('Контакти'),
    AdminSection::addMenuPage(\App\Models\Blog::class)
        ->setIcon('fab fa-youtube')
        ->setPriority(3)
        ->setTitle('Відеоматеріали'),
    [
        'title' => "Юридичний аутсорсинг",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '4',
        'pages' => [
            (new Page(\App\Models\JurAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\JurBenefits::class))
                ->setIcon('fas fa-check')
                ->setPriority(2)
                ->setTitle('Переваги'),
            (new Page(\App\Models\JurDirections::class))
                ->setIcon('fas fa-arrow-right')
                ->setPriority(3)
                ->setTitle('Напрямки роботи'),
            (new Page(\App\Models\JurTraif::class))
                ->setIcon('fas fa-dollar-sign')
                ->setPriority(4)
                ->setTitle('Тарифи'),
            (new Page(\App\Models\JurFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(5)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Корпоративне право",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '5',
        'pages' => [
            (new Page(\App\Models\KorpAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\KorpFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(2)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Відкриття бізнесу в Україні",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '6',
        'pages' => [
            (new Page(\App\Models\VidkryttiaAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\VidkryttiaTarif::class))
                ->setIcon('fas fa-dollar-sign')
                ->setPriority(2)
                ->setTitle('Варіанти пропозицій'),
            (new Page(\App\Models\VidkryttiaFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(3)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Купівля готових компаній",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '7',
        'pages' => [
            (new Page(\App\Models\KupivliaBenefits::class))
                ->setIcon('fas fa-check')
                ->setPriority(1)
                ->setTitle('Переваги'),
            (new Page(\App\Models\KupivliaTarif::class))
                ->setIcon('fas fa-dollar-sign')
                ->setPriority(2)
                ->setTitle('Варіанти пропозицій'),
            (new Page(\App\Models\KupivliaFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(3)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Закриття бізнесу в Україні",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '8',
        'pages' => [
            (new Page(\App\Models\ZakryttiaAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\ZakryttiaTarif::class))
                ->setIcon('fas fa-dollar-sign')
                ->setPriority(2)
                ->setTitle('Варіанти пропозицій'),
            (new Page(\App\Models\ZakryttiaFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(3)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Відкриття бізнесу в США",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '9',
        'pages' => [
            (new Page(\App\Models\VidkrUsaLider::class))
                ->setIcon('fas fa-user-tie')
                ->setPriority(1)
                ->setTitle('Керівник напрямку'),
            (new Page(\App\Models\VidkrUsaFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(2)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Податкове право",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '10',
        'pages' => [
            (new Page(\App\Models\PodatkoveAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\PodatkoveFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(2)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Вирішення спорів",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '11',
        'pages' => [
            (new Page(\App\Models\VurAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\VurReceive::class))
                ->setIcon('fas fa-check')
                ->setPriority(2)
                ->setTitle('Що отримуєте'),
            (new Page(\App\Models\VurLider::class))
                ->setIcon('fas fa-user-tie')
                ->setPriority(3)
                ->setTitle('Керівник напрямку'),
            (new Page(\App\Models\VurFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(4)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    [
        'title' => "Досудове врегулювання спорів",
        'icon' => 'fas fa-chevron-circle-down',
        'priority' => '12',
        'pages' => [
            (new Page(\App\Models\DosAbout::class))
                ->setIcon('fas fa-info-circle')
                ->setPriority(1)
                ->setTitle('Про нас'),
            (new Page(\App\Models\DosReceive::class))
                ->setIcon('fas fa-check')
                ->setPriority(2)
                ->setTitle('Що отримуєте'),
            (new Page(\App\Models\DosLider::class))
                ->setIcon('fas fa-user-tie')
                ->setPriority(3)
                ->setTitle('Керівник напрямку'),
            (new Page(\App\Models\DosFaq::class))
                ->setIcon('fas fa-question')
                ->setPriority(4)
                ->setTitle('Питання - відповідь'),
        ]
    ],
    AdminSection::addMenuPage(\App\Models\Oferta::class)
        ->setIcon('fas fa-align-justify')
        ->setPriority(22)
        ->setTitle('Договір оферти'),
    AdminSection::addMenuPage(\App\Models\Konfident::class)
        ->setIcon('fas fa-align-justify')
        ->setPriority(23)
        ->setTitle('Політика конфіден.'),
];
