<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *The additional data of the list
 */
class AdditionalData implements JsonSerializable
{
    /**
     * The pagination start
     * @var integer|null $start public property
     */
    public $start;

    /**
     * Items shown per page
     * @var integer|null $limit public property
     */
    public $limit;

    /**
     * If there are more list items in the collection than displayed or not
     * @maps more_items_in_collection
     * @var bool|null $moreItemsInCollection public property
     */
    public $moreItemsInCollection;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $start                 Initialization value for $this->start
     * @param integer $limit                 Initialization value for $this->limit
     * @param bool    $moreItemsInCollection Initialization value for $this->moreItemsInCollection
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->start                 = func_get_arg(0);
            $this->limit                 = func_get_arg(1);
            $this->moreItemsInCollection = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['start']                    = $this->start;
        $json['limit']                    = $this->limit;
        $json['more_items_in_collection'] = $this->moreItemsInCollection;

        return $json;
    }
}
