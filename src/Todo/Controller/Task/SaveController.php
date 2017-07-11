<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Todo\Controller\Task;

use Windwalker\Core\Controller\AbstractController;
use Windwalker\Filesystem\Folder;

/**
 * The SaveController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SaveController extends AbstractController
{

	/**
	 * The main execution process.
	 *
	 * @return  mixed
	 */
	protected function doExecute()
	{
		$title = $this->input->post->getString('title');
		$content = $this->input->post->getString('content');

		//$flower = $this->input->get('route.extra.flower');

		$data = json_encode([
			'title' => $title,
			'content' => $content
		]);

		$id = md5(uniqid());

		$file = WINDWALKER_TEMP . '/todo/' . $id .'.json';

		if (!is_dir(dirname($file)))
		{
			Folder::create(dirname($file));
		}

		file_put_contents($file, $data);

		$this->addMessage('Save Success', 'success');
		$this->setRedirect($this->router->route('task'));
	}
}
