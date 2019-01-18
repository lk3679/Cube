
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選項維護 - 誠品畫廊-魔術方塊</title>
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
        


<h2>標籤設定</h2>

<form action="/Menu" method="post">    <div class="form-group">

        <div class="col-md-offset-1 col-md-10">
            <label class="control-label">標籤類別</label><select class="form-control" id="MenuClass" name="MenuClass"><option value="AuthorArea">藝術家區域</option>
<option value="AuthorTag">藝術家標籤</option>
<option value="CountNoun">量詞</option>
<option value="Genre">作品類型</option>
<option value="Material">作品組件媒材</option>
<option value="Owner">作品所有人</option>
<option value="Style">作品風格</option>
<option value="WareType">作品庫別</option>
</select>
        </div>
    </div>
    <div class="form-group">

        <div class="col-md-offset-1 col-md-10">
            <label class="control-label">標籤名稱</label><input class="form-control" id="MenuName" name="MenuName" />
        </div>
    </div>
    <br /><br />
    <div class="form-group">
        <div class="col-md-offset-5 col-md-7">
            <input type="hidden" id="whosubmit" name="whosubmit" />
            <input type="hidden" id="MenuNo" name="MenuNo" />
            <br />
            <input type="submit" value="儲存" class="btn btn-primary" id="btnSave" style="display:none"/>
            <input type="submit" value="取消" class="btn btn-warning" id="btnCancel" style="display:none"/>
            <input type="submit" value="新增" class="btn btn-success" id="btnaddnew"  />
            <input type="submit" value="查詢" class="btn btn-info" id="btnsearch"  />

        </div>
    </div><br /><br />
</form><div class="col-md-offset-1 col-md-10 MenuTags" style="margin-top: 20px;">
        <span data-class="AuthorArea" data-no="1" class="tag label label-default MenuName">無　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="2" class="tag label label-default MenuName">東南亞　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="3" class="tag label label-default MenuName">美洲　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="4" class="tag label label-default MenuName">東亞　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="5" class="tag label label-default MenuName">海外華人　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="6" class="tag label label-default MenuName">大陸　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="7" class="tag label label-default MenuName">台灣　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="8" class="tag label label-default MenuName">歐洲　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
        <span data-class="AuthorArea" data-no="9" class="tag label label-default MenuName">華人　<i class="fa fa-times fa-2x del" aria-hidden="true"></i></span>
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
        $(function () {
            $("#btnSave").hide();
            $("#btnCancel").hide();
            $("#btnaddnew,#btnsearch,#btnCancel,#btnSave").on("click", function (e) {
                $("#whosubmit").val(this.id);
            });
            $(".MenuTags .del").on("click", function (e) {
                e.stopPropagation();
                if (confirm("確定刪除?")) {
                    $("#whosubmit").val("btndel");
                }
                $("#MenuNo").val($($(this).parent()).data("no"));
                $("form").submit();
            });

            $(".MenuTags .MenuName").on("click", function (e) {
                
                e.stopPropagation();
                $(".MenuTags .MenuName").removeClass("act");
                $(this).addClass("act");
                $("#MenuName").val($(this).text().replace("　", ""));
                $("#MenuNo").val($(this).data("no"));
                $("#MenuClass").val($(this).data("class"));
                $(".MenuTags").show();
                $("#btnSave").show();
                $("#btnCancel").show();
                $("#btnaddnew").hide();
                $("#btnsearch").hide();
                //$(this).text().replace("　","")
                //$(this).data("no")
                //$(this).data("class")
            });
            $("#MenuClass").on("change", function () {
                $("form").submit();
            });

            $("#btnCancel").on("click", function () {
                $(".MenuTags").show();
                $("#btnSave").hide();
                $("#btnCancel").hide();
                $("#btnaddnew").show();
                $("#btnsearch").show();
                $("#MenuName").val();
            });
            $("form").on("submit", function () {
                if ($("input[type=submit][id='btnSave']:visible").length>0)
                {
                    if ($("#whosubmit").val().length == 0)
                    {
                        $("#whosubmit").val('btnSave');
                    }
                    
                }
                if ($("[id='btnaddnew']:visible,[id='btnsearch']:visible").length > 0)
                {
                    if ($("#whosubmit").val().length == 0)
                    {
                        $("#whosubmit").val('btnsearch');
                    }
                    

                }
            });
        });
    </script>

    
</body>
</html>
