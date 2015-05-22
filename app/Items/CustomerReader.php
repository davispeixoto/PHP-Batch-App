<?php namespace Items;

    /**
     * Class CustomerReader
     * @package Items
     */

/**
 * Created by Davis Peixoto <davis.peixoto@gmail.com>.
 * Date: 5/14/15
 * Time: 6:25 PM
 * Powered By PhpStorm
 */

use Davispeixoto\PhpBatch\Contracts\ItemReaderInterface;

class CustomerReader extends DatabaseItemReader
{
    private $query;

    public function __construct()
    {
        $this->query = 'SELECT ID as id, first_name as firstName, last_name as lastName, email as email, gender as gender FROM customers WHERE sync = FALSE';
    }

    public function read()
    {

    }
}
