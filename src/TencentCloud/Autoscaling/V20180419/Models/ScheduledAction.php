<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述定时任务的信息
 *
 * @method string getScheduledActionId() 获取定时任务ID。
 * @method void setScheduledActionId(string $ScheduledActionId) 设置定时任务ID。
 * @method string getScheduledActionName() 获取定时任务名称。
 * @method void setScheduledActionName(string $ScheduledActionName) 设置定时任务名称。
 * @method string getAutoScalingGroupId() 获取定时任务所在伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置定时任务所在伸缩组ID。
 * @method string getStartTime() 获取定时任务的开始时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
 * @method void setStartTime(string $StartTime) 设置定时任务的开始时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
 * @method string getRecurrence() 获取定时任务的重复方式。定时任务中的[Recurrence参数限制](https://cloud.tencent.com/document/product/377/88119)为5个字段，由空格分开，结构为：分，小时，日期，月份，星期。
 * @method void setRecurrence(string $Recurrence) 设置定时任务的重复方式。定时任务中的[Recurrence参数限制](https://cloud.tencent.com/document/product/377/88119)为5个字段，由空格分开，结构为：分，小时，日期，月份，星期。
 * @method string getEndTime() 获取定时任务的结束时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
 * @method void setEndTime(string $EndTime) 设置定时任务的结束时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
 * @method integer getMaxSize() 获取定时任务设置的最大实例数。
 * @method void setMaxSize(integer $MaxSize) 设置定时任务设置的最大实例数。
 * @method integer getDesiredCapacity() 获取定时任务设置的期望实例数。
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置定时任务设置的期望实例数。
 * @method integer getMinSize() 获取定时任务设置的最小实例数。
 * @method void setMinSize(integer $MinSize) 设置定时任务设置的最小实例数。
 * @method string getCreatedTime() 获取定时任务的创建时间。取值为标准`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置定时任务的创建时间。取值为标准`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getScheduledType() 获取定时任务的执行类型。取值范围：
<li>CRONTAB：代表定时任务为重复执行。</li>
<li>ONCE：代表定时任务为单次执行。</li>
 * @method void setScheduledType(string $ScheduledType) 设置定时任务的执行类型。取值范围：
<li>CRONTAB：代表定时任务为重复执行。</li>
<li>ONCE：代表定时任务为单次执行。</li>
 */
class ScheduledAction extends AbstractModel
{
    /**
     * @var string 定时任务ID。
     */
    public $ScheduledActionId;

    /**
     * @var string 定时任务名称。
     */
    public $ScheduledActionName;

    /**
     * @var string 定时任务所在伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 定时任务的开始时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
     */
    public $StartTime;

    /**
     * @var string 定时任务的重复方式。定时任务中的[Recurrence参数限制](https://cloud.tencent.com/document/product/377/88119)为5个字段，由空格分开，结构为：分，小时，日期，月份，星期。
     */
    public $Recurrence;

    /**
     * @var string 定时任务的结束时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
     */
    public $EndTime;

    /**
     * @var integer 定时任务设置的最大实例数。
     */
    public $MaxSize;

    /**
     * @var integer 定时任务设置的期望实例数。
     */
    public $DesiredCapacity;

    /**
     * @var integer 定时任务设置的最小实例数。
     */
    public $MinSize;

    /**
     * @var string 定时任务的创建时间。取值为标准`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @var string 定时任务的执行类型。取值范围：
<li>CRONTAB：代表定时任务为重复执行。</li>
<li>ONCE：代表定时任务为单次执行。</li>
     */
    public $ScheduledType;

    /**
     * @param string $ScheduledActionId 定时任务ID。
     * @param string $ScheduledActionName 定时任务名称。
     * @param string $AutoScalingGroupId 定时任务所在伸缩组ID。
     * @param string $StartTime 定时任务的开始时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
     * @param string $Recurrence 定时任务的重复方式。定时任务中的[Recurrence参数限制](https://cloud.tencent.com/document/product/377/88119)为5个字段，由空格分开，结构为：分，小时，日期，月份，星期。
     * @param string $EndTime 定时任务的结束时间。取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
     * @param integer $MaxSize 定时任务设置的最大实例数。
     * @param integer $DesiredCapacity 定时任务设置的期望实例数。
     * @param integer $MinSize 定时任务设置的最小实例数。
     * @param string $CreatedTime 定时任务的创建时间。取值为标准`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $ScheduledType 定时任务的执行类型。取值范围：
<li>CRONTAB：代表定时任务为重复执行。</li>
<li>ONCE：代表定时任务为单次执行。</li>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScheduledActionId",$param) and $param["ScheduledActionId"] !== null) {
            $this->ScheduledActionId = $param["ScheduledActionId"];
        }

        if (array_key_exists("ScheduledActionName",$param) and $param["ScheduledActionName"] !== null) {
            $this->ScheduledActionName = $param["ScheduledActionName"];
        }

        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ScheduledType",$param) and $param["ScheduledType"] !== null) {
            $this->ScheduledType = $param["ScheduledType"];
        }
    }
}
