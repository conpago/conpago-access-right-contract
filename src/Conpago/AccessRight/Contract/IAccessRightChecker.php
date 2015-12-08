<?php
/**
 * Created by PhpStorm.
 * User: bartosz.golek
 * Date: 23.12.13
 * Time: 06:19
 *
 * @package    Conpago-AccessRight-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\AccessRight\Contract;

/**
 * Represents logic of checking access right permissions.
 */
interface IAccessRightChecker
{

    /**
     * Checks if current logged user has assigned access right with particular name.
     *
     * @param string $accessRight Name of the access right to check.
     *
     * @return boolean Returns true if current logged user has assigned access right, otherwise false.
     */
    public function check($accessRight);
}
