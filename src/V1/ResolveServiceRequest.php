<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/lookup_service.proto

namespace Google\Cloud\ServiceDirectory\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [LookupService.ResolveService][google.cloud.servicedirectory.v1.LookupService.ResolveService].
 * Looks up a service by its name, returns the service and its endpoints.
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1.ResolveServiceRequest</code>
 */
class ResolveServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the service to resolve.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The maximum number of endpoints to return. Defaults to 25.
     * Maximum is 100. If a value less than one is specified, the Default is used.
     * If a value greater than the Maximum is specified, the Maximum is used.
     *
     * Generated from protobuf field <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_endpoints = 0;
    /**
     * Optional. The filter applied to the endpoints of the resolved service.
     * General `filter` string syntax:
     * `<field> <operator> <value> (<logical connector>)`
     * *   `<field>` can be `name`, `address`, `port`, or `annotations.<key>` for
     *     map field
     * *   `<operator>` can be `<`, `>`, `<=`, `>=`, `!=`, `=`, `:`. Of which `:`
     *     means `HAS`, and is roughly the same as `=`
     * *   `<value>` must be the same data type as field
     * *   `<logical connector>` can be `AND`, `OR`, `NOT`
     * Examples of valid filters:
     * *   `annotations.owner` returns endpoints that have a annotation with the
     *     key `owner`, this is the same as `annotations:owner`
     * *   `annotations.protocol=gRPC` returns endpoints that have key/value
     *     `protocol=gRPC`
     * *   `address=192.108.1.105` returns endpoints that have this address
     * *   `port>8080` returns endpoints that have port number larger than 8080
     * *
     * `name>projects/my-project/locations/us-east1/namespaces/my-namespace/services/my-service/endpoints/endpoint-c`
     *     returns endpoints that have name that is alphabetically later than the
     *     string, so "endpoint-e" is returned but "endpoint-a" is not
     * *
     * `name=projects/my-project/locations/us-central1/namespaces/my-namespace/services/my-service/endpoints/ep-1`
     *      returns the endpoint that has an endpoint_id equal to `ep-1`
     * *   `annotations.owner!=sd AND annotations.foo=bar` returns endpoints that
     *     have `owner` in annotation key but value is not `sd` AND have
     *     key/value `foo=bar`
     * *   `doesnotexist.foo=bar` returns an empty list. Note that endpoint
     *     doesn't have a field called "doesnotexist". Since the filter does not
     *     match any endpoint, it returns no results
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $endpoint_filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the service to resolve.
     *     @type int $max_endpoints
     *           Optional. The maximum number of endpoints to return. Defaults to 25.
     *           Maximum is 100. If a value less than one is specified, the Default is used.
     *           If a value greater than the Maximum is specified, the Maximum is used.
     *     @type string $endpoint_filter
     *           Optional. The filter applied to the endpoints of the resolved service.
     *           General `filter` string syntax:
     *           `<field> <operator> <value> (<logical connector>)`
     *           *   `<field>` can be `name`, `address`, `port`, or `annotations.<key>` for
     *               map field
     *           *   `<operator>` can be `<`, `>`, `<=`, `>=`, `!=`, `=`, `:`. Of which `:`
     *               means `HAS`, and is roughly the same as `=`
     *           *   `<value>` must be the same data type as field
     *           *   `<logical connector>` can be `AND`, `OR`, `NOT`
     *           Examples of valid filters:
     *           *   `annotations.owner` returns endpoints that have a annotation with the
     *               key `owner`, this is the same as `annotations:owner`
     *           *   `annotations.protocol=gRPC` returns endpoints that have key/value
     *               `protocol=gRPC`
     *           *   `address=192.108.1.105` returns endpoints that have this address
     *           *   `port>8080` returns endpoints that have port number larger than 8080
     *           *
     *           `name>projects/my-project/locations/us-east1/namespaces/my-namespace/services/my-service/endpoints/endpoint-c`
     *               returns endpoints that have name that is alphabetically later than the
     *               string, so "endpoint-e" is returned but "endpoint-a" is not
     *           *
     *           `name=projects/my-project/locations/us-central1/namespaces/my-namespace/services/my-service/endpoints/ep-1`
     *                returns the endpoint that has an endpoint_id equal to `ep-1`
     *           *   `annotations.owner!=sd AND annotations.foo=bar` returns endpoints that
     *               have `owner` in annotation key but value is not `sd` AND have
     *               key/value `foo=bar`
     *           *   `doesnotexist.foo=bar` returns an empty list. Note that endpoint
     *               doesn't have a field called "doesnotexist". Since the filter does not
     *               match any endpoint, it returns no results
     *           For more information about filtering, see
     *           [API Filtering](https://aip.dev/160).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1\LookupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service to resolve.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the service to resolve.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of endpoints to return. Defaults to 25.
     * Maximum is 100. If a value less than one is specified, the Default is used.
     * If a value greater than the Maximum is specified, the Maximum is used.
     *
     * Generated from protobuf field <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxEndpoints()
    {
        return $this->max_endpoints;
    }

    /**
     * Optional. The maximum number of endpoints to return. Defaults to 25.
     * Maximum is 100. If a value less than one is specified, the Default is used.
     * If a value greater than the Maximum is specified, the Maximum is used.
     *
     * Generated from protobuf field <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxEndpoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_endpoints = $var;

        return $this;
    }

    /**
     * Optional. The filter applied to the endpoints of the resolved service.
     * General `filter` string syntax:
     * `<field> <operator> <value> (<logical connector>)`
     * *   `<field>` can be `name`, `address`, `port`, or `annotations.<key>` for
     *     map field
     * *   `<operator>` can be `<`, `>`, `<=`, `>=`, `!=`, `=`, `:`. Of which `:`
     *     means `HAS`, and is roughly the same as `=`
     * *   `<value>` must be the same data type as field
     * *   `<logical connector>` can be `AND`, `OR`, `NOT`
     * Examples of valid filters:
     * *   `annotations.owner` returns endpoints that have a annotation with the
     *     key `owner`, this is the same as `annotations:owner`
     * *   `annotations.protocol=gRPC` returns endpoints that have key/value
     *     `protocol=gRPC`
     * *   `address=192.108.1.105` returns endpoints that have this address
     * *   `port>8080` returns endpoints that have port number larger than 8080
     * *
     * `name>projects/my-project/locations/us-east1/namespaces/my-namespace/services/my-service/endpoints/endpoint-c`
     *     returns endpoints that have name that is alphabetically later than the
     *     string, so "endpoint-e" is returned but "endpoint-a" is not
     * *
     * `name=projects/my-project/locations/us-central1/namespaces/my-namespace/services/my-service/endpoints/ep-1`
     *      returns the endpoint that has an endpoint_id equal to `ep-1`
     * *   `annotations.owner!=sd AND annotations.foo=bar` returns endpoints that
     *     have `owner` in annotation key but value is not `sd` AND have
     *     key/value `foo=bar`
     * *   `doesnotexist.foo=bar` returns an empty list. Note that endpoint
     *     doesn't have a field called "doesnotexist". Since the filter does not
     *     match any endpoint, it returns no results
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEndpointFilter()
    {
        return $this->endpoint_filter;
    }

    /**
     * Optional. The filter applied to the endpoints of the resolved service.
     * General `filter` string syntax:
     * `<field> <operator> <value> (<logical connector>)`
     * *   `<field>` can be `name`, `address`, `port`, or `annotations.<key>` for
     *     map field
     * *   `<operator>` can be `<`, `>`, `<=`, `>=`, `!=`, `=`, `:`. Of which `:`
     *     means `HAS`, and is roughly the same as `=`
     * *   `<value>` must be the same data type as field
     * *   `<logical connector>` can be `AND`, `OR`, `NOT`
     * Examples of valid filters:
     * *   `annotations.owner` returns endpoints that have a annotation with the
     *     key `owner`, this is the same as `annotations:owner`
     * *   `annotations.protocol=gRPC` returns endpoints that have key/value
     *     `protocol=gRPC`
     * *   `address=192.108.1.105` returns endpoints that have this address
     * *   `port>8080` returns endpoints that have port number larger than 8080
     * *
     * `name>projects/my-project/locations/us-east1/namespaces/my-namespace/services/my-service/endpoints/endpoint-c`
     *     returns endpoints that have name that is alphabetically later than the
     *     string, so "endpoint-e" is returned but "endpoint-a" is not
     * *
     * `name=projects/my-project/locations/us-central1/namespaces/my-namespace/services/my-service/endpoints/ep-1`
     *      returns the endpoint that has an endpoint_id equal to `ep-1`
     * *   `annotations.owner!=sd AND annotations.foo=bar` returns endpoints that
     *     have `owner` in annotation key but value is not `sd` AND have
     *     key/value `foo=bar`
     * *   `doesnotexist.foo=bar` returns an empty list. Note that endpoint
     *     doesn't have a field called "doesnotexist". Since the filter does not
     *     match any endpoint, it returns no results
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_filter = $var;

        return $this;
    }

}

