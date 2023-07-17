<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *The additional data in the Role list
 */
class RolesAdditionalData implements JsonSerializable
{
    /**
     * The pagination details in the Role list
     * @var \Pipedrive\Models\Pagination1|null $pagination public property
     */
    public $pagination;

    /**
     * Constructor to set initial or default values of member properties
     * @param Pagination1 $pagination Initialization value for $this->pagination
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->pagination = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['pagination'] = $this->pagination;

        return $json;
    }
}
