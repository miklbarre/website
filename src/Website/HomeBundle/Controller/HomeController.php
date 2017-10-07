<?php

namespace Website\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller {

    public function indexAction () {
        return $this->render("@WebsiteHome/index.html.twig");
    }

    public function speAction(Request $request) {
        if($request->get('specialties_1')) {
            $i = 1;
            $tabSpecialties = array('specialties' => []);
            while($request->get('specialties_'.$i)) {
                $tabSelectSpecialties = array();
                foreach ($request->get('specialties_'.$i) as $specialty) {
                    $tabSelectSpecialties [] = $specialty;
                }
                $tabSpecialties['specialties'][] = $tabSelectSpecialties;
                $i++;
            }

        }
        varDumper::dump(json_encode($tabSpecialties));
        die;
        return new Response('toto');
    }

}