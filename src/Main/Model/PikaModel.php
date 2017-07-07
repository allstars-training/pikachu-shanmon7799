<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Main\Model;

use Windwalker\Core\Model\ModelRepository;

/**
 * The PikaModel class.
 *
 * @since  __DEPLOY_VERSION__
 */
class PikaModel extends ModelRepository
{
	/**
	 * getMembers
	 *
	 * @param null $age
	 *
	 * @param null $save
	 *
	 * @return array
	 */
	public function getMembers($age = null, $save = null)
	{
		$file = __DIR__ . '/../Resource/members.json';

		$data = file_get_contents($file);
		$members = json_decode($data);

		if ($age)
		{
			foreach ($members as $k => $member)
			{
				if ($member->age < $age)
				{
					unset($members[$k]);
				}
			}
		}

		if ($save)
		{
			foreach ($members as $j => $member)
			{
				if ($member->save < $save)
				{
					unset($members[$j]);
				}
			}
		}

		return $members;
	}
}
