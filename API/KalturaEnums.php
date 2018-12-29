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

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.php');
defined('MOODLE_INTERNAL') || die();

error_reporting(E_STRICT);

require_once(dirname(__FILE__) . "/KalturaClientBase.php");

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAppTokenStatus extends KalturaEnumBase {
    /** @var disabled */
    const DISABLED = 1;
    /** @var active */
    const ACTIVE = 2;
    /** @var deleted */
    const DELETED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAppearInListType extends KalturaEnumBase {
    /** @var partner only */
    const PARTNER_ONLY = 1;
    /** @var category members only */
    const CATEGORY_MEMBERS_ONLY = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAssetParamsDeletePolicy extends KalturaEnumBase {
    /** @var keep */
    const KEEP = 0;
    /** @var delete */
    const DELETE = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAssetParamsOrigin extends KalturaEnumBase {
    /** @var convert */
    const CONVERT = 0;
    /** @var ingest */
    const INGEST = 1;
    /** @var convert when missing */
    const CONVERT_WHEN_MISSING = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBatchJobErrorTypes extends KalturaEnumBase {
    /** @var app */
    const APP = 0;
    /** @var runtime */
    const RUNTIME = 1;
    /** @var http */
    const HTTP = 2;
    /** @var curl */
    const CURL = 3;
    /** @var kaltura api */
    const KALTURA_API = 4;
    /** @var kaltura client */
    const KALTURA_CLIENT = 5;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBatchJobStatus extends KalturaEnumBase {
    /** @var pending */
    const PENDING = 0;
    /** @var queued */
    const QUEUED = 1;
    /** @var processing */
    const PROCESSING = 2;
    /** @var processed */
    const PROCESSED = 3;
    /** @var movefile */
    const MOVEFILE = 4;
    /** @var finished */
    const FINISHED = 5;
    /** @var failed */
    const FAILED = 6;
    /** @var aborted */
    const ABORTED = 7;
    /** @var almost done */
    const ALMOST_DONE = 8;
    /** @var retry */
    const RETRY = 9;
    /** @var fatal */
    const FATAL = 10;
    /** @var dont process*/
    const DONT_PROCESS = 11;
    /** @var finished partially */
    const FINISHED_PARTIALLY = 12;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBitRateMode extends KalturaEnumBase {
    /** @var cbr */
    const CBR = 1;
    /** @var vbr */
    const VBR = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryEntryStatus extends KalturaEnumBase {
    /** @var pending */
    const PENDING = 1;
    /** @var active */
    const ACTIVE = 2;
    /** @var deleted */
    const DELETED = 3;
    /** @var rejected */
    const REJECTED = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryStatus extends KalturaEnumBase {
    /** @var updating */
    const UPDATING = 1;
    /** @var active */
    const ACTIVE = 2;
    /** @var deleted */
    const DELETED = 3;
    /** @var purged */
    const PURGED = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryUserPermissionLevel extends KalturaEnumBase {
    /** @var manager */
    const MANAGER = 0;
    /** @var moderator */
    const MODERATOR = 1;
    /** @var contributor */
    const CONTRIBUTOR = 2;
    /** @var member */
    const MEMBER = 3;
    /** @var none */
    const NONE = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryUserStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 1;
    /** @var pending */
    const PENDING = 2;
    /** @var not active */
    const NOT_ACTIVE = 3;
    /** @var deleted */
    const DELETED = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaChinaCacheAlgorithmType extends KalturaEnumBase {
    /** @var sha1 */
    const SHA1 = 1;
    /** @var sha256 */
    const SHA256 = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCommercialUseType extends KalturaEnumBase {
    /** @var non commercial use */
    const NON_COMMERCIAL_USE = 0;
    /** @var commercial use */
    const COMMERCIAL_USE = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaContributionPolicyType extends KalturaEnumBase {
    /** @var all */
    const ALL = 1;
    /** @var members with contribution permission */
    const MEMBERS_WITH_CONTRIBUTION_PERMISSION = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaControlPanelCommandStatus extends KalturaEnumBase {
    /** @var pending */
    const PENDING = 1;
    /** @var handled */
    const HANDLED = 2;
    /** @var done */
    const DONE = 3;
    /** @var failed */
    const FAILED = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaControlPanelCommandTargetType extends KalturaEnumBase {
    /** @var data center */
    const DATA_CENTER = 1;
    /** @var scheduler */
    const SCHEDULER = 2;
    /** @var job type */
    const JOB_TYPE = 3;
    /** @var job */
    const JOB = 4;
    /** @var batch */
    const BATCH = 5;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaControlPanelCommandType extends KalturaEnumBase {
    /** @var kill */
    const KILL = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCountryRestrictionType extends KalturaEnumBase {
    /** @var restrict country list */
    const RESTRICT_COUNTRY_LIST = 0;
    /** @var allow country list */
    const ALLOW_COUNTRY_LIST = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDVRStatus extends KalturaEnumBase {
    /** @var disabled */
    const DISABLED = 0;
    /** @var enabled */
    const ENABLED = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 0;
    /** @var deleted */
    const DELETED = 1;
    /** @var staging in */
    const STAGING_IN = 2;
    /** @var staging out */
    const STAGING_OUT = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDirectoryRestrictionType extends KalturaEnumBase {
    /** @var dont display */
    const DONT_DISPLAY = 0;
    /** @var display with link */
    const DISPLAY_WITH_LINK = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEditorType extends KalturaEnumBase {
    /** @var simple */
    const SIMPLE = 1;
    /** @var advanced */
    const ADVANCED = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEmailIngestionProfileStatus extends KalturaEnumBase {
    /** @var inactive */
    const INACTIVE = 0;
    /** @var active */
    const ACTIVE = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryDisplayInSearchType extends KalturaEnumBase {
    /** @var system */
    const SYSTEM = -1;
    /** @var none */
    const NONE = 0;
    /** @var partner only */
    const PARTNER_ONLY = 1;
    /** @var kaltura network */
    const KALTURA_NETWORK = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryModerationStatus extends KalturaEnumBase {
    /** @var pending moderation */
    const PENDING_MODERATION = 1;
    /** @var approved */
    const APPROVED = 2;
    /** @var rejected */
    const REJECTED = 3;
    /** @var deleted */
    const DELETED = 4;
    /** @var flagged for review */
    const FLAGGED_FOR_REVIEW = 5;
    /** @var auto approved */
    const AUTO_APPROVED = 6;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryServerNodeRecordingStatus extends KalturaEnumBase {
    /** @var stopped */
    const STOPPED = 0;
    /** @var on going */
    const ON_GOING = 1;
    /** @var done */
    const DONE = 2;
    /** @var dissmissed */
    const DISMISSED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryServerNodeStatus extends KalturaEnumBase {
    /** @var stoppoed */
    const STOPPED = 0;
    /** @var playable */
    const PLAYABLE = 1;
    /** @var broadcasting */
    const BROADCASTING = 2;
    /** @var authenticated */
    const AUTHENTICATED = 3;
    /** @var marked for deletion */
    const MARKED_FOR_DELETION = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFeatureStatusType extends KalturaEnumBase {
    /** @var lock category */
    const LOCK_CATEGORY = 1;
    /** @var category */
    const CATEGORY = 2;
    /** @var category entry */
    const CATEGORY_ENTRY = 3;
    /** @var entry */
    const ENTRY = 4;
    /** @var category user */
    const CATEGORY_USER = 5;
    /** @var user */
    const USER = 6;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFlavorAssetStatus extends KalturaEnumBase {
    /** @var error */
    const ERROR = -1;
    /** @var queued */
    const QUEUED = 0;
    /** @var converting */
    const CONVERTING = 1;
    /** @var ready */
    const READY = 2;
    /** @var deleted */
    const DELETED = 3;
    /** @var not applicable */
    const NOT_APPLICABLE = 4;
    /** @var temp */
    const TEMP = 5;
    /** @var wait for convert */
    const WAIT_FOR_CONVERT = 6;
    /** @var importing */
    const IMPORTING = 7;
    /** @var validating */
    const VALIDATING = 8;
    /** @var exporting */
    const EXPORTING = 9;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFlavorReadyBehaviorType extends KalturaEnumBase {
    /** @var no impact */
    const NO_IMPACT = 0;
    /** @var inherit flavor params */
    const INHERIT_FLAVOR_PARAMS = 0;
    /** @var requeued */
    const REQUIRED = 1;
    /** @var optional */
    const OPTIONAL = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGender extends KalturaEnumBase {
    /** @var unknown */
    const UNKNOWN = 0;
    /** @var male */
    const MALE = 1;
    /** @var female */
    const FEMALE = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGroupUserStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 0;
    /** @var deleted */
    const DELETED = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaInheritanceType extends KalturaEnumBase {
    /** @var inherit */
    const INHERIT = 1;
    /** @var manual */
    const MANUAL = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaIpAddressRestrictionType extends KalturaEnumBase {
    /** @var restrict list */
    const RESTRICT_LIST = 0;
    /** @var allow list */
    const ALLOW_LIST = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLicenseType extends KalturaEnumBase {
    /** @var unknown */
    const UNKNOWN = -1;
    /** @var none */
    const NONE = 0;
    /** @var copyrighted */
    const COPYRIGHTED = 1;
    /** @var public domain */
    const PUBLIC_DOMAIN = 2;
    /** @var creativecommons attribution */
    const CREATIVECOMMONS_ATTRIBUTION = 3;
    /** @var creativecommons attribution share alike */
    const CREATIVECOMMONS_ATTRIBUTION_SHARE_ALIKE = 4;
    /** @var creativecommons attribution no derivatives */
    const CREATIVECOMMONS_ATTRIBUTION_NO_DERIVATIVES = 5;
    /** @var creativecommons attribution non commercial */
    const CREATIVECOMMONS_ATTRIBUTION_NON_COMMERCIAL = 6;
    /** @var creativecommons attribution non commercial share alike */
    const CREATIVECOMMONS_ATTRIBUTION_NON_COMMERCIAL_SHARE_ALIKE = 7;
    /** @var creativecommons attribution non commercial no derivatives */
    const CREATIVECOMMONS_ATTRIBUTION_NON_COMMERCIAL_NO_DERIVATIVES = 8;
    /** @var gfdl */
    const GFDL = 9;
    /** @var gpl */
    const GPL = 10;
    /** @var affero gpl */
    const AFFERO_GPL = 11;
    /** @var lgpl */
    const LGPL = 12;
    /** @var bsd */
    const BSD = 13;
    /** @var apache */
    const APACHE = 14;
    /** @var moziila */
    const MOZILLA = 15;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLimitFlavorsRestrictionType extends KalturaEnumBase {
    /** @var restrict list */
    const RESTRICT_LIST = 0;
    /** @var allow list */
    const ALLOW_LIST = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLivePublishStatus extends KalturaEnumBase {
    /** @var disabled */
    const DISABLED = 0;
    /** @var enabled */
    const ENABLED = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveReportExportType extends KalturaEnumBase {
    /** @var partner total all */
    const PARTNER_TOTAL_ALL = 1;
    /** @var partner total live */
    const PARTNER_TOTAL_LIVE = 2;
    /** @var entry time line all */
    const ENTRY_TIME_LINE_ALL = 11;
    /** @var entry time line live */
    const ENTRY_TIME_LINE_LIVE = 12;
    /** @var location all */
    const LOCATION_ALL = 21;
    /** @var location live */
    const LOCATION_LIVE = 22;
    /** @var syndication all */
    const SYNDICATION_ALL = 31;
    /** @var syndication live */
    const SYNDICATION_LIVE = 32;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStatsEventType extends KalturaEnumBase {
    /** @var live */
    const LIVE = 1;
    /** @var dvr */
    const DVR = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMailJobStatus extends KalturaEnumBase {
    /** @var pending */
    const PENDING = 1;
    /** @var sent */
    const SENT = 2;
    /** @var error */
    const ERROR = 3;
    /** @var queued */
    const QUEUED = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaType extends KalturaEnumBase {
    /** @var video */
    const VIDEO = 1;
    /** @var image */
    const IMAGE = 2;
    /** @var audio */
    const AUDIO = 5;
    /** @var live stream flash */
    const LIVE_STREAM_FLASH = 201;
    /** @var live stream windows media */
    const LIVE_STREAM_WINDOWS_MEDIA = 202;
    /** @var live stream real media */
    const LIVE_STREAM_REAL_MEDIA = 203;
    /** @var live stream quicktime */
    const LIVE_STREAM_QUICKTIME = 204;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaModerationFlagType extends KalturaEnumBase {
    /** @var sexual content */
    const SEXUAL_CONTENT = 1;
    /** @var violent repulsive */
    const VIOLENT_REPULSIVE = 2;
    /** @var harmful dangerous */
    const HARMFUL_DANGEROUS = 3;
    /** @var spam commercials */
    const SPAM_COMMERCIALS = 4;
    /** @var copyright */
    const COPYRIGHT = 5;
    /** @var terms of use violation */
    const TERMS_OF_USE_VIOLATION = 6;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMrssExtensionMode extends KalturaEnumBase {
    /** @var append */
    const APPEND = 1;
    /** @var replace */
    const REPLACE = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaNotificationObjectType extends KalturaEnumBase {
    /** @var entry */
    const ENTRY = 1;
    /** @var kshow */
    const KSHOW = 2;
    /** @var user */
    const USER = 3;
    /** @var batch job */
    const BATCH_JOB = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaNotificationStatus extends KalturaEnumBase {
    /** @var pending */
    const PENDING = 1;
    /** @var sent */
    const SENT = 2;
    /** @var error */
    const ERROR = 3;
    /** @var should resend */
    const SHOULD_RESEND = 4;
    /** @var error resending */
    const ERROR_RESENDING = 5;
    /** @var sent synch */
    const SENT_SYNCH = 6;
    /** @var queued */
    const QUEUED = 7;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaNotificationType extends KalturaEnumBase {
    /** @var entry add */
    const ENTRY_ADD = 1;
    /** @var enter update permissions */
    const ENTR_UPDATE_PERMISSIONS = 2;
    /** @var entry delete */
    const ENTRY_DELETE = 3;
    /** @var entry block */
    const ENTRY_BLOCK = 4;
    /** @var entry update */
    const ENTRY_UPDATE = 5;
    /** @var entry update thumbnail */
    const ENTRY_UPDATE_THUMBNAIL = 6;
    /** @var entry update moderation */
    const ENTRY_UPDATE_MODERATION = 7;
    /** @var user add */
    const USER_ADD = 21;
    /** @var user banned */
    const USER_BANNED = 26;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaNullableBoolean extends KalturaEnumBase {
    /** @var null value */
    const NULL_VALUE = -1;
    /** @var false value */
    const FALSE_VALUE = 0;
    /** @var true value */
    const TRUE_VALUE = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPartnerGroupType extends KalturaEnumBase {
    /** @var publisher */
    const PUBLISHER = 1;
    /** @var var group */
    const VAR_GROUP = 2;
    /** @var group */
    const GROUP = 3;
    /** @var template */
    const TEMPLATE = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPartnerStatus extends KalturaEnumBase {
    /** @var deleted */
    const DELETED = 0;
    /** @var active */
    const ACTIVE = 1;
    /** @var blocked */
    const BLOCKED = 2;
    /** @var full block */
    const FULL_BLOCK = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPartnerType extends KalturaEnumBase {
    /** @var kmc */
    const KMC = 1;
    /** @var wiki */
    const WIKI = 100;
    /** @var wordpress */
    const WORDPRESS = 101;
    /** @var drupal */
    const DRUPAL = 102;
    /** @var dekiwiki */
    const DEKIWIKI = 103;
    /** @var moodle */
    const MOODLE = 104;
    /** @var community edition */
    const COMMUNITY_EDITION = 105;
    /** @var joomla */
    const JOOMLA = 106;
    /** @var blackboard */
    const BLACKBOARD = 107;
    /** @var sakai */
    const SAKAI = 108;
    /** @var admin console */
    const ADMIN_CONSOLE = 109;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPermissionStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 1;
    /** @var blocked */
    const BLOCKED = 2;
    /** @var deleted */
    const DELETED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPermissionType extends KalturaEnumBase {
    /** @var normal */
    const NORMAL = 1;
    /** @var special feature */
    const SPECIAL_FEATURE = 2;
    /** @var plugin */
    const PLUGIN = 3;
    /** @var partner group */
    const PARTNER_GROUP = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlaylistType extends KalturaEnumBase {
    /** @var static list */
    const STATIC_LIST = 3;
    /** @var dynamic */
    const DYNAMIC = 10;
    /** @var external */
    const EXTERNAL = 101;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPrivacyType extends KalturaEnumBase {
    /** @var all */
    const ALL = 1;
    /** @var authenticated users */
    const AUTHENTICATED_USERS = 2;
    /** @var members only */
    const MEMBERS_ONLY = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaRecordStatus extends KalturaEnumBase {
    /** @var disabled */
    const DISABLED = 0;
    /** @var appended */
    const APPENDED = 1;
    /** @var per session */
    const PER_SESSION = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaRecordingStatus extends KalturaEnumBase {
    /** @var stopped */
    const STOPPED = 0;
    /** @var paused */
    const PAUSED = 1;
    /** @var active */
    const ACTIVE = 2;
    /** @var disabled */
    const DISABLED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaResponseProfileStatus extends KalturaEnumBase {
    /** @var disabled */
    const DISABLED = 1;
    /** @var enabled */
    const ENABLED = 2;
    /** @var deleted */
    const DELETED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaResponseProfileType extends KalturaEnumBase {
    /** @var include fields */
    const INCLUDE_FIELDS = 1;
    /** @var exclude fields */
    const EXCLUDE_FIELDS = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaResponseType extends KalturaEnumBase {
    /** @var response type json */
    const RESPONSE_TYPE_JSON = 1;
    /** @var response type xml */
    const RESPONSE_TYPE_XML = 2;
    /** @var response type php */
    const RESPONSE_TYPE_PHP = 3;
    /** @var response type php array */
    const RESPONSE_TYPE_PHP_ARRAY = 4;
    /** @var response type html */
    const RESPONSE_TYPE_HTML = 7;
    /** @var response type mrss */
    const RESPONSE_TYPE_MRSS = 8;
    /** @var response type jsonp */
    const RESPONSE_TYPE_JSONP = 9;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSchedulerStatusType extends KalturaEnumBase {
    /** @var running batches count */
    const RUNNING_BATCHES_COUNT = 1;
    /** @var running batches cpu */
    const RUNNING_BATCHES_CPU = 2;
    /** @var running batches memory */
    const RUNNING_BATCHES_MEMORY = 3;
    /** @var running batches network */
    const RUNNING_BATCHES_NETWORK = 4;
    /** @var running batches disc io */
    const RUNNING_BATCHES_DISC_IO = 5;
    /** @var running batches disc space */
    const RUNNING_BATCHES_DISC_SPACE = 6;
    /** @var running batches is running */
    const RUNNING_BATCHES_IS_RUNNING = 7;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSearchOperatorType extends KalturaEnumBase {
    /** @var search and */
    const SEARCH_AND = 1;
    /** @var search or */
    const SEARCH_OR = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSearchProviderType extends KalturaEnumBase {
    /** @var flickr */
    const FLICKR = 3;
    /** @var youtube */
    const YOUTUBE = 4;
    /** @var myspace */
    const MYSPACE = 7;
    /** @var photobucket */
    const PHOTOBUCKET = 8;
    /** @var jamendo */
    const JAMENDO = 9;
    /** @var ccmixter */
    const CCMIXTER = 10;
    /** @var nypl */
    const NYPL = 11;
    /** @var current */
    const CURRENT = 12;
    /** @var media commons */
    const MEDIA_COMMONS = 13;
    /** @var kaltura */
    const KALTURA = 20;
    /** @var kaltura user clips */
    const KALTURA_USER_CLIPS = 21;
    /** @var archive org */
    const ARCHIVE_ORG = 22;
    /** @var kaltura partner */
    const KALTURA_PARTNER = 23;
    /** @var metacafe */
    const METACAFE = 24;
    /** @var search proxy */
    const SEARCH_PROXY = 28;
    /** @var partner specific */
    const PARTNER_SPECIFIC = 100;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaServerNodeStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 1;
    /** @var disabled */
    const DISABLED = 2;
    /** @var deleted */
    const DELETED = 3;
    /** @var not regstered */
    const NOT_REGISTERED = 4;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSessionType extends KalturaEnumBase {
    /** @var user */
    const USER = 0;
    /** @var admin */
    const ADMIN = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSiteRestrictionType extends KalturaEnumBase {
    /** @var restrict site list */
    const RESTRICT_SITE_LIST = 0;
    /** @var allow site list */
    const ALLOW_SITE_LIST = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStatsEventType extends KalturaEnumBase {
    /** @var widget loaded */
    const WIDGET_LOADED = 1;
    /** @var media loaded */
    const MEDIA_LOADED = 2;
    /** @var play */
    const PLAY = 3;
    /** @var play reached 25 */
    const PLAY_REACHED_25 = 4;
    /** @var play reached 50 */
    const PLAY_REACHED_50 = 5;
    /** @var play reached 75 */
    const PLAY_REACHED_75 = 6;
    /** @var play reached 100 */
    const PLAY_REACHED_100 = 7;
    /** @var open edit */
    const OPEN_EDIT = 8;
    /** @var open viral */
    const OPEN_VIRAL = 9;
    /** @var open download */
    const OPEN_DOWNLOAD = 10;
    /** @var open report */
    const OPEN_REPORT = 11;
    /** @var buffer start */
    const BUFFER_START = 12;
    /** @var buffer end */
    const BUFFER_END = 13;
    /** @var open full screen */
    const OPEN_FULL_SCREEN = 14;
    /** @var close full screen */
    const CLOSE_FULL_SCREEN = 15;
    /** @var replay */
    const REPLAY = 16;
    /** @var seek */
    const SEEK = 17;
    /** @var open upload */
    const OPEN_UPLOAD = 18;
    /** @var save publish */
    const SAVE_PUBLISH = 19;
    /** @var close editor */
    const CLOSE_EDITOR = 20;
    /** @var bumper played */
    const PRE_BUMPER_PLAYED = 21;
    /** @var bumper played */
    const POST_BUMPER_PLAYED = 22;
    /** @var bumper clicked */
    const BUMPER_CLICKED = 23;
    /** @var preroll started */
    const PREROLL_STARTED = 24;
    /** @var midroll started */
    const MIDROLL_STARTED = 25;
    /** @var postroll started */
    const POSTROLL_STARTED = 26;
    /** @var overlay started */
    const OVERLAY_STARTED = 27;
    /** @var preroll clicked */
    const PREROLL_CLICKED = 28;
    /** @var midroll clicked */
    const MIDROLL_CLICKED = 29;
    /** @var postroll clicked */
    const POSTROLL_CLICKED = 30;
    /** @var overlay clicked */
    const OVERLAY_CLICKED = 31;
    /** @var preroll 25 */
    const PREROLL_25 = 32;
    /** @var preroll 50 */
    const PREROLL_50 = 33;
    /** @var preroll 75 */
    const PREROLL_75 = 34;
    /** @var midroll 25 */
    const MIDROLL_25 = 35;
    /** @var midroll 50 */
    const MIDROLL_50 = 36;
    /** @var midroll 75 */
    const MIDROLL_75 = 37;
    /** @var postroll 25 */
    const POSTROLL_25 = 38;
    /** @var postroll 50 */
    const POSTROLL_50 = 39;
    /** @var postroll 75 */
    const POSTROLL_75 = 40;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStatsFeatureType extends KalturaEnumBase {
    /** @var none */
    const NONE = 0;
    /** @var related */
    const RELATED = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStatsKmcEventType extends KalturaEnumBase {
    /** @var content page view */
    const CONTENT_PAGE_VIEW = 1001;
    /** @var content add playlist */
    const CONTENT_ADD_PLAYLIST = 1010;
    /** @var content edit playlist */
    const CONTENT_EDIT_PLAYLIST = 1011;
    /** @var content delete playlist */
    const CONTENT_DELETE_PLAYLIST = 1012;
    /** @var content edit entry */
    const CONTENT_EDIT_ENTRY = 1013;
    /** @var content change thumbnail */
    const CONTENT_CHANGE_THUMBNAIL = 1014;
    /** @var content add tags */
    const CONTENT_ADD_TAGS = 1015;
    /** @var content remove tags */
    const CONTENT_REMOVE_TAGS = 1016;
    /** @var content add admin tags */
    const CONTENT_ADD_ADMIN_TAGS = 1017;
    /** @var content remove admin tags */
    const CONTENT_REMOVE_ADMIN_TAGS = 1018;
    /** @var content download */
    const CONTENT_DOWNLOAD = 1019;
    /** @var content approve moderation */
    const CONTENT_APPROVE_MODERATION = 1020;
    /** @var content reject moderation */
    const CONTENT_REJECT_MODERATION = 1021;
    /** @var content bulk upload */
    const CONTENT_BULK_UPLOAD = 1022;
    /** @var content admin kcw upload */
    const CONTENT_ADMIN_KCW_UPLOAD = 1023;
    /** @var account change partner info */
    const ACCOUNT_CHANGE_PARTNER_INFO = 1030;
    /** @var account change login info */
    const ACCOUNT_CHANGE_LOGIN_INFO = 1031;
    /** @var account contact us usage */
    const ACCOUNT_CONTACT_US_USAGE = 1032;
    /** @var account update server setting */
    const ACCOUNT_UPDATE_SERVER_SETTINGS = 1033;
    /** @var account account overview */
    const ACCOUNT_ACCOUNT_OVERVIEW = 1034;
    /** @var account access control */
    const ACCOUNT_ACCESS_CONTROL = 1035;
    /** @var account transcoding settings */
    const ACCOUNT_TRANSCODING_SETTINGS = 1036;
    /** @var account account upgrade */
    const ACCOUNT_ACCOUNT_UPGRADE = 1037;
    /** @var account save server settings */
    const ACCOUNT_SAVE_SERVER_SETTINGS = 1038;
    /** @var account access control delete */
    const ACCOUNT_ACCESS_CONTROL_DELETE = 1039;
    /** @var account save transcoding settings */
    const ACCOUNT_SAVE_TRANSCODING_SETTINGS = 1040;
    /** @var login */
    const LOGIN = 1041;
    /** @var dashboard import content */
    const DASHBOARD_IMPORT_CONTENT = 1042;
    /** @var dashboard update content */
    const DASHBOARD_UPDATE_CONTENT = 1043;
    /** @var dashboard account contact us */
    const DASHBOARD_ACCOUNT_CONTACT_US = 1044;
    /** @var dashboard view reports */
    const DASHBOARD_VIEW_REPORTS = 1045;
    /** @var dashboard embed player */
    const DASHBOARD_EMBED_PLAYER = 1046;
    /** @var dashboard emved playlist */
    const DASHBOARD_EMBED_PLAYLIST = 1047;
    /** @var dashboard customize players */
    const DASHBOARD_CUSTOMIZE_PLAYERS = 1048;
    /** @var app studio new player single video */
    const APP_STUDIO_NEW_PLAYER_SINGLE_VIDEO = 1050;
    /** @var app studio new player playlist */
    const APP_STUDIO_NEW_PLAYER_PLAYLIST = 1051;
    /** @var app studio new player multi tab playlist */
    const APP_STUDIO_NEW_PLAYER_MULTI_TAB_PLAYLIST = 1052;
    /** @var app studio edit player single video */
    const APP_STUDIO_EDIT_PLAYER_SINGLE_VIDEO = 1053;
    /** @var app studio edit player playlist */
    const APP_STUDIO_EDIT_PLAYER_PLAYLIST = 1054;
    /** @var app studio edit player multi tab playlist */
    const APP_STUDIO_EDIT_PLAYER_MULTI_TAB_PLAYLIST = 1055;
    /** @var app studio duplicate player */
    const APP_STUDIO_DUPLICATE_PLAYER = 1056;
    /** @var content content go to page */
    const CONTENT_CONTENT_GO_TO_PAGE = 1057;
    /** @var content delete item */
    const CONTENT_DELETE_ITEM = 1058;
    /** @var content delete mix */
    const CONTENT_DELETE_MIX = 1059;
    /** @var reports and analytics bandwidth usage tab */
    const REPORTS_AND_ANALYTICS_BANDWIDTH_USAGE_TAB = 1070;
    /** @var reports and analytics content reports tab */
    const REPORTS_AND_ANALYTICS_CONTENT_REPORTS_TAB = 1071;
    /** @var reports and analytics users and community reports tab */
    const REPORTS_AND_ANALYTICS_USERS_AND_COMMUNITY_REPORTS_TAB = 1072;
    /** @var reports and analytics top contributors */
    const REPORTS_AND_ANALYTICS_TOP_CONTRIBUTORS = 1073;
    /** @var reports and analytics map overlays */
    const REPORTS_AND_ANALYTICS_MAP_OVERLAYS = 1074;
    /** @var reports and analytics top syndications */
    const REPORTS_AND_ANALYTICS_TOP_SYNDICATIONS = 1075;
    /** @var reports and analytics top content */
    const REPORTS_AND_ANALYTICS_TOP_CONTENT = 1076;
    /** @var reports and analytics content dropoff */
    const REPORTS_AND_ANALYTICS_CONTENT_DROPOFF = 1077;
    /** @var reports and analytics content interactions */
    const REPORTS_AND_ANALYTICS_CONTENT_INTERACTIONS = 1078;
    /** @var reports and analytics content contributions */
    const REPORTS_AND_ANALYTICS_CONTENT_CONTRIBUTIONS = 1079;
    /** @var reports and analytics video drill down */
    const REPORTS_AND_ANALYTICS_VIDEO_DRILL_DOWN = 1080;
    /** @var reports and analytics drill down interaction */
    const REPORTS_AND_ANALYTICS_CONTENT_DRILL_DOWN_INTERACTION = 1081;
    /** @var reports and analytics content contributions drilldown */
    const REPORTS_AND_ANALYTICS_CONTENT_CONTRIBUTIONS_DRILLDOWN = 1082;
    /** @var reports and analytics video drill down dropoff */
    const REPORTS_AND_ANALYTICS_VIDEO_DRILL_DOWN_DROPOFF = 1083;
    /** @var reports and analytics map overlays drilldown */
    const REPORTS_AND_ANALYTICS_MAP_OVERLAYS_DRILLDOWN = 1084;
    /** @var reports and analytics top syndications drill down */
    const REPORTS_AND_ANALYTICS_TOP_SYNDICATIONS_DRILL_DOWN = 1085;
    /** @var reports and analytics bandwidth usage view monthly */
    const REPORTS_AND_ANALYTICS_BANDWIDTH_USAGE_VIEW_MONTHLY = 1086;
    /** @var reports and analytics bandwidth usage view yearly */
    const REPORTS_AND_ANALYTICS_BANDWIDTH_USAGE_VIEW_YEARLY = 1087;
    /** @var cntent entry drilldown */
    const CONTENT_ENTRY_DRILLDOWN = 1088;
    /** @var content open preview and embed */
    const CONTENT_OPEN_PREVIEW_AND_EMBED = 1089;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStorageProfileDeliveryStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 1;
    /** @var blocked */
    const BLOCKED = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStorageProfileReadyBehavior extends KalturaEnumBase {
    /** @var no impact */
    const NO_IMPACT = 0;
    /** @var required */
    const REQUIRED = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStorageProfileStatus extends KalturaEnumBase {
    /** @var disabled */
    const DISABLED = 1;
    /** @var automatic */
    const AUTOMATIC = 2;
    /** @var manual */
    const MANUAL = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSyndicationFeedStatus extends KalturaEnumBase {
    /** @var deleted */
    const DELETED = -1;
    /** @var active */
    const ACTIVE = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSyndicationFeedType extends KalturaEnumBase {
    /** @var google video */
    const GOOGLE_VIDEO = 1;
    /** @var yahoo */
    const YAHOO = 2;
    /** @var itunes */
    const ITUNES = 3;
    /** @var tube mogul */
    const TUBE_MOGUL = 4;
    /** @var kaltura */
    const KALTURA = 5;
    /** @var kaltura xslt */
    const KALTURA_XSLT = 6;
    /** @var roku direct publisher */
    const ROKU_DIRECT_PUBLISHER = 7;
    /** @var opera tv snap */
    const OPERA_TV_SNAP = 8;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaThumbAssetStatus extends KalturaEnumBase {
    /** @var error */
    const ERROR = -1;
    /** @var queued */
    const QUEUED = 0;
    /** @var capturing */
    const CAPTURING = 1;
    /** @var ready */
    const READY = 2;
    /** @var deleted */
    const DELETED = 3;
    /** @var importing */
    const IMPORTING = 7;
    /** @var exporting */
    const EXPORTING = 9;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaThumbCropType extends KalturaEnumBase {
    /** @var resize */
    const RESIZE = 1;
    /** @var reseize with padding */
    const RESIZE_WITH_PADDING = 2;
    /** @var crop */
    const CROP = 3;
    /** @var crop from top */
    const CROP_FROM_TOP = 4;
    /** @var resize with force */
    const RESIZE_WITH_FORCE = 5;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUiConfCreationMode extends KalturaEnumBase {
    /** @var wizard */
    const WIZARD = 2;
    /** @var advanced */
    const ADVANCED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUiConfObjType extends KalturaEnumBase {
    /** @var player */
    const PLAYER = 1;
    /** @var contribution wizard */
    const CONTRIBUTION_WIZARD = 2;
    /** @var simple editor */
    const SIMPLE_EDITOR = 3;
    /** @var advanced editor */
    const ADVANCED_EDITOR = 4;
    /** @var playlist */
    const PLAYLIST = 5;
    /** @var app studio */
    const APP_STUDIO = 6;
    /** @var krecord */
    const KRECORD = 7;
    /** @var player */
    const PLAYER_V3 = 8;
    /** @var kmc account */
    const KMC_ACCOUNT = 9;
    /** @var kmc analytics */
    const KMC_ANALYTICS = 10;
    /** @var kmc content */
    const KMC_CONTENT = 11;
    /** @var dashboard */
    const KMC_DASHBOARD = 12;
    /** @var kmc login */
    const KMC_LOGIN = 13;
    /** @var player sl */
    const PLAYER_SL = 14;
    /** @var clientside encoder */
    const CLIENTSIDE_ENCODER = 15;
    /** @var kmc general */
    const KMC_GENERAL = 16;
    /** @var kmc roles and premissions */
    const KMC_ROLES_AND_PERMISSIONS = 17;
    /** @var clipper */
    const CLIPPER = 18;
    /** @var ksr */
    const KSR = 19;
    /** @var kupload */
    const KUPLOAD = 20;
    /** @var webcasting */
    const WEBCASTING = 21;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUpdateMethodType extends KalturaEnumBase {
    /** @var manual */
    const MANUAL = 0;
    /** @var automatic */
    const AUTOMATIC = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUploadErrorCode extends KalturaEnumBase {
    /** @var no error */
    const NO_ERROR = 0;
    /** @var general error */
    const GENERAL_ERROR = 1;
    /** @var partial upload */
    const PARTIAL_UPLOAD = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUploadTokenStatus extends KalturaEnumBase {
    /** @var pending */
    const PENDING = 0;
    /** @var partial uplaod */
    const PARTIAL_UPLOAD = 1;
    /** @var full upload */
    const FULL_UPLOAD = 2;
    /** @var closed */
    const CLOSED = 3;
    /** @var timed out */
    const TIMED_OUT = 4;
    /** @var deleted */
    const DELETED = 5;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserAgentRestrictionType extends KalturaEnumBase {
    /** @var restrict list */
    const RESTRICT_LIST = 0;
    /** @var allow list */
    const ALLOW_LIST = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserJoinPolicyType extends KalturaEnumBase {
    /** @var auto join */
    const AUTO_JOIN = 1;
    /** @var request to join */
    const REQUEST_TO_JOIN = 2;
    /** @var not allowed */
    const NOT_ALLOWED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserRoleStatus extends KalturaEnumBase {
    /** @var active */
    const ACTIVE = 1;
    /** @var blocked */
    const BLOCKED = 2;
    /** @var deleted */
    const DELETED = 3;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserStatus extends KalturaEnumBase {
    /** @var blocked */
    const BLOCKED = 0;
    /** @var active */
    const ACTIVE = 1;
    /** @var deleted */
    const DELETED = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserType extends KalturaEnumBase {
    /** @var user */
    const USER = 0;
    /** @var group */
    const GROUP = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaViewMode extends KalturaEnumBase {
    /** @var preview */
    const PREVIEW = 0;
    /** @var allow all */
    const ALLOW_ALL = 1;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaWidgetSecurityType extends KalturaEnumBase {
    /** @var none */
    const NONE = 1;
    /** @var timehash */
    const TIMEHASH = 2;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAccessControlOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAccessControlProfileOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by updated */
    const UPDATED_AT_ASC = "+updatedAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by updated */
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAdminUserOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by id */
    const ID_ASC = "+id";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by id */
    const ID_DESC = "-id";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAkamaiUniversalStreamType extends KalturaEnumBase {
    /** @var hd iphone ipad live */
    const HD_IPHONE_IPAD_LIVE = "HD iPhone/iPad Live";
    /** @var univeral streaming live */
    const UNIVERSAL_STREAMING_LIVE = "Universal Streaming Live";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAmazonS3StorageProfileFilesPermissionLevel extends KalturaEnumBase {
    /** @var acl authenticated read */
    const ACL_AUTHENTICATED_READ = "authenticated-read";
    /** @var acl private */
    const ACL_PRIVATE = "private";
    /** @var acl public read */
    const ACL_PUBLIC_READ = "public-read";
    /** @var acl public read write */
    const ACL_PUBLIC_READ_WRITE = "public-read-write";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAmazonS3StorageProfileOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by updated */
    const UPDATED_AT_ASC = "+updatedAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by updated */
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaApiActionPermissionItemOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by id */
    const ID_ASC = "+id";
    /** @var order by updated */
    const UPDATED_AT_ASC = "+updatedAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by id */
    const ID_DESC = "-id";
    /** @var order by updated */
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaApiParameterPermissionItemAction extends KalturaEnumBase {
    /** @var usage */
    const USAGE = "all";
    /** @var insert */
    const INSERT = "insert";
    /** @var read */
    const READ = "read";
    /** @var update */
    const UPDATE = "update";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaApiParameterPermissionItemOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by id */
    const ID_ASC = "+id";
    /** @var order by updated */
    const UPDATED_AT_ASC = "+updatedAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by id */
    const ID_DESC = "-id";
    /** @var order by updated */
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAppTokenHashType extends KalturaEnumBase {
    /** @var md5 */
    const MD5 = "MD5";
    /** @var sha1 */
    const SHA1 = "SHA1";
    /** @var sha256 */
    const SHA256 = "SHA256";
    /** @var sha512 */
    const SHA512 = "SHA512";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAppTokenOrderBy extends KalturaEnumBase {
    /** @var order by created */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by updated */
    const UPDATED_AT_ASC = "+updatedAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by updated */
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAssetOrderBy extends KalturaEnumBase {
    /** @var order by cerated */
    const CREATED_AT_ASC = "+createdAt";
    /** @var order by deleted */
    const DELETED_AT_ASC = "+deletedAt";
    /** @var order by size */
    const SIZE_ASC = "+size";
    /** @var order by updated */
    const UPDATED_AT_ASC = "+updatedAt";
    /** @var order by created */
    const CREATED_AT_DESC = "-createdAt";
    /** @var order by deleted */
    const DELETED_AT_DESC = "-deletedAt";
    /** @var order by size */
    const SIZE_DESC = "-size";
    /** @var order by updated */
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAssetParamsOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAssetParamsOutputOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAssetType extends KalturaEnumBase {
    const ATTACHMENT = "attachment.Attachment";
    const CAPTION = "caption.Caption";
    const DOCUMENT = "document.Document";
    const IMAGE = "document.Image";
    const PDF = "document.PDF";
    const SWF = "document.SWF";
    const TIMED_THUMB_ASSET = "thumbCuePoint.timedThumb";
    const TRANSCRIPT = "transcript.Transcript";
    const WIDEVINE_FLAVOR = "widevine.WidevineFlavor";
    const FLAVOR = "1";
    const THUMBNAIL = "2";
    const LIVE = "3";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaAudioCodec extends KalturaEnumBase {
    const NONE = "";
    const AAC = "aac";
    const AACHE = "aache";
    const AC3 = "ac3";
    const AMRNB = "amrnb";
    const COPY = "copy";
    const EAC3 = "eac3";
    const MP3 = "mp3";
    const MPEG2 = "mpeg2";
    const PCM = "pcm";
    const VORBIS = "vorbis";
    const WMA = "wma";
    const WMAPRO = "wmapro";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBaseEntryCloneOptions extends KalturaEnumBase {
    const AD_CUE_POINTS = "adCuePoint.AD_CUE_POINTS";
    const ANNOTATION_CUE_POINTS = "annotation.ANNOTATION_CUE_POINTS";
    const CODE_CUE_POINTS = "codeCuePoint.CODE_CUE_POINTS";
    const THUMB_CUE_POINTS = "thumbCuePoint.THUMB_CUE_POINTS";
    const USERS = "1";
    const CATEGORIES = "2";
    const CHILD_ENTRIES = "3";
    const ACCESS_CONTROL = "4";
    const METADATA = "5";
    const FLAVORS = "6";
    const CAPTIONS = "7";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBaseEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBaseEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBaseEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const END_DATE_ASC = "+endDate";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const END_DATE_DESC = "-endDate";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBaseSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBatchJobObjectType extends KalturaEnumBase {
    const ENTRY_DISTRIBUTION = "contentDistribution.EntryDistribution";
    const DROP_FOLDER_FILE = "dropFolderXmlBulkUpload.DropFolderFile";
    const METADATA = "metadata.Metadata";
    const METADATA_PROFILE = "metadata.MetadataProfile";
    const SCHEDULED_TASK_PROFILE = "scheduledTask.ScheduledTaskProfile";
    const ENTRY = "1";
    const CATEGORY = "2";
    const FILE_SYNC = "3";
    const ASSET = "4";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBatchJobOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const ESTIMATED_EFFORT_ASC = "+estimatedEffort";
    const EXECUTION_ATTEMPTS_ASC = "+executionAttempts";
    const FINISH_TIME_ASC = "+finishTime";
    const LOCK_VERSION_ASC = "+lockVersion";
    const PRIORITY_ASC = "+priority";
    const QUEUE_TIME_ASC = "+queueTime";
    const STATUS_ASC = "+status";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const ESTIMATED_EFFORT_DESC = "-estimatedEffort";
    const EXECUTION_ATTEMPTS_DESC = "-executionAttempts";
    const FINISH_TIME_DESC = "-finishTime";
    const LOCK_VERSION_DESC = "-lockVersion";
    const PRIORITY_DESC = "-priority";
    const QUEUE_TIME_DESC = "-queueTime";
    const STATUS_DESC = "-status";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBatchJobType extends KalturaEnumBase {
    const PARSE_MULTI_LANGUAGE_CAPTION_ASSET = "caption.parsemultilanguagecaptionasset";
    const PARSE_CAPTION_ASSET = "captionSearch.parseCaptionAsset";
    const DISTRIBUTION_DELETE = "contentDistribution.DistributionDelete";
    const CONVERT = "0";
    const DISTRIBUTION_DISABLE = "contentDistribution.DistributionDisable";
    const DISTRIBUTION_ENABLE = "contentDistribution.DistributionEnable";
    const DISTRIBUTION_FETCH_REPORT = "contentDistribution.DistributionFetchReport";
    const DISTRIBUTION_SUBMIT = "contentDistribution.DistributionSubmit";
    const DISTRIBUTION_SYNC = "contentDistribution.DistributionSync";
    const DISTRIBUTION_UPDATE = "contentDistribution.DistributionUpdate";
    const DROP_FOLDER_CONTENT_PROCESSOR = "dropFolder.DropFolderContentProcessor";
    const DROP_FOLDER_WATCHER = "dropFolder.DropFolderWatcher";
    const EVENT_NOTIFICATION_HANDLER = "eventNotification.EventNotificationHandler";
    const INTEGRATION = "integration.Integration";
    const SCHEDULED_TASK = "scheduledTask.ScheduledTask";
    const INDEX_TAGS = "tagSearch.IndexTagsByPrivacyContext";
    const TAG_RESOLVE = "tagSearch.TagResolve";
    const VIRUS_SCAN = "virusScan.VirusScan";
    const WIDEVINE_REPOSITORY_SYNC = "widevine.WidevineRepositorySync";
    const IMPORT = "1";
    const DELETE = "2";
    const FLATTEN = "3";
    const BULKUPLOAD = "4";
    const DVDCREATOR = "5";
    const DOWNLOAD = "6";
    const OOCONVERT = "7";
    const CONVERT_PROFILE = "10";
    const POSTCONVERT = "11";
    const EXTRACT_MEDIA = "14";
    const MAIL = "15";
    const NOTIFICATION = "16";
    const CLEANUP = "17";
    const SCHEDULER_HELPER = "18";
    const BULKDOWNLOAD = "19";
    const DB_CLEANUP = "20";
    const PROVISION_PROVIDE = "21";
    const CONVERT_COLLECTION = "22";
    const STORAGE_EXPORT = "23";
    const PROVISION_DELETE = "24";
    const STORAGE_DELETE = "25";
    const EMAIL_INGESTION = "26";
    const METADATA_IMPORT = "27";
    const METADATA_TRANSFORM = "28";
    const FILESYNC_IMPORT = "29";
    const CAPTURE_THUMB = "30";
    const DELETE_FILE = "31";
    const INDEX = "32";
    const MOVE_CATEGORY_ENTRIES = "33";
    const COPY = "34";
    const CONCAT = "35";
    const CONVERT_LIVE_SEGMENT = "36";
    const COPY_PARTNER = "37";
    const VALIDATE_LIVE_MEDIA_SERVERS = "38";
    const SYNC_CATEGORY_PRIVACY_CONTEXT = "39";
    const LIVE_REPORT_EXPORT = "40";
    const RECALCULATE_CACHE = "41";
    const LIVE_TO_VOD = "42";
    const COPY_CAPTIONS = "43";
    const CHUNKED_ENCODE_JOB_SCHEDULER = "44";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBulkUploadAction extends KalturaEnumBase {
    const CANCEL = "scheduleBulkUpload.CANCEL";
    const ADD = "1";
    const UPDATE = "2";
    const DELETE = "3";
    const REPLACE = "4";
    const TRANSFORM_XSLT = "5";
    const ADD_OR_UPDATE = "6";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBulkUploadObjectType extends KalturaEnumBase {
    const SCHEDULE_EVENT = "scheduleBulkUpload.SCHEDULE_EVENT";
    const SCHEDULE_RESOURCE = "scheduleBulkUpload.SCHEDULE_RESOURCE";
    const ENTRY = "1";
    const CATEGORY = "2";
    const USER = "3";
    const CATEGORY_USER = "4";
    const CATEGORY_ENTRY = "5";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBulkUploadOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBulkUploadResultStatus extends KalturaEnumBase {
    const ERROR = "1";
    const OK = "2";
    const IN_PROGRESS = "3";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaBulkUploadType extends KalturaEnumBase {
    const CSV = "bulkUploadCsv.CSV";
    const FILTER = "bulkUploadFilter.FILTER";
    const XML = "bulkUploadXml.XML";
    const DROP_FOLDER_XML = "dropFolderXmlBulkUpload.DROP_FOLDER_XML";
    const ICAL = "scheduleBulkUpload.ICAL";
    const DROP_FOLDER_ICAL = "scheduleDropFolder.DROP_FOLDER_ICAL";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryEntryAdvancedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryIdentifierField extends KalturaEnumBase {
    const FULL_NAME = "fullName";
    const ID = "id";
    const REFERENCE_ID = "referenceId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DEPTH_ASC = "+depth";
    const DIRECT_ENTRIES_COUNT_ASC = "+directEntriesCount";
    const DIRECT_SUB_CATEGORIES_COUNT_ASC = "+directSubCategoriesCount";
    const ENTRIES_COUNT_ASC = "+entriesCount";
    const FULL_NAME_ASC = "+fullName";
    const MEMBERS_COUNT_ASC = "+membersCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const DEPTH_DESC = "-depth";
    const DIRECT_ENTRIES_COUNT_DESC = "-directEntriesCount";
    const DIRECT_SUB_CATEGORIES_COUNT_DESC = "-directSubCategoriesCount";
    const ENTRIES_COUNT_DESC = "-entriesCount";
    const FULL_NAME_DESC = "-fullName";
    const MEMBERS_COUNT_DESC = "-membersCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCategoryUserOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaCloneComponentSelectorType extends KalturaEnumBase {
    const INCLUDE_COMPONENT = "0";
    const EXCLUDE_COMPONENT = "1";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaConditionType extends KalturaEnumBase {
    const EVENT_NOTIFICATION_FIELD = "eventNotification.BooleanField";
    const EVENT_NOTIFICATION_OBJECT_CHANGED = "eventNotification.ObjectChanged";
    const METADATA_FIELD_CHANGED = "metadata.FieldChanged";
    const METADATA_FIELD_COMPARE = "metadata.FieldCompare";
    const METADATA_FIELD_MATCH = "metadata.FieldMatch";
    const AUTHENTICATED = "1";
    const COUNTRY = "2";
    const IP_ADDRESS = "3";
    const SITE = "4";
    const USER_AGENT = "5";
    const FIELD_MATCH = "6";
    const FIELD_COMPARE = "7";
    const ASSET_PROPERTIES_COMPARE = "8";
    const USER_ROLE = "9";
    const GEO_DISTANCE = "10";
    const OR_OPERATOR = "11";
    const HASH = "12";
    const DELIVERY_PROFILE = "13";
    const ACTIVE_EDGE_VALIDATE = "14";
    const ANONYMOUS_IP = "15";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaContainerFormat extends KalturaEnumBase {
    const _3GP = "3gp";
    const APPLEHTTP = "applehttp";
    const AVI = "avi";
    const BMP = "bmp";
    const COPY = "copy";
    const FLV = "flv";
    const HLS = "hls";
    const ISMA = "isma";
    const ISMV = "ismv";
    const JPG = "jpg";
    const M2TS = "m2ts";
    const M4V = "m4v";
    const MKV = "mkv";
    const MOV = "mov";
    const MP3 = "mp3";
    const MP4 = "mp4";
    const MPEG = "mpeg";
    const MPEGTS = "mpegts";
    const MXF = "mxf";
    const OGG = "ogg";
    const OGV = "ogv";
    const PDF = "pdf";
    const PNG = "png";
    const SWF = "swf";
    const WAV = "wav";
    const WEBM = "webm";
    const WMA = "wma";
    const WMV = "wmv";
    const WVM = "wvm";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaContextType extends KalturaEnumBase {
    const PLAY = "1";
    const DOWNLOAD = "2";
    const THUMBNAIL = "3";
    const METADATA = "4";
    const EXPORT = "5";
    const SERVE = "6";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaControlPanelCommandOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaConversionProfileAssetParamsOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaConversionProfileOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaConversionProfileStatus extends KalturaEnumBase {
    const DISABLED = "1";
    const ENABLED = "2";
    const DELETED = "3";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaConversionProfileType extends KalturaEnumBase {
    const MEDIA = "1";
    const LIVE_STREAM = "2";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDataEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDataEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDataEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const END_DATE_ASC = "+endDate";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const END_DATE_DESC = "-endDate";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileAkamaiAppleHttpManifestOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileAkamaiHdsOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileAkamaiHttpOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileGenericAppleHttpOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileGenericHdsOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileGenericHttpOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileGenericRtmpOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileGenericSilverLightOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileLiveAppleHttpOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileRtmpOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryProfileType extends KalturaEnumBase {
    const EDGE_CAST_HTTP = "edgeCast.EDGE_CAST_HTTP";
    const EDGE_CAST_RTMP = "edgeCast.EDGE_CAST_RTMP";
    const KONTIKI_HTTP = "kontiki.KONTIKI_HTTP";
    const VELOCIX_HDS = "velocix.VELOCIX_HDS";
    const VELOCIX_HLS = "velocix.VELOCIX_HLS";
    const APPLE_HTTP = "1";
    const HDS = "3";
    const HTTP = "4";
    const RTMP = "5";
    const RTSP = "6";
    const SILVER_LIGHT = "7";
    const AKAMAI_HLS_DIRECT = "10";
    const AKAMAI_HLS_MANIFEST = "11";
    const AKAMAI_HD = "12";
    const AKAMAI_HDS = "13";
    const AKAMAI_HTTP = "14";
    const AKAMAI_RTMP = "15";
    const AKAMAI_RTSP = "16";
    const AKAMAI_SS = "17";
    const GENERIC_HLS = "21";
    const GENERIC_HDS = "23";
    const GENERIC_HTTP = "24";
    const GENERIC_HLS_MANIFEST = "25";
    const GENERIC_HDS_MANIFEST = "26";
    const GENERIC_SS = "27";
    const GENERIC_RTMP = "28";
    const LEVEL3_HLS = "31";
    const LEVEL3_HTTP = "34";
    const LEVEL3_RTMP = "35";
    const LIMELIGHT_HTTP = "44";
    const LIMELIGHT_RTMP = "45";
    const LOCAL_PATH_APPLE_HTTP = "51";
    const LOCAL_PATH_HDS = "53";
    const LOCAL_PATH_HTTP = "54";
    const LOCAL_PATH_RTMP = "55";
    const VOD_PACKAGER_HLS = "61";
    const VOD_PACKAGER_HDS = "63";
    const VOD_PACKAGER_MSS = "67";
    const VOD_PACKAGER_DASH = "68";
    const VOD_PACKAGER_HLS_MANIFEST = "69";
    const LIVE_HLS = "1001";
    const LIVE_HDS = "1002";
    const LIVE_DASH = "1003";
    const LIVE_RTMP = "1005";
    const LIVE_HLS_TO_MULTICAST = "1006";
    const LIVE_PACKAGER_HLS = "1007";
    const LIVE_PACKAGER_HDS = "1008";
    const LIVE_PACKAGER_DASH = "1009";
    const LIVE_PACKAGER_MSS = "1010";
    const LIVE_AKAMAI_HDS = "1013";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDeliveryServerNodeOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const HEARTBEAT_TIME_ASC = "+heartbeatTime";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const HEARTBEAT_TIME_DESC = "-heartbeatTime";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDrmSchemeName extends KalturaEnumBase {
    const PLAYREADY_CENC = "drm.PLAYREADY_CENC";
    const WIDEVINE_CENC = "drm.WIDEVINE_CENC";
    const FAIRPLAY = "fairplay.FAIRPLAY";
    const PLAYREADY = "playReady.PLAYREADY";
    const WIDEVINE = "widevine.WIDEVINE";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDurationType extends KalturaEnumBase {
    const LONG = "long";
    const MEDIUM = "medium";
    const NOT_AVAILABLE = "notavailable";
    const SHORT = "short";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaESearchLanguage extends KalturaEnumBase {
    const ARABIC = "Arabic";
    const BASQUE = "Basque";
    const BRAZILIAN = "Brazilian";
    const BULGARIAN = "Bulgarian";
    const CATALAN = "Catalan";
    const CHINESE = "Chinese";
    const CZECH = "Czech";
    const DANISH = "Danish";
    const DUTCH = "Dutch";
    const ENGLISH = "English";
    const FINNISH = "Finnish";
    const FRENCH = "French";
    const GALICIAN = "Galician";
    const GERMAN = "German";
    const GREEK = "Greek";
    const HINDI = "Hindi";
    const HUNGRIAN = "Hungarian";
    const INDONESIAN = "Indonesian";
    const ITALIAN = "Italian";
    const JAPANESE = "Japanese";
    const KOREAN = "Korean";
    const LATVIAN = "Latvian";
    const LITHUANIAN = "Lithuanian";
    const NORWEGIAN = "Norwegian";
    const PERSIAN = "Persian";
    const PORTUGUESE = "Prtuguese";
    const ROMANIAN = "Romanian";
    const RUSSIAN = "Russian";
    const SORANI = "Sorani";
    const SPANISH = "Spanish";
    const SWEDISH = "Swedish";
    const THAI = "Thai";
    const TURKISH = "Turkish";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEdgeServerNodeOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const HEARTBEAT_TIME_ASC = "+heartbeatTime";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const HEARTBEAT_TIME_DESC = "-heartbeatTime";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryIdentifierField extends KalturaEnumBase {
    const ID = "id";
    const REFERENCE_ID = "referenceId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryReplacementStatus extends KalturaEnumBase {
    const NONE = "0";
    const APPROVED_BUT_NOT_READY = "1";
    const READY_BUT_NOT_APPROVED = "2";
    const NOT_READY_AND_NOT_APPROVED = "3";
    const FAILED = "4";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryServerNodeOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryServerNodeType extends KalturaEnumBase {
    const LIVE_PRIMARY = "0";
    const LIVE_BACKUP = "1";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryStatus extends KalturaEnumBase {
    const ERROR_IMPORTING = "-2";
    const ERROR_CONVERTING = "-1";
    const SCAN_FAILURE = "virusScan.ScanFailure";
    const IMPORT = "0";
    const INFECTED = "virusScan.Infected";
    const PRECONVERT = "1";
    const READY = "2";
    const DELETED = "3";
    const PENDING = "4";
    const MODERATE = "5";
    const BLOCKED = "6";
    const NO_CONTENT = "7";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaEntryType extends KalturaEnumBase {
    const AUTOMATIC = "-1";
    const EXTERNAL_MEDIA = "externalMedia.externalMedia";
    const MEDIA_CLIP = "1";
    const MIX = "2";
    const PLAYLIST = "5";
    const DATA = "6";
    const LIVE_STREAM = "7";
    const LIVE_CHANNEL = "8";
    const DOCUMENT = "10";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaExternalMediaEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MEDIA_DATE = "mediaDate";
    const MEDIA_TYPE = "mediaType";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaExternalMediaEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const FLAVOR_PARAMS_IDS = "flavorParamsIds";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFileAssetObjectType extends KalturaEnumBase {
    const UI_CONF = "2";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFileAssetOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFileAssetStatus extends KalturaEnumBase {
    const PENDING = "0";
    const UPLOADING = "1";
    const READY = "2";
    const DELETED = "3";
    const ERROR = "4";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFileSyncObjectType extends KalturaEnumBase {
    const DISTRIBUTION_PROFILE = "contentDistribution.DistributionProfile";
    const ENTRY_DISTRIBUTION = "contentDistribution.EntryDistribution";
    const GENERIC_DISTRIBUTION_ACTION = "contentDistribution.GenericDistributionAction";
    const EMAIL_NOTIFICATION_TEMPLATE = "emailNotification.EmailNotificationTemplate";
    const HTTP_NOTIFICATION_TEMPLATE = "httpNotification.HttpNotificationTemplate";
    const ENTRY = "1";
    const UICONF = "2";
    const BATCHJOB = "3";
    const ASSET = "4";
    const FLAVOR_ASSET = "4";
    const METADATA = "5";
    const METADATA_PROFILE = "6";
    const SYNDICATION_FEED = "7";
    const CONVERSION_PROFILE = "8";
    const FILE_ASSET = "9";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFlavorAssetOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DELETED_AT_ASC = "+deletedAt";
    const SIZE_ASC = "+size";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const DELETED_AT_DESC = "-deletedAt";
    const SIZE_DESC = "-size";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFlavorParamsOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaFlavorParamsOutputOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGenericSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGenericXsltSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGeoCoderType extends KalturaEnumBase {
    const KALTURA = "1";
    const MAX_MIND = "2";
    const DIGITAL_ELEMENT = "3";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGoogleSyndicationFeedAdultValues extends KalturaEnumBase {
    const NO = "No";
    const YES = "Yes";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGoogleVideoSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaGroupUserOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaITunesSyndicationFeedAdultValues extends KalturaEnumBase {
    const CLEAN = "clean";
    const NO = "no";
    const YES = "yes";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaITunesSyndicationFeedCategories extends KalturaEnumBase {
    const ARTS = "Arts";
    const ARTS_DESIGN = "Arts/Design";
    const ARTS_FASHION_BEAUTY = "Arts/Fashion &amp; Beauty";
    const ARTS_FOOD = "Arts/Food";
    const ARTS_LITERATURE = "Arts/Literature";
    const ARTS_PERFORMING_ARTS = "Arts/Performing Arts";
    const ARTS_VISUAL_ARTS = "Arts/Visual Arts";
    const BUSINESS = "Business";
    const BUSINESS_BUSINESS_NEWS = "Business/Business News";
    const BUSINESS_CAREERS = "Business/Careers";
    const BUSINESS_INVESTING = "Business/Investing";
    const BUSINESS_MANAGEMENT_MARKETING = "Business/Management &amp; Marketing";
    const BUSINESS_SHOPPING = "Business/Shopping";
    const COMEDY = "Comedy";
    const EDUCATION = "Education";
    const EDUCATION_TECHNOLOGY = "Education/Education Technology";
    const EDUCATION_HIGHER_EDUCATION = "Education/Higher Education";
    const EDUCATION_K_12 = "Education/K-12";
    const EDUCATION_LANGUAGE_COURSES = "Education/Language Courses";
    const EDUCATION_TRAINING = "Education/Training";
    const GAMES_HOBBIES = "Games &amp; Hobbies";
    const GAMES_HOBBIES_AUTOMOTIVE = "Games &amp; Hobbies/Automotive";
    const GAMES_HOBBIES_AVIATION = "Games &amp; Hobbies/Aviation";
    const GAMES_HOBBIES_HOBBIES = "Games &amp; Hobbies/Hobbies";
    const GAMES_HOBBIES_OTHER_GAMES = "Games &amp; Hobbies/Other Games";
    const GAMES_HOBBIES_VIDEO_GAMES = "Games &amp; Hobbies/Video Games";
    const GOVERNMENT_ORGANIZATIONS = "Government &amp; Organizations";
    const GOVERNMENT_ORGANIZATIONS_LOCAL = "Government &amp; Organizations/Local";
    const GOVERNMENT_ORGANIZATIONS_NATIONAL = "Government &amp; Organizations/National";
    const GOVERNMENT_ORGANIZATIONS_NON_PROFIT = "Government &amp; Organizations/Non-Profit";
    const GOVERNMENT_ORGANIZATIONS_REGIONAL = "Government &amp; Organizations/Regional";
    const HEALTH = "Health";
    const HEALTH_ALTERNATIVE_HEALTH = "Health/Alternative Health";
    const HEALTH_FITNESS_NUTRITION = "Health/Fitness &amp; Nutrition";
    const HEALTH_SELF_HELP = "Health/Self-Help";
    const HEALTH_SEXUALITY = "Health/Sexuality";
    const KIDS_FAMILY = "Kids &amp; Family";
    const MUSIC = "Music";
    const NEWS_POLITICS = "News &amp; Politics";
    const RELIGION_SPIRITUALITY = "Religion &amp; Spirituality";
    const RELIGION_SPIRITUALITY_BUDDHISM = "Religion &amp; Spirituality/Buddhism";
    const RELIGION_SPIRITUALITY_CHRISTIANITY = "Religion &amp; Spirituality/Christianity";
    const RELIGION_SPIRITUALITY_HINDUISM = "Religion &amp; Spirituality/Hinduism";
    const RELIGION_SPIRITUALITY_ISLAM = "Religion &amp; Spirituality/Islam";
    const RELIGION_SPIRITUALITY_JUDAISM = "Religion &amp; Spirituality/Judaism";
    const RELIGION_SPIRITUALITY_OTHER = "Religion &amp; Spirituality/Other";
    const RELIGION_SPIRITUALITY_SPIRITUALITY = "Religion &amp; Spirituality/Spirituality";
    const SCIENCE_MEDICINE = "Science &amp; Medicine";
    const SCIENCE_MEDICINE_MEDICINE = "Science &amp; Medicine/Medicine";
    const SCIENCE_MEDICINE_NATURAL_SCIENCES = "Science &amp; Medicine/Natural Sciences";
    const SCIENCE_MEDICINE_SOCIAL_SCIENCES = "Science &amp; Medicine/Social Sciences";
    const SOCIETY_CULTURE = "Society &amp; Culture";
    const SOCIETY_CULTURE_HISTORY = "Society &amp; Culture/History";
    const SOCIETY_CULTURE_PERSONAL_JOURNALS = "Society &amp; Culture/Personal Journals";
    const SOCIETY_CULTURE_PHILOSOPHY = "Society &amp; Culture/Philosophy";
    const SOCIETY_CULTURE_PLACES_TRAVEL = "Society &amp; Culture/Places &amp; Travel";
    const SPORTS_RECREATION = "Sports &amp; Recreation";
    const SPORTS_RECREATION_AMATEUR = "Sports &amp; Recreation/Amateur";
    const SPORTS_RECREATION_COLLEGE_HIGH_SCHOOL = "Sports &amp; Recreation/College &amp; High School";
    const SPORTS_RECREATION_OUTDOOR = "Sports &amp; Recreation/Outdoor";
    const SPORTS_RECREATION_PROFESSIONAL = "Sports &amp; Recreation/Professional";
    const TV_FILM = "TV &amp; Film";
    const TECHNOLOGY = "Technology";
    const TECHNOLOGY_GADGETS = "Technology/Gadgets";
    const TECHNOLOGY_PODCASTING = "Technology/Podcasting";
    const TECHNOLOGY_SOFTWARE_HOW_TO = "Technology/Software How-To";
    const TECHNOLOGY_TECH_NEWS = "Technology/Tech News";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaITunesSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLanguage extends KalturaEnumBase {
    const ABQ = "Abaza";
    const AB = "Abkhazian";
    const ABE = "Abnaki Western";
    const ABU = "Abure";
    const ACN = "Achang";
    const ACE = "Achinese";
    const ACT = "Achterhooks";
    const ACV = "Achumawi";
    const ADJ = "Adioukrou";
    const ADY = "Adyghe; Adygei";
    const ADT = "Adynyamathanha";
    const AAL = "Afade";
    const AA = "Afar";
    const AF = "Afrikaans";
    const AGQ = "Aghem";
    const AGX = "Aghul";
    const AGU = "Aguacateco";
    const AGR = "Aguaruna";
    const AIN = "Ainu (Japan)";
    const AKK = "Akkadian";
    const AKL = "Aklanon";
    const AKU = "Akum";
    const AKZ = "Alabama";
    const SQ = "Albanian";
    const ALN = "Albanian (Gheg)";
    const ALS = "Albanian (Tosk)";
    const ALE = "Aleut";
    const ALQ = "Algonquin";
    const ALT = "Altai (Southern)";
    const AM = "Amharic";
    const RME = "Angloromani";
    const APJ = "Apache (Jicarilla)";
    const APW = "Apache (Western)";
    const AR = "Arabic";
    const ARB = "Arabic (standard)";
    const B_T = "Arabic Tunisian Spoken";
    const ARC = "Aramaic";
    const SAM = "Aramaic Samaritan";
    const ARP = "Arapaho";
    const ARN = "Araucanian";
    const ARI = "Arikara";
    const HY = "Armenian";
    const RUP = "Aromanian";
    const AS_ = "Assamese";
    const ASB = "Assiniboine";
    const AII = "Assyrian Neo-Aramaic";
    const AST = "Asturian";
    const ATJ = "Atikamekw";
    const AWA = "Awadhi";
    const AY = "Aymara";
    const AZ = "Azerbaijani";
    const BCR = "Babine";
    const BFQ = "Badaga";
    const BDJ = "Bai";
    const BAN = "Balinese";
    const BCC = "Balochi Southern";
    const BFT = "Balti";
    const BAL = "Baluchi";
    const BAS = "Basa (Cameroon)";
    const BA = "Bashkir";
    const EU = "Basque";
    const BAR = "Bavarian";
    const BEA = "Beaver";
    const BEJ = "Beja";
    const BEM = "Bemba (Zambia)";
    const BN = "Bengali (Bangla)";
    const BEW = "Betawi";
    const KAP = "Bezhta";
    const BHB = "Bhili";
    const BHO = "Bhojpuri";
    const DZ = "Bhutani";
    const BH = "Bihari";
    const BIK = "Bikol";
    const BIN = "Bini";
    const BPY = "Bishnupriya Manipuri";
    const BI = "Bislama";
    const BR = "Breton";
    const BUG = "Buginese";
    const BG = "Bulgarian";
    const BUA = "Buriat";
    const MY = "Burmese";
    const BE = "Byelorussian (Belarusian)";
    const CAD = "Caddo";
    const KM = "Cambodian";
    const YUE = "Cantonese";
    const CRX = "Carrier";
    const CAF = "Carrier Southern";
    const CA = "Catalan";
    const CHC = "Catawba";
    const CAY = "Cayuga";
    const CEB = "Cebuano";
    const CHG = "Chagatai";
    const CLD = "Chaldean Neo-Aramaic";
    const CHR = "Cherokee";
    const CHY = "Cheyenne";
    const CIC = "Chickasaw";
    const CLC = "Chilcotin";
    const ZH = "Chinese";
    const CHN = "Chinook jargon";
    const CHP = "Chipewyan";
    const CIW = "Chippewa";
    const CHO = "Choctaw";
    const CAA = "Chor";
    const CKT = "Chukot";
    const CIM = "Cimbrian";
    const CLM = "Clallam Klallam";
    const COJ = "Cochimi";
    const COC = "Cocopa";
    const KSH = "Colognian";
    const COM = "Comanche";
    const SWB = "Comorian";
    const COO = "Comox";
    const COP = "Coptic";
    const CO = "Corsican";
    const MUS = "Creek";
    const CRH = "Crimean Tatar";
    const HR = "Croatian";
    const CUP = "Cupeo";
    const CS = "Czech";
    const DAK = "Dakota";
    const DA = "Danish";
    const DAR = "Dargwa";
    const PRD = "Dari (Persian)";
    const GBZ = "Dari Zoroastrian";
    const DHV = "Dehu";
    const DEL = "Delaware";
    const DIN = "Dinka";
    const DOI = "Dogri (generic)";
    const DGR = "Dogrib";
    const DLG = "Dolgan";
    const DOH = "Dong";
    const DUA = "Duala";
    const DNG = "Dungan";
    const NL = "Dutch";
    const DYU = "Dyula";
    const EEE = "E";
    const EGL = "Emilian";
    const EN = "English";
    const EN_US = "English (American)";
    const EN_GB = "English (British)";
    const ENM = "English Middle (1100-1500)";
    const MYV = "Erzya";
    const EO = "Esperanto";
    const ET = "Estonian";
    const EVE = "Even";
    const EVN = "Evenki";
    const FO = "Faeroese";
    const FAX = "Fala";
    const FAN = "Fang (Equatorial Guinea)";
    const FA = "Farsi";
    const FJ = "Fiji";
    const FIL = "Filipino";
    const FI = "Finnish";
    const FIT = "Finnish (Tornedalen)";
    const FON = "Fon";
    const FRP = "Franco-Prove";
    const FRK = "Frankish";
    const FR = "French";
    const FY = "Frisian";
    const FRR = "Frisian Northern";
    const FUR = "Friulian";
    const FVR = "Fur";
    const GAA = "Ga";
    const GV = "Gaelic (Manx)";
    const GD = "Gaelic (Scottish)";
    const GAG = "Gagauz";
    const GL = "Galician";
    const GAN = "Gan";
    const GEZ = "Geez";
    const KA = "Georgian";
    const DE = "German";
    const GEH = "German Hutterite";
    const PDC = "German Pennsylvania";
    const GIL = "Gilbertese";
    const NIV = "Gilyak Nivkh";
    const GIT = "Gitxsan";
    const EL = "Greek";
    const GRC = "Greek Ancient (to 1453)";
    const KL = "Greenlandic";
    const GN = "Guarani";
    const GU = "Gujarati";
    const GWI = "Gwichin";
    const HAI = "Haida";
    const HNN = "Hainanese";
    const HAS = "Haisla";
    const HAK = "Hakka";
    const HUR = "Halkomelem";
    const HAA = "Han";
    const HNI = "Hani";
    const HA = "Hausa";
    const HAW = "Hawaiian";
    const HE = "Hebrew";
    const IW = "Hebrew";
    const HEI = "Heiltsuk";
    const HID = "Hidatsa";
    const HIL = "Hiligaynon";
    const HI = "Hindi";
    const HMN = "Hmong";
    const HKK = "Hokkien";
    const HOP = "Hopi";
    const CZH = "Huizhou Chinese";
    const HU = "Hungarian";
    const IS = "Icelandic";
    const KPO = "Ikposo";
    const ILO = "Iloko";
    const SMN = "Inari Sami";
    const IN = "Indonesian";
    const ID = "Indonesian";
    const IZH = "Ingrian";
    const INH = "Ingush";
    const IA = "Interlingua";
    const IE = "Interlingue";
    const IU = "Inuktitut";
    const IK = "Inupiak";
    const GA = "Irish";
    const IT = "Italian";
    const ITL = "Itelmen";
    const JA = "Japanese";
    const JV = "Javanese";
    const CJY = "Jinyu Chinese";
    const KAJ = "Jju";
    const JCT = "Judeo-Crimean Tatar";
    const JGE = "Judeo-Georgian";
    const JUT = "Jutish";
    const KBD = "Kabardian";
    const KEA = "Kabuverdianu";
    const KAB = "Kabyle";
    const KFR = "Kachchi";
    const KJV = "Kaikavian literary language (Kajkavian)";
    const XAL = "Kalmyk Oirat";
    const KN = "Kannada";
    const KSK = "Kansa";
    const KRC = "Karachay-Balkar";
    const KIM = "Karagas";
    const KDR = "Karaim";
    const KAA = "Karakalpak";
    const KRL = "Karelian";
    const KS = "Kashmiri";
    const CSB = "Kashubian";
    const KKZ = "Kaska";
    const KAW = "Kawi";
    const KK = "Kazakh";
    const KJH = "Khakas";
    const KLJ = "Khalaj Turkic";
    const KCA = "Khanty";
    const KHA = "Khasi";
    const KXM = "Khmer Northern";
    const KIC = "Kickapoo";
    const RW = "Kinyarwanda (Ruanda)";
    const KIO = "Kiowa";
    const KY = "Kirghiz";
    const RN = "Kirundi (Rundi)";
    const TLH = "Klingon tlhIngan-Hol";
    const KFA = "Kodava";
    const KOI = "Komi-Permyak";
    const KOK = "Konkani (generic)";
    const KNN = "Konkani (specific)";
    const GOM = "Konkani Goan";
    const KO = "Korean";
    const KPY = "Koryak";
    const KOS = "Kosraean";
    const AVK = "Kotava";
    const KPE = "Kpelle";
    const DIH = "Kumiai";
    const KUM = "Kumyk";
    const KU = "Kurdish";
    const KUT = "Kutenai";
    const KWK = "Kwakiutl";
    const GDM = "Laal";
    const LLD = "Ladin";
    const LAD = "Ladino";
    const LAH = "Lahnda";
    const LHU = "Lahu";
    const LBE = "Lak";
    const LKI = "Laki";
    const LKT = "Lakota";
    const LO = "Laothian";
    const LA = "Latin";
    const LV = "Latvian (Lettish)";
    const LZZ = "Laz";
    const LEZ = "Lezghian";
    const LIJ = "Ligurian";
    const LIL = "Lillooet";
    const LIF = "Limbu";
    const LI = "Limburgish ( Limburger)";
    const LN = "Lingala";
    const LT = "Lithuanian";
    const JBO = "Lojban";
    const LOM = "Loma (Liberia)";
    const LMO = "Lombard";
    const NDS = "Low German Low Saxon";
    const LOZ = "Lozi";
    const LUA = "Luba-Lulua";
    const LUQ = "Lucumi";
    const LUD = "Ludian";
    const SMJ = "Lule Sami";
    const LUN = "Lunda";
    const LUO = "Luo (Kenya and Tanzania)";
    const LUT = "Lushootseed";
    const MK = "Macedonian";
    const MAD = "Madurese";
    const MAG = "Magahi";
    const MAI = "Maithili";
    const MG = "Malagasy";
    const MS = "Malay";
    const ML = "Malayalam";
    const PQM = "Malecite-Passamaquoddy";
    const MT = "Maltese";
    const MNC = "Manchu";
    const MID = "Mandaic";
    const MHQ = "Mandan";
    const CMN = "Mandarin Chinese";
    const MNS = "Mansi";
    const MI = "Maori";
    const MRW = "Maranao";
    const MR = "Marathi";
    const CHM = "Mari (Russia)";
    const MWR = "Marwari";
    const MAS = "Masai";
    const MFY = "Mayo";
    const MNI = "Meitei";
    const MEN = "Mende (Sierra Leone)";
    const MEZ = "Menominee";
    const MIC = "Micmac";
    const MNP = "Min Bei Chinese";
    const CDO = "Min Dong Chinese";
    const MIN = "Minangkabau";
    const XMF = "Mingrelian";
    const MWL = "Mirandese";
    const MOH = "Mohawk";
    const MDF = "Moksha";
    const MO = "Moldavian";
    const MNW = "Mon";
    const MN = "Mongolian";
    const MFE = "Morisyen";
    const MOS = "Mossi";
    const MXI = "Mozarabic";
    const MU = "Multilingual";
    const MTQ = "Muong";
    const NAQ = "Nama (Namibia)";
    const GLD = "Nanai";
    const NSK = "Naskapi";
    const NA = "Nauru";
    const NAP = "Neapolitan";
    const NE = "Nepali";
    const NEW_ = "Newari Nepal Bhasa";
    const NIO = "Nganasan";
    const NCG = "Nisgaa";
    const NIU = "Niuean";
    const NOG = "Nogai";
    const NON = "Norse Old";
    const NSO = "Northern Sotho Pedi Sepedi";
    const NO = "Norwegian";
    const NOV = "Novial";
    const NYM = "Nyamwezi";
    const NYO = "Nyoro";
    const NYS = "Nyungah";
    const OC = "Occitan";
    const OJC = "Ojibwa Central";
    const OJG = "Ojibwa Eastern";
    const OJB = "Ojibwa Northwestern";
    const OJS = "Ojibwa Severn";
    const OJW = "Ojibwa Western";
    const RYU = "Okinawan Central";
    const ANG = "Old English";
    const ONE = "Oneida";
    const ONO = "Onondaga";
    const OR_ = "Oriya";
    const OM = "Oromo (Afan, Galla)";
    const OTW = "Ottawa";
    const PPI = "Paipai";
    const PAU = "Palauan";
    const PAM = "Pampanga";
    const PAG = "Pangasinan";
    const PAP = "Papiamento";
    const PS = "Pashto (Pushto)";
    const PRP = "Persian";
    const PRS = "Persian (Dari)";
    const PFL = "Pfaelzisch";
    const PCD = "Picard";
    const PMS = "Piedmontese";
    const MYP = "Pirah";
    const PIH = "Pitcairn-Norfolk";
    const PDT = "Plautdietsch";
    const PL = "Polish";
    const PNT = "Pontic";
    const PT = "Portuguese";
    const POT = "Potawatomi";
    const PRG = "Prussian";
    const FUC = "Pulaar";
    const PA = "Punjabi";
    const QXQ = "Qashqai";
    const ALC = "Qawasqar";
    const QU = "Quechua";
    const QUC = "Quich Central";
    const RAP = "Rapanui";
    const RAR = "Rarotongan";
    const QTZ = "Reserved for local use.";
    const RM = "Rhaeto-Romance";
    const RGN = "Romagnol";
    const RMF = "Romani Kalo Finnish";
    const RMO = "Romani Sinte";
    const RO = "Romanian";
    const RUO = "Romanian Istro";
    const RUQ = "Romanian Megleno";
    const ROM = "Romany";
    const RCF = "Runion Creole French";
    const RU = "Russian";
    const RUE = "Rusyn";
    const ACF = "Saint Lucian Creole French";
    const SAH = "Sakha";
    const SLR = "Salar";
    const STR = "Salish Straits";
    const SJD = "Sami Kildin";
    const SM = "Samoan";
    const SG = "Sangro";
    const SA = "Sanskrit";
    const SAT = "Santali";
    const SRM = "Saramaccan";
    const SDC = "Sardinian Sassarese";
    const STQ = "Saterland Frisian";
    const SXU = "Saxon Upper";
    const SCO = "Scots";
    const SEC = "Sechelt";
    const TRV = "Seediq";
    const SEK = "Sekani";
    const SEL = "Selkup";
    const SEE = "Seneca";
    const SR = "Serbian";
    const SH = "Serbo-Croatian";
    const SEI = "Seri";
    const ST = "Sesotho";
    const TN = "Setswana";
    const SJW = "Shawnee";
    const SN = "Shona";
    const CJS = "Shor";
    const SHH = "Shoshoni";
    const SHS = "Shuswap";
    const SCN = "Sicilian";
    const SID = "Sidamo";
    const SZL = "Silesian";
    const SD = "Sindhi";
    const SI = "Sinhalese";
    const SS = "Siswati";
    const SMS = "Skolt Sami";
    const SCS = "Slavey North";
    const XSL = "Slavey South";
    const SK = "Slovak";
    const SL = "Slovenian";
    const SO = "Somali";
    const SNK = "Soninke";
    const DSB = "Sorbian Lower";
    const HSB = "Sorbian Upper";
    const SMA = "Southern Sami";
    const ES = "Spanish";
    const SRN = "Sranan";
    const STO = "Stoney";
    const XSV = "Sudovian";
    const SUX = "Sumerian";
    const SU = "Sundanese";
    const SVA = "Svan";
    const SWG = "Swabian";
    const SW = "Swahili (Kiswahili)";
    const SV = "Swedish";
    const SWL = "Swedish Sign Language";
    const GSW = "Swiss German Alemannic Alsatian";
    const SYR = "Syriac";
    const TAB = "Tabassaran";
    const SHY = "Tachawit";
    const SHI = "Tachelhit";
    const TL = "Tagalog";
    const TBW = "Tagbanwa";
    const TGX = "Tagish";
    const THT = "Tahltan";
    const TDD = "Tai Na";
    const TG = "Tajik";
    const TLY = "Talysh";
    const TTQ = "Tamajaq Tawallammat";
    const TAQ = "Tamasheq";
    const TZM = "Tamazight Central Atlas";
    const TA = "Tamil";
    const TAR = "Tarahumara Central";
    const TTT = "Tat Muslim";
    const TT = "Tatar";
    const TE = "Telugu";
    const TEO = "Teo Chew";
    const TET = "Tetum";
    const TH = "Thai";
    const NOD = "Thai (Northern)";
    const TTS = "Thai Northeastern";
    const THP = "Thompson";
    const BO = "Tibetan";
    const TIG = "Tigre";
    const TI = "Tigrinya";
    const TLI = "Tlingit";
    const TCX = "Toda";
    const OOD = "Tohono Oodham";
    const TPI = "Tok Pisin";
    const TO = "Tonga";
    const TOG = "Tonga (Nyasa)";
    const DDO = "Tsez";
    const TSI = "Tsimshian";
    const TS = "Tsonga";
    const TCY = "Tulu";
    const TUM = "Tumbuka";
    const MZB = "Tumzabt";
    const TPN = "Tupinamb";
    const TUV = "Turkana";
    const TR = "Turkish";
    const OTA = "Turkish Ottoman";
    const TK = "Turkmen";
    const TUS = "Tuscarora";
    const TVL = "Tuvalu";
    const TYV = "Tuvinian";
    const TW = "Twi";
    const UBY = "Ubykh";
    const UDI = "Udi";
    const UDM = "Udmurt";
    const UG = "Uighur";
    const UK = "Ukrainian";
    const UN = "Undefined";
    const UR = "Urdu";
    const UUM = "Urum";
    const UZ = "Uzbek";
    const VEC = "Venetian";
    const VEP = "Veps";
    const VI = "Vietnamese";
    const VO = "Volapuk";
    const VOR = "Voro";
    const VOT = "Votic";
    const VRO = "Vro";
    const AUC = "Waorani";
    const WAR = "Waray (Philippines)";
    const CY = "Welsh";
    const PES = "Western Farsi";
    const AMW = "Western Neo-Aramaic";
    const WIY = "Wiyot";
    const WO = "Wolof";
    const WUU = "Wu Chinese";
    const WYM = "Wymysorys";
    const XH = "Xhosa";
    const AME = "Yanesha";
    const YI = "Yiddish";
    const JI = "Yiddish";
    const YO = "Yoruba";
    const ZAI = "Zapotec Isthmus";
    const DJE = "Zarma";
    const ZU = "Zulu";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLanguageCode extends KalturaEnumBase {
    const AA = "aa";
    const AB = "ab";
    const AF = "af";
    const AM = "am";
    const AR = "ar";
    const AS_ = "as";
    const AY = "ay";
    const AZ = "az";
    const BA = "ba";
    const BE = "be";
    const BG = "bg";
    const BH = "bh";
    const BI = "bi";
    const BN = "bn";
    const BO = "bo";
    const BR = "br";
    const CA = "ca";
    const CO = "co";
    const CS = "cs";
    const CY = "cy";
    const DA = "da";
    const DE = "de";
    const DZ = "dz";
    const EL = "el";
    const EN = "en";
    const EN_GB = "en_gb";
    const EN_US = "en_us";
    const EO = "eo";
    const ES = "es";
    const ET = "et";
    const EU = "eu";
    const FA = "fa";
    const FI = "fi";
    const FJ = "fj";
    const FO = "fo";
    const FR = "fr";
    const FY = "fy";
    const GA = "ga";
    const GD = "gd";
    const GL = "gl";
    const GN = "gn";
    const GU = "gu";
    const GV = "gv";
    const HA = "ha";
    const HE = "he";
    const HI = "hi";
    const HR = "hr";
    const HU = "hu";
    const HY = "hy";
    const IA = "ia";
    const ID = "id";
    const IE = "ie";
    const IK = "ik";
    const IN = "in";
    const IS = "is";
    const IT = "it";
    const IU = "iu";
    const IW = "iw";
    const JA = "ja";
    const JI = "ji";
    const JV = "jv";
    const KA = "ka";
    const KK = "kk";
    const KL = "kl";
    const KM = "km";
    const KN = "kn";
    const KO = "ko";
    const KS = "ks";
    const KU = "ku";
    const KY = "ky";
    const LA = "la";
    const LI = "li";
    const LN = "ln";
    const LO = "lo";
    const LT = "lt";
    const LV = "lv";
    const MG = "mg";
    const MI = "mi";
    const MK = "mk";
    const ML = "ml";
    const MN = "mn";
    const MO = "mo";
    const MR = "mr";
    const MS = "ms";
    const MT = "mt";
    const MU = "multilingual";
    const MY = "my";
    const NA = "na";
    const NE = "ne";
    const NL = "nl";
    const NO = "no";
    const OC = "oc";
    const OM = "om";
    const OR_ = "or";
    const PA = "pa";
    const PL = "pl";
    const PS = "ps";
    const PT = "pt";
    const QU = "qu";
    const RM = "rm";
    const RN = "rn";
    const RO = "ro";
    const RU = "ru";
    const RW = "rw";
    const SA = "sa";
    const SD = "sd";
    const SG = "sg";
    const SH = "sh";
    const SI = "si";
    const SK = "sk";
    const SL = "sl";
    const SM = "sm";
    const SN = "sn";
    const SO = "so";
    const SQ = "sq";
    const SR = "sr";
    const SS = "ss";
    const ST = "st";
    const SU = "su";
    const SV = "sv";
    const SW = "sw";
    const TA = "ta";
    const TE = "te";
    const TG = "tg";
    const TH = "th";
    const TI = "ti";
    const TK = "tk";
    const TL = "tl";
    const TN = "tn";
    const TO = "to";
    const TR = "tr";
    const TS = "ts";
    const TT = "tt";
    const TW = "tw";
    const UG = "ug";
    const UK = "uk";
    const UR = "ur";
    const UZ = "uz";
    const VI = "vi";
    const VO = "vo";
    const WO = "wo";
    const XH = "xh";
    const YI = "yi";
    const YO = "yo";
    const ZH = "zh";
    const ZU = "zu";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveAssetOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DELETED_AT_ASC = "+deletedAt";
    const SIZE_ASC = "+size";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const DELETED_AT_DESC = "-deletedAt";
    const SIZE_DESC = "-size";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MEDIA_DATE = "mediaDate";
    const MEDIA_TYPE = "mediaType";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const FLAVOR_PARAMS_IDS = "flavorParamsIds";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const FIRST_BROADCAST_ASC = "+firstBroadcast";
    const LAST_BROADCAST_ASC = "+lastBroadcast";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MEDIA_TYPE_ASC = "+mediaType";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const FIRST_BROADCAST_DESC = "-firstBroadcast";
    const LAST_BROADCAST_DESC = "-lastBroadcast";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MEDIA_TYPE_DESC = "-mediaType";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelSegmentOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const START_TIME_ASC = "+startTime";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const START_TIME_DESC = "-startTime";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelSegmentStatus extends KalturaEnumBase {
    const ACTIVE = "2";
    const DELETED = "3";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelSegmentTriggerType extends KalturaEnumBase {
    const CHANNEL_RELATIVE = "1";
    const ABSOLUTE_TIME = "2";
    const SEGMENT_START_RELATIVE = "3";
    const SEGMENT_END_RELATIVE = "4";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveChannelSegmentType extends KalturaEnumBase {
    const VIDEO_AND_AUDIO = "1";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MEDIA_DATE = "mediaDate";
    const MEDIA_TYPE = "mediaType";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const FLAVOR_PARAMS_IDS = "flavorParamsIds";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const FIRST_BROADCAST_ASC = "+firstBroadcast";
    const LAST_BROADCAST_ASC = "+lastBroadcast";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MEDIA_TYPE_ASC = "+mediaType";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const FIRST_BROADCAST_DESC = "-firstBroadcast";
    const LAST_BROADCAST_DESC = "-lastBroadcast";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MEDIA_TYPE_DESC = "-mediaType";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveParamsOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveReportOrderBy extends KalturaEnumBase {
    const NAME_ASC = "+name";
    const AUDIENCE_DESC = "-audience";
    const EVENT_TIME_DESC = "-eventTime";
    const PLAYS_DESC = "-plays";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveReportType extends KalturaEnumBase {
    const ENTRY_GEO_TIME_LINE = "ENTRY_GEO_TIME_LINE";
    const ENTRY_SYNDICATION_TOTAL = "ENTRY_SYNDICATION_TOTAL";
    const ENTRY_TIME_LINE = "ENTRY_TIME_LINE";
    const ENTRY_TOTAL = "ENTRY_TOTAL";
    const PARTNER_TOTAL = "PARTNER_TOTAL";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStreamAdminEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MEDIA_DATE = "mediaDate";
    const MEDIA_TYPE = "mediaType";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStreamAdminEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const FLAVOR_PARAMS_IDS = "flavorParamsIds";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStreamAdminEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const FIRST_BROADCAST_ASC = "+firstBroadcast";
    const LAST_BROADCAST_ASC = "+lastBroadcast";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MEDIA_TYPE_ASC = "+mediaType";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const FIRST_BROADCAST_DESC = "-firstBroadcast";
    const LAST_BROADCAST_DESC = "-lastBroadcast";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MEDIA_TYPE_DESC = "-mediaType";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStreamEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MEDIA_DATE = "mediaDate";
    const MEDIA_TYPE = "mediaType";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStreamEntryMatchAttribute extends KalturaEnumBase
{
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const FLAVOR_PARAMS_IDS = "flavorParamsIds";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaLiveStreamEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const FIRST_BROADCAST_ASC = "+firstBroadcast";
    const LAST_BROADCAST_ASC = "+lastBroadcast";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MEDIA_TYPE_ASC = "+mediaType";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const FIRST_BROADCAST_DESC = "-firstBroadcast";
    const LAST_BROADCAST_DESC = "-lastBroadcast";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MEDIA_TYPE_DESC = "-mediaType";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMailType extends KalturaEnumBase {
    const MAIL_TYPE_KALTURA_NEWSLETTER = "10";
    const MAIL_TYPE_ADDED_TO_FAVORITES = "11";
    const MAIL_TYPE_ADDED_TO_CLIP_FAVORITES = "12";
    const MAIL_TYPE_NEW_COMMENT_IN_PROFILE = "13";
    const MAIL_TYPE_CLIP_ADDED_YOUR_KALTURA = "20";
    const MAIL_TYPE_VIDEO_ADDED = "21";
    const MAIL_TYPE_ROUGHCUT_CREATED = "22";
    const MAIL_TYPE_ADDED_KALTURA_TO_YOUR_FAVORITES = "23";
    const MAIL_TYPE_NEW_COMMENT_IN_KALTURA = "24";
    const MAIL_TYPE_CLIP_ADDED = "30";
    const MAIL_TYPE_VIDEO_CREATED = "31";
    const MAIL_TYPE_ADDED_KALTURA_TO_HIS_FAVORITES = "32";
    const MAIL_TYPE_NEW_COMMENT_IN_KALTURA_YOU_CONTRIBUTED = "33";
    const MAIL_TYPE_CLIP_CONTRIBUTED = "40";
    const MAIL_TYPE_ROUGHCUT_CREATED_SUBSCRIBED = "41";
    const MAIL_TYPE_ADDED_KALTURA_TO_HIS_FAVORITES_SUBSCRIBED = "42";
    const MAIL_TYPE_NEW_COMMENT_IN_KALTURA_YOU_SUBSCRIBED = "43";
    const MAIL_TYPE_REGISTER_CONFIRM = "50";
    const MAIL_TYPE_PASSWORD_RESET = "51";
    const MAIL_TYPE_LOGIN_MAIL_RESET = "52";
    const MAIL_TYPE_REGISTER_CONFIRM_VIDEO_SERVICE = "54";
    const MAIL_TYPE_VIDEO_READY = "60";
    const MAIL_TYPE_VIDEO_IS_READY = "62";
    const MAIL_TYPE_BULK_DOWNLOAD_READY = "63";
    const MAIL_TYPE_BULKUPLOAD_FINISHED = "64";
    const MAIL_TYPE_BULKUPLOAD_FAILED = "65";
    const MAIL_TYPE_BULKUPLOAD_ABORTED = "66";
    const MAIL_TYPE_NOTIFY_ERR = "70";
    const MAIL_TYPE_ACCOUNT_UPGRADE_CONFIRM = "80";
    const MAIL_TYPE_VIDEO_SERVICE_NOTICE = "81";
    const MAIL_TYPE_VIDEO_SERVICE_NOTICE_LIMIT_REACHED = "82";
    const MAIL_TYPE_VIDEO_SERVICE_NOTICE_ACCOUNT_LOCKED = "83";
    const MAIL_TYPE_VIDEO_SERVICE_NOTICE_ACCOUNT_DELETED = "84";
    const MAIL_TYPE_VIDEO_SERVICE_NOTICE_UPGRADE_OFFER = "85";
    const MAIL_TYPE_ACCOUNT_REACTIVE_CONFIRM = "86";
    const MAIL_TYPE_SYSTEM_USER_RESET_PASSWORD = "110";
    const MAIL_TYPE_SYSTEM_USER_RESET_PASSWORD_SUCCESS = "111";
    const MAIL_TYPE_SYSTEM_USER_NEW_PASSWORD = "112";
    const MAIL_TYPE_SYSTEM_USER_CREDENTIALS_SAVED = "113";
    const MAIL_TYPE_LIVE_REPORT_EXPORT_SUCCESS = "130";
    const MAIL_TYPE_LIVE_REPORT_EXPORT_FAILURE = "131";
    const MAIL_TYPE_LIVE_REPORT_EXPORT_ABORT = "132";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMatchConditionType extends KalturaEnumBase {
    const MATCH_ANY = "1";
    const MATCH_ALL = "2";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MEDIA_DATE = "mediaDate";
    const MEDIA_TYPE = "mediaType";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const FLAVOR_PARAMS_IDS = "flavorParamsIds";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MEDIA_TYPE_ASC = "+mediaType";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MEDIA_TYPE_DESC = "-mediaType";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaFlavorParamsOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaFlavorParamsOutputOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaInfoOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaParserType extends KalturaEnumBase {
    const MEDIAINFO = "0";
    const FFMPEG = "1";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMediaServerNodeOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const HEARTBEAT_TIME_ASC = "+heartbeatTime";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const HEARTBEAT_TIME_DESC = "-heartbeatTime";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMixEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMixEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaMixEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaModerationFlagStatus extends KalturaEnumBase {
    const PENDING = "1";
    const MODERATED = "2";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaModerationObjectType extends KalturaEnumBase {
    const ENTRY = "2";
    const USER = "3";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPartnerOrderBy extends KalturaEnumBase {
    const ADMIN_EMAIL_ASC = "+adminEmail";
    const ADMIN_NAME_ASC = "+adminName";
    const CREATED_AT_ASC = "+createdAt";
    const ID_ASC = "+id";
    const NAME_ASC = "+name";
    const STATUS_ASC = "+status";
    const WEBSITE_ASC = "+website";
    const ADMIN_EMAIL_DESC = "-adminEmail";
    const ADMIN_NAME_DESC = "-adminName";
    const CREATED_AT_DESC = "-createdAt";
    const ID_DESC = "-id";
    const NAME_DESC = "-name";
    const STATUS_DESC = "-status";
    const WEBSITE_DESC = "-website";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPermissionItemOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const ID_ASC = "+id";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const ID_DESC = "-id";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPermissionItemType extends KalturaEnumBase {
    const API_ACTION_ITEM = "kApiActionPermissionItem";
    const API_PARAMETER_ITEM = "kApiParameterPermissionItem";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPermissionOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const ID_ASC = "+id";
    const NAME_ASC = "+name";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const ID_DESC = "-id";
    const NAME_DESC = "-name";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlayableEntryCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const LAST_PLAYED_AT = "lastPlayedAt";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const MS_DURATION = "msDuration";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const PLAYS = "plays";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
    const VIEWS = "views";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlayableEntryMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const DURATION_TYPE = "durationType";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlayableEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DURATION_ASC = "+duration";
    const END_DATE_ASC = "+endDate";
    const LAST_PLAYED_AT_ASC = "+lastPlayedAt";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PLAYS_ASC = "+plays";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const VIEWS_ASC = "+views";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const DURATION_DESC = "-duration";
    const END_DATE_DESC = "-endDate";
    const LAST_PLAYED_AT_DESC = "-lastPlayedAt";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const PLAYS_DESC = "-plays";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const VIEWS_DESC = "-views";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlaybackProtocol extends KalturaEnumBase {
    const APPLE_HTTP = "applehttp";
    const APPLE_HTTP_TO_MC = "applehttp_to_mc";
    const AUTO = "auto";
    const AKAMAI_HD = "hdnetwork";
    const AKAMAI_HDS = "hdnetworkmanifest";
    const HDS = "hds";
    const HLS = "hls";
    const HTTP = "http";
    const MPEG_DASH = "mpegdash";
    const MULTICAST_SL = "multicast_silverlight";
    const RTMP = "rtmp";
    const RTSP = "rtsp";
    const SILVER_LIGHT = "sl";
    const URL = "url";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlaylistCompareAttribute extends KalturaEnumBase {
    const ACCESS_CONTROL_ID = "accessControlId";
    const CREATED_AT = "createdAt";
    const END_DATE = "endDate";
    const MODERATION_COUNT = "moderationCount";
    const MODERATION_STATUS = "moderationStatus";
    const PARTNER_ID = "partnerId";
    const PARTNER_SORT_VALUE = "partnerSortValue";
    const RANK = "rank";
    const REPLACEMENT_STATUS = "replacementStatus";
    const START_DATE = "startDate";
    const STATUS = "status";
    const TOTAL_RANK = "totalRank";
    const TYPE = "type";
    const UPDATED_AT = "updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlaylistMatchAttribute extends KalturaEnumBase {
    const ADMIN_TAGS = "adminTags";
    const CATEGORIES_IDS = "categoriesIds";
    const CREATOR_ID = "creatorId";
    const DESCRIPTION = "description";
    const GROUP_ID = "groupId";
    const ID = "id";
    const NAME = "name";
    const REFERENCE_ID = "referenceId";
    const REPLACED_ENTRY_ID = "replacedEntryId";
    const REPLACING_ENTRY_ID = "replacingEntryId";
    const SEARCH_TEXT = "searchText";
    const TAGS = "tags";
    const USER_ID = "userId";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPlaylistOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const END_DATE_ASC = "+endDate";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const NAME_ASC = "+name";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const RANK_ASC = "+rank";
    const RECENT_ASC = "+recent";
    const START_DATE_ASC = "+startDate";
    const TOTAL_RANK_ASC = "+totalRank";
    const UPDATED_AT_ASC = "+updatedAt";
    const WEIGHT_ASC = "+weight";
    const CREATED_AT_DESC = "-createdAt";
    const END_DATE_DESC = "-endDate";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const NAME_DESC = "-name";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
    const RANK_DESC = "-rank";
    const RECENT_DESC = "-recent";
    const START_DATE_DESC = "-startDate";
    const TOTAL_RANK_DESC = "-totalRank";
    const UPDATED_AT_DESC = "-updatedAt";
    const WEIGHT_DESC = "-weight";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaQuizUserEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaReportInterval extends KalturaEnumBase
{
    const DAYS = "days";
    const MONTHS = "months";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaReportOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaReportType extends KalturaEnumBase {
    const QUIZ = "quiz.QUIZ";
    const QUIZ_AGGREGATE_BY_QUESTION = "quiz.QUIZ_AGGREGATE_BY_QUESTION";
    const QUIZ_USER_AGGREGATE_BY_QUESTION = "quiz.QUIZ_USER_AGGREGATE_BY_QUESTION";
    const QUIZ_USER_PERCENTAGE = "quiz.QUIZ_USER_PERCENTAGE";
    const TOP_CONTENT = "1";
    const CONTENT_DROPOFF = "2";
    const CONTENT_INTERACTIONS = "3";
    const MAP_OVERLAY = "4";
    const TOP_CONTRIBUTORS = "5";
    const TOP_SYNDICATION = "6";
    const CONTENT_CONTRIBUTIONS = "7";
    const USER_ENGAGEMENT = "11";
    const SPECIFIC_USER_ENGAGEMENT = "12";
    const USER_TOP_CONTENT = "13";
    const USER_CONTENT_DROPOFF = "14";
    const USER_CONTENT_INTERACTIONS = "15";
    const APPLICATIONS = "16";
    const USER_USAGE = "17";
    const SPECIFIC_USER_USAGE = "18";
    const VAR_USAGE = "19";
    const TOP_CREATORS = "20";
    const PLATFORMS = "21";
    const OPERATING_SYSTEM = "22";
    const BROWSERS = "23";
    const LIVE = "24";
    const TOP_PLAYBACK_CONTEXT = "25";
    const VPAAS_USAGE = "26";
    const PARTNER_USAGE = "201";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaResponseProfileOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaRuleActionType extends KalturaEnumBase {
    const DRM_POLICY = "drm.DRM_POLICY";
    const BLOCK = "1";
    const PREVIEW = "2";
    const LIMIT_FLAVORS = "3";
    const ADD_TO_STORAGE = "4";
    const LIMIT_DELIVERY_PROFILES = "5";
    const SERVE_FROM_REMOTE_SERVER = "6";
    const REQUEST_HOST_REGEX = "7";
    const LIMIT_THUMBNAIL_CAPTURE = "8";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSchemaType extends KalturaEnumBase {
    const BULK_UPLOAD_RESULT_XML = "bulkUploadXml.bulkUploadResultXML";
    const BULK_UPLOAD_XML = "bulkUploadXml.bulkUploadXML";
    const INGEST_API = "cuePoint.ingestAPI";
    const SERVE_API = "cuePoint.serveAPI";
    const DROP_FOLDER_XML = "dropFolderXmlBulkUpload.dropFolderXml";
    const SYNDICATION = "syndication";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSearchConditionComparison extends KalturaEnumBase {
    const EQUAL = "1";
    const GREATER_THAN = "2";
    const GREATER_THAN_OR_EQUAL = "3";
    const LESS_THAN = "4";
    const LESS_THAN_OR_EQUAL = "5";
    const NOT_EQUAL = "6";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaServerNodeOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const HEARTBEAT_TIME_ASC = "+heartbeatTime";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const HEARTBEAT_TIME_DESC = "-heartbeatTime";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaServerNodeType extends KalturaEnumBase {
    const WOWZA_MEDIA_SERVER = "wowza.WOWZA_MEDIA_SERVER";
    const EDGE = "1";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSourceType extends KalturaEnumBase {
    const LIMELIGHT_LIVE = "limeLight.LIVE_STREAM";
    const VELOCIX_LIVE = "velocix.VELOCIX_LIVE";
    const FILE = "1";
    const WEBCAM = "2";
    const URL = "5";
    const SEARCH_PROVIDER = "6";
    const AKAMAI_LIVE = "29";
    const MANUAL_LIVE_STREAM = "30";
    const AKAMAI_UNIVERSAL_LIVE = "31";
    const LIVE_STREAM = "32";
    const LIVE_CHANNEL = "33";
    const RECORDED_LIVE = "34";
    const CLIP = "35";
    const KALTURA_RECORDED_LIVE = "36";
    const LECTURE_CAPTURE = "37";
    const LIVE_STREAM_ONTEXTDATA_CAPTIONS = "42";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStorageProfileOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaStorageProfileProtocol extends KalturaEnumBase {
    const KONTIKI = "kontiki.KONTIKI";
    const KALTURA_DC = "0";
    const FTP = "1";
    const SCP = "2";
    const SFTP = "3";
    const S3 = "6";
    const LOCAL = "7";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSyndicationFeedEntriesOrderBy extends KalturaEnumBase {
    const CREATED_AT_DESC = "-createdAt";
    const RECENT = "recent";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaTaggedObjectType extends KalturaEnumBase {
    const ENTRY = "1";
    const CATEGORY = "2";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaThumbAssetOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const DELETED_AT_ASC = "+deletedAt";
    const SIZE_ASC = "+size";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const DELETED_AT_DESC = "-deletedAt";
    const SIZE_DESC = "-size";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaThumbParamsOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaThumbParamsOutputOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaTubeMogulSyndicationFeedCategories extends KalturaEnumBase {
    const ANIMALS_AND_PETS = "Animals &amp; Pets";
    const ARTS_AND_ANIMATION = "Arts &amp; Animation";
    const AUTOS = "Autos";
    const COMEDY = "Comedy";
    const COMMERCIALS_PROMOTIONAL = "Commercials/Promotional";
    const ENTERTAINMENT = "Entertainment";
    const FAMILY_AND_KIDS = "Family &amp; Kids";
    const HOW_TO_INSTRUCTIONAL_DIY = "How To/Instructional/DIY";
    const MUSIC = "Music";
    const NEWS_AND_BLOGS = "News &amp; Blogs";
    const SCIENCE_AND_TECHNOLOGY = "Science &amp; Technology";
    const SPORTS = "Sports";
    const TRAVEL_AND_PLACES = "Travel &amp; Places";
    const VIDEO_GAMES = "Video Games";
    const VLOGS_PEOPLE = "Vlogs &amp; People";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaTubeMogulSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUiConfOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUploadTokenOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserEntryExtendedStatus extends KalturaEnumBase {
    const PLAYBACK_COMPLETE = "viewHistory.PLAYBACK_COMPLETE";
    const PLAYBACK_STARTED = "viewHistory.PLAYBACK_STARTED";
    const VIEWED = "viewHistory.VIEWED";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserEntryOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserEntryStatus extends KalturaEnumBase {
    const QUIZ_SUBMITTED = "quiz.3";
    const ACTIVE = "1";
    const DELETED = "2";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserEntryType extends KalturaEnumBase {
    const QUIZ = "quiz.QUIZ";
    const VIEW_HISTORY = "viewHistory.VIEW_HISTORY";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserLoginDataOrderBy extends KalturaEnumBase {
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const ID_ASC = "+id";
    const CREATED_AT_DESC = "-createdAt";
    const ID_DESC = "-id";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaUserRoleOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const ID_ASC = "+id";
    const NAME_ASC = "+name";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const ID_DESC = "-id";
    const NAME_DESC = "-name";
    const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaVideoCodec extends KalturaEnumBase {
    const NONE = "";
    const APCH = "apch";
    const APCN = "apcn";
    const APCO = "apco";
    const APCS = "apcs";
    const COPY = "copy";
    const DNXHD = "dnxhd";
    const DV = "dv";
    const FLV = "flv";
    const H263 = "h263";
    const H264 = "h264";
    const H264B = "h264b";
    const H264H = "h264h";
    const H264M = "h264m";
    const H265 = "h265";
    const MPEG2 = "mpeg2";
    const MPEG4 = "mpeg4";
    const THEORA = "theora";
    const VP6 = "vp6";
    const VP8 = "vp8";
    const VP9 = "vp9";
    const WMV2 = "wmv2";
    const WMV3 = "wmv3";
    const WVC1A = "wvc1a";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaWidgetOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaYahooSyndicationFeedAdultValues extends KalturaEnumBase {
    const ADULT = "adult";
    const NON_ADULT = "nonadult";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaYahooSyndicationFeedCategories extends KalturaEnumBase {
    const ACTION = "Action";
    const ANIMALS = "Animals";
    const ART_AND_ANIMATION = "Art &amp; Animation";
    const COMMERCIALS = "Commercials";
    const ENTERTAINMENT_AND_TV = "Entertainment &amp; TV";
    const FAMILY = "Family";
    const FOOD = "Food";
    const FUNNY_VIDEOS = "Funny Videos";
    const GAMES = "Games";
    const HEALTH_AND_BEAUTY = "Health &amp; Beauty";
    const HOW_TO = "How-To";
    const MOVIES_AND_SHORTS = "Movies &amp; Shorts";
    const MUSIC = "Music";
    const NEWS_AND_POLITICS = "News &amp; Politics";
    const PEOPLE_AND_VLOGS = "People &amp; Vlogs";
    const PRODUCTS_AND_TECH = "Products &amp; Tech.";
    const SCIENCE_AND_ENVIRONMENT = "Science &amp; Environment";
    const SPORTS = "Sports";
    const TRANSPORTATION = "Transportation";
    const TRAVEL = "Travel";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2018 Kaltura Inc.
 * @copyright (C) 2018-2019 Yamaguchi University (gh-cc@mlex.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaYahooSyndicationFeedOrderBy extends KalturaEnumBase {
    const CREATED_AT_ASC = "+createdAt";
    const NAME_ASC = "+name";
    const PLAYLIST_ID_ASC = "+playlistId";
    const TYPE_ASC = "+type";
    const UPDATED_AT_ASC = "+updatedAt";
    const CREATED_AT_DESC = "-createdAt";
    const NAME_DESC = "-name";
    const PLAYLIST_ID_DESC = "-playlistId";
    const TYPE_DESC = "-type";
    const UPDATED_AT_DESC = "-updatedAt";
}

