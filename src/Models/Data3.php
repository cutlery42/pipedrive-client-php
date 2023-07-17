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
class Data3 implements JsonSerializable
{
    /**
     * The ID of the Deal
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The ID of the Deal creator
     * @maps creator_user_id
     * @var integer|null $creatorUserId public property
     */
    public $creatorUserId;

    /**
     * The ID of the User
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The ID of the Person associated with the Deal
     * @maps person_id
     * @var integer|null $personId public property
     */
    public $personId;

    /**
     * The ID of the Organization associated with the Deal
     * @maps org_id
     * @var integer|null $orgId public property
     */
    public $orgId;

    /**
     * The ID of the Deal stage
     * @maps stage_id
     * @var integer|null $stageId public property
     */
    public $stageId;

    /**
     * The title of the Deal
     * @var string|null $title public property
     */
    public $title;

    /**
     * The value of the Deal
     * @var double|null $value public property
     */
    public $value;

    /**
     * The currency associated with the Deal
     * @var string|null $currency public property
     */
    public $currency;

    /**
     * The creation date and time of the Deal
     * @maps add_time
     * @var string|null $addTime public property
     */
    public $addTime;

    /**
     * The last updated date and time of the Deal
     * @maps update_time
     * @var string|null $updateTime public property
     */
    public $updateTime;

    /**
     * The last updated date and time of the Deal stage
     * @maps stage_change_time
     * @var string|null $stageChangeTime public property
     */
    public $stageChangeTime;

    /**
     * If the Deal is activated or not
     * @var bool|null $active public property
     */
    public $active;

    /**
     * If the Deal is deleted or not
     * @var bool|null $deleted public property
     */
    public $deleted;

    /**
     * The status of the Deal
     * @var string|null $status public property
     */
    public $status;

    /**
     * The success probability percentage of the Deal
     * @var double|null $probability public property
     */
    public $probability;

    /**
     * The date of the next activity associated with the Deal
     * @maps next_activity_date
     * @var string|null $nextActivityDate public property
     */
    public $nextActivityDate;

    /**
     * The time of the next activity associated with the Deal
     * @maps next_activity_time
     * @var string|null $nextActivityTime public property
     */
    public $nextActivityTime;

    /**
     * The ID of the next activity associated with the Deal
     * @maps next_activity_id
     * @var integer|null $nextActivityId public property
     */
    public $nextActivityId;

    /**
     * The ID of the last activity associated with the Deal
     * @maps last_activity_id
     * @var integer|null $lastActivityId public property
     */
    public $lastActivityId;

    /**
     * The date of the last activity associated with the Deal
     * @maps last_activity_date
     * @var string|null $lastActivityDate public property
     */
    public $lastActivityDate;

    /**
     * The reason for losing the Deal
     * @maps lost_reason
     * @var string|null $lostReason public property
     */
    public $lostReason;

    /**
     * The visibility of the Deal
     * @maps visible_to
     * @var string|null $visibleTo public property
     */
    public $visibleTo;

    /**
     * The date and time of closing the Deal
     * @maps close_time
     * @var string|null $closeTime public property
     */
    public $closeTime;

    /**
     * The ID of pipeline associated with the Deal
     * @maps pipeline_id
     * @var integer|null $pipelineId public property
     */
    public $pipelineId;

    /**
     * The date and time of changing the Deal status as won
     * @maps won_time
     * @var string|null $wonTime public property
     */
    public $wonTime;

    /**
     * The date and time of the first time changing the Deal status as won
     * @maps first_won_time
     * @var string|null $firstWonTime public property
     */
    public $firstWonTime;

    /**
     * The date and time of changing the Deal status as lost
     * @maps lost_time
     * @var string|null $lostTime public property
     */
    public $lostTime;

    /**
     * The number of Products associated with the Deal
     * @maps products_count
     * @var integer|null $productsCount public property
     */
    public $productsCount;

