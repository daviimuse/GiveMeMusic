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

class Google_Service_Speech_SpeakerDiarizationConfig extends Google_Model
{
  public $enableSpeakerDiarization;
  public $maxSpeakerCount;
  public $minSpeakerCount;
  public $speakerTag;

  public function setEnableSpeakerDiarization($enableSpeakerDiarization)
  {
    $this->enableSpeakerDiarization = $enableSpeakerDiarization;
  }
  public function getEnableSpeakerDiarization()
  {
    return $this->enableSpeakerDiarization;
  }
  public function setMaxSpeakerCount($maxSpeakerCount)
  {
    $this->maxSpeakerCount = $maxSpeakerCount;
  }
  public function getMaxSpeakerCount()
  {
    return $this->maxSpeakerCount;
  }
  public function setMinSpeakerCount($minSpeakerCount)
  {
    $this->minSpeakerCount = $minSpeakerCount;
  }
  public function getMinSpeakerCount()
  {
    return $this->minSpeakerCount;
  }
  public function setSpeakerTag($speakerTag)
  {
    $this->speakerTag = $speakerTag;
  }
  public function getSpeakerTag()
  {
    return $this->speakerTag;
  }
}
