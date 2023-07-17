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
class CommonMailThread implements JsonSerializable
{
    /**
     * ID of the mail thread
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The connection account ID
     * @maps account_id
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * ID of the user whom mail message will be assigned to
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The subject
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * A snippet
     * @var string|null $snippet public property
     */
    public $snippet;

    /**
     * Whether the mail thread is read
     * @maps read_flag
     * @var int|null $readFlag public property
     */
    public $readFlag;

    /**
     * Mail tracking status
     * @maps mail_tracking_status
     * @var string|null $mailTrackingStatus public property
     */
    public $mailTrackingStatus;

    /**
     * Whether the mail thread has an attachment
     * @maps has_attachments_flag
     * @var int|null $hasAttachmentsFlag public property
     */
    public $hasAttachmentsFlag;

    /**
     * Whether the mail thread has inline attachments
     * @maps has_inline_attachments_flag
     * @var int|null $hasInlineAttachmentsFlag public property
     */
    public $hasInlineAttachmentsFlag;

    /**
     * Whether the mail thread has real attachments (which are not inline)
     * @maps has_real_attachments_flag
     * @var int|null $hasRealAttachmentsFlag public property
     */
    public $hasRealAttachmentsFlag;

    /**
     * Whether the mail thread is deleted
     * @maps deleted_flag
     * @var int|null $deletedFlag public property
     */
    public $deletedFlag;

    /**
     * Whether the mail thread is synced
     * @maps synced_flag
     * @var int|null $syncedFlag public property
     */
    public $syncedFlag;

    /**
     * Whether one of the parties of the mail thread is Bcc
     * @maps smart_bcc_flag
     * @var int|null $smartBccFlag public property
     */
    public $smartBccFlag;

    /**
     * Whether the link tracking of the mail thread is enabled
     * @maps mail_link_tracking_enabled_flag
     * @var int|null $mailLinkTrackingEnabledFlag public property
     */
    public $mailLinkTrackingEnabledFlag;

    /**
     * We strongly advise you to avoid the use of this property. We will soon deprecate this property
     * @maps write_flag
     * @var bool|null $writeFlag public property
     */
    public $writeFlag;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                          Initialization value for $this->id
     * @param string  $accountId                   Initialization value for $this->accountId
     * @param integer $userId                      Initialization value for $this->userId
     * @param string  $subject                     Initialization value for $this->subject
     * @param string  $snippet                     Initialization value for $this->snippet
     * @param int     $readFlag                    Initialization value for $this->readFlag
     * @param string  $mailTrackingStatus          Initialization value for $this->mailTrackingStatus
     * @param int     $hasAttachmentsFlag          Initialization value for $this->hasAttachmentsFlag
     * @param int     $hasInlineAttachmentsFlag    Initialization value for $this->hasInlineAttachmentsFlag
     * @param int     $hasRealAttachmentsFlag      Initialization value for $this->hasRealAttachmentsFlag
     * @param int     $deletedFlag                 Initialization value for $this->deletedFlag
     * @param int     $syncedFlag                  Initialization value for $this->syncedFlag
     * @param int     $smartBccFlag                Initialization value for $this->smartBccFlag
     * @param int     $mailLinkTrackingEnabledFlag Initialization value for $this->mailLinkTrackingEnabledFlag
     * @param bool    $writeFlag                   Initialization value for $this->writeFlag
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->id                          = func_get_arg(0);
            $this->accountId                   = func_get_arg(1);
            $this->userId                      = func_get_arg(2);
            $this->subject                     = func_get_arg(3);
            $this->snippet                     = func_get_arg(4);
            $this->readFlag                    = func_get_arg(5);
            $this->mailTrackingStatus          = func_get_arg(6);
            $this->hasAttachmentsFlag          = func_get_arg(7);
            $this->hasInlineAttachmentsFlag    = func_get_arg(8);
            $this->hasRealAttachmentsFlag      = func_get_arg(9);
            $this->deletedFlag                 = func_get_arg(10);
            $this->syncedFlag                  = func_get_arg(11);
            $this->smartBccFlag                = func_get_arg(12);
            $this->mailLinkTrackingEnabledFlag = func_get_arg(13);
            $this->writeFlag                   = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                              = $this->id;
        $json['account_id']                      = $this->accountId;
        $json['user_id']                         = $this->userId;
        $json['subject']                         = $this->subject;
        $json['snippet']                         = $this->snippet;
        $json['read_flag']                       = $this->readFlag;
        $json['mail_tracking_status']            = $this->mailTrackingStatus;
        $json['has_attachments_flag']            = $this->hasAttachmentsFlag;
        $json['has_inline_attachments_flag']     = $this->hasInlineAttachmentsFlag;
        $json['has_real_attachments_flag']       = $this->hasRealAttachmentsFlag;
        $json['deleted_flag']                    = $this->deletedFlag;
        $json['synced_flag']                     = $this->syncedFlag;
        $json['smart_bcc_flag']                  = $this->smartBccFlag;
        $json['mail_link_tracking_enabled_flag'] = $this->mailLinkTrackingEnabledFlag;
        $json['write_flag']                      = $this->writeFlag;

        return $json;
    }
}
