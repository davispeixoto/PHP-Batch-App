<?php namespace CoreAppRules;

/**
 * Class Customer
 * @package CoreAppRules
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/14/15
 * Time: 4:03 PM
 * Powered By PhpStorm
 */


class Customer
{
    public $uid;
    public $firstName;
    public $lastName;
    public $email;

    /**
     * @var CustomerGenderEnum
     */
    public $gender;

    public function __construct($firstName, $lastName, CustomerGenderEnum $gender, $email, $uid = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->email = $email;

        if (!is_null($uid)) {
            $this->uid = $uid;
        }
    }
}
