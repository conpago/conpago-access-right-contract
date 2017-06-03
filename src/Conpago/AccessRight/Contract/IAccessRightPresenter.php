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
 * Represents presentation layer object for access right logic.
 */
interface IAccessRightPresenter
{

    /**
     * This method presents access denied message to user.
     *
     * @return void
     */
    public function showAccessDenied(): void;
}
