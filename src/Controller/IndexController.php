<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
		$wsdl = "http://atlas-prep-se.cartercash.com:10000/catalogue.svc?wsdl";
		
		$file = fopen($wsdl, 'r');
		
		while(! feof($file)) {
			$line = fgets($file);
		}
		dump($line);
		fclose($file);

		$crc = crc32($line);
		dump($crc);
		
        return $this->render('home/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
