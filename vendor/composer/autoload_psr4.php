<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Routeguide\\' => array($baseDir . '/route_guide/Routeguide'),
    'Helloworld\\' => array($baseDir . '/Helloworld'),
    'Grpc\\' => array($vendorDir . '/grpc/grpc/src/lib'),
    'Google\\Protobuf\\' => array($vendorDir . '/google/protobuf/src/Google/Protobuf'),
    'GPBMetadata\\Google\\Protobuf\\' => array($vendorDir . '/google/protobuf/src/GPBMetadata/Google/Protobuf'),
    'GPBMetadata\\' => array($baseDir . '/GPBMetadata', $baseDir . '/route_guide/GPBMetadata'),
);
