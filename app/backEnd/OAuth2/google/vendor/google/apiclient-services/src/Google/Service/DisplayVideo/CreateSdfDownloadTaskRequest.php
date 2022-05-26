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

class Google_Service_DisplayVideo_CreateSdfDownloadTaskRequest extends Google_Model
{
  public $advertiserId;
  protected $idFilterType = 'Google_Service_DisplayVideo_IdFilter';
  protected $idFilterDataType = '';
  protected $inventorySourceFilterType = 'Google_Service_DisplayVideo_InventorySourceFilter';
  protected $inventorySourceFilterDataType = '';
  protected $parentEntityFilterType = 'Google_Service_DisplayVideo_ParentEntityFilter';
  protected $parentEntityFilterDataType = '';
  public $partnerId;
  public $version;

  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /**
   * @param Google_Service_DisplayVideo_IdFilter
   */
  public function setIdFilter(Google_Service_DisplayVideo_IdFilter $idFilter)
  {
    $this->idFilter = $idFilter;
  }
  /**
   * @return Google_Service_DisplayVideo_IdFilter
   */
  public function getIdFilter()
  {
    return $this->idFilter;
  }
  /**
   * @param Google_Service_DisplayVideo_InventorySourceFilter
   */
  public function setInventorySourceFilter(Google_Service_DisplayVideo_InventorySourceFilter $inventorySourceFilter)
  {
    $this->inventorySourceFilter = $inventorySourceFilter;
  }
  /**
   * @return Google_Service_DisplayVideo_InventorySourceFilter
   */
  public function getInventorySourceFilter()
  {
    return $this->inventorySourceFilter;
  }
  /**
   * @param Google_Service_DisplayVideo_ParentEntityFilter
   */
  public function setParentEntityFilter(Google_Service_DisplayVideo_ParentEntityFilter $parentEntityFilter)
  {
    $this->parentEntityFilter = $parentEntityFilter;
  }
  /**
   * @return Google_Service_DisplayVideo_ParentEntityFilter
   */
  public function getParentEntityFilter()
  {
    return $this->parentEntityFilter;
  }
  public function setPartnerId($partnerId)
  {
    $this->partnerId = $partnerId;
  }
  public function getPartnerId()
  {
    return $this->partnerId;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}
