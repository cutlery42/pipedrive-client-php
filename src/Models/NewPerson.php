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
class NewPerson implements JsonSerializable
{
    /**
     * Person name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * ID of the user who will be marked as the owner of this person. When omitted, the authorized user ID
     * will be used.
     * @maps owner_id
     * @var integer|null $ownerId public property
     */
    public $ownerId;

    /**
     * ID of the organization this person will belong to.
     * @maps org_id
     * @var integer|null $orgId public property
     */
    public $orgId;

    /**
     * Email addresses (one or more) associated with the person, presented in the same manner as received
     * by GET request of a person.
     * @var array|null $email public property
     */
    public $email;

    /**
     * Phone numbers (one or more) associated with the person, presented in the same manner as received by
     * GET request of a person.
     * @var array|null $phone public property
     */
    public $phone;

    /**
     * Visibility of the person. If omitted, visibility will be set to the default visibility setting of
     * this item type for the authorized user.<dl class="fields-list"><dt>1</dt><dd>Owner &amp; followers
     * (private)</dd><dt>3</dt><dd>Entire company (shared)</dd></dl>
     * @maps visible_to
     * @var int|null $visibleTo public property
     */
    public $visibleTo;

    /**
     * Optional creation date & time of the person in UTC. Requires admin user API token. Format: YYYY-MM-
     * DD HH:MM:SS
     * @maps add_time
     * @var string|null $addTime public property
     */
    public $addTime;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name      Initialization value for $this->name
     * @param integer $ownerId   Initialization value for $this->ownerId
     * @param integer $orgId     Initialization value for $this->orgId
     * @param array   $email     Initialization value for $this->email
     * @param array   $phone     Initialization value for $this->phone
     * @param int     $visibleTo Initialization value for $this->visibleTo
     * @param string  $addTime   Initialization value for $this->addTime
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->name      = func_get_arg(0);
            $this->ownerId   = func_get_arg(1);
            $this->orgId     = func_get_arg(2);
            $this->email     = func_get_arg(3);
            $this->phone     = func_get_arg(4);
            $this->visibleTo = func_get_arg(5);
            $this->addTime   = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']       = $this->name;
        $json['owner_id']   = $this->ownerId;
        $json['org_id']     = $this->orgId;
        $json['email']      = $this->email;
        $json['phone']      = $this->phone;
        $json['visible_to'] = $this->visibleTo;
        $json['add_time']   = $this->addTime;

        return $json;
    }
}
