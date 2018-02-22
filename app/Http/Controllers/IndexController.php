<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

include '../sdk/jdsdk/lotusphp_runtime/Lotus.php';

/**
 *  https://oauth.jd.com/oauth/authorize?response_type=code&client_id=2FCB940AD8758B1A17D8BA6AF49844A1&redirect_uri=http://www.youyongjin.com
 *  获取code (code = uqGwrx)
 *
 *  通过code获取accessToken（有效期1年）
 *  https://auth.360buy.com/oauth/token?grant_type=authorization_code&client_id=2FCB940AD8758B1A17D8BA6AF49844A1&redirect_uri=http://www.youyongjin.com&code=NnfK42&client_secret=dcf63610f78a4810b685290e3029e9ac
 */
class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $sku = $request->input('sku');
        if (!$sku || strlen($sku) < 6) {
            return Redirect::back()->withInput()->with('error', '输入有误，请重新输入');
        }

        if (!preg_match("/^\d*$/", $sku)) {
            $url = explode('?', $sku);

            $sub_url = $url[0];

            if (preg_match("/^(http:\/\/|https:\/\/).*$/", $sub_url)) {
                $sub_url = substr($url[0], 8);
            }

            $str = explode('/', $sub_url);
            if (isset($str['1'])) {
                $sku = substr($str['1'], 0, -5);
            }
        } else {
            $sub_url = 'https://item.jd.com/' . $sku . '.html';
        }

        $lotus                         = new \Lotus();
        $lotus->option['autoload_dir'] = '../sdk/jdsdk/jd';
        $lotus->devMode                = JD_SDK_DEV_MODE;
        $lotus->defaultStoreDir        = JD_SDK_WORK_DIR;
        $lotus->init();

        $c              = new \JdClient();
        $c->appKey      = env('JD_APP_KEY');
        $c->appSecret   = env('JD_APP_SECRET');
        $c->accessToken = env('JD_ACCESS_TOKEN');
        $c->serverUrl   = env('JD_SERVER_URL');

        $req = new \ServicePromotionGoodsInfoRequest();
        $req->setSkuIds($sku);
        $resp = $c->execute($req, $c->accessToken);

        if ($resp->code != 0) {
            return Redirect::back()->withInput()->with('error', '查询失败');
        }

        $res = json_decode($resp->getpromotioninfo_result, true);
        if (!isset($res['result']) || empty($res['result'])) {
            return Redirect::back()->withInput()->with('error', $res['message']);
        }

        $list = $res['result'];

        //获取下单地址
        $req = new \ServicePromotionBatchGetcodeRequest();
        $req->setId($sku);
        $req->setUrl('https://item.jd.com/' . $sku . '.html');
        $req->setUnionId('44505');
        $req->setChannel('PC');
        $req->setWebId('1150215408');

        $code_request = $c->execute($req, $c->accessToken);
        if ($code_request->code != 0) {
            return Redirect::back()->withInput()->with('error', '获取下单地址失败');
        }

        $res = json_decode($code_request->querybatch_result, true);
        if ($res['resultCode'] != 0) {
            return Redirect::back()->withInput()->with('error', $res['resultMessage']);
        }

        $buy = array_column($res['urlList'], 'url', 'id');

        return view('index')->with(compact('list', 'buy'));
    }
}
