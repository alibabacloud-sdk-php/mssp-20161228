<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\PageServiceCustomerResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Customer UID.
     *
     * @example 1667751131382856
     *
     * @var string
     */
    public $aliuid;

    /**
     * @description Authorization status.
     *
     * @example 1
     *
     * @var int
     */
    public $authStatus;

    /**
     * @description Cloud Monitoring - Alert authorization status.
     *
     * @example 0
     *
     * @var int
     */
    public $cmAuthStatus;

    /**
     * @description End time. The format is a Unix timestamp, which is the number of milliseconds since January 1, 1970.
     *
     * @example 1710123149222
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Customer level.
     *
     * @example GC1
     *
     * @var string
     */
    public $level;

    /**
     * @description Cloud Security - Alert authorization status.
     *
     * @example 1
     *
     * @var int
     */
    public $monitorAuthStatus;

    /**
     * @description Customer name.
     *
     * @example 中国工程院
     *
     * @var string
     */
    public $name;

    /**
     * @description Owner name.
     *
     * @example 常温
     *
     * @var string
     */
    public $ownId;

    /**
     * @description Start time. The format is a Unix timestamp, which is the number of milliseconds since January 1, 1970.
     *
     * @example 1710123149000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description Customer ID.
     *
     * @example 1667751131382856
     *
     * @var string
     */
    public $userId;

    /**
     * @description Version information.
     *
     * @example 企业版
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'aliuid'            => 'Aliuid',
        'authStatus'        => 'AuthStatus',
        'cmAuthStatus'      => 'CmAuthStatus',
        'endTime'           => 'EndTime',
        'level'             => 'Level',
        'monitorAuthStatus' => 'MonitorAuthStatus',
        'name'              => 'Name',
        'ownId'             => 'OwnId',
        'startTime'         => 'StartTime',
        'userId'            => 'UserId',
        'version'           => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }
        if (null !== $this->cmAuthStatus) {
            $res['CmAuthStatus'] = $this->cmAuthStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->monitorAuthStatus) {
            $res['MonitorAuthStatus'] = $this->monitorAuthStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownId) {
            $res['OwnId'] = $this->ownId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }
        if (isset($map['CmAuthStatus'])) {
            $model->cmAuthStatus = $map['CmAuthStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MonitorAuthStatus'])) {
            $model->monitorAuthStatus = $map['MonitorAuthStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnId'])) {
            $model->ownId = $map['OwnId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
