<?php
/**
 * Created by PhpStorm.
 * User: mickael
 * Date: 31/08/17
 * Time: 14:59
 */

namespace Website\MoviesBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\VarDumper\VarDumper;

class MovieController extends Controller {

    public function indexAction () {
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,'http://api.mick.dev/movies/getAll');
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        $movies = json_decode($response,true);
        return $this->render('@WebsiteMovies/index.html.twig', array('movies' => $movies));
    }

}