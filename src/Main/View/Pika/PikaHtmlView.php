<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Main\View\Pika;

use Windwalker\Core\View\HtmlView;

/**
 * The PikaHtmlView class.
 *
 * @since  __DEPLOY_VERSION__
 */
class PikaHtmlView extends HtmlView
{
	protected function prepareData($data)
	{
		if ($this->getLayout() === 'default')
		{
			//Format save
			$data->save = '$NT ' . number_format(round($data->save), 2);
		}
	}
}
