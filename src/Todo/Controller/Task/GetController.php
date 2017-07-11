<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Todo\Controller\Task;

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
		$view = $this->getView('Task');

		return $view->render();
	}
}
