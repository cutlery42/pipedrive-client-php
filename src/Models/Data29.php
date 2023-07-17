<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;
use Pipedrive\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class Data29 implements JsonSerializable
{
    /**
     * The ID of the Webhook
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The ID of the Company related to the Webhook
     * @maps company_id
     * @var integer|null $companyId public property
     */
    public $companyId;

    /**
     * The ID of the User who owns the Webhook
     * @maps owner_id
     * @var integer|null $ownerId public property
     */
    public $ownerId;

    /**
     * The ID of the User related to the Webhook
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The Webhook action
     * @maps event_action
     * @var string|null $eventAction public property
     */
    public $eventAction;

    /**
     * The Webhook object
     * @maps event_object
     * @var string|null $eventObject public property
     */
    public $eventObject;

    /**
     * The subscription URL of the Webhook
     * @maps subscription_url
     * @var string|null $subscriptionUrl public property
     */
    public $subscriptionUrl;

    /**
     * The Webhook's status
     * @maps is_active
     * @var int|null $isActive public property
     */
    public $isActive;

    /**
     * The date when the Webhook was added
     * @maps add_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $addTime public property
     */
    public $addTime;

    /**
     * The date when the Webhook was removed (if removed)
     * @maps remove_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $removeTime public property
     */
    public $removeTime;

    /**
     * The type of the Webhook
     * @var string|null $type public property
     */
    public $type;

    /**
     * The username of the subscription_url of the Webhook
     * @maps http_auth_user
     * @var string|null $httpAuthUser public property
     */
    public $httpAuthUser;

    /**
     * The password of the subscription_url of the Webhook
     * @maps http_auth_password
     * @var string|null $httpAuthPassword public property
     */
    public $httpAuthPassword;

    /**
     * Any additional data related to the Webhook
     * @maps additional_data
     * @var object|null $additionalData public property
     */
    public $additionalData;

    /**
     * The removal reason of the Webhook (if removed)
     * @maps remove_reason
     * @var string|null $removeReason public property
     */
    public $removeReason;

    /**
     * The last delivery time of the Webhook
     * @maps last_delivery_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastDeliveryTime public property
     */
    public $lastDeliveryTime;

    /**
     * The last delivery HTTP status of the Webhook
     * @maps last_http_status
     * @var integer|null $lastHttpStatus public property
     */
    public $lastHttpStatus;

    /**
     * The ID of the admin of the Webhook
     * @maps admin_id
     * @var integer|null $adminId public property
     */
    public $adminId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $id               Initialization value for $this->id
     * @param integer   $companyId        Initialization value for $this->companyId
     * @param integer   $ownerId          Initialization value for $this->ownerId
     * @param integer   $userId           Initialization value for $this->userId
     * @param string    $eventAction      Initialization value for $this->eventAction
     * @param string    $eventObject      Initialization value for $this->eventObject
     * @param string    $subscriptionUrl  Initialization value for $this->subscriptionUrl
     * @param int       $isActive         Initialization value for $this->isActive
     * @param \DateTime $addTime          Initialization value for $this->addTime
     * @param \DateTime $removeTime       Initialization value for $this->removeTime
     * @param string    $type             Initialization value for $this->type
     * @param string    $httpAuthUser     Initialization value for $this->httpAuthUser
     * @param string    $httpAuthPassword Initialization value for $this->httpAuthPassword
     * @param object    $additionalData   Initialization value for $this->additionalData
     * @param string    $removeReason     Initialization value for $this->removeReason
     * @param \DateTime $lastDeliveryTime Initialization value for $this->lastDeliveryTime
     * @param integer   $lastHttpStatus   Initialization value for $this->lastHttpStatus
     * @param integer   $adminId          Initialization value for $this->adminId
     */
    public function __construct()
    {
        if (18 == func_num_args()) {
            $this->id               = func_get_arg(0);
            $this->companyId        = func_get_arg(1);
            $this->ownerId          = func_get_arg(2);
            $this->userId           = func_get_arg(3);
            $this->eventAction      = func_get_arg(4);
            $this->eventObject      = func_get_arg(5);
            $this->subscriptionUrl  = func_get_arg(6);
            $this->isActive         = func_get_arg(7);
            $this->addTime          = func_get_arg(8);
            $this->removeTime       = func_get_arg(9);
            $this->type             = func_get_arg(10);
            $this->httpAuthUser     = func_get_arg(11);
            $this->httpAuthPassword = func_get_arg(12);
            $this->additionalData   = func_get_arg(13);
            $this->removeReason     = func_get_arg(14);
            $this->lastDeliveryTime = func_get_arg(15);
            $this->lastHttpStatus   = func_get_arg(16);
            $this->adminId          = func_get_arg(17);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['company_id']         = $this->companyId;
        $json['owner_id']           = $this->ownerId;
        $json['user_id']            = $this->userId;
        $json['event_action']       = $this->eventAction;
        $json['event_object']       = $this->eventObject;
        $json['subscription_url']   = $this->subscriptionUrl;
        $json['is_active']          = $this->isActive;
        $json['add_time']           = isset($this->addTime) ?
            DateTimeHelper::toRfc3339DateTime($this->addTime) : null;
        $json['remove_time']        = isset($this->removeTime) ?
            DateTimeHelper::toRfc3339DateTime($this->removeTime) : null;
        $json['type']               = $this->type;
        $json['http_auth_user']     = $this->httpAuthUser;
        $json['http_auth_password'] = $this->httpAuthPassword;
        $json['additional_data']    = $this->additionalData;
        $json['remove_reason']      = $this->removeReason;
        $json['last_delivery_time'] = isset($this->lastDeliveryTime) ?
            DateTimeHelper::toRfc3339DateTime($this->lastDeliveryTime) : null;
        $json['last_http_status']   = $this->lastHttpStatus;
        $json['admin_id']           = $this->adminId;

        return $json;
    }
}
