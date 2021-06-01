<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Scoring;

/**
 */
class ScoringServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Scoring\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetScoresByCategoriesForPeriod(\Scoring\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scoring.ScoringService/GetScoresByCategoriesForPeriod',
        $argument,
        ['\Scoring\ScoresByCategories', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Scoring\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetScoresByTicketsForPeriod(\Scoring\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scoring.ScoringService/GetScoresByTicketsForPeriod',
        $argument,
        ['\Scoring\ScoresByTickets', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Scoring\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOverallScoreForPeriod(\Scoring\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scoring.ScoringService/GetOverallScoreForPeriod',
        $argument,
        ['\Scoring\Score', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Scoring\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOverallScoreChangeForPeriodRange(\Scoring\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scoring.ScoringService/GetOverallScoreChangeForPeriodRange',
        $argument,
        ['\Scoring\Score', 'decode'],
        $metadata, $options);
    }

}
