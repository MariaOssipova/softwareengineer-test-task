<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CategoryWeights.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ticket</code>
 */
class Ticket extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 ticket_id = 1;</code>
     */
    protected $ticket_id = 0;
    /**
     * Generated from protobuf field <code>repeated .Score score = 2;</code>
     */
    private $score;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ticket_id
     *     @type \Score[]|\Google\Protobuf\Internal\RepeatedField $score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CategoryWeights::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 ticket_id = 1;</code>
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticket_id;
    }

    /**
     * Generated from protobuf field <code>int32 ticket_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTicketId($var)
    {
        GPBUtil::checkInt32($var);
        $this->ticket_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Score score = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>repeated .Score score = 2;</code>
     * @param \Score[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScore($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Score::class);
        $this->score = $arr;

        return $this;
    }

}
