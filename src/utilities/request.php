<?php

class Request
{
    public static function uri()
    {
        return trim(strtok($_SERVER["REQUEST_URI"], '?'), '/');
    }
}