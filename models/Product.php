<?php

namespace models;

use iriscrm\SimplePOData\EntityTrait;

class Product extends \stdClass {

    // This trait contains method for fields mapping (between database table and this class)
    use EntityTrait;

    public $id;
    public $added_at;
    public $name;
    public $weight;
    public $code;
}
