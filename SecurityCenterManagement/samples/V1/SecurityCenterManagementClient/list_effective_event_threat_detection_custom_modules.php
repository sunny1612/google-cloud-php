<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START securitycentermanagement_v1_generated_SecurityCenterManagement_ListEffectiveEventThreatDetectionCustomModules_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\SecurityCenterManagement\V1\Client\SecurityCenterManagementClient;
use Google\Cloud\SecurityCenterManagement\V1\EffectiveEventThreatDetectionCustomModule;
use Google\Cloud\SecurityCenterManagement\V1\ListEffectiveEventThreatDetectionCustomModulesRequest;

/**
 * Returns a list of all EffectiveEventThreatDetectionCustomModules for the
 * given parent. This includes resident modules defined at the scope of the
 * parent, and inherited modules, inherited from CRM ancestors (no
 * descendants). The difference between an EffectiveCustomModule and a
 * CustomModule is that the fields for an EffectiveCustomModule are computed
 * from ancestors if needed. For example, the enablement_state for a
 * CustomModule can be either ENABLED, DISABLED, or INHERITED. Where as the
 * enablement_state for an EffectiveCustomModule is always computed to ENABLED
 * or DISABLED (the effective enablement_state).
 *
 * @param string $formattedParent Name of parent to list effective custom modules. Its format is
 *                                "organizations/{organization}/locations/{location}",
 *                                "folders/{folder}/locations/{location}",
 *                                or
 *                                "projects/{project}/locations/{location}"
 *                                Please see {@see SecurityCenterManagementClient::organizationLocationName()} for help formatting this field.
 */
function list_effective_event_threat_detection_custom_modules_sample(
    string $formattedParent
): void {
    // Create a client.
    $securityCenterManagementClient = new SecurityCenterManagementClient();

    // Prepare the request message.
    $request = (new ListEffectiveEventThreatDetectionCustomModulesRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $securityCenterManagementClient->listEffectiveEventThreatDetectionCustomModules(
            $request
        );

        /** @var EffectiveEventThreatDetectionCustomModule $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = SecurityCenterManagementClient::organizationLocationName(
        '[ORGANIZATION]',
        '[LOCATION]'
    );

    list_effective_event_threat_detection_custom_modules_sample($formattedParent);
}
// [END securitycentermanagement_v1_generated_SecurityCenterManagement_ListEffectiveEventThreatDetectionCustomModules_sync]
