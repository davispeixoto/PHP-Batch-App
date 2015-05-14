<?php namespace Tasks;

/**
 * Class CustomerProcessor
 * @package Steps
 */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/14/15
 * Time: 4:15 PM
 * Powered By PhpStorm
 */

use CoreAppRules\Customer;
use Davispeixoto\PhpBatch\Contracts\ItemProcessorInterface;
use stdClass;
use CoreAppRules\CustomerGenderEnum;

class CustomerProcessor implements ItemProcessorInterface
{
    /**
     * @param Customer $customer
     * @return stdClass
     */
    public function process($customer)
    {
        $transformedCustomer = new stdClass();
        $transformedCustomer->AccountNumber = $customer->uid;
        $transformedCustomer->Name = $customer->firstName;
        $transformedCustomer->lastName = $customer->lastName;
        $transformedCustomer->Email = $customer->email;

        if ($customer->gender == CustomerGenderEnum::MALE()) {
            $transformedCustomer->Salutation = 'Mr.';
        } else {
            $transformedCustomer->Salutation = 'Mrs.';
        }

        return $transformedCustomer;
    }
}
