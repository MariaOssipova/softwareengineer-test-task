<?php
// GENERATED CODE -- DO NOT EDIT!

namespace CategoryWeights;

/**
 */
class CategoryWeightsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \CategoryWeights\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetScoresByCategoriesForPeriod(\CategoryWeights\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/categoryWeights.CategoryWeightsService/GetScoresByCategoriesForPeriod',
        $argument,
        ['\CategoryWeights\Category', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CategoryWeights\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetScoresByTicketsForPeriod(\CategoryWeights\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/categoryWeights.CategoryWeightsService/GetScoresByTicketsForPeriod',
        $argument,
        ['\CategoryWeights\Ticket', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CategoryWeights\Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOverallScoreForPeriod(\CategoryWeights\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/categoryWeights.CategoryWeightsService/GetOverallScoreForPeriod',
        $argument,
        ['\CategoryWeights\Score', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CategoryWeights\PeriodRange $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOverallScoreChangeForPeriodRange(\CategoryWeights\PeriodRange $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/categoryWeights.CategoryWeightsService/GetOverallScoreChangeForPeriodRange',
        $argument,
        ['\CategoryWeights\Score', 'decode'],
        $metadata, $options);
    }

}
