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
class NewGoal implements JsonSerializable
{
    /**
     * Title of the goal.
     * @var string|null $title public property
     */
    public $title;

    /**
     * Who is this goal assigned to. It requires the following JSON structure: { "id": "1", "type":
     * "person" }. `type` can be either `person`, `company` or `team`. ID of the assignee person, company
     * or team.
     * @required
     * @var object $assignee public property
     */
    public $assignee;

    /**
     * Type of the goal. It requires the following JSON structure: { "name": "deals_started", "params": {
     * "pipeline_id": 1 } }. Type can be one of: `deals_won`,`deals_progressed`,`activities_completed`,
     * `activities_added` or `deals_started`. `params` can include `pipeline_id`, `stage_id` or
     * `activity_type_id`. `stage_id` is related to only `deals_progressed` type of goals and
     * `activity_type_id` to `activities_completed` or `activities_added` types of goals. To track goal in
     * all pipelines set `pipeline_id` as `null`.
     * @required
     * @var object $type public property
     */
    public $type;

    /**
     * Expected outcome of the goal. Expected outcome can be tracked either by `quantity` or by `sum`. It
     * requires the following JSON structure: { "target": "50", "tracking_metric": "quantity" } or {
     * "target": "50", "tracking_metric": "sum", "currency_id": 1 }. `currency_id` should only be added to
     * `sum` type of goals.
     * @required
     * @maps expected_outcome
     * @var object $expectedOutcome public property
     */
    public $expectedOutcome;

    /**
     * Date when the goal starts and ends. It requires the following JSON structure: { "start": "2019-01-
     * 01", "end": "2022-12-31" }. Date in format of YYYY-MM-DD.
     * @required
     * @var object $duration public property
     */
    public $duration;

    /**
     * Date when the goal starts and ends. It requires the following JSON structure: { "start": "2019-01-
     * 01", "end": "2022-12-31" }. Date in format of YYYY-MM-DD.
     * @required
     * @var string $interval public property
     */
    public $interval;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $title           Initialization value for $this->title
     * @param object $assignee        Initialization value for $this->assignee
     * @param object $type            Initialization value for $this->type
     * @param object $expectedOutcome Initialization value for $this->expectedOutcome
     * @param object $duration        Initialization value for $this->duration
     * @param string $interval        Initialization value for $this->interval
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->title           = func_get_arg(0);
            $this->assignee        = func_get_arg(1);
            $this->type            = func_get_arg(2);
            $this->expectedOutcome = func_get_arg(3);
            $this->duration        = func_get_arg(4);
            $this->interval        = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['title']            = $this->title;
        $json['assignee']         = $this->assignee;
        $json['type']             = $this->type;
        $json['expected_outcome'] = $this->expectedOutcome;
        $json['duration']         = $this->duration;
        $json['interval']         = $this->interval;

        return $json;
    }
}
