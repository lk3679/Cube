
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>包裝列表 - 誠品畫廊-魔術方塊</title>
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
        


<h2>包裝列表</h2>

<p>
    <a class="btn btn-success" href="/Cube/Package/Create?Length=7">新增包裝</a>
</p>
<form action="/Cube/Package" method="post">    <div class="search wrapper">
        <div class="row form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-2">
                    包裝名稱
                </label>
                <div class="col-md-4">
                    <input type="text" name="PG_Name" class="form-control text-box single-line" />
                </div>
                <label class="control-label col-md-1">
                    排序
                </label>
                <?php $this->load->view("sort"); ?>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-xs-3 text-right">
                    <input type="button" id="delete-btn" data-url="/Package/Delete" class="btn btn-danger pull-right fixed-top" value="刪除" style="visibility:hidden;">
                </div>
                <div class="col-md-8  text-right">
                    <input type="submit" name="search-btn" class="btn btn-info" value="篩選" />
                </div>
            </div>
        </div>
    </div>
</form><table class="table">
    <tr>
        <th>
            <input type="checkbox" id="checkall" class="" />
        </th>
        <th>
            包裝名稱
        </th>
        <th>
            到期時間
        </th>
        
        <th>
            已選推薦
        </th>
        <th>
            建立者
        </th>
        <th></th>
    </tr>

            <tr>
                <td>
                    <input type="checkbox" id="3df1dbed-5050-4f42-9100-438c514a1d58" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2018102402
                </td>
                <td>
                    2018/10/31
                </td>
                
                <td>
                    0 (0)
                </td>
                <td>
                    永清
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/3df1dbed-5050-4f42-9100-438c514a1d58">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="7ce0f456-4160-45d6-bfd7-5d3de5a98637" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2018102401
                </td>
                <td>
                    2018/10/31
                </td>
                
                <td>
                    0 (0)
                </td>
                <td>
                    永清
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/7ce0f456-4160-45d6-bfd7-5d3de5a98637">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="5e42e347-82fb-41d2-a3c7-aee8e6886790" class="delcheck" />
                </td>
                <td>
                    顧福生
                </td>
                <td>
                    2018/08/09
                </td>
                
                <td>
                    0 (161)
                </td>
                <td>
                    柔吟
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/5e42e347-82fb-41d2-a3c7-aee8e6886790">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="70376d02-4be2-4f3a-aa3a-c3074d25b52b" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2018010201
                </td>
                <td>
                    2018/06/30
                </td>
                
                <td>
                    4 (67)
                </td>
                <td>
                    柔吟
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/70376d02-4be2-4f3a-aa3a-c3074d25b52b">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="477ea045-3df3-451a-99d1-538e4900bdd7" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2017123001
                </td>
                <td>
                    2018/01/06
                </td>
                
                <td>
                    0 (1047)
                </td>
                <td>
                    柔吟
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/477ea045-3df3-451a-99d1-538e4900bdd7">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="170d50b9-e6e2-4afa-a21b-7b1db1c8b41c" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2017092602
                </td>
                <td>
                    2017/10/03
                </td>
                
                <td>
                    0 (0)
                </td>
                <td>
                    永清
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/170d50b9-e6e2-4afa-a21b-7b1db1c8b41c">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="c1a34445-12da-45fc-8840-aa68d7239dd4" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2017092601
                </td>
                <td>
                    2017/10/03
                </td>
                
                <td>
                    0 (0)
                </td>
                <td>
                    永清
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/c1a34445-12da-45fc-8840-aa68d7239dd4">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="433b319d-9efe-4a12-ba25-050d127db037" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2017091201
                </td>
                <td>
                    2018/03/31
                </td>
                
                <td>
                    7 (125)
                </td>
                <td>
                    永清
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/433b319d-9efe-4a12-ba25-050d127db037">檢視</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="7f950983-b532-49ac-87d4-31018d491c62" class="delcheck" />
                </td>
                <td>
                    誠品畫廊推薦2017091202
                </td>
                <td>
                    2018/03/22
                </td>
                
                <td>
                    2 (5)
                </td>
                <td>
                    永清
                </td>
                <td>
                    <div>
                        <a href="/Package/Edit/7f950983-b532-49ac-87d4-31018d491c62">檢視</a>
                    </div>
                </td>
            </tr>
</table>
<div class="pull-right">
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
    
    <script src="/Scripts/deleteforlist.js"></script>

    
</body>
</html>
