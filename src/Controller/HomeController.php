<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 14/09/2021
 * Time: 12:48
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Coupon;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="base")
     */
    public function base():Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/1xbet code promo D555", name="1xbet")
     */
    public function index_1xbet():Response
    {
        $em = $this->getDoctrine()->getManager();
        $coupons = $em->getRepository(Coupon::class)->findBy(["isDeleted"=>false], ['createdAt'=>'desc'], 4,0);;
        return $this->render('home/1xbet.html.twig', compact('coupons'));
    }

    /**
     * @Route("/1win code promo D555", name="1win")
     */
    public function index_1win():Response
    {
        $em = $this->getDoctrine()->getManager();
        $coupons = $em->getRepository(Coupon::class)->findBy(["isDeleted"=>false], ['createdAt'=>'desc'], 4,0);
        return $this->render('home/1win.html.twig', compact('coupons'));
    }

    /**
     * @Route("/betwinner code promo D555", name="betwinner")
     */
    public function index_betwinner():Response
    {
        $em = $this->getDoctrine()->getManager();
        $coupons = $em->getRepository(Coupon::class)->findBy(["isDeleted"=>false], ['createdAt'=>'desc'], 4,0);
        return $this->render('home/betwinner.html.twig', compact('coupons'));
    }

    /**
     * @Route("/linebet code promo D555", name="linebet")
     */
    public function index_linebet():Response
    {
        $em = $this->getDoctrine()->getManager();
        $coupons = $em->getRepository(Coupon::class)->findBy(["isDeleted"=>false], ['createdAt'=>'desc'], 4,0);
        return $this->render('home/linebet.html.twig', compact('coupons'));
    }

    /**
     * @Route("/melbet code promo D555", name="melbet")
     */
    public function index_melbet():Response
    {
        $em = $this->getDoctrine()->getManager();
        $coupons = $em->getRepository(Coupon::class)->findBy(["isDeleted"=>false], ['createdAt'=>'desc'], 4,0);
        return $this->render('home/melbet.html.twig', compact('coupons'));
    }
}