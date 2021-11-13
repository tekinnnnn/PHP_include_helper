<?php
class Index
{
    public static function include_class($class_name)
    {
        $path = __DIR__ . '/include/' . $class_name . '.php';
        if (file_exists($path)) {
            require_once($path);
        } else {
            echo '(' . $class_name . ') File doesn\'t exist <br />' . PHP_EOL;
        }
    }
}

$index = new Index;
$index->include_class('Config');
