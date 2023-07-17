<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *The Global Message type info
 */
class GlobalMessageUserData implements JsonSerializable
{
    /**
     * The Global Message type for validation checks
     * @maps message_type
     * @var string|null $messageType public property
     */
    public $messageType;

    /**
     * Whether a User can dismiss the Global Message or not
     * @maps dismissible_flag
     * @var bool|null $dismissibleFlag public property
     */
    public $dismissibleFlag;

    /**
     * Sorts messages by priority DESC (from 0 to 10)
     * @var integer|null $priority public property
     */
    public $priority;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $messageType     Initialization value for $this->messageType
     * @param bool    $dismissibleFlag Initialization value for $this->dismissibleFlag
     * @param integer $priority        Initialization value for $this->priority
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->messageType     = func_get_arg(0);
            $this->dismissibleFlag = func_get_arg(1);
            $this->priority        = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['message_type']     = $this->messageType;
        $json['dismissible_flag'] = $this->dismissibleFlag;
        $json['priority']         = $this->priority;

        return $json;
    }
}
