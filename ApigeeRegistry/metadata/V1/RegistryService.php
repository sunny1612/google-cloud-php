<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace GPBMetadata\Google\Cloud\Apigeeregistry\V1;

class RegistryService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryModels::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�r
5google/cloud/apigeeregistry/v1/registry_service.protogoogle.cloud.apigeeregistry.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto4google/cloud/apigeeregistry/v1/registry_models.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ListApisRequest9
parent (	B)�A�A#!apigeeregistry.googleapis.com/Api
	page_size (

page_token (	
filter (	"^
ListApisResponse1
apis (2#.google.cloud.apigeeregistry.v1.Api
next_page_token (	"H

name (	B)�A�A#
!apigeeregistry.googleapis.com/Api"�
CreateApiRequest9
parent (	B)�A�A#!apigeeregistry.googleapis.com/Api5
api (2#.google.cloud.apigeeregistry.v1.ApiB�A
api_id (	B�A"�
UpdateApiRequest5
api (2#.google.cloud.apigeeregistry.v1.ApiB�A/
update_mask (2.google.protobuf.FieldMask

DeleteApiRequest7
name (	B)�A�A#
!apigeeregistry.googleapis.com/Api"�
ListApiVersionsRequest@
parent (	B0�A�A*(apigeeregistry.googleapis.com/ApiVersion
	page_size (

page_token (	
filter (	"t
ListApiVersionsResponse@
api_versions (2*.google.cloud.apigeeregistry.v1.ApiVersion
next_page_token (	"V
GetApiVersionRequest>
name (	B0�A�A*
(apigeeregistry.googleapis.com/ApiVersion"�
CreateApiVersionRequest@
parent (	B0�A�A*(apigeeregistry.googleapis.com/ApiVersionD
api_version (2*.google.cloud.apigeeregistry.v1.ApiVersionB�A
api_version_id (	B�A"�
UpdateApiVersionRequestD
api_version (2*.google.cloud.apigeeregistry.v1.ApiVersionB�A/
update_mask (2.google.protobuf.FieldMask

DeleteApiVersionRequest>
name (	B0�A�A*
(apigeeregistry.googleapis.com/ApiVersion"�
ListApiSpecsRequest=
parent (	B-�A�A\'%apigeeregistry.googleapis.com/ApiSpec
	page_size (

page_token (	
filter (	"k
ListApiSpecsResponse:
	api_specs (2\'.google.cloud.apigeeregistry.v1.ApiSpec
next_page_token (	"P
GetApiSpecRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec"X
GetApiSpecContentsRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec"�
CreateApiSpecRequest=
parent (	B-�A�A\'%apigeeregistry.googleapis.com/ApiSpec>
api_spec (2\'.google.cloud.apigeeregistry.v1.ApiSpecB�A
api_spec_id (	B�A"�
UpdateApiSpecRequest>
api_spec (2\'.google.cloud.apigeeregistry.v1.ApiSpecB�A/
update_mask (2.google.protobuf.FieldMask

DeleteApiSpecRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec
force ("j
TagApiSpecRevisionRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec
tag (	B�A"�
ListApiSpecRevisionsRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec
	page_size (

page_token (	"s
ListApiSpecRevisionsResponse:
	api_specs (2\'.google.cloud.apigeeregistry.v1.ApiSpec
next_page_token (	"o
RollbackApiSpecRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec
revision_id (	B�A"[
DeleteApiSpecRevisionRequest;
name (	B-�A�A\'
%apigeeregistry.googleapis.com/ApiSpec"�
ListApiDeploymentsRequestC
parent (	B3�A�A-+apigeeregistry.googleapis.com/ApiDeployment
	page_size (

page_token (	
filter (	"}
ListApiDeploymentsResponseF
api_deployments (2-.google.cloud.apigeeregistry.v1.ApiDeployment
next_page_token (	"\\
GetApiDeploymentRequestA
name (	B3�A�A-
+apigeeregistry.googleapis.com/ApiDeployment"�
CreateApiDeploymentRequestC
parent (	B3�A�A-+apigeeregistry.googleapis.com/ApiDeploymentJ
api_deployment (2-.google.cloud.apigeeregistry.v1.ApiDeploymentB�A
api_deployment_id (	B�A"�
UpdateApiDeploymentRequestJ
api_deployment (2-.google.cloud.apigeeregistry.v1.ApiDeploymentB�A/
update_mask (2.google.protobuf.FieldMask

DeleteApiDeploymentRequestA
name (	B3�A�A-
+apigeeregistry.googleapis.com/ApiDeployment
force ("v
TagApiDeploymentRevisionRequestA
name (	B3�A�A-
+apigeeregistry.googleapis.com/ApiDeployment
tag (	B�A"�
!ListApiDeploymentRevisionsRequestA
name (	B3�A�A-
+apigeeregistry.googleapis.com/ApiDeployment
	page_size (

page_token (	"�
"ListApiDeploymentRevisionsResponseF
api_deployments (2-.google.cloud.apigeeregistry.v1.ApiDeployment
next_page_token (	"{
RollbackApiDeploymentRequestA
name (	B3�A�A-
+apigeeregistry.googleapis.com/ApiDeployment
revision_id (	B�A"g
"DeleteApiDeploymentRevisionRequestA
name (	B3�A�A-
+apigeeregistry.googleapis.com/ApiDeployment"�
ListArtifactsRequest>
parent (	B.�A�A(&apigeeregistry.googleapis.com/Artifact
	page_size (

page_token (	
filter (	"m
ListArtifactsResponse;
	artifacts (2(.google.cloud.apigeeregistry.v1.Artifact
next_page_token (	"R
GetArtifactRequest<
name (	B.�A�A(
&apigeeregistry.googleapis.com/Artifact"Z
GetArtifactContentsRequest<
name (	B.�A�A(
&apigeeregistry.googleapis.com/Artifact"�
CreateArtifactRequest>
parent (	B.�A�A(&apigeeregistry.googleapis.com/Artifact?
artifact (2(.google.cloud.apigeeregistry.v1.ArtifactB�A
artifact_id (	B�A"Y
ReplaceArtifactRequest?
artifact (2(.google.cloud.apigeeregistry.v1.ArtifactB�A"U
DeleteArtifactRequest<
name (	B.�A�A(
&apigeeregistry.googleapis.com/Artifact2�E
Registry�
ListApis/.google.cloud.apigeeregistry.v1.ListApisRequest0.google.cloud.apigeeregistry.v1.ListApisResponse"9���*(/v1/{parent=projects/*/locations/*}/apis�Aparent�
GetApi-.google.cloud.apigeeregistry.v1.GetApiRequest#.google.cloud.apigeeregistry.v1.Api"7���*(/v1/{name=projects/*/locations/*/apis/*}�Aname�
	CreateApi0.google.cloud.apigeeregistry.v1.CreateApiRequest#.google.cloud.apigeeregistry.v1.Api"I���/"(/v1/{parent=projects/*/locations/*}/apis:api�Aparent,api,api_id�
	UpdateApi0.google.cloud.apigeeregistry.v1.UpdateApiRequest#.google.cloud.apigeeregistry.v1.Api"K���32,/v1/{api.name=projects/*/locations/*/apis/*}:api�Aapi,update_mask�
	DeleteApi0.google.cloud.apigeeregistry.v1.DeleteApiRequest.google.protobuf.Empty"7���**(/v1/{name=projects/*/locations/*/apis/*}�Aname�
ListApiVersions6.google.cloud.apigeeregistry.v1.ListApiVersionsRequest7.google.cloud.apigeeregistry.v1.ListApiVersionsResponse"D���53/v1/{parent=projects/*/locations/*/apis/*}/versions�Aparent�

CreateApiVersion7.google.cloud.apigeeregistry.v1.CreateApiVersionRequest*.google.cloud.apigeeregistry.v1.ApiVersion"l���B"3/v1/{parent=projects/*/locations/*/apis/*}/versions:api_version�A!parent,api_version,api_version_id�
UpdateApiVersion7.google.cloud.apigeeregistry.v1.UpdateApiVersionRequest*.google.cloud.apigeeregistry.v1.ApiVersion"n���N2?/v1/{api_version.name=projects/*/locations/*/apis/*/versions/*}:api_version�Aapi_version,update_mask�
DeleteApiVersion7.google.cloud.apigeeregistry.v1.DeleteApiVersionRequest.google.protobuf.Empty"B���5*3/v1/{name=projects/*/locations/*/apis/*/versions/*}�Aname�
ListApiSpecs3.google.cloud.apigeeregistry.v1.ListApiSpecsRequest4.google.cloud.apigeeregistry.v1.ListApiSpecsResponse"L���=;/v1/{parent=projects/*/locations/*/apis/*/versions/*}/specs�Aparent�

GetApiSpec1.google.cloud.apigeeregistry.v1.GetApiSpecRequest\'.google.cloud.apigeeregistry.v1.ApiSpec"J���=;/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*}�Aname�
GetApiSpecContents9.google.cloud.apigeeregistry.v1.GetApiSpecContentsRequest.google.api.HttpBody"V���IG/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*}:getContents�Aname�



TagApiSpecRevision9.google.cloud.apigeeregistry.v1.TagApiSpecRevisionRequest\'.google.cloud.apigeeregistry.v1.ApiSpec"R���L"G/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*}:tagRevision:*�
ListApiSpecRevisions;.google.cloud.apigeeregistry.v1.ListApiSpecRevisionsRequest<.google.cloud.apigeeregistry.v1.ListApiSpecRevisionsResponse"Q���KI/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*}:listRevisions�
RollbackApiSpec6.google.cloud.apigeeregistry.v1.RollbackApiSpecRequest\'.google.cloud.apigeeregistry.v1.ApiSpec"O���I"D/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*}:rollback:*�
DeleteApiSpecRevision<.google.cloud.apigeeregistry.v1.DeleteApiSpecRevisionRequest\'.google.cloud.apigeeregistry.v1.ApiSpec"Y���L*J/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*}:deleteRevision�Aname�
ListApiDeployments9.google.cloud.apigeeregistry.v1.ListApiDeploymentsRequest:.google.cloud.apigeeregistry.v1.ListApiDeploymentsResponse"G���86/v1/{parent=projects/*/locations/*/apis/*}/deployments�Aparent�
GetApiDeployment7.google.cloud.apigeeregistry.v1.GetApiDeploymentRequest-.google.cloud.apigeeregistry.v1.ApiDeployment"E���86/v1/{name=projects/*/locations/*/apis/*/deployments/*}�Aname�
CreateApiDeployment:.google.cloud.apigeeregistry.v1.CreateApiDeploymentRequest-.google.cloud.apigeeregistry.v1.ApiDeployment"x���H"6/v1/{parent=projects/*/locations/*/apis/*}/deployments:api_deployment�A\'parent,api_deployment,api_deployment_id�
UpdateApiDeployment:.google.cloud.apigeeregistry.v1.UpdateApiDeploymentRequest-.google.cloud.apigeeregistry.v1.ApiDeployment"z���W2E/v1/{api_deployment.name=projects/*/locations/*/apis/*/deployments/*}:api_deployment�Aapi_deployment,update_mask�
DeleteApiDeployment:.google.cloud.apigeeregistry.v1.DeleteApiDeploymentRequest.google.protobuf.Empty"E���8*6/v1/{name=projects/*/locations/*/apis/*/deployments/*}�Aname�
TagApiDeploymentRevision?.google.cloud.apigeeregistry.v1.TagApiDeploymentRevisionRequest-.google.cloud.apigeeregistry.v1.ApiDeployment"M���G"B/v1/{name=projects/*/locations/*/apis/*/deployments/*}:tagRevision:*�
ListApiDeploymentRevisionsA.google.cloud.apigeeregistry.v1.ListApiDeploymentRevisionsRequestB.google.cloud.apigeeregistry.v1.ListApiDeploymentRevisionsResponse"L���FD/v1/{name=projects/*/locations/*/apis/*/deployments/*}:listRevisions�
RollbackApiDeployment<.google.cloud.apigeeregistry.v1.RollbackApiDeploymentRequest-.google.cloud.apigeeregistry.v1.ApiDeployment"J���D"?/v1/{name=projects/*/locations/*/apis/*/deployments/*}:rollback:*�
DeleteApiDeploymentRevisionB.google.cloud.apigeeregistry.v1.DeleteApiDeploymentRevisionRequest-.google.cloud.apigeeregistry.v1.ApiDeployment"T���G*E/v1/{name=projects/*/locations/*/apis/*/deployments/*}:deleteRevision�Aname�

GetArtifact2.google.cloud.apigeeregistry.v1.GetArtifactRequest(.google.cloud.apigeeregistry.v1.Artifact"�����-/v1/{name=projects/*/locations/*/artifacts/*}Z64/v1/{name=projects/*/locations/*/apis/*/artifacts/*}ZA?/v1/{name=projects/*/locations/*/apis/*/versions/*/artifacts/*}ZIG/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*/artifacts/*}ZDB/v1/{name=projects/*/locations/*/apis/*/deployments/*/artifacts/*}�Aname�
GetArtifactContents:.google.cloud.apigeeregistry.v1.GetArtifactContentsRequest.google.api.HttpBody"�����9/v1/{name=projects/*/locations/*/artifacts/*}:getContentsZB@/v1/{name=projects/*/locations/*/apis/*/artifacts/*}:getContentsZMK/v1/{name=projects/*/locations/*/apis/*/versions/*/artifacts/*}:getContentsZUS/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*/artifacts/*}:getContentsZPN/v1/{name=projects/*/locations/*/apis/*/deployments/*/artifacts/*}:getContents�Aname�
CreateArtifact5.google.cloud.apigeeregistry.v1.CreateArtifactRequest(.google.cloud.apigeeregistry.v1.Artifact"�����"-/v1/{parent=projects/*/locations/*}/artifacts:artifactZ@"4/v1/{parent=projects/*/locations/*/apis/*}/artifacts:artifactZK"?/v1/{parent=projects/*/locations/*/apis/*/versions/*}/artifacts:artifactZS"G/v1/{parent=projects/*/locations/*/apis/*/versions/*/specs/*}/artifacts:artifactZN"B/v1/{parent=projects/*/locations/*/apis/*/deployments/*}/artifacts:artifact�Aparent,artifact,artifact_id�
ReplaceArtifact6.google.cloud.apigeeregistry.v1.ReplaceArtifactRequest(.google.cloud.apigeeregistry.v1.Artifact"�����6/v1/{artifact.name=projects/*/locations/*/artifacts/*}:artifactZI=/v1/{artifact.name=projects/*/locations/*/apis/*/artifacts/*}:artifactZTH/v1/{artifact.name=projects/*/locations/*/apis/*/versions/*/artifacts/*}:artifactZ\\P/v1/{artifact.name=projects/*/locations/*/apis/*/versions/*/specs/*/artifacts/*}:artifactZWK/v1/{artifact.name=projects/*/locations/*/apis/*/deployments/*/artifacts/*}:artifact�Aartifact�
DeleteArtifact5.google.cloud.apigeeregistry.v1.DeleteArtifactRequest.google.protobuf.Empty"�����*-/v1/{name=projects/*/locations/*/artifacts/*}Z6*4/v1/{name=projects/*/locations/*/apis/*/artifacts/*}ZA*?/v1/{name=projects/*/locations/*/apis/*/versions/*/artifacts/*}ZI*G/v1/{name=projects/*/locations/*/apis/*/versions/*/specs/*/artifacts/*}ZD*B/v1/{name=projects/*/locations/*/apis/*/deployments/*/artifacts/*}�AnameQ�Aapigeeregistry.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
"com.google.cloud.apigeeregistry.v1BRegistryServiceProtoPZLgoogle.golang.org/genproto/googleapis/cloud/apigeeregistry/v1;apigeeregistry�Google.Cloud.ApigeeRegistry.V1�Google\\Cloud\\ApigeeRegistry\\V1�!Google::Cloud::ApigeeRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
