<?php

namespace Website\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction () {
        return $this->render("@WebsiteHome/index.html.twig");
    }

}