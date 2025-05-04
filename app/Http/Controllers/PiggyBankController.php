<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PiggyBankController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('piggy-banks/index');
    }
}
