<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 16.05.14
	 * Time: 23:10
	 */

	namespace Conpago\AccessRight\Contract;

	interface IAccessRightDao
	{
		function hasAccessRight($accessRight);
	}