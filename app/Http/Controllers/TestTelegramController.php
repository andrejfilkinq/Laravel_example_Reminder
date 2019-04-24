<?php

namespace App\Http\Controllers;

//header('refresh: 15');

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use App\library\TelegramStarter;

class TestTelegramController extends Controller
{

    public function index()
    {
        $start = new TelegramStarter;
        $start->starter();
    }

}
