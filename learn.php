<?php

return [
    [
        'name' => 'Basic Terminal Commands',
        'links' => [
            'Treehouse Article' => 'https://blog.teamtreehouse.com/introduction-to-the-mac-os-x-command-line',
            'Codecademy Course' => 'https://www.codecademy.com/courses/learn-the-command-line/lessons/navigation/exercises/your-first-command?action=resume_content_item',
        ],
    ],
    [
        'name' => 'HTML',
        'links' => [
            'HTML Reference' => 'https://htmlreference.io/',
            'TraversyMedia HTML Crash Course' => 'https://www.youtube.com/watch?v=UB1O30fR-EE',
        ],
    ],
    [
        'name' => 'CSS',
        'links' => [
            'CSS Reference' => 'https://cssreference.io/',
            'TraversyMedia CSS Crash Course' => 'https://www.youtube.com/watch?v=yfoY53QXEnI',
        ],
    ],
    [
        'name' => 'Git',
        'links' => [
            'Git Tower eBook &amp; Video' => 'https://www.git-tower.com/learn/',
        ],
    ],
    [
        'name' => 'Local PHP Environment',
        'children' => [
            [
                'name' => 'Valet',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/valet',
                    'Laracasts Video' => 'https://laracasts.com/series/setup-a-mac-dev-machine-from-scratch/episodes/10',
                ],
            ],
            [
                'name' => 'Composer',
                'links' => [
                    'Laracasts Video' => 'https://laracasts.com/series/setup-a-mac-dev-machine-from-scratch/episodes/6',
                ],
            ],
        ],
    ],
    [
        'name' => 'Beginning PHP',
        'children' => [
            [
                'name' => 'Variables',
                'links' => [
                    'Laracasts Video' => 'https://laracasts.com/series/php-for-beginners/episodes/3',
                ],
            ],
            [
                'name' => 'Arrays',
                'links' => [
                    'Laracasts Video' => 'https://laracasts.com/series/php-for-beginners/episodes/6',
                ],
            ],
            [
                'name' => 'Control Structures',
                'links' => [
                    'PHP Manual' => 'https://www.php.net/manual/en/control-structures.intro.php',
                ],
            ],
            [
                'name' => 'Functions',
                'links' => [
                    'Laracasts Video' => 'https://laracasts.com/series/php-for-beginners/episodes/10',
                ],
            ],
            [
                'name' => 'Classes',
                'links' => [
                    'Laracasts Video' => 'https://laracasts.com/series/php-for-beginners/episodes/12',
                ],
            ],
            [
                'name' => 'Constructors',
            ],
            [
                'name' => 'Basic Inheritance',
            ],
        ],
    ],
    [
        'name' => 'Object-Oriented Programming',
        'links' => [
            'Laracasts Video' => 'https://laracasts.com/series/object-oriented-bootcamp-in-php',
        ],
    ],
    [
        'name' => 'Intermediate PHP',
        'children' => [
            [
                'name' => 'Working with Dates',
                'links' => [
                    'Unix Timestamps' => '',
                    'DateTime' => '',
                    'Carbon' => '',
                ],
            ],
            //
        ]
    ],
    [
        'name' => 'Laravel Primer: Fundamental Concepts of PHP Application Development',
        'children' => [
            [
                'name' => 'Cookies',
                'links' => [
                    'PHP Manual' => 'https://www.php.net/manual/en/features.cookies.php',
                    'Laravel Docs' => '',
                ]
            ],
            [
                'name' => 'Sessions',
                'links' => [
                    'PHP Manual' => 'https://www.php.net/manual/en/intro.session.php',
                    'Laravel Docs' => '',
                ]
            ],
            [
                // TODO: Refactor this
                'name' => 'Requests & Form Processing',
                'links' => [
                    'Laravel Docs: Requests' => 'https://laravel.com/docs/5.8/requests',
                    'GET vs POST' => 'https://www.tutorialspoint.com/php/php_get_post',
                    'PHP Manual: POST method uploads' => 'https://www.php.net/manual/en/features.file-upload.post-method.php',
                    'PHP Manual FAQ: PHP and HTML' => 'https://www.php.net/manual/en/faq.html.php',
                    'AJAX (TODO: Replace)' => 'https://code.tutsplus.com/tutorials/how-to-use-ajax-in-php-and-jquery--cms-32494'
                ]
            ],
            [
                'name' => 'Safe Password Hashing',
                'links' => [
                    'PHP Manual FAQ' => 'https://php.net/manual/en/faq.passwords.php',
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/hashing',
                ],
            ],
        ]
    ],
    [
        'name' => 'Creating and serving a new Laravel project',
        'links' => [
            'Laravel Docs' => 'https://laravel.com/docs/installation',
            'Laracasts Video' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/2',
        ],
    ],
    [
        'name' => 'Laravel Basics',
        'links' => [
            'Laracasts Series' => 'https://laracasts.com/series/laravel-from-scratch-2018',
        ],
        'children' => [
            [
                'name' => 'Laravel Routing &amp; HTTP Verbs (using route closures)',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/routing',
                    'Laracasts Video' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/3',
                ],
            ],
            [
                'name' => 'Blade Syntax &amp; Inheritance',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/blade',
                    'Laracasts Video: Blade Layout Files' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/4',
                    'Laracasts Video: Sending Data to Your Views' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/5',
                ],
            ],
            [
                'name' => 'Relational Databases',
                'links' => [
                    'Servers for Hackers Video' => 'https://serversforhackers.com/s/up-and-running-with-mysql',
                    'Khan Academy Article' => 'https://www.khanacademy.org/computing/computer-programming/sql',
                    'W3 Schools Exercise' => 'https://www.w3schools.com/sql/exercise.asp?filename=exercise_select1',
                    'Laracasts Video' => 'https://laracasts.com/series/php-for-beginners/episodes/11',
                ],
            ],
            [
                'name' => 'Basic migrations',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/migrations',
                    'Laracasts Video' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/7',
                ],
            ],
            [
                'name' => 'Basic Eloquent syntax',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/eloquent',
                    'Laracasts Video' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/8',
                ],
            ],
            [
                'name' => 'CSRF',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/csrf',
                    'Laracasts Video' => 'https://laracasts.com/series/laravel-from-scratch-2018/episodes/10',
                ],
            ],
            [
                'name' => 'Validation',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/validation',
                ],
            ],
            [
                'name' => 'Sending mail',
                'links' => [
                    'Laravel Docs: Mail' => 'https://laravel.com/docs/5.8/mail',
                    'Laravel Docs: Notifications' => 'https://laravel.com/docs/5.8/notifications',
                ],
            ],
            [
                'name' => 'Service Container',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/container',
                ],
            ],
            [
                'name' => 'Authentication',
                'links' => [
                    'Laravel Docs' => 'https://laravel.com/docs/5.8/authentication',
                ]
            ]
        ],
    ],
    [
        'name' => 'Basic JavaScript',
        'links' => [
            'Wes Bos Video Series' => 'https://javascript30.com/',
            'TraversyMedia JavaScript Crash Course' => 'https://www.youtube.com/watch?v=hdI2bqOjy3c',
        ],
    ],
    [
        'name' => 'Laravel Mix',
        'links' => [
            'Laracasts Series' => 'https://laracasts.com/series/learn-laravel-mix',
        ],
    ],
    [
        'name' => 'Basic session-backed internal APIs',
    ],
    [
        'name' => 'Deployments',
    ],
    [
        'name' => 'Monitoring (e.g. Bugsnag)',
    ],
];
