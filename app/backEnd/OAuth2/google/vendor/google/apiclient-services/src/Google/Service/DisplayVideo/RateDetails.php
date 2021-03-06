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

class Google_Service_DisplayVideo_RateDetails extends Google_Model
{
  public $inventorySourceRateType;
  protected $minimumSpendType = 'Google_Service_DisplayVideo_Money';
  protected $minimumSpendDataType = '';
  protected $rateType = 'Google_Service_DisplayVideo_Money';
  protected $rateDataType = '';
  public $unitsPurchased;

  public function setInventorySourceRateType($inventorySourceRateType)
  {
    $this->inventorySourceRateType = $inventorySourceRateType;
  }
  public function getInventorySourceRateType()
  {
    return $this->inventorySourceRateType;
  }
  /**
   * @param Google_Service_DisplayVideo_Money
   */
  public function setMinimumSpend(Google_Service_DisplayVideo_Money $minimumSpend)
  {
    $this->minimumSpend = $minimumSpend;
  }
  /**
   * @return Google_Service_DisplayVideo_Money
   */
  public function getMinimumSpend()
  {
    return $this->minimumSpend;
  }
  /**
   * @param Google_Service_DisplayVideo_Money
   */
  public function setRate(Google_Service_DisplayVideo_Money $rate)
  {
    $this->rate = $rate;
  }
  /**
   * @return Google_Service_DisplayVideo_Money
   */
  public function getRate()
  {
    return $this->rate;
  }
  public function setUnitsPurchased($unitsPurchased)
  {
    $this->unitsPurchased = $unitsPurchased;
  }
  public function getUnitsPurchased()
  {
    return $this->unitsPurchased;
  }
}
