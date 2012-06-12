<?php

namespace Will\CarryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('WillCarryBundle:Default:index.html.twig', array('name' => $name));
    }
}
// src/Will/CarryBundle/Controller/DefaultController.php


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Will\CarryBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	public function newAction(Request $request)
	{
		// create a task and give it some dummy data for this example
		$task = new Task();
		$task->setTask('Write a blog post');
		$task->setDueDate(new \DateTime('tomorrow'));

		$form = $this->createFormBuilder($task)
		->add('task', 'text')
		->add('dueDate', 'date')
		->getForm();

		return $this->render('WillCarryBundle:Default:new.html.twig', array(
				'form' => $form->createView(),
		));
	}
}

// ...

public function newAction(Request $request)
{
	// just setup a fresh $task object (remove the dummy data)
	$task = new Task();

	$form = $this->createFormBuilder($task)
	->add('task', 'text')
	->add('dueDate', 'date')
	->getForm();

	if ($request->getMethod() == 'POST') {
		$form->bindRequest($request);

		if ($form->isValid()) {
			// perform some action, such as saving the task to the database

			return $this->redirect($this->generateUrl('task_success'));
		}
	}

	// ...
}