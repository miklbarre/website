<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 31/08/17
 * Time: 14:59
 */

namespace Website\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MovieController extends Controller {

    public function indexAction () {
        return $this->render('@WebsiteMovies/index.html.twig');
    }

    public function searchAction(Request $request){
        $search = $request->get('valueSearch');
        $url = $this->getParameter('api_server').'movies/search';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url."?search=".$search);
        if(json_decode($response, true)) {
            $movies = json_decode($response, true);
        }
        else {
            $movies = array('data' => [], "draw" => 1, "recordsTotal" => 0, "recordsFiltered" => 0);
        }
        return new JsonResponse($movies);
    }

    public function getAllAction () {
        $url = $this->getParameter('api_server').'movies/getAll';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url);
        if(json_decode($response, true)) {
            $movies = json_decode($response, true);
        }
        else {
            $movies = array('data' => [], "draw" => 1, "recordsTotal" => 0, "recordsFiltered" => 0);
        }
        return new JsonResponse($movies);
    }

}