<?php

use LaravelFtp\FTP;

function ftp($host, $user, $pass, $port = 21, $mode = FTP_ASCII)
{
    return new FTP($host, $user, $pass, $port, $mode);
}
