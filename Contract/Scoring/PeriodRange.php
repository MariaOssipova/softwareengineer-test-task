<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Scoring.proto

namespace Scoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>scoring.PeriodRange</code>
 */
class PeriodRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.scoring.Period StartDate = 1;</code>
     */
    protected $StartDate = null;
    /**
     * Generated from protobuf field <code>.scoring.Period EndDate = 2;</code>
     */
    protected $EndDate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Scoring\Period $StartDate
     *     @type \Scoring\Period $EndDate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Scoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.scoring.Period StartDate = 1;</code>
     * @return \Scoring\Period|null
     */
    public function getStartDate()
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }

    public function hasStartDate()
    {
        return isset($this->StartDate);
    }

    public function clearStartDate()
    {
        unset($this->StartDate);
    }

    /**
     * Generated from protobuf field <code>.scoring.Period StartDate = 1;</code>
     * @param \Scoring\Period $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Scoring\Period::class);
        $this->StartDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.scoring.Period EndDate = 2;</code>
     * @return \Scoring\Period|null
     */
    public function getEndDate()
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }

    public function hasEndDate()
    {
        return isset($this->EndDate);
    }

    public function clearEndDate()
    {
        unset($this->EndDate);
    }

    /**
     * Generated from protobuf field <code>.scoring.Period EndDate = 2;</code>
     * @param \Scoring\Period $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Scoring\Period::class);
        $this->EndDate = $var;

        return $this;
    }

}

