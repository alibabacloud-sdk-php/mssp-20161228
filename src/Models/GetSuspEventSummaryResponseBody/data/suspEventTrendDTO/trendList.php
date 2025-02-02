<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTrendDTO;

use AlibabaCloud\Tea\Model;

class trendList extends Model
{
    /**
     * @description Time point.
     *
     * @example 202405或者20240501
     *
     * @var string
     */
    public $date;

    /**
     * @description Number of handled alerts.
     *
     * @example 10
     *
     * @var int
     */
    public $dealCount;

    /**
     * @description Number of discovered alerts.
     *
     * @example 15
     *
     * @var int
     */
    public $findCount;
    protected $_name = [
        'date'      => 'Date',
        'dealCount' => 'DealCount',
        'findCount' => 'FindCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->dealCount) {
            $res['DealCount'] = $this->dealCount;
        }
        if (null !== $this->findCount) {
            $res['FindCount'] = $this->findCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['DealCount'])) {
            $model->dealCount = $map['DealCount'];
        }
        if (isset($map['FindCount'])) {
            $model->findCount = $map['FindCount'];
        }

        return $model;
    }
}
