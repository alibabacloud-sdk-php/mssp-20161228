<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceWorkOrderRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 426556
     *
     * @var string
     */
    public $creator;

    /**
     * @description This parameter is required.
     *
     * @example 1477832102462645
     *
     * @var string
     */
    public $customerId;

    /**
     * @description This parameter is required.
     *
     * @example 5
     *
     * @var string
     */
    public $durationDay;

    /**
     * @description This parameter is required.
     *
     * @example Y
     *
     * @var string
     */
    public $isAttachment;

    /**
     * @description This parameter is required.
     *
     * @example Y
     *
     * @var string
     */
    public $isWorkOrderNotify;

    /**
     * @example 5
     *
     * @var string
     */
    public $notifyDay;

    /**
     * @example 10
     *
     * @var int
     */
    public $notifyId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operateRemark;

    /**
     * @description This parameter is required.
     *
     * @example CREATE
     *
     * @var string
     */
    public $operateType;

    /**
     * @description This parameter is required.
     *
     * @example 426556
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 2021-01-21 15:25:25
     *
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workOrderDetail;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workOrderName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workOrderSource;

    /**
     * @description This parameter is required.
     *
     * @example UNPROCESSED
     *
     * @var string
     */
    public $workOrderStatus;

    /**
     * @description This parameter is required.
     *
     * @example MONTH_REPORT
     *
     * @var string
     */
    public $workOrderType;
    protected $_name = [
        'creator'           => 'Creator',
        'customerId'        => 'CustomerId',
        'durationDay'       => 'DurationDay',
        'isAttachment'      => 'IsAttachment',
        'isWorkOrderNotify' => 'IsWorkOrderNotify',
        'notifyDay'         => 'NotifyDay',
        'notifyId'          => 'NotifyId',
        'operateRemark'     => 'OperateRemark',
        'operateType'       => 'OperateType',
        'operator'          => 'Operator',
        'ownerId'           => 'OwnerId',
        'startTime'         => 'StartTime',
        'workOrderDetail'   => 'WorkOrderDetail',
        'workOrderName'     => 'WorkOrderName',
        'workOrderSource'   => 'WorkOrderSource',
        'workOrderStatus'   => 'WorkOrderStatus',
        'workOrderType'     => 'WorkOrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->durationDay) {
            $res['DurationDay'] = $this->durationDay;
        }
        if (null !== $this->isAttachment) {
            $res['IsAttachment'] = $this->isAttachment;
        }
        if (null !== $this->isWorkOrderNotify) {
            $res['IsWorkOrderNotify'] = $this->isWorkOrderNotify;
        }
        if (null !== $this->notifyDay) {
            $res['NotifyDay'] = $this->notifyDay;
        }
        if (null !== $this->notifyId) {
            $res['NotifyId'] = $this->notifyId;
        }
        if (null !== $this->operateRemark) {
            $res['OperateRemark'] = $this->operateRemark;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->workOrderDetail) {
            $res['WorkOrderDetail'] = $this->workOrderDetail;
        }
        if (null !== $this->workOrderName) {
            $res['WorkOrderName'] = $this->workOrderName;
        }
        if (null !== $this->workOrderSource) {
            $res['WorkOrderSource'] = $this->workOrderSource;
        }
        if (null !== $this->workOrderStatus) {
            $res['WorkOrderStatus'] = $this->workOrderStatus;
        }
        if (null !== $this->workOrderType) {
            $res['WorkOrderType'] = $this->workOrderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceWorkOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['DurationDay'])) {
            $model->durationDay = $map['DurationDay'];
        }
        if (isset($map['IsAttachment'])) {
            $model->isAttachment = $map['IsAttachment'];
        }
        if (isset($map['IsWorkOrderNotify'])) {
            $model->isWorkOrderNotify = $map['IsWorkOrderNotify'];
        }
        if (isset($map['NotifyDay'])) {
            $model->notifyDay = $map['NotifyDay'];
        }
        if (isset($map['NotifyId'])) {
            $model->notifyId = $map['NotifyId'];
        }
        if (isset($map['OperateRemark'])) {
            $model->operateRemark = $map['OperateRemark'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WorkOrderDetail'])) {
            $model->workOrderDetail = $map['WorkOrderDetail'];
        }
        if (isset($map['WorkOrderName'])) {
            $model->workOrderName = $map['WorkOrderName'];
        }
        if (isset($map['WorkOrderSource'])) {
            $model->workOrderSource = $map['WorkOrderSource'];
        }
        if (isset($map['WorkOrderStatus'])) {
            $model->workOrderStatus = $map['WorkOrderStatus'];
        }
        if (isset($map['WorkOrderType'])) {
            $model->workOrderType = $map['WorkOrderType'];
        }

        return $model;
    }
}