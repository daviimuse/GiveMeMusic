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

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefundItemItem extends Google_Model
{
  protected $amountType = 'Google_Service_ShoppingContent_MonetaryAmount';
  protected $amountDataType = '';
  public $fullRefund;
  public $lineItemId;
  public $productId;
  public $quantity;

  /**
   * @param Google_Service_ShoppingContent_MonetaryAmount
   */
  public function setAmount(Google_Service_ShoppingContent_MonetaryAmount $amount)
  {
    $this->amount = $amount;
  }
  /**
   * @return Google_Service_ShoppingContent_MonetaryAmount
   */
  public function getAmount()
  {
    return $this->amount;
  }
  public function setFullRefund($fullRefund)
  {
    $this->fullRefund = $fullRefund;
  }
  public function getFullRefund()
  {
    return $this->fullRefund;
  }
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  public function getProductId()
  {
    return $this->productId;
  }
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  public function getQuantity()
  {
    return $this->quantity;
  }
}
