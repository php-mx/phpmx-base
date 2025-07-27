<?php

use PhpMx\Router;

Router::group('api', [], function () {
    Router::full('...', STS_NOT_FOUND);

    Router::add('', \Controller\Api\Ping::class);
});
