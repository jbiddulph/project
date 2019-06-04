<?php
/**
 * Created by PhpStorm.
 * User: telematicsdataservices
 * Date: 2019-06-04
 * Time: 22:07
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index() {
        return new JsonResponse([
           'action' => 'index',
           'time' => time()
        ]);
    }

}
