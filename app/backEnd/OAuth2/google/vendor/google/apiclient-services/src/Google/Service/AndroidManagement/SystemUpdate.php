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

class Google_Service_AndroidManagement_SystemUpdate extends Google_Collection
{
  protected $collection_key = 'freezePeriods';
  public $endMinutes;
  protected $freezePeriodsType = 'Google_Service_AndroidManagement_FreezePeriod';
  protected $freezePeriodsDataType = 'array';
  public $startMinutes;
  public $type;

  public function setEndMinutes($endMinutes)
  {
    $this->endMinutes = $endMinutes;
  }
  public function getEndMinutes()
  {
    return $this->endMinutes;
  }
  /**
   * @param Google_Service_AndroidManagement_FreezePeriod[]
   */
  public function setFreezePeriods($freezePeriods)
  {
    $this->freezePeriods = $freezePeriods;
  }
  /**
   * @return Google_Service_AndroidManagement_FreezePeriod[]
   */
  public function getFreezePeriods()
  {
    return $this->freezePeriods;
  }
  public function setStartMinutes($startMinutes)
  {
    $this->startMinutes = $startMinutes;
  }
  public function getStartMinutes()
  {
    return $this->startMinutes;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
