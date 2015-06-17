<?php
	/**
	 * Created by PhpStorm.
	 * User: bgolek
	 * Date: 2014-10-21
	 * Time: 09:37
	 */

	namespace Saigon\Conpago\AccessRight\Contract;


	interface IRolesConfig
	{
		/**
		 * @return IRole[];
		 */
		function getRoles();
	}