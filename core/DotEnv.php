<?php

namespace core;

class DotEnv
{
    protected string $path;

    public function __construct(string $path)
    {
        if (!file_exists($path)) {
//            throw new \InvalidArgumentException("$path does not exist");
        }
        $this->path = $path;
    }

    public function load(): void
    {
        if (!is_readable($this->path)) {
//            throw new \RuntimeException("$this->path file is not readable");
            error_log("core\DotEnv.php: $this->path file is not readable");

            return;
        }

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv("$name=$value");
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}
