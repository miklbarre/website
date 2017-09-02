<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 01/09/17
 * Time: 14:12
 */

namespace Website\MusicBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\VarDumper\VarDumper;

class MusicController extends Controller {

    public function indexAction () {
        $url = 'http://api.mick.dev/musics/getall';
        $curlService = $this->get('website.curl_service');
        $response = $curlService->sendGetRequest($url);
        $musics = json_decode($response,true);
        return $this->render('@WebsiteMusic/index.html.twig', array('musics' => $musics));
    }
}