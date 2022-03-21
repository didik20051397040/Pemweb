<?php

namespace didik20051397040\pemweb1;

class StringHelper
{

    public static function excerpt(string $text, int $words_count, string $suffix = "..."): string
    {
        $words = explode(" ", $text);

        if (count($words) <= $words_count) {
            return $text;
        }

        return implode(" ", array_slice($words, 0, $words_count)) . $suffix;
    }

}