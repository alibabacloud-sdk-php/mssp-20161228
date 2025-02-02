<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTrendDTO\trendList;
use AlibabaCloud\Tea\Model;

class suspEventTrendDTO extends Model
{
    /**
     * @description Trend of alerts.
     *
     * @var trendList[]
     */
    public $trendList;
    protected $_name = [
        'trendList' => 'TrendList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trendList) {
            $res['TrendList'] = [];
            if (null !== $this->trendList && \is_array($this->trendList)) {
                $n = 0;
                foreach ($this->trendList as $item) {
                    $res['TrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspEventTrendDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrendList'])) {
            if (!empty($map['TrendList'])) {
                $model->trendList = [];
                $n                = 0;
                foreach ($map['TrendList'] as $item) {
                    $model->trendList[$n++] = null !== $item ? trendList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
