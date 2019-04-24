<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ReminderSendMessages implements ShouldQueue
{

    use Dispatchable,
        InteractsWithQueue,
        Queueable,
        SerializesModels;

    protected $messages;

    public function __construct($messages)
    {
        $this->messages = $messages;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        echo $this->messages;
        $token = "822101817:AAH19rsLVfZ2x8zFnvFzwRhHM6wmHRNWiE4"; //наш токен от telegram bot -а
        $chatid = "404886081"; //ИД чата telegrm
        $mess = "Сообщение отправлено"; //сообщение, которое мы удем оправлять
//    $tbot = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid . "&text=" . urlencode($mess)); //Если нашли ошибку отправляем  сообщение в телеграмм

        for ($i = 0; $i < 10; $i++) {
            $tbot = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid . "&text=" . urlencode($mess));
        }
    }

}
