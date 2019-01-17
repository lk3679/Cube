
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 - 誠品畫廊-魔術方塊</title>
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
                    <a class="navbar-brand" href="/">
                        <img src="https://mgcube.eslitegallery.com//logo-welcome.png" alt="誠品畫廊" style="" />
                    </a>
                </div>
<form action="/Home/LogOff" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="7YPuSwyS9b6yN40RsDlyJG5WyN6cxGe_bKBfCj6HutX1lQRt5P_EUyd22n_o47Mc10doL2YG7E_QtWPQUAel3h8fHCiTYiaR8IwW3kj8M2M1" />                    <div id="navbar" class="navbar-collapse collapse">
                    </div><!--/.nav-collapse -->
</form>            </div><!--/.container-fluid -->
        </nav>
        


<div class="main-login main-center">
    
    <form class="form-horizontal" method="post">
        <input name="__RequestVerificationToken" type="hidden" value="ULJ80nAhKCXynMbRK-Jsp18dJcftsYr8sRsAiDK9Z5KrBbXhULSHl28EzXFIErYBqQiGR1uEUZRHYBebgV2Cu1fW7Rh2qRMe6iD3lKUXqT41" />
        <div class="row  panel-group" style="margin-top:20px;">

            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-lg-8 col-md-8 col-sm-10 col-xs-12  control-group" style="line-height: 60px;">
                <div class="row">
                    <div class="control-group">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1 col-lg-8 col-md-8 col-sm-10 col-xs-10 ">
                            <label class=" control-label" for="LoginAccount">帳號</label>
                            <input class="form-control" data-val="true" data-val-length="100字元" data-val-length-max="100" data-val-required="請輸入帳號" id="LoginAccount" name="LoginAccount" placeholder="請輸入帳號" type="text" value="" />
                            <span class="field-validation-valid validation-error text-danger" data-valmsg-for="LoginAccount" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="control-group">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1  col-xs-offset-1 col-lg-8 col-md-8 col-sm-10 col-xs-10 ">
                            <label class=" control-label" for="Password">密碼</label>
                            <input class="form-control" data-val="true" data-val-length="請輸入長度8-16的密碼" data-val-length-max="16" data-val-length-min="8" data-val-required="請輸入密碼" id="Password" name="Password" placeholder="請輸入長度8 - 16的密碼" type="password" />
                            <span class="field-validation-valid validation-error text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                        </div>

                    </div>
                </div>
                <input id="ErrorCount" name="ErrorCount" type="hidden" value="0" />
               
                
                <div data-valmsg-summary="true"></div>

                <div class="row text-right col-lg-10 col-md-10" >
                    <div class="btn-group">
                        
                        <input class="btn btn-primary btn-lg login-button text-justify btn-block" type="submit" value="登入" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

    </div>

    <script src="https://mgcube.eslitegallery.com//bundles/jquery?v=l_2JQLDpEf4NHz4ob7KHLjmeRFnOogKHIQKkMQQ4Chs1"></script>

    <script src="https://mgcube.eslitegallery.com//bundles/bootstrap?v=NVl-umhoN9elSrqFZrDUiy0O7UUXlUzSDxfB3gjTILg1"></script>

    <script src="https://mgcube.eslitegallery.com//bundles/eslite?v=VwqWLVqURnNx6GcXymuv7BEkLEZpvl2XcqOsevR0uDM1"></script>

    <script>
        $("form").submit(function (e) {
            $("#loadingeffect").show();
        });
    </script>
    
    <script>
        function ReLoadVerificationCode(item) {
            $.ajax({
                url: "../VerificationCode/VerificationCode",
                async: false,
                processData: false,
                contentType: false,
                dataType: "html",
                type: 'GET',
                success: function (data) {
                    item.src = data;
                },
            });
        }
        $(function () {
            ReLoadVerificationCode($(".base_validatecode")[0]);
            $("#reloadvalidatecode").bind("click", function () {
                ReLoadVerificationCode($(".base_validatecode")[0]);
            });
        })
    </script>

    
</body>
</html>
