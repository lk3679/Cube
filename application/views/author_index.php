
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>藝術家列表 - 誠品畫廊-魔術方塊</title>
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
        


<h2>藝術家列表</h2>

<p>
    <a class="btn btn-success" href="/Cube/Author/Create">新增藝術家</a>
</p>

<form action="/Author" method="post">    <div class="search wrapper">
        <div class="row form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-2">
                    藝術家姓名
                </label>
                <div class="col-md-4">
                    <input type="text" name="AuthorsCName" class="form-control text-box single-line" />
                </div>
                <label class="control-label col-md-1">
                    排序
                </label>
                <?php $this->load->view("sort"); ?>

            </div>
            <div class="form-group">
                <div class="col-md-2 col-xs-3 text-right">
                    <input type="button" id="delete-btn" data-url="/Author/Delete" class="btn btn-danger pull-right fixed-top" value="刪除" style="visibility:hidden;">
                </div>
                <div class=" col-md-8 text-right">
                    <input type="submit" name="search-btn" class="btn btn-info" value="篩選" />
                </div>
            </div>
        </div>
    </div>
</form>
<table class="table">
    <tr>
        <th>
            <input type="checkbox" id="checkall" class="" />
        </th>
        <th>
            藝術家中文姓名
        </th>
        <th>
            藝術家外文姓名
        </th>
        <th>
            建立者
        </th>
        <th></th>
    </tr>
<?php foreach ($AuthorList as $Author) { ?>
    <tr>
        <td>
            <input type="checkbox" id="187" class="delcheck" />
        </td>
        <td>
            <?php echo $Author["AuthorsCName"]; ?>
        </td>
        <td>
             <?php echo $Author["AuthorsEName"]; ?>
        </td>
        <td>
             <?php echo $Author["CreateUser"]; ?>
        </td>
        <td>
            <div>
                <a href="/Cube/Author/Edit/<?php echo $Author["AuthorsNo"]; ?>">編輯</a>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>
<div class="pull-right">
        <a href="/Author?p=1">後9筆 </a></div>

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
