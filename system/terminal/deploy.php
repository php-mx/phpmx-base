<?php

use PhpMx\Terminal;

return new class extends Terminal {

    function __invoke()
    {
        Terminal::run('install');

        self::echo('Command [deploy] running');

        Terminal::run('composer');
    }
};
