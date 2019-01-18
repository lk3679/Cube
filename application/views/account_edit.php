
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯帳號 - 誠品畫廊-魔術方塊</title>
    <link rel='shortcut icon' href="/favicon.ico"/>
    <link href="https://mgcube.eslitegallery.com/Content/css?v=-JVsxZj3DuYpRnwgz7BLg9prCBpeMAmgU7hPvVWCxyc1" rel="stylesheet"/>

    <script src="https://mgcube.eslitegallery.com/bundles/modernizr?v=wBEWDufH_8Md-Pbioxomt90vm6tJN2Pyy9u9zHtWsPo1"></script>

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
        <?php $this->load->view('header'); ?>
        


<h2>編輯帳號</h2>

<form action="/Account/Edit/9" method="post"><input name="__RequestVerificationToken" type="hidden" value="g81gitM4EKp_BBmdALuS3cYLJcXHb7Wezo9zsLT9zaRCCNkeV91cIGKUEvuH9SpQxb_B3KUnJcLhtnqs-NvvqDtRhp0YRCAIqECL0hLXDrM1" />    <div class="form-horizontal">
        <h4></h4>
        <hr />
        
        <div class="form-group">
            <label class="control-label col-md-2" for="UserAccount">帳號</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="請輸入帳號" id="UserAccount" name="UserAccount" type="text" value="hpchang" />
                <span class="field-validation-valid text-danger" data-valmsg-for="UserAccount" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="Name">名稱</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="請輸入名稱" id="Name" name="Name" type="text" value="海平" />
                <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="Password">密碼</label>
            <div class="col-md-10">
                <input class="form-control" data-val="true" data-val-length="請輸入長度8-16的密碼" data-val-length-max="16" data-val-length-min="8" data-val-required="請輸入密碼" id="Password" name="Password" placeholder="請輸入長度8 - 16的密碼" type="password" value="nopwdnopwd" />
                
                <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="Password_Confirm">密碼確認</label>
            <div class="col-md-10">
                <input class="form-control" data-val="true" data-val-equalto="密碼與確認密碼不符" data-val-equalto-other="*.Password" data-val-required="請輸入密碼確認" id="Password_Confirm" name="Password_Confirm" placeholder="請再次輸入密碼" type="password" value="nopwdnopwd" />
                
                <span class="field-validation-valid text-danger" data-valmsg-for="Password_Confirm" data-valmsg-replace="true"></span>
            </div>
        </div>


        <div class="form-group" style="">
            <label class="control-label col-md-2" for="RoleNo">權限</label>
            <div class="col-md-10">
                <select class="form-control" data-val="true" data-val-number="The field 權限 must be a number." data-val-required="請選擇權限" id="RoleNo" name="RoleNo"><option selected="selected" value="1">管理者</option>
<option value="2">操作者</option>
</select>

                <span class="field-validation-valid text-danger" data-valmsg-for="RoleNo" data-valmsg-replace="true"></span>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="儲存" class="btn btn-default" />
            </div>
        </div>
    </div>
</form><div>
    <a class="btn btn-primary" href="/Cube/Account">回到帳號列表</a>
</div>

    </div>

    <script src="https://mgcube.eslitegallery.com/bundles/jquery?v=l_2JQLDpEf4NHz4ob7KHLjmeRFnOogKHIQKkMQQ4Chs1"></script>

    <script src="https://mgcube.eslitegallery.com/bundles/bootstrap?v=NVl-umhoN9elSrqFZrDUiy0O7UUXlUzSDxfB3gjTILg1"></script>

    <script src="https://mgcube.eslitegallery.com/bundles/eslite?v=VwqWLVqURnNx6GcXymuv7BEkLEZpvl2XcqOsevR0uDM1"></script>

    <script>
        $("form").submit(function (e) {
            $("#loadingeffect").show();
        });
    </script>
    
    
</body>
</html>
