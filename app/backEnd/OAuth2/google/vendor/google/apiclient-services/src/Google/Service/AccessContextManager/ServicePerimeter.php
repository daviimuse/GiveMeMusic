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

class Google_Service_AccessContextManager_ServicePerimeter extends Google_Model
{
  public $description;
  public $name;
  public $perimeterType;
  protected $specType = 'Google_Service_AccessContextManager_ServicePerimeterConfig';
  protected $specDataType = '';
  protected $statusType = 'Google_Service_AccessContextManager_ServicePerimeterConfig';
  protected $statusDataType = '';
  public $title;
  public $useExplicitDryRunSpec;

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPerimeterType($perimeterType)
  {
    $this->perimeterType = $perimeterType;
  }
  public function getPerimeterType()
  {
    return $this->perimeterType;
  }
  /**
   * @param Google_Service_AccessContextManager_ServicePerimeterConfig
   */
  public function setSpec(Google_Service_AccessContextManager_ServicePerimeterConfig $spec)
  {
    $this->spec = $spec;
  }
  /**
   * @return Google_Service_AccessContextManager_ServicePerimeterConfig
   */
  public function getSpec()
  {
    return $this->spec;
  }
  /**
   * @param Google_Service_AccessContextManager_ServicePerimeterConfig
   */
  public function setStatus(Google_Service_AccessContextManager_ServicePerimeterConfig $status)
  {
    $this->status = $status;
  }
  /**
   * @return Google_Service_AccessContextManager_ServicePerimeterConfig
   */
  public function getStatus()
  {
    return $this->status;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setUseExplicitDryRunSpec($useExplicitDryRunSpec)
  {
    $this->useExplicitDryRunSpec = $useExplicitDryRunSpec;
  }
  public function getUseExplicitDryRunSpec()
  {
    return $this->useExplicitDryRunSpec;
  }
}