    /**
     * The number of Files associated with the Deal
     * @maps files_count
     * @var integer|null $filesCount public property
     */
    public $filesCount;

    /**
     * The number of Notes associated with the Deal
     * @maps notes_count
     * @var integer|null $notesCount public property
     */
    public $notesCount;

    /**
     * The number of Followers associated with the Deal
     * @maps followers_count
     * @var integer|null $followersCount public property
     */
    public $followersCount;

    /**
     * The number of emails associated with the Deal
     * @maps email_messages_count
     * @var integer|null $emailMessagesCount public property
     */
    public $emailMessagesCount;

    /**
     * The number of Activities associated with the Deal
     * @maps activities_count
     * @var integer|null $activitiesCount public property
     */
    public $activitiesCount;

    /**
     * The number of completed Activities associated with the Deal
     * @maps done_activities_count
     * @var integer|null $doneActivitiesCount public property
     */
    public $doneActivitiesCount;

    /**
     * The number of incomplete Activities associated with the Deal
     * @maps undone_activities_count
     * @var integer|null $undoneActivitiesCount public property
     */
    public $undoneActivitiesCount;

    /**
     * The number of referenced Activities associated with the Deal
     * @maps reference_activities_count
     * @var integer|null $referenceActivitiesCount public property
     */
    public $referenceActivitiesCount;

    /**
     * The number of Participants associated with the Deal
     * @maps participants_count
     * @var integer|null $participantsCount public property
     */
    public $participantsCount;

    /**
     * The expected close date and time of the Deal
     * @maps expected_close_date
     * @var string|null $expectedCloseDate public property
     */
    public $expectedCloseDate;

    /**
     * The date and time of the last incoming email associated with the Deal
     * @maps last_incoming_mail_time
     * @var string|null $lastIncomingMailTime public property
     */
    public $lastIncomingMailTime;

    /**
     * The date and time of the last outgoing email associated with the Deal
     * @maps last_outgoing_mail_time
     * @var string|null $lastOutgoingMailTime public property
     */
    public $lastOutgoingMailTime;

    /**
     * The label assigned to the Deal
     * @var string|null $label public property
     */
    public $label;

    /**
     * The order number of the Deal stage associated with the Deal
     * @maps stage_order_nr
     * @var integer|null $stageOrderNr public property
     */
    public $stageOrderNr;

    /**
     * The name of the Person associated with the Deal
     * @maps person_name
     * @var string|null $personName public property
     */
    public $personName;

    /**
     * The name of the Organization associated with the Deal
     * @maps org_name
     * @var string|null $orgName public property
     */
    public $orgName;

    /**
     * The subject of the next activity associated with the Deal
     * @maps next_activity_subject
     * @var string|null $nextActivitySubject public property
     */
    public $nextActivitySubject;

    /**
     * The type of the next activity associated with the Deal
     * @maps next_activity_type
     * @var string|null $nextActivityType public property
     */
    public $nextActivityType;

    /**
     * The duration of the next activity associated with the Deal
     * @maps next_activity_duration
     * @var string|null $nextActivityDuration public property
     */
    public $nextActivityDuration;

    /**
     * The note of the next activity associated with the Deal
     * @maps next_activity_note
     * @var string|null $nextActivityNote public property
     */
    public $nextActivityNote;

    /**
     * The Deal value formatted with selected currency. E.g. US$500
     * @maps formatted_value
     * @var string|null $formattedValue public property
     */
    public $formattedValue;

    /**
     * Probability times Deal value. Probability can either be Deal probability or if not set, then stage
     * probability.
     * @maps weighted_value
     * @var double|null $weightedValue public property
     */
    public $weightedValue;

    /**
     * The weighted_value formatted with selected currency. E.g. US$500
     * @maps formatted_weighted_value
     * @var string|null $formattedWeightedValue public property
     */
    public $formattedWeightedValue;

    /**
     * The currency associated with the Deal
     * @maps weighted_value_currency
     * @var string|null $weightedValueCurrency public property
     */
    public $weightedValueCurrency;

