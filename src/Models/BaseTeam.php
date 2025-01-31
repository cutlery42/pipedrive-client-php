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
class BaseTeam implements JsonSerializable
{
    /**
     * The Team ID
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The Team name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * The Team description
     * @var string|null $description public property
     */
    public $description;

    /**
     * The Team manager ID
     * @required
     * @maps manager_id
     * @var integer $managerId public property
     */
    public $managerId;

    /**
     * IDs of the Users that belong to the Team
     * @var array|null $users public property
     */
    public $users;

    /**
     * Flag that indicates if the Team is activated
     * @maps active_flag
     * @var int|null $activeFlag public property
     */
    public $activeFlag;

    /**
     * Flag that indicates if the Team is deleted
     * @maps deleted_flag
     * @var int|null $deletedFlag public property
     */
    public $deletedFlag;

    /**
     * The Team creation time. Format: YYYY-MM-DD HH:MM:SS
     * @maps add_time
     * @var string|null $addTime public property
     */
    public $addTime;

    /**
     * ID of the User who created the Team
     * @maps created_by_user_id
     * @var integer|null $createdByUserId public property
     */
    public $createdByUserId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id              Initialization value for $this->id
     * @param string  $name            Initialization value for $this->name
     * @param string  $description     Initialization value for $this->description
     * @param integer $managerId       Initialization value for $this->managerId
     * @param array   $users           Initialization value for $this->users
     * @param int     $activeFlag      Initialization value for $this->activeFlag
     * @param int     $deletedFlag     Initialization value for $this->deletedFlag
     * @param string  $addTime         Initialization value for $this->addTime
     * @param integer $createdByUserId Initialization value for $this->createdByUserId
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->id              = func_get_arg(0);
            $this->name            = func_get_arg(1);
            $this->description     = func_get_arg(2);
            $this->managerId       = func_get_arg(3);
            $this->users           = func_get_arg(4);
            $this->activeFlag      = func_get_arg(5);
            $this->deletedFlag     = func_get_arg(6);
            $this->addTime         = func_get_arg(7);
            $this->createdByUserId = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['name']               = $this->name;
        $json['description']        = $this->description;
        $json['manager_id']         = $this->managerId;
        $json['users']              = $this->users;
        $json['active_flag']        = $this->activeFlag;
        $json['deleted_flag']       = $this->deletedFlag;
        $json['add_time']           = $this->addTime;
        $json['created_by_user_id'] = $this->createdByUserId;

        return $json;
    }
}
