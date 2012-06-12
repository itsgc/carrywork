<?php

namespace Will\CarryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


// src/Will/CarryBundle/Controller/DefaultController.php

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

