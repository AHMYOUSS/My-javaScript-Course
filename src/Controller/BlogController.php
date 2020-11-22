<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('blog/home.html.twig'); 
    }
    /**
     * @Route("/blog/Course", name="Course")
     */
    public function Course() {
        return $this->render('blog/Course-Javascript.html.twig'); 
    }
    /**
     * @Route("/blog/Exercices", name="Exercices")
     */
    public function Exercices() {
        return $this->render('blog/Exercices.html.twig'); 
    }
   
    /**
     * @Route("/blog/contact", name="contact")
     */
    public function Contact() {
        return $this->render('blog/contact.html.twig'); 
    
}
    /**
     * @Route("/blog/login", name="login")
     */
    public function login() {
        return $this->render('blog/login.html.twig'); 
    
}

/**
     * @Route("/blog/sign", name="sign")
     */
    public function sign() {
        return $this->render('blog/sign.html.twig'); 
    
}
}