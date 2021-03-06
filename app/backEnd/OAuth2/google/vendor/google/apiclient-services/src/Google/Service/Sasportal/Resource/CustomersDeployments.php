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
 *   $sasportalService = new Google_Service_Sasportal(...);
 *   $deployments = $sasportalService->deployments;
 *  </code>
 */
class Google_Service_Sasportal_Resource_CustomersDeployments extends Google_Service_Resource
{
  /**
   * Moves a deployment under another node or customer. (deployments.move)
   *
   * @param string $name Required. The name of the deployment to move.
   * @param Google_Service_Sasportal_SasPortalMoveDeploymentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sasportal_SasPortalOperation
   */
  public function move($name, Google_Service_Sasportal_SasPortalMoveDeploymentRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('move', array($params), "Google_Service_Sasportal_SasPortalOperation");
  }
}
