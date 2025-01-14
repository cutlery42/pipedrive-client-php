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
class Data11 implements JsonSerializable
{
    /**
     * The ID of the Product
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The ID of the price variation of the Product
     * @maps variation_id
     * @var string|null $variationId public property
     */
    public $variationId;

    /**
     * The name of the Product
     * @var string|null $name public property
     */
    public $name;

    /**
     * The title of the Product
     * @var string|null $title public property
     */
    public $title;

    /**
     * The name of the price variation of the Product
     * @maps variation_name
     * @var string|null $variationName public property
     */
    public $variationName;

    /**
     * The value corresponding to the Product price
     * @var double|null $price public property
     */
    public $price;

    /**
     * The Product price with the currency format
     * @maps price_formatted
     * @var string|null $priceFormatted public property
     */
    public $priceFormatted;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id             Initialization value for $this->id
     * @param string  $variationId    Initialization value for $this->variationId
     * @param string  $name           Initialization value for $this->name
     * @param string  $title          Initialization value for $this->title
     * @param string  $variationName  Initialization value for $this->variationName
     * @param double  $price          Initialization value for $this->price
     * @param string  $priceFormatted Initialization value for $this->priceFormatted
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->id             = func_get_arg(0);
            $this->variationId    = func_get_arg(1);
            $this->name           = func_get_arg(2);
            $this->title          = func_get_arg(3);
            $this->variationName  = func_get_arg(4);
            $this->price          = func_get_arg(5);
            $this->priceFormatted = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']              = $this->id;
        $json['variation_id']    = $this->variationId;
        $json['name']            = $this->name;
        $json['title']           = $this->title;
        $json['variation_name']  = $this->variationName;
        $json['price']           = $this->price;
        $json['price_formatted'] = $this->priceFormatted;

        return $json;
    }
}
