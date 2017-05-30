<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BudgetController
{
    /**
     * @Route("/budget/{name}")
     */
    public function showAction($name)
    {
        return new Response('This is the budget for ' . $name);
    }
}