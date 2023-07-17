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
class ProductField implements JsonSerializable
{
    /**
     * Name of the field
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * When field_type is either set or enum, possible options must be supplied as a JSON-encoded
     * sequential array, for example: ["red","blue","lilac"]
     * @var array|null $options public property
     */
    public $options;

    /**
     * Type of the field.<dl class="fields-list"><dt>varchar</dt><dd>Text (up to 255
     * characters)</dd><dt>varchar_auto</dt><dd>Autocomplete text (up to 255
     * characters)</dd><dt>text</dt><dd>Long text (up to 65k characters)</dd><dt>double</dt><dd>Numeric
     * value</dd><dt>monetary</dt><dd>Monetary field (has a numeric value and a currency
     * value)</dd><dt>date</dt><dd>Date (format YYYY-MM-DD)</dd><dt>set</dt><dd>Options field with a
     * possibility of having multiple chosen options</dd><dt>enum</dt><dd>Options field with a single
     * possible chosen option</dd><dt>user</dt><dd>User field (contains a user ID of another Pipedrive
     * user)</dd><dt>org</dt><dd>Organization field (contains an organization ID which is stored on the
     * same account)</dd><dt>people</dt><dd>Person field (contains a product ID which is stored on the same
     * account)</dd><dt>phone</dt><dd>Phone field (up to 255 numbers and/or
     * characters)</dd><dt>time</dt><dd>Time field (format HH:MM:SS)</dd><dt>timerange</dt><dd>Time-range
     * field (has a start time and end time value, both HH:MM:SS)</dd><dt>daterange</dt><dd>Date-range
     * field (has a start date and end date value, both YYYY-MM-DD)</dd></dl>
     * @required
     * @maps field_type
     * @var string $fieldType public property
     */
    public $fieldType;

    /**
     * The ID of the Product Field
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The key of the Product Field
     * @var string|null $key public property
     */
    public $key;

    /**
     * Position (index) of the Product Field in the detail view
     * @maps order_nr
     * @var integer|null $orderNr public property
     */
    public $orderNr;

    /**
     * The Product Field creation time. Format: YYYY-MM-DD HH:MM:SS
     * @maps add_time
     * @var string|null $addTime public property
     */
    public $addTime;

    /**
     * The Product Field last update time. Format: YYYY-MM-DD HH:MM:SS
     * @maps update_time
     * @var string|null $updateTime public property
     */
    public $updateTime;

    /**
     * The ID of the last user to update the Product Field
     * @maps last_updated_by_user_id
     * @var integer|null $lastUpdatedByUserId public property
     */
    public $lastUpdatedByUserId;

    /**
     * Whether or not the Product Field is currently active
     * @maps active_flag
     * @var bool|null $activeFlag public property
     */
    public $activeFlag;

    /**
     * Whether or not the Product Field Name and metadata is editable
     * @maps edit_flag
     * @var bool|null $editFlag public property
     */
    public $editFlag;

    /**
     * Whether or not the Product Field is visible in the Add Product Modal
     * @maps add_visible_flag
     * @var bool|null $addVisibleFlag public property
     */
    public $addVisibleFlag;

    /**
     * Whether or not the Product Field is marked as important
     * @maps important_flag
     * @var bool|null $importantFlag public property
     */
    public $importantFlag;

    /**
     * Whether or not the Product Field data can be edited
     * @maps bulk_edit_allowed
     * @var bool|null $bulkEditAllowed public property
     */
    public $bulkEditAllowed;

    /**
     * Whether or not the Product Field is searchable
     * @maps searchable_flag
     * @var bool|null $searchableFlag public property
     */
    public $searchableFlag;

    /**
     * Whether or not the Product Field value can be used when filtering searches
     * @maps filtering_allowed
     * @var bool|null $filteringAllowed public property
     */
    public $filteringAllowed;

    /**
     * Whether or not the Product Field is sortable
     * @maps sortable_flag
     * @var bool|null $sortableFlag public property
     */
    public $sortableFlag;

    /**
     * Whether or not the Product Field is mandatory when creating products
     * @maps mandatory_flag
     * @var bool|null $mandatoryFlag public property
     */
    public $mandatoryFlag;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name                Initialization value for $this->name
     * @param string  $options             Initialization value for $this->options
     * @param string  $fieldType           Initialization value for $this->fieldType
     * @param integer $id                  Initialization value for $this->id
     * @param string  $key                 Initialization value for $this->key
     * @param integer $orderNr             Initialization value for $this->orderNr
     * @param string  $addTime             Initialization value for $this->addTime
     * @param string  $updateTime          Initialization value for $this->updateTime
     * @param integer $lastUpdatedByUserId Initialization value for $this->lastUpdatedByUserId
     * @param bool    $activeFlag          Initialization value for $this->activeFlag
     * @param bool    $editFlag            Initialization value for $this->editFlag
     * @param bool    $addVisibleFlag      Initialization value for $this->addVisibleFlag
     * @param bool    $importantFlag       Initialization value for $this->importantFlag
     * @param bool    $bulkEditAllowed     Initialization value for $this->bulkEditAllowed
     * @param bool    $searchableFlag      Initialization value for $this->searchableFlag
     * @param bool    $filteringAllowed    Initialization value for $this->filteringAllowed
     * @param bool    $sortableFlag        Initialization value for $this->sortableFlag
     * @param bool    $mandatoryFlag       Initialization value for $this->mandatoryFlag
     */
    public function __construct()
    {
        if (18 == func_num_args()) {
            $this->name                = func_get_arg(0);
            $this->options             = func_get_arg(1);
            $this->fieldType           = func_get_arg(2);
            $this->id                  = func_get_arg(3);
            $this->key                 = func_get_arg(4);
            $this->orderNr             = func_get_arg(5);
            $this->addTime             = func_get_arg(6);
            $this->updateTime          = func_get_arg(7);
            $this->lastUpdatedByUserId = func_get_arg(8);
            $this->activeFlag          = func_get_arg(9);
            $this->editFlag            = func_get_arg(10);
            $this->addVisibleFlag      = func_get_arg(11);
            $this->importantFlag       = func_get_arg(12);
            $this->bulkEditAllowed     = func_get_arg(13);
            $this->searchableFlag      = func_get_arg(14);
            $this->filteringAllowed    = func_get_arg(15);
            $this->sortableFlag        = func_get_arg(16);
            $this->mandatoryFlag       = func_get_arg(17);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']                    = $this->name;
        $json['options']                 = $this->options;
        $json['field_type']              = $this->fieldType;
        $json['id']                      = $this->id;
        $json['key']                     = $this->key;
        $json['order_nr']                = $this->orderNr;
        $json['add_time']                = $this->addTime;
        $json['update_time']             = $this->updateTime;
        $json['last_updated_by_user_id'] = $this->lastUpdatedByUserId;
        $json['active_flag']             = $this->activeFlag;
        $json['edit_flag']               = $this->editFlag;
        $json['add_visible_flag']        = $this->addVisibleFlag;
        $json['important_flag']          = $this->importantFlag;
        $json['bulk_edit_allowed']       = $this->bulkEditAllowed;
        $json['searchable_flag']         = $this->searchableFlag;
        $json['filtering_allowed']       = $this->filteringAllowed;
        $json['sortable_flag']           = $this->sortableFlag;
        $json['mandatory_flag']          = $this->mandatoryFlag;

        return $json;
    }
}
