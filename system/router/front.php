<?php

use PhpMx\Router;

Router::group('', ['front'], function () {
    Router::full('...', STS_NOT_FOUND);

    Router::add('', \Controller\Front\Wellcome::class);
});
