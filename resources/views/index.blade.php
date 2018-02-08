<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="佣金返利网，京东、淘宝、天猫、返利网">
<meta name="generator" content="Jekyll v3.7.0">

<title>有佣金、京东、淘宝、天猫、返利</title>

<!-- Bootstrap core CSS -->

<link href="/style/bootstrap.min.css" rel="stylesheet" >


<!-- Documentation extras -->

<link href="/style/docs.min.css" rel="stylesheet">

  </head>
  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><svg class="d-block" width="36" height="36" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false"><title>Bootstrap</title><path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path><path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path></svg></a>
      <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link active" href="/" >Home</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

      </ul>

<!--       <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="/">登 录</a>
      <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="/">注 册</a> -->

</header>

    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p><h1 class="mb-3 bd-text-purple-bright">京东佣金查询</h1></p>
            <p class="lead">
              每天免费高达30万次
            </p>
          </div>
        </div>

        <style type="text/css">
          iframe {
              height: 70px;
          }

        </style>
        <script type="text/javascript">var jd_union_pid="1170764137";var jd_union_euid="";</script><script type="text/javascript" src="//ads-union.jd.com/static/js/union.js"></script>

        {{ Form::open(['action'=>['IndexController@index']]) }}
            <div class="form-group">
                <input type="text" class="form-control" name="sku" placeholder="输入商品地址或者Sku...">
            </div>
            {{ Form::submit('查 询',["class"=>"btn btn-primary"]) }}
        {{ Form::close() }}

        <p>@include('notification')</p>

        @if(isset($list) && !empty($list))
          @foreach($list as $v)
            <table class="table">
              <tr>
                <td>下单地址:<br/><a target="_bank" href="{{ $buy }}">{{ $buy }}</a></td>
              </tr>

              <tr>
                <td>商品价格:{{ $v['wlUnitPrice'] }}元</td>
              </tr>

              <tr>
                <td>手机下单返:{{ $v['commisionRatioWl'] * $v['wlUnitPrice'] / 100 }}元, 约返 {{ $v['commisionRatioWl'] }}%</td>
              </tr>

              <tr>
                <td>电脑下单返:{{ $v['commisionRatioPc'] * $v['unitPrice'] / 100 }}元, 约返 {{ $v['commisionRatioPc'] }}%</td>
              </tr>

              <tr>
                <td>商品名称:{{ $v['goodsName'] }}（{{ $v['isJdSale'] ? '自营' : '非自营' }}、{{ $v['isFreeShipping'] ? '包邮' : '不包邮' }}）</td>
              </tr>

              <tr>
                <td><img height="100" width="100"  src="<?php echo $v['imgUrl']; ?>" /></td>
              </tr>
            </table>
          @endforeach
        @endif
    </div>
  </body>
</html>
