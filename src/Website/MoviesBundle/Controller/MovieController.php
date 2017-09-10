<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 31/08/17
 * Time: 14:59
 */

namespace Website\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieController extends Controller {

    public function indexAction () {
        $url = $this->getParameter('api_server').'movies/getAll';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url);
        $movies = json_decode($response,true);
        return $this->render('@WebsiteMovies/index.html.twig', array('movies' => $movies));
    }

}