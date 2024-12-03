<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/endpoint.proto

namespace GPBMetadata\Google\Cloud\Servicedirectory\V1;

class Endpoint
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/servicedirectory/v1/endpoint.proto google.cloud.servicedirectory.v1google/api/resource.proto"�
Endpoint
name (	B�A
address (	B�A
port (B�AU
annotations (2;.google.cloud.servicedirectory.v1.Endpoint.AnnotationsEntryB�A@
network (	B/�A�A)
\'servicedirectory.googleapis.com/Network
uid	 (	B�A2
AnnotationsEntry
key (	
value (	:8:��A�
(servicedirectory.googleapis.com/Endpointfprojects/{project}/locations/{location}/namespaces/{namespace}/services/{service}/endpoints/{endpoint}B�
$com.google.cloud.servicedirectory.v1BEndpointProtoPZPcloud.google.com/go/servicedirectory/apiv1/servicedirectorypb;servicedirectorypb� Google.Cloud.ServiceDirectory.V1� Google\\Cloud\\ServiceDirectory\\V1�#Google::Cloud::ServiceDirectory::V1�Aa
\'servicedirectory.googleapis.com/Network6projects/{project}/locations/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

