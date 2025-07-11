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
 * DescribeMQTTInstanceCert返回参数结构体
 *
 * @method string getInstanceId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSLServerCertId() 获取服务端证书id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSLServerCertId(string $SSLServerCertId) 设置服务端证书id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSLCaCertId() 获取CA证书id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSLCaCertId(string $SSLCaCertId) 设置CA证书id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMQTTInstanceCertResponse extends AbstractModel
{
    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 服务端证书id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSLServerCertId;

    /**
     * @var string CA证书id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSLCaCertId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSLServerCertId 服务端证书id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSLCaCertId CA证书id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("SSLServerCertId",$param) and $param["SSLServerCertId"] !== null) {
            $this->SSLServerCertId = $param["SSLServerCertId"];
        }

        if (array_key_exists("SSLCaCertId",$param) and $param["SSLCaCertId"] !== null) {
            $this->SSLCaCertId = $param["SSLCaCertId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
