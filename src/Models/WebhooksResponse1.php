<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class WebhooksResponse1 implements JsonSerializable
{
    /**
     * If the response is successful or not
     * @var bool|null $success public property
     */
    public $success;

    /**
     * The status of the response
     * @var string|null $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @var \Pipedrive\Models\Data29|null $data public property
     */
    public $data;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $success Initialization value for $this->success
     * @param string $status  Initialization value for $this->status
     * @param Data29 $data    Initialization value for $this->data
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->success = func_get_arg(0);
            $this->status  = func_get_arg(1);
            $this->data    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['success'] = $this->success;
        $json['status']  = $this->status;
        $json['data']    = $this->data;

        return $json;
    }
}
