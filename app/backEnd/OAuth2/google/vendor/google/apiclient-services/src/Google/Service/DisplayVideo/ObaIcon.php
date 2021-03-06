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

class Google_Service_DisplayVideo_ObaIcon extends Google_Model
{
  public $clickTrackingUrl;
  protected $dimensionsType = 'Google_Service_DisplayVideo_Dimensions';
  protected $dimensionsDataType = '';
  public $landingPageUrl;
  public $position;
  public $program;
  public $resourceMimeType;
  public $resourceUrl;
  public $viewTrackingUrl;

  public function setClickTrackingUrl($clickTrackingUrl)
  {
    $this->clickTrackingUrl = $clickTrackingUrl;
  }
  public function getClickTrackingUrl()
  {
    return $this->clickTrackingUrl;
  }
  /**
   * @param Google_Service_DisplayVideo_Dimensions
   */
  public function setDimensions(Google_Service_DisplayVideo_Dimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /**
   * @return Google_Service_DisplayVideo_Dimensions
   */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setLandingPageUrl($landingPageUrl)
  {
    $this->landingPageUrl = $landingPageUrl;
  }
  public function getLandingPageUrl()
  {
    return $this->landingPageUrl;
  }
  public function setPosition($position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
  public function setProgram($program)
  {
    $this->program = $program;
  }
  public function getProgram()
  {
    return $this->program;
  }
  public function setResourceMimeType($resourceMimeType)
  {
    $this->resourceMimeType = $resourceMimeType;
  }
  public function getResourceMimeType()
  {
    return $this->resourceMimeType;
  }
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  public function getResourceUrl()
  {
    return $this->resourceUrl;
  }
  public function setViewTrackingUrl($viewTrackingUrl)
  {
    $this->viewTrackingUrl = $viewTrackingUrl;
  }
  public function getViewTrackingUrl()
  {
    return $this->viewTrackingUrl;
  }
}
