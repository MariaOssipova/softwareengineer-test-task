package main

import (
	"flag"
	"google.golang.org/grpc"
	"log"
	"softwareengineer-test-task/proto"
)

var (
	serverAddr = flag.String("server_addr", "localhost:10000", "The server address in the format of host:port")
)

func main() {
	opts := grpc.WithInsecure()
	conn, err := grpc.Dial(*serverAddr, opts)
	if err != nil {
		log.Fatalf("fail to dial: %v", err)
	}
	defer conn.Close()
	client := proto.NewCategoryWeightsServiceClient(conn)

	printResponse(client)
}

func printResponse(client proto.CategoryWeightsServiceClient) {
	log.Printf("Client accessible")
}
