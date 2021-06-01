proto:
	protoc -I=protos \
	protos/CategoryWeights.proto \
	--php_out=contracts \
	--grpc_out=generate_server:contracts \
	--plugin=protoc-gen-grpc=../../grpc/cmake/build/grpc_php_plugin
