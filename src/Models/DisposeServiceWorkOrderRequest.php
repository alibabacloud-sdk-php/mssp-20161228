<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class DisposeServiceWorkOrderRequest extends Model
{
    /**
     * @description Attachment name.
     *
     * @example bbaa133c-0ac2-489f-9fc8-39f91c2e770c_20230301-20240403-服务工单列表.xlsx
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description End time.
     *
     * @example 2024-04-14 00:00:00
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Forward to owner.
     *
     * @example 405639
     *
     * @var string
     */
    public $forwardOwnerId;

    /**
     * @description Work order ID.
     *
     * This parameter is required.
     * @example 23172
     *
     * @var int
     */
    public $id;

    /**
     * @description Attachment requirement.
     *
     * @example Y
     *
     * @var string
     */
    public $isAttachment;

    /**
     * @description Work order notification.
     *
     * @example Y
     *
     * @var string
     */
    public $isWorkOrderNotify;

    /**
     * @description Notification ID.
     *
     * @example 10
     *
     * @var int
     */
    public $notifyId;

    /**
     * @description Operation remarks.
     *
     * This parameter is required.
     * @example 处理完成
     *
     * @var string
     */
    public $operateRemark;

    /**
     * @description Processing type.
     *
     * This parameter is required.
     * @example PROCESSED
     *
     * @var string
     */
    public $operateType;

    /**
     * @description Operator.
     *
     * This parameter is required.
     * @example 396120
     *
     * @var string
     */
    public $operator;

    /**
     * @description Start time.
     *
     * @example 2024-04-02 00:00:00
     *
     * @var int
     */
    public $startTime;

    /**
     * @description Upgrade owner.
     *
     * @example 336333
     *
     * @var string
     */
    public $upgradeOwnerId;

    /**
     * @description Work order details.
     *
     * @example {"questionDetail":"测试工单","answerDetail":""}
     *
     * @var string
     */
    public $workOrderDetail;

    /**
     * @description Work order name.
     *
     * This parameter is required.
     * @example 安全产品配置问题与超量提醒
     *
     * @var string
     */
    public $workOrderName;

    /**
     * @description Work order status.
     *
     * @example PROCESSED
     *
     * @var string
     */
    public $workOrderStatus;
    protected $_name = [
        'attachmentName'    => 'AttachmentName',
        'endTime'           => 'EndTime',
        'forwardOwnerId'    => 'ForwardOwnerId',
        'id'                => 'Id',
        'isAttachment'      => 'IsAttachment',
        'isWorkOrderNotify' => 'IsWorkOrderNotify',
        'notifyId'          => 'NotifyId',
        'operateRemark'     => 'OperateRemark',
        'operateType'       => 'OperateType',
        'operator'          => 'Operator',
        'startTime'         => 'StartTime',
        'upgradeOwnerId'    => 'UpgradeOwnerId',
        'workOrderDetail'   => 'WorkOrderDetail',
        'workOrderName'     => 'WorkOrderName',
        'workOrderStatus'   => 'WorkOrderStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->forwardOwnerId) {
            $res['ForwardOwnerId'] = $this->forwardOwnerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isAttachment) {
            $res['IsAttachment'] = $this->isAttachment;
        }
        if (null !== $this->isWorkOrderNotify) {
            $res['IsWorkOrderNotify'] = $this->isWorkOrderNotify;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->upgradeOwnerId) {
            $res['UpgradeOwnerId'] = $this->upgradeOwnerId;
        }
        if (null !== $this->workOrderDetail) {
            $res['WorkOrderDetail'] = $this->workOrderDetail;
        }
        if (null !== $this->workOrderName) {
            $res['WorkOrderName'] = $this->workOrderName;
        }
        if (null !== $this->workOrderStatus) {
            $res['WorkOrderStatus'] = $this->workOrderStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisposeServiceWorkOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ForwardOwnerId'])) {
            $model->forwardOwnerId = $map['ForwardOwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsAttachment'])) {
            $model->isAttachment = $map['IsAttachment'];
        }
        if (isset($map['IsWorkOrderNotify'])) {
            $model->isWorkOrderNotify = $map['IsWorkOrderNotify'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpgradeOwnerId'])) {
            $model->upgradeOwnerId = $map['UpgradeOwnerId'];
        }
        if (isset($map['WorkOrderDetail'])) {
            $model->workOrderDetail = $map['WorkOrderDetail'];
        }
        if (isset($map['WorkOrderName'])) {
            $model->workOrderName = $map['WorkOrderName'];
        }
        if (isset($map['WorkOrderStatus'])) {
            $model->workOrderStatus = $map['WorkOrderStatus'];
        }

        return $model;
    }
}
