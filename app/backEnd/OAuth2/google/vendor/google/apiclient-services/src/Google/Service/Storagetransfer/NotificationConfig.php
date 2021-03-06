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

class Google_Service_Storagetransfer_NotificationConfig extends Google_Collection
{
  protected $collection_key = 'eventTypes';
  public $eventTypes;
  public $payloadFormat;
  public $pubsubTopic;

  public function setEventTypes($eventTypes)
  {
    $this->eventTypes = $eventTypes;
  }
  public function getEventTypes()
  {
    return $this->eventTypes;
  }
  public function setPayloadFormat($payloadFormat)
  {
    $this->payloadFormat = $payloadFormat;
  }
  public function getPayloadFormat()
  {
    return $this->payloadFormat;
  }
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
}
