<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetSowListRequest extends Model
{
    /**
     * @description Filter time type, supports filtering by the last 7 days, the last 30 days, the last half year, or custom time ranges.
     *
     * This parameter is required.
     * @example month
     *
     * @var string
     */
    public $dateType;

    /**
     * @description End time.
     *
     * This parameter is required.
     * @example 1732156885986
     *
     * @var int
     */
    public $endDate;

    /**
     * @description Start time.
     *
     * This parameter is required.
     * @example 1729478485000
     *
     * @var int
     */
    public $startDate;

    /**
     * @description Alert event source.
     *
     * @example 该字段暂未使用，有问题请联系管理员
     *
     * @var string
     */
    public $suspEventSource;
    protected $_name = [
        'dateType'        => 'DateType',
        'endDate'         => 'EndDate',
        'startDate'       => 'StartDate',
        'suspEventSource' => 'SuspEventSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->suspEventSource) {
            $res['SuspEventSource'] = $this->suspEventSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSowListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SuspEventSource'])) {
            $model->suspEventSource = $map['SuspEventSource'];
        }

        return $model;
    }
}
