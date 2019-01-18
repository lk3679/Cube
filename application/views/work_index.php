
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作品列表 - 誠品畫廊-魔術方塊</title>
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
        
        


<h2>作品列表</h2>
<p>
    <a class="btn btn-success" href="/Works/Create">新增作品</a>
</p>

<form action="/Works" method="post">    <div class="search wrapper">
        <div class="row form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-2">
                    藝術家
                </label>
                <div class="col-md-4">
                    <select class="js-example-basic-multiple js-states form-control" id="AuthorNoList" multiple="multiple" name="AuthorNoList">
                        <?php foreach ($AuthorList as $Author) { ?>
                        <option value="<?php echo $Author["AuthorsNo"]; ?>"><?php echo $Author["AuthorsCName"]; ?></option>
                        <?php } ?>
                    </select>
                    <input type="hidden" name="AuthorNo_InputStringHide" id="AuthorNo_InputStringHide" value="" />
                </div>
                <label class="control-label col-md-1">
                    定價
                </label>
                <div class="col-md-3" style="padding:0;">
                    <div class="col-xs-6">
                        <span class="numberprice">
                            <input type="text" class="form-control text-box single-line" />
                            <input type="number" name="MinePrice" class="form-control text-box single-line" value="" />
                        </span>
                    </div>
                    <div class="col-xs-6">
                        <span class="numberprice">
                            <input type="text" class="form-control text-box single-line" />
                            <input type="number" name="MaxPrice" class="form-control text-box single-line" value="" />
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">
                    作品名稱
                </label>
                <div class="col-md-4">
                    <input type="text" name="WorksName" class="form-control text-box single-line" value="" />
                </div>
                <label class="control-label col-md-1">
                    排序
                </label>
               <?php $this->load->view("sort"); ?>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-xs-3 text-right">
                    <input type="button" id="delete-btn" data-url="/Works/Delete" class="btn btn-danger pull-right fixed-top" value="刪除" style="visibility:hidden;">
                </div>
                <div class=" col-md-8 text-right">
                    <input type="submit" name="search-btn" class="btn btn-info" value="篩選" />
                </div>
            </div>

        </div>
    </div>
</form>
<table class="table ">

    <tr>
        <th>
            <input type="checkbox" id="checkall" class="" />
        </th>
        <th class="col-md-5">
            作品名稱
        </th>
        <th class="col-md-1">
            藝術家
        </th>
        <th class="col-md-1">
            作品年代
        </th>
        <th class="col-md-2">
            材質
        </th>
        <th class="col-md-1">
            定價
        </th>
        <th class="col-md-2"></th>
    </tr>
    <?php foreach ($WorkList as $Work) { ?>
            <tr>
                <td class="">
                    <input type="checkbox" id="7f4d34db-9eb1-4bce-9e14-a8b946b077c9" class="delcheck" />
                </td>
                <td class="col-md-5">
                    <?php echo $Work["WorksName"] ?>
                </td>
                <td class="col-md-1">
                    <?php echo $Work["AuthorsCName"] ?>
                </td>
                <td class="col-md-1">
                    <?php if($Work["YearStart"]!=$Work["YearEnd"]){ ?>
                    <?php echo $Work["YearStart"] ?>~<?php echo $Work["YearEnd"] ?>
                    <?php }else{ ?>
                    <?php echo $Work["YearStart"] ?>
                    <?php } ?>
                </td>
                <td class="col-md-2">
                    <?php echo $Work["MaterialName"] ?>
                </td>
                <td class="col-md-1">
                    
                    <?php echo $Work["Price"] ?>
                </td>
                <td class="col-md-2">
                    <div>
                        <a href="/Cube/Works/Edit/<?php echo $Work["WorksNo"] ?>">編輯</a> |
                        <a href="/Cube/Works/Details/<?php echo $Work["WorksNo"] ?>">介紹</a> |
                        <a href="/Cube/Files/Edit/<?php echo $Work["WorksNo"] ?>">編輯圖片</a>
                    </div>
                </td>
            </tr>
           <?php } ?>

</table>
<div class="pull-right">
        <a href="/Works?p=1">後9筆 </a></div>

    </div>

    <script src="https://mgcube.eslitegallery.com/bundles/jquery?v=l_2JQLDpEf4NHz4ob7KHLjmeRFnOogKHIQKkMQQ4Chs1"></script>

    <script src="https://mgcube.eslitegallery.com/bundles/bootstrap?v=NVl-umhoN9elSrqFZrDUiy0O7UUXlUzSDxfB3gjTILg1"></script>

    <script src="https://mgcube.eslitegallery.com/bundles/eslite?v=VwqWLVqURnNx6GcXymuv7BEkLEZpvl2XcqOsevR0uDM1"></script>

    <script>
        $("form").submit(function (e) {
            $("#loadingeffect").show();
        });
    </script>
    
    <script src="https://mgcube.eslitegallery.com/bundles/jqueryval?v=WhRmI8vUVF186UwYB1zRP7-DwJzqpKlt0JksOBJvolw1"></script>

    <script src="https://mgcube.eslitegallery.com/Scripts/deleteforlist.js"></script>
    <script src="https://mgcube.eslitegallery.com/Scripts/numberprice.js"></script>
    <script>
        $.when($(".js-example-basic-multiple").select2({ width: '100%' })).then(function () {
            var oAuthorNo = $('#AuthorNo_InputStringHide').val().split(',');
            for (var i = 0; i < oAuthorNo.length; i++) {
                $('#AuthorNoList  option[value="' + oAuthorNo[i] + '"]').attr('selected', 'selected');
            }
            $("#AuthorNoList").trigger("change");
            
        });
    </script>


    
</body>
</html>
