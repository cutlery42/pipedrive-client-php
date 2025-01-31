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
class OrgId implements JsonSerializable
{
    /**
     * The name of the Organization associated with the Deal
     * @var string|null $name public property
     */
    public $name;

    /**
     * The number of people connected with the Organization that is associated with the Deal
     * @maps people_count
     * @var integer|null $peopleCount public property
     */
    public $peopleCount;

    /**
     * The ID of the owner of the Organization that is associated with the Deal
     * @maps owner_id
     * @var integer|null $ownerId public property
     */
    public $ownerId;

    /**
     * The address of the Organization that is associated with the Deal
     * @var string|null $address public property
     */
    public $address;

    /**
     * If the associated Organization is activated or not
     * @maps active_flag
     * @var bool|null $activeFlag public property
     */
    public $activeFlag;

    /**
     * The Cc email of the Organization associated with the Deal
     * @maps cc_email
     * @var string|null $ccEmail public property
     */
    public $ccEmail;

    /**
     * The ID of the Organization associated with the Deal
     * @var integer|null $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name        Initialization value for $this->name
     * @param integer $peopleCount Initialization value for $this->peopleCount
     * @param integer $ownerId     Initialization value for $this->ownerId
     * @param string  $address     Initialization value for $this->address
     * @param bool    $activeFlag  Initialization value for $this->activeFlag
     * @param string  $ccEmail     Initialization value for $this->ccEmail
     * @param integer $value       Initialization value for $this->value
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->peopleCount = func_get_arg(1);
            $this->ownerId     = func_get_arg(2);
            $this->address     = func_get_arg(3);
            $this->activeFlag  = func_get_arg(4);
            $this->ccEmail     = func_get_arg(5);
            $this->value       = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']         = $this->name;
        $json['people_count'] = $this->peopleCount;
        $json['owner_id']     = $this->ownerId;
        $json['address']      = $this->address;
        $json['active_flag']  = $this->activeFlag;
        $json['cc_email']     = $this->ccEmail;
        $json['value']        = $this->value;

        return $json;
    }
}
