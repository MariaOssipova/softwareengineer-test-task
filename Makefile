proto:
	protoc -I=protos \
	protos/Scoring.proto \
	--php_out=Contract \
	--grpc_out=generate_server:Contract \
	--plugin=protoc-gen-grpc=../../grpc/cmake/build/grpc_php_plugin