<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class SubscriptionController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('subscriptions/index');
    }
}
