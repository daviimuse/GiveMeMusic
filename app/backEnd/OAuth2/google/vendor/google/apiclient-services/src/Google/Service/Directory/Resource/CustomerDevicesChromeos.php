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
 * The "chromeos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $chromeos = $adminService->chromeos;
 *  </code>
 */
class Google_Service_Directory_Resource_CustomerDevicesChromeos extends Google_Service_Resource
{
  /**
   * Issues a command for the device to execute. (chromeos.issueCommand)
   *
   * @param string $customerId Immutable. Immutable ID of the G Suite account.
   * @param string $deviceId Immutable. Immutable ID of Chrome OS Device.
   * @param Google_Service_Directory_DirectoryChromeosdevicesIssueCommandRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_DirectoryChromeosdevicesIssueCommandResponse
   */
  public function issueCommand($customerId, $deviceId, Google_Service_Directory_DirectoryChromeosdevicesIssueCommandRequest $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('issueCommand', array($params), "Google_Service_Directory_DirectoryChromeosdevicesIssueCommandResponse");
  }
}
