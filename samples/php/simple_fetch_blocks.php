<?php

/**
 *  Filename   : simple_fetch_blocks.php
 *  Description: Fetch latest blocks with the use of the Biteasy Blockchain API.
 *
 *  Copyright (c) 2013-2014 Biteasy, LTD
 *
 *  LICENSE
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at:
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 **/

define('SERVICE_URL', 'https://api.biteasy.com/blockchain/v1/blocks');

$curl = curl_init(SERVICE_URL);

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$blocks = json_decode($response);

print_r($blocks);

?>