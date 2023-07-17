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
class MailParticipant implements JsonSerializable
{
    /**
     * ID of the mail participant
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Mail address of the mail participant
     * @maps email_address
     * @var string|null $emailAddress public property
     */
    public $emailAddress;

    /**
     * Name of the mail participant
     * @var string|null $name public property
     */
    public $name;

    /**
     * ID of the linked person to the mail message
     * @maps linked_person_id
     * @var integer|null $linkedPersonId public property
     */
    public $linkedPersonId;

    /**
     * Name of the linked person to the mail message
     * @maps linked_person_name
     * @var string|null $linkedPersonName public property
     */
    public $linkedPersonName;

    /**
     * ID of the mail message participant
     * @maps mail_message_party_id
     * @var integer|null $mailMessagePartyId public property
     */
    public $mailMessagePartyId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                 Initialization value for $this->id
     * @param string  $emailAddress       Initialization value for $this->emailAddress
     * @param string  $name               Initialization value for $this->name
     * @param integer $linkedPersonId     Initialization value for $this->linkedPersonId
     * @param string  $linkedPersonName   Initialization value for $this->linkedPersonName
     * @param integer $mailMessagePartyId Initialization value for $this->mailMessagePartyId
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->id                 = func_get_arg(0);
            $this->emailAddress       = func_get_arg(1);
            $this->name               = func_get_arg(2);
            $this->linkedPersonId     = func_get_arg(3);
            $this->linkedPersonName   = func_get_arg(4);
            $this->mailMessagePartyId = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                    = $this->id;
        $json['email_address']         = $this->emailAddress;
        $json['name']                  = $this->name;
        $json['linked_person_id']      = $this->linkedPersonId;
        $json['linked_person_name']    = $this->linkedPersonName;
        $json['mail_message_party_id'] = $this->mailMessagePartyId;

        return $json;
    }
}
