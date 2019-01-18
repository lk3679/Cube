
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
        <?php $this->load->view('header'); ?>
        


<h2>帳號列表</h2>
<p>
    <a class="btn btn-success" href="/Cube/Account/Create">新增帳號</a>
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
 <?php foreach ($AccountList as $Account) { ?>
        <tr>

            <td>
                <input type="checkbox" id="11" class="delcheck" />
            </td>
            <td>
                <?php echo $Account["Name"]; ?>
            </td>
            <td>
                <?php echo $Account["UserAccount"]; ?>
            </td>
            <td>
                <?php echo $Account["RoleNo"]; ?>
            </td>
            <td>
                <?php echo $Account["CreateUser"]; ?>
            </td>

            <td>
                <div>
                    <a href="/Cube/Account/Edit/<?php echo $Account["UserAccountsNo"]; ?>">編輯</a>
                </div>
            </td>
        </tr>
        <?php
      }
        ?>

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
