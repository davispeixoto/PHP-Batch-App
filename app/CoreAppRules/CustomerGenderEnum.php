<?php namespace CoreAppRules;

/**
 * Class CustomerGenderEnum
 * @package CoreAppRules
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/14/15
 * Time: 4:53 PM
 * Powered By PhpStorm
 */

use MyCLabs\Enum\Enum;

/**
 * Class CustomerGenderEnum
 * @package CoreAppRules
 *
 * @method static CustomerGenderEnum MALE()
 * @method static CustomerGenderEnum FEMALE()
 */
class CustomerGenderEnum extends Enum
{
    const MALE = 'M';
    const FEMALE = 'F';
}
