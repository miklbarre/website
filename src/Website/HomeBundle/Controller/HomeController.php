<?php

namespace Website\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller {

    public function indexAction () {
        return $this->render("@WebsiteHome/index.html.twig");
    }

    public function speAction(Request $request) {
        $date_debut = "2020-02-24 10:00";
        $date_fin = "2020-02-24 10:20";
        $objet = "Apprendre le PHP avec éééé ";
        $lieu = "Maison";
        $details = "Chapitre 2: connexion à une base de donnééééées";
        $ics = "BEGIN:VCALENDAR\n";
        $ics .= "VERSION:2.0\n";
        $ics .= "PRODID:-//hacksw/handcal//NONSGML v1.0//EN\n";
        $ics .= "BEGIN:VEVENT\n";
        $ics .= "DTSTART:".date('Ymd',strtotime($date_debut))."T".date('His',strtotime($date_debut))."\n";
        $ics .= "DTEND:".date('Ymd',strtotime($date_fin))."T".date('His',strtotime($date_fin))."\n";
        $ics .= "SUMMARY:".$objet."\n";
        $ics .= "LOCATION:".$lieu."\n";
        $ics .= "DESCRIPTION:".$details."\n";
        $ics .= "END:VEVENT\n";
        $ics .= "END:VCALENDAR\n";
        return new Response($ics);
    }

}