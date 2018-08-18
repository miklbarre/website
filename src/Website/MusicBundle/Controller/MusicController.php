<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 01/09/17
 * Time: 14:12
 */

namespace Website\MusicBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MusicController extends Controller {

    public function indexAction () {
        return $this->render('@WebsiteMusic/index.html.twig');
    }

    public function  getAllMusicsAction ()
    {
        $url = $this->getParameter('api_server') . 'musics/getallalbumbyartist';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url);
        $musics = json_decode($response, true);
        return new JsonResponse($musics);
    }
}
