
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>系統參數維護 - 誠品畫廊-魔術方塊</title>
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
        


<h2>系統參數維護</h2>

<form action="/Configure/Edit" method="post"><input name="__RequestVerificationToken" type="hidden" value="6yg00d3vrRO2E3V5rSQMSE8idAOXCiBWtz_GI5sBTfTm_vENRgSQ8snLRCpP6f5YvFqztn7LP41fEWonOVvcdY3tjzIfRDUNToElCgolkpQ1" />    <div class="form-horizontal">
        <h4></h4>
        <hr />
        
        <div class="form-group">
            <div class="col-md-12">
                <label class="" for="EmptyContent">無包裝內容時要顯示的內文</label><br />
                <textarea cols="20" data-val="true" data-val-required="無包裝內容時要顯示的內文" htmlAttributes="{ class = form-control }" id="EmptyContent" name="EmptyContent" rows="2">
&lt;p&gt;很抱歉，目前無內容可瀏覽。&lt;/p&gt;
</textarea>
                <span class="field-validation-valid text-danger" data-valmsg-for="EmptyContent" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label class="" for="ErrorContent">發生錯時時要顯示的內文</label><br />
                <textarea cols="20" data-val="true" data-val-required="發生錯時時要顯示的內文" htmlAttributes="{ class = form-control }" id="ErrorContent" name="ErrorContent" rows="2">
&lt;p&gt;很抱歉，目前系統有異常，會盡速修復。&lt;/p&gt;
</textarea>
                <span class="field-validation-valid text-danger" data-valmsg-for="ErrorContent" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="" for="OverDayContent">過期時要顯示的內文</label><br />
                <textarea cols="20" data-val="true" data-val-required="過期時要顯示的內文" htmlAttributes="{ class = form-control }" id="OverDayContent" name="OverDayContent" rows="2">
&lt;p&gt;很抱歉，您欲瀏覽的內容已到期。&lt;/p&gt;
</textarea>
                <span class="field-validation-valid text-danger" data-valmsg-for="OverDayContent" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">            
            <div class="col-xs-6">
                <label class="" for="OpenDays">包裝預設開放的天數</label><br />
                <input class="form-control text-box single-line" data-val="true" data-val-required="包裝預設開放的天數" id="OpenDays" name="OpenDays" type="text" value="7" />
                <span class="field-validation-valid text-danger" data-valmsg-for="OpenDays" data-valmsg-replace="true"></span>
            </div>
            <div class=" col-xs-6 text-right">
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
    
<script src="https://mgcube.eslitegallery.com/Scripts/ckeditor/ckeditor.js"></script>
<script src="https://mgcube.eslitegallery.com/Scripts/ckeditor/config.js"></script>
<script src="https://mgcube.eslitegallery.com/Scripts/ckeditor/adapters/jquery.js"></script>
    <script>
        CKEDITOR.replace('EmptyContent');
        CKEDITOR.replace('ErrorContent');
        CKEDITOR.replace('OverDayContent');
    </script>

    
</body>
</html>
