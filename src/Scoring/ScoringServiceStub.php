<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Scoring;

/**
 */
class ScoringServiceStub {

    /**
     * @param \Scoring\Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Scoring\Category for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetScoresByCategoriesForPeriod(
        \Scoring\Period $request,
        \Grpc\ServerContext $context
    ): ?\Scoring\Category {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Scoring\Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Scoring\Ticket for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetScoresByTicketsForPeriod(
        \Scoring\Period $request,
        \Grpc\ServerContext $context
    ): ?\Scoring\Ticket {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Scoring\Period $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Scoring\Score for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetOverallScoreForPeriod(
        \Scoring\Period $request,
        \Grpc\ServerContext $context
    ): ?\Scoring\Score {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Scoring\PeriodRange $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Scoring\Score for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetOverallScoreChangeForPeriodRange(
        \Scoring\PeriodRange $request,
        \Grpc\ServerContext $context
    ): ?\Scoring\Score {
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
            '/scoring.ScoringService/GetScoresByCategoriesForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetScoresByCategoriesForPeriod',
                '\Scoring\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/scoring.ScoringService/GetScoresByTicketsForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetScoresByTicketsForPeriod',
                '\Scoring\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/scoring.ScoringService/GetOverallScoreForPeriod' => new \Grpc\MethodDescriptor(
                $this,
                'GetOverallScoreForPeriod',
                '\Scoring\Period',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/scoring.ScoringService/GetOverallScoreChangeForPeriodRange' => new \Grpc\MethodDescriptor(
                $this,
                'GetOverallScoreChangeForPeriodRange',
                '\Scoring\PeriodRange',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
