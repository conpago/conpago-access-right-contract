<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 28.11.13
 * Time: 22:12
 *
 * @package    Conpago-AccessRight-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\AccessRight\Contract;

/**
 * Represents role of actor in system.
 */
interface IRole
{

    /**
     * Get name of role.
     *
     * @return string Returns name of role.
     */
    public function getRoleName(): string;

    /**
     * Get access rights assigned to role.
     *
     * @return string[] Array of access rights assigned to role.
     */
    public function getAccessRights(): array;
}
