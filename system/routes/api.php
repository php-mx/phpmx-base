<?php

use PhpMx\Router;

Router::group('api', [], function () {
    Router::get('...', STS_NOT_FOUND);
    Router::get('', STS_OK);
});
