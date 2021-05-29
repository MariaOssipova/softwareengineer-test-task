proto:
	protoc -I=protos \
	protos/CategoryWeights.proto \
	--php_out=src \
	--grpc_out=generate_server:src \
	--plugin=protoc-gen-grpc=../../grpc/cmake/build/grpc_php_plugin
