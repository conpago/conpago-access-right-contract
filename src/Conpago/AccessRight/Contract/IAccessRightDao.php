<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 16.05.14
 * Time: 23:10
 *
 * @package    Conpago-AccessRight-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\AccessRight\Contract;

/**
 * Represents data access object for access right logic.
 */
interface IAccessRightDao
{

    /**
     * Check if current logged user has access right assigned.
     *
     * @param string $accessRight Name of requested access right.
     *
     * @return bool Returns true if current logged user has access right assigned.
     */
    public function hasAccessRight($accessRight);
}
