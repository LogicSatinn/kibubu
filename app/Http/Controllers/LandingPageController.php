<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LandingPageController extends Controller
{
    public function __invoke(): \Inertia\Response
    {
        return Inertia::render('Index');
    }
}
