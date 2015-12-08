<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-10-21
 * Time: 09:37
 *
 * @package    Conpago-AccessRight-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\AccessRight\Contract;

/**
 * Represents configuration of roles in system.
 */
interface IRolesConfig
{

    /**
     * Get all available roles.
     *
     * @return IRole[] Array of roles available in system.
     */
    public function getRoles();
}
