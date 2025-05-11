<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;

class LandingPageController extends Controller
{
    public function __invoke(): \Inertia\Response
    {
        return Inertia::render('index');
    }
}
