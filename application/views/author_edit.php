
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯藝術家 - 誠品畫廊-魔術方塊</title>
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
        


<h2>編輯藝術家</h2>


<form action="/Author/Edit/186" method="post"><input name="__RequestVerificationToken" type="hidden" value="A5ZQisALwWeRu-Xa58xcHkGX3A-WmH5PWOmkfvwDD5Ed6pG-QjCW6fXFH7hhEE2YdNJl6R0of_eZj00qhrlxPZ7DFFcljUdTpkF6VIasrz01" />    <div class="form-horizontal">
        <h4></h4>
        <hr />
        

        <div class="form-group">
            <label class="control-label col-md-2" for="AuthorsCName">藝術家中文姓名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="AuthorsCName" name="AuthorsCName" type="text" value="張義雄" />
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
               <input id="AuthorsAreaNo_InputStringHide" name="AuthorsAreaNo_InputStringHide" type="hidden" value="7" />
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
                <input id="AuthorsTagNo_InputStringHide" name="AuthorsTagNo_InputStringHide" type="hidden" value="1" />
                <select class="js-example-basic-multiple js-states form-control" id="AuthorsTagNo_InputString" multiple="multiple" name="AuthorsTagNo_InputString"><option value="1">無</option>
<option value="2">國際牌</option>
<option value="3">巨星</option>
<option value="4">年輕人</option>
<option value="5">前輩級</option>
</select>
                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="WorksAmount" id="labWorksAmount">作品數量</label>
            <div class="col-md-10">
                
                <input class="form-control text-box single-line" data-val="true" data-val-number="The field 作品數量 must be a number." data-val-required="The 作品數量 field is required." id="WorksAmount" name="WorksAmount" type="number" value="0" />
                <span class="field-validation-valid text-danger" data-valmsg-for="WorksAmount" data-valmsg-replace="true" readonly="readonly"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="Rating" id="labAuthorRating">作品數量分級</label>
            <div class="col-md-10">
                <label class="control-label col-md-4 col-sm-6 col-xs-3" id="AuthorRating" style="text-align:center;"></label>
                
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="儲存" class="btn btn-primary" />
            </div>
        </div>
    </div>
</form>
<div>
    <a class="btn btn-warning" href="/Author">返回藝術家列表</a>
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
    
    <script src="https://mgcube.eslitegallery.com/bundles/jqueryval?v=WhRmI8vUVF186UwYB1zRP7-DwJzqpKlt0JksOBJvolw1"></script>

<script>
    $(".js-example-basic-multiple").select2({ width: '100%' });
    $.when($(".js-example-basic-multiple").select2()).then(function () {
        var oAreaNo = $('#AuthorsAreaNo_InputStringHide').val().split(',');
        for (var i = 0; i < oAreaNo.length; i++) {
            $('#AuthorsAreaNo_InputString  option[value="' + oAreaNo[i] + '"]').attr('selected', 'selected');
        }
        $("#AuthorsAreaNo_InputString").trigger("change");
    
        var oTagNo = $('#AuthorsTagNo_InputStringHide').val().split(',');
        for (var i = 0; i < oTagNo.length; i++) {
            $('#AuthorsTagNo_InputString  option[value="' + oTagNo[i] + '"]').attr('selected', 'selected');
        }
        $("#AuthorsTagNo_InputString").trigger("change");
    });
    $(function () {
        $('#my-best-friend').val('').trigger('change');

        });
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
        //var tooltiptemplate = '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner" style="background-color:white;color:black;border: 1px solid #ccc;border-radius: 4px;background-color: #f5f5f5;font-size: 10px;"></div></div>'
        //$(document).ready(function () {
        //    //$('#WorksAmount,#labWorksAmount').tooltip({ 'trigger': 'focus hover', html: true, template: tooltiptemplate, 'title': '作品等級=市場性(30%)+包裹性(10%)+藝術性(20%)+增值性(25%)+作者數量等級(15%)' });
        //    $('#AuthorRating,#labAuthorRating').tooltip({
        //        'trigger': 'focus hover', html: true, template: tooltiptemplate, 'title': '等級1：1~10件,等級2：11~20件<br/>等級3：21~30件, 等級4：31~40件<br/>等級5：41件以上<br/>作品等級=市場性(30 %)+ 包裹性(10 %)+ 藝術性(20 %)+ 增值性(25 %)+ <font color="red">作品數量分級(15%)</font>' });
            
        //});
</script>

    
</body>
</html>
