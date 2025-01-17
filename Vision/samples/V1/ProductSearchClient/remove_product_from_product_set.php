<?php
/*
 * Copyright 2022 Google LLC
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

// [START vision_v1_generated_ProductSearch_RemoveProductFromProductSet_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Vision\V1\Client\ProductSearchClient;
use Google\Cloud\Vision\V1\RemoveProductFromProductSetRequest;

/**
 * Removes a Product from the specified ProductSet.
 *
 * @param string $formattedName    The resource name for the ProductSet to modify.
 *
 *                                 Format is:
 *                                 `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
 *                                 Please see {@see ProductSearchClient::productSetName()} for help formatting this field.
 * @param string $formattedProduct The resource name for the Product to be removed from this ProductSet.
 *
 *                                 Format is:
 *                                 `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
 *                                 Please see {@see ProductSearchClient::productName()} for help formatting this field.
 */
function remove_product_from_product_set_sample(
    string $formattedName,
    string $formattedProduct
): void {
    // Create a client.
    $productSearchClient = new ProductSearchClient();

    // Prepare the request message.
    $request = (new RemoveProductFromProductSetRequest())
        ->setName($formattedName)
        ->setProduct($formattedProduct);

    // Call the API and handle any network failures.
    try {
        $productSearchClient->removeProductFromProductSet($request);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = ProductSearchClient::productSetName('[PROJECT]', '[LOCATION]', '[PRODUCT_SET]');
    $formattedProduct = ProductSearchClient::productName('[PROJECT]', '[LOCATION]', '[PRODUCT]');

    remove_product_from_product_set_sample($formattedName, $formattedProduct);
}
// [END vision_v1_generated_ProductSearch_RemoveProductFromProductSet_sync]
