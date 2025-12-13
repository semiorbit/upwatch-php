<?php

namespace SemiorbitUpWatch;

class UpWatch
{
    public static function file(string $file_path, string $log_path, bool $abort = true): bool
    {

        if (!is_file($log_path)) {

            if ($abort) {

                throw new \RuntimeException("UpWatch uploads.log not found: " . $log_path);

            }

            return false;

        }


        return (bool) file_put_contents(

            $log_path,

            $file_path . PHP_EOL,

            FILE_APPEND | LOCK_EX

        );

    }

}
