<?php
// GENERATED CODE -- DO NOT EDIT!

namespace CategoryWeights;

/**
 */
class CategoryWeightsServiceStub {

    /**
     * @param \CategoryWeights\Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \CategoryWeights\Category for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetScoresByCategoriesForPeriod(
        \CategoryWeights\Period $request,
        \Grpc\ServerContext $context
    ): ?\CategoryWeights\Category {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \CategoryWeights\Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \CategoryWeights\Ticket for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetScoresByTicketsForPeriod(
        \CategoryWeights\Period $request,
        \Grpc\ServerContext $context
    ): ?\CategoryWeights\Ticket {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \CategoryWeights\Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \CategoryWeights\Score for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetOverallScoreForPeriod(
        \CategoryWeights\Period $request,
        \Grpc\ServerContext $context
    ): ?\CategoryWeights\Score {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \CategoryWeights\PeriodRange $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \CategoryWeights\Score for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetOverallScoreChangeForPeriodRange(
        \CategoryWeights\PeriodRange $request,
        \Grpc\ServerContext $context
    ): ?\CategoryWeights\Score {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/categoryWeights.CategoryWeightsService/GetScoresByCategoriesForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetScoresByCategoriesForPeriod',
                '\CategoryWeights\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/categoryWeights.CategoryWeightsService/GetScoresByTicketsForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetScoresByTicketsForPeriod',
                '\CategoryWeights\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/categoryWeights.CategoryWeightsService/GetOverallScoreForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetOverallScoreForPeriod',
                '\CategoryWeights\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/categoryWeights.CategoryWeightsService/GetOverallScoreChangeForPeriodRange' => new \Grpc\MethodDescriptor(
                $this,
                'GetOverallScoreChangeForPeriodRange',
                '\CategoryWeights\PeriodRange',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
