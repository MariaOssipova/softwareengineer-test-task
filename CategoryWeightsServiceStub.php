<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

/**
 */
class CategoryWeightsServiceStub {

    /**
     * @param \Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Category for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetScoresByCategoriesForPeriod(
        \Period $request,
        \Grpc\ServerContext $context
    ): ?\Category {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Ticket for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetScoresByTicketsForPeriod(
        \Period $request,
        \Grpc\ServerContext $context
    ): ?\Ticket {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Score for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetOverallScoreForPeriod(
        \Period $request,
        \Grpc\ServerContext $context
    ): ?\Score {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \PeriodRange $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Score for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetOverallScoreChangeForPeriodRange(
        \PeriodRange $request,
        \Grpc\ServerContext $context
    ): ?\Score {
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
            '/CategoryWeightsService/GetScoresByCategoriesForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetScoresByCategoriesForPeriod',
                '\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/CategoryWeightsService/GetScoresByTicketsForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetScoresByTicketsForPeriod',
                '\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/CategoryWeightsService/GetOverallScoreForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetOverallScoreForPeriod',
                '\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/CategoryWeightsService/GetOverallScoreChangeForPeriodRange' => new \Grpc\MethodDescriptor(
                $this,
                'GetOverallScoreChangeForPeriodRange',
                '\PeriodRange',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
