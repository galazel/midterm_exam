<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $focuses = [
            [
                'title' => 'Simplicity',
                'message' => 'Keeping code straightforward, minimal,
                            and avoiding unnecessary complexity. Laravel encourages developers to write logic in a way
                            that’s easy to follow.',
                'logo' => '/feather.svg'
            ],
            [
                'title' => 'Readability',
                'message' => 'Other developers can easily understand what the code does
                            without digging through complex logic.
                            Laravel promotes readable syntax and conventions.',
                'logo' => '/eye.svg'
            ],
            [
                'title' => 'Elegance',
                'message' => 'Writing code that is clean,
                            expressive, and aesthetically pleasing, making it easy to understand and work with.',
                'logo' => '/star.svg'
            ],

        ];
        $features = [
            [
                'title' => 'MVC Architecture',
                'message' => 'Separates logic, presentation, and data for cleaner and more maintainable code.',
                'logo' => '/feather.svg'
            ],
            [
                'title' => 'Routing System',
                'message' => 'Defines how URLs map to specific controllers and actions for flexible web routing.',
                'logo' => '/eye.svg'
            ],
            [
                'title' => 'Eloquent ORM',
                'message' => 'Interact with databases using PHP syntax instead of raw SQL, simplifying queries.',
                'logo' => '/star.svg'
            ],

            [
                'title' => 'Blade Template Engine',
                'message' => 'Simplifies the creation of dynamic views with clean and readable syntax.',
                'logo' => '/star.svg'
            ],

            [
                'title' => 'Artisan CLI',
                'message' => 'Automates repetitive tasks with command-line commands for faster development.',
                'logo' => '/star.svg'
            ],

            [
                'title' => 'Security',
                'message' => 'Protects your application against SQL injection, XSS, and CSRF attacks.',
                'logo' => '/star.svg'
            ],

            [
                'title' => 'Authentication & Authorization',
                'message' => 'Simplifies user login, registration, and access control for secure applications.',
                'logo' => '/star.svg'
            ],

            [
                'title' => 'Database Migration & Seeding',
                'message' => 'Manage database schema versioning and seed sample data for development and testing.',
                'logo' => '/star.svg'
            ]

        ];

        return view('home', ['focuses' => $focuses, 'features' => $features]);
    }



}