<?php

namespace Controller\Front;

use PhpMx\Front;
use PhpMx\View;

class Wellcome
{
    function __invoke()
    {
        Front::layout('phpmx');
        return View::render('page/wellcome');
    }
}
