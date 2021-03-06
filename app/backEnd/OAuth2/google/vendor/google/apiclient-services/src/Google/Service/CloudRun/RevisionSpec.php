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

class Google_Service_CloudRun_RevisionSpec extends Google_Collection
{
  protected $collection_key = 'volumes';
  public $containerConcurrency;
  protected $containersType = 'Google_Service_CloudRun_Container';
  protected $containersDataType = 'array';
  public $serviceAccountName;
  public $timeoutSeconds;
  protected $volumesType = 'Google_Service_CloudRun_Volume';
  protected $volumesDataType = 'array';

  public function setContainerConcurrency($containerConcurrency)
  {
    $this->containerConcurrency = $containerConcurrency;
  }
  public function getContainerConcurrency()
  {
    return $this->containerConcurrency;
  }
  /**
   * @param Google_Service_CloudRun_Container[]
   */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /**
   * @return Google_Service_CloudRun_Container[]
   */
  public function getContainers()
  {
    return $this->containers;
  }
  public function setServiceAccountName($serviceAccountName)
  {
    $this->serviceAccountName = $serviceAccountName;
  }
  public function getServiceAccountName()
  {
    return $this->serviceAccountName;
  }
  public function setTimeoutSeconds($timeoutSeconds)
  {
    $this->timeoutSeconds = $timeoutSeconds;
  }
  public function getTimeoutSeconds()
  {
    return $this->timeoutSeconds;
  }
  /**
   * @param Google_Service_CloudRun_Volume[]
   */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /**
   * @return Google_Service_CloudRun_Volume[]
   */
  public function getVolumes()
  {
    return $this->volumes;
  }
}
