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

class Google_Service_GameServices_GameServerClusterConnectionInfo extends Google_Model
{
  protected $gkeClusterReferenceType = 'Google_Service_GameServices_GkeClusterReference';
  protected $gkeClusterReferenceDataType = '';
  public $namespace;

  /**
   * @param Google_Service_GameServices_GkeClusterReference
   */
  public function setGkeClusterReference(Google_Service_GameServices_GkeClusterReference $gkeClusterReference)
  {
    $this->gkeClusterReference = $gkeClusterReference;
  }
  /**
   * @return Google_Service_GameServices_GkeClusterReference
   */
  public function getGkeClusterReference()
  {
    return $this->gkeClusterReference;
  }
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }
  public function getNamespace()
  {
    return $this->namespace;
  }
}
