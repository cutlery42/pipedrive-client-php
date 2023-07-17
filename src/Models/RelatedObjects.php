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
class RelatedObjects implements JsonSerializable
{
    /**
     * The User who is associated with the Deal
     * @var \Pipedrive\Models\DealUserData|null $user public property
     */
    public $user;

    /**
     * The Organization which is associated with the Deal
     * @var \Pipedrive\Models\DealOrganizationData|null $organization public property
     */
    public $organization;

    /**
     * The Person who is associated with the Deal
     * @var \Pipedrive\Models\DealPersonData|null $person public property
     */
    public $person;

    /**
     * Constructor to set initial or default values of member properties
     * @param DealUserData         $user         Initialization value for $this->user
     * @param DealOrganizationData $organization Initialization value for $this->organization
     * @param DealPersonData       $person       Initialization value for $this->person
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->user         = func_get_arg(0);
            $this->organization = func_get_arg(1);
            $this->person       = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['user']         = $this->user;
        $json['organization'] = $this->organization;
        $json['person']       = $this->person;

        return $json;
    }
}
