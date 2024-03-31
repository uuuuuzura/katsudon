<?php

class Loader
{
    public static function basePath(string $path)
    {
        return BASE_PATH . $path;
    }

    public static function view(string $viewName, array $attributes = [])
    {
        extract($attributes);
        require static::basePath('src/views/' . $viewName . '.view.php');
    }
}