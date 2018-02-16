<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TestController extends Controller
{
    /**
     * @Route("/test", name="test", defaults={"_format":"json"})
     */
    public function index(Request $request)
    {
        throw new HttpException(Response::HTTP_BAD_REQUEST, 'toto');
    }
}
