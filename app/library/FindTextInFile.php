<?php

namespace App\library;

class FindTextInFile
{

    public function find($text)
    {

        $st_strpos = $text;
        $st_search = "TextTelegram.txt";

        if (strpos(file_get_contents("$st_search"), "$st_strpos")) {
//            $data = strpos(file_get_contents("$st_search"), "$st_strpos");
            return 'ok';
        } else {
            return 'no';
        }
    }

}
