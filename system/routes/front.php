<?php

use PhpMx\Router;

Router::middleware(['front'], function () {
    Router::get('...', STS_NOT_FOUND);
    Router::get('', STS_OK);
});
