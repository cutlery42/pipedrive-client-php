<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *THe response data
 */
class Data18 implements JsonSerializable
{
    /**
     * The ID of the User that was added to the Role
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The ID of the Role the User was added to
     * @maps role_id
     * @var integer|null $roleId public property
     */
    public $roleId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $userId Initialization value for $this->userId
     * @param integer $roleId Initialization value for $this->roleId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->userId = func_get_arg(0);
            $this->roleId = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['user_id'] = $this->userId;
        $json['role_id'] = $this->roleId;

        return $json;
    }
}
