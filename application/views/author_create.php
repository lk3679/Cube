
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增藝術家 - 誠品畫廊-魔術方塊</title>
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
        


<h2>新增藝術家</h2>
<div class="col-xs-12" style="margin-bottom: 15px; padding-right: 0;">
    <a class="btn btn-warning pull-right" href="/Author">返回藝術家列表</a>
</div>
<h4 >
</h4>
<form action="/Author/Create" method="post"><input name="__RequestVerificationToken" type="hidden" value="WfZvks3Uyw1oMK6pPLStxa752qdfIYMRKPcm1wV_3CY7XwIpPHrVSOdKg8tIs2XsakyzpHHs2YfGAgY351BtWD0JUl5i-jP414FvEDDm0yQ1" />    <div class="form-horizontal">
        

        <div class="form-group">
            <label class="control-label col-md-2" for="AuthorsCName">藝術家中文姓名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="AuthorsCName" name="AuthorsCName" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="AuthorsCName" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="AuthorsEName">藝術家外文姓名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="AuthorsEName" name="AuthorsEName" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="AuthorsEName" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="AuthorsPropArea">藝術家區域</label>
            <div class="col-md-10">

                <select class="js-example-basic-multiple js-states form-control" id="AuthorsAreaNo_InputString" multiple="multiple" name="AuthorsAreaNo_InputString"><option value="1">無</option>
                <option value="2">東南亞</option>
                <option value="3">美洲</option>
                <option value="4">東亞</option>
                <option value="5">海外華人</option>
                <option value="6">大陸</option>
                <option value="7">台灣</option>
                <option value="8">歐洲</option>
                <option value="9">華人</option>
                </select>

                <span class="field-validation-valid text-danger" data-valmsg-for="AuthorsPropArea" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="AuthorsPropTag">藝術家標籤</label>
            <div class="col-md-10">
                <select class="js-example-basic-multiple js-states form-control" id="AuthorsTagNo_InputString" multiple="multiple" name="AuthorsTagNo_InputString">
                <option value="1">無</option>
                <option value="2">國際牌</option>
                <option value="3">巨星</option>
                <option value="4">年輕人</option>
                <option value="5">前輩級</option>
                </select>
                
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-xs-4 pull-right text-right">
                <input type="submit" value="儲存" class="btn btn-primary" />
            </div>
        </div>
    </div>
</form>



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

<script>
    $(".js-example-basic-multiple").select2({ width: '100%' });

        $(document).on('click', 'i.fa', function () {
            var p = $(this).parent().parent();
            $(p).hide();
            $(p).find('input').attr('value', '-1');
        });
        $("form").submit(function (e) {
            $('label.error').hide();
            if ($('#WorksModuleList tr:visible').length == 1) {
                $('label.error').show();
                $("#loadingeffect").hide();
                return false;
            }

        });
</script>

    
</body>
</html>
