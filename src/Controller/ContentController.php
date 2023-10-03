<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class ContentController extends FrontendController
{
    #[Template('content/default.html.twig')]
    public function defaultAction(Request $request): array
    {
        return [];
    }
    #[Template('content/product.html.twig')]
    public function productAction(Request $request): Response
    {
        return $this->render('content/product.html.twig');
    }
  
    #[Template('university/university.html.twig')]
    public function universityAction(Request $request): Response
    {
        return $this->render('university/university.html.twig');
    }
    #[Template('university/courses.html.twig')]
    public function courseAction(Request $request): Response
    {
        return $this->render('university/courses.html.twig');
    }
    #[Template('university/college.html.twig')]
    public function collegeAction(Request $request): Response
    {
        return $this->render('university/college.html.twig');
    }
    #[Template('university/home.html.twig')]
    public function homeAction(Request $request): Response
    {
        return $this->render('university/home.html.twig');
    }
}

