<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 10/09/17
 * Time: 10:16
 */

namespace Website\SerieBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeriesController extends Controller {

    public function indexAction () {
        $url = $this->getParameter('api_server').'series/getseries';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url);
        $series = json_decode($response,true);
        return $this->render('WebsiteSerieBundle::index.html.twig', array('series' => $series));
    }
}