    /**
     * The date and time of changing the Deal status as rotten
     * @maps rotten_time
     * @var string|null $rottenTime public property
     */
    public $rottenTime;

    /**
     * The name of the Deal owner
     * @maps owner_name
     * @var string|null $ownerName public property
     */
    public $ownerName;

    /**
     * The Cc email of the Deal
     * @maps cc_email
     * @var string|null $ccEmail public property
     */
    public $ccEmail;

    /**
     * If the Organization that is associated with the Deal is hidden or not
     * @maps org_hidden
     * @var bool|null $orgHidden public property
     */
    public $orgHidden;

    /**
     * If the Person that is associated with the Deal is hidden or not
     * @maps person_hidden
     * @var bool|null $personHidden public property
     */
    public $personHidden;

    /**
     * The Deal ID of the Deal which the original Deal was merged with
     * @maps merge_what_id
     * @var integer|null $mergeWhatId public property
     */
    public $mergeWhatId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                       Initialization value for $this->id
     * @param integer $creatorUserId            Initialization value for $this->creatorUserId
     * @param integer $userId                   Initialization value for $this->userId
     * @param integer $personId                 Initialization value for $this->personId
     * @param integer $orgId                    Initialization value for $this->orgId
     * @param integer $stageId                  Initialization value for $this->stageId
     * @param string  $title                    Initialization value for $this->title
     * @param double  $value                    Initialization value for $this->value
     * @param string  $currency                 Initialization value for $this->currency
     * @param string  $addTime                  Initialization value for $this->addTime
     * @param string  $updateTime               Initialization value for $this->updateTime
     * @param string  $stageChangeTime          Initialization value for $this->stageChangeTime
     * @param bool    $active                   Initialization value for $this->active
     * @param bool    $deleted                  Initialization value for $this->deleted
     * @param string  $status                   Initialization value for $this->status
     * @param double  $probability              Initialization value for $this->probability
     * @param string  $nextActivityDate         Initialization value for $this->nextActivityDate
     * @param string  $nextActivityTime         Initialization value for $this->nextActivityTime
     * @param integer $nextActivityId           Initialization value for $this->nextActivityId
     * @param integer $lastActivityId           Initialization value for $this->lastActivityId
     * @param string  $lastActivityDate         Initialization value for $this->lastActivityDate
     * @param string  $lostReason               Initialization value for $this->lostReason
     * @param string  $visibleTo                Initialization value for $this->visibleTo
     * @param string  $closeTime                Initialization value for $this->closeTime
     * @param integer $pipelineId               Initialization value for $this->pipelineId
     * @param string  $wonTime                  Initialization value for $this->wonTime
     * @param string  $firstWonTime             Initialization value for $this->firstWonTime
     * @param string  $lostTime                 Initialization value for $this->lostTime
     * @param integer $productsCount            Initialization value for $this->productsCount
     * @param integer $filesCount               Initialization value for $this->filesCount
     * @param integer $notesCount               Initialization value for $this->notesCount
     * @param integer $followersCount           Initialization value for $this->followersCount
     * @param integer $emailMessagesCount       Initialization value for $this->emailMessagesCount
     * @param integer $activitiesCount          Initialization value for $this->activitiesCount
     * @param integer $doneActivitiesCount      Initialization value for $this->doneActivitiesCount
     * @param integer $undoneActivitiesCount    Initialization value for $this->undoneActivitiesCount
     * @param integer $referenceActivitiesCount Initialization value for $this->referenceActivitiesCount
     * @param integer $participantsCount        Initialization value for $this->participantsCount
     * @param string  $expectedCloseDate        Initialization value for $this->expectedCloseDate
     * @param string  $lastIncomingMailTime     Initialization value for $this->lastIncomingMailTime
     * @param string  $lastOutgoingMailTime     Initialization value for $this->lastOutgoingMailTime
     * @param string  $label                    Initialization value for $this->label
     * @param integer $stageOrderNr             Initialization value for $this->stageOrderNr
     * @param string  $personName               Initialization value for $this->personName
     * @param string  $orgName                  Initialization value for $this->orgName
     * @param string  $nextActivitySubject      Initialization value for $this->nextActivitySubject
     * @param string  $nextActivityType         Initialization value for $this->nextActivityType
     * @param string  $nextActivityDuration     Initialization value for $this->nextActivityDuration
     * @param string  $nextActivityNote         Initialization value for $this->nextActivityNote
     * @param string  $formattedValue           Initialization value for $this->formattedValue
     * @param double  $weightedValue            Initialization value for $this->weightedValue
     * @param string  $formattedWeightedValue   Initialization value for $this->formattedWeightedValue
     * @param string  $weightedValueCurrency    Initialization value for $this->weightedValueCurrency
     * @param string  $rottenTime               Initialization value for $this->rottenTime
     * @param string  $ownerName                Initialization value for $this->ownerName
     * @param string  $ccEmail                  Initialization value for $this->ccEmail
     * @param bool    $orgHidden                Initialization value for $this->orgHidden
     * @param bool    $personHidden             Initialization value for $this->personHidden
     * @param integer $mergeWhatId              Initialization value for $this->mergeWhatId
     */
    public function __construct()
    {
        if (59 == func_num_args()) {
            $this->id                       = func_get_arg(0);
            $this->creatorUserId            = func_get_arg(1);
            $this->userId                   = func_get_arg(2);
            $this->personId                 = func_get_arg(3);
            $this->orgId                    = func_get_arg(4);
            $this->stageId                  = func_get_arg(5);
            $this->title                    = func_get_arg(6);
            $this->value                    = func_get_arg(7);
            $this->currency                 = func_get_arg(8);
            $this->addTime                  = func_get_arg(9);
            $this->updateTime               = func_get_arg(10);
            $this->stageChangeTime          = func_get_arg(11);
            $this->active                   = func_get_arg(12);
            $this->deleted                  = func_get_arg(13);
            $this->status                   = func_get_arg(14);
            $this->probability              = func_get_arg(15);
            $this->nextActivityDate         = func_get_arg(16);
            $this->nextActivityTime         = func_get_arg(17);
            $this->nextActivityId           = func_get_arg(18);
            $this->lastActivityId           = func_get_arg(19);
            $this->lastActivityDate         = func_get_arg(20);
            $this->lostReason               = func_get_arg(21);
            $this->visibleTo                = func_get_arg(22);
            $this->closeTime                = func_get_arg(23);
            $this->pipelineId               = func_get_arg(24);
            $this->wonTime                  = func_get_arg(25);
            $this->firstWonTime             = func_get_arg(26);
            $this->lostTime                 = func_get_arg(27);
            $this->productsCount            = func_get_arg(28);
            $this->filesCount               = func_get_arg(29);
            $this->notesCount               = func_get_arg(30);
            $this->followersCount           = func_get_arg(31);
            $this->emailMessagesCount       = func_get_arg(32);
            $this->activitiesCount          = func_get_arg(33);
            $this->doneActivitiesCount      = func_get_arg(34);
            $this->undoneActivitiesCount    = func_get_arg(35);
            $this->referenceActivitiesCount = func_get_arg(36);
            $this->participantsCount        = func_get_arg(37);
            $this->expectedCloseDate        = func_get_arg(38);
            $this->lastIncomingMailTime     = func_get_arg(39);
            $this->lastOutgoingMailTime     = func_get_arg(40);
            $this->label                    = func_get_arg(41);
            $this->stageOrderNr             = func_get_arg(42);
            $this->personName               = func_get_arg(43);
            $this->orgName                  = func_get_arg(44);
            $this->nextActivitySubject      = func_get_arg(45);
            $this->nextActivityType         = func_get_arg(46);
            $this->nextActivityDuration     = func_get_arg(47);
            $this->nextActivityNote         = func_get_arg(48);
            $this->formattedValue           = func_get_arg(49);
            $this->weightedValue            = func_get_arg(50);
            $this->formattedWeightedValue   = func_get_arg(51);
            $this->weightedValueCurrency    = func_get_arg(52);
            $this->rottenTime               = func_get_arg(53);
            $this->ownerName                = func_get_arg(54);
            $this->ccEmail                  = func_get_arg(55);
            $this->orgHidden                = func_get_arg(56);
            $this->personHidden             = func_get_arg(57);
            $this->mergeWhatId              = func_get_arg(58);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                         = $this->id;
        $json['creator_user_id']            = $this->creatorUserId;
        $json['user_id']                    = $this->userId;
        $json['person_id']                  = $this->personId;
        $json['org_id']                     = $this->orgId;
        $json['stage_id']                   = $this->stageId;
        $json['title']                      = $this->title;
        $json['value']                      = $this->value;
        $json['currency']                   = $this->currency;
        $json['add_time']                   = $this->addTime;
        $json['update_time']                = $this->updateTime;
        $json['stage_change_time']          = $this->stageChangeTime;
        $json['active']                     = $this->active;
        $json['deleted']                    = $this->deleted;
        $json['status']                     = $this->status;
        $json['probability']                = $this->probability;
        $json['next_activity_date']         = $this->nextActivityDate;
        $json['next_activity_time']         = $this->nextActivityTime;
        $json['next_activity_id']           = $this->nextActivityId;
        $json['last_activity_id']           = $this->lastActivityId;
        $json['last_activity_date']         = $this->lastActivityDate;
        $json['lost_reason']                = $this->lostReason;
        $json['visible_to']                 = $this->visibleTo;
        $json['close_time']                 = $this->closeTime;
        $json['pipeline_id']                = $this->pipelineId;
        $json['won_time']                   = $this->wonTime;
        $json['first_won_time']             = $this->firstWonTime;
        $json['lost_time']                  = $this->lostTime;
        $json['products_count']             = $this->productsCount;
        $json['files_count']                = $this->filesCount;
        $json['notes_count']                = $this->notesCount;
        $json['followers_count']            = $this->followersCount;
        $json['email_messages_count']       = $this->emailMessagesCount;
        $json['activities_count']           = $this->activitiesCount;
        $json['done_activities_count']      = $this->doneActivitiesCount;
        $json['undone_activities_count']    = $this->undoneActivitiesCount;
        $json['reference_activities_count'] = $this->referenceActivitiesCount;
        $json['participants_count']         = $this->participantsCount;
        $json['expected_close_date']        = $this->expectedCloseDate;
        $json['last_incoming_mail_time']    = $this->lastIncomingMailTime;
        $json['last_outgoing_mail_time']    = $this->lastOutgoingMailTime;
        $json['label']                      = $this->label;
        $json['stage_order_nr']             = $this->stageOrderNr;
        $json['person_name']                = $this->personName;
        $json['org_name']                   = $this->orgName;
        $json['next_activity_subject']      = $this->nextActivitySubject;
        $json['next_activity_type']         = $this->nextActivityType;
        $json['next_activity_duration']     = $this->nextActivityDuration;
        $json['next_activity_note']         = $this->nextActivityNote;
        $json['formatted_value']            = $this->formattedValue;
        $json['weighted_value']             = $this->weightedValue;
        $json['formatted_weighted_value']   = $this->formattedWeightedValue;
        $json['weighted_value_currency']    = $this->weightedValueCurrency;
        $json['rotten_time']                = $this->rottenTime;
        $json['owner_name']                 = $this->ownerName;
        $json['cc_email']                   = $this->ccEmail;
        $json['org_hidden']                 = $this->orgHidden;
        $json['person_hidden']              = $this->personHidden;
        $json['merge_what_id']              = $this->mergeWhatId;

        return $json;
    }
}
