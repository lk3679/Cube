
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號列表 - 誠品畫廊-魔術方塊</title>
    <link rel='shortcut icon' href="/favicon.ico"/>
    <link href="https://mgcube.eslitegallery.com//Content/css?v=-JVsxZj3DuYpRnwgz7BLg9prCBpeMAmgU7hPvVWCxyc1" rel="stylesheet"/>

    <script src="https://mgcube.eslitegallery.com//bundles/modernizr?v=wBEWDufH_8Md-Pbioxomt90vm6tJN2Pyy9u9zHtWsPo1"></script>

</head>
<body style="font-family:微軟正黑體;">
    <div id="loadingeffect" class="loadingeffect" style="display:none;">
        <div style="display:table;display: table;width: 100%;height: 100%;">
            <div id="loadingeffectitem" class="loadingeffectitem" style="display:table-cell;vertical-align:middle;text-align:center;color: white;">
                <i id="loadingeffectiocn" class="loadingeffectiocn fa fa-spinner fa-pulse fa-5x fa-fw"></i>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand" href="/">
                        <img src="https://mgcube.eslitegallery.com//logo-welcome.png" alt="誠品畫廊" style="" />
                    </a>
                </div>
<form action="/Home/LogOff" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="CTtIJoZwlR8kgm2DMb9m0NxRQi0UHJQ4yYz3HQQfTYJkraaey4vWrkl982NKvxLE9yvcWTe6V12NAwTc8Opmz3DnQ4n5ZLhyCuG_2xUfbiA1" />                    <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="" style=" pointer-events: none;">永清 ，您好！</a></li>
                                <li class=""><a href="/">首頁</a></li>
                                <li class=""><a href="/Package">包裝管理</a></li>

                                <li class="dropdown ">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">資料管理<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a href="/Works">作品管理</a></li>
                                        <li class=""><a href="/Author">藝術家管理</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">系統管理<span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li class="active"><a href="/Account">帳號管理</a></li>
                                        <li class=""><a href="/Menu">標籤設定</a></li>
                                        <li class=""><a href="/Configure">系統參數管理</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:document.getElementById('logoutForm').submit()">登出</a></li>
                            </ul>
                    </div><!--/.nav-collapse -->
</form>            </div><!--/.container-fluid -->
        </nav>
        


<h2>帳號列表</h2>
<p>
    <a class="btn btn-success" href="/Account/Create">新增帳號</a>
</p>
<div class="form-group">
    <div class="col-md-2 col-xs-3 text-right">
        <input type="button" id="delete-btn" data-url="/Account/Delete" class="btn btn-danger pull-right fixed-top" value="刪除" style="visibility:hidden;">
    </div>
</div>
<table class="table">
    <tr>
        <th>
            <input type="checkbox" id="checkall" class="" />
        </th>
        <th>
            名稱
        </th>
        <th>
            帳號
        </th>
        <th>
            權限
        </th>
        <th>
            建立者
        </th>
        <th></th>
    </tr>

        <tr>

            <td>
                <input type="checkbox" id="11" class="delcheck" />
            </td>
            <td>
                永清
            </td>
            <td>
                ching03
            </td>
            <td>
                管理者
            </td>
            <td>
                user01
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/11">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="9" class="delcheck" />
            </td>
            <td>
                海平
            </td>
            <td>
                hpchang
            </td>
            <td>
                管理者
            </td>
            <td>
                柔吟
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/9">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="8" class="delcheck" />
            </td>
            <td>
                誼惠
            </td>
            <td>
                Claire
            </td>
            <td>
                操作者
            </td>
            <td>
                柔吟
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/8">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="7" class="delcheck" />
            </td>
            <td>
                user03
            </td>
            <td>
                user03
            </td>
            <td>
                操作者
            </td>
            <td>
                永清
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/7">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="6" class="delcheck" />
            </td>
            <td>
                gallery
            </td>
            <td>
                gallery
            </td>
            <td>
                操作者
            </td>
            <td>
                柔吟
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/6">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="4" class="delcheck" />
            </td>
            <td>
                永清
            </td>
            <td>
                ching
            </td>
            <td>
                管理者
            </td>
            <td>
                user01
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/4">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="2" class="delcheck" />
            </td>
            <td>
                柔吟
            </td>
            <td>
                stephanie
            </td>
            <td>
                管理者
            </td>
            <td>
                
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/2">編輯</a>
                </div>
            </td>
        </tr>
        <tr>

            <td>
                <input type="checkbox" id="1" class="delcheck" />
            </td>
            <td>
                最高管理者
            </td>
            <td>
                admin
            </td>
            <td>
                管理者
            </td>
            <td>
                
            </td>

            <td>
                <div>
                    <a href="/Account/Edit/1">編輯</a>
                </div>
            </td>
        </tr>

</table>


    </div>

    <script src="https://mgcube.eslitegallery.com//bundles/jquery?v=l_2JQLDpEf4NHz4ob7KHLjmeRFnOogKHIQKkMQQ4Chs1"></script>

    <script src="https://mgcube.eslitegallery.com//bundles/bootstrap?v=NVl-umhoN9elSrqFZrDUiy0O7UUXlUzSDxfB3gjTILg1"></script>

    <script src="https://mgcube.eslitegallery.com//bundles/eslite?v=VwqWLVqURnNx6GcXymuv7BEkLEZpvl2XcqOsevR0uDM1"></script>

    <script>
        $("form").submit(function (e) {
            $("#loadingeffect").show();
        });
    </script>
    
    <script src="/Scripts/deleteforlist.js"></script>

    
</body>
</html>
