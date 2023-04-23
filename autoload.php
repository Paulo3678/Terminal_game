<?php

spl_autoload_register(function ($autoload) { {
        $class = str_replace("App\\", "", $autoload);

        $file = __DIR__ . "/app/{$class}.php";

        if (file_exists($file)) {
            require_once $file;
        }
    }
});
