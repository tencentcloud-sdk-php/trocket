<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method float getSendReceiveRatio() 获取消息发送和接收的比例
 * @method void setSendReceiveRatio(float $SendReceiveRatio) 设置消息发送和接收的比例
 * @method string getSkuCode() 获取调整实例规格的商品代号
 * @method void setSkuCode(string $SkuCode) 设置调整实例规格的商品代号
 * @method integer getMessageRetention() 获取消息保留时长，小时为单位
 * @method void setMessageRetention(integer $MessageRetention) 设置消息保留时长，小时为单位
 * @method boolean getScaledTpsEnabled() 获取是否开启弹性TPS
 * @method void setScaledTpsEnabled(boolean $ScaledTpsEnabled) 设置是否开启弹性TPS
 * @method integer getMaxTopicNum() 获取最大可创建主题数
 * @method void setMaxTopicNum(integer $MaxTopicNum) 设置最大可创建主题数
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var float 消息发送和接收的比例
     */
    public $SendReceiveRatio;

    /**
     * @var string 调整实例规格的商品代号
     */
    public $SkuCode;

    /**
     * @var integer 消息保留时长，小时为单位
     */
    public $MessageRetention;

    /**
     * @var boolean 是否开启弹性TPS
     */
    public $ScaledTpsEnabled;

    /**
     * @var integer 最大可创建主题数
     */
    public $MaxTopicNum;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Name 实例名称
     * @param string $Remark 备注信息
     * @param float $SendReceiveRatio 消息发送和接收的比例
     * @param string $SkuCode 调整实例规格的商品代号
     * @param integer $MessageRetention 消息保留时长，小时为单位
     * @param boolean $ScaledTpsEnabled 是否开启弹性TPS
     * @param integer $MaxTopicNum 最大可创建主题数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("ScaledTpsEnabled",$param) and $param["ScaledTpsEnabled"] !== null) {
            $this->ScaledTpsEnabled = $param["ScaledTpsEnabled"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }
    }
}
