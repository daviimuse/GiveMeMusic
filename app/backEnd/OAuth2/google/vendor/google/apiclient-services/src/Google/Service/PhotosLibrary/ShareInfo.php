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

class Google_Service_PhotosLibrary_ShareInfo extends Google_Model
{
  public $shareToken;
  public $shareableUrl;
  protected $sharedAlbumOptionsType = 'Google_Service_PhotosLibrary_SharedAlbumOptions';
  protected $sharedAlbumOptionsDataType = '';

  public function setShareToken($shareToken)
  {
    $this->shareToken = $shareToken;
  }
  public function getShareToken()
  {
    return $this->shareToken;
  }
  public function setShareableUrl($shareableUrl)
  {
    $this->shareableUrl = $shareableUrl;
  }
  public function getShareableUrl()
  {
    return $this->shareableUrl;
  }
  /**
   * @param Google_Service_PhotosLibrary_SharedAlbumOptions
   */
  public function setSharedAlbumOptions(Google_Service_PhotosLibrary_SharedAlbumOptions $sharedAlbumOptions)
  {
    $this->sharedAlbumOptions = $sharedAlbumOptions;
  }
  /**
   * @return Google_Service_PhotosLibrary_SharedAlbumOptions
   */
  public function getSharedAlbumOptions()
  {
    return $this->sharedAlbumOptions;
  }
}
