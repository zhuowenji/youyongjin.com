<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

include '../sdk/jdsdk/lotusphp_runtime/Lotus.php';

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // https://oauth.jd.com/oauth/authorize?response_type=code&client_id=CE7D2483A773570AB9A90FC75E176CA7&redirect_uri=http://www.fuxiben.com
    // code = uqGwrx
    //
    //
    // 获取accessToken
    // https://auth.360buy.com/oauth/token?grant_type=authorization_code&client_id=CE7D2483A773570AB9A90FC75E176CA7&redirect_uri=http://www.fuxiben.com&code=5BGUOk&client_secret=816f53f0818c46d7a7c77add3e42ea57

    // {
    //   "access_token": "eab621c8-3a84-4175-a6ef-d5e3a22dadbf",
    //   "code": 0,
    //   "expires_in": 31535999,
    //   "refresh_token": "df033f58-5850-41a3-9b09-5fa34ef3b7a2",
    //   "time": "1516533695786",
    //   "token_type": "bearer",
    //   "uid": "9249394587",
    //   "user_nick": "zhuowenji"
    // }
    public function search(Request $request)
    {
        $sku = $request->input('sku');
        if (!$sku || strlen($sku) < 6) {
            return Redirect::back()->withInput()->with('error', '输入有误，请重新输入');
        }

        if (!preg_match("/^\d*$/", $sku)) {
            $url     = explode('?', $sku);
            $sub_url = $url[0];
            if (preg_match("/^(http:\/\/|https:\/\/).*$/", $sub_url)) {
                $url = substr($url[0], 8);
            }

            $str = explode('/', $url);
            $sku = substr($str['1'], 0, -5);
        } else {
            $sub_url = 'https://item.jd.com/' . $sku . '.html';
        }

        //include '../sdk/jdsdk/lotusphp_runtime/Lotus.php';
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
        $buy  = $sub_url . '?sku=' . $sku . '&shopid=3142284';

        return view('index')->with(compact('list', 'buy'));
    }

    public function promotionBatchGetcode()
    {
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

        $req = new \ServicePromotionBatchGetcodeRequest();
        $req->setId('3014316');
        $req->setUrl('https://item.jd.com/3014316.html');
        $req->setUnionId('44505');
        $req->setChannel('PC');
        $req->setWebId('1');

        $resp = $c->execute($req, $c->accessToken);

        var_dump($resp);
    }
}
