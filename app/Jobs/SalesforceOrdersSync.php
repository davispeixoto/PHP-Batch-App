<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 5/4/15
 * Time: 6:28 PM
 */

namespace Jobs;

use Davispeixoto\PhpBatch\Job\Job;

class SalesforceOrdersSync extends Job
{

    public function run()
    {
        $this->steps = array(
            'SelectFromEcommerce',
            ''
        );
    }
}
