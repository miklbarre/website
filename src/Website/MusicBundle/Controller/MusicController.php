<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 01/09/17
 * Time: 14:12
 */

namespace Website\MusicBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MusicController extends Controller {

    public function indexAction () {
        $url = $this->getParameter('api_server').'musics/getallalbumbyartist';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url);
        $musics = json_decode($response,true);
        return $this->render('@WebsiteMusic/index.html.twig', array('musics' => $musics));
    }
}