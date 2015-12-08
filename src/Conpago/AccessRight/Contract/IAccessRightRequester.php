<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 28.11.13
 * Time: 22:08
 *
 * @package    Conpago-AccessRight-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\AccessRight\Contract;

/**
 * Represents an actor of system.
 */
interface IAccessRightRequester
{

    /**
     * Get array of roles assigned to requester.
     *
     * @return string[] Returns array of roles assigned to current object.
     */
    public function getRoles();
}
