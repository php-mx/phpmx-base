<?php

namespace Controller\Front;

use PhpMx\View;

class Wellcome
{
    function __invoke()
    {
        return View::render('page/wellcome');
    }
}
