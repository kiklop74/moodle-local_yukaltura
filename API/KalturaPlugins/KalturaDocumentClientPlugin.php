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
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . "/../KalturaClientBase.php");
require_once(dirname(__FILE__) . "/../KalturaEnums.php");
require_once(dirname(__FILE__) . "/../KalturaTypes.php");
require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.php');

if (!defined('MOODLE_INTERNAL')) {
    // It must be included from a Moodle page.
    die('Direct access to this script is forbidden.');
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentEntryOrderBy
{
    const NAME_ASC = "+name";
    const NAME_DESC = "-name";
    const MODERATION_COUNT_ASC = "+moderationCount";
    const MODERATION_COUNT_DESC = "-moderationCount";
    const CREATED_AT_ASC = "+createdAt";
    const CREATED_AT_DESC = "-createdAt";
    const UPDATED_AT_ASC = "+updatedAt";
    const UPDATED_AT_DESC = "-updatedAt";
    const RANK_ASC = "+rank";
    const RANK_DESC = "-rank";
    const START_DATE_ASC = "+startDate";
    const START_DATE_DESC = "-startDate";
    const END_DATE_ASC = "+endDate";
    const END_DATE_DESC = "-endDate";
    const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
    const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentFlavorParamsOrderBy
{
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentFlavorParamsOutputOrderBy
{
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentType
{
    const DOCUMENT = 11;
    const SWF = 12;
    const PDF = 13;
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPdfFlavorParamsOrderBy
{
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPdfFlavorParamsOutputOrderBy
{
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSwfFlavorParamsOrderBy
{
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSwfFlavorParamsOutputOrderBy
{
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentEntry extends KalturaBaseEntry
{
    /**
     * The type of the document
     *
     * @var KalturaDocumentType
     */
    public $documentType = null;

    /**
     * Comma separated asset params ids that exists for this media entry
     *
     *
     * @var string
     */
    public $assetParamsIds = null;

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaDocumentEntryBaseFilter extends KalturaBaseEntryFilter
{
    /**
     *
     *
     * @var KalturaDocumentType
     */
    public $documentTypeEqual = null;

    /**
     *
     *
     * @var string
     */
    public $documentTypeIn = null;

    /**
     *
     *
     * @var string
     */
    public $assetParamsIdsMatchOr = null;

    /**
     *
     *
     * @var string
     */
    public $assetParamsIdsMatchAnd = null;

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentEntryFilter extends KalturaDocumentEntryBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentListResponse extends KalturaObjectBase
{
    /**
     *
     *
     * @var array of KalturaDocumentEntry
     */
    public $objects;

    /**
     *
     *
     * @var int
     */
    public $totalCount = null;

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaDocumentFlavorParamsBaseFilter extends KalturaFlavorParamsFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaDocumentFlavorParamsOutputBaseFilter extends KalturaFlavorParamsOutputFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaPdfFlavorParamsBaseFilter extends KalturaFlavorParamsFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaPdfFlavorParamsOutputBaseFilter extends KalturaFlavorParamsOutputFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaSwfFlavorParamsBaseFilter extends KalturaFlavorParamsFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class KalturaSwfFlavorParamsOutputBaseFilter extends KalturaFlavorParamsOutputFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentFlavorParamsFilter extends KalturaDocumentFlavorParamsBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentFlavorParamsOutputFilter extends KalturaDocumentFlavorParamsOutputBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPdfFlavorParamsFilter extends KalturaPdfFlavorParamsBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPdfFlavorParamsOutputFilter extends KalturaPdfFlavorParamsOutputBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSwfFlavorParamsFilter extends KalturaSwfFlavorParamsBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSwfFlavorParamsOutputFilter extends KalturaSwfFlavorParamsOutputBaseFilter
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentFlavorParamsOutput extends KalturaFlavorParamsOutput
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentFlavorParams extends KalturaFlavorParams
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPdfFlavorParamsOutput extends KalturaFlavorParamsOutput
{
    /**
     *
     *
     * @var bool
     */
    public $readonly = null;

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaPdfFlavorParams extends KalturaFlavorParams
{
    /**
     *
     *
     * @var bool
     */
    public $readonly = null;

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSwfFlavorParamsOutput extends KalturaFlavorParamsOutput
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaSwfFlavorParams extends KalturaFlavorParams
{

}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentsService extends KalturaServiceBase
{
    function __construct(KalturaClient $client = null) {
        parent::__construct($client);
    }

    function addFromUploadedFile(KalturaDocumentEntry $documentEntry, $uploadTokenId) {
        $kparams = array();
        $this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
        $this->client->addParam($kparams, "uploadTokenId", $uploadTokenId);
        $this->client->queueServiceActionCall("document_documents", "addFromUploadedFile", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "KalturaDocumentEntry");
        return $resultobject;
    }

    function addFromEntry($sourceEntryId, KalturaDocumentEntry $documentEntry = null, $sourceFlavorParamsId = null) {
        $kparams = array();
        $this->client->addParam($kparams, "sourceEntryId", $sourceEntryId);
        if ($documentEntry !== null) {
            $this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
        }
        $this->client->addParam($kparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
        $this->client->queueServiceActionCall("document_documents", "addFromEntry", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "KalturaDocumentEntry");
        return $resultobject;
    }

    function addFromFlavorAsset($sourceFlavorAssetId, KalturaDocumentEntry $documentEntry = null) {
        $kparams = array();
        $this->client->addParam($kparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
        if ($documentEntry !== null) {
            $this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
        }
        $this->client->queueServiceActionCall("document_documents", "addFromFlavorAsset", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "KalturaDocumentEntry");
        return $resultobject;
    }

    function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
        if ($dynamicConversionAttributes !== null) {
            foreach ($dynamicConversionAttributes as $index => $obj) {
                $this->client->addParam($kparams, "dynamicConversionAttributes:$index", $obj->toParams());
            }
        }
        $this->client->queueServiceActionCall("document_documents", "convert", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "integer");
        return $resultobject;
    }

    function get($entryId, $version = -1) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->addParam($kparams, "version", $version);
        $this->client->queueServiceActionCall("document_documents", "get", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "KalturaDocumentEntry");
        return $resultobject;
    }

    function update($entryId, KalturaDocumentEntry $documentEntry) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->addParam($kparams, "documentEntry", $documentEntry->toParams());
        $this->client->queueServiceActionCall("document_documents", "update", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "KalturaDocumentEntry");
        return $resultobject;
    }

    function delete($entryId) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->queueServiceActionCall("document_documents", "delete", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "null");
        return $resultobject;
    }

    function listAction(KalturaDocumentEntryFilter $filter = null, KalturaFilterPager $pager = null) {
        $kparams = array();
        if ($filter !== null) {
            $this->client->addParam($kparams, "filter", $filter->toParams());
        }
        if ($pager !== null) {
            $this->client->addParam($kparams, "pager", $pager->toParams());
        }
        $this->client->queueServiceActionCall("document_documents", "list", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "KalturaDocumentListResponse");
        return $resultobject;
    }

    function upload($fileData) {
        $kparams = array();
        $kfiles = array();
        $this->client->addParam($kfiles, "fileData", $fileData);
        $this->client->queueServiceActionCall("document_documents", "upload", $kparams, $kfiles);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "string");
        return $resultobject;
    }

    function convertPptToSwf($entryId) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->queueServiceActionCall("document_documents", "convertPptToSwf", $kparams);
        if ($this->client->isMultiRequest()) {
            return $this->client->getMultiRequestResult();
        }
        $resultobject = $this->client->doQueue();
        $this->client->throwExceptionIfError($resultobject);
        $this->client->validateObjectType($resultobject, "string");
        return $resultobject;
    }

    function serve($entryId, $flavorAssetId = null, $forceProxy = false) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
        $this->client->addParam($kparams, "forceProxy", $forceProxy);
        $this->client->queueServiceActionCall('document_documents', 'serve', $kparams);
        $resultobject = $this->client->getServeUrl();
        return $resultobject;
    }

    function serveByFlavorParamsId($entryId, $flavorParamsId = null, $forceProxy = false) {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
        $this->client->addParam($kparams, "forceProxy", $forceProxy);
        $this->client->queueServiceActionCall('document_documents', 'serveByFlavorParamsId', $kparams);
        $resultobject = $this->client->getServeUrl();
        return $resultobject;
    }
}

/**
 * Kaltura Client API.
 *
 * @package   local_yukaltura
 * @copyright (C) 2014 Kaltura Inc.
 * @copyright (C) 2016-2017 Yamaguchi University (info-cc@ml.cc.yamaguchi-u.ac.jp)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class KalturaDocumentClientPlugin extends KalturaClientPlugin
{
    /**
     * @var KalturaDocumentClientPlugin
     */
    protected static $instance;

    /**
     * @var KalturaDocumentsService
     */
    public $documents = null;

    protected function __construct(KalturaClient $client) {
        parent::__construct($client);
        $this->documents = new KalturaDocumentsService($client);
    }

    /**
     * @return KalturaDocumentClientPlugin
     */
    public static function get(KalturaClient $client) {
        if (!self::$instance) {
            self::$instance = new KalturaDocumentClientPlugin($client);
        }
        return self::$instance;
    }

    /**
     * @return array<KalturaServiceBase>
     */
    public function getServices() {
        $services = array(
            'documents' => $this->documents,
        );
        return $services;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'document';
    }
}
