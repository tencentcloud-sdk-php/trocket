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
 * CreateInstance请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method string getName() 获取集群名称
 * @method void setName(string $Name) 设置集群名称
 * @method string getSkuCode() 获取商品规格，可用规格如下：experiment_500, basic_1k, basic_2k, basic_3k, basic_4k, basic_5k, basic_6k, basic_7k, basic_8k, basic_9k, basic_10k, pro_4k, pro_6k, pro_8k, pro_1w, pro_15k, pro_2w, pro_25k, pro_3w, pro_35k, pro_4w, pro_45k, pro_5w, pro_55k, pro_60k, pro_65k, pro_70k, pro_75k, pro_80k, pro_85k, pro_90k, pro_95k, pro_100k, platinum_1w, platinum_2w, platinum_3w, platinum_4w, platinum_5w, platinum_6w, platinum_7w, platinum_8w, platinum_9w, platinum_10w, platinum_12w, platinum_14w, platinum_16w, platinum_18w, platinum_20w, platinum_25w, platinum_30w, platinum_35w, platinum_40w, platinum_45w, platinum_50w, platinum_60w, platinum_70w, platinum_80w, platinum_90w, platinum_100w
 * @method void setSkuCode(string $SkuCode) 设置商品规格，可用规格如下：experiment_500, basic_1k, basic_2k, basic_3k, basic_4k, basic_5k, basic_6k, basic_7k, basic_8k, basic_9k, basic_10k, pro_4k, pro_6k, pro_8k, pro_1w, pro_15k, pro_2w, pro_25k, pro_3w, pro_35k, pro_4w, pro_45k, pro_5w, pro_55k, pro_60k, pro_65k, pro_70k, pro_75k, pro_80k, pro_85k, pro_90k, pro_95k, pro_100k, platinum_1w, platinum_2w, platinum_3w, platinum_4w, platinum_5w, platinum_6w, platinum_7w, platinum_8w, platinum_9w, platinum_10w, platinum_12w, platinum_14w, platinum_16w, platinum_18w, platinum_20w, platinum_25w, platinum_30w, platinum_35w, platinum_40w, platinum_45w, platinum_50w, platinum_60w, platinum_70w, platinum_80w, platinum_90w, platinum_100w
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 * @method array getVpcList() 获取集群绑定的VPC信息，必填
 * @method void setVpcList(array $VpcList) 设置集群绑定的VPC信息，必填
 * @method boolean getEnablePublic() 获取是否开启公网，默认值为false表示不开启
 * @method void setEnablePublic(boolean $EnablePublic) 设置是否开启公网，默认值为false表示不开启
 * @method boolean getBillingFlow() 获取公网是否按流量计费，默认值为false表示不按流量计费
 * @method void setBillingFlow(boolean $BillingFlow) 设置公网是否按流量计费，默认值为false表示不按流量计费
 * @method integer getBandwidth() 获取公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
 * @method array getIpRules() 获取公网访问白名单
 * @method void setIpRules(array $IpRules) 设置公网访问白名单
 * @method integer getMessageRetention() 获取消息保留时长（单位：小时）
 * @method void setMessageRetention(integer $MessageRetention) 设置消息保留时长（单位：小时）
 * @method integer getPayMode() 获取付费模式（0: 后付费；1: 预付费），默认值为0
 * @method void setPayMode(integer $PayMode) 设置付费模式（0: 后付费；1: 预付费），默认值为0
 * @method integer getRenewFlag() 获取是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
 * @method integer getTimeSpan() 获取购买时长（单位：月），默认值为1
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长（单位：月），默认值为1
 * @method integer getMaxTopicNum() 获取最大可创建主题数
 * @method void setMaxTopicNum(integer $MaxTopicNum) 设置最大可创建主题数
 * @method array getZoneIds() 获取部署可用区列表
 * @method void setZoneIds(array $ZoneIds) 设置部署可用区列表
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     */
    public $InstanceType;

    /**
     * @var string 集群名称
     */
    public $Name;

    /**
     * @var string 商品规格，可用规格如下：experiment_500, basic_1k, basic_2k, basic_3k, basic_4k, basic_5k, basic_6k, basic_7k, basic_8k, basic_9k, basic_10k, pro_4k, pro_6k, pro_8k, pro_1w, pro_15k, pro_2w, pro_25k, pro_3w, pro_35k, pro_4w, pro_45k, pro_5w, pro_55k, pro_60k, pro_65k, pro_70k, pro_75k, pro_80k, pro_85k, pro_90k, pro_95k, pro_100k, platinum_1w, platinum_2w, platinum_3w, platinum_4w, platinum_5w, platinum_6w, platinum_7w, platinum_8w, platinum_9w, platinum_10w, platinum_12w, platinum_14w, platinum_16w, platinum_18w, platinum_20w, platinum_25w, platinum_30w, platinum_35w, platinum_40w, platinum_45w, platinum_50w, platinum_60w, platinum_70w, platinum_80w, platinum_90w, platinum_100w
     */
    public $SkuCode;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @var array 集群绑定的VPC信息，必填
     */
    public $VpcList;

    /**
     * @var boolean 是否开启公网，默认值为false表示不开启
     */
    public $EnablePublic;

    /**
     * @var boolean 公网是否按流量计费，默认值为false表示不按流量计费
     */
    public $BillingFlow;

    /**
     * @var integer 公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
     */
    public $Bandwidth;

    /**
     * @var array 公网访问白名单
     */
    public $IpRules;

    /**
     * @var integer 消息保留时长（单位：小时）
     */
    public $MessageRetention;

    /**
     * @var integer 付费模式（0: 后付费；1: 预付费），默认值为0
     */
    public $PayMode;

    /**
     * @var integer 是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
     */
    public $RenewFlag;

    /**
     * @var integer 购买时长（单位：月），默认值为1
     */
    public $TimeSpan;

    /**
     * @var integer 最大可创建主题数
     */
    public $MaxTopicNum;

    /**
     * @var array 部署可用区列表
     */
    public $ZoneIds;

    /**
     * @param string $InstanceType 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     * @param string $Name 集群名称
     * @param string $SkuCode 商品规格，可用规格如下：experiment_500, basic_1k, basic_2k, basic_3k, basic_4k, basic_5k, basic_6k, basic_7k, basic_8k, basic_9k, basic_10k, pro_4k, pro_6k, pro_8k, pro_1w, pro_15k, pro_2w, pro_25k, pro_3w, pro_35k, pro_4w, pro_45k, pro_5w, pro_55k, pro_60k, pro_65k, pro_70k, pro_75k, pro_80k, pro_85k, pro_90k, pro_95k, pro_100k, platinum_1w, platinum_2w, platinum_3w, platinum_4w, platinum_5w, platinum_6w, platinum_7w, platinum_8w, platinum_9w, platinum_10w, platinum_12w, platinum_14w, platinum_16w, platinum_18w, platinum_20w, platinum_25w, platinum_30w, platinum_35w, platinum_40w, platinum_45w, platinum_50w, platinum_60w, platinum_70w, platinum_80w, platinum_90w, platinum_100w
     * @param string $Remark 备注信息
     * @param array $TagList 标签列表
     * @param array $VpcList 集群绑定的VPC信息，必填
     * @param boolean $EnablePublic 是否开启公网，默认值为false表示不开启
     * @param boolean $BillingFlow 公网是否按流量计费，默认值为false表示不按流量计费
     * @param integer $Bandwidth 公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
     * @param array $IpRules 公网访问白名单
     * @param integer $MessageRetention 消息保留时长（单位：小时）
     * @param integer $PayMode 付费模式（0: 后付费；1: 预付费），默认值为0
     * @param integer $RenewFlag 是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
     * @param integer $TimeSpan 购买时长（单位：月），默认值为1
     * @param integer $MaxTopicNum 最大可创建主题数
     * @param array $ZoneIds 部署可用区列表
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
