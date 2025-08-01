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
 * UpgradeLaunchConfiguration请求参数结构体
 *
 * @method string getLaunchConfigurationId() 获取启动配置ID。
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置启动配置ID。
 * @method string getImageId() 获取指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
 * @method void setImageId(string $ImageId) 设置指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
 * @method array getInstanceTypes() 获取实例机型列表，不同实例机型指定了不同的资源规格，最多支持5种实例机型。
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例机型列表，不同实例机型指定了不同的资源规格，最多支持5种实例机型。
 * @method string getLaunchConfigurationName() 获取启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method array getDataDisks() 获取实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
 * @method EnhancedService getEnhancedService() 获取增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
 * @method string getInstanceChargeType() 获取实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
<br><li>PREPAID：预付费，即包年包月
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
<br><li>PREPAID：预付费，即包年包月
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method string getInstanceTypesCheckPolicy() 获取实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。
<br><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) 设置实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。
<br><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method LoginSettings getLoginSettings() 获取该参数已失效，请勿使用。升级启动配置接口无法修改或覆盖 LoginSettings 参数，升级后 LoginSettings 不会发生变化。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置该参数已失效，请勿使用。升级启动配置接口无法修改或覆盖 LoginSettings 参数，升级后 LoginSettings 不会发生变化。
 * @method integer getProjectId() 获取实例所属项目ID。不填为默认项目。
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目ID。不填为默认项目。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
 * @method SystemDisk getSystemDisk() 获取实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method string getUserData() 获取经过 Base64 编码后的自定义数据，最大长度不超过16KB。
 * @method void setUserData(string $UserData) 设置经过 Base64 编码后的自定义数据，最大长度不超过16KB。
 * @method array getInstanceTags() 获取标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
 * @method void setInstanceTags(array $InstanceTags) 设置标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
 * @method string getCamRoleName() 获取CAM角色名称。可通过DescribeRoleList接口返回值中的roleName获取。
 * @method void setCamRoleName(string $CamRoleName) 设置CAM角色名称。可通过DescribeRoleList接口返回值中的roleName获取。
 * @method HostNameSettings getHostNameSettings() 获取云服务器主机名（HostName）的相关设置。
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) 设置云服务器主机名（HostName）的相关设置。
 * @method InstanceNameSettings getInstanceNameSettings() 获取云服务器实例名（InstanceName）的相关设置。
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) 设置云服务器实例名（InstanceName）的相关设置。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method string getDiskTypePolicy() 获取云盘类型选择策略，取值范围：
<br><li>ORIGINAL：使用设置的云盘类型
<br><li>AUTOMATIC：自动选择当前可用的云盘类型
 * @method void setDiskTypePolicy(string $DiskTypePolicy) 设置云盘类型选择策略，取值范围：
<br><li>ORIGINAL：使用设置的云盘类型
<br><li>AUTOMATIC：自动选择当前可用的云盘类型
 * @method IPv6InternetAccessible getIPv6InternetAccessible() 获取IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) 设置IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
 */
class UpgradeLaunchConfigurationRequest extends AbstractModel
{
    /**
     * @var string 启动配置ID。
     */
    public $LaunchConfigurationId;

    /**
     * @var string 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
     */
    public $ImageId;

    /**
     * @var array 实例机型列表，不同实例机型指定了不同的资源规格，最多支持5种实例机型。
     */
    public $InstanceTypes;

    /**
     * @var string 启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     */
    public $LaunchConfigurationName;

    /**
     * @var array 实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
     */
    public $DataDisks;

    /**
     * @var EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
     */
    public $EnhancedService;

    /**
     * @var string 实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
<br><li>PREPAID：预付费，即包年包月
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     */
    public $InstanceMarketOptions;

    /**
     * @var string 实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。
<br><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     */
    public $InternetAccessible;

    /**
     * @var LoginSettings 该参数已失效，请勿使用。升级启动配置接口无法修改或覆盖 LoginSettings 参数，升级后 LoginSettings 不会发生变化。
     */
    public $LoginSettings;

    /**
     * @var integer 实例所属项目ID。不填为默认项目。
     */
    public $ProjectId;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     */
    public $SystemDisk;

    /**
     * @var string 经过 Base64 编码后的自定义数据，最大长度不超过16KB。
     */
    public $UserData;

    /**
     * @var array 标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
     */
    public $InstanceTags;

    /**
     * @var string CAM角色名称。可通过DescribeRoleList接口返回值中的roleName获取。
     */
    public $CamRoleName;

    /**
     * @var HostNameSettings 云服务器主机名（HostName）的相关设置。
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings 云服务器实例名（InstanceName）的相关设置。
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 云盘类型选择策略，取值范围：
<br><li>ORIGINAL：使用设置的云盘类型
<br><li>AUTOMATIC：自动选择当前可用的云盘类型
     */
    public $DiskTypePolicy;

    /**
     * @var IPv6InternetAccessible IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
     */
    public $IPv6InternetAccessible;

    /**
     * @param string $LaunchConfigurationId 启动配置ID。
     * @param string $ImageId 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
     * @param array $InstanceTypes 实例机型列表，不同实例机型指定了不同的资源规格，最多支持5种实例机型。
     * @param string $LaunchConfigurationName 启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     * @param array $DataDisks 实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
     * @param EnhancedService $EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
     * @param string $InstanceChargeType 实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
<br><li>PREPAID：预付费，即包年包月
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     * @param string $InstanceTypesCheckPolicy 实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。
<br><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     * @param LoginSettings $LoginSettings 该参数已失效，请勿使用。升级启动配置接口无法修改或覆盖 LoginSettings 参数，升级后 LoginSettings 不会发生变化。
     * @param integer $ProjectId 实例所属项目ID。不填为默认项目。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
     * @param SystemDisk $SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     * @param string $UserData 经过 Base64 编码后的自定义数据，最大长度不超过16KB。
     * @param array $InstanceTags 标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
     * @param string $CamRoleName CAM角色名称。可通过DescribeRoleList接口返回值中的roleName获取。
     * @param HostNameSettings $HostNameSettings 云服务器主机名（HostName）的相关设置。
     * @param InstanceNameSettings $InstanceNameSettings 云服务器实例名（InstanceName）的相关设置。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param string $DiskTypePolicy 云盘类型选择策略，取值范围：
<br><li>ORIGINAL：使用设置的云盘类型
<br><li>AUTOMATIC：自动选择当前可用的云盘类型
     * @param IPv6InternetAccessible $IPv6InternetAccessible IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypesCheckPolicy",$param) and $param["InstanceTypesCheckPolicy"] !== null) {
            $this->InstanceTypesCheckPolicy = $param["InstanceTypesCheckPolicy"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
        }

        if (array_key_exists("IPv6InternetAccessible",$param) and $param["IPv6InternetAccessible"] !== null) {
            $this->IPv6InternetAccessible = new IPv6InternetAccessible();
            $this->IPv6InternetAccessible->deserialize($param["IPv6InternetAccessible"]);
        }
    }
}
