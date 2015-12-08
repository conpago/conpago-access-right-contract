<?php
/**
 * Created by PhpStorm.
 * User: bgolek
 * Date: 2014-11-19
 * Time: 15:07
 *
 * @package    Conpago-AccessRight-Contract
 * @subpackage Exceptions
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\AccessRight\Contract\Exceptions;

/**
 * Exception thrown when current logger user is not a correct access right requester.
 */
class CurrentLoggedUserNotImplementAccessRightRequesterException extends \Exception
{
}
