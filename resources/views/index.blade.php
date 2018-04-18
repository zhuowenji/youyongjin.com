<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="佣金返利网，京东、淘宝、天猫、返利网">

<title>有佣金、京东、淘宝、天猫、返利</title>

<!-- Bootstrap core CSS -->

<link href="/style/bootstrap.min.css" rel="stylesheet" >


<!-- Documentation extras -->

<link href="/style/docs.min.css" rel="stylesheet">

  </head>
  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
     <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link active" href="/" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/" >京东</a>
          </li>
        </ul>
      </div>
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
                <td><a target="_bank" href="{{ $buy[$v['skuId']] }}">点击下单即可获得佣金</a></td>
              </tr>

              <tr>
                <td>商品价格:{{ $v['wlUnitPrice'] }}元</td>
              </tr>

              <tr>
                <td>手机下单返:{{ $v['commisionRatioWl'] * $v['wlUnitPrice'] / 100 * 0.9 }}元, 约返 {{ $v['commisionRatioWl'] * 0.9 }}%</td>
              </tr>

              <tr>
                <td>电脑下单返:{{ $v['commisionRatioPc'] * $v['unitPrice'] / 100 * 0.9 }}元, 约返 {{ $v['commisionRatioPc'] * 0.9 }}%</td>
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
