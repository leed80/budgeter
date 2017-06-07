<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BudgetController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homePage()
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/addIncomeExpense", name="incomeExpense")
     */
    public function incomeExpensePage()
    {

        return $this->render('income_expense_page.html.twig');
    }

    /**
     * @Route("/budget", name="budget")
     */
    public function budgetPage()
    {
        return $this->render('budget_page.html');
    }


}