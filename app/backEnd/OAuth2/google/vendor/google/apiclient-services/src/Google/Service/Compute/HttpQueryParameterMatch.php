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

class Google_Service_Compute_HttpQueryParameterMatch extends Google_Model
{
  public $exactMatch;
  public $name;
  public $presentMatch;
  public $regexMatch;

  public function setExactMatch($exactMatch)
  {
    $this->exactMatch = $exactMatch;
  }
  public function getExactMatch()
  {
    return $this->exactMatch;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPresentMatch($presentMatch)
  {
    $this->presentMatch = $presentMatch;
  }
  public function getPresentMatch()
  {
    return $this->presentMatch;
  }
  public function setRegexMatch($regexMatch)
  {
    $this->regexMatch = $regexMatch;
  }
  public function getRegexMatch()
  {
    return $this->regexMatch;
  }
}
