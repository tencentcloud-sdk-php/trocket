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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerGroupList请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method array getFilters() 获取过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method void setFilters(array $Filters) 设置过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method integer getOffset() 获取查询起始位置，默认为0。
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认为0。
 * @method integer getLimit() 获取查询结果限制数量，默认20。
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认20。
 * @method string getFromTopic() 获取查询指定主题下的消费组
 * @method void setFromTopic(string $FromTopic) 设置查询指定主题下的消费组
 * @method string getSortedBy() 获取按照指定字段排序，枚举值如下：
- subscribeNum：订阅 Topic 个数
 * @method void setSortedBy(string $SortedBy) 设置按照指定字段排序，枚举值如下：
- subscribeNum：订阅 Topic 个数
 * @method string getSortOrder() 获取按升序或降序排列，枚举值如下：

- asc：升序
- desc：降序
 * @method void setSortOrder(string $SortOrder) 设置按升序或降序排列，枚举值如下：

- asc：升序
- desc：降序
 */
class DescribeConsumerGroupListRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var array 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
     */
    public $Filters;

    /**
     * @var integer 查询起始位置，默认为0。
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量，默认20。
     */
    public $Limit;

    /**
     * @var string 查询指定主题下的消费组
     */
    public $FromTopic;

    /**
     * @var string 按照指定字段排序，枚举值如下：
- subscribeNum：订阅 Topic 个数
     */
    public $SortedBy;

    /**
     * @var string 按升序或降序排列，枚举值如下：

- asc：升序
- desc：降序
     */
    public $SortOrder;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param array $Filters 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
     * @param integer $Offset 查询起始位置，默认为0。
     * @param integer $Limit 查询结果限制数量，默认20。
     * @param string $FromTopic 查询指定主题下的消费组
     * @param string $SortedBy 按照指定字段排序，枚举值如下：
- subscribeNum：订阅 Topic 个数
     * @param string $SortOrder 按升序或降序排列，枚举值如下：

- asc：升序
- desc：降序
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FromTopic",$param) and $param["FromTopic"] !== null) {
            $this->FromTopic = $param["FromTopic"];
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
