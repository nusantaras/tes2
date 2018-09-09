<?php
// src/Controller/SiswaController.php
namespace App\Controller;

use App\Entity\BioSiswa;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SiswaController extends AbstractController
{
    /**
     * @Route("/siswa", name="siswa")
     */
    public function index()
    {
		$entityManager = $this->getDoctrine()->getManager();

        $siswa = new BioSiswa();
        $siswa->setNama('Ani');
               

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($siswa);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new siswa with id '.$siswa->getId()); 
    }
	
	/**
	 * @Route("/siswa/{id}", name="product_show")
	 */
	public function show($id)
	{
		$siswa = $this->getDoctrine()
			->getRepository(BioSiswa::class)
			->find($id);

		if (!$siswa) {
			throw $this->createNotFoundException(
				'No product found for id '.$id
			);
		}

		return new Response('Check out this great siswa: '.$siswa->getNama());

		// or render a template
		// in the template, print things with {{ product.name }}
		// return $this->render('product/show.html.twig', ['product' => $product]);
	}
}