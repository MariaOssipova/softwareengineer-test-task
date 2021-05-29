<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

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
     * @param \Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetScoresByCategoriesForPeriod(\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/CategoryWeightsService/GetScoresByCategoriesForPeriod',
        $argument,
        ['\Category', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetScoresByTicketsForPeriod(\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/CategoryWeightsService/GetScoresByTicketsForPeriod',
        $argument,
        ['\Ticket', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Period $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOverallScoreForPeriod(\Period $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/CategoryWeightsService/GetOverallScoreForPeriod',
        $argument,
        ['\Score', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \PeriodRange $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOverallScoreChangeForPeriodRange(\PeriodRange $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/CategoryWeightsService/GetOverallScoreChangeForPeriodRange',
        $argument,
        ['\Score', 'decode'],
        $metadata, $options);
    }

}
