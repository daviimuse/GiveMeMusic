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

class Google_Service_Compute_ReservationsScopedList extends Google_Collection
{
  protected $collection_key = 'reservations';
  protected $reservationsType = 'Google_Service_Compute_Reservation';
  protected $reservationsDataType = 'array';
  protected $warningType = 'Google_Service_Compute_ReservationsScopedListWarning';
  protected $warningDataType = '';

  /**
   * @param Google_Service_Compute_Reservation[]
   */
  public function setReservations($reservations)
  {
    $this->reservations = $reservations;
  }
  /**
   * @return Google_Service_Compute_Reservation[]
   */
  public function getReservations()
  {
    return $this->reservations;
  }
  /**
   * @param Google_Service_Compute_ReservationsScopedListWarning
   */
  public function setWarning(Google_Service_Compute_ReservationsScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return Google_Service_Compute_ReservationsScopedListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}
