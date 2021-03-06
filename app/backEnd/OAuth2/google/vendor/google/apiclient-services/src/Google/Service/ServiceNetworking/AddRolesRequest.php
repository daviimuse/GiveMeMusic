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

class Google_Service_ServiceNetworking_AddRolesRequest extends Google_Collection
{
  protected $collection_key = 'policyBinding';
  public $consumerNetwork;
  protected $policyBindingType = 'Google_Service_ServiceNetworking_PolicyBinding';
  protected $policyBindingDataType = 'array';

  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /**
   * @param Google_Service_ServiceNetworking_PolicyBinding[]
   */
  public function setPolicyBinding($policyBinding)
  {
    $this->policyBinding = $policyBinding;
  }
  /**
   * @return Google_Service_ServiceNetworking_PolicyBinding[]
   */
  public function getPolicyBinding()
  {
    return $this->policyBinding;
  }
}
