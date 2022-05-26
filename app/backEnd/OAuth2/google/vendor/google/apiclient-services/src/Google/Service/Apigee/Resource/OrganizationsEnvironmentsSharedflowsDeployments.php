<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $deployments = $apigeeService->deployments;
 *  </code>
 */
class Google_Service_Apigee_Resource_OrganizationsEnvironmentsSharedflowsDeployments extends Google_Service_Resource
{
  /**
   * Lists all deployments of a shared flow in an environment.
   * (deployments.listOrganizationsEnvironmentsSharedflowsDeployments)
   *
   * @param string $parent Required. Name representing a shared flow in an
   * environment in the following format:
   * `organizations/{org}/environments/{env}/sharedflows/{sharedflow}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ListDeploymentsResponse
   */
  public function listOrganizationsEnvironmentsSharedflowsDeployments($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Apigee_GoogleCloudApigeeV1ListDeploymentsResponse");
  }
}
