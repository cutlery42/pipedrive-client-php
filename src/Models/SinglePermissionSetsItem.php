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
class SinglePermissionSetsItem implements JsonSerializable
{
    /**
     * The ID of User Permission Set
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The name of Permission Set
     * @var string|null $name public property
     */
    public $name;

    /**
     * The number of Users assigned to this Permission Set
     * @maps assignment_count
     * @var integer|null $assignmentCount public property
     */
    public $assignmentCount;

    /**
     * A permission assigned to this Permission Set
     * @var array|null $contents public property
     */
    public $contents;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id              Initialization value for $this->id
     * @param string  $name            Initialization value for $this->name
     * @param integer $assignmentCount Initialization value for $this->assignmentCount
     * @param array   $contents        Initialization value for $this->contents
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->id              = func_get_arg(0);
            $this->name            = func_get_arg(1);
            $this->assignmentCount = func_get_arg(2);
            $this->contents        = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']               = $this->id;
        $json['name']             = $this->name;
        $json['assignment_count'] = $this->assignmentCount;
        $json['contents']         = $this->contents;

        return $json;
    }
}
