<?php

namespace Weekies\WeekiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Weekies\WeekiesBundle\Model\SuggesterSettings;
use Weekies\WeekiesBundle\Model\DinnerEntry;
use Weekies\WeekiesBundle\Form\Type\SuggesterSettingsType;



class SuggesterController extends Controller
{
    public function setupAction(Request $request)
    {
        $suggesterSettings = new SuggesterSettings();
        
        $form = $this->createForm(new SuggesterSettingsType(), $suggesterSettings);
        
        $form->handleRequest($request);

        $message = "Not submitted";
        
        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $message = "Submitted!";
        }
        
        return $this->render('WeekiesWeekiesBundle:Suggester:setup.html.twig', array(
            'form' => $form->createView(),
            'message' => $message,
        ));
        
    }

    public function suggestAction()
    {
        return $this->render('WeekiesWeekiesBundle:Suggester:suggest.html.twig', array(
                // ...
            ));    }

    public function shoppingListAction()
    {
        return $this->render('WeekiesWeekiesBundle:Suggester:shoppingList.html.twig', array(
                // ...
            ));    }

    public function stockAction()
    {
        return $this->render('WeekiesWeekiesBundle:Suggester:stock.html.twig', array(
                // ...
            ));    }

}
