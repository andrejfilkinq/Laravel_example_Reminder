<?php

use App\Jobs\ReminderSendMessages;
use Illuminate\Bus\Queueable;

Route::get('/', function () {
//    return view('welcome');

    return view('welcome');
});

//Route::get('/send', function () {
//    $data = file_get_contents('https://api.telegram.org/bot822101817:AAH19rsLVfZ2x8zFnvFzwRhHM6wmHRNWiE4/sendMessage?chat_id=404886081&text=lol');
//
//    dd($data);
//------------------------------------------------------
//    $token = "822101817:AAH19rsLVfZ2x8zFnvFzwRhHM6wmHRNWiE4"; //наш токен от telegram bot -а
//    $chatid = "404886081"; //ИД чата telegrm
//    $mess = "Сообщение отправлено"; //сообщение, которое мы удем оправлять
////    $tbot = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid . "&text=" . urlencode($mess)); //Если нашли ошибку отправляем  сообщение в телеграмм
//
//    for ($i = 0; $i < 10; $i++) {
//        $tbot = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid . "&text=" . urlencode($mess));
//    }
//});

Route::get('/send', 'TestTelegramController@index');
