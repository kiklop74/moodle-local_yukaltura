<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.php');
defined('MOODLE_INTERNAL') || die();

error_reporting(E_STRICT);

require_once(dirname(__FILE__) . "/../KalturaClientBase.php");
require_once(dirname(__FILE__) . "/../KalturaEnums.php");
require_once(dirname(__FILE__) . "/../KalturaTypes.php");
require_once(dirname(__FILE__) . "/KalturaIntegrationClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaBusinessProcessNotificationClientPlugin.php");

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class KalturaBpmEventNotificationIntegrationJobTriggerData extends KalturaIntegrationJobTriggerData {
    /**
     * KalturaBusinessProcessNotificationTemplate id
     * @var int
     */
    public $templateId = null;

    /**
     * @var string
     */
    public $businessProcessId = null;

    /**
     * Execution unique id
     * @var string
     */
    public $caseId = null;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBpmEventNotificationIntegrationClientPlugin extends KalturaClientPlugin {
    /**
     * Constructor of Kaltura Bpm Event Notification Integration Client Plugin.
     * @param KalturaClient $client - instance of KalturaClinet.
     */
    public function __construct(KalturaClient $client) {
        parent::__construct($client);
    }

    /**
     * Get object.
     * @param KalturaClient $client - instance of KalturaClient.
     * @return KalturaBpmEventNotificationIntegrationClientPlugin - object.
     */
    public static function get(KalturaClient $client) {
        return new KalturaBpmEventNotificationIntegrationClientPlugin($client);
    }

    /**
     * Get services.
     * @return array - array of KalturaServiceBase
     */
    public function getServices() {
        $services = array();
        return $services;
    }

    /**
     * Get plugin name.
     * @return {string} - class name.
     */
    public function getName() {
        return 'bpmEventNotificationIntegration';
    }
}

