<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Main\Controller\Pika;

use Main\Model\PikaModel;
use Windwalker\Core\Controller\AbstractController;

/**
 * The GetController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class GetController extends AbstractController
{

	/**
	 * The main execution process.
	 *
	 * @return  mixed
	 */
	protected function doExecute()
	{
		$age = $this->input->get('age');
		$save = $this->input->get('save');

		$view = $this->getView('Pika');
		/** @var PikaModel $model */
		$model   = $this->getModel('Pika');

		$members = $model->getMembers($age, $save);
		$view->set('members', $members);


//		show($members);
//		exit(' @Checkpoint');

//		$view->set('name', $name);
//		$view->set('age', $age);
//		$view->set('gender', $gender);
//		$view->set('save', $save);

		return $view->setLayout('members')->render();
	}
}
