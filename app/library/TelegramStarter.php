<?php

namespace App\library;

use App\library\FindTextInFile;

class TelegramStarter
{

    public function starter()
    {
        $findTextFile = new FindTextInFile();

        $sec = "5";
        header("Refresh: $sec;");



        $get_updates = file_get_contents("https://api.telegram.org/bot822101817:AAH19rsLVfZ2x8zFnvFzwRhHM6wmHRNWiE4/getUpdates");
        echo '<pre>';



        $get_updates = json_decode($get_updates, TRUE);
//        print_r($get_updates);
        $results = $get_updates['result'];
        $last_update_number = count($results) - 1;
        $update = $results[$last_update_number];

        $message = $update['message'];
        $chat_id = $message['chat']['id'];
        $text_first = $message['text'];
        $text = mb_strtolower($text_first);




        session_start();

        $_SESSION['text'] = $text;


//        echo $_SESSION['text'];
//        echo $_SESSION['text_for_if'];


        if (isset($_SESSION['text_for_if'])) {

            if ($_SESSION['text_for_if'] == $text) {
//            
            } elseif ($findTextFile->find($text) == 'ok') {
                file_get_contents("https://api.telegram.org/bot822101817:AAH19rsLVfZ2x8zFnvFzwRhHM6wmHRNWiE4/sendMessage?chat_id={$chat_id}&text=Сам ты {$text}");
            } else {
                file_get_contents("https://api.telegram.org/bot822101817:AAH19rsLVfZ2x8zFnvFzwRhHM6wmHRNWiE4/sendMessage?chat_id={$chat_id}&text=Я не понимаю что ты мне написал! Попробуй меня обозвать!");
            }
            $_SESSION['text_for_if'] = $text;
            echo $_SESSION['text'];
        } else {
            $_SESSION['text_for_if'] = $text;
        }
    }

}
