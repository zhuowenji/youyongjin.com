<?php

namespace App\Models;

include '../sdk/ali_sms_sdk/api_sdk/vendor/autoload.php';

use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Core\Profile\DefaultProfile;
use Illuminate\Database\Eloquent\Model;

\Aliyun\Core\Config::load();

class Sms extends Model
{
    protected $table = 'sms';

    protected $guarded = [];

    static $acsClient = null;

    /**
     * 取得AcsClient
     *
     * @return DefaultAcsClient
     */
    public static function getAcsClient()
    {
        //产品名称:云通信流量服务API产品,开发者无需替换
        $product = 'Dysmsapi';

        //产品域名,开发者无需替换
        $domain = 'dysmsapi.aliyuncs.com';

        $accessKeyId = env('ALI_ACCESS_KEYID'); // AccessKeyId

        $accessKeySecret = env('ALI_ACCESS_KEYSECRET'); // AccessKeySecret

        // 暂时不支持多Region
        $region = 'cn-hangzhou';

        // 服务结点
        $endPointName = 'cn-hangzhou';

        if (static::$acsClient == null) {

            //初始化acsClient,暂不支持region化
            $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

            // 增加服务结点
            DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);

            // 初始化AcsClient用于发起请求
            static::$acsClient = new DefaultAcsClient($profile);
        }
        return static::$acsClient;
    }

    /**
     * 发送短信
     * @return stdClass
     */
    public static function sendSms($phone, $code, $product = 'Dysmsapi', $template = 'SMS_126290146')
    {
        $request = new SendSmsRequest();
        $request->setPhoneNumbers($phone);
        $request->setSignName('有佣网');
        $request->setTemplateCode($template);
        $request->setTemplateParam(json_encode([
            'code'    => $code,
            'product' => $product,
        ]));

        return static::getAcsClient()->getAcsResponse($request);
    }
}
