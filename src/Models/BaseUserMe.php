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
class BaseUserMe implements JsonSerializable
{
    /**
     * The User ID
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The User name
     * @var string|null $name public property
     */
    public $name;

    /**
     * The User default currency
     * @maps default_currency
     * @var string|null $defaultCurrency public property
     */
    public $defaultCurrency;

    /**
     * The User locale
     * @var string|null $locale public property
     */
    public $locale;

    /**
     * The User language ID
     * @var integer|null $lang public property
     */
    public $lang;

    /**
     * The User email
     * @var string|null $email public property
     */
    public $email;

    /**
     * The User phone
     * @var string|null $phone public property
     */
    public $phone;

    /**
     * Boolean that indicates if the User is activated
     * @var bool|null $activated public property
     */
    public $activated;

    /**
     * The User last login date and time. Format: YYYY-MM-DD HH:MM:SS
     * @maps last_login
     * @var string|null $lastLogin public property
     */
    public $lastLogin;

    /**
     * The User creation date and time. Format: YYYY-MM-DD HH:MM:SS
     * @var string|null $created public property
     */
    public $created;

    /**
     * The User last modification date and time. Format: YYYY-MM-DD HH:MM:SS
     * @var string|null $modified public property
     */
    public $modified;

    /**
     * The variation of signup flow (if exists). E.g. google
     * @maps signup_flow_variation
     * @var string|null $signupFlowVariation public property
     */
    public $signupFlowVariation;

    /**
     * Boolean that indicates if the User has created a Company
     * @maps has_created_company
     * @var bool|null $hasCreatedCompany public property
     */
    public $hasCreatedCompany;

    /**
     * Indication if the User is admin (1 = true, 0 = false)
     * @maps is_admin
     * @var int|null $isAdmin public property
     */
    public $isAdmin;

    /**
     * Boolean that indicates if the User is activated
     * @maps active_flag
     * @var bool|null $activeFlag public property
     */
    public $activeFlag;

    /**
     * The User timezone name
     * @maps timezone_name
     * @var string|null $timezoneName public property
     */
    public $timezoneName;

    /**
     * The User timezone offset
     * @maps timezone_offset
     * @var string|null $timezoneOffset public property
     */
    public $timezoneOffset;

    /**
     * The ID of the User role
     * @maps role_id
     * @var integer|null $roleId public property
     */
    public $roleId;

    /**
     * The User icon URL
     * @maps icon_url
     * @var string|null $iconUrl public property
     */
    public $iconUrl;

    /**
     * Boolean that indicates if the requested User is the same which is logged in (in this case, always
     * true)
     * @maps is_you
     * @var bool|null $isYou public property
     */
    public $isYou;

    /**
     * The User company ID
     * @maps company_id
     * @var integer|null $companyId public property
     */
    public $companyId;

    /**
     * The User company name
     * @maps company_name
     * @var string|null $companyName public property
     */
    public $companyName;

    /**
     * The User company domain
     * @maps company_domain
     * @var string|null $companyDomain public property
     */
    public $companyDomain;

    /**
     * The User language details
     * @var \Pipedrive\Models\Language|null $language public property
     */
    public $language;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer  $id                  Initialization value for $this->id
     * @param string   $name                Initialization value for $this->name
     * @param string   $defaultCurrency     Initialization value for $this->defaultCurrency
     * @param string   $locale              Initialization value for $this->locale
     * @param integer  $lang                Initialization value for $this->lang
     * @param string   $email               Initialization value for $this->email
     * @param string   $phone               Initialization value for $this->phone
     * @param bool     $activated           Initialization value for $this->activated
     * @param string   $lastLogin           Initialization value for $this->lastLogin
     * @param string   $created             Initialization value for $this->created
     * @param string   $modified            Initialization value for $this->modified
     * @param string   $signupFlowVariation Initialization value for $this->signupFlowVariation
     * @param bool     $hasCreatedCompany   Initialization value for $this->hasCreatedCompany
     * @param int      $isAdmin             Initialization value for $this->isAdmin
     * @param bool     $activeFlag          Initialization value for $this->activeFlag
     * @param string   $timezoneName        Initialization value for $this->timezoneName
     * @param string   $timezoneOffset      Initialization value for $this->timezoneOffset
     * @param integer  $roleId              Initialization value for $this->roleId
     * @param string   $iconUrl             Initialization value for $this->iconUrl
     * @param bool     $isYou               Initialization value for $this->isYou
     * @param integer  $companyId           Initialization value for $this->companyId
     * @param string   $companyName         Initialization value for $this->companyName
     * @param string   $companyDomain       Initialization value for $this->companyDomain
     * @param Language $language            Initialization value for $this->language
     */
    public function __construct()
    {
        if (24 == func_num_args()) {
            $this->id                  = func_get_arg(0);
            $this->name                = func_get_arg(1);
            $this->defaultCurrency     = func_get_arg(2);
            $this->locale              = func_get_arg(3);
            $this->lang                = func_get_arg(4);
            $this->email               = func_get_arg(5);
            $this->phone               = func_get_arg(6);
            $this->activated           = func_get_arg(7);
            $this->lastLogin           = func_get_arg(8);
            $this->created             = func_get_arg(9);
            $this->modified            = func_get_arg(10);
            $this->signupFlowVariation = func_get_arg(11);
            $this->hasCreatedCompany   = func_get_arg(12);
            $this->isAdmin             = func_get_arg(13);
            $this->activeFlag          = func_get_arg(14);
            $this->timezoneName        = func_get_arg(15);
            $this->timezoneOffset      = func_get_arg(16);
            $this->roleId              = func_get_arg(17);
            $this->iconUrl             = func_get_arg(18);
            $this->isYou               = func_get_arg(19);
            $this->companyId           = func_get_arg(20);
            $this->companyName         = func_get_arg(21);
            $this->companyDomain       = func_get_arg(22);
            $this->language            = func_get_arg(23);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                    = $this->id;
        $json['name']                  = $this->name;
        $json['default_currency']      = $this->defaultCurrency;
        $json['locale']                = $this->locale;
        $json['lang']                  = $this->lang;
        $json['email']                 = $this->email;
        $json['phone']                 = $this->phone;
        $json['activated']             = $this->activated;
        $json['last_login']            = $this->lastLogin;
        $json['created']               = $this->created;
        $json['modified']              = $this->modified;
        $json['signup_flow_variation'] = $this->signupFlowVariation;
        $json['has_created_company']   = $this->hasCreatedCompany;
        $json['is_admin']              = $this->isAdmin;
        $json['active_flag']           = $this->activeFlag;
        $json['timezone_name']         = $this->timezoneName;
        $json['timezone_offset']       = $this->timezoneOffset;
        $json['role_id']               = $this->roleId;
        $json['icon_url']              = $this->iconUrl;
        $json['is_you']                = $this->isYou;
        $json['company_id']            = $this->companyId;
        $json['company_name']          = $this->companyName;
        $json['company_domain']        = $this->companyDomain;
        $json['language']              = $this->language;

        return $json;
    }
}
