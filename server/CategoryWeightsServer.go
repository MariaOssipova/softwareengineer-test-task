package main

import (
	context "context"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
	proto "softwareengineer-test-task/proto"
)

type CategoryWeightsServer struct {
	proto.UnimplementedCategoryWeightsServiceServer
}

func (s *CategoryWeightsServer) GetScoresByCategoriesForPeriod(context.Context, *proto.Period) (*proto.Category, error) {
	return nil, status.Errorf(codes.Unimplemented, "method GetScoresByCategoriesForPeriod not implemented")
}

func (s *CategoryWeightsServer) GetScoresByTicketsForPeriod(context.Context, *proto.Period) (*proto.Ticket, error) {
	return nil, status.Errorf(codes.Unimplemented, "method GetScoresByTicketsForPeriod not implemented")
}
func (s *CategoryWeightsServer) GetOverallScoreForPeriod(context.Context, *proto.Period) (*proto.Score, error) {
	return nil, status.Errorf(codes.Unimplemented, "method GetOverallScoreForPeriod not implemented")
}
func (s *CategoryWeightsServer) GetOverallScoreChangeForPeriodRange(context.Context, *proto.PeriodRange) (*proto.Score, error) {
	return nil, status.Errorf(codes.Unimplemented, "method GetOverallScoreChangeForPeriodRange not implemented")
}
