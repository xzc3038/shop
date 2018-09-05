
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sign In</title>

    <meta charset="UTF-8" data-lang="en">

    <meta name='description' content="SheIn.com is mainly design and produce fashion clothing for women all over the world for about 5 years. Shop for latest women's fashion dresses, tops, bottoms. High Quality with affordable prices.">


    <meta name='keywords' content='Women Fast Fashion Online'>


    <meta name="msvalidate.01" content="C3641341061BBCB55AFB8927488AED35" />

    <!-- Standard iPad -->
    <link rel="apple-touch-icon" sizes="72x72" href="//sheinsz.ltwebstatic.com/she_dist/images/touch-icon-ipad-72-452a7213ef.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="//sheinsz.ltwebstatic.com/she_dist/images/touch-icon-ipad-120-601ddff8b5.png" />
    <!-- Retina iPad -->
    <link rel="apple-touch-icon" sizes="144x144" href="//sheinsz.ltwebstatic.com/she_dist/images/touch-icon-ipad-144-47ceee2d97.png" />
    <!-- 引入样式文件 -->
    <!-- 全局样式ar分开打包 -->

    <link rel="stylesheet" type="text/css" href="//sheinsz.ltwebstatic.com/she_dist/css/shein-8c4dc9970b.css">


    <!-- 多语言样式 -->

    <link rel="stylesheet" type="text/css" href="//sheinsz.ltwebstatic.com/she_dist/theme/www/www-8f8a1b3b91.css">




    <link rel="stylesheet" type="text/css" href="//sheinsz.ltwebstatic.com/she_dist/css/my_account-40965696bb.css">


    <meta property="fb:app_id" content="405259832822346" />
    <script>
        var PageGroup = '登录注册页'
        var PageGroupOverview = '购物流程'
    </script>

    <script>
        function GB_ga_getCookie(objName){/*获取指定名称的cookie的值*/
            var arrStr = document.cookie.split("; ");
            for(var i = 0;i < arrStr.length;i ++){
                var temp = arrStr[i].split("=");
                if(temp[0] == objName) return unescape(temp[1]);}
        }
        var GA_countrys=["GB","US","AU","FR","IT","ES","DE","IN","RU","QA","AE","OM","SA","KW","BH","IL","TH","ID","NL","HK","TR","VN","BR","MX","TW","CA","CN", "CA", "SE"];
        var GB_Shein_Cty = GB_ga_getCookie("country");
        if(!GB_Shein_Cty || GA_countrys.indexOf(GB_Shein_Cty||GB_Shein_Cty.toUpperCase())>-1){
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        }else{
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                /*a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)*/
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        }


        var _gaGetQueryString = function(name) {
            //get url query params
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        }

        var GB_ga_currentRate = Number('1') || 1
        var GB_ga_transformPrice = function(val) {
            if(GB_ga_currentRate) {
                return (val/GB_ga_currentRate).toFixed(2)
            } else {
                return val
            }
        }

        function GBGaSend(params) {
            var payload = ['shein.send', 'event']
            for (var key in params) {
                if (typeof params[key] !== 'undefined') {
                    payload.push(params[key])
                }
            }
            ga.apply(null, payload)
        }


        var PageGroup = PageGroup || 'other';
        var PageGroupOverview = PageGroupOverview || 'other';
        var PageGroupEmarsys = PageGroupEmarsys || 'other';
        ;
        ~ function () {
            var matched = document.cookie.match(/rw_gap_id=(\S+)(?:(?:;\s)|$)/) || '';
            var userID = window.analysisUserId = matched && matched[1];

            ga('create', 'UA-22263122-1', 'auto', {'userId': userID, 'name':'shein'});

            ga('require', 'linkid', 'linkid.js');



            ga('shein.set', 'allowAdFeatures', false);//关闭欧盟国家广告报告
            ga('shein.set', 'displayFeaturesTask', null);


            ga('shein.require', 'ec');
            ga('shein.set', 'contentGroup1', PageGroupOverview);
            if("undefined" != typeof PageGroup) {
                ga('shein.set', 'contentGroup2', PageGroup);
            }

            ga(function() {
                var clientID = ga.getByName('shein').get('clientId');
                ga('shein.set', 'dimension1', clientID);
            });

            ga('shein.set', 'dimension2', userID);

            // ga分流维度 上传type_id


            // abt info


            if(_gaGetQueryString('ici')) {
                ga('shein.set', 'dimension7', _gaGetQueryString('ici'));
            }

            ga('shein.send', 'pageview');
        }()

        var ScarabQueue = ScarabQueue || [];
        (function (subdomain, id) {
            var lang = {
                en: '14AEFABFF6C30DEA',
                fr: '19DB2374A86E66CB',
                de: '1BBEDD499A9531EB',
                es: '1D243573F433C16B',
                uk: '168D45E4CC9D9A30',
                ar: '12772D590FB8B485',
                au: '10ECBA3DB5F814A5',
                in: '17BB651AD5A11623',
                us: '15306811EE8118BB',
                nl: '14AEFABFF6C30DEA',
                mx: '14AEFABFF6C30DEA',
                it: '1D243573F433C16B'
            }['en'] || '14AEFABFF6C30DEA'
            if (document.getElementById(id)) return;
            var js = document.createElement('script');
            js.id = id;
            js.async = 1;
            js.src = subdomain + '.scarabresearch.com/js/'+ lang +'/scarab-v2.js';
            var fs = document.getElementsByTagName('script')[0];
            fs.parentNode.insertBefore(js, fs);
        })('https:' == document.location.protocol ? 'https://recommender' : 'http://cdn', 'scarab-js-api');
    </script>

    <!-- Google-账户转化代码 -->





    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
            {'gtm.start': new Date().getTime(),event:'gtm.js'}
        );var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P3BRQW');</script>
    <!-- End Google Tag Manager -->



    <script type="text/javascript" src="//sheinsz.ltwebstatic.com/she_dist/libs/jquery/jquery.min.js"></script>
    <script src="//sheinsz.ltwebstatic.com/she_dist/libs/swiper/swiper.jquery.min.js"></script>
    <script>
        (function(){
            if (window.BOOMR && window.BOOMR.version) { return; }
            var dom,doc,where,iframe = document.createElement("iframe"),win = window;
            function boomerangSaveLoadTime(e) {
                win.BOOMR_onload=(e && e.timeStamp) || new Date().getTime();
            }
            if (win.addEventListener) {
                win.addEventListener("load", boomerangSaveLoadTime, false);
            } else if (win.attachEvent) {
                win.attachEvent("onload", boomerangSaveLoadTime);
            }
            iframe.src = "javascript:void(0)";
            iframe.title = ""; iframe.role = "presentation";
            (iframe.frameElement || iframe).style.cssText = "width:0;height:0;border:0;display:none;";
            where = document.getElementsByTagName("script")[0];
            where.parentNode.insertBefore(iframe, where);
            try {
                doc = iframe.contentWindow.document;
            } catch(e) {
                dom = document.domain;
                iframe.src="javascript:var d=document.open();d.domain='"+dom+"';void(0);";
                doc = iframe.contentWindow.document;
            }
            doc.open()._l = function() {
                var js = this.createElement("script");
                if (dom) { this.domain = dom; }
                js.id = "boomr-if-as";
                js.src = "https://c.go-mpulse.net/boomerang/" +
                    "8ZEGE-KMN5J-AGKAM-B9XQ8-RAMBZ";
                BOOMR_lstart=new Date().getTime();
                this.body.appendChild(js);
            };
            doc.write('<body onload="document._l();">');
            doc.close();
        })();
    </script></head>
<body lang="en">
<script>
    // 服务器输出的全局变量
    var gbCommonInfo = {
        lang: 'en',
        langPath: '',
        PUBLIC_CDN: '//sheinsz.ltwebstatic.com',
        GB_cssRight: false,
        currency: 'USD',
        keywords: "",
        language: {
            header_search_shein: "Search SHEIN",
            header_keyword: "Please enter a keyword !",
            cancel: "Cancel",
            lang_goods_shop_the_look: "SHOP THE LOOK",
            lang_goods_stock: "In Stock",
            lang_goods_out_ofstock: "Out of Stock",
            lang_categoryt_off: "off",
            lang_goods_word_color: "Color",
            lang_goods_size_size1: "Size",
            lang_goods_reference: "size guide",
            lang_goods_please_select_size: "Please Select Size",
            lang_goods_quantity: "Qty",
            lang_goods_only: "Only",
            lang_goods_left: "left",
            lang_goods_total: "Total ",
            lang_goods_earn: "Earn",
            lang_goods_points: "SheIn Points ",
            lang_goods_out: "Sold Out",
            lang_goods_only_one: "purchase limit exceeded",
            lang_goods_out_stock: "out of stock",
            goods_limit_buy: "Max Qty allowed for this limited product is {0}.",
            lang_goods_wishlist: "wishlist",
            lang_goods_viewfulldetails: "View Full Details",
            lang_goods_reference: "size guide",
            add_to_bag: "Add To Bag",
            added: "ADDED!",
            lang_member_wallet_failed: "Failed",
            lang_goods_size_size: "Size",
            lang_goods_years: "Years",
            lang_goods_height: "Height:",
            lang_member_height: "height",
            lang_member_how_to_measure: "How to measure",
            lang_member_chart_explain: "This size chart is for reference purposes only. Note that sizing will vary between brands.",
            lang_member_foot_length: "Length",
            lang_member_shoe_explain: "Not all shoe selections will carry all sizes.",
            lang_member_bust: "Bust",
            lang_member_breaste: "Measure under your arms around the fullest part of your bust. Make sure to keep the tape level!",
            lang_member_waist: "Waist",
            lang_member_natural: "Make sure the measuring tape fits comfortably as you measure around the narrowest part of your natural waist.",
            lang_member_hips: "Hips",
            lang_member_fullest: "Stand with your feet together, and measure around the widest part of your hips.",
            slash_tips: "<em>&#8243;/&#8243;:</em> refers to the the front & back length of the clothes. ",
            dash_tips: "<em>&#8243;&nbsp;-&nbsp;&#8243;:&nbsp;</em> refers to the elastic range of the clothes.",
            lang_goods_limit_tip: "Limited to purchasing &lt;span class=&#39;red&#39;&gt;{0}&lt;/span&gt; only!",
        }
    }
</script>

<script type="text/javascript">
    /*定义服务器端模版输出多个页面使用的全局变量*/

    var She_w_host="https://www.shein.com";
    var She_w_lang="en";
    var She_w_langPath="";
    var She_w_SiteUID="www";
</script>


<script type="text/javascript">
    ;+function(){
        var getQueryString = function(name) {
            //get url query params
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        }

        var setCookie = function(name, val, expires, domain) {
            /*setCookie start*/
            var __CurrentMainDomain__ = (function () {
                var hostnameArray = location.hostname.split('.');
                return "." + hostnameArray.slice(-2).join('.');
            })();

            //domain = domain || __CurrentMainDomain__;
            var text = String(encodeURIComponent(val));
            var  date = new Date();
            date.setTime(date.getTime() + Number(expires)*1000);
            text += '; expires=' + date.toUTCString();
            // domain
            text += '; path=/';
            if (typeof (domain) != "undefined" && domain != "") {
                text += '; domain='+__CurrentMainDomain__;
            }

            document.cookie = name + '=' + text;
        }

        var getCookie = function(objName) {
            var arrStr = document.cookie.split("; ");
            for (var i = 0; i < arrStr.length; i++) {
                var temp = arrStr[i].split("=");
                if (temp[0] == objName) {
                    return decodeURIComponent(temp[1])
                }
            }
        }

        var href = document.location.href
        var orid = getCookie("originOtherId");
        if(!orid && href.indexOf('url_from') > -1 || href.indexOf('utm_source') > -1) {
            var date=new Date();
            var expireDays=30;
            date.setTime(date.getTime()+expireDays*24*3600*1000);
            var url = '/getOriginOtherIdFromUrl?urlcurrent='+encodeURIComponent(href)
            var xhr = new XMLHttpRequest
            xhr.open('GET', url)
            xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
            xhr.onload = function() {
                if(xhr.status === 200){
                    var data = JSON.parse(xhr.responseText)
                    if(data.code == 0 && data.info !=null) {
                        document.cookie = 'originOtherId='+data.info+';expires='+date.toGMTString();
                    }
                }
            }
            xhr.send()

            if(getQueryString('utm_source') == 'mopubi.com') {
                (href.indexOf('oid') > -1) && setCookie('utm_oid', getQueryString('oid'));
                (href.indexOf('rqid') > -1) && setCookie('utm_rqid', getQueryString('rqid'));
                // admitad于mopubi互斥
                (href.indexOf('oid') > -1) && (href.indexOf('rqid') > -1) && (getCookie('admitad_uid') != undefined) && setCookie('admitad_uid', null, -1);
            }
        }


        var _cjevent = getQueryString('cjevent');
        if(getQueryString('ref') == 'cj' || getQueryString('SASSource') == 'cjunction') {
            setCookie('ref_cj', 1);
            if(_cjevent != null && _cjevent.trim()) {
                setCookie('cjevent', _cjevent);
            }else{
                setCookie('cjevent', null, -1);
            }
        } else if(getQueryString('source') == 'webgains' || getQueryString('utm_source') == 'shareasale.com') {
            setCookie('ref_cj', null, -1);
        }

    }()
</script>
<script>
    function transformImg(img, no_akamai) {
        var img = img || '';
        img = img.replace('http:', '').replace('https:', '')
        img = /^\/\/.*/.test(img) ? img : '//img.shein.com/' + img
        if (!no_akamai) {
            if (('en'=='au'||'en'=='us') && img.indexOf('//img.ltwebstatic.com/images2_pi/') != -1) {
                img = img.replace('//img.ltwebstatic.com/', '//img.ltwebstatic.com/origin/').replace('_thumbnail_', '_im_')
            }
            if (('en'=='au'||'en'=='us') && img.indexOf('//img.shein.com/') != -1) {
                img = img.replace('_thumbnail_', '_im_')
            }
        }
        return img
    }

    function percentNum(val, symbol) {
        if(val) {
            var _symbol = symbol ? symbol : '%'
            return 'false' == true ? _symbol + val : val + _symbol
        } else {
            return val
        }
    }
    function GB_SHEIN_transform_webp_img(img, no_transform) {
        var transed_img = no_transform ? img : transformImg(img)
        return !(('en'=='au'||'en'=='us') && transed_img.indexOf('//img.shein.com/') != -1) &&
        !(('en'=='au'||'en'=='us') && transed_img.indexOf('//img.ltwebstatic.com/origin/images2_pi/') != -1) &&
        (transed_img.indexOf('//img.ltwebstatic.com') !== -1 || transed_img.indexOf('//img.romwe.com') !== -1) ?
            transed_img.replace(/\b(.jpg|.png)\b/, ".webp") :
            transed_img;
    }

    var GB_SHEIN_support_webp = -1; // -1: 未请求完, 1: 支持, 0: 不支持
    function GB_SHEIN_check_webp_feature(feature, callback) {
        if (GB_SHEIN_support_webp === -1) {
            var kTestImages = {
                lossy: "UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA",
                lossless: "UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==",
                alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
                animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
            };
            var img = new Image();
            img.onload = function () {
                var result = (img.width > 0) && (img.height > 0);
                GB_SHEIN_support_webp = 1;
                callback(feature, result);
            };
            img.onerror = function () {
                GB_SHEIN_support_webp = 0;
                callback(feature, false);
            };
            img.src = "data:image/webp;base64," + kTestImages[feature];
        } else {
            if (GB_SHEIN_support_webp === 1) {
                callback(feature, true);
            } else if (GB_SHEIN_support_webp === 0) {
                callback(feature, false);
            }
        }
    }
    GB_SHEIN_check_webp_feature('lossless', function() {})

    function GB_SHEIN_pre_load_images(imgArr, callback) {
        var imgObjs = [];
        for (var i=0; i<imgArr.length; i++){
            imgObjs[i]=new Image();
            imgObjs[i].src=imgArr[i];
            imgObjs[i].onload=function(){
                callback();
            }
            imgObjs[i].onerror=function(){
                callback();
            }
        }
    }

    function GB_SHEIN_load_script(url, callback) {
        var script = document.createElement ("script")
        script.type = "text/javascript";

        if (script.readyState){ //IE
            script.onreadystatechange = function(){
                if (script.readyState == "loaded" || script.readyState == "complete"){
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else { //Others
            script.onload = function(){
                callback();
            };
        }
        script.src = url;
        document.getElementsByTagName("head")[0].appendChild(script);
    }

    /*
  *price:沒有格式的本地价格
  *currencyTitle:币种 比如：'EUR', 'RUB', 'TRY', 'VND',传了可以不传currency
  *currency:货币对象，传了可以不传currencyTitle
  */
    var GB_transform_price_symbol = (function(){
        var formatConfig = {
            'USD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'EUR':{'decimalPlace':2,'decimalPoint':',','thousandPoint':'.'},
            'GBP':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'RUB':{'decimalPlace':0,'decimalPoint':'','thousandPoint':' '},
            'INR':{'decimalPlace':0,'decimalPoint':'','thousandPoint':','},
            'AUD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'MXN':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'TWD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'ILS':{'decimalPlace':0,'decimalPoint':'','thousandPoint':','},
            'HKD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'IDR':{'decimalPlace':0,'decimalPoint':'','thousandPoint':'.'},
            'THB':{'decimalPlace':0,'decimalPoint':'','thousandPoint':','},
            'VND':{'decimalPlace':0,'decimalPoint':'','thousandPoint':'.'},
            'TRY':{'decimalPlace':2,'decimalPoint':',','thousandPoint':'.'},
            'BRL':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'SAR':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'CAD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'CHF':{'decimalPlace':2,'decimalPoint':',','thousandPoint':'.'},
            'KWD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'AED':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'QAR':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'OMR':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'BHD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'CNY':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'JPY':{'decimalPlace':0,'decimalPoint':'','thousandPoint':','},
            'NOK':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'SEK':{'decimalPlace':0,'decimalPoint':'','thousandPoint':' '},
            'DKK':{'decimalPlace':2,'decimalPoint':',','thousandPoint':'.'},
            'PLN':{'decimalPlace':2,'decimalPoint':',','thousandPoint':'.'},
            'ARS':{'decimalPlace':0,'decimalPoint':'','thousandPoint':'.'},
            'SGD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'NZD':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':','},
            'default':{'decimalPlace':2,'decimalPoint':'.','thousandPoint':''},
        };
        return function(price,currencyTitle,currency){
            price = Number(price);
            if(isNaN(price)){
                return price;
            }
            if(!currency){
                //console.log('no currency')
                if(!currencyTitle){
                    //console.log('no currencyTitle')
                    currencyTitle = SHEIN_W.getCookie('currency') || SHEIN_W.getCookie('default_currency');
                    if(!currencyTitle){
                        return price;
                    }
                }
                var currencies = {"USD":{"currency_id":"2","code":"USD","symbol_left":"US$","symbol_right":"","decimal_place":"2","value":"1.00000000","date_modified":"2018-09-03 11:00:59","status":"0","default":"1","country_flag":"images/currency/USD.jpg","dec_point":".","thousands_sep":",","title":"US Dollar"},"EUR":{"currency_id":"3","code":"EUR","symbol_left":"","symbol_right":"€","decimal_place":"2","value":"0.87184000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/EUR.jpg","dec_point":",","thousands_sep":".","title":"Euro"},"GBP":{"currency_id":"1","code":"GBP","symbol_left":"GBP£","symbol_right":"","decimal_place":"2","value":"0.78009200","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/GBP.jpg","dec_point":".","thousands_sep":",","title":"Pound Sterling"},"CAD":{"currency_id":"10","code":"CAD","symbol_left":"CA$","symbol_right":"","decimal_place":"2","value":"1.32187700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/CAD.jpg","dec_point":".","thousands_sep":",","title":"Canadian Dollar"},"NOK":{"currency_id":"15","code":"NOK","symbol_left":"N.Kr.","symbol_right":"","decimal_place":"2","value":"8.48176400","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/NOK.jpg","dec_point":".","thousands_sep":",","title":"Norwegian Krone"},"AED":{"currency_id":"24","code":"AED","symbol_left":"AED.","symbol_right":"","decimal_place":"2","value":"3.67280000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/AED.jpg","dec_point":".","thousands_sep":",","title":"United Arab Emirates Dirham"},"INR":{"currency_id":"30","code":"INR","symbol_left":"₹","symbol_right":"","decimal_place":"0","value":"71.00000000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/INR.jpg","dec_point":"","thousands_sep":",","title":"Indian Rupee"},"SEK":{"currency_id":"16","code":"SEK","symbol_left":"","symbol_right":"kr","decimal_place":"0","value":"9.25925900","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SEK.jpg","dec_point":"","thousands_sep":" ","title":"Swedish Krona"},"SAR":{"currency_id":"19","code":"SAR","symbol_left":"S.R.","symbol_right":"","decimal_place":"2","value":"3.75040000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SAR.jpg","dec_point":".","thousands_sep":",","title":"Saudi Arabian Riyal"},"PLN":{"currency_id":"18","code":"PLN","symbol_left":"zł","symbol_right":"","decimal_place":"2","value":"3.75093800","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/PLN.jpg","dec_point":",","thousands_sep":".","title":"Polish Zloty"},"HKD":{"currency_id":"12","code":"HKD","symbol_left":"HK$","symbol_right":"","decimal_place":"2","value":"7.93021400","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/HKD.jpg","dec_point":".","thousands_sep":",","title":"Hongkong Dollar"},"MXN":{"currency_id":"14","code":"MXN","symbol_left":"$MXN","symbol_right":"","decimal_place":"2","value":"19.49317700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/MXN.jpg","dec_point":".","thousands_sep":",","title":"Mexican Peso"},"DKK":{"currency_id":"17","code":"DKK","symbol_left":"D.Kr.","symbol_right":"","decimal_place":"2","value":"6.49772600","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/DKK.jpg","dec_point":",","thousands_sep":".","title":"Danish Krona"},"JPY":{"currency_id":"9","code":"JPY","symbol_left":"JPY¥","symbol_right":"","decimal_place":"0","value":"112.35955100","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/JPY.jpg","dec_point":"","thousands_sep":",","title":"Japanese Yen"},"BRL":{"currency_id":"21","code":"BRL","symbol_left":"R$","symbol_right":"","decimal_place":"2","value":"4.05450000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/BRL.jpg","dec_point":",","thousands_sep":"","title":"Brazil Reais"},"SGD":{"currency_id":"22","code":"SGD","symbol_left":"S$","symbol_right":"","decimal_place":"2","value":"1.38677000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SGD.jpg","dec_point":".","thousands_sep":",","title":"Singapore Dollar"},"RUB":{"currency_id":"8","code":"RUB","symbol_left":"","symbol_right":"руб.","decimal_place":"0","value":"68.96551700","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/RUB.jpg","dec_point":"","thousands_sep":" ","title":"Russian Ruble"},"QAR":{"currency_id":"25","code":"QAR","symbol_left":"QR.","symbol_right":"","decimal_place":"2","value":"3.65000000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/QAR.jpg","dec_point":".","thousands_sep":",","title":"Qatar Riyal"},"NZD":{"currency_id":"28","code":"NZD","symbol_left":"$NZ.","symbol_right":"","decimal_place":"2","value":"1.52811700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/NZD.jpg","dec_point":".","thousands_sep":",","title":"New Zealand Dollar"},"BHD":{"currency_id":"27","code":"BHD","symbol_left":"BD.","symbol_right":"","decimal_place":"2","value":"0.37800000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/BHD.jpg","dec_point":".","thousands_sep":",","title":"Bahrain Dinar"},"KWD":{"currency_id":"23","code":"KWD","symbol_left":"K.D.","symbol_right":"","decimal_place":"2","value":"0.30250000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/KWD.jpg","dec_point":".","thousands_sep":",","title":"Kuwait Dinar"},"AUD":{"currency_id":"11","code":"AUD","symbol_left":"AU$","symbol_right":"","decimal_place":"2","value":"1.40706300","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/AUD.jpg","dec_point":".","thousands_sep":",","title":"Australian Dollar"},"CHF":{"currency_id":"13","code":"CHF","symbol_left":"CHF$","symbol_right":"","decimal_place":"2","value":"0.98087300","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/CHF.jpg","dec_point":",","thousands_sep":".","title":"Switzerland Francs"},"TWD":{"currency_id":"29","code":"TWD","symbol_left":"NT$","symbol_right":"","decimal_place":"0","value":"31.05590100","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/TWD.jpg","dec_point":"","thousands_sep":",","title":"New Taiwan Dollar"}};
                currency = currencies[currencyTitle];
                if(!currency){
                    return price;
                }
            }else{
                if(currency.code){
                    currencyTitle = currency.code;//以currency里的货币为准，但没啥用
                }
            }
            //console.log('GB_transform_price_symbol:')
            //console.log(currency)
            var formatObj = {
                decimalPlace: typeof currency.decimal_place != 'undefined' &&  currency.decimal_place !==null  ? Number(currency.decimal_place) : 2,
                decimalPoint: typeof currency.dec_point != 'undefined' && currency.dec_point !==null ? currency.dec_point : '.',
                thousandPoint: typeof currency.thousands_sep != 'undefined' && currency.thousands_sep !==null ? currency.thousands_sep : '',
            }
            if(['VND','IDR'].indexOf(currencyTitle)>=0){
                price = (price/100).toFixed(0)*100;
            }
            price = price.toFixed(formatObj.decimalPlace);//保留位数
            var priceArr = price.toString().split('.');
            price = priceArr[0].split('');
            for(var i = 1;i<price.length-2;i++){
                if((price.length - i)%3 == 0){
                    price.splice(i,0,formatObj.thousandPoint);
                    i++;
                }
            }
            //拼接千分号
            price = price.join('')+(priceArr.length == 2 ? formatObj.decimalPoint+priceArr[1] : '');
            //拼接左右符号
            price = currency.symbol_left+price+currency.symbol_right;
            //console.log('GB_transform_price_symbol:'+currencyTitle+';'+price)
            return price
        }
    })();

    function GB_get_flash_goods_discount(value) {
        var lang = 'en'
        var GB_cssRight = false
        var useEn = ['en', 'us', 'in', 'au', 'tw', 'uk', 'ca', 'se']
        var off = "off"
        var result = '<div>'
        if(value) {
            if(GB_cssRight) {
                result += off
            } else {
                if(useEn.indexOf(lang) == -1) result += '-'
                result += value + '%'
            }
            result += '</div>'

            if(GB_cssRight) {
                result += '%' + value
            } else {
                if(useEn.indexOf(lang) > -1) result += 'OFF'
            }
        } else {
            result = value
        }
        return result
    }

    var getABTInfoByPosKey =(function(){
        var ABTInfo = {};
        var ABTCookie = '';
        var ABTInfoEmpty = {poskey:'',abtexp:'',abtbranch:''};
        return function(_posKey){
            if(!_posKey)return ABTInfoEmpty;
            if(!ABTCookie){
                //get cookie
                ABTCookie = SHEIN_W.getCookie('abt-info');
                //测试用
                // ABTCookie = 'sheinpchome~55~107|';
                // ABTCookie += 'sheinPcVirtualclass~55~107|';
                // ABTCookie += 'sheinPcRealClass~55~107|';
                // ABTCookie += 'sheinPcDailynew~55~107|';
                // ABTCookie += 'sheinPcSearch~55~107|';
                // ABTCookie += 'shein_pc_category_RecommendationsForYou~55~107|';
                // ABTCookie += 'shein_pc_search_RecommendationsForYou~55~107|';
                // ABTCookie += 'shein_pc_product_detail_CustomersAlsoViewed~55~107|';
                // ABTCookie += 'shein_pc_product_detail_BestSellers~55~107|';
                // ABTCookie += 'shein_pc_cart_YouMayAlsoLike~55~107|';
                // ABTCookie += 'shein_pc_cart_RecentlyViewed~55~107|';
                // ABTCookie += 'shein_pc_empty_cart_YouMayAlsoLike~55~107|';
                // ABTCookie += 'shein_pc_empty_cart_RecentlyViewed~55~107|';
                // ABTCookie += 'shein_pc_order_RecommendationsForYou~55~107|';
                if(!ABTCookie){
                    return ABTInfoEmpty;
                }
                //解析成 ABTInfo
                var ABTArray = ABTCookie.split('|');
                for(var i = 0;i<ABTArray.length;i++){
                    var item = ABTArray[i].split('~');
                    if(item.length == 3){//合法
                        ABTInfo[item[0]] = {
                            poskey : item[0],
                            abtexp : item[1],
                            abtbranch : item[2]
                        }
                    }
                }
            }
            return ABTInfo[_posKey] ? ABTInfo[_posKey] : ABTInfoEmpty;
        }
    })();

    function gbCalcSocialWearLang() {
        var lang = 'en'
        if (['ilen', 'iden', 'then', 'ca', 'se'].includes(lang)) lang = 'en'
        if (lang === 'il') lang = 'he'
        if (lang === 'cafr') lang = 'fr'
        if (lang === 'sesv') lang = 'sv'
        return lang
    }

    function gbCalcSiteUID(site) {
        var site = 'en'
        if (site == 'en') site = 'www'
        if (site === 'il' || site === 'ilen') site = 'il'
        if (site === 'th' || site === 'then') site = 'th'
        if (site === 'id' || site === 'iden') site = 'id'
        if (site === 'ca' || site === 'cafr') site = 'ca'
        if (site === 'se' || site === 'sesv') site = 'se'
        return site
    }
    var GB_transform_price_off = (function(){
        return function(){}
    })();

    var gbExposeTraceid
    ;!function() {
        var traceidComponents = {}

        //购物流程 traceid 追踪
        gbExposeTraceid = function(type, payload) {
            try {
                var traceids = JSON.parse(sessionStorage.getItem('saTraceids'))
                if(!traceids) {
                    traceids = {}
                }
                var defaultTraceid = 'spc`' + Date.now() + '`'+ (SHEIN_W.getCookie('cookieId') || '')
                var traceid
                if(type == 'setComponent') {
                    if(!traceidComponents[payload.componentName]) {
                        traceidComponents[payload.componentName] = payload.traceid || defaultTraceid
                    }
                    traceid = traceidComponents[payload.componentName]
                } else if(type == 'getComponent') {
                    traceid = traceidComponents[payload.componentName]
                } else if(type == 'setProduct') {
                    if(typeof payload.goods_id == "object" && payload.goods_id.length){
                        for(var i = 0;i< payload.goods_id.length;i++){
                            traceids[payload.goods_id[i]] = payload.traceid || defaultTraceid
                        }
                    }else{
                        traceids[payload.goods_id] = payload.traceid || defaultTraceid
                    }
                } else if(type == 'getProduct') {
                    traceid = traceids[payload.goods_id]
                }
                sessionStorage.setItem('saTraceids', JSON.stringify(traceids))
                return traceid
            } catch (error) {
                console.log(error);
            }
        }
    }()
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3BRQW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- 首页头部 -->
<header class="c-header">
    <div class="init-j-top-banner">
    </div>
    <div class="header-height">
        <div class="header-nav">
            <div class="container-header-fluid header-wrap j-header-wrap">
                <div class="row">
                    <div class="col-xs-5 header-left">

                        <div class="c-header-dropdown-wrapper pad-right j-header-hover">

                            <a href="javascript:;">English</a>





                            <div class="c-header-dropdown she-hide j-dropdown-hover">
                                <ul class="member-menu">

                                    <li>

                                        <a href="javascript:;" class="j-change-lang" title="Español" data-lang=es>Español</a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="j-change-lang" title="Français" data-lang=fr>Français</a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="j-change-lang" title="Русский" data-lang=ru>Русский</a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="j-change-lang" title="Deutsch" data-lang=de>Deutsch</a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="j-change-lang" title="Italiano" data-lang=it>Italiano</a>

                                    </li>

                                    <li>

                                        <a href="javascript:;" class="j-change-lang" title="اللغة العربية" data-lang=ar>اللغة العربية</a>

                                    </li>

                                </ul>
                            </div>
                        </div>



                        <!--两列dropdown-wxl-->
                        <div class="c-header-dropdown-wrapper pad-right j-header-hover">
                            <a href="javascript:;" class="j-currency-title" data-curcode="USD">USD</a>
                            <div class="c-header-dropdown she-hide j-dropdown-hover dropdown-wxl">
                                <!--两列currency-menu-->
                                <ul class="member-menu currency-menu">

                                    <li class="j-change-currency" data-currency=USD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/USD.jpg)"></div>
                                            USD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=EUR>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/EUR.jpg)"></div>
                                            EUR
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=GBP>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/GBP.jpg)"></div>
                                            GBP
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=CAD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/CAD.jpg)"></div>
                                            CAD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=NOK>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/NOK.jpg)"></div>
                                            NOK
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=AED>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/AED.jpg)"></div>
                                            AED
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=INR>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/INR.jpg)"></div>
                                            INR
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=SEK>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/SEK.jpg)"></div>
                                            SEK
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=SAR>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/SAR.jpg)"></div>
                                            SAR
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=PLN>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/PLN.jpg)"></div>
                                            PLN
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=HKD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/HKD.jpg)"></div>
                                            HKD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=MXN>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/MXN.jpg)"></div>
                                            MXN
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=DKK>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/DKK.jpg)"></div>
                                            DKK
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=JPY>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/JPY.jpg)"></div>
                                            JPY
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=BRL>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/BRL.jpg)"></div>
                                            BRL
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=SGD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/SGD.jpg)"></div>
                                            SGD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=RUB>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/RUB.jpg)"></div>
                                            RUB
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=QAR>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/QAR.jpg)"></div>
                                            QAR
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=NZD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/NZD.jpg)"></div>
                                            NZD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=BHD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/BHD.jpg)"></div>
                                            BHD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=KWD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/KWD.jpg)"></div>
                                            KWD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=AUD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/AUD.jpg)"></div>
                                            AUD
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=CHF>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/CHF.jpg)"></div>
                                            CHF
                                        </a>
                                    </li>

                                    <li class="j-change-currency" data-currency=TWD>
                                        <a href="javascript:;">
                                            <div class="flag-img" style="background-image: url(//img.shein.com/images/currency/TWD.jpg)"></div>
                                            TWD
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <ul class="free-ship j-free-shipping"></ul>
                    </div>
                    <div class="col-xs-2 she-text-center header-logo">

                        <a href="https://www.shein.com" class="iconfont icon-sheinlogo"></a>

                    </div>

                    <div class="col-xs-5 header-right she-text-right">
                        <div class="c-header-dropdown-wrapper pad-right j-header-hover sa_account">
                            <a href="https://www.shein.com/user/auth/login?direction=nav" class='j-header-username she-hide'>Sign in/Register</a>
                            <div class="c-header-dropdown she-hide j-dropdown-hover">
                                <ul class="member-menu">
                                    <li>
                                        <a href="https://www.shein.com/user/orders/list">My Orders</a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/tickets">
                                            <em>My Tickets <span id="ticket_nav_num" class="red_num"></span></em>
                                            <span class="j-ticket-nopenum she-hide"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/wallet">My Wallet</a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/wishlist">My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/addressbook">My Address Book</a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/style_gallery">Style Gallery</a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/free_trail_report">Free Trial Report</a>
                                    </li>
                                    <li>
                                        <a href="https://www.shein.com/user/points">My Points</a>
                                    </li>
                                    <li class="j-header-menu-signout">
                                        <a href="https://www.shein.com/user/auth/logout">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-header-dropdown-wrapper pad-right j-header-hover j-customer-vue" v-show="showSustomer">
                            <a href="javascript:;">Customer Care</a>
                            <div class="c-header-dropdown dropdown-wl she-hide j-dropdown-hover">

                                <ul class="customer-list">
                                    <template v-for="item in bannerNav">
                                        <li class="list-item" v-if="item._selected">
                                            <div class="item-right">
                                                <template v-if="item.type == 'online'">
                                                    <a href="javascript:;" >
                                                        <i class="item-icon iconfont icon-online" class="j-online-help" onclick="showPreRobot()"></i>
                                                        <span class="j-online-help" onclick="showPreRobot()">
                                                            <template v-if="offLine">
                                                                {{item.data.offline.title}}
                                                            </template>
                                                            <template v-else>
                                                                {{item.data.title}}
                                                            </template>
                                                        </span>
                                                    </a>
                                                </template>
                                                <template v-else-if="item.type == 'ticket'">
                                                    <a href='https://www.shein.com/user/tickets' class="j-ga-submit-ticket">
                                                        <em class="header-ticket">
                                                            <i class="item-icon iconfont icon-chat"></i>
                                                            <b class="j-ticket-nopenum she-hide"></b>
                                                        </em>
                                                        <span>{{item.data.title}}</span>
                                                    </a>
                                                </template>
                                                <template v-else-if="item.type == 'selfhelp'">
                                                    <a href="https://help.shein.com/hc/en-us" class="j-ga-submit-faq">
                                                        <i class="item-icon iconfont icon-faq"></i>
                                                        <span>{{item.data.title}}</span>
                                                    </a>
                                                </template>
                                                <template v-else-if="item.type == 'email'">
                                                    <a href="mailto:947362214@qq.com" >
                                                        <i class="item-icon iconfont icon-youxiang"></i>
                                                        <span>{{item.data.title}}</span>
                                                    </a>
                                                </template>
                                                <template v-else-if="item.type == 'phone'">
                                                    <a href='https://www.shein.com/user/servicePhoneCall' class="j-ga-submit-call">
                                                        <i class="item-icon iconfont icon-tel"></i>
                                                        <span>{{item.data.title}}</span>
                                                    </a>
                                                </template>
                                            </div>
                                            <div class="item-left">
                                                <p>
                                                    <template v-if="offLine && item.type == 'online'">
                                                        {{item.data.offline.desc}}
                                                    </template>
                                                    <template v-else>
                                                        {{item.data.desc}}
                                                    </template>
                                                </p>
                                            </div>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>
                        <div class="j-header-search-container"></div>

                        <div class="header-search c-header-dropdown-wrapper j-fast-wish fast-wish-wrap sa_collect">
                            <a href="https://www.shein.com/user/wishlist" class="iconfont icon-save">
                                <span class="cart-num she-v-cloak-none" v-cloak>{{wishNum}}</span>
                            </a>
                        </div>
                        <div class="c-header-dropdown-wrapper j-fast-cart fast-cart-wrap" @mouseenter="hover(true)" @mouseleave="hover(false)">
                            <a href="https://www.shein.com/cart" class="iconfont icon-bag">
                                <span class="cart-num she-v-cloak-none" v-cloak>{{summary.cartNum}}</span>
                            </a>
                            <div :class="['she-v-cloak-none', 'c-header-dropdown', 'dropdown-shopbag', {'she-hide': !show}]" v-cloak>
                                <div class="c-head-bag j-hbag-box">
                                    <template>
                                        <div class="gift-tip" v-show="buyGift">

                                            <i class="iconfont icon-gift-new"></i>
                                            {{buy_gifts_tip}}<a href="https://www.shein.com/cart">Click here</a> to get 1 free.

                                        </div>

                                        <div class="attribute-bag" v-if="carts.length">
                                            <div class="attribute-bag-scroll">
                                                <div class="c-bag-item she-clearfix"
                                                     v-for="(item, index) in carts"
                                                     :sku="item.product.goods_sn"
                                                     :spu="item.product.productRelationID || item.product.goods_sn"
                                                     :quantity="item.quantity"
                                                     :cat_id="item.product.cat_id"
                                                     :price="item.product.salePrice.amount"
                                                >
                                                    <div class="bag-left she-fl">
                                                        <img :src="transformImg(item.product.goods_img)">
                                                        <div class="sold-out" v-show="soldOut.indexOf(item.id) > -1">

                                                            <img src="//sheinsz.ltwebstatic.com/she_dist/images/soldout-eebe3ddcd7.png">

                                                        </div>
                                                    </div>
                                                    <div class="bag-right she-fl">
                                                        <!-- flash -->
                                                        <i class="flash-sale-icon iconfont icon-flashsale-new" v-show="isPromotionVal(item, 10)"></i>
                                                        <div class="goods-price">
                                                            <strong :class="['member-price',{'sale-price':item.product.unit_discount != 0}]">{{item.unitPrice.amountWithSymbol}}</strong>
                                                            <template v-if="true || item.product.unit_discount != 0">
                                                                <del class="shop-price" v-show="item.product.unit_discount != 0">{{item.product.retailPrice.amountWithSymbol}}</del>
                                                                <!-- 参与买赠的商品 -->
                                                                <!-- item.product.promotionInfo.typeId == 1 && item.product.promotion.order_goods_discount_type == 5 -->



                                                                <!-- flash -->
                                                                <span class="discount" :class="{'fs-discount': isPromotionVal(item, 10)}" v-show="item.product.unit_discount != 0">


										{{item.product.unit_discount}}%
								        OFF



							</span>
                                                            </template>
                                                        </div>
                                                        <a :href="item.active_type == 3 ? 'javascript:void(0);' : getGoodsUrl(item.product.goods_url_name,item.product.goods_id, item.product.cat_id)" class="goods-name" class="goods-name"><span class="goods-brand" v-if="item.product.brand">{{item.product.brand}}&nbsp;</span>{{item.product.goods_name}}</a>

                                                        <!-- 清仓限购 -->
                                                        <div class="c-icon-tip-spec" v-if="item.product.is_clearance == 1">
						<span>
							<i class="iconfont icon-xiangou"></i>
						</span>
                                                        </div>
                                                        <div class="goods-size" v-if="item.attr && item.attr.attr_name && item.attr.attr_value">
                                                            {{item.attr.attr_name + ': ' + item.attr.attr_value}}
                                                            <template v-if="item.attr_value_location">
                                                                <template v-for="locationsize in item.attr_value_location.size_rule_list">
                                                                    <span style="color: #9B9B9B;display: inline-block;" v-if="locationsize.name == item.attr_value_en">({{locationsize.correspond}})</span>
                                                                </template>
                                                            </template>
                                                        </div>
                                                        <div class="goods-num">
                                                            <ul class="c-bag-qty">
                                                                <li :class="['qty-opt', {'disabled': item.quantity == 1 }]" @click="handleQuantity(item, 0)">
                                                                    <span class="iconfont icon-reduce"></span>
                                                                </li>
                                                                <li>
                                                                    <input type="text" class="qty-num"
                                                                           :value="item.quantity"
                                                                           @blur="handleQuantity(item, 2, $event)"
                                                                    >
                                                                </li>
                                                                <li :class="['qty-opt', {'disabled': item.quantity*1 >= item.realTimeInventory }]" @click="handleQuantity(item, 1)">
                                                                    <span class="iconfont icon-add"></span>
                                                                </li>
                                                            </ul>
                                                            <!-- goods stock -->
                                                            <div :class="['only-left', {'she-hide': +item.realTimeInventory >= 10 || item.realTimeInventory == 0 ? true : false}]">
                                                                ( Only <span style="color: red;">{{item.realTimeInventory}}</span> left !)
                                                            </div>
                                                            <!-- 限购 -->
                                                            <p class="good-limit" v-show="limitBuy == item.id">purchase limit exceeded</p>
                                                        </div>
                                                        <div class="goods-delete" @click="del(item)">
                                                            <i class="iconfont icon-delate"></i>
                                                        </div>
                                                        <div class="goods-total">
                                                            <span>Total:</span>
                                                            <strong>{{item.totalPrice.amountWithSymbol}}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="free-ship-tip" v-show="summary.show" v-html="summary.title"></p>

                                            <div class="attribute-bag-total">
                                                <p class="retial-price" v-show="summary.originPrice && summary.totalPrice && summary.originPrice.amountWithSymbol != summary.totalPrice.amountWithSymbol">Retail Price:{{summary.originPrice ? summary.originPrice.amountWithSymbol : ''}}</p>
                                                <p class="total-price">Total:<span>{{summary.totalPrice ? summary.totalPrice.amountWithSymbol : ''}}</span></p>

                                                <div class="view-bag">
                                                    <a href="https://www.shein.com/cart" class="she-btn-black she-btn-l j-a-view-bag">view bag</a>
                                                </div>
                                                <div :class="['find-free-gift', {'she-hide': gift_empty}]">
                                                    find <b>free gift</b>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="empty-bag" v-else>
                                            <div class="empty-bag-img" style="background-image: url(//sheinsz.ltwebstatic.com/she_dist/images/shoppingcart-empty-ce506098f5.png)"></div>
                                            <p>Shopping Bag is Empty</p>
                                            <p v-if="!isLogin">Welcome back! If you had items in your shopping bag, we have  saved them for you. You can <a :href="loginJump" class="j-hbag-sign-in">SIGN IN</a> now to see them, or  whenever you&#39;re ready to check out.</p><!-- 未登录时显示，登录状态不显示 -->
                                        </div>

                                    </template>
                                </div>

                            </div>

                            <modal-vue :show="tips.show"
                                       :twobtn="false"
                                       @cancel="tips.show = false" class="she-v-cloak-none" v-cloak>
                                <div slot="footer">{{tips.text}}</div>
                            </modal-vue>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="c-nav nav-wrap2">
                <ul class="c-navbar">
                    <!-- Polymer subTitle -->


                    <li class="j-navbar-list">
                        <a title="What&#39;s New" style="color: #000000;" href="https://www.shein.com/daily-new.html?icn=what&#39;snew&amp;ici=www_navbar01" class="j-category-title ">What&#39;s New</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6><a title="What&#39;s New" style="color: #000000;" href="//www.shein.com/daily-new.html?icn=what&#39;snew&amp;ici=www_navbar01menu01">What&#39;s New</a></h6>



                                    <div><a title="09-04-2018" href="https://www.shein.com/daily/2018-09-04/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir01">09-04-2018</a></div>

                                    <div><a title="09-03-2018" href="https://www.shein.com/daily/2018-09-03/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir02">09-03-2018</a></div>

                                    <div><a title="09-01-2018" href="https://www.shein.com/daily/2018-09-01/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir03">09-01-2018</a></div>

                                    <div><a title="08-31-2018" href="https://www.shein.com/daily/2018-08-31/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir04">08-31-2018</a></div>

                                    <div><a title="08-30-2018" href="https://www.shein.com/daily/2018-08-30/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir05">08-30-2018</a></div>

                                    <div><a title="08-29-2018" href="https://www.shein.com/daily/2018-08-29/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir06">08-29-2018</a></div>

                                    <div><a title="08-28-2018" href="https://www.shein.com/daily/2018-08-28/?icn=what&#39;snew&amp;ici=www_navbar01menu01dir07">08-28-2018</a></div>





                                    <h6 class=""><a title="New Collection" style="color: #000000;" class="hoverdefalut" href="javascript:;">New Collection</a></h6>

                                    <div class=""><a style="color: #000000;" title="Campus Essential" class='' href="https://www.shein.com/Campus-Essential-vc-74260.html?icn=fall180827&amp;ici=www_navbar01menu02dir01">Campus Essential</a></div>

                                    <div class=""><a style="color: #000000;" title="Shining Bright" class='' href="https://www.shein.com/Futuristic-vc-72788.html?icn=fall180827&amp;ici=www_navbar01menu02dir02">Shining Bright</a></div>

                                    <div class=""><a style="color: #000000;" title="Fall-in for You" class='' href="https://www.shein.com/Autumn-feel-vc-73798.html?icn=fall180827&amp;ici=www_navbar01menu02dir03">Fall-in for You</a></div>

                                    <div class=""><a style="color: #000000;" title="Shirt Dressing" class='' href="https://www.shein.com/Shirt-Dress-vc-74261.html?icn=fall180827&amp;ici=www_navbar01menu02dir04">Shirt Dressing</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="NEW IN WOMEN CLOTHING" style="color: #000000;" class="hoverdefalut" href="javascript:;">NEW IN WOMEN CLOTHING</a></h6>

                                    <div class=""><a style="color: #000000;" title="New in Dresses" class='' href="https://www.shein.com/New-In-Dresses-vc-69890.html?icn=NewInDresses180815&amp;ici=www_navbar01menu03dir01">New in Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Blouses" class='' href="https://www.shein.com/New-In-Blouses-vc-69891.html?icn=NewInBlouses180815&amp;ici=www_navbar01menu03dir02">New in Blouses</a></div>

                                    <div class=""><a style="color: #252525;" title="New in Plus Size" class='' href="https://www.shein.com/New-In-Plus-Size-vc-69893.html?icn=NewInPlusSize180604&amp;ici=www_navbar01menu03dir03">New in Plus Size</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Tops" class='' href="https://www.shein.com/New-In-Tops-vc-69894.html?icn=NewInT-shirtsTanksTops180815&amp;ici=www_navbar01menu03dir04">New in Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Jumpsuits &amp; Co-ords" class='' href="https://www.shein.com/New-In-Jumpsuits-Co-ord-Sets-vc-69892.html?icn=NewInJumpsuitsCoordSets180815&amp;ici=www_navbar01menu03dir05">New in Jumpsuits &amp; Co-ords</a></div>

                                    <div class=""><a style="color: #ff0000;" title="New in Sweaters" class='' href="https://www.shein.com/New-In-Sweaters-vc-69898.html?icn=Newinsweaters180815&amp;ici=www_navbar01menu03dir06">New in Sweaters</a></div>

                                    <div class=""><a style="color: #ff0000;" title="New in Sweatshirts" class='' href="https://www.shein.com/New-In-Sweatshirts-vc-69899.html?icn=newinsweatershirts180815&amp;ici=www_navbar01menu03dir07">New in Sweatshirts</a></div>

                                    <div class=""><a style="color: #ff0000;" title="New in Coats &amp; Jackets" class='' href="https://www.shein.com/New-In-Coats-Jackets-vc-69897.html?icn=Newincoatjackets180815&amp;ici=www_navbar01menu03dir08">New in Coats &amp; Jackets</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Bottoms" class='' href="https://www.shein.com/New-In-Bottoms-vc-69900.html?icn=NewInBottoms180815&amp;ici=www_navbar01menu03dir09">New in Bottoms</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Denim" class='' href="https://www.shein.com/New-In-Denim-vc-69901.html?icn=NewInDenim180815&amp;ici=www_navbar01menu03dir10">New in Denim</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Lingerie &amp; Loungwear" class='' href="https://www.shein.com/New-In-Lingerie-Loungwear-vc-69908.html?icn=NewInLingerieLoungwear180815&amp;ici=www_navbar01menu03dir11">New in Lingerie &amp; Loungwear</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="NEW IN WOMEN ACC" style="color: #000000;" class="hoverdefalut" href="javascript:;">NEW IN WOMEN ACC</a></h6>

                                    <div class=""><a style="color: #000000;" title="New in Shoes &amp; Bags" class='' href="https://www.shein.com/New-In-Shoes-Bags-vc-69910.html?icn=NewInShoesBags180815&amp;ici=www_navbar01menu04dir01">New in Shoes &amp; Bags</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Jewelry" class='' href="https://www.shein.com/New-In-Jewelry-vc-69915.html?icn=NewInJewelry180815&amp;ici=www_navbar01menu04dir02">New in Jewelry</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Accessories" class='' href="https://www.shein.com/New-In-Accessories-vc-69913.html?icn=newinacc&amp;ici=www_navbar01menu04dir03">New in Accessories</a></div>

                                    <div class=""><a style="color: #000000;" title="New in Home" class='' href="https://www.shein.com/New-In-Home-vc-69920.html?icn=newinhome&amp;ici=www_navbar01menu04dir04">New in Home</a></div>





                                    <h6 class=""><a title="NEW IN MEN" style="color: #000000;" class="" href="https://www.shein.com/New-in-Men-vc-67094.html?icn=NewInMen180815&amp;ici=www_navbar01menu05">NEW IN MEN</a></h6>





                                    <h6 class=""><a title="NEW IN KIDS" style="color: #000000;" class="" href="https://www.shein.com/New-in-Kids-vc-67091.html?icn=NewInKids180815&amp;ici=www_navbar01menu06">NEW IN KIDS</a></h6>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Back in Stock" style="color: #000000;" class="" href="https://www.shein.com/back-in-stock.html?icn=BackInStock180815&amp;ici=www_navbar01menu07">Back in Stock</a></h6>





                                    <h6 class=""><a title="Coming Soon" style="color: #000000;" class="" href="https://www.shein.com/coming-soon?icn=comingsoon&amp;ici=www_navbar01menu08">Coming Soon</a></h6>





                                    <h6 class=""><a title="New in Exclusive" style="color: #000000;" class="" href="https://www.shein.com/New-In-Exclusive-vc-69958.html?icn=NewInExclusive180815&amp;ici=www_navbar01menu09">New in Exclusive</a></h6>





                                    <h6 class=""><a title="Exclusive Outlets" style="color: #121212;" class="" href="https://www.shein.com/Global-Outlets-Newin-Y-vc-40910.html?icn=ExclusiveOutlets180604&amp;ici=www_navbar01menu10">Exclusive Outlets</a></h6>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="New in Exclusive" href="https://www.shein.com/New-In-Exclusive-vc-69958.html?icn=NewInExclusive180815&amp;ici=www_navbar01banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/15/15343197902567359807.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/15/15343197902567359807.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Exclusive</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Sweatshirts &amp; Sweaters" href="https://www.shein.com/New-In-Sweater-Sweatshirts-vc-69955.html?icn=Newinsweatshirts180815&amp;ici=www_navbar01banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/15/15343198061279847265.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/15/15343198061279847265.jpg"/>
                                        </a>

                                        <p class="pic-strong">Sweatshirts &amp; Sweaters</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="New in Outwear" href="https://www.shein.com/New-In-Coats-Jackets-vc-69897.html?icn=NewinOutwear180815&amp;ici=www_navbar01banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/15/15343198282083466463.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/15/15343198282083466463.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Outwear</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="EXCLUSIVE" style="color: #000000;" href="https://www.shein.com/SHEIN-Exclusive-vc-70627.html?icn=EXCLUSIVE180815&amp;ici=www_navbar02" class="j-category-title ">EXCLUSIVE</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="NEW IN" style="color: #000000;" class="" href="https://www.shein.com/New-In-Exclusive-vc-69958.html?icn=Newin180815&amp;ici=www_navbar02menu01">NEW IN</a></h6>





                                    <h6 class=""><a title="WOMEN CLOTHING" style="color: #000000;" class="" href="https://www.shein.com/SHEIN-Exclusive-vc-70627.html?icn=exclusive&amp;ici=www_navbar02menu02">WOMEN CLOTHING</a></h6>

                                    <div class=""><a style="color: #000000;" title="Dresses" class='' href="https://www.shein.com/Exclusive-Dresses-vc-70131.html?icn=dresses180815&amp;ici=www_navbar02menu02dir01">Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Blouses" class='' href="https://www.shein.com/Exclusive-Blouses-vc-70133.html?icn=Blouses180815&amp;ici=www_navbar02menu02dir02">Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Tops" class='' href="https://www.shein.com/Exclusive-T-Shirts-Tank-Tops-vc-70135.html?icn=Tops180815&amp;ici=www_navbar02menu02dir03">Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Jumpsuits &amp; Co-ords" class='' href="https://www.shein.com/Exclusive-Jumpsuits-Co-ords-vc-70137.html?icn=jumpsuitsco180815&amp;ici=www_navbar02menu02dir04">Jumpsuits &amp; Co-ords</a></div>

                                    <div class=""><a style="color: #121212;" title="Plus Size" class='' href="https://www.shein.com/Exclusive-Plus-Size-vc-70140.html?icn=PlusSize180815&amp;ici=www_navbar02menu02dir05">Plus Size</a></div>

                                    <div class=""><a style="color: #000000;" title="Bottoms" class='' href="https://www.shein.com/Exclusive-Bottoms-vc-70144.html?icn=Bottoms180815&amp;ici=www_navbar02menu02dir06">Bottoms</a></div>

                                    <div class=""><a style="color: #000000;" title="Lingerie &amp; Loungewear" class='' href="https://www.shein.com/Exclusive-Lingerie-Loungewear-vc-70146.html?icn=LoungewearLingerie180815&amp;ici=www_navbar02menu02dir07">Lingerie &amp; Loungewear</a></div>

                                    <div class=""><a style="color: #ff0000;" title="Fall &amp; Winter" class='' href="https://www.shein.com/Exclusive-Fall-Winter-vc-74091.html?icn=fallwinter180815&amp;ici=www_navbar02menu02dir08">Fall &amp; Winter</a></div>





                                    <h6 class=""><a title="MEN CLOTHING" style="color: #000000;" class="" href="https://www.shein.com/SHEIN-Exclusive-Men-vc-73469.html?icn=men&amp;ici=www_navbar02menu03">MEN CLOTHING</a></h6>





                                    <h6 class=""><a title="KIDS CLOTHING" style="color: #000000;" class="" href="https://www.shein.com/Exclusive-Kids-vc-73457.html?icn=Kids&amp;ici=www_navbar02menu04">KIDS CLOTHING</a></h6>





                                    <h6 class=""><a title="Exclusive Outlets" style="color: #111111;" class="" href="https://www.shein.com/Global-Outlets-Newin-Y-vc-40910.html?icn=Outlets180815&amp;ici=www_navbar02menu05">Exclusive Outlets</a></h6>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="SHEIN Design" href="https://www.shein.com/SHEIN-Exclusive-vc-70627.html?icn=sheindesign&amp;ici=www_navbar02banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/15/15343200081993260832.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/15/15343200081993260832.jpg"/>
                                        </a>

                                        <p class="pic-strong">SHEIN Design</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Back in Stock" href="https://www.shein.com/back-in-stock.html?icn=backinstock180815&amp;ici=www_navbar02banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/15/15343200312185926985.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/15/15343200312185926985.jpg"/>
                                        </a>

                                        <p class="pic-strong">Back in Stock</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Plus Size" href="https://www.shein.com/Exclusive-New-In-Plus-Size-vc-69959.html?icn=exclusivenewinplussize&amp;ici=www_navbar02banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/15/1534320045920480366.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/15/1534320045920480366.jpg"/>
                                        </a>

                                        <p class="pic-strong">Plus Size</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Trends" style="color: #ff0202;" href="https://www.shein.com/Fashion-trends-vc-12087.html?icn=Fashiontrends&amp;ici=www_navbar03" class="j-category-title ">Trends</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="TRENDING" style="color: #000000;" class="hoverdefalut" href="javascript:;">TRENDING</a></h6>

                                    <div class=""><a style="color: #000000;" title="Crop Top" class='' href="https://www.shein.com/SHEIN-Crop-Top-vc-67272.html?icn=Croptop180604&amp;ici=www_navbar03menu01dir01">Crop Top</a></div>

                                    <div class=""><a style="color: #000000;" title="Get a Jumpsuit" class='' href="https://www.shein.com/SHEIN-Cami-Jumpsuit-SS-vc-67644.html?icn=jumsuit180814&amp;ici=www_navbar03menu01dir02">Get a Jumpsuit</a></div>

                                    <div class=""><a style="color: #000000;" title="Earth Tone" class='' href="https://www.shein.com/SHEIN-earth-tone-vc-73956.html?icn=earthtone180814&amp;ici=www_navbar03menu01dir03">Earth Tone</a></div>

                                    <div class=""><a style="color: #000000;" title="Overalls &amp; Tops" class='' href="https://www.shein.com/SHEIN-Overalls-Tees-vc-73739.html?icn=overalltee180814&amp;ici=www_navbar03menu01dir04">Overalls &amp; Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Pinstripe" class='' href="https://www.shein.com/SHEIN-Pinstripe-vc-73740.html?icn=prinstripe180814&amp;ici=www_navbar03menu01dir05">Pinstripe</a></div>

                                    <div class=""><a style="color: #ff0000;" title="Hoodies in Season" class='' href="https://www.shein.com/SHEIN-Hooded-vc-70276.html?icn=hoodies180814&amp;ici=www_navbar03menu01dir06">Hoodies in Season</a></div>

                                    <div class=""><a style="color: #000000;" title="Color Edit" class='' href="https://www.shein.com/SHEIN-Blue-Orange-vc-73490.html?icn=color180814&amp;ici=www_navbar03menu01dir07">Color Edit</a></div>

                                    <div class=""><a style="color: #000000;" title="Wild Trip" class='' href="https://www.shein.com/SHEIN-Animal-Print-SS-vc-67648.html?icn=wild180814&amp;ici=www_navbar03menu01dir08">Wild Trip</a></div>

                                    <div class=""><a style="color: #000000;" title="Shining Time" class='' href="https://www.shein.com/SHEIN-Shining-Time-vc-73408.html?icn=shining180814&amp;ici=www_navbar03menu01dir09">Shining Time</a></div>

                                    <div class=""><a style="color: #000000;" title="Modern Military" class='' href="https://www.shein.com/Camouflage-Prints-Military-vc-183.html?icn=military180814&amp;ici=www_navbar03menu01dir10">Modern Military</a></div>

                                    <div class=""><a style="color: #000000;" title="Embellished Detail" class='' href="https://www.shein.com/SHEIN-Touching-details-vc-73406.html?icn=detail180814&amp;ici=www_navbar03menu01dir11">Embellished Detail</a></div>

                                    <div class=""><a style="color: #000000;" title="Colored Plaid" class='' href="https://www.shein.com/SHEIN-Color-Plaid-vc-73488.html?icn=colorplaid180814&amp;ici=www_navbar03menu01dir12">Colored Plaid</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Shop by Style" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by Style</a></h6>

                                    <div class=""><a style="color: #000000;" title="Boho" class='' href="https://www.shein.com/SHEIN-Urban-Boho-vc-70374.html?icn=UrbanBoho180604&amp;ici=www_navbar03menu02dir01">Boho</a></div>

                                    <div class=""><a style="color: #000000;" title="Casual" class='' href="https://www.shein.com/SHEIN-Casual-SS-vc-67552.html?icn=Casual180604&amp;ici=www_navbar03menu02dir02">Casual</a></div>

                                    <div class=""><a style="color: #000000;" title="Elegant" class='' href="https://www.shein.com/SHEIN-Elegant-SS-vc-67571.html?icn=Elegant180604&amp;ici=www_navbar03menu02dir03">Elegant</a></div>

                                    <div class=""><a style="color: #ff0000;" title="Preppy" class='' href="https://www.shein.com/SHEIN-Preppy-SS-vc-67558.html?icn=Preppy180604&amp;ici=www_navbar03menu02dir04">Preppy</a></div>

                                    <div class=""><a style="color: #000000;" title="Work" class='' href="https://www.shein.com/SHEIN-Workwear-vc-70222.html?icn=Work180604&amp;ici=www_navbar03menu02dir05">Work</a></div>

                                    <div class=""><a style="color: #0d0d0d;" title="Sports" class='' href="https://www.shein.com/SHEIN-Sports-SS-vc-67566.html?icn=Sports180604&amp;ici=www_navbar03menu02dir06">Sports</a></div>

                                    <div class=""><a style="color: #000000;" title="Rock" class='' href="https://www.shein.com/SHEIN-Rock-SS-vc-67568.html?icn=Rock180604&amp;ici=www_navbar03menu02dir07">Rock</a></div>

                                    <div class=""><a style="color: #000000;" title="Sexy" class='' href="https://www.shein.com/SHEIN-Sexy-SS-vc-67569.html?icn=Sexy180604&amp;ici=www_navbar03menu02dir08">Sexy</a></div>

                                    <div class=""><a style="color: #000000;" title="Party" class='' href="https://www.shein.com/SHEIN-Party-Style-SS-vc-70215.html?icn=Party180604&amp;ici=www_navbar03menu02dir09">Party</a></div>

                                    <div class=""><a style="color: #000000;" title="Vintage" class='' href="https://www.shein.com/Vintage-style-vc-63335.html?icn=Vintage180604&amp;ici=www_navbar03menu02dir10">Vintage</a></div>

                                    <div class=""><a style="color: #000000;" title="Vacation" class='' href="https://www.shein.com/SHEIN-Vacation-SS-vc-67570.html?icn=Vacation180604&amp;ici=www_navbar03menu02dir11">Vacation</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="Autumn&#39;s Calling" href="https://www.shein.com/activity/9392/www_Fall.html?icn=fall180827&amp;ici=www_navbar03banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/17/15344768584006149208.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/17/15344768584006149208.jpg"/>
                                        </a>

                                        <p class="pic-strong">Autumn&#39;s Calling</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Vintage Style" href="https://www.shein.com/Vintage-style-vc-63335.html?icn=vintagestyle&amp;ici=www_navbar03banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/13/15341248993903295803.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/13/15341248993903295803.jpg"/>
                                        </a>

                                        <p class="pic-strong">Vintage Style</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="On-duty Chic" href="https://www.shein.com/SHEIN-Monday-to-Friday-Style-vc-74472.html?icn=chic&amp;ici=www_navbar03banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/15350984933029938550.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/15350984933029938550.jpg"/>
                                        </a>

                                        <p class="pic-strong">On-duty Chic</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Clothing" style="color: #050000;" href="https://www.shein.com/Best-Selling-Clothing-vc-70054.html?icn=clothing&amp;ici=www_navbar04" class="j-category-title ">Clothing</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="Blouses From US$5" style="color: #fc0303;" class="" href="https://www.shein.com/global-blouses-vc-69547.html?icn=blouses&amp;ici=www_navbar04menu01">Blouses From US$5</a></h6>





                                    <h6 class=""><a title="Swimwear From US$6" style="color: #ff0000;" class="" href="https://www.shein.com/global-Swimwear-vc-70653.html?icn=swimwear&amp;ici=www_navbar04menu02">Swimwear From US$6</a></h6>





                                    <h6 class=""><a title="T-shirts From US$4" style="color: #ff0000;" class="" href="https://www.shein.com/Best-Selling-T-Shirts-vc-70056.html?icn=tees&amp;ici=www_navbar04menu03">T-shirts From US$4</a></h6>





                                    <h6 class=""><a title="Two-piece Outfits From US$8" style="color: #ff0101;" class="" href="https://www.shein.com/Best-Selling-Two-Piece-vc-70075.html?icn=twopieceoutfits&amp;ici=www_navbar04menu04">Two-piece Outfits From US$8</a></h6>





                                    <h6 class=""><a title="Bottoms From US$4" style="color: #fe0303;" class="" href="https://www.shein.com/Best-Selling-Bottoms-vc-70060.html?icn=bottoms&amp;ici=www_navbar04menu05">Bottoms From US$4</a></h6>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Tops" style="color: #333;" class="" href="https://www.shein.com/Tops-c-1766.html?icn=tops&amp;ici=www_navbar04menu06">Tops</a></h6>

                                    <div class=""><a style="color: #0d0d0d;" title="T-Shirts" class='' href="https://www.shein.com/T-shirt-c-1738.html?icn=tshirts&amp;ici=www_navbar04menu06dir01">T-Shirts</a></div>

                                    <div class=""><a style="color: #000000;" title="Tank Tops &amp; Camis" class='' href="https://www.shein.com/Tank-Tops-c-1779.html?icn=tanktops&amp;ici=www_navbar04menu06dir02">Tank Tops &amp; Camis</a></div>

                                    <div class=""><a style="color: #000000;" title="Bodysuits" class='' href="https://www.shein.com/Bodysuits-c-1882.html?icn=bodysuits&amp;ici=www_navbar04menu06dir03">Bodysuits</a></div>





                                    <h6 class=""><a title="Beachwear" style="color: #232323;" class="" href="https://www.shein.com/Beachwear-c-2039.html?icn=beachwear&amp;ici=www_navbar04menu07">Beachwear</a></h6>

                                    <div class=""><a style="color: #050404;" title="Swimwear" class='' href="https://www.shein.com/Swimwear-c-1866.html?icn=swimwear&amp;ici=www_navbar04menu07dir01">Swimwear</a></div>

                                    <div class=""><a style="color: #000000;" title="Kimonos" class='' href="https://www.shein.com/Kimonos-c-1878.html?icn=kimonos&amp;ici=www_navbar04menu07dir02">Kimonos</a></div>





                                    <h6 class=""><a title="Blouses &amp; Shirts" style="color: #000000;" class="" href="https://www.shein.com/Blouses-c-1733.html?icn=blouses&amp;ici=www_navbar04menu08">Blouses & Shirts</a></h6>

                                    <div class=""><a style="color: #000000;" title="Striped Blouses" class='' href="https://www.shein.com/SHEIN-Striped-Blouses-vc-71505.html?icn=stripedblouses&amp;ici=www_navbar04menu08dir01">Striped Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Ruffle Blouses" class='' href="https://www.shein.com/SHEIN-Ruffle-Blouses-vc-71499.html?icn=ruffleblouses&amp;ici=www_navbar04menu08dir02">Ruffle Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Long Sleeve Blouses" class='' href="https://www.shein.com/SHEIN-Long-Sleeve-Blouses-vc-71506.html?icn=longsleeveblouses&amp;ici=www_navbar04menu08dir03">Long Sleeve Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Crop Tops" class='' href="https://www.shein.com/SHEIN-Crop-Top-vc-67272.html?icn=croptop&amp;ici=www_navbar04menu08dir04">Crop Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Off Shoulder Tops" class='' href="https://www.shein.com/SHEIN-Off-the-Shoulder-Tops-vc-71709.html?icn=offshouldertops&amp;ici=www_navbar04menu08dir05">Off Shoulder Tops</a></div>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Bottoms" style="color: #000000;" class="" href="https://www.shein.com/Bottoms-c-1767.html?icn=bottoms&amp;ici=www_navbar04menu09">Bottoms</a></h6>

                                    <div class=""><a style="color: #000000;" title="Pants" class='' href="https://www.shein.com/Pants-c-1740.html?icn=pants&amp;ici=www_navbar04menu09dir01">Pants</a></div>

                                    <div class=""><a style="color: #000000;" title="Leggings" class='' href="https://www.shein.com/Leggings-c-1871.html?icn=leggings&amp;ici=www_navbar04menu09dir02">Leggings</a></div>

                                    <div class=""><a style="color: #000000;" title="Skirts" class='' href="https://www.shein.com/Skirts-c-1732.html?icn=skirts&amp;ici=www_navbar04menu09dir03">Skirts</a></div>

                                    <div class=""><a style="color: #000000;" title="Shorts" class='' href="https://www.shein.com/Shorts-c-1912.html?icn=shorts&amp;ici=www_navbar04menu09dir04">Shorts</a></div>





                                    <h6 class=""><a title="Jumpsuits" style="color: #000000;" class="" href="https://www.shein.com/Jumpsuits-c-1860.html?icn=jumpsuits&amp;ici=www_navbar04menu10">Jumpsuits</a></h6>





                                    <h6 class=""><a title="Two-piece Outfits" style="color: #000000;" class="" href="https://www.shein.com/Two-piece-outfits-c-1780.html?icn=twopieceoutfits&amp;ici=www_navbar04menu11">Two-piece Outfits</a></h6>





                                    <h6 class=""><a title="Lingerie &amp; Loungewear" style="color: #000000;" class="" href="https://www.shein.com/Lingerie--Loungewear-c-2038.html?icn=LingerieLoungewear&amp;ici=www_navbar04menu12">Lingerie & Loungewear</a></h6>

                                    <div class=""><a style="color: #000000;" title="Loungewear" class='' href="https://www.shein.com/Nightwear-c-1880.html?icn=nightwear&amp;ici=www_navbar04menu12dir01">Loungewear</a></div>

                                    <div class=""><a style="color: #000000;" title="Lingerie" class='' href="https://www.shein.com/Underwear-c-1862.html?icn=lingerie&amp;ici=www_navbar04menu12dir02">Lingerie</a></div>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Sweatshirts" style="color: #000000;" class="" href="https://www.shein.com/Sweatshirts-c-1773.html?icn=sweatshirts&amp;ici=www_navbar04menu13">Sweatshirts</a></h6>





                                    <h6 class=""><a title="Sweaters" style="color: #060606;" class="" href="https://www.shein.com/Sweaters-c-1734.html?icn=sweaters&amp;ici=www_navbar04menu14">Sweaters</a></h6>





                                    <h6 class=""><a title="Blazers" style="color: #000000;" class="" href="https://www.shein.com/Suits-c-1739.html?icn=blazers&amp;ici=www_navbar04menu15">Blazers</a></h6>





                                    <h6 class=""><a title="Coats &amp; Jackets" style="color: #000000;" class="" href="https://www.shein.com/Coats-&amp;-Jackets-c-2037.html?icn=CoatsJackets&amp;ici=www_navbar04menu16">Coats & Jackets</a></h6>

                                    <div class=""><a style="color: #000000;" title="Jackets" class='' href="https://www.shein.com/Jackets-c-1776.html?icn=jackets&amp;ici=www_navbar04menu16dir01">Jackets</a></div>

                                    <div class=""><a style="color: #000000;" title="Outerwear" class='' href="https://www.shein.com/Outerwear-c-1735.html?icn=outerwear&amp;ici=www_navbar04menu16dir02">Outerwear</a></div>





                                    <h6 class=""><a title="Denim" style="color: #000000;" class="" href="https://www.shein.com/denim-c-1930.html?icn=denim&amp;ici=www_navbar04menu17">Denim</a></h6>

                                    <div class=""><a style="color: #333;" title="Jeans" class='' href="https://www.shein.com/Jeans-c-1934.html?icn=jeans&amp;ici=www_navbar04menu17dir01">Jeans</a></div>

                                    <div class=""><a style="color: #333;" title="Denim Shorts" class='' href="https://www.shein.com/Denim-Shorts-c-1935.html?icn=denimshorts&amp;ici=www_navbar04menu17dir02">Denim Shorts</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="New in Tops" href="https://www.shein.com/New-In-Tops-vc-69894.html?icn=newintops&amp;ici=www_navbar04banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/15353372931272740965.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/15353372931272740965.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Tops</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="New in Sweaters &amp; Sweatshirts" href="https://www.shein.com/New-In-Sweater-Sweatshirts-vc-69955.html?icn=newinsweaterssweatshirts&amp;ici=www_navbar04banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/15353373461947553846.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/15353373461947553846.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Sweaters &amp; Sweatshirts</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="New in Bottoms" href="https://www.shein.com/New-In-Bottoms-vc-69900.html?icn=newinbottoms&amp;ici=www_navbar04banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/1535337369853653799.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/1535337369853653799.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Bottoms</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Dresses" style="color: #000000;" href="https://www.shein.com/women-dresses-c-1727.html?icn=dresses&amp;ici=www_navbar05" class="j-category-title ">Dresses</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="New in Dresses" style="color: #fb3405;" class="" href="https://www.shein.com/New-In-Dresses-vc-69890.html?icn=newdresses&amp;ici=www_navbar05menu01">New in Dresses</a></h6>





                                    <h6 class=""><a title="Best Seller" style="color: #fb3201;" class="" href="https://www.shein.com/Best-Selling-Dresses-vc-70094.html?icn=BestSellerdresses180227&amp;ici=www_navbar05menu02">Best Seller</a></h6>





                                    <h6 class=""><a title="Offers" style="color: #fb3405;" class="hoverdefalut" href="javascript:;">Offers</a></h6>

                                    <div class=""><a style="color: #fb3405;" title="All under US$10" class='' href="https://www.shein.com/Global-Dresses-all-under-10-Y-vc-41772.html?icn=saledress10&amp;ici=www_navbar05menu03dir01">All under US$10</a></div>

                                    <div class=""><a style="color: #fb3405;" title="All under US$15" class='' href="https://www.shein.com/Global-Dresses-all-under-15-Y-vc-41774.html?icn=saledress15&amp;ici=www_navbar05menu03dir02">All under US$15</a></div>

                                    <div class=""><a style="color: #fb3405;" title="All under US$20" class='' href="https://www.shein.com/Global-Dresses-all-under-20-Y-vc-41775.html?icn=saledress20&amp;ici=www_navbar05menu03dir03">All under US$20</a></div>

                                    <div class=""><a style="color: #fb3405;" title="All under US$30" class='' href="https://www.shein.com/Global-Dresses-all-under-30-Y-vc-41777.html?icn=saledress30&amp;ici=www_navbar05menu03dir04">All under US$30</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Shop by Style" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by Style</a></h6>

                                    <div class=""><a style="color: #000000;" title="Maxi Dresses" class='' href="https://www.shein.com/SHEIN-Maxi-dress-SS-vc-67549.html?icn=maxidress&amp;ici=www_navbar05menu04dir01">Maxi Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Casual Dresses" class='' href="https://www.shein.com/SHEIN-Casual-Dresses-vc-71634.html?icn=casualdress&amp;ici=www_navbar05menu04dir02">Casual Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Bodycon Dresses" class='' href="https://www.shein.com/SHEIN-Bodycon-Dresses-vc-71625.html?icn=bodycondress&amp;ici=www_navbar05menu04dir03">Bodycon Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Long Sleeve Dresses" class='' href="https://www.shein.com/SHEIN-Long-Sleeve-Dresses-vc-71626.html?icn=longsleevedress&amp;ici=www_navbar05menu04dir04">Long Sleeve Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Midi Dresses" class='' href="https://www.shein.com/SHEIN-Short-Dresses-vc-71600.html?icn=mididress&amp;ici=www_navbar05menu04dir05">Midi Dresses</a></div>





                                    <h6 class=""><a title="Shop by Design" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by Design</a></h6>

                                    <div class=""><a style="color: #000000;" title="Boho Dresses" class='' href="https://www.shein.com/SHEIN-Tribal-Dresses-vc-71640.html?icn=bohodress&amp;ici=www_navbar05menu05dir01">Boho Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Sexy Dresses" class='' href="https://www.shein.com/SHEIN-Sexy-Dresses-vc-71639.html?icn=sexydress&amp;ici=www_navbar05menu05dir02">Sexy Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Embroidery Dresses" class='' href="https://www.shein.com/SHEIN-Embroidery-Dresses-vc-71592.html?icn=embroiderydress&amp;ici=www_navbar05menu05dir03">Embroidery Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Plaid Dresses" class='' href="https://www.shein.com/SHEIN-Plaid-Dresses-vc-71619.html?icn=Plaid&amp;ici=www_navbar05menu05dir04">Plaid Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Off Shoulder Dresses" class='' href="https://www.shein.com/SHEIN-Off-the-Shoulder-Dresses-vc-71608.html?icn=OffShoulderDresses180227&amp;ici=www_navbar05menu05dir05">Off Shoulder Dresses</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Shop by Color" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by Color</a></h6>

                                    <div class=""><a style="color: #000000;" title="Floral Dresses" class='' href="https://www.shein.com/SHEIN-Floral-Dresses-vc-71617.html?icn=floraldress&amp;ici=www_navbar05menu06dir01">Floral Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="White Dresses" class='' href="https://www.shein.com/SHEIN-White-Dress-vc-67274.html?icn=whitedress&amp;ici=www_navbar05menu06dir02">White Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Red Dresses" class='' href="https://www.shein.com/SHEIN-Red-Dresses-vc-71585.html?icn=reddress&amp;ici=www_navbar05menu06dir03">Red Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Black Dresses" class='' href="https://www.shein.com/SHEIN-Black-Dresses-vc-71580.html?icn=blackdress&amp;ici=www_navbar05menu06dir04">Black Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Pink Dresses" class='' href="https://www.shein.com/SHEIN-Pink-Dresses-vc-71584.html?icn=pinkdresses180227&amp;ici=www_navbar05menu06dir05">Pink Dresses</a></div>





                                    <h6 class=""><a title="Shop by Occasion" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by Occasion</a></h6>

                                    <div class=""><a style="color: #000000;" title="Vacation" class='' href="https://www.shein.com/SHEIN-Vacation-Dresses-vc-71641.html?icn=vacationdresses&amp;ici=www_navbar05menu07dir01">Vacation</a></div>

                                    <div class=""><a style="color: #000000;" title="Formal" class='' href="https://www.shein.com/WWW-Formal-Dresses-vc-18625.html?icn=formaldresses&amp;ici=www_navbar05menu07dir02">Formal</a></div>

                                    <div class=""><a style="color: #000000;" title="Working" class='' href="https://www.shein.com/SHEIN-Workwear-Dresses-vc-71615.html?icn=workingdresses&amp;ici=www_navbar05menu07dir03">Working</a></div>

                                    <div class=""><a style="color: #000000;" title="Party" class='' href="https://www.shein.com/SHEIN-Party-Dresses-vc-71637.html?icn=partydresses&amp;ici=www_navbar05menu07dir04">Party</a></div>

                                    <div class=""><a style="color: #000000;" title="Going out" class='' href="https://www.shein.com/SHEIN-Going-Out-Dresses-vc-71611.html?icn=goingoutdress&amp;ici=www_navbar05menu07dir05">Going out</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="New in Dresses" href="https://www.shein.com/New-In-Dresses-vc-69890.html?icn=newindresses80813&amp;ici=www_navbar05banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/28/1535437380142996273.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/28/1535437380142996273.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Dresses</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Maxi Dresses" href="https://www.shein.com/SHEIN-Maxi-dress-SS-vc-67549.html?icn=maxidress&amp;ici=www_navbar05banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/28/15354373891129307429.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/28/15354373891129307429.jpg"/>
                                        </a>

                                        <p class="pic-strong">Maxi Dresses</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Fall &amp; Winter" href="https://www.shein.com/SHEIN-Fall-Winter-Dresses-vc-74585.html?icn=fallwinterdresses&amp;ici=www_navbar05banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/28/15354374013794719259.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/28/15354374013794719259.jpg"/>
                                        </a>

                                        <p class="pic-strong">Fall &amp; Winter</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Plus Size" style="color: #000000;" href="https://www.shein.com/Plus-Size-c-1888.html?icn=plussize&amp;ici=www_navbar06" class="j-category-title ">Plus Size</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="New in" style="color: #000000;" class="" href="https://www.shein.com/New-In-Plus-Size-vc-69893.html?icn=newin&amp;ici=www_navbar06menu01">New in</a></h6>





                                    <h6 class=""><a title="Best Seller" style="color: #000000;" class="" href="https://www.shein.com/Best-Selling-Plus-Size-vc-70086.html?icn=bestseller&amp;ici=www_navbar06menu02">Best Seller</a></h6>





                                    <h6 class=""><a title="Special Offer" style="color: #000000;" class="hoverdefalut" href="javascript:;">Special Offer</a></h6>

                                    <div class=""><a style="color: #000000;" title="All Under US$9.99" class='' href="https://www.shein.com/SHEIN-Plus-Size-all-under-9-99-vc-73285.html?icn=allunder10&amp;ici=www_navbar06menu03dir01">All Under US$9.99</a></div>

                                    <div class=""><a style="color: #fb0101;" title="Plus Size Swimwear-From US$4" class='' href="https://www.shein.com/plus-size-swimwears-on-sale-vc-74105.html?icn=plussizeswimwear&amp;ici=www_navbar06menu03dir02">Plus Size Swimwear-From US$4</a></div>

                                    <div class=""><a style="color: #000000;" title="Summer Sale-Up to 80% Off" class='' href="https://www.shein.com/plus-size-on-sale-vc-58527.html?icn=summersale&amp;ici=www_navbar06menu03dir03">Summer Sale-Up to 80% Off</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Blouses" class='' href="https://www.shein.com/Plus-Size-Blouses-c-1891.html?icn=plussizeblouses&amp;ici=www_navbar06menu03dir05">Plus Size Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Tops" class='' href="https://www.shein.com/Plus-Size-Tops-c-1890.html?icn=plussizetops&amp;ici=www_navbar06menu03dir06">Plus Size Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Swimwear" class='' href="https://www.shein.com/Plus-Size-Swimwear-c-1941.html?icn=plussizeswimwear&amp;ici=www_navbar06menu03dir07">Plus Size Swimwear</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Jumpsuits" class='' href="https://www.shein.com/Plus-Size-Jumpsuits-c-1927.html?icn=plussizejumpsuits&amp;ici=www_navbar06menu03dir08">Plus Size Jumpsuits</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Co-Ords" class='' href="https://www.shein.com/Plus-Size-Co-Ords-c-1928.html?icn=plussizecoords&amp;ici=www_navbar06menu03dir09">Plus Size Co-Ords</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Shorts" class='' href="https://www.shein.com/Plus-Size-Shorts-c-1968.html?icn=plussizeshorts&amp;ici=www_navbar06menu03dir10">Plus Size Shorts</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Skirts" class='' href="https://www.shein.com/Plus-Size-Skirts-c-1892.html?icn=plussizeskirts&amp;ici=www_navbar06menu03dir11">Plus Size Skirts</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Bodysuits" class='' href="https://www.shein.com/Plus-Size-Bodysuits-c-2019.html?icn=plussizebodysuits&amp;ici=www_navbar06menu03dir12">Plus Size Bodysuits</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Dresses" class='' href="https://www.shein.com/Plus-Size-Dresses-c-1889.html?icn=plussizedresses&amp;ici=www_navbar06menu03dir14">Plus Size Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Denim" class='' href="https://www.shein.com/Plus-Size-Denim-c-2055.html?icn=plussizedenim&amp;ici=www_navbar06menu03dir15">Plus Size Denim</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Pants" class='' href="https://www.shein.com/Plus-Size-Pants-c-1893.html?icn=plussizepants&amp;ici=www_navbar06menu03dir16">Plus Size Pants</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Intimates" class='' href="https://www.shein.com/Plus-Size-Intimates-c-1944.html?icn=plussizeintimates&amp;ici=www_navbar06menu03dir17">Plus Size Intimates</a></div>

                                    <div class=""><a style="color: #fe1103;" title="Plus Size Sweatshirt" class='' href="https://www.shein.com/Plus-Size-Sweatshirt-c-2056.html?icn=plussizesweatshirt&amp;ici=www_navbar06menu03dir18">Plus Size Sweatshirt</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Sweater" class='' href="https://www.shein.com/Plus-Size-Sweater-c-1939.html?icn=plussizesweater&amp;ici=www_navbar06menu03dir19">Plus Size Sweater</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Coats &amp; Jackets" class='' href="https://www.shein.com/Plus-Size-Coats--Jackets-c-1940.html?icn=plussizecoatsjackets&amp;ici=www_navbar06menu03dir20">Plus Size Coats &amp; Jackets</a></div>

                                    <div class=""><a style="color: #000000;" title="Plus Size Loungewear" class='' href="https://www.shein.com/Plus-Size-Loungewear-c-1938.html?icn=plussizeloungewear&amp;ici=www_navbar06menu03dir21">Plus Size Loungewear</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="TRENDING" style="color: #000000;" class="hoverdefalut" href="javascript:;">TRENDING</a></h6>

                                    <div class=""><a style="color: #fc1002;" title="Casual Chic" class='' href="https://www.shein.com/SHEIN-Casual-Plus-Size-vc-72561.html?icn=casualchic&amp;ici=www_navbar06menu04dir01">Casual Chic</a></div>

                                    <div class=""><a style="color: #000000;" title="Color Block" class='' href="https://www.shein.com/SHEIN-PLUS-SIZE-Color-Block-vc-74020.html?icn=colorblock&amp;ici=www_navbar06menu04dir02">Color Block</a></div>

                                    <div class=""><a style="color: #000000;" title="Buttons Up" class='' href="https://www.shein.com/SHEIN-PLUS-SIZE-Buttons-Up-vc-74021.html?icn=bottonsup&amp;ici=www_navbar06menu04dir03">Buttons Up</a></div>

                                    <div class=""><a style="color: #000000;" title="Bow Tie" class='' href="https://www.shein.com/SHEIN-PLUS-SIZE-Bow-Tie-vc-74022.html?icn=bowtie&amp;ici=www_navbar06menu04dir04">Bow Tie</a></div>

                                    <div class=""><a style="color: #000000;" title="Floral Print" class='' href="https://www.shein.com/SHEIN-PLUS-SIZE-Floral-Print-vc-74023.html?icn=floralprint&amp;ici=www_navbar06menu04dir05">Floral Print</a></div>

                                    <div class=""><a style="color: #000000;" title="Tassel" class='' href="https://www.shein.com/SHEIN-PLUS-SIZE-Tassel-vc-74024.html?icn=tassel&amp;ici=www_navbar06menu04dir06">Tassel</a></div>

                                    <div class=""><a style="color: #000000;" title="Sporty" class='' href="https://www.shein.com/SHEIN-Plus-Size-Sporty-vc-74389.html?icn=sporty&amp;ici=www_navbar06menu04dir07">Sporty</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="Fashion" href="https://www.shein.com/SHEIN-Plus-Size-Fashion-vc-74316.html?icn=fashion&amp;ici=www_navbar06banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/15350983532370911583.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/15350983532370911583.jpg"/>
                                        </a>

                                        <p class="pic-strong">Fashion</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Workwear" href="https://www.shein.com/SHEIN-Plus-Size-Workwear-vc-74297.html?icn=workwear&amp;ici=www_navbar06banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/15350984181710510495.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/15350984181710510495.jpg"/>
                                        </a>

                                        <p class="pic-strong">Workwear</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Weekend" href="https://www.shein.com/SHEIN-Plus-Size-Weekend-vc-74298.html?icn=weekend&amp;ici=www_navbar06banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/1535098449193907456.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/1535098449193907456.jpg"/>
                                        </a>

                                        <p class="pic-strong">Weekend</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Accessories" style="color: #000000;" href="https://www.shein.com/Accessories-vc-35269.html?icn=accessories&amp;ici=www_navbar07" class="j-category-title ">Accessories</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="Best Selling - Accessories" style="color: #fe0c02;" class="" href="https://www.shein.com/Best-Selling-Women-Accessories-vc-70128.html?icn=Accessories&amp;ici=www_navbar07menu01">Best Selling - Accessories</a></h6>





                                    <h6 class=""><a title="Best Selling - Shoes" style="color: #fe0202;" class="" href="https://www.shein.com/Best-Selling-Shoes-vc-70096.html?icn=shoes&amp;ici=www_navbar07menu02">Best Selling - Shoes</a></h6>





                                    <h6 class=""><a title="Best Selling - Bags" style="color: #fc0202;" class="" href="https://www.shein.com/Best-Selling-Bags-vc-70107.html?icn=bags&amp;ici=www_navbar07menu03">Best Selling - Bags</a></h6>





                                    <h6 class=""><a title="Special Offer" style="color: #000000;" class="hoverdefalut" href="javascript:;">Special Offer</a></h6>

                                    <div class=""><a style="color: #000000;" title="Tops &amp; Sandals" class='' href="https://www.shein.com/global-Tops-Sandals-vc-58457.html?icn=TopsSandals180227&amp;ici=www_navbar07menu04dir01">Tops &amp; Sandals</a></div>

                                    <div class=""><a style="color: #000000;" title="Dresses &amp; Pumps" class='' href="https://www.shein.com/Global-dress-Pumps-Heels-vc-41516.html?icn=dressheels&amp;ici=www_navbar07menu04dir02">Dresses &amp; Pumps</a></div>

                                    <div class=""><a style="color: #000000;" title="Tops &amp; Sneakers" class='' href="https://www.shein.com/Global-top-Sneakers-Y-vc-41514.html?icn=topssneakers&amp;ici=www_navbar07menu04dir03">Tops &amp; Sneakers</a></div>

                                    <div class=""><a style="color: #000000;" title="Accessories Starting from US$2" class='' href="https://www.shein.com/global-Acc-Starting-From-2-vc-71033.html?icn=StartingFrom2&amp;ici=www_navbar07menu04dir04">Accessories Starting from US$2</a></div>

                                    <div class=""><a style="color: #000000;" title="Accessories All under US$10" class='' href="https://www.shein.com/blobal-Acc-Sale-Under-10-vc-71034.html?icn=SaleUnder10&amp;ici=www_navbar07menu04dir05">Accessories All under US$10</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="All Shoes" style="color: #000000;" class="" href="https://www.shein.com/Shoes-c-1745.html?icn=shoes&amp;ici=www_navbar07menu05">All Shoes</a></h6>

                                    <div class=""><a style="color: #000000;" title="Sandals" class='' href="https://www.shein.com/Sandals-c-1751.html?icn=sandals&amp;ici=www_navbar07menu05dir01">Sandals</a></div>

                                    <div class=""><a style="color: #000000;" title="Sneakers" class='' href="https://www.shein.com/Sneakers-c-1913.html?icn=sneakers&amp;ici=www_navbar07menu05dir02">Sneakers</a></div>

                                    <div class=""><a style="color: #000000;" title="Pumps" class='' href="https://www.shein.com/Pumps-c-1750.html?icn=pumpsheels&amp;ici=www_navbar07menu05dir03">Pumps</a></div>

                                    <div class=""><a style="color: #000000;" title="Flats" class='' href="https://www.shein.com/Flats-c-1881.html?icn=flats&amp;ici=www_navbar07menu05dir04">Flats</a></div>

                                    <div class=""><a style="color: #000000;" title="Boots" class='' href="https://www.shein.com/Boots-c-1748.html?icn=boots&amp;ici=www_navbar07menu05dir05">Boots</a></div>

                                    <div class=""><a style="color: #000000;" title="Wedges" class='' href="https://www.shein.com/Wedges-c-1749.html?icn=wedges&amp;ici=www_navbar07menu05dir06">Wedges</a></div>

                                    <div class=""><a style="color: #000000;" title="Slippers" class='' href="https://www.shein.com/Slippers-c-1929.html?icn=slippers171121&amp;ici=www_navbar07menu05dir07">Slippers</a></div>





                                    <h6 class=""><a title="Beauty" style="color: #000000;" class="" href="https://www.shein.com/Beauty-c-1864.html?icn=beauty&amp;ici=www_navbar07menu06">Beauty</a></h6>

                                    <div class=""><a style="color: #000000;" title="Makeup Brushes" class='' href="https://www.shein.com/Makeup-Brushes-c-1865.html?icn=makeupbrushes&amp;ici=www_navbar07menu06dir01">Makeup Brushes</a></div>

                                    <div class=""><a style="color: #000000;" title="Makeup Bags" class='' href="https://www.shein.com/Makeup-Bags-c-1909.html?icn=makeupbags&amp;ici=www_navbar07menu06dir02">Makeup Bags</a></div>

                                    <div class=""><a style="color: #000000;" title="Makeup Tools" class='' href="https://www.shein.com/Makeup-Tools-c-1911.html?icn=makeuptools&amp;ici=www_navbar07menu06dir03">Makeup Tools</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Jewelry" style="color: #000000;" class="" href="https://www.shein.com/Jewelry-c-1760.html?icn=jewelry&amp;ici=www_navbar07menu07">Jewelry</a></h6>

                                    <div class=""><a style="color: #000000;" title="Necklaces" class='' href="https://www.shein.com/Necklaces-c-1755.html?icn=necklaces&amp;ici=www_navbar07menu07dir01">Necklaces</a></div>

                                    <div class=""><a style="color: #000000;" title="Earrings" class='' href="https://www.shein.com/Earrings-c-1757.html?icn=earrings&amp;ici=www_navbar07menu07dir02">Earrings</a></div>

                                    <div class=""><a style="color: #000000;" title="Rings" class='' href="https://www.shein.com/Rings-c-1759.html?icn=rings&amp;ici=www_navbar07menu07dir03">Rings</a></div>

                                    <div class=""><a style="color: #000000;" title="Bracelets" class='' href="https://www.shein.com/Bracelets-c-1758.html?icn=bracelets&amp;ici=www_navbar07menu07dir04">Bracelets</a></div>

                                    <div class=""><a style="color: #000000;" title="Body Jewellery" class='' href="https://www.shein.com/Body-Jewellery-c-1908.html?icn=bodyjewellery&amp;ici=www_navbar07menu07dir05">Body Jewellery</a></div>





                                    <h6 class=""><a title="All Bags" style="color: #000000;" class="" href="https://www.shein.com/Women-Bags-c-2043.html&amp;ici=www_navbar07menu08">All Bags</a></h6>

                                    <div class=""><a style="color: #000000;" title="Crossbody" class='' href="https://www.shein.com/Crossbody-c-2152.html?icn=crossbody&amp;ici=www_navbar07menu08dir01">Crossbody</a></div>

                                    <div class=""><a style="color: #000000;" title="Shoulder &amp; Tote Bag" class='' href="https://www.shein.com/Shoulder--Tote-Bag-c-1764.html?icn=shouldertotebag&amp;ici=www_navbar07menu08dir02">Shoulder &amp; Tote Bag</a></div>

                                    <div class=""><a style="color: #000000;" title="Backpack" class='' href="https://www.shein.com/Backpack-c-2151.html?icn=backpack&amp;ici=www_navbar07menu08dir03">Backpack</a></div>

                                    <div class=""><a style="color: #000000;" title="Evening &amp; Clutch" class='' href="https://www.shein.com/Evening--Clutch-c-2153.html?icn=eveningclutch&amp;ici=www_navbar07menu08dir04">Evening &amp; Clutch</a></div>

                                    <div class=""><a style="color: #000000;" title="Purses" class='' href="https://www.shein.com/Purses-c-2154.html?icn=purses&amp;ici=www_navbar07menu08dir05">Purses</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Accessories" style="color: #000000;" class="" href="https://www.shein.com/Accessories-c-1765.html?icn=accessories&amp;ici=www_navbar07menu09">Accessories</a></h6>

                                    <div class=""><a style="color: #000000;" title="Sunglasses" class='' href="https://www.shein.com/Sunglasses-c-1770.html?icn=sunglasses&amp;ici=www_navbar07menu09dir01">Sunglasses</a></div>

                                    <div class=""><a style="color: #000000;" title="Belts" class='' href="https://www.shein.com/Belts-c-1875.html?icn=belts&amp;ici=www_navbar07menu09dir02">Belts</a></div>

                                    <div class=""><a style="color: #000000;" title="Tech" class='' href="https://www.shein.com/Tech-c-1925.html?icn=tech&amp;ici=www_navbar07menu09dir03">Tech</a></div>

                                    <div class=""><a style="color: #000000;" title="Keychains" class='' href="https://www.shein.com/Keychains-c-1914.html?icn=keychains&amp;ici=www_navbar07menu09dir04">Keychains</a></div>

                                    <div class=""><a style="color: #000000;" title="Hair Accessories" class='' href="https://www.shein.com/Hair-Accessories-c-1778.html?icn=hairaccessories&amp;ici=www_navbar07menu09dir05">Hair Accessories</a></div>

                                    <div class=""><a style="color: #000000;" title="Socks &amp; Tights" class='' href="https://www.shein.com/Socks--Tights-c-1899.html?icn=sockstights&amp;ici=www_navbar07menu09dir06">Socks &amp; Tights</a></div>

                                    <div class=""><a style="color: #000000;" title="Hats &amp; Gloves" class='' href="https://www.shein.com/Hats-c-1772.html?icn=hatsgloves&amp;ici=www_navbar07menu09dir07">Hats &amp; Gloves</a></div>

                                    <div class=""><a style="color: #000000;" title="Scarves" class='' href="https://www.shein.com/Scarves-c-1872.html?icn=scarves&amp;ici=www_navbar07menu09dir08">Scarves</a></div>





                                    <h6 class=""><a title="Home" style="color: #000000;" class="" href="https://www.shein.com/Home-c-2032.html?icn=home&amp;ici=www_navbar07menu10">Home</a></h6>

                                    <div class=""><a style="color: #000000;" title="Office &amp; School Supplies" class='' href="https://www.shein.com/Office--School-Supplies-c-1963.html?icn=officeschoolsupplies&amp;ici=www_navbar07menu10dir01">Office &amp; School Supplies</a></div>

                                    <div class=""><a style="color: #000000;" title="Home Decor" class='' href="https://www.shein.com/Home-Decor-c-1954.html?icn=homedecor&amp;ici=www_navbar07menu10dir02">Home Decor</a></div>

                                    <div class=""><a style="color: #000000;" title="Bed &amp; Bath" class='' href="https://www.shein.com/Bed--Bath-c-1942.html?icn=bedbath&amp;ici=www_navbar07menu10dir03">Bed &amp; Bath</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="New in Shoes" href="https://www.shein.com/New-In-Shoes-vc-69956.html?icn=newinshoes&amp;ici=www_navbar07banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/1535337201667177568.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/1535337201667177568.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Shoes</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="New in Bags" href="https://www.shein.com/New-In-Bags-vc-69957.html?icn=newinbags&amp;ici=www_navbar07banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/15353372583078558719.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/15353372583078558719.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Bags</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="New in Jewelry" href="https://www.shein.com/New-In-Jewelry-vc-69915.html?icn=newinjewelry&amp;ici=www_navbar07banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/15353372632661694904.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/15353372632661694904.jpg"/>
                                        </a>

                                        <p class="pic-strong">New in Jewelry</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Men" style="color: #000000;" href="https://www.shein.com/Men-Clothing-c-1969.html?icn=menclothing&amp;ici=www_navbar08" class="j-category-title ">Men</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="Mens Offers" style="color: #000000;" class="hoverdefalut" href="javascript:;">Mens Offers</a></h6>

                                    <div class=""><a style="color: #fe0202;" title="18New Autumn" class='' href="https://www.shein.com/Men-Fall-Winter-vc-75093.html?icn=fallwinter&amp;ici=www_navbar08menu01dir01">18New Autumn</a></div>

                                    <div class=""><a style="color: #fc0303;" title="Clearance Sale" class='' href="https://www.shein.com/Men-Sale-vc-71541.html?icn=sale&amp;ici=www_navbar08menu01dir02">Clearance Sale</a></div>

                                    <div class=""><a style="color: #000000;" title="Hot Tops All under US$16" class='' href="https://www.shein.com/HOT-TOPS-all-under-16-vc-74113.html?icn=allunder16&amp;ici=www_navbar08menu01dir03">Hot Tops All under US$16</a></div>

                                    <div class=""><a style="color: #000000;" title="Hot Bottoms All under US$20" class='' href="https://www.shein.com/HOT-BOTTOMS-all-under-20-vc-74114.html?icn=allunder20&amp;ici=www_navbar08menu01dir04">Hot Bottoms All under US$20</a></div>

                                    <div class=""><a style="color: #000000;" title="up to 50%  off" class='' href="https://www.shein.com/Men-up-to-50off-vc-73079.html?icn=upto50off&amp;ici=www_navbar08menu01dir05">up to 50%  off</a></div>





                                    <h6 class=""><a title="Accessories" style="color: #000000;" class="" href="https://www.shein.com/Men-Accessories-c-2027.html?icn=menaccessories&amp;ici=www_navbar08menu02">Accessories</a></h6>





                                    <h6 class=""><a title="Shoes" style="color: #000000;" class="" href="https://www.shein.com/Men-Shoes-c-2089.html?icn=menshoes&amp;ici=www_navbar08menu03">Shoes</a></h6>





                                    <h6 class=""><a title="Bags" style="color: #000000;" class="" href="https://www.shein.com/Men-Bags-c-2090.html?icn=menbags&amp;ici=www_navbar08menu04">Bags</a></h6>





                                    <h6 class=""><a title="Jewelry" style="color: #000000;" class="" href="https://www.shein.com/Men-Jewelry-c-2028.html?icn=menjewelry&amp;ici=www_navbar08menu05">Jewelry</a></h6>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Shop by  Category" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by  Category</a></h6>





                                    <h6 class=""><a title="Tops" style="color: #000000;" class="" href="https://www.shein.com/Men-Tops-c-1970.html?icn=mentops&amp;ici=www_navbar08menu07">Tops</a></h6>

                                    <div class=""><a style="color: #050000;" title="T-Shirts &amp; Tanks" class='' href="https://www.shein.com/Men-T-Shirts--Tanks-c-1980.html?icn=mentshirtstanks&amp;ici=www_navbar08menu07dir01">T-Shirts &amp; Tanks</a></div>

                                    <div class=""><a style="color: #fc0f01;" title="Polo Shirts" class='' href="https://www.shein.com/Men-Polo-Shirts-c-1981.html?icn=menpoloshirts&amp;ici=www_navbar08menu07dir02">Polo Shirts</a></div>

                                    <div class=""><a style="color: #000000;" title="Shirts" class='' href="https://www.shein.com/Men-Shirts-c-1979.html?icn=menshirts&amp;ici=www_navbar08menu07dir03">Shirts</a></div>





                                    <h6 class=""><a title="Bottoms" style="color: #000000;" class="" href="https://www.shein.com/Men-Bottoms-c-2045.html?icn=menbottoms&amp;ici=www_navbar08menu08">Bottoms</a></h6>

                                    <div class=""><a style="color: #000000;" title="Pants" class='' href="https://www.shein.com/Men-Pants-c-1978.html?icn=menpants&amp;ici=www_navbar08menu08dir01">Pants</a></div>

                                    <div class=""><a style="color: #000000;" title="Shorts" class='' href="https://www.shein.com/Men-Shorts-c-1976.html?icn=menshorts&amp;ici=www_navbar08menu08dir02">Shorts</a></div>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Denim" style="color: #000000;" class="" href="https://www.shein.com/Men-Denim-c-1973.html?icn=mendenim&amp;ici=www_navbar08menu09">Denim</a></h6>

                                    <div class=""><a style="color: #000000;" title="Jeans" class='' href="https://www.shein.com/Men-Jeans-c-1989.html?icn=menjeans&amp;ici=www_navbar08menu09dir01">Jeans</a></div>





                                    <h6 class=""><a title="Knitwear" style="color: #000000;" class="" href="https://www.shein.com/Knitwear-c-2046.html?icn=knitwear&amp;ici=www_navbar08menu10">Knitwear</a></h6>





                                    <h6 class=""><a title="Sweatshirts" style="color: #000000;" class="" href="https://www.shein.com/Men-Sweatshirts-c-1974.html?icn=mensweatshirts&amp;ici=www_navbar08menu11">Sweatshirts</a></h6>





                                    <h6 class=""><a title="Coats &amp; Jackets" style="color: #000000;" class="" href="https://www.shein.com/Coats--Jackets-c-1983.html?icn=coatsjackets&amp;ici=www_navbar08menu12">Coats & Jackets</a></h6>





                                    <h6 class=""><a title="Two-piece Outfits" style="color: #000000;" class="" href="https://www.shein.com/Men-Two-piece-Outfits-c-1975.html?icn=mentwopieceoutfits&amp;ici=www_navbar08menu13">Two-piece Outfits</a></h6>





                                    <h6 class=""><a title="Onesies &amp; Loungewear" style="color: #000000;" class="" href="https://www.shein.com/Men-Onesies--Loungewear-c-1972.html?icn=menonesiesloungewear&amp;ici=www_navbar08menu14">Onesies & Loungewear</a></h6>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="TRENDING" style="color: #000000;" class="hoverdefalut" href="javascript:;">TRENDING</a></h6>

                                    <div class=""><a style="color: #fe1403;" title="Top Rated" class='' href="https://www.shein.com/SHEIN-MEN-Top-Rated-vc-73999.html?icn=toprated&amp;ici=www_navbar08menu15dir01">Top Rated</a></div>

                                    <div class=""><a style="color: #000000;" title="Casual" class='' href="https://www.shein.com/SHEIN-Men-Clothing-Casual-vc-73155.html?icn=casual&amp;ici=www_navbar08menu15dir02">Casual</a></div>

                                    <div class=""><a style="color: #000000;" title="Sporty" class='' href="https://www.shein.com/SHEIN-Men-Clothing-Sporty-vc-73157.html?icn=sporty&amp;ici=www_navbar08menu15dir03">Sporty</a></div>

                                    <div class=""><a style="color: #000000;" title="Letter" class='' href="https://www.shein.com/SHEIN-Men-Clothing-Letter-vc-73158.html?icn=letter&amp;ici=www_navbar08menu15dir04">Letter</a></div>

                                    <div class=""><a style="color: #000000;" title="Striped" class='' href="https://www.shein.com/SHEIN-Men-Clothing-Striped-vc-73159.html?icn=striped&amp;ici=www_navbar08menu15dir05">Striped</a></div>

                                    <div class=""><a style="color: #000000;" title="Graphic" class='' href="https://www.shein.com/SHEIN-Men-Clothing-Graphic-vc-73171.html?icn=graphic&amp;ici=www_navbar08menu15dir06">Graphic</a></div>

                                    <div class=""><a style="color: #000000;" title="Black" class='' href="https://www.shein.com/SHEIN-Men-Clothing-Black-vc-73151.html?icn=black&amp;ici=www_navbar08menu15dir07">Black</a></div>

                                    <div class=""><a style="color: #fe0d03;" title="Casual Hoodies" class='' href="https://www.shein.com/SHEIN-MEN-Casual-Hoodies-vc-74000.html?icn=casualhoodies&amp;ici=www_navbar08menu15dir08">Casual Hoodies</a></div>

                                    <div class=""><a style="color: #000000;" title="Street Punk" class='' href="https://www.shein.com/SHEIN-MEN-Street-Punk-vc-74001.html?icn=streetpunk&amp;ici=www_navbar08menu15dir09">Street Punk</a></div>

                                    <div class=""><a style="color: #fb1302;" title="Modern Classic" class='' href="https://www.shein.com/SHEIN-MEN-Modern-Classic-vc-74002.html?icn=modernclassic&amp;ici=www_navbar08menu15dir10">Modern Classic</a></div>

                                    <div class=""><a style="color: #000000;" title="Mixed Prints" class='' href="https://www.shein.com/SHEIN-MEN-Mixed-Prints-vc-74008.html?icn=mixedprints&amp;ici=www_navbar08menu15dir11">Mixed Prints</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="TOP RATED" href="https://www.shein.com/SHEIN-MEN-Top-Rated-vc-73999.html?icn=toprated&amp;ici=www_navbar08banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/15353361193508728538.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/15353361193508728538.jpg"/>
                                        </a>

                                        <p class="pic-strong">TOP RATED</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="NEW IN" href="https://www.shein.com/New-in-Men-vc-67094.html?icn=newinmen&amp;ici=www_navbar08banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/1535336148498220212.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/1535336148498220212.jpg"/>
                                        </a>

                                        <p class="pic-strong">NEW IN</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="HOT SALE" href="https://www.shein.com/Men-Best-Sellers-vc-71459.html?icn=hotsale&amp;ici=www_navbar08banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/27/15353361821773974385.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/27/15353361821773974385.jpg"/>
                                        </a>

                                        <p class="pic-strong">HOT SALE</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Kids" style="color: #000000;" href="https://www.shein.com/kids-c-2031.html?icn=kids&amp;ici=www_navbar09" class="j-category-title ">Kids</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="Fall Preview" style="color: #fe2702;" class="" href="https://www.shein.com/New-in-Kids-vc-67091.html?icn=fallpreview&amp;ici=www_navbar09menu01">Fall Preview</a></h6>





                                    <h6 class=""><a title="Special Offer" style="color: #050505;" class="hoverdefalut" href="javascript:;">Special Offer</a></h6>

                                    <div class=""><a style="color: #000000;" title="Best Sellers" class='' href="https://www.shein.com/kids-best-selling2018611-vc-71436.html?icn=BestSellers&amp;ici=www_navbar09menu02dir01">Best Sellers</a></div>

                                    <div class=""><a style="color: #fe2702;" title="Down to US$1" class='' href="https://www.shein.com/kids-clearance2018611-vc-71424.html?icn=downto1&amp;ici=www_navbar09menu02dir02">Down to US$1</a></div>





                                    <h6 class=""><a title="Occasion" style="color: #000000;" class="hoverdefalut" href="javascript:;">Occasion</a></h6>

                                    <div class=""><a style="color: #000000;" title="Formal Dresses" class='' href="https://www.shein.com/SHEIN-Kids-Formal-Wear-vc-73887.html?icn=formaldresses&amp;ici=www_navbar09menu03dir01">Formal Dresses</a></div>

                                    <div class=""><a style="color: #030303;" title="School day" class='' href="https://www.shein.com/SHEIN-Kids-Back-to-School-vc-74036.html?icn=schoolday&amp;ici=www_navbar09menu03dir02">School day</a></div>

                                    <div class=""><a style="color: #fe2702;" title="Family Look" class='' href="https://www.shein.com/SHEIN-Family-Look-vc-72544.html?icn=familylook&amp;ici=www_navbar09menu03dir03">Family Look</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Toddler Girl(1-6Y)" style="color: #000000;" class="" href="https://www.shein.com/Toddler-Girl-c-2058.html?icn=toddlergirl&amp;ici=www_navbar09menu04">Toddler Girl(1-6Y)</a></h6>

                                    <div class=""><a style="color: #000000;" title="Toddler Girl Dresses" class='' href="https://www.shein.com/Toddler-Girl-Dresses-c-2065.html?icn=toddlergirldresses&amp;ici=www_navbar09menu04dir01">Toddler Girl Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Girl Two-piece Outfits" class='' href="https://www.shein.com/Toddler-Girl-Two-piece-Outfits-c-2117.html?icn=toddlergirltwopieceoutfits&amp;ici=www_navbar09menu04dir02">Toddler Girl Two-piece Outfits</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Girl Jumpsuits" class='' href="https://www.shein.com/Toddler-Girl-Jumpsuits-c-2067.html?icn=toddlergirljumpsuits&amp;ici=www_navbar09menu04dir03">Toddler Girl Jumpsuits</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Girl Tops" class='' href="https://www.shein.com/Toddler-Girl-Tops-vc-74400.html?icn=toddlergirltops&amp;ici=www_navbar09menu04dir04">Toddler Girl Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Girl Bottoms" class='' href="https://www.shein.com/Toddler-Girl-Bottoms-vc-74401.html?icn=toddlergirlbottoms&amp;ici=www_navbar09menu04dir05">Toddler Girl Bottoms</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Girl Others" class='' href="https://www.shein.com/Toddler-Girl-Others-vc-74402.html?icn=toddlergirlothers&amp;ici=www_navbar09menu04dir06">Toddler Girl Others</a></div>





                                    <h6 class=""><a title="Big Girl(6-15Y)" style="color: #000000;" class="" href="https://www.shein.com/Girls-Clothing-c-1991.html?icn=biggirl&amp;ici=www_navbar09menu05">Big Girl(6-15Y)</a></h6>

                                    <div class=""><a style="color: #000000;" title="Girls Dresses" class='' href="https://www.shein.com/Girls-Dresses-c-2005.html?icn=girlsdresses&amp;ici=www_navbar09menu05dir01">Girls Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Girls Blouses" class='' href="https://www.shein.com/Girls-Blouses-c-2004.html?icn=girlsblouses&amp;ici=www_navbar09menu05dir02">Girls Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Girls Two-piece Outfits" class='' href="https://www.shein.com/Girls-Two-piece-Outfits-c-2016.html?icn=girlstwopieceoutfits&amp;ici=www_navbar09menu05dir03">Girls Two-piece Outfits</a></div>

                                    <div class=""><a style="color: #000000;" title="Girls Tops" class='' href="https://www.shein.com/Girls-Tops-vc-74406.html?icn=girlstops&amp;ici=www_navbar09menu05dir04">Girls Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Girls Bottoms" class='' href="https://www.shein.com/Girls-Bottoms-vc-74407.html?icn=girlsbottoms&amp;ici=www_navbar09menu05dir05">Girls Bottoms</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Toddler Boy(1-6Y)" style="color: #000000;" class="" href="https://www.shein.com/Toddler-Boy-c-2059.html?icn=toddlerboy&amp;ici=www_navbar09menu06">Toddler Boy(1-6Y)</a></h6>

                                    <div class=""><a style="color: #000000;" title="Toddler Boy Two-piece Outfits" class='' href="https://www.shein.com/Toddler-Boy-Two-piece-Outfits-c-2108.html?icn=toddlerboytwopieceoutfits&amp;ici=www_navbar09menu06dir01">Toddler Boy Two-piece Outfits</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Boy Denim" class='' href="https://www.shein.com/Toddler-Boy-Denim-c-2114.html?icn=toddlerboydenim&amp;ici=www_navbar09menu06dir02">Toddler Boy Denim</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Boy Tops" class='' href="https://www.shein.com/Toddler-Boy-Tops-vc-74403.html?icn=toddlerboytops&amp;ici=www_navbar09menu06dir03">Toddler Boy Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Boy Bottoms" class='' href="https://www.shein.com/Toddler-Boy-Bottoms-vc-74404.html?icn=toddlerboybottoms&amp;ici=www_navbar09menu06dir04">Toddler Boy Bottoms</a></div>

                                    <div class=""><a style="color: #000000;" title="Toddler Boy Others" class='' href="https://www.shein.com/Toddler-Boy-Others-vc-74405.html?icn=toddlerboyothers&amp;ici=www_navbar09menu06dir05">Toddler Boy Others</a></div>





                                    <h6 class=""><a title="Big Boy(6-15Y)" style="color: #000000;" class="" href="https://www.shein.com/Boys-Clothing-c-1990.html?icn=bigboys&amp;ici=www_navbar09menu07">Big Boy(6-15Y)</a></h6>

                                    <div class=""><a style="color: #000000;" title="Big Boy Two-piece Outfits" class='' href="https://www.shein.com/Boys-Two-piece-Outfits-c-2000.html?icn=boystwopieceoutfits&amp;ici=www_navbar09menu07dir01">Big Boy Two-piece Outfits</a></div>

                                    <div class=""><a style="color: #000000;" title="Big Boy Denim" class='' href="https://www.shein.com/Boys-Denim-c-2002.html?icn=boysdenim&amp;ici=www_navbar09menu07dir02">Big Boy Denim</a></div>

                                    <div class=""><a style="color: #000000;" title="Big Boy Tops" class='' href="https://www.shein.com/Big-Boy-Tops-vc-74409.html?icn=bigboytops&amp;ici=www_navbar09menu07dir03">Big Boy Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Big Boy Bottoms" class='' href="https://www.shein.com/Big-Boy-Bottoms-vc-74410.html?icn=bigboybottoms&amp;ici=www_navbar09menu07dir04">Big Boy Bottoms</a></div>

                                    <div class="other-line"><a style="color: #000000;" title="跳行栏" class='hoverdefalut' href="javascript:;">跳行栏</a></div>





                                    <h6 class=""><a title="Kids Accessories" style="color: #000000;" class="" href="https://www.shein.com/Kids-Accessories-c-2022.html?icn=kidsaccessories&amp;ici=www_navbar09menu08">Kids Accessories</a></h6>

                                    <div class=""><a style="color: #000000;" title="Kids Bags" class='' href="https://www.shein.com/Kids-Bags-c-2068.html?icn=kidsbags&amp;ici=www_navbar09menu08dir01">Kids Bags</a></div>

                                    <div class=""><a style="color: #000000;" title="Kids Shoes" class='' href="https://www.shein.com/Kids-Shoes-c-2057.html?icn=Kids-Shoes&amp;ici=www_navbar09menu08dir02">Kids Shoes</a></div>

                                    <div class=""><a style="color: #000000;" title="Kids Socks &amp; Tights" class='' href="https://www.shein.com/Kids-Socks--Tights-c-2088.html?icn=kidssockstights&amp;ici=www_navbar09menu08dir03">Kids Socks &amp; Tights</a></div>

                                    <div class=""><a style="color: #000000;" title="Kids Hair Accessories" class='' href="https://www.shein.com/Kids-Hair-Accessories-c-2023.html?icn=kidshairaccessories&amp;ici=www_navbar09menu08dir04">Kids Hair Accessories</a></div>

                                    <div class=""><a style="color: #000000;" title="Kids Blanket" class='' href="https://www.shein.com/Kids-Blanket-c-2149.html?icn=kidsblanket&amp;ici=www_navbar09menu08dir05">Kids Blanket</a></div>

                                    <div class=""><a style="color: #000000;" title="Kids Hats &amp; Gloves" class='' href="https://www.shein.com/Kids-Hats--Gloves-c-2070.html?icn=kidshatsgloves&amp;ici=www_navbar09menu08dir06">Kids Hats &amp; Gloves</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="NEW IN KIDS" href="https://www.shein.com/New-in-Kids-vc-67091.html?icn=newinkids&amp;ici=www_navbar09banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/15350898501760396038.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/15350898501760396038.jpg"/>
                                        </a>

                                        <p class="pic-strong">NEW IN KIDS</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="BEST SELLERS" href="https://www.shein.com/kids-best-selling2018611-vc-71436.html?icn=kidsbestseller&amp;ici=www_navbar09banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/15350898842866071016.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/15350898842866071016.jpg"/>
                                        </a>

                                        <p class="pic-strong">BEST SELLERS</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="KIDS ON SALE" href="https://www.shein.com/kids-clearance2018611-vc-71424.html?icn=kidsonsale&amp;ici=www_navbar09banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/24/15350899202088018884.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/24/15350899202088018884.jpg"/>
                                        </a>

                                        <p class="pic-strong">KIDS ON SALE</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Sale" style="color: #ff0000;" href="https://www.shein.com/clearance-sale-vc-1100.html?icn=clearance-sale&amp;ici=www_navbar10" class="j-category-title ">Sale</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">








                                </div>
                                <div class="left">




                                    <h6 class=""><a title="Shop by Price" style="color: #000000;" class="hoverdefalut" href="javascript:;">Shop by Price</a></h6>

                                    <div class=""><a style="color: #000000;" title="All under US$5" class='' href="https://www.shein.com/all-under-5-vc-62638.html?icn=ALLunder5&amp;ici=www_navbar10menu01dir01">All under US$5</a></div>

                                    <div class=""><a style="color: #000000;" title="All under US$10" class='' href="https://www.shein.com/all-under-10-vc-62639.html?icn=ALLunder10&amp;ici=www_navbar10menu01dir02">All under US$10</a></div>

                                    <div class=""><a style="color: #000000;" title="All under US$15" class='' href="https://www.shein.com/all-under-15-vc-62640.html?icn=ALLunder15&amp;ici=www_navbar10menu01dir03">All under US$15</a></div>





                                    <h6 class=""><a title="Up to 90% off" style="color: #000000;" class="" href="https://www.shein.com/UP-TO-90-off-vc-66685.html?icn=upto90off&amp;ici=www_navbar10menu02">Up to 90% off</a></h6>





                                    <h6 class=""><a title="Bestseller on Sale" style="color: #000000;" class="" href="https://www.shein.com/Large-stocks-vc-63650.html?icn=Upto70off&amp;ici=www_navbar10menu03">Bestseller on Sale</a></h6>





                                    <h6 class=""><a title="New in Sale" style="color: #000000;" class="" href="https://www.shein.com/Global-Outlets-Newin-Y-vc-40910.html?icn=newinsale&amp;ici=www_navbar10menu04">New in Sale</a></h6>





                                    <h6 class=""><a title="SHEIN Sale" style="color: #000000;" class="" href="https://www.shein.com/SHEIN-sale-vc-57478.html?icn=sheinsale&amp;ici=www_navbar10menu05">SHEIN Sale</a></h6>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Women" style="color: #000000;" class="hoverdefalut" href="javascript:;">Women</a></h6>

                                    <div class=""><a style="color: #000000;" title="Shop Dresses" class='' href="https://www.shein.com/dresses-on-sale-vc-57479.html?icn=dresses&amp;ici=www_navbar10menu06dir01">Shop Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Blouses" class='' href="https://www.shein.com/Blouses-on-sale-vc-68201.html?icn=blouses&amp;ici=www_navbar10menu06dir02">Shop Blouses</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop T-shirts" class='' href="https://www.shein.com/T-shirts-on-sale-vc-68202.html?icn=Tshirts&amp;ici=www_navbar10menu06dir03">Shop T-shirts</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Swimwear" class='' href="https://www.shein.com/swimwear-on-sale-vc-68203.html?icn=swimwear&amp;ici=www_navbar10menu06dir04">Shop Swimwear</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop One-piece" class='' href="https://www.shein.com/one-piece-on-sale-vc-58521.html?icn=onepiece&amp;ici=www_navbar10menu06dir05">Shop One-piece</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Bottoms" class='' href="https://www.shein.com/bottoms-on-sale-vc-74075.html?icn=bottoms&amp;ici=www_navbar10menu06dir06">Shop Bottoms</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Loungewear &amp; Lingerie" class='' href="https://www.shein.com/Loungewear-Lingerie-on-sale-vc-58528.html?icn=LoungewearLingerie&amp;ici=www_navbar10menu06dir07">Shop Loungewear &amp; Lingerie</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Accessories" class='' href="https://www.shein.com/Accessories-on-sale-vc-74124.html?icn=Accessories&amp;ici=www_navbar10menu06dir08">Shop Accessories</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Shoes" class='' href="https://www.shein.com/Shoes-on-sale-vc-74125.html?icn=ShoesAccessories&amp;ici=www_navbar10menu06dir09">Shop Shoes</a></div>





                                    <h6 class=""><a title="Men" style="color: #000000;" class="hoverdefalut" href="javascript:;">Men</a></h6>

                                    <div class=""><a style="color: #000000;" title="All Sale" class='' href="https://www.shein.com/Men-All-Sale-vc-74129.html?icn=MenSale&amp;ici=www_navbar10menu07dir01">All Sale</a></div>





                                    <h6 class="other-line"><a title="跳行栏" style="color: #000000;" class="hoverdefalut" href="javascript:;">跳行栏</a></h6>





                                    <h6 class=""><a title="Plus Size" style="color: #000000;" class="hoverdefalut" href="javascript:;">Plus Size</a></h6>

                                    <div class=""><a style="color: #000000;" title="All Sale" class='' href="https://www.shein.com/plus-size-on-sale-vc-58527.html?icn=plussize180812&amp;ici=www_navbar10menu08dir01">All Sale</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Plus Size Dresses" class='' href="https://www.shein.com/plus-size-dress-on-sale-vc-74103.html?icn=plusdress180816&amp;ici=www_navbar10menu08dir02">Shop Plus Size Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Plus Size Tops" class='' href="https://www.shein.com/plus-size-tops-on-sale-vc-74104.html?icn=plustops&amp;ici=www_navbar10menu08dir03">Shop Plus Size Tops</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Plus Size Swimwear" class='' href="https://www.shein.com/plus-size-swimwears-on-sale-vc-74105.html?icn=plusswimwear&amp;ici=www_navbar10menu08dir04">Shop Plus Size Swimwear</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Plus Size Bottoms" class='' href="https://www.shein.com/plus-size-bottoms-on-sale-vc-74106.html?icn=plusbottoms&amp;ici=www_navbar10menu08dir05">Shop Plus Size Bottoms</a></div>





                                    <h6 class=""><a title="Kids" style="color: #000000;" class="hoverdefalut" href="javascript:;">Kids</a></h6>

                                    <div class=""><a style="color: #000000;" title="All Sale" class='' href="https://www.shein.com/Kids-All-Sale-vc-74130.html?icn=kids&amp;ici=www_navbar10menu09dir01">All Sale</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Girls Dresses" class='' href="https://www.shein.com/girls-dresses-on-sale-vc-74107.html?icn=girldresses&amp;ici=www_navbar10menu09dir02">Shop Girls Dresses</a></div>

                                    <div class=""><a style="color: #000000;" title="Shop Girls Tops" class='' href="https://www.shein.com/girls-tops-on-sale-vc-74108.html?icn=girltops&amp;ici=www_navbar10menu09dir03">Shop Girls Tops</a></div>





                                    <h6 class=""><a title="Home" style="color: #000000;" class="hoverdefalut" href="javascript:;">Home</a></h6>

                                    <div class=""><a style="color: #000000;" title="All Sale" class='' href="https://www.shein.com/HOME-on-sale-vc-74111.html?icn=homeonsale&amp;ici=www_navbar10menu10dir01">All Sale</a></div>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="Flash Sale" href="https://www.shein.com/flash-sale.html?icn=flashsale&amp;ici=www_navbar10banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/05/11/15260095501959758587.gif"
                                                 data-webp="//img.shein.com/images2/2018/05/11/15260095501959758587.gif"/>
                                        </a>

                                        <p class="pic-strong">Flash Sale</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Beachwear Up To 80% Off" href="https://www.shein.com/swimwear-up-to-80-off-vc-74071.html?icn=swimwear&amp;ici=www_navbar10banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/16/15343913253140732.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/16/15343913253140732.jpg"/>
                                        </a>

                                        <p class="pic-strong">Beachwear Up To 80% Off</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="SHEIN Sale" href="https://www.shein.com/SHEIN-sale-vc-57478.html?icn=sale&amp;ici=www_navbar10banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/16/15343913871648342097.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/16/15343913871648342097.jpg"/>
                                        </a>

                                        <p class="pic-strong">SHEIN Sale</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="j-navbar-list">
                        <a title="Explore" style="color: #000000;" href="https://www.shein.com/member-image-list.html?icn=stylegallery&amp;ici=www_navbar11" class="j-category-title ">Explore</a>
                        <div class="nav-menu j-nav-menu">
                            <div class="nav-dropdown j-nav-dropdown">
                                <div class="info-pic">










                                </div>
                                <div class="left">




                                    <h6 class=""><a title="Lookbook" style="color: #000000;" class="" href="https://www.shein.com/shop-the-look.html?icn=shopthelook&amp;ici=www_navbar11menu01">Lookbook</a></h6>

                                    <div class=""><a style="color: #fb0303;" title="Simplify Your Life" class='' href="https://www.shein.com/shop-the-look-77.html?icn=simplify&amp;ici=www_navbar11menu01dir01">Simplify Your Life</a></div>

                                    <div class=""><a style="color: #000000;" title="Preppy Chic" class='' href="https://www.shein.com/shop-the-look-75.html?icn=preppychic&amp;ici=www_navbar11menu01dir02">Preppy Chic</a></div>

                                    <div class=""><a style="color: #000000;" title="Basic &amp; Vacation" class='' href="https://www.shein.com/shop-the-look-72.html?icn=BasicVacation&amp;ici=www_navbar11menu01dir03">Basic &amp; Vacation</a></div>

                                    <div class=""><a style="color: #000000;" title="Semi-Annual Sale" class='' href="https://www.shein.com/shop-the-look-71.html?icn=SemiAnnualSale&amp;ici=www_navbar11menu01dir04">Semi-Annual Sale</a></div>

                                    <div class=""><a style="color: #0a0a0a;" title="Summer Party" class='' href="https://www.shein.com/shop-the-look-70.html?icn=SummerParty&amp;ici=www_navbar11menu01dir05">Summer Party</a></div>

                                    <div class=""><a style="color: #050505;" title="Painted Tone" class='' href="https://www.shein.com/shop-the-look-69.html?icn=paintedtone&amp;ici=www_navbar11menu01dir06">Painted Tone</a></div>

                                    <div class=""><a style="color: #000000;" title="Wedding Season" class='' href="https://www.shein.com/shop-the-look-68.html?icn=weddingseason&amp;ici=www_navbar11menu01dir07">Wedding Season</a></div>

                                    <div class=""><a style="color: #000000;" title="Vacay Vibes" class='' href="https://www.shein.com/shop-the-look-67.html?icn=VacayVibes&amp;ici=www_navbar11menu01dir08">Vacay Vibes</a></div>

                                    <div class=""><a style="color: #000000;" title="Multi Rubik&#39;s Cube" class='' href="https://www.shein.com/shop-the-look-66.html?icn=MultiRubiksCube&amp;ici=www_navbar11menu01dir09">Multi Rubik&#39;s Cube</a></div>

                                    <div class=""><a style="color: #000000;" title="Fantasy Spring" class='' href="https://www.shein.com/shop-the-look-63.html?icn=fantasyspring&amp;ici=www_navbar11menu01dir10">Fantasy Spring</a></div>

                                    <div class=""><a style="color: #000000;" title="View More" class='' href="https://www.shein.com/shop-the-look.html?icn=viewmore&amp;ici=www_navbar11menu01dir11">View More</a></div>





                                    <h6 class=""><a title="Style Gallery" style="color: #000000;" class="" href="https://www.shein.com/member-image-list.html?icn=stylegallery&amp;ici=www_navbar11menu02">Style Gallery</a></h6>



                                </div>
                                <div class="info-pic">


                                    <div class="info-pic-inner">
                                        <a title="Simplify Your Life" href="https://www.shein.com/shop-the-look-77.html?icn=simplify&amp;ici=www_navbar11banner01">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/09/04/15360498442806606999.jpg"
                                                 data-webp="//img.shein.com/images2/2018/09/04/15360498442806606999.jpg"/>
                                        </a>

                                        <p class="pic-strong">Simplify Your Life</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Preppy Chic" href="https://www.shein.com/shop-the-look-75.html?icn=preppychic&amp;ici=www_navbar11banner02">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/06/15335387251617880754.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/06/15335387251617880754.jpg"/>
                                        </a>

                                        <p class="pic-strong">Preppy Chic</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Basic &amp; Vacation" href="https://www.shein.com/shop-the-look-72.html?icn=basic&amp;vacation&amp;ici=www_navbar11banner03">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/08/06/15335451231736947106.jpg"
                                                 data-webp="//img.shein.com/images2/2018/08/06/15335451231736947106.jpg"/>
                                        </a>

                                        <p class="pic-strong">Basic &amp; Vacation</p>


                                    </div>



                                    <div class="info-pic-inner">
                                        <a title="Semi-Annual Sale" href="https://www.shein.com/shop-the-look-71.html?icn=SemiAnnualSale&amp;ici=www_navbar11banner04">
                                            <img class="j-verlok-lazy" src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                                 data-src="//img.shein.com/images2/2018/05/31/15277330091049434861.jpg"
                                                 data-webp="//img.shein.com/images2/2018/05/31/15277330091049434861.jpg"/>
                                        </a>

                                        <p class="pic-strong">Semi-Annual Sale</p>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </nav>
        </div>
    </div>
</header>
<script>
    (function() {
        var analysisFun = {
            navHover: {
                spreatOut: function(href) {
                    href = href.split('?')[1]
                    var results = SHEIN_W.queryString.parse(href),
                        ici = results.ici,
                        icn = results.icn,
                        label = ici + ' ' + icn

                    GBGaSend({
                        category: '导航栏',
                        action: 'SpreadOut',
                        label: label
                    })

                }
            }
        }



        // category hover动画
        var navList = $('.j-navbar-list');
        var navMenu = $('.j-nav-menu');


        navMenu.hover(function(){
            $(this).siblings().find('a').addClass('nav-acitve');
        },function(){
            $(this).siblings().find('a').removeClass('nav-acitve');
        })


        navList.hover(function(){
            var $nav_menu = $(this).find('.j-nav-menu');
            $(this).find('.j-category-title').addClass('nav-acitve')
            $nav_menu.addClass('she-show')
            if (typeof GB_SHEIN_lazyLoadInstance != 'undefined') {
                GB_SHEIN_lazyLoadInstance.update()
            }

        },function(){
            $(this).find('.j-category-title').removeClass('nav-acitve')
            $(this).find('.j-nav-menu').removeClass('she-show')
        })


    })()
</script>


<div class="c-login container-fluid-1200 j-login-container" v-cloak>
    <div class="row">
        <div class="c-forgotpsd col-xs-10 col-xs-offset-1" v-show='forgetPassword.showForm'>
            <h2>Forgotten Password</h2>
            <p>If you’ve forgotten your password, please enter your registered email  address. <br/>We’ll send you a link to reset your password. </p>
            <div class="for-psd-inline col-xs-6 col-xs-offset-3">
                <div class="c-input">
                    <input placeholder="" type="text" v-model='forgetPassword.email'>
                    <div class="input-error-txt she-text-left" v-show='forgetPassword.emailErrorTxt' v-html="forgetPassword.emailErrorTxt"></div>
                </div>
                <button class="she-btn-white" @click='forgetPassword.showForm=false'>CANCEL</button>
                <button class="she-btn-black" @click.prevent='showFgForm' v-show="!forgetPassword.showContinuing">Continue</button>
                <button class="she-btn-black" disabled v-show="forgetPassword.showContinuing">
                    <div class="la-ball-pulse la-ball-pulse-white"><div></div><div></div><div></div></div>
                </button>
            </div>
        </div>

        <!--输入邮箱显示成功页-->
        <div class="c-forgotpsd col-xs-10 col-xs-offset-1" v-show='forgetPassword.showResult'>
            <h2>forgotten password: email sent</h2>
            <div class="she-text-left">
                <p class="send-to">An email has been sent to the provided email address. </p>
                <ul class="forget-pass">
                    <li>If you requested a new password but didn&#39;t receive your password-reset email:</li>
                    <li>1. Check the spam or junk mail folder in your email account.</li>
                    <li>2. Try to <a herf='javascript:;' @click='forgetPassword.showForm=true;forgetPassword.showResult=false;'>reset your password</a> again.</li>
                    <li>3. If you still don&#39;t receive the email after requesting a password  reset, wait 24 hours and try again.</li>
                </ul>
            </div>
        </div>

        <login-vue ref="mainLogin"
                   v-show='!(forgetPassword.showForm || forgetPassword.showResult)'
                   @login-suc-callback="loginSucCb"
                   :forget-password="forgetPassword"
                   :login-type="'loginPage'"
                   :login-page="true">
        </login-vue>
    </div>
</div>


<script>

    ;(function(w, d){
        GB_SHEIN_check_webp_feature('lossless', function(feature, result) {
            var b = d.getElementsByTagName('body')[0];
            var s = d.createElement("script"); s.async = true;
            var v = !("IntersectionObserver" in w) ? "8.7.1" : "10.5.2";
            s.src = "//sheinsz.ltwebstatic.com/she_dist/libs/lazyload_verlok_"+ v +".min.js";
            w.lazyLoadOptions = {
                elements_selector: '.j-verlok-lazy',
                threshold: 50,
                data_src: result ? 'webp' : 'src'
            }; // Your options here. See "recipes" for more information about async.
            b.appendChild(s);
            w.addEventListener('LazyLoad::Initialized', function (e) {
                w.GB_SHEIN_lazyLoadInstance = e.detail.instance;
                w.GB_SHEIN_lazyLoadInstance.update();
            }, false);
        })
    }(window, document));

</script>


<!-- 快速注册弹框的背景图加载前置 -->


<img style="display: none" src="//img.shein.com/images2/shein.com/15269898911625025401.jpg"/>



<script src="//sheinsz.ltwebstatic.com/she_dist/libs/babel-polyfill/polyfill.min.js"></script>

<script type="text/javascript" src="//sheinsz.ltwebstatic.com/she_dist/libs/vue/vue.min.js"></script>

<script type="text/javascript" src="//sheinsz.ltwebstatic.com/she_dist/js/common-d050469788.js"></script>
<script type="text/javascript" src="//sheinsz.ltwebstatic.com/she_dist/js/sdk_analysis.js?ver=1.0"></script>
<script>
    var _gb_privacyEurCountry = [13, 21, 33, 56, 54, 57, 58, 68, 73, 74, 82, 85, 98, 104, 106, 116, 122, 123, 131, 150, 172, 173, 177, 192, 193, 198, 206, 225];
    var _gb_passwordSafetyExp = /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/;
</script>
<script type="text/javascript" src="//sheinsz.ltwebstatic.com/she_dist/assets/common-chunks.js?963f99c890bba24f7056"></script><script type="text/javascript" src="//sheinsz.ltwebstatic.com/she_dist/assets/common-4d2370.js?963f99c890bba24f7056"></script>


<script type="text/x-template" id="vue-modal-temp">
    <transition name="vue-fade" appear>
        <div class="c-modal-wrap" v-show="show">
            <div class="she-mask" :class="{'she-opacity0': isMaskHide}"></div>
            <div class="c-modal" @mousedown="clickMask($event)">
                <div class="modal-dialog" :class="styleClass" ref="dialog">
                    <transition name="vue-slide-fade">
                        <div v-show="show" class="modal-content" :style="{background: background,padding:padding}">

                            <div class="modal-header">
                                <slot name="closer">
                                    <i class="iconfont icon-close she-close" @click="cancel('icon')"></i>
                                </slot>
                                <div class="modal-title">
                                    <slot name="title">
                                    </slot>
                                </div>
                            </div>
                            <div class="modal-body">
                                <slot></slot>
                            </div>
                            <div class="modal-footer">
                                <slot name="footer">
                                    <div class="modal-btn">
                                        <button v-if="twobtn" :class="cancelclass" @click="cancel('btn')">{{canceltext}}</button>

                                        <button :class="okclass" @click="ok" v-if="isloading">
                                            <div v-if="loading" class="la-ball-pulse la-ball-pulse-white">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div v-else>
                                                {{oktext}}
                                            </div>
                                        </button>

                                        <button :class="okclass" @click="ok" v-else>{{oktext}}</button>
                                    </div>
                                </slot>
                            </div>
                        </div>
                    </transition>
                </div>
            </div>
        </div>
    </transition>
</script>

<script type="text/javascript">
    (function() {

        var shareData = {
            counter: 0
        };
        Vue.component('modal-vue', {
            template: '#vue-modal-temp',
            props: {
                show: {type: Boolean, default: false},

                small: {type: Boolean, default: false},
                large: {type: Boolean, default: false},
                xlarge: {type: Boolean, default: false},
                full: {type: Boolean, default: false},
                relativeheight: {type: Boolean, default: false},
                relativeWidthM: {type: Boolean, default: false},
                vertical: {type: Boolean, default: true},
                twobtn: {type: Boolean, default: true},
                isquickv: {type: Boolean, default: false},
                background: {type: String, default: ''},
                padding: {type:String, default:''},
                // 为true时无法通过点击遮罩层关闭modal
                force: {type: Boolean, default: false},

                // 是否使用loading效果
                isloading:  {type: Boolean, default: false},

                oktext: {type: String, default: 'OK'},
                canceltext: { type: String, default: 'Cancel'},

                okclass: {type: String, default: 'she-btn-black'},
                cancelclass: {type: String, default: 'she-btn-white'},
            },
            data: function() {
                return {
                    isMaskHide: false,
                    loading: false,
                }
            },
            computed: {
                styleClass: function() {
                    return {
                        'c-quickv': this.isquickv,
                        'vertical-center': this.vertical,
                        'modal-sm': this.small,
                        'modal-lg': this.large,
                        'modal-xlg': this.xlarge,
                        'modal-full': this.full,
                        'modal-relative-height': this.relativeheight,
                        'modal-relative-width-m': this.relativeWidthM
                    }
                }
            },
            mounted: function() {
                if (!this.vertical) {
                    var scroll_bar_width = 17;
                    var root = document.body;
                    var width_txt;

                    if (typeof window.innerWidth == 'number') {
                        scroll_bar_width = window.innerWidth - root.clientWidth
                    }

                    width_txt = '.modal-open { border-right:' + scroll_bar_width + 'px solid transparent }';

                    if(document.all){ // document.createStyleSheet(url)
                        window.style = width_txt;
                        document.createStyleSheet("javascript:style");
                    }else{ //document.createElement(style)
                        var style = document.createElement('style');
                        style.type = 'text/css';
                        style.innerHTML = width_txt;
                        document.getElementsByTagName('HEAD').item(0).appendChild(style);
                    }

                    if (this.show) {
                        document.body.className += ' modal-open';
                    }
                }
            },
            beforeDestroy: function() {
                document.body.className = document.body.className.replace(/\s?modal-open/, '');
            },
            watch: {
                show: function(value) {
                    var self = this;

                    if (value) {
                        if (!this.vertical) {
                            document.body.className += ' modal-open';
                        }
                    } else {
                        window.setTimeout(function() {
                            self.isMaskHide = false;
                            if (!self.vertical) {
                                document.body.className = document.body.className.replace(/\s?modal-open/, '');
                            }
                        }, 500 || 0);
                    }
                }
            },
            methods: {
                ok: function() {
                    if(this.isloading) {
                        if(this.loading) {
                            return
                        } else {
                            this.loading = true
                            this.$emit('ok')
                        }
                    } else {
                        this.$emit('ok');
                    }
                },
                cancel: function(opt) {
                    this.$emit('cancel', opt);
                },
                clickMask: function(e) {
                    if (!this.force && !this.isInTree(e.target)) {
                        this.cancel('mask');
                    }
                },
                isInTree: function(target) {
                    return this.$refs.dialog.contains(target)
                }
            }
        });
    })();

</script>

<script type="text/x-template" id="vue-input-temp">
    <div class="c-input" :class="{'input-mar':inputmar}">
        <div class="input-title" v-if="title">
            {{title}}<i class="input-error-txt" v-show='requiredhint'>*</i>
        </div>
        <textarea v-if="type == 'textarea'"
                  :class="{'input-error': dataErrorTxt}"
                  :value="value"
                  :placeholder="placeholder"
                  :type="type"
                  :name="name"
                  :disabled="disabled"
                  @keyup="handleKeyup"
                  @input="handleInput">
        </textarea>
        <input
                v-else
                :class="{'input-error': dataErrorTxt, 'input-sm': sm}"
                :value="value"
                :placeholder="placeholder"
                :type="type"
                :name="name"
                :disabled="disabled"
                :readonly="readonly"
                ref="input"
                @input="handleInput"
                @blur="deferHideEmailAndCheck"
                @keyup.enter="handleKeyboardEnter"
                @keyup = "handleKeySpace"/>
        <ul class="emaillist" v-show="showEmail" v-if="type == 'email'">
            <li v-for="emailVal in email" @click="selectEmail(emailVal)">
                {{value.split('@')[0] + emailVal}}
            </li>
        </ul>

        <div class="input-error-txt" v-if="dataErrorTxt" v-html="dataErrorTxt"></div>
    </div>
</script>







<script type="text/javascript">
    Vue.component('input-vue', {
        template: '#vue-input-temp',
        props: {
            value: {default: ''},
            type: {default: 'text'},
            name: {default: ''},
            sm: {default: false},
            title: {default: ''},
            placeholder: {default: ''},
            errorTxt: {default: ''},
            disabled: {default: false},
            requiredhint: {default: false},
            readonly: {default:false},
            maxLength: {
                type: Number,
                default: 100000
            },
            disabledBlur: {default: false},
            emailcorrect: {default: false},
            newpassState: {default: false},
            conpassState: {default: false},
            inputmar: {default: false},
        },
        // filters: {
        //     limit: function(content) {
        //         return content.length >= this.maxLength ? content.slice(0, this.maxLength) : content
        //     }
        // },
        data: function() {
            return {
                dataErrorTxt: '',
                autoEmail: ["@gmail.com","@hotmail.com","@yahoo.com","@outlook.com","@live.com","@aol.com","@mail.com","@icloud.com","@wp.pl","@gmx.net"],
                email: [],
                showEmail: false,
                autoEmailsuffix: ["gmail.com","hotmail.com","yahoo.es","hotmail.es","yahoo.com","telefonica.net","outlook.com","msn.com","live.com","icloud.com","outlook.es","me.com","terra.com","mail.ru","movistar.es"],
                showEmailSuffix: false,
                correctStuffix: ""
            }
        },
        watch: {
            errorTxt: {
                handler: function(val, oldValue) {
                    this.setDataErrorTxt(val);
                },
                deep: true
            }
        },
        methods: {
            handleInput:function(event) {
                var self = this;
                var value = event.target.value;
                this.dataErrorTxt = "";
                this.showEmailSuffix = false;
                if(value.length >= this.maxLength) {
                    value = value.slice(0, this.maxLength)
                }
                this.$emit('input', value);

                if (this.type == 'email') {
                    self.email.splice(0);
                    self.autoEmail.forEach(function(e, i) {
                        if( value.indexOf('@') == -1){
                            self.email.push(e)
                        }else if ( e.indexOf( value.split('@')[1] ) > -1) {
                            self.email.push(e)
                        }

                    })
                    if (self.email.length != 0) {
                        self.showEmail = true;
                    } else {
                        self.showEmail = false;
                    }
                }
            },
            handleKeyboardEnter: function() {
                this.$emit('keyup-enter')
            },
            handleKeySpace: function(){
                this.$emit('keyup-space')
            },
            selectEmail: function(email,target,tip) {
                if (this.value.indexOf('@') > -1) {
                    this.$emit('input', this.value.split('@')[0] + email);
                } else {
                    this.$emit('input', this.value + email);
                }
            },
            check: function(type) {

                var value = this.$refs.input.value;
                var pattern= /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$/

                if (this.type == 'email') {
                    // console.log(value);
                    if(!value.length) {
                        this.dataErrorTxt = "Please enter an email address.";
                        this.$emit('change-verify', false)
                        return false;
                    } else if(!pattern.test(value)) {
                        this.dataErrorTxt = "The email you entered is invalid. Please check your email and try again.";
                        this.$emit('change-verify', false)
                        return false;
                    } else {
                        this.dataErrorTxt = "";
                        this.$emit('change-verify', true)
                        return true;
                    }
                } else if (this.type == 'password') {
                    if(this.newpassState) {
                        if(this.conpassState) {
                            if(!value.length) {
                                this.dataErrorTxt = "Password and Retype Password has to be same.";
                                this.$emit('change-verify', false)
                                return false;
                            }else {
                                this.dataErrorTxt = "";
                                this.$emit('change-verify', true)
                                return true;
                            }
                        }else {
                            this.dataErrorTxt = "";
                            this.$emit('change-verify', true)
                            return true;
                        }
                    }else{
                        if(!value.length) {
                            this.dataErrorTxt = "Please enter your password.";
                            this.$emit('change-verify', false)
                            return false;
                        } else if(value.length < 6) {
                            this.dataErrorTxt = "Your password must contain at least 6 characters.";
                            this.$emit('change-verify', false)
                            return false;
                        } else {
                            this.dataErrorTxt = "";
                            this.$emit('change-verify', true)
                            return true;
                        }
                    }
                }
            },
            // 延后blur事件, 避免与click事件冲突
            deferHideEmailAndCheck: function() {
                if(this.disabledBlur) return;
                var self = this;
                if (this.type == 'email') {
                    setTimeout(function(){
                        self.showEmail = false;
                        self.$emit('blur-verifty')
                        self.check();
                        self.showEmailSuffix = false;
                        if("en" == "es" && self.check() ){
                            self.suffixErrorTip();
                        }
                    }, 200);
                } else {
                    self.$emit('blur-verifty')
                    self.check();
                }
            },
            setDataErrorTxt: function(value) {
                if (value === this.dataErrorTxt) return;
                this.dataErrorTxt = value;
            },
            handleKeyup: function(e) {
                var value = e.target.value
                e.target.value = value.length >= Number(this.maxLength) ? value.slice(0, this.maxLength) : value
            },
            //相近后缀报错
            suffixErrorTip: function() {
                if(this.emailcorrect){
                    var emailsuffix = this.$refs.input.value.split("@")[1]; //mailhot.com
                    var match1 = function(val1, val2, len){
                        var letter = val2.split(""),
                            count = 0;
                        for(var i = 0; i < letter.length; i++){
                            if(val1.indexOf(letter[i]) != -1){
                                ++count
                            }
                        }
                        if(count >= len){
                            return true
                        }
                    };
                    var match2 = function(str1, str2, len){
                        for(var i=0; i<=str2.length-len; i++){
                            var regstr = str2.slice(i, i+len)
                            var regexp1 = new RegExp(regstr, "g")
                            if(str1.match(regexp1)){
                                return true
                            }
                        }
                    };
                    var suffixAry1 = [], suffixAry2 = [], suffixAry3 = [];
                    //1.先判断@和.之间有五位相同字母或者连续三个相同
                    for( var k = 0 ; k < this.autoEmailsuffix.length; k++ ){
                        var rightEmail = this.autoEmailsuffix[k];//hotmail.com
                        var v1 = rightEmail.split(".")[0], v2 = emailsuffix.split(".")[0];
                        if( emailsuffix == rightEmail){
                            this.showEmailSuffix = false;
                            return
                        }else if( match1(v1, v2, 5) || match2(v1, v2, 3)  ){
                            suffixAry1.push(rightEmail);
                        }
                    }
                    //console.log(suffixAry1,111111);
                    //若1满足要求的有多个结果或没有结果，例如gmail和hotmail，再判断@后面的符号前三位连续两位相同
                    if(suffixAry1.length == 1){
                        this.correctStuffix = "@"+suffixAry1[0];
                        this.showEmailSuffix = true;
                    }else if(suffixAry1.length == 0){
                        for( var k = 0 ; k < this.autoEmailsuffix.length; k++ ){
                            var rightEmail2 = this.autoEmailsuffix[k];
                            var s1 = rightEmail2.split(".")[0].slice(0,3), s2 = emailsuffix.split(".")[0].slice(0,3);
                            if( match2(s1, s2, 2) ){
                                suffixAry2.push(rightEmail2);
                            }
                        }
                        //console.log(suffixAry2,2220);
                    }else{
                        for(var k = 0; k < suffixAry1.length; k++ ){
                            var rightEmail3 = suffixAry1[k];
                            var s1 = rightEmail3.split(".")[0].slice(0,3), s2 = emailsuffix.split(".")[0].slice(0,3);
                            if( match1(s1, s2, 2) ){
                                suffixAry2.push(rightEmail3);
                            }
                        }
                        //console.log(suffixAry2,2228);
                    }
                    //3.若2满足要求的有多个结果，例如hotmail.com和hotmail.es，那么再看.后面的，推给用户.后面含有两个及以上相同字母的
                    if(suffixAry2.length == 0){
                        return
                    }else if(suffixAry2.length == 1){
                        this.correctStuffix = "@"+suffixAry2[0];
                        this.showEmailSuffix = true;
                    }else{
                        var suffixdomin = emailsuffix.split(".")[1];
                        for( var k = 0; k < suffixAry2.length; k++){
                            var rightdomin = suffixAry2[k].split(".")[1];
                            if( match1(rightdomin, suffixdomin, 2) ){
                                suffixAry3.push(suffixAry2[k]);
                            }
                        }
                        //console.log(suffixAry3,3333);
                    }

                    if(suffixAry3.length == 1){
                        this.correctStuffix = "@"+suffixAry3[0];
                        this.showEmailSuffix = true;
                    }else{
                        return
                    }
                }
            },
            SuffixEmail: function() {
                var emailname = this.$refs.input.value.split("@")[0];
                this.$emit('input', emailname+this.correctStuffix);
                this.showEmailSuffix = false;
                if(typeof(ga) == 'function'){
                    ga('shein.send',{
                        hitType: 'event',
                        eventCategory: '登录注册页',
                        eventAction: 'SelectEmailSuffix'
                    })
                }
            }
        }
    })
</script>

<script type="text/x-template" id="vue-dropdown-temp">
    <div>
        <p v-if="title" class="dropdown-title">{{title}}:</p>
        <div class="c-dropdown" :class="dropdownStyle"
             @mouseover="hoverToggleMenu(1)"
             @mouseout="hoverToggleMenu(0)">
            <div class="dropdown-toggle j-dropdown-keep"
                 @click="toggleMenu"
            >
                {{value}}
                <span class="dropdown-caret j-dropdown-keep" :class="{'dropdown-caret-rotate': show}"></span>
            </div>
            <ul class="dropdown-menu" v-show="show">
                <li class="j-dropdown-keep" v-for="(val, key, index) in list" @click="changeVal(val, key)"  :data-sortindex="val.value">
                    <template v-if="showNumber">
                        {{index+1}}.
                    </template>
                    <template v-if="Array.isArray(list)">
                        {{val.title}}
                    </template>
                    <template v-else>
                        {{val}}
                    </template>
                </li>
            </ul>
        </div>
    </div>
</script>
<script type="text/javascript">
    Vue.component('dropdown-vue', {
        template: '#vue-dropdown-temp',
        props: {
            title: {default: ''},
            value: {},
            list: {type: [Object, Array]},
            sm: {default: false},
            lg: {default: false},
            scroll: {default: false},
            showNumber: {default: false},
            hoverToggle: {default: false}
        },
        created: function() {
        },
        data: function() {
            return {
                show: false
            }
        },
        computed: {
            dropdownStyle: function() {
                return {
                    'c-dropdown-s': this.sm,
                    'c-dropdown-l': this.lg,
                    'dropdown-scroll': this.scroll
                }
            }
        },
        mounted: function() {
            var self = this;
            $(document).click(function(e) {
                if (!$(e.target).hasClass('j-dropdown-keep')) {
                    self.show = false
                }
            })
        },
        methods: {
            changeVal: function(val, key) {
                this.$emit('input', Array.isArray(this.list) ? val.title : val);
                this.$emit('change', key, val);
                this.show = false;
            },
            toggleMenu: function() {
                if (this.hoverToggle) {
                    return
                }
                this.show = !this.show;
            },
            hoverToggleMenu: function(o) {
                if (!this.hoverToggle) {
                    return
                }
                if (o) {
                    this.show = true
                } else {
                    this.show = false
                }
            }
        }
    })
</script>


<script type="text/javascript">
    function set_uk_jump_cookie() {
        var p_from_country = SHEIN_W.getQueryString("from_country");
        var jump_to_all = ['uk', 'in', 'mx', 'hk', 'tw', 'vn'];
        if(jump_to_all.indexOf(p_from_country) > -1){  //跨域回跳
            var c = SHEIN_W.getCookie('jump_to_'+p_from_country)
            if( c == null || c == 1){ //1天内不再跳转。
                SHEIN_W.setCookie("jump_to_"+p_from_country, "0", 3600 * 24, 1)
            }
        }
    }

    set_uk_jump_cookie()

    function isArab(country) {
        return $.inArray(country.toUpperCase(), ["SA", "AE", "KW", "IL", "JO", "QA", "OM"]) > -1;
    }

    function zhIpLinkInit(country) {
        var language = navigator.browserLanguage ? navigator.browserLanguage : navigator.language;
        if (language.toLowerCase() == 'zh-cn' && country.toLowerCase() == 'cn') {
            if ($('.j-supplier-cn').length) {
                $('.j-supplier-cn').show();
            }
        }
    }

    /* ended by deneel  2015-4-8 21:59:29*/
    function getCountryCode(callback) {
        var getCookie = SHEIN_W.getCookie;
        var country = getCookie('country');
        var countryId = getCookie('countryId');
        var setCookie = SHEIN_W.setCookie
        if (!country || countryId === undefined) {
            $.ajax({
                type: "POST",
                url: "/judgeIP",
                success: function (res) {
                    if (0 == res.code) {
                        country = res.info.location.country;
                        countryId = res.info.location.country_id;
                        setCookie('country', country, 3600 * 24 * 30, true);
                        setCookie('countryId', countryId, 3600 * 24 * 30, true)
                        callback.call(this, country);
                        zhIpLinkInit(country);
                    }
                }
            });
        } else {
            zhIpLinkInit(country);
            callback.call(this, country);
        }
    }
    function jump_to_site(cty_code,new_site){
        var pathname = window.location.pathname
        var search = window.location.search
        if (pathname.indexOf('/cart') > -1 ||
            pathname.indexOf('/checkout') > -1 ||
            search.indexOf('sitefrom=app') > -1) {
            return
        }
        var cookie_name = "jump_to_"+cty_code;
        var cookie_value = SHEIN_W.getCookie(cookie_name);
        if (cookie_value == null || typeof(cookie_value) == "undefined" || cookie_value == '1') {
            //jump to other site
            var thisURL = document.URL;//获取当前页面链接
            var newURL = thisURL.replace(window.location.host, new_site);//对应的美国链接
            newURL.indexOf('?') < 0 ? newURL += '?' : newURL += '&';
            location.href = newURL + 'ref=www&rep=dir&ret='+cty_code;

        }

    }
    /*客户端 IP 跳转方法 提供测试用*/
    $(function(){
        getCountryCode(function (country) {
            if (country) {
                var l_cty = country.toLowerCase();
                var blang = (navigator.language || navigator.browserLanguage).toLowerCase();
                if ('au' == l_cty) {
                    jump_to_site("au","au.shein.com");
                } else if ('gb' == l_cty|| 'gbr' == l_cty || 'ie' == l_cty || 'uk' == l_cty) {
                    jump_to_site("uk","www.shein.co.uk");

                } else if ('in' == l_cty || 'ind' == l_cty) {
                    jump_to_site("in","www.shein.in");
                } else if ('us' == l_cty) {
                    jump_to_site("us","us.shein.com");
                } else if ('es' == l_cty && blang.indexOf('es') > -1) {
                    jump_to_site("es","es.shein.com");
                } else if ('mx' == l_cty && blang.indexOf('es') > -1) {
                    jump_to_site("mx","www.shein.com.mx");
                } else if ('fr' == l_cty && blang.indexOf('fr') > -1) {
                    jump_to_site("fr","fr.shein.com");
                } else if ('de' == l_cty && blang.indexOf('de') > -1) {
                    jump_to_site("de","de.shein.com");
                } else if (isArab(country) && blang.indexOf('ar') > -1) {
                    jump_to_site("ar","ar.shein.com");
                } else if ('ru' == l_cty || 'kz' == l_cty || 'by' == l_cty) {
                    jump_to_site("ru","ru.shein.com");
                } else if ('it' == l_cty && blang.indexOf('it') > -1) {
                    jump_to_site("it","it.shein.com");
                }
            }
        });
    })

</script>


<script>
    // SHEIN_W.userModule
    (function() {
        var userModule = {
            data: {
                default_country: '',
                fetched_default_country: false,
            },
            // 更新导航区登录状态
            update_top_login: function() {
                var self = this;
                $.ajax({
                    type: 'POST',
                    url: '/user/auth/getUserInfo',
                    success: function(data) {
                        var hi = "Hello "
                        var loginURL = "https://www.shein.com/user/auth/login?direction=nav"
                        var loginPrompt = "Sign in/Register"

                        var username = data.username
                        var currency = data.currency
                        var email = data.email

                        $('.j-header-username').removeClass('she-hide')

                        if (username != null){
                            $('.j-header-username').text(hi + ' ' + username)
                            $('.j-header-username').prop('href', "https://www.shein.com/user/index")
                            $('.j-header-menu-signout').show()
                            //   if(typeof(quickRegister) != 'undefined') {
                            //     quickRegister.state.quickRegister = false
                            //   }
                            if(typeof(fastwish) != 'undefined') {
                                fastwish.reAddwish();
                            }
                        } else {
                            $('.j-header-menu-signout').hide()
                            $('.j-header-username').text(loginPrompt)
                            $('.j-header-username').prop('href', loginURL)
                        }
                    }
                })
                self.get_default_country('force');
            },
            // 验证登录状态
            check_login_promise: function(isCheckout) {
                var url = isCheckout ? '/user/auth/getUserInfo?action=getMemberInfo&from=checkout' : '/user/auth/getUserInfo';
                return new Promise(function(resolve, reject) {
                    $.get(url, function(data) {
                        resolve(data)
                    })
                })
            },
            // 获取国家
            get_default_country: function(force) {
                var self = this;
                return new Promise(function(resolve, reject) {
                    if (force || !self.data.fetched_default_country) {
                        self.data.fetched_default_country = true
                        $.get('/get_default_country', function(data) {
                            if (data.code == 0 && data.info) {
                                self.data.default_country = data.info.value
                            } else {
                                self.data.default_country = ''
                            }
                            resolve(self.data.default_country)
                        })
                    } else {
                        resolve(self.data.default_country)
                    }
                })
            }
        }
        if (typeof(SHEIN_W)=="undefined") {
            SHEIN_W={};
        } else if (typeof(SHEIN_W.userModule)=="undefined") {
            SHEIN_W.userModule = userModule
        } else if (typeof(SHEIN_W.userModule)!="undefined") {
            $.extend(true, SHEIN_W.userModule, userModule);
        }
    })()
</script>

<div id="imgcontainer" style="display:none"></div>
<script>
    ;(function() {
        $System={Math:{},DS:{},Type:{}};$System.Type.TypeUtil=function(){throw new Error("$System.Type.TypeUtil is a static class.")};$System.Type.TypeUtil.isString=function(a){return((typeof(a)=="string")||((typeof a=="object")&&(a instanceof String)))};$System.Type.TypeUtil.isDate=function(a){return((typeof a=="object")&&(a instanceof Date))};$System.Type.TypeUtil.isRegExp=function(a){return((typeof a=="object")&&(a instanceof RegExp))};$System.Type.TypeUtil.isArray=function(a){return((typeof a=="object")&&(a instanceof Array))};$System.Type.TypeUtil.isNumber=function(a){return !isNaN(a)};$System.Type.TypeUtil.isBoolean=function(a){return((typeof(a)=="boolean")||((typeof a=="object")&&(a instanceof Boolean)))};$System.Type.TypeUtil.isFunction=function(a){return((typeof a=="function")||((typeof a=="object")&&(a instanceof Function)))};$System.Type.TypeUtil.isInteger=function(a){return($System.Type.TypeUtil.isNumber(a)&&(Math.round(a)==a))};$System.Type.TypeUtil.isFloat=function(a){if($System.Type.TypeUtil.isString(a)){return false}return($System.Type.TypeUtil.isNumber(a)&&(Math.round(a)!=a))};$System.Type.TypeUtil.isError=function(a){return((typeof a=="object")&&(a instanceof Error))};$System.DS.HashTable=function(){this.o={};for(key in this.o){delete this.o[key]}this.size=0};$System.DS.HashTable.prototype.getSize=function(){return this.size};$System.DS.HashTable.prototype.set=$System.DS.HashTable.prototype.add=function(a,b){if(!(a in this.o)){this.size++}this.o[a]={v:b}};$System.DS.HashTable.prototype.get=function(a){if(a in this.o){return this.o[a]["v"]}return null};$System.DS.HashTable.prototype.hasThisKey=function(a){return(a in this.o)};$System.DS.HashTable.prototype.getKeyListByValue=function(b){var a=[];for(key in this.o){if(this.o[key]["v"]==b){a.push(key)}}return a};$System.DS.HashTable.prototype.remove=function(a){if(a in this.o){this.size--;delete this.o[a]["v"];delete this.o[a]}};$System.DS.HashTable.prototype.removeAll=function(){for(key in this.o){delete this.o[key]["v"];delete this.o[key]}this.size=0};$System.DS.HashTable.prototype.getO=function(){return this.o};$System.DS.HashTable.prototype.join=function(e,d){var b=new Array();for(key in this.o){b.push(key+e+this.get(key))}return b.join(d)};$System.DS.HashTable.dispose=function(a){a.dispose();a=null};$System.DS.HashTable.prototype.dispose=function(){this.removeAll()};$System.Math.IntUtil=function(){throw new Error("$System.Math.IntUtil is a static class.")};$System.Math.IntUtil.dec2Bin=function(a){return a.toString(2)};$System.Math.IntUtil.hexNumArray=new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");$System.Math.IntUtil.dec2Hex=function(a){return a.toString(16).toUpperCase()};$System.Math.IntUtil.numHexArray={"0":"0","1":"1","2":"2","3":"3","4":"4","5":"5","6":"6","7":"7","8":"8","9":"9",A:"10",B:"11",C:"12",D:"13",E:"14",F:"15"};$System.Math.IntUtil.hex2Dec=function(a){return parseInt(a,16)};$System.Math.IntUtil.bin2Dec=function(a){return parseInt(a,2)};$System.Math.IntUtil.binHexArray={"0000":"0","0001":"1","0010":"2","0011":"3","0100":"4","0101":"5","0110":"6","0111":"7","1000":"8","1001":"9","1010":"A","1011":"B","1100":"C","1101":"D","1110":"E","1111":"F"};$System.Math.IntUtil.bin2Hex=function(b){var g=0;while(b.charAt(g)=="0"){g++}if(g>0){b=b.substring(g,b.length)}var d,e=[],f=$System.Math.IntUtil.binHexArray,a=b.length;for(d=a;d>3;d=d-4){e.push(f[b.substring(d-4,d)])}e.push(f[$System.Math.IntUtil.fillZero(b.substring(d-4,d),4)]);return e.reverse().join("")};$System.Math.IntUtil.hexBinArray={"0":"0000","1":"0001","2":"0010","3":"0011","4":"0100","5":"0101","6":"0110","7":"0111","8":"1000","9":"1001",A:"1010",B:"1011",C:"1100",D:"1101",E:"1110",F:"1111"};$System.Math.IntUtil.hex2Bin=function(d){var h=0;while(d.charAt(h)=="0"){h++}if(h>0){d=d.substring(h,d.length)}var e=d.split(""),a=e.length,f=[],g=$System.Math.IntUtil.hexBinArray;for(var b=0;b<a;b++){f.push(g[e[b]])}return f.join("")};$System.Math.IntUtil.fillZero=function(d,f,e){if(d==""&&!e){return""}c=f-d.length;var b="";for(var a=0;a<c;a++){b="0"+b}return b+d};$System.Math.IntUtil.__GUIDPool=new $System.DS.HashTable();$System.Math.IntUtil.__GUIDCheckAndAdd=function(a){if(!$System.Math.IntUtil.__GUIDPool.hasThisKey(a)){$System.Math.IntUtil.__GUIDPool.set(a,true);return true}else{return false}};$System.Math.IntUtil.genGUIDV4=function(){var g=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*($System.Math.IntUtil.hex2Dec("FFFFFFFF")+1)));var f=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*65536));var i=$System.Math.IntUtil.fillZero($System.Math.IntUtil.dec2Bin(Math.floor(Math.random()*65536)),16);var e=$System.Math.IntUtil.bin2Hex(i.substr(0,12)+"0100");var h=$System.Math.IntUtil.fillZero($System.Math.IntUtil.dec2Bin(Math.floor(Math.random()*256)));var d=$System.Math.IntUtil.bin2Hex(h.substr(0,5)+"01"+h.substr(7,1));var b=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*256));var a=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*($System.Math.IntUtil.hex2Dec("FFFFFFFFFFFF")+1)));g=$System.Math.IntUtil.fillZero(g,8);f=$System.Math.IntUtil.fillZero(f,4);e=$System.Math.IntUtil.fillZero(e,4);d=$System.Math.IntUtil.fillZero(d,2);b=$System.Math.IntUtil.fillZero(b,2);a=$System.Math.IntUtil.fillZero(a,12);var j=g+"_"+f+"_"+e+"_"+d+b+"_"+a;if($System.Math.IntUtil.__GUIDCheckAndAdd(j)){return j}else{return $System.Math.IntUtil.genGUIDV4()}};$System.Math.IntUtil.fillRnd=function(b,e,d){if(b==""&&!d){return""}c=e-b.length;var a="";if(c>0){a=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*($System.Math.IntUtil.hex2Dec("FFFFFFFFFFFF")+1)));a=a.substring(0,c)}return a+b};$System.Math.IntUtil.genGUID=function(){var g=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*($System.Math.IntUtil.hex2Dec("FFFFFFFF")+1)));var f=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*65536));var i=$System.Math.IntUtil.fillZero($System.Math.IntUtil.dec2Bin(Math.floor(Math.random()*65536)),16);var e=$System.Math.IntUtil.bin2Hex(i.substr(0,12)+"0100");var h=$System.Math.IntUtil.fillZero($System.Math.IntUtil.dec2Bin(Math.floor(Math.random()*256)));var d=$System.Math.IntUtil.bin2Hex(h.substr(0,5)+"01"+h.substr(7,1));var b=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*256));var a=$System.Math.IntUtil.dec2Hex(Math.floor(Math.random()*1000000000000));g=$System.Math.IntUtil.fillZero(g,8);f=$System.Math.IntUtil.fillZero(f,4);e=$System.Math.IntUtil.fillZero(e,4);d=$System.Math.IntUtil.fillZero(d,2);b=$System.Math.IntUtil.fillZero(b,2);a=$System.Math.IntUtil.fillRnd(a,12);var j=a+"_"+f+"_"+e+"_"+d+b+"_"+g;if($System.Math.IntUtil.__GUIDCheckAndAdd(j)){return j}else{return $System.Math.IntUtil.genGUID()}};
        function getCookie(objName){ /*获取指定名称的cookie的值*/
            var arrStr = document.cookie.split("; ");
            for(var i = 0;i < arrStr.length;i ++){
                var temp = arrStr[i].split("=");
                if(temp[0] == objName) return unescape(temp[1]);}
        }
        function setCookie(objName, objValue, expires, domain) {
            var date = new Date();
            date.setTime(date.getTime() + Number(expires) * 1000);
            if (domain === true) {
                document.cookie = objName + "=" + objValue + "; path=/;expires = " + date.toGMTString() + "; domain = .shein.com"
            } else if (typeof domain === 'string') {
                document.cookie = objName + "=" + objValue + "; path=/;expires = " + date.toGMTString() + "; domain = " + domain
            } else {
                document.cookie = objName + "=" + objValue + "; path=/;expires = " + date.toGMTString() + ";"
            }
        };

        var lang = 'www'
        var isCookieEnabled = navigator.cookieEnabled || ("cookie" in document && (document.cookie.length > 0 ||(document.cookie = "test").indexOf.call(document.cookie, "test") > -1));
        if(isCookieEnabled){
            var cookieId=getCookie('cookieId');
            if(!cookieId){
                cookieId=$System.Math.IntUtil.genGUIDV4();
                if (typeof(lang)!="undefined" &&(lang === 'uk'||lang === 'tw'||lang === 'in'||lang==="mx"||lang=="hk"||lang=="vn"||lang=="se"||lang=="sesv")) {
                    setCookie('cookieId',cookieId,10*365*24*60*60,null);
                } else {
                    setCookie('cookieId',cookieId,10*365*24*60*60,true);
                }
            }

            var cookiediv=document.getElementById("imgcontainer");
            cookiediv.innerHTML="<img src='/image/cookieId.html?cookieid="+cookieId+"' style='display:none;'>";
        }
    }());
</script>



<!-- 显隐靠c-quick-register-hide控制 -->

<style type="text/css">
    .c-quick-register .quickg-outside {
        background-color: #6f6f6f
    }

    .c-quick-register.c-quick-register-hide .quickg-outside {
        background-color: #6f6f6f
    }

    .c-quick-register .quickg-inside .inside-input .she-btn-purple-no-hover {
        background-color: #f08579;
        border-color: #f08579;
        color: #fff3f2;
    }

    .c-quick-register .quickg-inside {
        background: url(//img.shein.com/images2/shein.com/15269898911625025401.jpg) no-repeat;
        background-size: cover;
    }



    .c-quick-register .quickg-inside.quickg-inside-suc {
        background: url(//img.shein.com/images2/shein.com/15231784293568464724.jpg) no-repeat;
        background-size: cover;
    }


</style>


<div class="c-quick-register j-quick-register" v-show='state.quickRegister' :class="{'c-quick-register-hide': !state.quickShow}" v-cloak>
    <!-- 修复google 自动填充页面第一个input bug,ps:无法用display:none和visibility:hidden解决此问题 -->
    <input type="text" style="width:0;height:0;border:0;position:absolute;opacity:0" placeholder="勿删" />
    <div class="quickg-outside" @click='openQuickReg'>
        <i class="iconfont icon-arrow-left"></i>
        <div class="outside-txt">
            Get US$3 off!
        </div>
    </div>
    <div class="quickg-inside" :class="{'quickg-inside-suc': state.quickShowReg}">

        <img style="display: none" src="//img.shein.com/images2/shein.com/15231784293568464724.jpg"/>

        <div class="inside-ing" v-if='!state.quickShowReg'>

            <div class="inside-btm">


                <div class="inside-input she-clearfix">
                    <div class="email-input">
                        <div class="c-input">
                            <input placeholder="ENTER YOUR EMAIL ADDRESS" type="email" name="email" autocomplete="off" class="input-error" v-model.trim="emailtxt">

                            <div class="c-privacy-check j-privacy-check-quickregister" v-if="isKeepPrivacy">
                                <div class="privacy-item grey">
                                    <div><label class="she-checkbox"><input type="checkbox" class="j-privacy-checkbox" name="privacy"/> <i></i></label></div>
                                    <div>I agree to the <a href="javascript:;" @click="privacyShow">Privacy Policy.</a></div>
                                </div>
                            </div>

                            <div class="input-error-txt" v-html="errorTxt"></div>
                            <div class="input-error-txt" v-show="privacyError">Please agree to our Privacy Policy</div>
                        </div>
                        <!-- <input-vue
                            :name="'email'"
                            :error-txt="errorTxt"
                            v-model.trim="emailtxt"
                            :type="'email'"
                            :placeholder="'ENTER YOUR EMAIL ADDRESS'"
                            >
                        </input-vue> -->
                    </div>
                    <div class="email-btn">
                        <button class="she-btn-purple-no-hover" @click='submitQuickReg'>
                            <div v-show='!state.quickloading'>SUBSCRIBE</div>
                            <div class="la-ball-pulse la-ball-pulse-white" v-show='state.quickloading'><div></div><div></div><div></div></div>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- footer -->
<footer class="c-footer container-fluid j-footer">
    <div class="container-fluid-1200">
        <div class="row">

            <div class="col-xs-6 ft-left">
                <div class="row">
                    <div class="col-xs-3 ft-left-list">
                        <h6>Company Info</h6>
                        <ul>
                            <li><a href="https://www.shein.com/About-US-a-117.html">About SheIn</a></li>
                            <li><a href="https://www.shein.com/affiliate-a-427.html">Affiliate</a></li>
                            <li><a href="https://www.shein.com/read-policy-a-453.html">Fashion Blogger</a></li>


                            <li><a href="https://www.shein.com/student-discount.html">Student Discount</a></li>


                        </ul>
                    </div>
                    <div class="col-xs-3 ft-left-list">
                        <h6>Help &amp; Support</h6>
                        <ul>
                            <li><a rel="nofollow" href="https://www.shein.com/Shipping-Info-a-280.html">Shipping Info</a></li>
                            <li><a rel="nofollow" href="https://www.shein.com/Return-Policy-a-281.html">Returns</a></li>

                            <!-- <li><a href="javascript:void(0)" class="j-feedback-open">feedback</a></li> -->
                            <li><a rel="nofollow" href="https://www.shein.com/How-to-order-a-276.html">How to Order</a></li>
                            <li><a rel="nofollow" href="https://www.shein.com/How-to-track-my-order-a-496.html">How To Track</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 ft-left-list">
                        <h6>Customer Care</h6>
                        <ul>
                            <li><a rel="nofollow" href="https://www.shein.com/contact-us.html">Contact Us</a></li>
                            <li><a rel="nofollow" href="https://www.shein.com/How-to-Pay-a-278.html">Payment Method</a></li>
                            <li><a rel="nofollow" href="https://www.shein.com/bonus-point-program-a-371.html" target="_blank">Bonus Point</a></li>
                            <li><a rel="nofollow" href="https://www.shein.com/free-trial.html?icn=freetrial" target="_blank">Free trial center</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 ft-right">
                <div class="row">

                    <div class="col-xs-8">
                        <h6>FIND US ON</h6>
                        <ul class="ft-right-et j-app-icon">



                            <li><a href="https://www.facebook.com/SheInside" target="_blank" class="iconfont icon-facebook" data-type="facebook"></a></li>



                            <li><a href="https://www.instagram.com/sheinofficial/" target="_blank" class="iconfont icon-instagram" data-type="instagram"></a></li>



                            <li><a href="https://twitter.com/SheIn_official" target="_blank" class="iconfont icon-tumblr" data-type="twitter"></a></li>


                            <li><a href="https://www.youtube.com/c/sheinofficial" target="_blank" class="iconfont icon-youtube" data-type="youtube"></a></li>

                            <li><a href="https://www.pinterest.com/Official_SheIn/" target="_blank" class="iconfont icon-pinterest" data-type="pinterest"></a></li>

                            <li><a href="http://shein-official.tumblr.com/" target="_blank" class="iconfont icon-rectangle" data-type="twitter"></a></li>

                            <li><a href="https://www.snapchat.com/add/sheinofficial" target="_blank" class="iconfont icon-snapchat" data-type="snapchat"></a></li>

                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <h6>APP</h6>
                        <ul class="ft-right-et j-app-icon">
                            <li><a href="https://itunes.apple.com/us/app/yub-streetwear-fashion-shopping/id878577184?mt=8" class="iconfont icon-apple" data-type="apple"></a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.zzkko&hl=en" class="iconfont icon-andriod" data-type="andriod"></a></li>
                        </ul>
                    </div>

                </div>

                <div class="ft-right-email">
                    <h6>SIGN UP FOR SHEIN STYLE NEWS ( You can UNSUBSCRIBE at any time. )</h6>
                    <div class="ft-right-input">
                        <div class="c-input">
                            <input placeholder="Your Email Address" type="email" class="j-footer-subscribe">

                            <div class="c-privacy-check j-privacy-check-subscrib">
                                <div class="privacy-item grey">
                                    <div><label class="she-checkbox"><input type="checkbox" class="j-privacy-checkbox" name="privacy"/> <i></i></label></div>
                                    <div>I agree to the <a href="javascript:;">Privacy Policy.</a></div>
                                </div>
                            </div>

                            <div class="input-error-txt j-footer-errormsg"></div>
                            <div class="input-error-txt j-footer-privacy-tip" style="display: none;">Please agree to our Privacy Policy</div>
                        </div>
                        <div class="ft-right-btn">
                            <button class="she-btn-black j-subscribe-submit">
                                <div class="j-footer-submit">Subscribe</div>
                                <div class="la-ball-pulse la-ball-pulse-white she-none">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ft-bottom col-xs-8">
                SheIn is a registered trademark of SheIn Group Limited. All Rights Reserved
                <ul class="ft-bottom-add">
                    <li><a href="https://www.shein.com/Privacy-Security-Policy-a-282.html">Privacy Policy</a></li>
                    <li><a href="https://www.shein.com/Terms-and-Conditions-a-399.html">Terms &amp; Conditions</a></li>
                    <li><a href="https://www.shein.com/copyright-noticeam-a-379.html">Copyright Notice</a></li>
                </ul>
            </div>
            <div class="ft-bottom-icon col-xs-4 she-text-right">
                <a href="javascript:;" title="This site is protected by Trustwave's Trusted Commerce program" onclick="javascript:window.open('https://sealserver.trustwave.com/cert.php?customerId=&size=105x54&style=invert&baseURL=fr.shein.com', 'c_TW', 'location=no, toolbar=no, resizable=yes, scrollbars=yes, directories=no, status=no, width=615, height=720'); return false;" oncontextmenu="javascript:alert('Copying Prohibited by Law - Trusted Commerce is a Service Mark of TrustWave Holdings, Inc.'); return false;">
                    <img class="j-verlok-lazy" data-src="//sheinsz.ltwebstatic.com/she_dist/images/seal-43f93aaef6.png" data-webp="//sheinsz.ltwebstatic.com/she_dist/images/seal-43f93aaef6.png" alt="This site is protected by Trustwave's Trusted Commerce program" />
                </a>
                <a href="http://www.dmca.com/Protection/Status.aspx?ID=8c71f59c-ee5a-4cde-a57f-4bb14086371e" title="DMCA.com Protection Status">
                    <img class="j-verlok-lazy" data-src="//sheinsz.ltwebstatic.com/she_dist/images/DMCA-53fc2e1a50.png" data-webp="//sheinsz.ltwebstatic.com/she_dist/images/DMCA-53fc2e1a50.png" alt="DMCA.com Protection Status" />
                </a>
            </div>
        </div>
    </div>
</footer>


<script>
    var cart_module = {
        //对外提供购物车json可执行函数数组
        cartFn: [],
        cartPromise: null,
        cartCheck: function() {
            var self = this;
            if(this.cartPromise == null) {
                this.cartPromise = $.get('/cart/checkcart', function(res){
                    if( res.code == 0 ){
                        self.cartVue.res = res;
                        //self.cartVue.initCart();
                    }

                    //执行其他依赖购物车json的函数
                    for( var i in cart_module.cartFn ){
                        cart_module.cartFn[i](res);
                    }
                }, 'json');
            }
        },
        initialize: function(){
            var self = this;
            this.eventCenter = new Vue()
            this.initVue();
            this.cartCheck();
        },

        //购物车
        initVue: function(){
            var self = this;
            this.cartVue = new Vue({
                el: '.j-fast-cart',
                data: {
                    res: {},
                    carts: [],
                    show: false,			//是否显示购物车框
                    loading: false,			//操作是否正在请求
                    summary: {},
                    buy_gifts_num: 0,
                    buy_gifts_choose: 0,
                    buy_gifts_tip: "",
                    soldOut: [],
                    isLogin: true,
                    gift_empty: true,	//默认满赠多档赠品列表为空
                    buyGift: false,
                    tips: {
                        show: false,
                        text: "",
                    },
                    limitBuy: 0,
                    loginJump: "https://www.shein.com/user/auth/login?redirection=" + encodeURIComponent(location.pathname),
                },
                watch: {
                    res: function(){
                        var _this = this;
                        var res = this.res;
                        //var ship = this.shipTitle(res.ship);
                        // if( res.ship.code == 0 && !res.ship.info ){
                        // 	var ship = {title: '', show: false};
                        // } else {
                        // 	var ship = this.shipTitle(res.ship);
                        // }
                        this.getFreeShippingTip(res.info.info ? res.info.info.totalPrice.amount : res.info.totalPrice.amount).then(function(data) {
                            if(!data){
                                _this.summary.title = '';
                                _this.summary.show = false;
                            }else{
                                if(data.price.amount){//有差价
                                    _this.summary.title = data.tips.replace('[money]',data.price.amountWithSymbol);
                                }else{
                                    _this.summary.title = data.tips;
                                }
                                _this.summary.show = _this.summary.title?true:false;
                            }
                        })
                        Vue.set(this, 'carts', res.info.carts || res.info.info.carts);
                        Vue.set(this, 'summary', {
                            // title: ship.title,
                            // show: ship.show,
                            title: '',
                            show: '',
                            originPrice: res.info.originPrice || res.info.info.originPrice,
                            totalPrice: res.info.totalPrice || res.info.info.totalPrice,
                            cartNum: res.info.totalPrice ? res.info.cartSumQuantity : res.info.info.cartSumQuantity
                        });

                        this.buy_gifts_num = 0
                        this.buy_gifts_choose = 0
                        $.each(this.carts, function(index, item){
                            /*
						if( item.product.promotion.promotion_type == 2 ){
							_this.buy_gifts_num += parseInt(item.quantity);
						}
						*/
                            $.each(item.product.promotionInfo, function(index1, item1){
                                if( item1.typeId == 2 ){
                                    _this.buy_gifts_num += parseInt(item.quantity);
                                    if(item1.isPresent == 1) {
                                        _this.buy_gifts_choose = 1
                                    }
                                }
                            })
                        });

                        if( "en" == 'ar' ){
                            this.buy_gifts_tip = SHEIN_W.template(this.buy_gifts_num, "to get 1 free.");
                        } else {
                            this.buy_gifts_tip = SHEIN_W.template(this.buy_gifts_num, "You have buy {0} item(s),");
                        }

                        var promotion = false;
                        if( res.info.promotionNew ){
                            promotion = res.info.promotionNew;
                        } else if( res.info.info && res.info.info.promotionNew ){
                            promotion = res.info.info.promotionNew;
                        }

                        if( promotion && promotion.fullGifts ){
                            $.each(promotion.fullGifts, function(index, item){
                                if( item.promotionGoods.length ){
                                    _this.gift_empty = false;
                                }
                            });
                        }
                        this.buyGift = promotion && promotion.buyGifts && promotion.buyGifts.length && this.buy_gifts_choose != 1

                        this.initCart();
                    },
                },
                methods: {
                    getFreeShippingTip: function(total_price,country_id){
                        return new Promise(function(resolve, reject) {
                            $.get('/cart/getFreeShipping', {amount: total_price, country_id: country_id}, function(res){
                                if(res.code == 0 && res.info){
                                    resolve(res.info);
                                }
                            })
                        })
                    },
                    shipTitle: function(ship){
                        var usd = parseInt(ship.usd.amount);
                        var price = ship.price.amountWithSymbol
                        var title = '';
                        var show = true;

                        if( ship.id == 'stand_shipping' ){
                            if( usd > 20 ){
                                show = false;
                            } else {
                                title = SHEIN_W.template(price, "Buy <span class='price'>{0}</span> more to enjoy <span class='price'>FREE shipping</span>!");
                            }
                        } else if( ship.id == 'express_shipping' ){
                            if( usd > 30 ){
                                title = "Eligible for <span class='price'>FREE shipping</span>!";
                                if( 'en' == 'us' ){
                                    title = SHEIN_W.template(price, "Eligible for <span class='price'>FREE shipping</span>! Buy <span class='price'>{0}</span> more to enjoy <span class='price'>FREE Express shipping</span>!");
                                }
                                if( ship.info.length == 1 ){
                                    //title = SHEIN_W.template(price, "Eligible for <span class='price'>FREE shipping</span>! Buy <span class='price'>{0}</span> more to enjoy <span class='price'>FREE Express shipping</span>!");
                                    show = false;
                                }
                            } else if( usd > 0 && usd <= 30 ){
                                title = SHEIN_W.template(price, "Eligible for <span class='price'>FREE shipping</span>! Buy <span class='price'>{0}</span> more to enjoy <span class='price'>FREE Express shipping</span>!");
                            }
                        } else {
                            //只有平邮时
                            if( ship.info.length == 1 && ship.info[0].id == 'stand_shipping' ){
                                title = "Eligible for <span class='price'>FREE shipping</span>!";
                            } else {
                                title = "Eligible for <span class='price'>FREE Express shipping</span>!";
                            }
                        }
                        title = title;
                        return {
                            show: show,
                            title: title
                        };
                    },

                    initCart: function(){
                        var _this = this;
                        //this.buy_gifts_num = 0;
                        var allNum = 0;
                        $.each(this.carts, function(index, item){
                            //无颜色且总库存为0 || 当前尺码库存小于当前数量 || 无颜色且商品已下架
                            var sold = (!item.relatedProductIds && item.product.stock == 0 && +item.realTimeInventory < +item.quantity) || (!item.relatedProductIds && item.product.is_on_sale == 0 ) || (!item.relatedProductIds && !item.attrs) ? true : false;
                            //_this.soldOut[item.id]  = sold;
                            allNum += parseInt(item.quantity);
                        });
                        this.summary.cartNum = allNum;
                    },
                    handleQuantity: function(item, type, ev){
                        var _this = this;

                        //数量是否少于等于1
                        if( !type && item.quantity <= 1 ){
                            item.quantity = 1;
                            return false;
                        }
                        if( this.loading ) return false;

                        var old_num = parseInt(item.quantity);
                        //输入框
                        if( ev ){
                            item.quantity = Math.abs(parseInt($(ev.target).val()));
                        } else {
                            //加减按钮
                            type ? item.quantity++ : item.quantity--;
                        }

                        if(item.quantity > item.realTimeInventory && item.realTimeInventory > 0) {
                            item.quantity = item.realTimeInventory
                        }

                        if( !item.quantity ){
                            this.showTip("Please enter a correct amount!");
                            item.quantity = old_num;
                            return false;
                        }

                        if( item.quantity == old_num ){
                            item.quantity = old_num;
                            return false;
                        }
                        if( item.quantity > 999 ){
                            this.showTip("Please be noted the maxium number is 999");
                            item.quantity = old_num;
                            return false;
                        }

                        this.loading = true;


                        // 追踪
                        var trace_id = gbExposeTraceid('getProduct', {
                            goods_id: item.product && item.product.goods_id || ''
                        })
                        var ajax_data = {
                            id: item.id,
                            quantity: item.quantity
                        }
                        if(trace_id) {
                            ajax_data.trace_id = trace_id
                        } else {
                            if(item.trace_id) {
                                ajax_data.trace_id = item.trace_id
                            }
                        }

                        $.post('/cart/update', ajax_data, function(res){
                            _this.loading = false;
                            if( res.code == 0 ){
                                Vue.set(_this, 'res', res);
                            } else if( res.code == 300402 ){
                                item.quantity = old_num;
                                _this.showTip("Out of Stock");

                                //限时买折超过限购数
                            } else if( ['200401', '500301'].indexOf(res.code)>=0 ){
                                item.quantity = old_num;
                                // _this.limitBuy = item.id;
                                // setTimeout(function(){
                                // 	_this.limitBuy = 0;
                                // }, 2000);
                                _this.showTip("purchase limit exceeded");
                                //闪购限购
                            } else if( res.code == 500302 ){
                                item.quantity = old_num;
                                _this.showTip(_this.template(res.info.limitCount, "Max Qty allowed for this limited product is {0}."));
                                //清仓限购
                            } else if( res.code == 300405 ){
                                item.quantity = old_num;
                                _this.showTip(_this.template(item.product.limit_count, "Max Qty allowed for this limited product is {0}."));
                            } else {
                                item.quantity = old_num;
                                _this.showTip("Please try later");
                            }

                            self.analysis.handleQuantity(item, old_num)
                        }, 'json');
                    },
                    showTip: function(txt){
                        this.tips.show = true;
                        this.tips.text = txt;
                    },
                    del: function(item){
                        var _this = this;
                        if( this.loading ) return false;
                        this.loading = true;
                        $.post('/cart/delete', {id: item.id}, function(res){
                            _this.loading = false;
                            if( res.code == 0 ){
                                Vue.set(_this, 'res', res);
                            }
                        }, 'json');
                    },
                    isPromotionVal: function(item, typeId) {
                        return (item.product.promotionInfo && item.product.promotionInfo.length && item.product.promotionInfo.some(function(val) { return val.typeId == typeId }))
                    },
                    getPromotionVal: function(item, typeId) {
                        var _filter = (item.product.promotionInfo && item.product.promotionInfo.length && item.product.promotionInfo.filter(function(val) { return val.typeId == typeId })) || []
                        return _filter.length ? _filter[0] : {}
                    },
                    //检查库存
                    checkStock: function(){
                        var _this = this;
                        $.get('/cart/checkStock', function(res){
                            if( res.code == 0 ){
                                var new_arr = [];
                                $.each(res.info.outStockCarts, function(index, item){
                                    new_arr.push(item.id);
                                });
                                Vue.set(_this, 'soldOut', new_arr);
                            }
                        }, 'json').fail(function(error) {
                        });
                    },
                    hover: function(type){
                        this.show = type;
                    },
                    percentNum: percentNum,
                    transformImg: transformImg,
                    getGoodsUrl: SHEIN_W.getGoodsUrl,
                    template: SHEIN_W.template,
                },
                mounted: function(){
                    this.checkStock();
                },
            });
        },
        recart: function(res){
            var _this = this;
            if( res.code == 0 ){
                if(!this.reCheckStock(res)) {
                    Vue.set(this.cartVue, 'res', res);
                    //this.cartVue.initCart(res);
                }
                this.cartVue.hover(true);
                setTimeout(function(){
                    _this.cartVue.hover(false);
                }, 3000);
            }
        },
        reCheckStock: function(res) {
            var self = this, _status = false

            $.each(res.info.carts, function(index, item){
                if(item.quantity*1 > 1 && item.quantity*1 > item.realTimeInventory) {
                    self.cartVue.handleQuantity(item)
                    item.quantity = item.realTimeInventory
                    _status = true
                }
            })

            return _status
        },
        reload: function(type){
            var _this = this;
            $.get('/cart/checkcart', function(res){
                if( res.code == 0 ){

                    Vue.set(_this.cartVue, 'res', res);
                    //_this.cartVue.initCart(res);
                    if(type == 1){
                        _this.cartVue.hover(true);
                        setTimeout(function(){
                            _this.cartVue.hover(false);
                        }, 3000);
                    }
                }
            }, 'json');
        },
        recordView: function(goods_id){
            //记录浏览记录
            var id_arr = getCookie('view_history') ? getCookie('view_history').split(',') : [];
            if( id_arr.indexOf(goods_id) > -1 ){
                var index = id_arr.indexOf(goods_id);
                id_arr.splice(index, 1);
            }
            id_arr.unshift(goods_id);
            if( id_arr.length > 24 ){
                id_arr.length = 24;
            }
            SHEIN_W.setCookie('view_history', id_arr.join(','), 3600*24*30);
        },
        analysis: {
            ecAction: function(item, type) {
                var sku = item.product.goods_sn
                var params = {
                    id: item.product.productRelationID || sku,
                    name: sku,
                    quantity: item.quantity,
                    category: item.product.cat_id,
                    price: GB_ga_transformPrice(item.product.salePrice.amount)
                }
                ga("shein.ec:addProduct", params)
                ga("shein.ec:setAction", type)
                GBGaSend({
                    category: '快捷购物车',
                    action : type == 'add' ? 'QtyAdd' : 'QtyLess',
                    label: sku
                })
                //@wuwx只是增加数量而已
            },
            handleQuantity: function(_item, old_num) {
                old_num = Number(old_num)
                var item = {}, action
                $.extend(true, item, _item)
                if(item.quantity > old_num) {
                    action = 'add'
                } else if(item.quantity < old_num) {
                    action = 'remove'
                }
                item.quantity = Math.abs(item.quantity - old_num)
                this.ecAction(item, action)
            }
        }
    };

    function vueObj(obj){
        console.log(JSON.parse(JSON.stringify(obj)));
    }

    //购物车初始化

</script>


<script type="text/javascript">
    if(typeof(SHEIN_W)!='undefined' && typeof(SHEIN_W.isMobile) == 'function' && SHEIN_W.isMobile()) {
        $(document).bind('touchstart', function(e) {
            if($('.bag-box-hover').length) {
                if($(e.target).closest('.j-hbag-box').length == 0) {
                    if($('.c-modal-wrap').length && $('.c-modal-wrap').css('display') != 'none') {
                    } else {
                        $('.bag-box-hover').removeClass('bag-box-hover');
                    }
                }
            }

            if($('.category-hover').length) {
                if($(e.target).closest('.c-navbar').length == 0) {
                    $('.category-hover').removeClass('j-prevent').removeClass('nav-acitve').removeClass('category-hover');
                }
            }
        });

        $('.j-category-title').on('click', function(e) {
            if(!$(this).hasClass('j-prevent') && $(this).hasClass('category-hover')) {
                e.preventDefault();
                $(this).addClass('j-prevent');
            }
        });
    }
</script>
<script type="text/javascript">
    var timer_iGeo = function (startime, endtime, item, countFunc, endFunc) {
        this.interval = endtime - startime;
        this.countFunc = countFunc;
        this.endFunc = endFunc;
        this.flag = 't' + Date.parse(new Date())/1000;
        this.item = item;

        this.fixTime = function (time) {
            return (time < 10 ? '0' + time : time);
        };
        this.start = function () {
            var self = this;
            self.flag = setInterval(function () {
                if (self.interval <= 0) {
                    self.endFunc(self.item, self.flag);
                } else {
                    var hours = self.fixTime(Math.floor(self.interval / 3600)),
                        time_interval1 = Math.floor(self.interval % 3600),
                        minutes = self.fixTime(Math.floor(time_interval1 / 60)),
                        seconds = self.fixTime(Math.floor(time_interval1 % 60));

                    self.countFunc(hours, minutes, seconds,self.flag);
                    self.interval--;
                }
            }, 1000);
        }
    };
</script>
<script type="text/javascript">
    var Utils = (function () {
        var _getById = function (id) {
            return document.getElementById(id)
        };
        var _getUrlNameString = function (url, name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = url.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        }

        return {
            getElById: _getById,
            getUrlNameString: _getUrlNameString
        };
    })();

    // 配置完 url 后还得去修改 product.js 中的 TOPBANNER_NUM,避免二级分类侧边栏title上浮
    $(document).ready(function() {
        var getUrlNameString=function(url, name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = url.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        }
        var _val = {
            site_form: '//img.shein.com/',
            config_tbId: {
                idList:[18,42]
            },
            banner_arr: [],
            html_ready_banner_index: [0,0],
            over: 0,
            count: 0,
            server_time: ''
        };
        // ga viewBanner
        var bannerNum = 0;
        function topBannberView(v,item){
            if(item.is(':visible') && v == "first"){
                var url = item.find('a').attr('href');
                var bannerName;
                bannerNum ++;
                if('en' == 'us' ){
                    bannerName = 'us_topbanner'+bannerNum;
                }else{
                    bannerName = 'topbanner'+bannerNum;
                }
                var iciLabel = !Utils.getUrlNameString(item.find('a').attr('href'), 'ici') ? bannerName :Utils.getUrlNameString(item.find('a').attr('href'), 'ici');
                var pitPos = item.parent().prevAll().length+1;
                if(typeof(S_TopBannerGA)!="undefined"){
                    S_TopBannerGA.PromoTopBanner(iciLabel);
                    S_TopBannerGA.viewTopBanner(iciLabel,pitPos,url);
                }
            }
        }
        // 入口
        function main(v) {
            initFromCache(function(bannerItem) {
                topBannberView(v,bannerItem);
            });
        };

        function initFromBackEnd() {
            $.get('/updateTopbanner', function(data) {
                if(data.message === 'success') {
                    if (data.info && data.info.length) {
                        _val.server_time = data.time?data.time:Date.parse(new Date())/1000;
                        _val.banner_arr = data.info;
                        initData(data.info);
                    }
                }
            });
        }
        function initFromCache(cb) {
            $.ajax({
                url: "/getTopbannerCache",
                type: "POST",
                data: _val.config_tbId,
                traditional: true,
                success: function(data) {
                    if(data.message === 'success') {
                        // 移除已过期的 banner
                        if (data.info) {
                            data.info.forEach(function (counts) {
                                if (counts && counts.length) {
                                    counts.forEach(function (count, i) {
                                        if (count.end_time <= Date.now() / 1000) counts.splice(i, 1)
                                    })
                                }
                            })
                        }
                        if(data.info && data.info.length) {
                            _val.server_time = data.time?data.time:Date.parse(new Date())/1000;
                            _val.banner_arr = data.info;
                            initData(data.info,cb);
                        }
                    }
                }
            });
        }

        // 数据初始化
        function initData(data, cb){
            // var arg;
            var bannerArr = data;
            for(var i = 0, ilen = bannerArr.length; i<ilen; i++){
                var item = bannerArr[i];
                if (item.length != 0) {
                    ;(function(i) {
                        var arg = item[_val.html_ready_banner_index[i]];
                        renderFrame().init_warp(arg,i, function (bannerItem) {
                            if(window.listNavList){
                                GB_SHEIN_sideSmartScroll();             // list侧边栏滑动
                            }

                            $(window).off("scroll.top_banner_scroll");
                            var $banner_wrapper = $(".banner-wrapper")
                            var $ToTopFun = function () {
                                var st = $(document).scrollTop();
                                if (st > 0) {
                                    if ($banner_wrapper.hasClass('topactive')) {
                                        $banner_wrapper.removeClass('topactive');
                                    }
                                } else {
                                    $banner_wrapper.addClass('topactive');
                                }
                            };
                            $(window).on("scroll.top_banner_scroll", $ToTopFun);
                            $ToTopFun();

                            eventHandler();
                            var current_time = _val.server_time;
                            topBannerModel().refresh(current_time, arg);
                            //ga
                            cb&&cb(bannerItem);
                        });
                    }(i))
                }else if(item.length == 0) {
                    if(window.listNavList){
                        GB_SHEIN_sideSmartScroll();             // list侧边栏滑动
                    }
                }
            }
        }

        // 渲染函数
        function renderFrame() {
            var init_wrap = function (bannerArr,index, cb) {
                var banner_id = bannerArr.banner_id,
                    link_url = bannerArr.link_url,
                    b_img = _val.site_form + bannerArr.b_img,
                    header_r,
                    header_rp_a,
                    header_rp_a_el,
                    wrap,
                    html;

                if (!bannerArr || bannerArr.end_time < _val.server_time) return;

                wrap = '<div class="topactive j-top-banner_'+banner_id+' banner-wrapper">';
                header_r = '<div id="main_header_r_' + banner_id + '"class="top-banner" style="background: url(' + b_img + ') repeat scroll center 0px transparent; background-size: 1920px 48px; display:block;">';
                header_rp_a_el = '<a id="main_header_a_' + banner_id + '" href=' + (link_url&&link_url.replace(/^http:/,"")) + ' target="_blank" rel="nofollow" style="height:48px;display:block;"><i class="iconfont icon-close j-icon-del top-del-icon" style="background: none;" href="javascript:void(0)"></i></a>';
                header_rp_a = bannerArr.link_url?header_rp_a_el:'';

                html = wrap + header_r + header_rp_a + '</div></div>';

                (function(b_img, index, banner_id, html, cb) {
                    GB_SHEIN_pre_load_images([b_img], function() {
                        // console.log('test:', index, banner_id);

                        $('.banner-wrapper').eq(index) && $('.banner-wrapper').eq(index).length ?
                            ($('#main_header_r_' + banner_id).length ? $('#main_header_r_' + banner_id).html(html) : $('.init-j-top-banner').prepend(html)) :
                            $('.init-j-top-banner').append(html);

                        cb && cb($('#main_header_r_' + banner_id));
                    })
                })(b_img, index, banner_id, html, cb)
            };
            var inner_html = function (obj) {
                var count_html_wrap = Utils.getElById('main_header_a_' + obj.banner_id),
                    count_html = '<div class="header-time-wrapper j-banner-timer" id="top_banner_ab_' + obj.banner_id + '"><div id="divcountdowntime_'+obj.banner_id+'" class="header-time"><span class="j-hour" id="time_h_'+obj.banner_id+'" style="color:#' + obj.banner_font_color + ';background-color:#' + obj.background_color + '">00</span><em style="color:#' + obj.time_font_color + '">H</em><span class="j-sec" id="time_s_'+obj.banner_id+'" style="color:#' + obj.banner_font_color + ';background-color:#' + obj.background_color + '">00</span><em style="color:#' + obj.time_font_color + '">M</em><span class="j-min" id="time_m_'+obj.banner_id+'" style="color:#' + obj.banner_font_color + ';background-color:#' + obj.background_color + '">00</span><em style="color:#' + obj.time_font_color + '">S</em></div></div>';

                $(count_html_wrap).after(count_html);
            };

            return {
                init_warp: init_wrap,
                inner_html: inner_html
            }
        };

        // 对topbanner的增删改查与刷新
        function topBannerModel() {
            var tb_over_action = function(cur_tbObj, timer) {
                try {
                    document.querySelector('.j-top-banner_' + cur_tbObj.banner_id).style.display = 'none';
                } catch (e) {}

                clearInterval(timer);
                // 只要有一个banner过期，就将over 变量 至为1,有一个到期就清除所有计时器和dom，如果是图片
                // 即无计时器，在 banner_update 判断 font_color 时 count ++ 即可，每次只要判断 count 和 banners的个数是否相等
                _val.over = 1;
                _val.count++;
                // 如果是多个banner，判断到达最后一个时清楚dom，读后台接口
                if(_val.count == _val.banner_arr.length) {
                    _val.count = 0;
                    _val.over = 0;
                    initFromBackEnd();
                } else {
                    main('first')
                }
            };

            var updateTime = function (obj, id_count, idh, ids, idm) {
                var current_timestamp = _val.server_time,
                    overtime_timestamp = obj.end_time,
                    banner_time_list = Utils.getElById(id_count),
                    banner_time_h = Utils.getElById(idh),
                    banner_time_m = Utils.getElById(ids),
                    banner_time_s = Utils.getElById(idm);

                var countdownTime = new timer_iGeo(current_timestamp, overtime_timestamp, obj, function(h,m,s,timer){
                    if(_val.over) {
                        // 清除还未过期的banner计时器
                        clearInterval(timer);
                        _val.count++;
                        if(_val.count == _val.banner_arr.length) {
                            _val.count = 0;
                            _val.over = 0;
                            initFromBackEnd();
                        }
                    }
                    banner_time_h.innerHTML = h;
                    banner_time_m.innerHTML = m;
                    banner_time_s.innerHTML = s;
                    banner_time_list.style.display = "block";
                }, tb_over_action);
                countdownTime.start();
            };

            var banner_update = function (obj, current_timestamp, div_wrap_id, count_div_id) {
                if (obj.start_time < current_timestamp && current_timestamp < obj.end_time) {
                    if(!!Utils.getElById(div_wrap_id)){
                        Utils.getElById(div_wrap_id).style.display = 'block';
                        if (obj.banner_font_color != "") {
                            renderFrame().inner_html(obj);
                            var el_h_id = 'time_h_'+obj.banner_id,
                                el_s_id = 'time_s_'+obj.banner_id,
                                el_m_id = 'time_m_'+obj.banner_id,
                                el_cdt_id = 'divcountdowntime_'+obj.banner_id;
                            updateTime(obj, el_cdt_id, el_h_id, el_s_id, el_m_id);//首次加载，避免空白
                        }else{
                            _val.count++;
                        }
                    }
                } else {
                    Utils.getElById(div_wrap_id).style.display = 'none';
                    Utils.getElById(count_div_id).innerHTML = "";

                }
            };
            var refresh = function (current_time, obj) {
                if (obj.start_time < current_time && current_time < obj.end_time) {
                    banner_update(obj, current_time, 'main_header_r_' + obj.banner_id, 'main_header_a_' + obj.banner_id);
                }
            };

            return {
                updateTime: updateTime,
                banner_update: banner_update,
                refresh: refresh
            };
        };

        // 事件管理
        function eventHandler() {
            $('.init-j-top-banner').on('click', '.j-icon-del', function (e) {
                e.preventDefault();
                $(this).parent().parent().parent().animate({height: 0}, 10);
            });
        };
        if("en" == 'us'){
            $(".init-j-top-banner").on("click",".banner-wrapper",function (e) {
                // top banner 埋点
                if (typeof(ga) == 'function') {
                    var bannerName = $(this).prev().hasClass('topactive') ? 'us_topbanner2' : 'us_topbanner1';
                    if($(e.target).hasClass('j-icon-del')){
                        var tbcName1 = getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici')?getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici'):bannerName;
                        ga('shein.send', 'event', 'Banner', 'CloseBanner', tbcName1);
                    }else{
                        var tbName = getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici')?getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici'):bannerName;
                        ga('shein.ec:addPromo', {
                            'name': tbName
                        });
                        ga('shein.ec:setAction', 'promo_click');
                        ga('shein.send', 'event', 'Banner', 'ClickBanner', tbName);
                    }
                }
            })
        }else{
            $(".init-j-top-banner").on("click",".banner-wrapper",function (e) {
                var bannerName2 = $(this).prev().hasClass('topactive') ? 'topbanner2' : 'topbanner1';
                if($(e.target).hasClass('j-icon-del')){
                    var tbcName2 = getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici')?getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici'):bannerName2;
                    ga('shein.send', 'event', 'Banner', 'CloseBanner', tbcName2);
                }else {
                    var tbName = getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici') ? getUrlNameString($(this).find('a').eq(0).attr('href'), 'ici') : bannerName2;
                    ga('shein.ec:addPromo', {
                        'name': tbName
                    });
                    ga('shein.ec:setAction', 'promo_click');
                    ga('shein.send', 'event', 'Banner', 'ClickBanner', tbName);
                }
            });
        }

        main('first');
    });
</script>



<script type="text/javascript">
    var GB_ga_register = {
        register: function(val, failMsg) {

            var statusLabel = val ? 'Success':'Fail-';
            var msg = '';
            if (failMsg) {
                msg = val ? '' : failMsg;
            }

            if(typeof(ga) == 'function') {
                ga('shein.send',{
                    hitType: 'event',
                    eventCategory: '注册弹窗',
                    eventAction: 'ClickPopUpsRegister',
                    eventValue: val,
                    eventLabel: statusLabel + msg
                });
            }
        },
        autoPopUps: function() {
            if(typeof(ga) == 'function') {
                ga('shein.send',{
                    hitType: 'event',
                    eventCategory: '注册弹窗',
                    eventAction: 'AutoPopUps'
                });
            }
        },
        clickPopUps: function() {
            if(typeof(ga) == 'function') {
                ga('shein.send',{
                    hitType: 'event',
                    eventCategory: '注册弹窗',
                    eventAction: 'ClickPopUps'
                });
            }
        },
        closePopUps: function() {
            if(typeof(ga) == 'function') {
                ga('shein.send',{
                    hitType: 'event',
                    eventCategory: '注册弹窗',
                    eventAction: 'CloseAutoPopUps'
                });
            }
        }
    }
</script>
<script type="text/javascript">
    var support = {};
    $(function(){
        if($('.j-customer-vue').length) {
            support = new Vue({
                el: '.j-customer-vue',
                data: {
                    bannerNav:[{
                        type: "online",
                        _collapse: true,
                        _selected: true,
                        data: {
                            title: 'LIVE CHAT',
                            desc: '24*7 hours always at your service.',
                            offline: {
                                title: 'LIVE CHAT',
                                desc: '24*7 hours always at your service.',
                            }
                        }
                    },{
                        type: "ticket",
                        _collapse: true,
                        _selected: true,
                        data: {
                            title: 'Submit a ticket',
                            desc: 'Any issues, response within 24 hours.'
                        }
                    },{
                        type: "selfhelp",
                        _collapse: true,
                        _selected: true,
                        data: {
                            title: 'FAQ',
                            desc: ''
                        }
                    }],
                    offLine: false,
                    showSustomer: false,
                },
                methods: {
                    getCustomerService: function(){
                        var self = this;
                        $.get('/get_customer_service', function(res){
                            self.showSustomer = true;//接口如果错误展示默认
                            if(res.code == 0 && res.info){
                                if(res.info.entries && res.info.entries.bannerNav && res.info.entries.bannerNav.length){
                                    self.bannerNav = res.info.entries && res.info.entries.bannerNav
                                }else{
                                    self.showSustomer = false; //请求成功未发布不显示
                                }
                            }
                        })
                    }
                },
                mounted: function(){
                    var _this = this;
                    _this.$nextTick(function(){
                        //头部下拉
                        $('.j-header-hover').hover(function(){
                            $(this).children('.j-dropdown-hover').removeClass('she-hide');
                        },function(){
                            $(this).children('.j-dropdown-hover').addClass('she-hide');
                        })

                        _this.getCustomerService();
                    })
                }

            })
        }
    })


</script>
<script>

    window.V_Comp = {}
    var pattern= /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$/
    var GB_SHEIN_check_login_promise = SHEIN_W.userModule.check_login_promise();
    ;(function() {
        var currencies = {"USD":{"currency_id":"2","code":"USD","symbol_left":"US$","symbol_right":"","decimal_place":"2","value":"1.00000000","date_modified":"2018-09-03 11:00:59","status":"0","default":"1","country_flag":"images/currency/USD.jpg","dec_point":".","thousands_sep":",","title":"US Dollar"},"EUR":{"currency_id":"3","code":"EUR","symbol_left":"","symbol_right":"€","decimal_place":"2","value":"0.87184000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/EUR.jpg","dec_point":",","thousands_sep":".","title":"Euro"},"GBP":{"currency_id":"1","code":"GBP","symbol_left":"GBP£","symbol_right":"","decimal_place":"2","value":"0.78009200","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/GBP.jpg","dec_point":".","thousands_sep":",","title":"Pound Sterling"},"CAD":{"currency_id":"10","code":"CAD","symbol_left":"CA$","symbol_right":"","decimal_place":"2","value":"1.32187700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/CAD.jpg","dec_point":".","thousands_sep":",","title":"Canadian Dollar"},"NOK":{"currency_id":"15","code":"NOK","symbol_left":"N.Kr.","symbol_right":"","decimal_place":"2","value":"8.48176400","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/NOK.jpg","dec_point":".","thousands_sep":",","title":"Norwegian Krone"},"AED":{"currency_id":"24","code":"AED","symbol_left":"AED.","symbol_right":"","decimal_place":"2","value":"3.67280000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/AED.jpg","dec_point":".","thousands_sep":",","title":"United Arab Emirates Dirham"},"INR":{"currency_id":"30","code":"INR","symbol_left":"₹","symbol_right":"","decimal_place":"0","value":"71.00000000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/INR.jpg","dec_point":"","thousands_sep":",","title":"Indian Rupee"},"SEK":{"currency_id":"16","code":"SEK","symbol_left":"","symbol_right":"kr","decimal_place":"0","value":"9.25925900","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SEK.jpg","dec_point":"","thousands_sep":" ","title":"Swedish Krona"},"SAR":{"currency_id":"19","code":"SAR","symbol_left":"S.R.","symbol_right":"","decimal_place":"2","value":"3.75040000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SAR.jpg","dec_point":".","thousands_sep":",","title":"Saudi Arabian Riyal"},"PLN":{"currency_id":"18","code":"PLN","symbol_left":"zł","symbol_right":"","decimal_place":"2","value":"3.75093800","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/PLN.jpg","dec_point":",","thousands_sep":".","title":"Polish Zloty"},"HKD":{"currency_id":"12","code":"HKD","symbol_left":"HK$","symbol_right":"","decimal_place":"2","value":"7.93021400","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/HKD.jpg","dec_point":".","thousands_sep":",","title":"Hongkong Dollar"},"MXN":{"currency_id":"14","code":"MXN","symbol_left":"$MXN","symbol_right":"","decimal_place":"2","value":"19.49317700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/MXN.jpg","dec_point":".","thousands_sep":",","title":"Mexican Peso"},"DKK":{"currency_id":"17","code":"DKK","symbol_left":"D.Kr.","symbol_right":"","decimal_place":"2","value":"6.49772600","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/DKK.jpg","dec_point":",","thousands_sep":".","title":"Danish Krona"},"JPY":{"currency_id":"9","code":"JPY","symbol_left":"JPY¥","symbol_right":"","decimal_place":"0","value":"112.35955100","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/JPY.jpg","dec_point":"","thousands_sep":",","title":"Japanese Yen"},"BRL":{"currency_id":"21","code":"BRL","symbol_left":"R$","symbol_right":"","decimal_place":"2","value":"4.05450000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/BRL.jpg","dec_point":",","thousands_sep":"","title":"Brazil Reais"},"SGD":{"currency_id":"22","code":"SGD","symbol_left":"S$","symbol_right":"","decimal_place":"2","value":"1.38677000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SGD.jpg","dec_point":".","thousands_sep":",","title":"Singapore Dollar"},"RUB":{"currency_id":"8","code":"RUB","symbol_left":"","symbol_right":"руб.","decimal_place":"0","value":"68.96551700","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/RUB.jpg","dec_point":"","thousands_sep":" ","title":"Russian Ruble"},"QAR":{"currency_id":"25","code":"QAR","symbol_left":"QR.","symbol_right":"","decimal_place":"2","value":"3.65000000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/QAR.jpg","dec_point":".","thousands_sep":",","title":"Qatar Riyal"},"NZD":{"currency_id":"28","code":"NZD","symbol_left":"$NZ.","symbol_right":"","decimal_place":"2","value":"1.52811700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/NZD.jpg","dec_point":".","thousands_sep":",","title":"New Zealand Dollar"},"BHD":{"currency_id":"27","code":"BHD","symbol_left":"BD.","symbol_right":"","decimal_place":"2","value":"0.37800000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/BHD.jpg","dec_point":".","thousands_sep":",","title":"Bahrain Dinar"},"KWD":{"currency_id":"23","code":"KWD","symbol_left":"K.D.","symbol_right":"","decimal_place":"2","value":"0.30250000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/KWD.jpg","dec_point":".","thousands_sep":",","title":"Kuwait Dinar"},"AUD":{"currency_id":"11","code":"AUD","symbol_left":"AU$","symbol_right":"","decimal_place":"2","value":"1.40706300","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/AUD.jpg","dec_point":".","thousands_sep":",","title":"Australian Dollar"},"CHF":{"currency_id":"13","code":"CHF","symbol_left":"CHF$","symbol_right":"","decimal_place":"2","value":"0.98087300","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/CHF.jpg","dec_point":",","thousands_sep":".","title":"Switzerland Francs"},"TWD":{"currency_id":"29","code":"TWD","symbol_left":"NT$","symbol_right":"","decimal_place":"0","value":"31.05590100","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/TWD.jpg","dec_point":"","thousands_sep":",","title":"New Taiwan Dollar"}}

        var analysisFun = {
            emailEdit: function() {
                if(typeof ga === 'function') {
                    ga('shein.send',{
                        hitType: 'event',
                        eventCategory: 'footer',
                        eventAction: 'EditEmail'
                    })
                }
            },
            emailSub: function(val) {
                if(typeof ga === 'function') {
                    ga('shein.send',{
                        hitType: 'event',
                        eventCategory: 'footer',
                        eventAction: 'Subscribe',
                        eventValue: val
                    })
                }
            },
            navHover: {
                spreatOut: function(href) {
                    href = href.split('?')[1]
                    var results = SHEIN_W.queryString.parse(href),
                        ici = results.ici,
                        icn = results.icn,
                        label = ici + ' ' + icn

                    GBGaSend({
                        category: '导航栏',
                        action: 'SpreadOut',
                        label: label
                    })

                }
            }
        }

        // 动态设置登录用户名, 货币

        GB_SHEIN_check_login_promise.then(function(data) {
            var hi = "Hello "
            var loginURL = "https://www.shein.com/user/auth/login?direction=nav"
            var loginPrompt = "Sign in/Register"
            var username = data.username
            var currency = data.currency
            var email = data.email
            var member_id = data.member_id
            if(email && !SHEIN_W.getCookie('userinfo_email')) {
                SHEIN_W.setCookie('userinfo_email', email, '60 * 60 * 24 * 7')
            }
            if(member_id && !SHEIN_W.getCookie('userinfo_userId')) {
                SHEIN_W.setCookie('userinfo_userId', member_id, '60 * 60 * 24 * 7')
            }
            if (window.PageGroupOverview === '商品详情页' || window.PageGroupOverview === '列表页') {
                var _search = document.location.search.indexOf('?') === 0 ? (document.location.search + '&_prot=1') : '?_prot=1'
                loginURL = "https://www.shein.com/user/auth/login?redirection=" + encodeURIComponent(document.location.pathname + _search)
            }

            $('.j-header-username').removeClass('she-hide')

            if (username != null){
                $('.j-header-username').text(hi + ' ' + username)
                $('.j-header-username').prop('href', "https://www.shein.com/user/index")
                $('.j-header-menu-signout').show()

                $.get('/user/tickets/getUnReadTicketNum',function(res){
                    if(res.ticketNum>0) {
                        $('.j-ticket-nopenum').removeClass('she-hide')
                        $('.j-ticket-nopenum').text(res.ticketNum)
                    }
                })

            } else {
                $('.j-header-menu-signout').hide()
                $('.j-header-username').text(loginPrompt)
                $('.j-header-username').prop('href', loginURL)

                //购物车
                $('.j-cart-unlogin').removeClass('she-hide');
                if( window.cart_module && cart_module.cartVue ){
                    cart_module.cartVue.$data.isLogin = false;
                }
            }
            // 快速注册弹窗
            function getCookie(objName) {//取最新的cookie
                var arrStr = document.cookie.split("; ");
                var c=null;
                for (var i = 0; i < arrStr.length; i++) {
                    var temp = arrStr[i].split("=");
                    if (temp[0] == objName) {
                        c = decodeURIComponent(temp[1]);
                    }
                }
                return c;
            }
            function checkSameCookie(objName){
                var arrStr = document.cookie.split("; "),count=0;
                for (var i = 0; i < arrStr.length; i++) {
                    var temp = arrStr[i].split("=");
                    if (temp[0] == objName) {
                        count++
                    }
                }
                return count>1;
            }


            var hostname = document.location.hostname
            var diffHostname = hostname.indexOf('.shein.in') > -1 || hostname.indexOf('.shein.co.uk') > -1 || hostname.indexOf('.shein.tw') > -1
            var lastCookieValue = getCookie('sessionID_shein');
            if(!diffHostname){//存在2个相同cookie 先删除所有cookie后再设置
                if(checkSameCookie("sessionID_shein")){
                    SHEIN_W.setCookie('sessionID_shein', '', -1,true);//删除根域名下cookie
                    lastCookieValue = getCookie('sessionID_shein'); //获取子域名下cookie
                    SHEIN_W.setCookie('sessionID_shein', '', -1); //删除子域名下cookie
                }
            }
            if (email) {
                diffHostname ?
                    SHEIN_W.setCookie('sessionID_shein', lastCookieValue, 60 * 60 * 24 * 7) :
                    SHEIN_W.setCookie('sessionID_shein', lastCookieValue, 60 * 60 * 24 * 7, true)
            } else {
                diffHostname ?
                    SHEIN_W.setCookie('sessionID_shein', lastCookieValue, 60 * 60 * 24) :
                    SHEIN_W.setCookie('sessionID_shein', lastCookieValue, 60 * 60 * 24, true)
            }


            var hide_q_r = getCookie('hide_q_r')
            if (!email && hide_q_r != 1 && window.location.href.indexOf('user/auth/login') < 0 )
                if(typeof(quickRegister) != 'undefined') {
                    // quickRegister.state.quickShow = true
                    quickRegister.state.quickRegister = true
                }

            // 更改货币
            // $('.j-currency-title').html(currencies[currency].symbol_left)
            if(currencies[currency] && currencies[currency].code) {
                $('.j-currency-title').html(currencies[currency].code)
            }
            if ('en' === 'ar') {
                SHEIN_W.setCookie('currency', currency, 3600 * 24)
            }

            // 免邮信息
            $.get('/product/shippingDetail', function(shippingData){
                var freeHTML = [];
                if(shippingData && shippingData.length){
                    var freeShippingTipsData = [];
                    shippingData.forEach(function(val) {
                        var text = (val.type == 'stand_shipping'?'<storng style="text-transform: capitalize; color:#d10000; font-weight:700">Free Standard Shipping</storng> on orders over {0}':'<storng style="text-transform: capitalize; color:#d10000; font-weight:700">Free Express Shipping</storng> on orders over {0}');
                        var text1 = (val.type == 'stand_shipping'?'<storng style="text-transform: capitalize; color:#d10000; font-weight:700">Free Standard Shipping! </storng>':'<storng style="text-transform: capitalize; color:#d10000; font-weight:700">Free Express Shipping!</storng>');
                        var el1 = '<span>'+SHEIN_W.template(val.full_amount.amountWithSymbol, text)+'</span>';
                        var el2 = '<span>'+text1+'</span>';
                        var invoke = Number(val.full_amount.amount);
                        if(invoke > 0){
                            freeShippingTipsData.push(el1);
                        }else if(invoke == 0 && val.shippingPrices.amount == 0){
                            freeShippingTipsData.push(el2);
                        }
                    });
                    freeHTML  = freeShippingTipsData.map(function(tip, i) {
                        var hrefVal = "" + "/Shipping-Info-a-280.html";
                        return '<li class="discount"><a href='+hrefVal+'>'+tip+'</a></li>';
                    });
                }
                // 首单优惠数据
                if(data.freeShippingTips && data.freeShippingTips.length){
                    var freeShippingTips = data.freeShippingTips;
                    freeShippingTips.forEach(function(item) {
                        freeHTML.push('<li class="discount">' + item.replace(/http\:\/\/\w+.shein.\w+/gi, '') + '</li>');
                    });
                }

                $('.j-free-shipping').append(freeHTML.join(''))

                // free shipping 动画
                var index = 0,
                    stop = false,
                    num =  $('.j-free-shipping >li').length,
                    liEls = $('.j-free-shipping >li');

                function shippingflipInX(){
                    if(stop) return false;
                    if(index > (num-2)){
                        liEls.addClass('she-none');
                        liEls.removeClass('animated flipInX she-block');
                        index = 0;
                        liEls.eq(0).addClass('animated flipInX she-block').removeClass('she-none');
                        return;
                    }

                    liEls.addClass('she-none');
                    liEls.removeClass('animated flipInX she-block');
                    //下一个
                    // liEls.eq(index).addClass('none');
                    liEls.eq(index+1).removeClass('she-none').addClass('animated flipInX she-block');
                    index ++ ;
                }
                var hdtimer = setInterval(function(){
                    shippingflipInX();
                },3000);
                $('.j-free-shipping').hover(function(){
                    stop = true;
                },function(){
                    stop = false;
                })
            })
        });

        // 设置语言切换
        // $('.j-menu-lang li>a').click(function() {
        //   var lang = $(this).data('lang')
        //   lang = lang === 'en'? 'www': lang
        //   location.href = location.href.replace(location.hostname, lang + '.shein.com')
        // })

        $('.j-icon-del').click(function(e){
            e.stopPropagation();
            e.preventDefault();
            $('.j-top-banner').hide();
            return false
        })

        // // 头部固定动画
        // var fixedTop = function() {
        //     var st = $(document).scrollTop();
        //     if (st>$(".j-top-banner").height()) {
        //     	if ($(".j-top-banner").hasClass('topactive')) {
        //     		$(".j-top-banner").removeClass('topactive');
        //         $(".j-header-info").addClass('no-top');
        //         $('.j-hbag-box').addClass('hbag-top');
        //     	}
        //     } else {
        //     	$(".j-top-banner").addClass('topactive');
        //       $(".j-header-info").removeClass('no-top');
        //       $('.j-hbag-box').removeClass('hbag-top');
        //     }
        // };
        // $(window).scroll(fixedTop);
        // fixedTop();



        if("en" == 'en' || "en" == 'uk' || "en" == 'fr' || "en" == 'de' || "en" == 'es' || "en" == 'it' || "en" == 'nl'){
            if(SHEIN_W.getCookie('keepPrivacy') == 1){
                var  subscrib_isKeepPrivacy = false
            }else{
                var  subscrib_isKeepPrivacy = true
            }
            if(subscrib_isKeepPrivacy){
                $('.j-privacy-check-subscrib').show();
            }else{
                $('.j-privacy-check-subscrib').hide();
            }
            $('.j-privacy-check-subscrib a').click(function(){
                welcomePrivacyVue.showContent = "fromFooterSubscribe";
                if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                    GB_GDPR_ANALYSIS.GDPRregister('ClickPrivacyPolicy','email');
                }
            })
        }

        // footer 邮件订阅
        $('.j-subscribe-submit').click(function() {
            var errormsg = $('.j-footer-errormsg')
            var email = $('.j-footer-subscribe').val().trim()
            if(email.length == 0) {
                errormsg.text('Please enter an email address.');
                analysisFun.emailSub(0);
            }else if (!pattern.test(email)) {
                errormsg.text('Oops! It looks like you entered an invalid email address.');
                analysisFun.emailSub(0);
                //alert('邮箱错误')
            }else if ($('.j-privacy-check-subscrib').length && $('.j-privacy-check-subscrib').is(":visible") && !($('.j-privacy-check-subscrib .j-privacy-checkbox').is(":checked"))){
                errormsg.text('');
                $('.j-footer-privacy-tip').show();
            } else {
                if($('.j-privacy-check-subscrib').length && $('.j-privacy-check-subscrib').is(":visible")){
                    SHEIN_W.setCookie('keepPrivacy','1', 365 * 24 * 60 * 60)
                }
                $('.j-footer-submit').addClass('she-none').next().removeClass('she-none')
                $.ajax({
                    type: 'POST',
                    url: '/user/auth/subscribe',
                    data: {
                        email: email
                    },
                    success: function(data) {
                        if(data.code == 0){
                            $('.j-footer-submit').removeClass('she-none').next().addClass('she-none')
                            $('.j-footer-privacy-tip').hide();
                            errormsg.text('Thank you for subscribing! Enjoy shopping at shein.com.');
                            analysisFun.emailSub(1);
                            if($('.j-privacy-check-subscrib').length && $('.j-privacy-check-subscrib').is(":visible")){
                                if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                                    GB_GDPR_ANALYSIS.GDPRregister('Subscribe-email','AgreePrivacyPolicy');
                                }
                            }
                        }else if(data.code == 400509) {
                            $('.j-footer-submit').removeClass('she-none').next().addClass('she-none')
                            $('.j-footer-privacy-tip').hide();
                            errormsg.text('Oops! This email address has already been registered.');
                            analysisFun.emailSub(0);
                        }
                    }
                })
            }
        })

        // 切换货币
        $('.j-change-currency').click(function() {
            var currency = $(this).data('currency')
            $.get('/changeCurrency?currency=' + currency, function() {
                var __CurrentMainDomain__ = (function () {
                    var hostnameArray = location.hostname.split('.');
                    return "." + hostnameArray.slice(-2).join('.');
                })();
                function setCookie(name, val, expires, domain) {
                    //domain = domain || __CurrentMainDomain__;
                    var text = String(encodeURIComponent(val));
                    var  date = new Date();
                    date.setTime(date.getTime() + Number(expires)*1000);
                    text += '; expires=' + date.toUTCString();
                    // domain
                    text += '; path=/';
                    if (typeof (domain) != "undefined" && domain != "") {
                        text += '; domain='+__CurrentMainDomain__;
                    }

                    document.cookie = name + '=' + text;
                }
                setCookie('currency', currency, 60 * 60 * 24 * 7)

                if(window.listNavList) {
                    if(gb_querys.min_price || gb_querys.max_price) {
                        $.get('/product/getExchangeRate',{},function(res){
                            var autoCur = $('.j-price-auto').data('currency')
                            var originalCur = $('.j-currency-title').data('curcode')
                            var afterMax,afterMin,autoRate,afterRate,originalRate,origialmin,origialmax
                            console.log(res.curCate.exchangeRate)
                            Object.keys(res.curCate.exchangeRate).filter(function(rateItem,rateIndex){
                                if(autoCur == rateItem) {
                                    autoRate = res.curCate.exchangeRate[rateItem].value
                                }
                                return autoRate
                            })
                            Object.keys(res.curCate.exchangeRate).filter(function(rateItem,rateIndex){
                                if(currency == rateItem) {
                                    afterRate = res.curCate.exchangeRate[rateItem].value
                                }
                                return afterRate
                            })
                            Object.keys(res.curCate.exchangeRate).filter(function(rateItem,rateIndex){
                                if(originalCur == rateItem) {
                                    originalRate = res.curCate.exchangeRate[rateItem].value
                                }
                                return originalRate
                            })

                            if(gb_querys.selectPir) {
                                $('.j-auto-max').each(function(item,index){
                                    if(autoCur=='USD') {
                                        afterMax = ($(this).data('originum')*afterRate).toFixed(2)
                                    }else if(currency=='USD'){
                                        afterMax = ($(this).data('originum')/afterRate).toFixed(2)
                                    }else if(autoCur!='USD' && currency!='USD') {
                                        afterMax = ($(this).data('originum')/autoRate*afterRate).toFixed(2)
                                    }
                                    $(this).text(afterMax)
                                })

                                $('.j-auto-min').each(function(item,index){
                                    if(autoCur=='USD') {
                                        afterMin = ($(this).data('originum')*afterRate).toFixed(2)
                                    }else if(currency=='USD'){
                                        afterMin = ($(this).data('originum')/afterRate).toFixed(2)
                                    }else if(autoCur!='USD' && currency!='USD') {
                                        afterMin = ($(this).data('originum')/autoRate*afterRate).toFixed(2)
                                    }
                                    $(this).text(afterMin)
                                })

                                $('.j-price-auto li').each(function(item,index){
                                    if(gb_querys.selectPir == $(this).data('pindex')) {
                                        if($(this).find('span').data('autoprice') == 'lt') {
                                            var autoMax = $(this).find('span').children('em.j-auto-max').text()
                                            gb_querys.max_price = autoMax
                                        }else if($(this).find('span').data('autoprice') == 'between') {
                                            var autoMax = $(this).find('span').children('em.j-auto-max').text()
                                            var autoMin = $(this).find('span').children('em.j-auto-min').text()
                                            gb_querys.max_price = autoMax
                                            gb_querys.min_price = autoMin
                                        }else if($(this).find('span').data('autoprice') == 'gt') {
                                            var autoMin = $(this).find('span').children('em.j-auto-min').text()
                                            gb_querys.min_price = autoMin
                                        }
                                    }
                                })
                            }else {
                                if(originalCur=='USD') {
                                    origialmin = (GB_SHEIN_goods_list_sildebar.data.minPrice*afterRate).toFixed(2)
                                    origialmax = (GB_SHEIN_goods_list_sildebar.data.maxPrice*afterRate).toFixed(2)
                                }else if(currency=='USD'){
                                    origialmin = (GB_SHEIN_goods_list_sildebar.data.minPrice/originalRate).toFixed(2)
                                    origialmax = (GB_SHEIN_goods_list_sildebar.data.maxPrice/originalRate).toFixed(2)
                                }else if(originalCur!='USD' && currency!='USD') {
                                    origialmin = (GB_SHEIN_goods_list_sildebar.data.minPrice/originalRate*afterRate).toFixed(2)
                                    origialmax = (GB_SHEIN_goods_list_sildebar.data.maxPrice/originalRate*afterRate).toFixed(2)
                                }
                                if(!gb_querys.max_price) {
                                    gb_querys.min_price = origialmin
                                }else if(!gb_querys.min_price) {
                                    gb_querys.max_price = origialmax
                                }else {
                                    gb_querys.max_price = origialmax
                                    gb_querys.min_price = origialmin
                                }
                            }
                            location.href = location.origin + location.pathname + Object.keys(gb_querys).reduce(function(str, query){ query != '' && (str += (query + '=' + gb_querys[query] + '&')); return str }, '?').slice(0, -1)
                        })
                    }else {
                        window.location.reload(true)
                    }
                }else {
                    window.location.reload(true)
                }
            })
        })

        function toInternational(url){
            SHEIN_W.setCookie("jump_to_en","0",3600*24,1);//1天内不再跳转。
            if(url.indexOf("?")>-1){
                window.location.href = url+="&ref=en&ret=www&from_country=en";
            }else{
                window.location.href = url+="?ref=en&ret=www&from_country=en";
            }
        }

        // 切回国际站
        $('#txt_lang').click(function() {
            toInternational('https://www.shein.com')
        })
        // 双语切换
        $('.j-change-language').click(function() {
            var language = $(this).data('lang')
            if(['il', 'ilen'].indexOf(language) > -1) {
                language = language == 'il' ? 'ilen' : 'il'
                SHEIN_W.setCookie("SHEIN_W_DOUBLE_LANG", language, 3600*24*7, 1)
            }
            if(['ca', 'cafr'].indexOf(language) > -1) {
                language = language == 'ca' ? 'cafr' : 'ca'
                SHEIN_W.setCookie("ca_double_lang", language, 3600*24*7, 1)
            }
            if(['se', 'sesv'].indexOf(language) > -1) {
                language = language == 'se' ? 'sesv' : 'se'
                SHEIN_W.setCookie("se_double_lang", language, 3600*24*7)
            }
            if(['th', 'then'].indexOf(language) > -1) {
                language = language == 'th' ? 'then' : 'th'
                SHEIN_W.setCookie("th_double_lang", language, 3600*24*7, 1)
            }
            if(['id', 'iden'].indexOf(language) > -1) {
                language = language == 'id' ? 'iden' : 'id'
                SHEIN_W.setCookie("id_double_lang", language, 3600*24*7, 1)
            }
            window.location.reload(true)
        })
        // 切换语言
        $('.j-change-lang').click(function() {
            var url
            var lang = $(this).data('lang')
            var pathname = document.location.pathname
            var search = document.location.search
            var origin = 'https://' + (lang === 'en' ? 'www' : lang) + '.shein.com'

            if (lang === 'en') {
                SHEIN_W.setCookie("jump_to_en","0",3600*24,1);//1天内不再跳转。
            }
            if(lang == 'se'){
                origin = 'https://www.shein.se'
            }

            // 个人中心页面暂不跳转，
            // 不兼容老站路由，可能 404
            if (!/\.html$/.test(pathname) && pathname !== '/') return window.location = origin

            try {
                var querys = search.slice(1).split('&').reduce(function(obj, search) {
                    var arr = search.split('=');
                    obj[arr[0]] = decodeURIComponent(arr[1]); return obj
                }, {})

                delete querys.ret
                delete querys.ref
                delete querys.rep

                search = Object.keys(querys)
                    .filter(Boolean)
                    .reduce(function(str, prop) { str += prop + '=' + data[prop] + '&'; return str }, '?')
                    .slice(0, -1)
            } catch(e) {
                search = document.location.search
            }

            url = origin + pathname + search

            if (lang === 'en') {
                if(url.indexOf("?")>-1){
                    window.location.href = url+="&ref=en&ret=www";
                }else{
                    window.location.href = url+="?ref=en&ret=www";
                }
            } else {
                window.location.href = url
            }
        })

    }());
</script>
<script type="text/javascript">
    // 头部搜索
    ;(function() {
        function getUrlNameString(url, name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = url.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        }

        $('.j-404-search-s').click(function(e){
            $form = $('.j-404-search')
            e.stopPropagation()
            var $input = $form.find('input')
            var keywords = $input.val().replace("@","-")
            window.location = '/pdsearch/' + keywords + '/'
            return false
        })
        $('.j-404-search').keypress(function(ev){
            var ev=window.event||ev;
            if(ev.keyCode==13||ev.which==13)
            {
                $form = $('.j-404-search');
                $('.j-404-search').submit(headerSearch)
            }
        });
    })();
</script>
<script type="text/javascript">
    function getCookie(objName){/*获取指定名称的cookie的值*/
        var arrStr = document.cookie.split("; ");
        for(var i = 0;i < arrStr.length;i ++){
            var temp = arrStr[i].split("=");
            if(temp[0] == objName) return unescape(temp[1]);}
    }
    ;(function() {
        try{
            var email = getCookie('userinfo_email')
            if (email) window.localStorage.setItem('_user_login_email', email)
        }catch(error){
            console.log('not support localStorge ~!');
        }
    }());
</script>

<script type="text/javascript">
    if($('.j-fast-wish').length) {
        var fastwish = new Vue({
            el: '.j-fast-wish',
            data: {
                wishNum: '',
            },
            created: function() {
                var self = this;
                $(function(){
                    self.reAddwish();
                })

            },
            methods: {
                reAddwish: function() {
                    var self = this
                    $.get('/user/wishlist',{},function(res){
                        self.wishNum = res.count
                    })
                }
            }
        })
    }
</script>

<script type="text/javascript">
    $(function(){
        if($('.j-quick-register').length) {
            $('body').click(function(e){
                if(($('.j-welcome-privacy').length && $.contains($('.j-welcome-privacy')[0],e.target)) || ($('.j-popup-us').length && $.contains($('.j-popup-us')[0],e.target)) ||($('.j-us-privacy-pop').length && $.contains($('.j-us-privacy-pop')[0], e.target))) {
                    return;
                }
                if(!$.contains($('.j-quick-register')[0],e.target)) {
                    if(!SHEIN_W.getCookie('have_show')) {
                        SHEIN_W.setCookie('have_show', 1, 60 *60 *24* 1000, false)
                    }
                    quickRegister.state.quickShow = false
                }
            })
        }
    })
    var g_shein_quick_exprie = 60* 60 *24
    var pattern= /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$/;
    //快速注册
    var gb_s_qr_enable = true;//禁止多次提交
    if($('.j-quick-register').length) {
        var quickRegister = new Vue({
            el: '.j-quick-register',
            data:{
                emailtxt: '',
                errorTxt: '',
                state: {
                    quickShow: false,
                    quickShowReg: false,
                    quickShowSuc: false,
                    errorTip: false,
                    quickRegister: false,
                    quickloading: false,
                },
                first_pop_uped: '',
                isKeepPrivacy: false,
                privacyError: false,
            },
            mounted: function(){
                this.first_pop_uped = SHEIN_W.getCookie('have_show')
                if(this.first_pop_uped != 1){
                    this.state.quickShow = true
                    this.state.quickRegister = true
                    GB_ga_register.autoPopUps()
                }else {
                    // $('.j-get-off-mengban').addClass('she-hide')
                }
                if(SHEIN_W.getCookie('keepPrivacy') == 1){
                    this.isKeepPrivacy = false
                }else{
                    this.isKeepPrivacy = true
                    if(true){
                        $('.j-quick-register').find('.inside-btm').addClass('add-privacy');
                    }
                }

            },
            methods: {
                openQuickReg: function() {
                    this.state.quickShow = !this.state.quickShow
                    // $('.j-get-off-mengban').toggleClass('she-hide')
                    SHEIN_W.setCookie('have_show', 1, 60 *60 *24* 1000, false)
                    var hide_q_r = getCookie('hide_q_r')
                    if ($('.j-header-username').text() == null && hide_q_r != 1 && window.location.href.indexOf('user/auth/login') < 0) {
                        this.state.quickRegister = true
                    }
                    if(this.state.quickShow) {
                        GB_ga_register.clickPopUps()
                    }
                },
                submitQuickReg: function() {
                    if(!gb_s_qr_enable) return false;
                    var self = this
                    var email = self.emailtxt
                    self.errorTxt = ''
                    if("en" == "us"){
                        var countryId = SHEIN_W.getCookie('countryId');
                        var keepPrivacy = false
                        if(SHEIN_W.getCookie('keepPrivacy') == 1){
                            keepPrivacy = true
                        }else{
                            keepPrivacy = false
                        }
                        if(!keepPrivacy && _gb_privacyEurCountry.indexOf(parseInt(countryId)) > -1){
                            uspop_privacyVue.showPop  = true;
                            if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                                GB_GDPR_ANALYSIS.GDPRregister('PopUps','');
                            }
                            return false
                        }
                    }
                    self.$nextTick(function(){
                        if(email.length == 0) {
                            self.privacyError = false
                            self.errorTxt = 'Please enter an email address.'
                            GB_ga_register.register(0, self.errorTxt)
                            return false
                        }else if(!pattern.test(email)) {
                            self.privacyError = false
                            self.errorTxt = 'Please check your email format.'
                            GB_ga_register.register(0, self.errorTxt)
                            return false
                        }else if($('.j-privacy-check-quickregister').length && $('.j-privacy-check-quickregister').is(":visible") && !$('.j-privacy-check-quickregister .j-privacy-checkbox').is(":checked")){
                            self.errorTxt = ''
                            self.privacyError = true;
                        }else {
                            var prefer = [];

                            var preferenceCheckbox = $('.quick-reg-refer-input input:checkbox:checked');
                            preferenceCheckbox.each(function(index,checkbox){
                                prefer.push(parseInt(checkbox.name));
                            })

                            var dat = {
                                email: email,
                                prefer: prefer
                            };
                            gb_s_qr_enable = false;
                            self.state.quickloading = true;

                            if($('.j-privacy-check-quickregister').length && $('.j-privacy-check-quickregister').is(":visible")){
                                SHEIN_W.setCookie('keepPrivacy','1', 365 * 24 * 60 * 60) //同意一年内不再弹
                            }

                            $.ajax({
                                type: 'POST',
                                url: '/user/auth/quickRegister',
                                contentType: 'application/json',
                                data:  JSON.stringify(dat),
                                success: function(data){
                                    gb_s_qr_enable = true;
                                    if(data.code == 0) {
                                        GB_ga_register.register(1)
                                    } else {
                                        GB_ga_register.register(0, data.msg)
                                    }

                                    if(data.code == 0) {
                                        self.state.quickShowReg = true;
                                        self.state.quickShowSuc = true;
                                        if(typeof(SHEIN_W.userModule) != 'undefined' && SHEIN_W.userModule.update_top_login) {
                                            SHEIN_W.userModule.update_top_login();
                                        }
                                        if($('.j-privacy-check-quickregister').length && $('.j-privacy-check-quickregister').is(":visible")){
                                            if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                                                GB_GDPR_ANALYSIS.GDPRregister('Subscribe-register','AgreePrivacyPolicy');
                                            }
                                        }
                                        // window.location.reload()
                                    } else if(data.code == 400503) {
                                        self.privacyError = false
                                        self.errorTxt ='The Email has been used by others. Please specify another Email.'
                                    } else if(data.code == 400517) {
                                        self.privacyError = false
                                        self.errorTxt = "We're so sorry to inform you that your IP is limited to register more . For further help, please <a onclick='showPreRobot()'; style=&quot;color:#00f;&quot; href='javascript:vold(0)'>contact us</a> !"
                                    } else {
                                        self.privacyError = false
                                        self.errorTxt ='Failed'
                                    }
                                    self.state.quickloading = false
                                },
                            });
                        }
                    })
                },
                changeEmailVerify: function() {

                },
                privacyShow: function(){
                    welcomePrivacyVue.showContent = "fromQuickRegister";
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('ClickPrivacyPolicy','快速注册');
                    }
                }
            }
        })
    }
</script>


<script type="text/javascript">
    // category 适配ipad
    $(function(){
        if (typeof(SHEIN_W)!='undefined' && typeof(SHEIN_W.isMobile) == 'function' && SHEIN_W.isMobile()){

            var _x_start,_x_move,_x_end,left_start;
            $(".j-navbar-list > .j-nav-menu").on("touchstart",function(e){
                _x_start = e.originalEvent.changedTouches[0].pageX,
                    left_start = 0
            })
            $(".j-navbar-list > .j-nav-menu").on("touchmove",function(e){
                _x_move = e.originalEvent.changedTouches[0].pageX,
                    $(".j-nav-dropdown").css("left",parseFloat(_x_move)-parseFloat(_x_start)+parseFloat(left_start)+"px");
            })
            $(".j-navbar-list > .j-nav-menu").on("touchend",function(e){
                _x_end = e.originalEvent.changedTouches[0].pageX;
            })
        }


    })
</script>

<script>
    $(function() {
        //check abt
        $.get('/abt/userData', function(cookieValue) {
            if(cookieValue) {
                SHEIN_W.setCookie('abt-info', cookieValue, '365 * 24 * 60 * 60')
            } else {
                SHEIN_W.delCookie('abt-info')
            }
        })
    })
</script>
<script type="text/javascript">
    var GB_analysis_bi_user;
    $(function () {
        GB_analysis_bi_user = {
            customBiData: function () {
                return  {
                    site: 'www',
                    timestamp: new Date().getTime(),
                    memberId: SHEIN_W.getCookie('userinfo_userId') || '',
                    cookieId: SHEIN_W.getCookie('cookieId') || '',
                    src: 'user',
                    client: SHEIN_W.isMobile()?'m':'pc'
                }
            },
            toQueryString: function(data) {
                return Object.keys(data).reduce(function (str, key, i) {
                    if (i === 0) {
                        str += (encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
                    } else {
                        str += ('&' + encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
                    }
                    return str
                }, '')
            },
            biClick: function(data, type, cb){
                var url = 'https://www.srmdata.com/d/track?&',
                    site = this.customBiData().site,
                    extendObj = {
                        language: ["www", "us", "uk", "au", "in", "en"].indexOf('en') > -1 ? "en-us" : ('en' === "tw" ? "zh-tw" : 'en'),
                    },
                    userCenterData = {
                        ticketDate: document.location.hostname,
                    },
                    enterData = '';
                switch(site){
                    case 'uk':
                        extendObj.ticketDate = 'www.shein.co.uk';
                        break;
                    case 'tw':
                        extendObj.ticketDate = 'www.shein.tw';
                        break;
                    case 'in':
                        extendObj.ticketDate = 'www.shein.in';
                        break;
                    default:
                        extendObj.ticketDate = site + '.shein.com';
                }
                if(type == 'userCenter') {
                    enterData = $.extend(userCenterData, this.customBiData());
                }else if(type == 'submitTk') {
                    enterData = $.extend(userCenterData, this.customBiData());
                    delete userCenterData['client'];
                }else{
                    enterData = $.extend(extendObj, this.customBiData());
                    delete enterData['src'];
                    delete enterData['client'];
                }

                url += this.toQueryString($.extend(enterData, data));
                var img = new Image;
                img.onload = function() {
                    (typeof cb === 'function') && cb()
                };
                img.src = url;
            }
        };
    })
</script>

<style type="text/css">
    [v-cloak] {
        display: none;
    }

    #robot-container {
        position: fixed;
        right: 15px;
        bottom: 0;
        width: 350px;
        height: 450px;
        border: 0px;
        box-shadow: rgba(0, 0, 0, 0.0980392) 0px 0px 3px 2px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        z-index: 16000002;
        overflow: hidden;
        background: #fff;
    }

    .top-green-bar {
        height: 24px;
        width: 100%;
        background: #38a300;
        color: #d4ebc8;
        text-align: center;
        line-height: 24px;
        font-weight: 900;
    }

    .top-bar-hide {
        position: absolute;
        right: 10px;
        cursor: pointer;
    }

    .customer-bar {
        width: 100%;
        height: 50px;
        position: relative;
        border-bottom: solid 1px #E5E5E5;
    }

    .customer-bar .photo {
        width: 50px;
        height: 50px;
        position: absolute;
        left: 10px;
        bottom: 7px;
        font-size: 50px;
        line-height: 50px;
    }

    .customer-bar .profile {
        left: 70px;
        position: absolute;
        height: 100%;
        padding: 10px;
        box-sizing: border-box;
    }

    .customer-bar .p-name {
        color: #32A500;
        font-weight: 900;
    }

    .customer-bar .p-intro {
        color: #999;
        max-width: 110px;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }

    .manual-service {
        border: 1px solid #222222;
        border-radius: 3px;
        height: 24px;
        line-height: 22px;
        position: absolute;
        right: 14px;
        top: 13px;
        padding: 0 8px;
        cursor: pointer;
    }

    .manual-service i {
        padding-right: 3px;
    }

    .manual-service:hover {
        background: #222;
        color: #fff;
    }

    .manual-disabled {
        border-color: #ccc;
        color: #ccc;
        cursor: not-allowed;
    }

    .manual-disabled:hover {
        background: #fff;
        color: #ccc;
    }

    .robot-body-container {
        width: 100%;
        height: 300px;
        overflow: scroll;
        background: #F5F5F5;
        box-sizing: border-box;
        padding: 10px;
    }

    .robot-body {

    }

    .robot-body .welcome {
        width: 100%;
        height: 70px;
        position: relative;
        background: #fff;
        border-radius: 6px;
    }

    .robot-body .welcome .logo {
        width: 44px;
        height: 44px;
        position: absolute;
        left: 10px;
        /*top: 5px;*/
        margin: 0;
        line-height: 70px;
        font-size: 44px;
    }

    .welcome .title-container {
        position: absolute;
        left: 68px;
        /*top: 12px;*/
        top: 0;
        bottom: 0;
        height: 40px;
        margin: auto;
    }

    .robot-input-container {
        width: 100%;
        height: 55px;
        box-shadow: 0 -2px 2px 0 rgba(0, 0, 0, 0.06);
        position: relative;
    }

    .robot-input-container input {
        position: absolute;
        top: 9px;
        width: 320px;
        height: 40px;
        left: 0;
        right: 0;
        margin: auto;
        background: #FAFAFA;
        border: 1px solid #E5E5E5;
        border-radius: 2px;
        outline: none;
        box-sizing: border-box;
        padding: 0 10px 0 10px;
    }

    .robot-input-container input:focus {
        background: #fff;
    }

    .all-categories-container {
        margin-bottom: 15px;
    }

    .all-categories-container .title {
        color: #999;
        margin-bottom: 8px;
        display: inline-block;
        background: transparent;
    }

    .all-categories {
        background: #fff;
        border-radius: 6px;
        box-sizing: border-box;
        padding: 10px 15px;
    }

    .all-categories .category {
        height: 30px;
        line-height: 30px;
        margin: 0 -15px;
        padding: 0 15px;
        cursor: pointer;
    }

    .all-categories .category:hover {
        background: #f5f5f5;
    }

    .all-categories .category .enter-icon {
        float: right;
    }

    .view-more-cate {
        text-decoration: underline;
        cursor: pointer;
        color: #666;
        margin-top: 5px;
        font-size: 12px;
    }


    #robot-loading {
        transform: none;
        text-align: left;
        position: relative;
        /* top: -5px; */
        left: 0;
        margin: 0;
    }

    .robot-body-articles {
        width: 100%;
        background: #fff;
        border-radius: 6px;
        box-sizing: border-box;
        padding: 10px 10px 10px 15px;
        margin: 15px 0;
        box-sizing: border-box;
    }

    .robot-body-articles .section {
        cursor: pointer;
        font-weight: 900;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .robot-body-articles .section-arrow {
        transform: rotate(180deg);
        transition: .4s;
    }

    .robot-body-articles .article .title {
        margin: 0 -10px 0 -15px;
        padding: 6px 25px 6px 15px;
        cursor: pointer;
        line-height: 1.4;
    }

    .robot-body-articles .article .title:hover {
        background: #f5f5f5;
    }

    .robot-body-articles .article .content {
        /* display: none; */
        background: #FAFAFA;
        padding: 8px 10px;
        margin: 4px 0;
        width: 100%;
        overflow: hidden;
        color: #666;
    }

    .robot-body-articles .article .content img {
        width: 100%;
        height: auto;
    }

    .view-original-container {
        margin-top: -4px !important;
    }

    .view-original-container a.view-original-article {
        color: #2AA700;
        text-decoration: underline;
    }

    .view-original-container .feedbackBox {
        float: right;
        position: relative;
        top: -4px;
        right: -10px;
    }

    .view-original-container .feedbackBox .praise {
        float: left;
        cursor: pointer;
        margin-right: 40px;
    }

    .view-original-container .feedbackBox .trample {
        float: left;
        cursor: pointer;
    }

    .view-original-container .feedbackBox .black {
        color: black;
    }

    .articles-loading {
        transform: none;
        text-align: center;
        position: relative;
        width: 100%;
        top: -5px;
        left: 0;
        margin: 0;
    }

    .robot-chat {
        width: 100%;
        margin: 15px 0;
    }

    .robot-chat:after {
        content: '';
        clear: both;
        width: 0;
        height: 0;
        display: block;
    }

    .customer-logo, .agent-logo {
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.24);
        border-radius: 4px;
        float: right;
        width: 34px;
        height: 34px;
        font-size: 34px;
        line-height: 34px;
    }

    .customer-input, .agent-input {
        float: right;
        background: #DEF1D4;
        border: 1px solid #9ED482;
        border-radius: 6px 6px 0 6px;
        margin-right: 6px;
        padding: 8px 14px;
        max-width: 225px;
    }

    .agent-logo, .agent-input {
        float: left;
    }

    .customer-logo {
        color: #acacac;
    }

    .agent-input {
        background: #FFFFFF;
        border: 1px solid #E5E5E5;
        border-radius: 6px 6px 6px 0;
        margin-left: 6px;
    }
</style>


<div id='robot-container' v-cloak :style='{ display: show ? "block" : "none" }'>
    <div class='top-green-bar'>
        SUPPORT
        <span class='top-bar-hide' @click='show=false'>一</span>
    </div>

    <div class="customer-bar">
        <div class="photo iconfont icon-slogo"></div>
        <div class="profile">
            <p class="p-name">SHEIN</p>
            <p class="p-intro" title="Customer support">Customer support</p>
        </div>
        <!-- zendesk连接上了之后才可以点击 -->
        <div class='manual-service' @click='manualService' :class='{"manual-disabled": !zenDeskComponent.departmentStatusRetrieved}'>
            <i class="iconfont icon-kefu"></i>Manual Service
        </div>
    </div>

    <div class='robot-body-container'>
        <div class="robot-body">
            <!-- 一级分类 -->
            <div class="all-categories-container" v-show="0">
                <span class='title'>Please select consulting business topic first before starting manual service</span>
                <div class='all-categories'>
                    <div id="robot-loading" class="loadding-animatioin la-ball-pulse la-ball-pulse-x"
                         :style='{ display: loadingSections ? "block" : "none" }'>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <p class="category" v-for='(section, index) in top5sections' @click='getArticles(section)'>
                        {{index+1}}. {{section.name}}
                        <span class="iconfont enter-icon icon-ssend-arrow"></span>
                    </p>
                    <p class='view-more-cate'
                       :style='{ display: sections.length !== top5sections.length ? "block" : "none" }'
                       @click="viewMore">View More</p>
                </div>
            </div>

            <!-- 欢迎提示语 -->
            <div class='welcome'>
                <div class="logo iconfont icon-slogo"></div>
                <div class="title-container">
                    <p>Hello ，welcome to Shein. How may I help you?</p>
                    <!-- <p v-html="clickHereText"></p> -->
                </div>
            </div>

            <template v-for='(message, messageIndex) in messages'>
                <!-- loading -->
                <div class='robot-body-articles' v-if='message.type==="loadingArticles"'>
                    <div class="loadding-animatioin la-ball-pulse la-ball-pulse-x articles-loading">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <!-- 搜索文章结果 (二级分类) -->
                <div class='robot-body-articles' v-if='message.type==="articles"'
                     :data-section-id='message.section.id ? message.section.id : ""'>
                    <!-- 先隐藏掉 -->
                    <p v-show="0" class="section" @click='toggleSection(message.section.id)'
                       :style='{"margin-bottom": message._show || message._show === undefined ? "8px" : "0px"}'>
                        {{message.section.name}}<i class='iconfont section-arrow icon-down' v-if='message.section.id'
                                                   :style='{transform: message._show ? "rotate(0)" : "rotate(180deg)"}'></i>
                    </p>
                    <div style='overflow: hidden;'
                         :style='{height: message._show || message._show === undefined ? "auto" : "0px"}'>
                        <div class='article' v-for='(article, index) in message.top3Articles'>
                            <p class='title' v-show="0" @click='showArticle(article, $event)'><span>{{ article.title }}</span><span
                                        class="iconfont icon-down" style="float:right;position: relative;top: -2px;right: -15px;"></span>
                            </p>
                            <div class="content" v-html='article.body'></div>
                            <div class='content view-original-container'>
                                <a class='view-original-article' :href='article.html_url'
                                   target='_blank'>View original article
                                </a>
                                <div class="feedbackBox">
                                    <div class="praise iconfont icon-like1" v-show="!article.isPraise" @click="clickFeedback(index, messageIndex,  1)"></div>
                                    <div class="praise black iconfont icon-likehover" v-show="article.isPraise" @click="clickFeedback(index, messageIndex,  2)"></div>
                                    <div class="trample iconfont icon-unlike" v-show="!article.isTrample" @click="clickFeedback(index, messageIndex,  3)"></div>
                                    <div class="trample black iconfont icon-unlikehover" v-show="article.isTrample" @click="clickFeedback(index, messageIndex,  4)"></div>
                                </div>
                            </div>
                        </div>
                        <p class='view-more-cate' @click='viewMoreArticles(messageIndex)'
                           v-show="0"
                           :style='{ display: message.allArticles.length !== message.top3Articles.length ? "block" : "none" }'>View More
                        </p>
                    </div>
                </div>

                <!-- 客户发送信息 -->
                <div class="robot-chat" v-if='message.type === "customer-type"'>
                    <p class='customer-logo iconfont icon-suser'></p>
                    <p class='customer-input'>{{message.content}}</p>
                </div>

                <!-- 搜索无结果 -->
                <div class="robot-chat" v-if='message.type === "I DO NOT KNOW"'>
                    <p class='agent-logo iconfont icon-slogo'></p>
                    <p class='agent-input'>
                        If you can't find the answer you're looking for, please get in touch via <a href='javascript:;' style='text-decoration: underline;' @click='manualService'>online help.</a>
                    </p>
                </div>
                <!-- 点赞的反馈 -->
                <div class="robot-chat" v-if='message.type === "feedback"'>
                    <p class='agent-logo iconfont icon-slogo'></p>
                    <p class='agent-input'>
                        Thank you for your feedback.
                    </p>
                </div>
            </template>

        </div>
    </div>

    <!-- 底部输入框 -->
    <div class="robot-input-container">
        <input type="text" ref='customerInput' :placeholder="customerInputPlaceholder"
               v-model.trim='customerType' @keyup.enter='submitType'>
    </div>
</div>


<script>
    $(function () {
        if (typeof Vue !== 'function') return
        var js_site_from = "en";
        var lang = ["www", "us", "uk", "au", "in", "en", "ilen", 'iden', 'then', 'ca', 'se', 'eur'].indexOf(js_site_from) > -1 ? "en-us" : (js_site_from === "tw" ? "zh-tw" : js_site_from)
        if (js_site_from === 'mx') lang = 'es-419'
        if (js_site_from === 'il') lang = 'he'
        if (js_site_from === 'hk') lang = 'zh-cn'
        if (js_site_from === 'br') lang = 'pt-br'
        if (js_site_from === 'vn') lang = 'vi'
        if (js_site_from === 'cafr') lang = 'fr'
        if (js_site_from === 'sesv') lang = 'sv'


        // {
        //   memberId: "用户 member ID",
        //   ticketDate: "站点",
        //   timestamp: "时间戳",
        //   questionType: "点击类型",
        //   category: "一级分类内容",
        //   categoryId: "分类 ID",
        //   article: "文章标题内容",
        //   articleId: "文章 ID",
        //   PV_ID: 'pv id',
        // }

        // 点击 onlinehelp : 400
        // 点击分类 : 401
        // 点击二级分类 : 402
        // 点击 manul service: 403

        var publicData = {};

        var _message_index = 0;
        window.preRobot = new Vue({
            el: '#robot-container',
            data: {
                show: false,
                loadingSections: true,
                loadingArticles: false,
                sections: [],
                currentSectionId: '',
                currentArticleId: '',
                sectionIdWhenClickManualService: 'INIT_VALUE',
                articleIdWhenClickManualService: 'INIT_VALUE',
                top5sections: [],
                messages: [],
                customerType: '',
                customerInputPlaceholder: 'Type your message here',
                catchDomUpdate: false,
                clickHereText: "Register “ <a href='{0}' style='text-decoration: underline;' />here</a> ” and get {1} OFF !".replace('{0}', '/user/index').replace('{1}', 'US$3'),
                zenDeskComponent: {},
                _department: '',
            },
            created: function(){
                // 这个文件在online_help.html上面,所以要延迟一会儿才能拿到zenDeskComponent
                setTimeout(function(){
                    this.zenDeskComponent = window.zenDeskComponent;
                }.bind(this), 500)
            },
            updated:function(){
                if(!$('#robot-container').is(':hidden') && !this.catchDomUpdate) {
                    GB_analysis_bi_user.biClick({
                        questionType: 405
                    });
                }
                this.catchDomUpdate = true;
            },
            methods: {
                clickFeedback: function(index, messageIndex, feedIndex) {
                    if (feedIndex == 1) {
                        this.messages[messageIndex].top3Articles[index].isPraise = true;
                        this.messages[messageIndex].top3Articles[index].isTrample = false;
                    } else if (feedIndex == 2) {
                        this.messages[messageIndex].top3Articles[index].isPraise = false;
                    } else if (feedIndex == 3) {
                        this.messages[messageIndex].top3Articles[index].isPraise = false;
                        this.messages[messageIndex].top3Articles[index].isTrample = true;
                    } else if (feedIndex == 4) {
                        this.messages[messageIndex].top3Articles[index].isTrample = false;
                    }
                    // 反馈后给提示
                    this.messages.push({
                        type: 'feedback',
                        section: {},
                    })
                    // 改变的是数组内部的属性,这样之后DOM才会更新
                    this.messages[messageIndex].top3Articles = this.messages[messageIndex].top3Articles.slice();

                    this.scrollDOM();
                },
                getSections: function () {
                    if (this.sections.length) return
                    $.get('https://shein.zendesk.com/api/v2/help_center/' + lang + '/sections.json', function (all_sections) {
                        $.get('/getHotSection', function (hot_section) {
                            var data;
                            if (hot_section.info && hot_section.info.weight_order && hot_section.info.weight_order.length ) {
                                hot_section.info.weight_order.forEach(function (hs) {
                                    all_sections.sections.forEach(function (as) {
                                        if (hs.article_id == as.id) $.extend(hs, as);
                                    });
                                });
                                hot_section.info.weight_order.forEach(function(article) {
                                    if (article.clickNum == undefined) $.extend(article, {clickNum: "0"});
                                });
                                data = hot_section.info.weight_order;
                            } else {
                                data = all_sections.sections;
                            }
                            this.loadingSections = false
                            this.sections = data
                            this.top5sections = data.slice(0, 5)
                        }.bind(this));
                    }.bind(this))
                },
                getArticles: function (section) {
                    // 更新 publicData
                    $.extend(publicData, {
                        category: section.name,
                        categoryId: section.id
                    });
                    if(this.currentArticleId){
                        delete publicData.article;
                        delete publicData.articleId;
                    }
                    // 不改变当前主题的情况下,
                    // 都只算作一次点击
                    if (this.currentSectionId != section.id) {
                        this.currentSectionId = section.id;
                        var data_401 = $.extend(publicData, {
                            questionType: 401
                        });
                        GB_analysis_bi_user.biClick(data_401);
                    }

                    // 清除当前的 currentArticleId
                    this.currentArticleId = ''

                    // 如果之前已经点击过，
                    // 则滚动到之前的位置
                    if (this.messages.some(function (message) {
                        if (message.section.id === section.id) {

                            this.scrollDOM('[data-section-id="' + section.id + '"]')
                            return true
                        }
                    }, this)) return

                    var id = _message_index++
                    //   this.$refs.customerInput.disabled = false
                    this.customerInputPlaceholder = "Type your message here"
                    this.messages.push({
                        type: 'loadingArticles',
                        section: {},
                    })
                    this.scrollDOM()
                    $.get('https://shein.zendesk.com/api/v2/help_center/' + lang + '/sections/' + section.id + '/articles.json', function (section_articles) {
                        $.get('/getHotArticle', function (all_articles) {
                            var data;
                            if(all_articles.info.weight_order) {
                                section_articles.articles.forEach(function (sa) {
                                    all_articles.info.weight_order.forEach(function (aa) {
                                        if (sa.id == aa.article_id) {
                                            $.extend(sa, aa);
                                        }
                                    });
                                });
                                section_articles.articles.forEach(function (article) {
                                    if (article.clickNum == undefined) $.extend(article, {clickNum: "0"});
                                });
                                section_articles.articles.sort(function (a, b) {
                                    return b.clickNum - a.clickNum;
                                });
                            }
                            data = section_articles;
                            this.messages = this.messages.filter(function (message) {
                                return message.type !== 'loadingArticles'
                            })
                            this.messages.push({
                                type: 'articles',
                                id: id,
                                section: section,
                                allArticles: data.articles,
                                top3Articles: data.articles.slice(0, 3),
                                _show: true,
                            })
                            this.scrollDOM()
                        }.bind(this))
                    }.bind(this))

                },
                manualService: function () {
                    var self = this;
                    // 转人工的多次点击,不改变当前主题的情况下
                    // 只算作一次点击
                    // if (!this.currentSectionId || !zenDeskComponent.departmentStatusRetrieved) return
                    if (!zenDeskComponent.departmentStatusRetrieved) return
                    // 优先判断文章点击
                    if (this.currentArticleId && this.articleIdWhenClickManualService != this.currentArticleId) {
                        this.articleIdWhenClickManualService = this.currentArticleId;
                        var data_404 = $.extend(publicData,{
                            questionType: 404,
                            is_apr: zE.activate?1:0
                        });
                        GB_analysis_bi_user.biClick(data_404);
                    }else if (this.sectionIdWhenClickManualService != this.currentSectionId) {
                        this.sectionIdWhenClickManualService = this.currentSectionId
                        var data_403 = $.extend(publicData,{
                            questionType: 403,
                            is_apr: zE.activate?1:0
                        });
                        GB_analysis_bi_user.biClick(data_403);
                    }

                    //zendeskInfo();
                    //zE.activate();
                    setTimeout(function() {
                        zE(function() {
                            $zopim(function () {
                                var langsite = ['ar','au','de','es','fr','in','it','ru','uk','us','tw','en'];
                                // $zopim.livechat.removeTags.apply($zopim, langsite.map(function(lang) { return zenDeskComponent.generateTag(lang)}));
                                $zopim.livechat.addTags(zenDeskComponent.generateTag());

                                if(self._department == 'OTHERS'){
                                    self._department = 'Others'
                                }

                                $zopim.livechat.departments.setVisitorDepartment(self._department);
                                zE.activate({ hideOnClose: true })
                            });
                        });
                    }, 0)
                },
                showArticle: function (article, e) {
                    $.extend(publicData, {
                        article: article.title,
                        articleId: article.id
                    });

                    var $targets = $(e.target).closest('p.title').siblings('.content')
                    $targets.each(function () {
                        $(this).hasClass('has-open') ?
                            $(this).slideUp(100).removeClass('has-open') :
                            $(this).slideDown(100).addClass('has-open')
                    })
                    if ($targets.hasClass('has-open') && article.id != this.currentArticleId){
                        var data_402 = $.extend(publicData, {
                            questionType: 402,
                            is_apr: null
                        });
                        GB_analysis_bi_user.biClick(data_402);
                    }
                    this.currentArticleId = article.id
                },
                toggleSection: function (id) {
                    if (!id) return

                    this.messages.some(function (message, index) {
                        if (message.section.id === id) {
                            this.messages.splice(index, 1, $.extend(this.messages[index], {_show: !(!!message._show)}))
                            return true
                        }
                    }, this)

                },
                submitType: function () {
                    if (!this.customerType.length) return
                    this.focus()
                    var originalType = this.customerType
                    var id = _message_index++
                    this.messages.push({
                        type: 'customer-type',
                        content: this.customerType,
                        section: {},
                    })
                    this.customerType = ''
                    $.get('https://shein.zendesk.com/api/v2/help_center/search.json?locale=' + lang + '&query=' + encodeURIComponent(originalType) + '&per_page=9&origin=web_widget', function (data) {
                        this.messages = this.messages.filter(function (message) {
                            return message.type !== 'loadingArticles'
                        })
                        if (data.results.length) {
                            this.messages.push({
                                type: 'articles',
                                section: {
                                    name: originalType
                                },
                                id: id,
                                allArticles: data.results,
                                // top3Articles: data.results.slice(0, 3)
                                top3Articles: data.results.slice(0, 1)
                            })
                        } else {
                            // 当搜索结果为空时, 显示提示语
                            this.messages.push({
                                type: 'I DO NOT KNOW',
                                section: {},
                            })
                        }

                        this.scrollDOM()
                    }.bind(this))
                    /*this.scrollDOM(null, function() {
              var id = _message_index++
              this.messages.push({
                  type: 'loadingArticles',
                  section: {},
              })
              console.log('george-2:');
              this.scrollDOM()

          }.bind(this))*/
                },
                viewMoreArticles: function (index) {
                    // this.messages.some(function(message) {
                    //   if (message.id === id) {
                    //     message.top3Articles = message.allArticles
                    //     return true
                    //   }
                    // })
                    this.messages[index].top3Articles = this.messages[index].allArticles
                },
                viewMore: function () {
                    this.top5sections = this.sections;
                },
                scrollDOM: function (selector, callback) {
                    this.$nextTick(function () {
                        var scrollTop = selector ?
                            $(selector).position().top - $('.robot-body-container').scrollTop() - 80 :
                            $('.robot-body').height() - $('.robot-body-container').height()
                        $('.robot-body-container').animate({
                            scrollTop: scrollTop
                        }, 200, function () {
                            typeof callback === 'function' && callback()
                        })
                    })
                },
                focus: function() {
                    this.$refs.customerInput.focus()
                }
            }
        })
    });

    var clickedOnlineHelp = false

    function showPreRobot() {
        $.get('/judgeMemberBlacklist', function (data) {
            if (data.code === '0') {
                if (data.info.result === 0) {
                    preRobot.show = true
                    preRobot.getSections()
                    //  当前会话只计算一次点击
                    if (clickedOnlineHelp) return
                    clickedOnlineHelp = true
                    GB_analysis_bi_user.biClick({
                        questionType: 400
                    })
                }
            }
        });
    }
</script>

<!-- Start of sheinus Zendesk Widget script -->
<script type="text/javascript">
    window.zESettings = {
        webWidget: {
            contactForm: {
                tags:[]
            },
            offset: {
                horizontal: '365px',
                vertical: '0px'
            }
        }
    };
    var zdUtils = (function(){
        var __CurrentMainDomain__ = (function () {
            var hostnameArray = location.hostname.split('.');
            return "." + hostnameArray.slice(-2).join('.');
        })();
        var _setCookie = function(name, val, expires, domain) {
            var text = String(encodeURIComponent(val));
            var  date = new Date();
            date.setTime(date.getTime() + Number(expires)*1000);
            text += '; expires=' + date.toUTCString();
            // domain
            text += '; path=/';
            if (typeof (domain) != "undefined" && domain != "") {
                text += '; domain='+__CurrentMainDomain__;
            }
            document.cookie = name + '=' + text;
        };
        var _getCookie = function (objName){
            var arrStr = document.cookie.split("; ");
            for(var i = 0;i < arrStr.length;i ++){
                var temp = arrStr[i].split("=");
                if(temp[0] == objName) return unescape(temp[1]);
            }
        };
        var _get = function(url, fn){
            var obj = new XMLHttpRequest();
            obj.open('GET', url, true);
            obj.setRequestHeader('X-Requested-With','XMLHttpRequest');
            obj.onreadystatechange = function() {
                if (obj.readyState == 4 && obj.status == 200) {
                    fn.call(this, obj.responseText);
                }
            };
            obj.send();
        };

        return {
            setCookie: _setCookie,
            getCookie: _getCookie,
            Get: _get
        };
    })();

    var zenDeskComponents = function(options) {
        options = options || {};
        this.initializeVariables();
        //this.initialization();
    };
    zenDeskComponents.Vars = {
        _department: '',
        _departments: {
            en: 'English',
            us: 'US',
            au: 'English',
            ar: 'Arabic',
            fr: 'French',
            es: 'Spanish',
            mx: 'Spanish',
            ru: 'Russian',
            it: 'Italian',
            de: 'German',
            tw: 'English',
            uk: 'UK',
            in: 'IN',
            ar6c: '中东EN',
            other: 'Others'
        },
        locales: {
            en: 'en-US',
            us: 'en-US',
            au: 'en-US',
            ar: 'ar',
            es: 'es',
            mx: 'es',
            fr: 'fr',
            de: 'de',
            ru: 'ru',
            it: 'it',
            tw: 'zh-tw',
            hk: 'zh-tw',
            uk: 'en-US',
            in: 'en-US',
            vn: 'vi',
            th: 'th',
            then: 'en-US',
            br: 'pt-br',
            nl: 'nl',
            ilen: 'en-US',
            il: 'he',
            id: 'id',
            iden: 'en-US',
            ca: 'en-US',
            cafr: 'fr',
            se: 'en-US',
            sesv: 'sv',
            eur: 'en-US'
        },
        dep_ar: ['United Arab Emirates', 'Saudi Arabia', 'Kuwait', 'Bahrain', 'Oman', 'Qatar'],
        dep_fr: ['France', 'Reunion', 'Martinique', 'Guadeloupe', 'French Guiana', 'French Polynesia', 'New Caledonia', 'Mayotte', 'Morocco', 'Belgium'],
        dep_es: ['Spain', 'Mexico', 'Chile', 'Colombia', 'Peru', 'Argentina', 'Ecuador', 'Bolivia', 'Paraguay', 'Costa Rica', 'El Salvador', 'Panama', 'Honduras', 'Nicaragua', 'Cuba', 'Dominica', 'Puerto Rico', 'Venezuela'],
        dep_de: ['Germany', 'Austria', 'Liechtenstein'],
        dep_it: ['Italy', 'San Marino', 'Vatican City State'],
        dep_ru: ['Russia', 'Kazakhstan', 'Belarus', 'Uzbekistan', 'Azerbaijan', 'Latvia', 'Estonia', 'Russian Federation'],
        dep_uk: ['United Kingdom'],
        isChatDeptAvailable: false,
        member_level: '',
        country_tag: 'others',
        departmentStatusRetrieved: false
    };

    zenDeskComponents.prototype = {
        constructor: zenDeskComponents,
        initializeVariables: function() {
            var vals = zenDeskComponents.Vars;
            for (var name in vals) {
                if (vals.hasOwnProperty(name)) {
                    this[name] = vals[name];
                }
            }
        },
        loadZenDesk: function() {
            /*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","shein.zendesk.com");
            /*]]>*/
        },
        setIdentity: function() {
            var url = '/user/auth/getUserInfo';
            GB_SHEIN_check_login_promise && GB_SHEIN_check_login_promise.then(function(data) {
                if(data) {
                    if(data.username != null) {
                        zE.identify({ name: data.username, email: data.email })
                    }
                }else{
                    zdUtils.Get(url, function(data) {
                        data = JSON.parse(data);
                        if (data.username != null) {
                            zE.identify({ name: data.username, email: data.email })
                        }
                    });
                }
            })
        },
        getMemberLevel: function() {
            var level = zdUtils.getCookie('member_level'),
                self = this;
            if(level) {
                self.member_level = decodeURIComponent(level);
            }else{
                var url = '/getMemberLevel' + window.location.search;

                zdUtils.Get(url, function(data) {
                    data = JSON.parse(data);
                    if (data.code == 0 && data.info && data.info.level) {
                        self.member_level = data.info.level.level_name;
                        zdUtils.setCookie('member_level', encodeURIComponent(self.member_level), 12 * 60 * 60, true);
                    }
                });
            }
        },
        getMemberCountry: function() {
            var url = '/getMemberCountry' + window.location.search,
                self = this;

            zdUtils.Get(url, function(data) {
                data = JSON.parse(data);
                if (data.code == 0) {
                    if (data._type === 'registered') {
                        self.country_tag = data.info.result;
                    }else if(data._type === 'non-registered') {
                        try{
                            self.country_tag = data.info.location.country_name;
                        }catch(e){}
                    }
                    self.country_tag = self.country_tag.replace(/ /g, '_');
                    self.getChatDept(self.country_tag)
                    zdUtils.setCookie('country_tag_outdated', encodeURIComponent(self.country_tag), 12 * 60 * 60, true);
                } else {
                    self.set_zE_tags();
                }
            });
        },
        getChatDept: function (country) {
            var invoker_url = '/user/support/getChatDept?country=' + country,
                self = this;

            zdUtils.Get(invoker_url, function(data) {
                var data = JSON.parse(data)
                if (data.dept) {
                    self._department = data.dept
                    self.isChatDeptAvailable = true
                }
                self.set_zE_tags();
            });
        },
        generateTag: function(lang) {
            var lan = '', user_lan= '', site= '', tags='', arg_lang = lang || 'en';
            switch(arg_lang){
                case 'ar':
                    site = 'site_ar';lan = 'lan_ar';user_lan = 'user_ar';
                    break;
                case 'mx':
                    site = 'site_mx';lan = 'lan_es';user_lan = 'user_es';
                    break;
                case 'de':
                    site = 'site_de';lan = 'lan_de';user_lan = 'user_de';
                    break;
                case 'es':
                    site = 'site_es';lan = 'lan_es';user_lan = 'user_es';
                    break;
                case 'fr':
                    site = 'site_fr';lan = 'lan_fr';user_lan = 'user_fr';
                    break;
                case 'it':
                    site = 'site_it';lan = 'lan_it';user_lan = 'user_it';
                    break;
                case 'ru':
                    site = 'site_ru';lan = 'lan_ru';user_lan = 'user_ru';
                    break;
                case 'tw':
                    site = 'site_tw';lan = 'lan_zh-tw';user_lan = 'user_zh-tw';
                    break;
                case 'en':
                    site = 'site_www';lan = 'lan_en';user_lan = 'user_en';
                    break;
                case 'th':
                    site = 'site_th';lan = 'lan_th';user_lan = 'user_th';
                    break;
                case 'id':
                    site = 'site_id';lan = 'lan_id';user_lan = 'user_id';
                    break;
                case 'nl':
                    site = 'site_nl';lan = 'lan_nl';user_lan = 'user_nl';
                    break;
                case 'hk':
                    site = 'site_hk';lan = 'lan_zh-tw';user_lan = 'user_zh-tw';
                    break;
                case 'tr':
                    site = 'site_tr';lan = 'lan_tr';user_lan = 'user_tr';
                    break;
                case 'vn':
                    site = 'site_vn';lan = 'lan_vi';user_lan = 'user_vi';
                    break;
                case 'br':
                    site = 'site_br';lan = 'lan_pt-br';user_lan = 'user_pt-br';
                    break;
                default:
                    //www(en) au/il
                    site = 'site_'+'en';lan = 'lan_en';user_lan = 'user_en';
            }
            tags = site+','+lan+','+user_lan+','+this.member_level+','+this.country_tag;
            return tags;
        },
        set_zE_tags: function() {
            var self = this;
            window.zESettings.webWidget.contactForm.tags = self.generateTag();
            self.loadZenDesk();
            // 在自定义配置后引入第三方代码保证配置生效且保证ze对象可使用
            self.zEController();
        },
        initChat: function() {
            var self = this;
            zE(function() {
                zE.hide();
                $zopim(function() {
                    $zopim.livechat.setOnConnected(function() {
                        self.departmentStatusRetrieved = true;
                        self.setIdentity();
                        zE.setLocale(self.locales['en']);

                        if (self.isChatDeptAvailable) {
                            var _department = self._department
                        } else {
                            var _department = self._departments['en'],
                                currentCountry = self.country_tag.split('_').join(' ');
                            // 把中东6国从en部门划分到ar
                            if (self.dep_ar.indexOf(currentCountry) > -1) {
                                _department = self._departments['ar'];
                            } else if (currentCountry == 'United States') {
                                _department = self._departments['us'];
                            } else if (currentCountry == 'India') {
                                _department = self._departments['in'];
                            } else if (self.dep_de.indexOf(currentCountry) > -1) {
                                _department = self._departments['de'];
                            } else if (self.dep_es.indexOf(currentCountry) > -1) {
                                _department = self._departments['es'];
                            } else if (self.dep_fr.indexOf(currentCountry) > -1) {
                                _department = self._departments['fr'];
                            } else if (self.dep_it.indexOf(currentCountry) > -1) {
                                _department = self._departments['it'];
                            } else if (self.dep_ru.indexOf(currentCountry) > -1) {
                                _department = self._departments['ru'];
                            } else if (self.dep_uk.indexOf(currentCountry) > -1) {
                                _department = self._departments['uk'];
                            } else {
                                _department = self._departments['other'];
                            }
                        }

                        // 判断状态
                        var department_status = $zopim.livechat.departments.getDepartment(_department);

                        // zendesk 其他部门 Others 和 OTHERS 不能兼容
                        if (typeof department_status == 'undefined') {
                            department_status = $zopim.livechat.departments.getDepartment(_department == 'Others' ? 'OTHERS' : 'Others')
                        }

                        if (department_status.status != 'online') {
                            self.offLine();
                        } else {
                            self.onLine();
                        }
                        // $zopim.livechat.departments.setVisitorDepartment(_department);
                        preRobot._department = _department

                    });
                });
            });
        },
        offLine: function() {
            // Set the account status to 'offline'
            $zopim.livechat.setStatus('offline');
            $('.j-online-help').css('color', '#999');
            if(support){
                support.offLine = true;
            }
        },
        onLine: function() {
            // The department is Online (At least one agent in that dept is Online)
            $zopim.livechat.setStatus('online');
            // Hide the Drop-down list option in the Pre-Chat Form to select the Department
            $zopim.livechat.departments.filter('');
            // Automatically set the Department
        },
        leaveMessageText: function() {
            zE(function() {
                $zopim(function() {
                    $zopim.livechat.setOnConnected(function() {
                        // 离线留言弹窗
                        var leaveMessageSubmitEl = $('#webWidget').contents().find('.src-component-submitTicket-SubmitTicketForm-form'),
                            insertEl_1 = '<div class="wwtk-submit-ing" style="position: relative;text-align: center;margin-top: 5px;font-weight: 600;color: #c24036;">(' + 'We will reply in 24 hours.' + ')</div>';

                        leaveMessageSubmitEl && !leaveMessageSubmitEl.find('.wwtk-submit-ing')[0] && leaveMessageSubmitEl.find('header').append(insertEl_1);
                        // 监测第三方代码动态生成的离线留言成功弹窗
                        var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
                        if(MutationObserver){
                            var observer = new MutationObserver(function (mutations, observer) {
                                var leaveMessageSuccEl = $('#webWidget').contents().find('.src-component-submitTicket-SubmitTicket-notify'),
                                    guestEmail = $('#webWidget').contents().find('.src-component-submitTicket-SubmitTicketForm-form').find('input[name="email"]').val(),
                                    emailVal = guestEmail || getCookie('userinfo[email]'),
                                    text = 'Any updates will be shown in your email {0} in 24 hours.'.replace('{0}', emailVal ? emailVal : ''),
                                    insertEl_2 = '<div class="wwtk-submit-succ" style="font-weight: 700;color: #c24036;opacity: .8;padding: 0 30px;">' + text + '</div>';
                                if (mutations[0].addedNodes.length == 1) {
                                    leaveMessageSuccEl && !leaveMessageSuccEl.find('.wwtk-submit-succ')[0] && leaveMessageSuccEl.find('footer').before(insertEl_2);
                                }
                            });
                            var article = $('#webWidget').contents().find('.src-component-submitTicket-SubmitTicketForm-form').parent()[0];
                            var options = {
                                'childList': true
                            };
                            observer.observe && article && observer.observe(article, options);
                        }
                    });
                });
            });
        },
        zEController: function() {
            // 使用zE操作
            this.initChat();
            this.leaveMessageText();
        },
        initialization: function() {
            this.getMemberLevel();
            this.getMemberCountry();
        }
    };
    var zenDeskComponent = {};
    $(document).ready(function(){
        zenDeskComponent =  new zenDeskComponents();
        zenDeskComponent.initialization();
    })
</script>






<div class="welcome-privacy j-welcome-privacy" v-cloak>
    <modal-vue class="welocme-modal" :show="welcome"
               @cancel="hideWelcome"
               @ok="hideWelcome"
               :force="true">
        <div slot="title">Welcome!</div>
        <div class="c-welcome">

            <p>We use cookies to give you the best shopping experience. If you continue to use our services or create a new account, we will assume that you agree to our <a href="javascript:;" @click="toContent">Privacy & Cookie Policy</a>.</p>

            <div class="accept-btn">
                <button class="she-btn-black" @click="acceptBtn">I Accept</button>
            </div>
        </div>
        <div slot="footer"></div>
    </modal-vue>
    <modal-vue class="privicy-modal" :show="!!showContent"
               @cancel="hideContent"
               @ok="hideContent"
               :force="true"
               :large="true">
        <div slot="title"></div>
        <div class="c-privacy">
            <h3> Privacy Policy </h3>
            <div class="privacy-con">
                <div v-html="privacyContent"></div>
            </div>
            <div class="operate-con">
                <button class="she-btn-black" @click="confirmBtn">Confirm</button>
            </div>
        </div>
        <div slot="footer"></div>
    </modal-vue>
</div>
<script>
    var GB_GDPR_ANALYSIS = {
        GDPRregister: function(action,label){
            if(typeof(ga) == 'function'){
                ga('shein.send', {
                    hitType: 'event',
                    eventCategory: 'GDPR-Register',
                    eventAction: action,
                    eventLabel: label
                })
            }
        },
        GDPRsignin: function(action,label){
            if(typeof(ga) == 'function'){
                ga('shein.send', {
                    hitType: 'event',
                    eventCategory: 'GDPR-SignIn',
                    eventAction: action,
                    eventLabel: label
                })
            }
        }
    }

    var welcomePrivacyVue = new Vue({
        el: '.j-welcome-privacy',
        data: {
            welcome: false,
            showContent: false,
            privacyContent: "",
        },
        mounted: function(){
            var self = this;
            var ippop_up = SHEIN_W.getCookie('no_pop_up_en') == 1 || !(location.href.indexOf('ref=www') > -1 && location.href.indexOf('ret=en') > -1) //ip弹窗不显示
            var isLogin = SHEIN_W.getCookie('memberId');
            if(isLogin || !ippop_up || SHEIN_W.getCookie('keepPrivacy') == 1 || SHEIN_W.getCookie('cancelPrivacy') == 1){
                self.welcome = false;
            }else{
                self.welcome = true;
                if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                    GB_GDPR_ANALYSIS.GDPRregister('AutoPopUps','welcome');
                }

            }
            $(function(){
                $.get('/privacyContent',{article_id: 282}, function(res){
                    if(res.code == 0 && res.info && res.info.article){
                        self.privacyContent = res.info.article.content && res.info.article.content.replace(/http:/g,"");
                    }
                })
            })

        },
        methods: {
            hideWelcome: function(){
                SHEIN_W.setCookie('cancelPrivacy', '1', 1 * 60 * 60) //1小时内不在弹出
                this.welcome = false;
                if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                    GB_GDPR_ANALYSIS.GDPRregister('ClosePopUps','welcome');
                }
            },
            hideContent: function(){
                SHEIN_W.setCookie('cancelPrivacy', '1', 1 * 60 * 60) //1小时内不在弹出
                this.showContent = false;
            },
            toContent: function(){
                this.showContent = "fromWelcome";
                this.welcome = false;
                if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                    GB_GDPR_ANALYSIS.GDPRregister('ClickPrivacyPolicy','welcome');
                }
            },
            acceptBtn: function(){
                SHEIN_W.setCookie('keepPrivacy','1', 365 * 24 * 60 * 60) //同意一年内不再弹
                this.welcome = false;
                if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                    GB_GDPR_ANALYSIS.GDPRregister('AgreePrivacyPolicy','welcome');
                }
                if($('.j-privacy-check-wrap').length){
                    $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                    $('.j-privacy-check-wrap').hide();
                }
                if($('.j-privacy-check-subscrib').length){
                    $('.j-privacy-check-subscrib').hide();
                    $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                    $('.j-footer-privacy-tip').hide();
                }
                if($('.j-privacy-check-quickregister').length){
                    $('.j-privacy-check-quickregister').hide();
                    $('.j-privacy-check-quickregister .j-privacy-checkbox').prop('checked','checked');
                    $('.j-quickregister-privacy-tip').hide();
                }
            },
            confirmBtn: function(){
                SHEIN_W.setCookie('keepPrivacy','1', 365 * 24 * 60 * 60) //同意一年内不再弹
                if(welcomePrivacyVue.showContent == "fromWelcome"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','welcome');
                    }
                    if($('.j-accept-privacy-ip').length){//ip 弹窗
                        $('.j-privacy-policy-ip').hide()
                        $('.j-accept-privacy-ip').addClass('disabled').attr('disabled',true)
                    }
                    if($('.j-privacy-check-wrap').length){//注册、联盟注册
                        $('.j-privacy-check-wrap').hide();
                        $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                        $('.j-privacy-check-wrap .error-tip').hide();
                    }
                    if($('.j-privacy-check-subscrib').length){//订阅
                        $('.j-privacy-check-subscrib').hide();
                        $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                        $('.j-footer-privacy-tip').hide();
                    }
                    if($('.j-privacy-check-quickregister').length){//快速注册
                        $('.j-privacy-check-quickregister').hide();
                        $('.j-privacy-check-quickregister .j-privacy-checkbox').prop('checked','checked');
                        $('.j-quickregister-privacy-tip').hide();
                    }
                }else if(welcomePrivacyVue.showContent == "fromQuickRegister"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','快速注册');
                    }
                    if($('.j-privacy-check-quickregister').length){//快速注册
                        $('.j-privacy-check-quickregister .j-privacy-checkbox').prop('checked','checked');
                        $('.j-quickregister-privacy-tip').hide();
                    }
                    if($('.j-privacy-check-wrap').length){
                        $('.j-privacy-check-wrap').hide();
                        $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                        $('.j-privacy-check-wrap .error-tip').hide();
                    }
                    if($('.j-privacy-check-subscrib').length){
                        $('.j-privacy-check-subscrib').hide();
                        $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                        $('.j-footer-privacy-tip').hide();
                    }
                }else if(welcomePrivacyVue.showContent == "fromFooterSubscribe"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','email');
                    }
                    if($('.j-privacy-check-subscrib').length){
                        $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                        $('.j-footer-privacy-tip').hide();
                    }
                    if($('.j-privacy-check-quickregister').length){
                        $('.j-privacy-check-quickregister').hide();
                        $('.j-privacy-check-quickregister .j-privacy-checkbox').prop('checked','checked');
                        $('.j-quickregister-privacy-tip').hide();
                    }
                    if($('.j-privacy-check-wrap').length){
                        $('.j-privacy-check-wrap').hide();
                        $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                        $('.j-privacy-check-wrap .error-tip').hide();
                    }
                }else if(welcomePrivacyVue.showContent == "fromAffiliate"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','affiliate-register');
                    }
                    if($('.j-privacy-check-wrap').length){//注册、联盟注册
                        $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                        $('.j-privacy-check-wrap .error-tip').hide();
                    }
                    if($('.j-privacy-check-subscrib').length){//订阅
                        $('.j-privacy-check-subscrib').hide();
                        $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                        $('.j-footer-privacy-tip').hide();
                    }
                    if($('.j-privacy-check-quickregister').length){//快速注册
                        $('.j-privacy-check-quickregister').hide();
                        $('.j-privacy-check-quickregister .j-privacy-checkbox').prop('checked','checked');
                        $('.j-quickregister-privacy-tip').hide();
                    }
                }else if(welcomePrivacyVue.showContent == "fromLogin"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','login');
                    }
                    if($('.j-privacy-check-wrap').length){//注册、联盟注册
                        $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                        $('.j-privacy-check-wrap .error-tip').hide();
                    }
                    if($('.j-privacy-check-subscrib').length){//订阅
                        $('.j-privacy-check-subscrib').hide();
                        $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                        $('.j-footer-privacy-tip').hide();
                    }
                }else if(welcomePrivacyVue.showContent == "fromLoginthiird"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','第三方登录');
                    }
                }else if(welcomePrivacyVue.showContent == "formIPpopup"){
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('Confirm','site change');
                    }
                    if($('.j-accept-privacy-ip').length){//ip 弹窗
                        $('.j-accept-privacy-ip').addClass('disabled').attr('disabled',true)
                    }
                    if($('.j-privacy-check-wrap').length){
                        $('.j-privacy-check-wrap').hide();
                        $('.j-privacy-check-wrap .j-privacy-checkbox').prop('checked','checked');
                        $('.j-privacy-check-wrap .error-tip').hide();
                    }
                    if($('.j-privacy-check-subscrib').length){
                        $('.j-privacy-check-subscrib').hide();
                        $('.j-privacy-check-subscrib .j-privacy-checkbox').prop('checked','checked');
                        $('.j-footer-privacy-tip').hide();
                    }
                    if($('.j-privacy-check-quickregister').length){
                        $('.j-privacy-check-quickregister').hide();
                        $('.j-privacy-check-quickregister .j-privacy-checkbox').prop('checked','checked');
                        $('.j-quickregister-privacy-tip').hide();
                    }
                }

                welcomePrivacyVue.showContent = "";
            }
        }
    })
</script>




<!-- Facebook pixel  -->
<!-- 基础代码 -->
<script>
    ! function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '992946534136988');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=992946534136988&ev=PageView&noscript=1"/>
</noscript>
<script>
    window._fbq = window._fbq || [];

    window.fbAsyncInit = function () {
        FB.init({
            appId : '312563225523989',//正式
            // appId : '155891918364184',//测试
            // appId : '459956131091711',//测试
            status: true,
            cookie: true,
            xfbml: true,
            oauth: true,
            version: 'v2.8'
        });
    };



    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    window.doFbq = function (action, params) {
        ! function () {
            if (typeof Object.assign != 'function') {
                Object.assign = function (target) {
                    'use strict';
                    if (target == null) {
                        throw new TypeError('Cannot convert undefined or null to object');
                    }

                    target = Object(target);
                    for (var index = 1; index < arguments.length; index++) {
                        var source = arguments[index];
                        if (source != null) {
                            for (var key in source) {
                                if (Object.prototype.hasOwnProperty.call(source, key)) {
                                    target[key] = source[key];
                                }
                            }
                        }
                    }
                    return target;
                };
            }
            if (typeof fbq !== 'undefined') {
                var _form = Object.assign({}, {
                    content_type: 'product', //直接上报此文本
                    value: 1.00, //固定上报此价格
                    currency: 'USD' //固定上报此币种
                }, params)

                if(typeof fbq.init !== 'function') {
                    var _timeIndex = 0;
                    var _timeId = setInterval(function() {
                        _timeIndex++;
                        if(typeof fbq.init == 'function' || _timeIndex>5) {
                            fbq('track', action, _form);
                            clearInterval(_timeId);
                        }
                    }, 1000);
                } else {
                    fbq('track', action, _form);
                }

            }
        }();
    }
</script>


<script>
    ;!function(){
        if(typeof SHEIN_W !== 'undefined') {
            var AdmitadUid = SHEIN_W.getQueryString('admitad_uid')
            if(AdmitadUid) {
                // admitad于mopubi互斥
                SHEIN_W.setCookie('admitad_uid',AdmitadUid,3600*24*45)
                SHEIN_W.setCookie('utm_oid', null, -1);
                SHEIN_W.setCookie('utm_rqid', null, -1);
            }
        }
    }()
</script>

<script type="text/javascript">
    //购物车初始化
    $( function(){
        cart_module.initialize();
    })


    $(function(){
        var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
        var fIEVersion = reIE.exec(navigator.userAgent)
        if (fIEVersion && fIEVersion[1] <= 10) {
            $('img').removeAttr('height').removeAttr('width')
            $('#j-range-brower').removeClass('rw-anim-opacity0')
        }
        if (fIEVersion && fIEVersion[1] <= 9) {
            $('.j-goodsli').removeClass('rw-anim-opacity0')
        }
    })
    var __CurrentMainDomain__ = (function () {
        var hostnameArray = location.hostname.split('.');
        return "." + hostnameArray.slice(-2).join('.');
    })();
    SHEIN_W.setCookie('default_currency', 'USD', 60 * 60 * 24 * 7)
</script>


<!-- @login-suc-callback 登录成功回调 -->


<script type="text/x-template" id="vue-login-temp" data-type="login">
    <div>
        <div :class="['j-login-con', loginPage ? 'col-xs-3 col-xs-offset-2' : 'col-xs-4 col-xs-offset-1']" :data-login-source="loginType">
            <div class="sign-in j-sign-in">
                <h4>Sign In</h4>
                <p class="login-error">{{loginError}}</p>
                <form>
                    <input-vue ref="loginEmail"
                               :name="'email'"
                               v-model.trim="loginForm.email"
                               :type="'email'"
                               :title="'Email Address:'"
                               :errorTxt="loginForm.emailErrorTxt"
                               @keyup-enter="login">
                    </input-vue>
                    <input-vue ref="loginPwd"
                               :name="'password'"
                               v-model="loginForm.password"
                               :type="'password'"
                               :title="'Password:'"
                               @keyup-enter="login">
                    </input-vue>
                </form>
                <div class="g-recaptcha" data-sitekey="6LcoBR4UAAAAAIi5xU3U_q37C3nFaSckeMaT-P5j" data-callback="shein_verified_callback" data-expired-callback="shein_expired_callback" v-show="showRecaptcha"></div>
                <p class="g-recaptcha-error" v-show="showRecaptchaError">Verification has failed. Please try again.</p>
                <button class="she-btn-black she-btn-l she-btn-block"  @click.prevent="login" v-show="!status.logining">Sign In</button>
                <button class="she-btn-black she-btn-l she-btn-block" disabled v-show="status.logining">
                    <div class="la-ball-pulse la-ball-pulse-white"><div></div><div></div><div></div></div>
                </button>
                <div class="forgot-psd">
                    <a href="javascript:;" class="j-a-forgot-psd" @click='showForPassword'>Forgot your password?</a>
                </div>

                <!-- google登录 -->

                <div class="sign-in-divide">
                    <span>Or</span>
                </div>
                <button class="she-btn-google-red she-btn-l she-btn-block j-btn-google" ref="googleLogin" style="text-transform:capitalize">

                    <i class="iconfont icon-google"></i>

                    Sign in With Google

                </button>


                <!-- fb登录 -->
                <div class="sign-in-divide">
                    <span>Or</span>
                </div>


                <button class="she-btn-blue she-btn-l she-btn-block j-btn-facebook" @click='facebookLogin' style="text-transform:capitalize">

                    <i class="iconfont icon-facebook"></i>

                    Sign in With Facebook

                </button>


                <p class="third-privacy-tip j-third-privacy-tip" v-if="isKeepPrivacy">By clicking this button, you agree to our <a href="javascript:;" @click="thirdPrivacyShow">Privacy Policy</a>.</p>


                <div class="sign-in-discountinfo">
                    <p><strong>US$3 off</strong> for the first order</p>
                    <p>Review & earn extra <strong>100</strong> points</p>
                </div>
            </div>
        </div>

        <div class="col-xs-1 sign-in-rightborder"></div>

        <div class="col-xs-offset-1" :class="loginPage ? 'col-xs-3' : 'col-xs-4'">
            <div class="sign-in j-newto-shein">
                <h4>New to SheIn</h4>
                <form>
                    <input-vue ref="signupEmail"
                               :name="'email'"
                               v-model.trim="signupForm.email"
                               :type="'email'"
                               :title="'Email Address:'"
                               :errorTxt="signupForm.emailErrorTxt"
                               :emailcorrect="true"
                               @keyup-enter="signup">
                    </input-vue>
                    <input-vue ref="signupPwd"
                               :name="'password'"
                               v-model="signupForm.password"
                               :type="'password'"
                               :title="'Password:'"
                               :newpassState="'true'"
                               @focus="foucsCheckexg"
                               @keyup-space="delayCheckexg('password')"
                               @keyup-enter="signup">
                    </input-vue>
                    <div class="normal-info" :class="{'she-hide':safety.hideAll}">
                        <p>Your Password must contain</p>
                        <div :class="{'normal-red' :safety.showAll}">
                            <p :class="{'tips-greenp':safety.showFir}">· 8 characters minimum</p>
                            <p :class="{'tips-greenp':safety.showSec}">· At least one letter</p>
                            <p :class="{'tips-greenp':safety.showThi}">· At least one number</p>
                        </div>
                    </div>
                    <input-vue ref="signupCfPwd"
                               :name="'cfPassword'"
                               v-model="signupForm.confrimPassword"
                               :type="'password'"
                               :newpassState="'true'"
                               :conpassState="'true'"
                               :inputmar="'true'"
                               :title="'Confirm Password:'"
                               :errorTxt="signupForm.confrimPasswordErrorTxt"
                               @keyup-space="filterSpace('confrimPassword')"
                               @keyup-enter="signup">
                    </input-vue>

                    <div class="c-input">
                        <div class="input-title">Style Preference</div>
                        <div class="plus-info">
                            <div class="prefer-item" v-for="item in preferOptions">
                                <label class = "she-checkbox">
                                    <input type="checkbox" v-bind:name="item.id" v-bind:value="item.name">
                                    <i></i>
                                </label>
                                {{item.name}}
                            </div>
                        </div>
                    </div>




                    <div class="c-privacy-check j-privacy-check-wrap" v-if="isKeepPrivacy">
                        <div class="privacy-item">
                            <div><label class="she-checkbox"><input type="checkbox" class="j-privacy-checkbox" name="privacy"/> <i></i></label></div>
                            <div>I agree to the <a href="javascript:;" @click="privacyShow">Privacy Policy.</a></div>
                        </div>
                        <div class="privacy-item">
                            <div><label class="she-checkbox"><input type="checkbox" class="j-subscrib-checkbox" name="subscrib"> <i></i></label></div>
                            <div>I'd like to receive exclusive offers and latest news by email.</div>
                        </div>
                        <p class="error-tip" v-show="privacyError">Please agree to our Privacy Policy</p>
                    </div>


                </form>
                <button class="she-btn-black she-btn-l she-btn-block" @click.prevent='signup' v-show="!status.signuping">Register</button>
                <button class="she-btn-black she-btn-l she-btn-block" disabled v-show="status.signuping">
                    <div class="la-ball-pulse la-ball-pulse-white"><div></div><div></div><div></div></div>
                </button>
                <div class="reg-why">
                    <a target="_blank" href="https://www.shein.com/Why-Register-a-369.html">

                        Why Register?

                    </a>(Get <em>US$3 off</em> coupon and <a target="_blank" href="https://www.shein.com/Why-Register-a-369.html"><em>more</em></a>)
                </div>
            </div>
        </div>



        <modal-vue :show="showemailbox"
                   :twobtn="false"
                   :oktext="'Submit'"
                   @cancel="showemailbox=false; mbErrorTxt=''"
                   @ok='bindingMail'
        >
            <div slot="title">
                <h2>MAILBOX BINDING</h2>
                <p class="bind-mailbox">Your account needs an email binding</p>
            </div>
            <div class="c-input">
                <input-vue v-model.trim="mailBinding"
                           ref="fbEmail"
                           :type="'email'"
                           @keyup-enter="bindingMail">
                </input-vue>
            </div>
        </modal-vue>

    </div>
</script>

<script>
    var GB_Login_analysis_obj = {
        _clickStatus: {
            plus: false,
        },
        clickLoading: function (type) {
            var self = this
            if(self._clickStatus[type]) {
                return true
            } else {
                self._clickStatus[type] = true
                setTimeout(function() {
                    self._clickStatus[type] = false
                }, 300)
                return false
            }
        },
        loginGAEventSend: function(json) {
            var statusLabel = json.value ? 'Success' : 'Fail-';
            var _msg = '';
            if (json && json.failMsg) {
                _msg = json.val ? '' : json.failMsg
            }
            var para = {
                eventCategory: '登录注册页',
                eventAction: json.action||this.getEventAction(json),
                eventValue: json.value,
                eventLabel: statusLabel + _msg
            }
            if(json.hasLabel){
                para.eventLabel = json.eventLabel||this.getEventLabel(json.loginType);
            }
            ga('shein.send', 'event', para);
            if(json.type == 'Sign'){
                sa('send',{'activity_name':'click_signin','activity_param':''});
            }else if(json.type == 'Register'){
                var preferences = '';
                if(json.prepferences && json.prepferences.length){
                    for(var i = 0;i<json.prepferences.length;i++){
                        preferences += json.prepferences[i]+',';
                    }
                    if(preferences.length>0){preferences = preferences.substring(0,preferences.length-1)}
                }
                sa('send',{'activity_name':'click_register','activity_param':{style_preference:preferences}});
            }

        },
        getEventAction:function(json){
            var type = json.type;
            var el = $(".j-login-con");
            var source = json.source||el.attr("data-login-source");
            var cate = ""
            if(type=="Sign"){
                cate+="Sign In"
            }else if(type=="Register"){
                cate+="Register"
            }
            if(source=="loginPage"){
                cate+=" - Login"
            }else if(source=="other"){
                cate+=" - Other"
            }else if(source=="checkout"){
                cate+=" - Checkout"
            }
            return cate;
        },
        SelectPlusSize: function(val) {
            if(typeof(ga) == 'function') {
                ga('shein.send',{
                    hitType: 'event',
                    eventCategory: '登录注册页',
                    eventAction: 'SelectPlusSize',
                    eventLabel: val
                });
            }
        },
        getEventLabel:function(loginType){
            var el = $(".j-login-con");
            var source = el.attr("data-login-source");
            var cate = ""

            if(source=="loginPage"){
                cate=" - login"
            }else if(source=="other"){
                cate=" - other"
            }else if(source=="checkout"){
                cate=" - checkout"
            }
            return loginType+cate;
        },
        bindEvent: function () {
            var self = this
            $(document).on("click",".j-login-con",function(e) {
                var $target = $(e.target);
                var para=null;
                if($target.hasClass('j-a-forgot-psd')) {
                    para ={
                        eventCategory:"登录注册页",
                        eventAction:"ClickForgotYourPassword"
                    }
                }else if($target.closest(".j-btn-facebook").length){
                    para = {
                        eventCategory: '登录注册页',
                        eventAction: "ClickFacebook",
                        eventLabel: GB_Login_analysis_obj.getEventLabel("Facebook")
                    }

                }else if($target.closest(".j-btn-google").length){
                    para = {
                        eventCategory: '登录注册页',
                        eventAction: "ClickGoogle",
                        eventLabel: GB_Login_analysis_obj.getEventLabel("Google")
                    }
                }else if($target.closest(".j-btn-vk").length){
                    para = {
                        eventCategory: '登录注册页',
                        eventAction: "ClickVK",
                        eventLabel: GB_Login_analysis_obj.getEventLabel("VK")
                    }
                }
                if(para!=null){
                    ga('shein.send', 'event', para);
                }
            }).on("click",".j-plus-size-item",function(e) {
                if(self.clickLoading('plus')) return
                self.SelectPlusSize($(this).data('plus'))
            })
        }
    }
    GB_Login_analysis_obj.bindEvent()

    if("en" == "es"){
        $(document).on("click", '.j-newto-shein input[type="email"]', function(e) {
            if(typeof(ga) == 'function'){
                ga('shein.send',{
                    hitType: 'event',
                    eventCategory: '登录注册页',
                    eventAction: 'EditEmailAddress'
                })
            }
        })
    }
</script>

<script src="//apis.google.com/js/api:client.js" async="1"></script>


<script src="//vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>

<script type="text/javascript">
    var GB_SupportGoogleLogin = "true"=="true";
    var GB_login_pageType="login";
    /*Global variable*/
    var She_Login_labels={
        email_empty:"Please enter a valid Email!",
        pwd_edit_error:"The password or the confirm password is incorrect.",
        emb_error:"The email you entered is invalid",
        pwd_error:"Please enter your password.",
        pwd_regu_error_0:"Your Password must contain a minimum of 6 characters.",//remove >6
        pwd_regu_error_1:"Password and Retype Password has to be same.",//be same
        pwd_regu_error_2:"Your password must be at least 8 characters long and include at least one letter and one number.",//new reg
        pwd_not_same:"Your passwords do not match, please try again.",
        acc_safe_tip:"Resend",
        acc_safe_ent_code:"Please enter the verification code received.",
        acc_safe_code_resend:"The verification code has been sent to your email address.",
        login_err:"The Email Address or Password you entered is incorrect.",
        reg_err:"The Email has been used by others. Please specify another Email.",
        login_fail:"Login failed Please try again",
        email_enter_err:"Please enter an email address.",
        email_format_err:"The email you entered is invalid. Please check your email and try again.",
        forgotten_wecannot: "We cannot find your information. <br/>Please <a href='{0}'>sign up for an account</a> or <a href='{1}' target='_blank'>contact Customer Service</a>."

    };
    var She_Login_ser_err={
        "400502":"Password and Retype Password has to be same.",
        "400505":"User logged via facebook is not allowed to revise the password.",
        "400506":"Your password must be at least 8 characters long and include at least one letter and one number.",
        "400504":"an error happened in old password",
        "400525":"Sorry, the verification code entered is incorrect. Please try again.",
        "400524":"The amount of emails has been used up. Please try again later. ",
        "400517":"We're so sorry to inform you that your IP is limited to register more . For further help, please <a onclick='showPreRobot()'; style=&quot;color:#00f;&quot; href='javascript:vold(0)'>contact us</a> !",
        "400503":"Sorry, this email has been used, try another one.",
        "default":"Sorry, please try it again, thank you."
    }

</script>
<script type="text/javascript">
    !function() {
        var analysis = {
            fbSignIn: function(json) {
                GBGaSend({
                    category: '登录注册页',
                    action: 'Facebook - sign in',
                    label: json.label,
                    value: json.value
                })
            }
        }
        Vue.component('login-vue', {
            template: '#vue-login-temp',
            props: {
                loginPage: {default: false},
                forgetPassword: {
                    showForm: Boolean
                },
                loginType: {default: 'other'}
            },
            filters: {
                change: function(value){
                    return value
                }
            },
            data: function(){
                return {
                    pageType: GB_login_pageType,
                    status: {logining: false, signuping: false},
                    loginError: '',
                    loginForm: {
                        email: '',
                        password: '',
                        emailErrorTxt: She_Login_labels.email_empty
                    },
                    signupForm: {
                        email: '',
                        password: '',
                        confrimPassword: '',
                        emailErrorTxt:She_Login_labels.email_empty,
                        confrimPasswordErrorTxt: She_Login_labels.pwd_edit_error,
                        regAgreeLetter: true,
                    },
                    showemailbox: false,
                    mailBinding: '',
                    mbErrorTxt: She_Login_labels.emb_error,
                    showRecaptcha: false,
                    showRecaptchaError: false,
                    showRegSuc: false,
                    showRegSuc: false,
                    fbuid: '',
                    fbtoken: '',
                    preferOptions:[],
                    isKeepPrivacy: false,
                    privacyError: false,
                    needRevisePass: false,
                    neednotRevisePass: false,
                    sended: false,
                    sendtips:She_Login_labels.acc_safe_tip,
                    oldpassVal: '',
                    newpassVal: '',
                    conpassVal: '',
                    oldpassErrorTxt: '',
                    newpassErrorTxt: '',
                    conpassErrorTxt: '',
                    passwordText: "",
                    sendnewpassVal: "",
                    sendconpassVal: "",
                    sendnewpassTxtErr:"",
                    sendconPassTxtErr: "",
                    resendTipErr: "",
                    sendCodeVal:"",
                    sendCodestatus: false,
                    sendcoding: false,
                    sendcodingold: false,
                    setTimeId: '',
                    safety: {
                        showFir: 0,
                        showSec: 0,
                        showThi: 0,
                        showAll: 0,
                        hideAll: 0,
                    }
                }
            },
            mounted: function() {
                if (GB_SupportGoogleLogin) {
                    this.googleLoginInit()
                }
                var self = this;
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {},
                    url: '/user/auth/getPreferOptions',
                    success: function success(res) {
                        if(res.code == 0 && res.info && res.info.result && res.info.result.length){
                            self.preferOptions = res.info.result;
                        }
                    }
                });
                if(SHEIN_W.getCookie('keepPrivacy') == 1){
                    self.isKeepPrivacy = false
                }else{
                    self.isKeepPrivacy = true
                }
            },
            methods: {
                checkexg: function(pwd) {
                    var self = this
                    var pwdexp = /^(?=.*[0-9])(?=.*[a-zA-Z])/
                    if(pwd == 'password') {
                        self[pwd]=self.signupForm[pwd].replace(/\s+/g,'')
                    }else {
                        self[pwd]=self[pwd].replace(/\s+/g,'')
                    }

                    if(self[pwd].length >= 8) {
                        self.safety.showFir = 1
                    }else {
                        self.safety.showFir = 0
                    }
                    if(/[a-zA-Z]{1,}/.test(self[pwd])) {
                        self.safety.showSec = 1
                    }else {
                        self.safety.showSec = 0
                    }
                    if(/[0-9]{1,}/.test(self[pwd])) {
                        self.safety.showThi = 1
                    }else {
                        self.safety.showThi = 0
                    }
                    if(!(_gb_passwordSafetyExp.test(self[pwd]))) {
                        self.safety.showAll = 1
                    }
                    var timer = setInterval(function(){
                        clearInterval(timer);
                        if(self.safety.showFir==1 && self.safety.showSec ==1&& self.safety.showThi ==1) {
                            self.safety.hideAll = 1
                        }else {
                            self.safety.hideAll = 0
                        }
                    },200)
                },
                foucsCheckexg: function() {
                    this.safety.showAll = 1
                },
                delayCheckexg: function(pwdval) {
                    var self = this
                    self.checkexg(pwdval)
                },
                checkregPw: function(pw) {
                    if(!(_gb_passwordSafetyExp.test(pw))) {
                        this.safety.showAll = 1
                        return false
                    }else {
                        return true
                    }
                },
                filterSpace: function(value){
                    this.signupForm[value] = this.signupForm[value].replace(/\s+/g,'');
                },
                filterSpacePwd: function(value){
                    var self = this;
                    self[value] = self[value].replace(/\s+/g,'');
                },
                noneedLogin: function() {
                    window.safety_ga_action.close_pop()
                    this.neednotRevisePass = false
                    window.location.reload();
                },
                needLogin: function() {
                    var self = this
                    $('.j-login-pwd-con input[type="password"]').val('')
                    $('.j-login-pwd-con input[type="text"]').val('')
                    self.sendCodeVal = ''
                    self.$nextTick(function(){
                        window.safety_ga_action.close_pop()
                        self.needRevisePass=false
                        self.status.logining = false
                        // self.resendTipErr = ''
                        self.passwordText = ''
                        self.sendconPassTxtErr = ''
                        self.sendnewpassTxtErr = ''
                        self.sendcoding = false
                        self.sendCodestatus = false
                        clearInterval(self.setTimeId)
                    })
                },
                updatePassword: function(){
                    var self = this
                    self.oldpassErrorTxt = ''
                    self.newpassErrorTxt = ''
                    self.conpassErrorTxt = ''
                    self.passwordText = ''
                    self.$nextTick(function(){
                        if(self.oldpassVal === '') {
                            self.oldpassErrorTxt = She_Login_labels.pwd_error;
                            return false
                        }else if(self.oldpassVal.length <= 5) {
                            self.oldpassErrorTxt = She_Login_labels.pwd_regu_error_0;
                            return false
                        }else if(self.newpassVal === '' || !(_gb_passwordSafetyExp.test(self.newpassVal))) {
                            self.newpassErrorTxt = She_Login_labels.pwd_regu_error_2;
                            return false
                        }else if(self.newpassVal !== self.conpassVal) {
                            self.conpassErrorTxt = She_Login_labels.pwd_regu_error_1;
                            return false
                        }
                        self.sendcodingold = true
                        $.post('/user/edit_password/updatePassword',{old_password:self.oldpassVal,password:self.newpassVal,password_confirm:self.conpassVal},function(data){
                            if (data.code == 0) {
                                window.safety_ga_action.submit_succ()
                            } else {
                                window.safety_ga_action.submit_fail(data.msg)
                                self.sendcodingold = false
                            }
                            if(data.code == 0) {
                                self.neednotRevisePass = false
                                window.location.reload();
                                $('input[type="password"]').val('')
                                self.passwordText = ''
                            }else if(She_Login_ser_err[data.code]){
                                self.passwordText = She_Login_ser_err[data.code]
                            } else{
                                self.passwordText = She_Login_ser_err["default"];
                            }
                        })
                    })
                },
                sendcodePassword: function() {
                    var self = this
                    if(self.sendCodeVal == '') {
                        self.resendTipErr = She_Login_labels.acc_safe_ent_code;
                    }else {
                        self.resendTipErr = ''
                    }
                    if (!self.$refs.newPassforce.check() || !self.$refs.newPassconforce.check()) {
                        return
                    }
                    self.sendcoding = true
                    self.passwordText = ''
                    $.post('/critical/changePassword',{code:self.sendCodeVal, password:self.sendnewpassVal,password_confirm :self.sendconpassVal},function(data){
                        if (data.code == 0) {
                            window.safety_ga_action.submit_succ()
                        } else {
                            window.safety_ga_action.submit_fail(data.msg)
                            self.sendcoding = false
                        }
                        if(data.code == 0) {
                            self.neednotRevisePass = false
                            self.login(self.loginForm.email,self.sendnewpassVal,'callBySignup')
                            self.$emit('login-suc-callback');
                            $('input[type="password"]').val('')
                            self.passwordText = ''
                        }else if(She_Login_ser_err[data.code]){
                            self.passwordText = She_Login_ser_err[data.code]
                        } else{
                            self.passwordText = She_Login_ser_err["default"];
                        }
                    })
                },
                login: function(email, password, callBySignup) {
                    var self = this;
                    var $recaptcha = $('#g-recaptcha-response');

                    self.loginForm.emailErrorTxt = '';

                    if (callBySignup !== 'callBySignup') {
                        this.status.logining = true;
                        email = this.loginForm.email
                        password = this.loginForm.password
                        if (!this.$refs.loginEmail.check() || !this.$refs.loginPwd.check()) {
                            this.status.logining = false;
                            if(typeof GB_Login_analysis_obj != 'undefined'){
                                GB_Login_analysis_obj.loginGAEventSend({
                                    type:"Sign",
                                    value:0,
                                    failMsg: 'Failure of mailbox or password check'
                                })
                            }
                            return
                        }
                    }

                    var login_data = {
                        "email": email,
                        "password": password
                    }
                    if($recaptcha && $recaptcha.val() != ''){
                        login_data.g_recaptcha_response = $recaptcha.val();
                    }

                    $.ajax({
                        type:'POST',
                        url:'/user/auth/login',
                        data:login_data,
                        success: function(data) {
                            self.loginForm.emailErrorTxt = ''
                            self.$nextTick(function(){
                                if(data.code == 0){
                                    if(She_w_lang=="us"){
                                        if(data.info.member.need_pop == 1) {
                                            window.safetyCheckEventCategory = '密码重置弹窗-无风险用户'
                                            safety_ga_action.need_pop()
                                            // 弹框可关闭，无需验证也可登陆
                                            self.neednotRevisePass = true
                                            self.sendtips = She_Login_labels.acc_safe_tip;
                                            self.sended = false
                                            self.safety.hideAll = 0
                                            self.safety.showAll = 0
                                            self.safety.showFir = 0
                                            self.safety.showSec = 0
                                            self.safety.showThi = 0
                                            if(typeof GB_Login_analysis_obj != 'undefined'&&callBySignup != 'callBySignup'){
                                                GB_Login_analysis_obj.loginGAEventSend({
                                                    type:"Sign",
                                                    value:1
                                                })
                                            }
                                            return false
                                        }else if(data.info.member.need_pop == 2) {
                                            window.safetyCheckEventCategory = '密码重置弹窗-高风险用户'
                                            safety_ga_action.need_pop()
                                            // 弹框不可关闭，需验证才能登陆
                                            self.needRevisePass = true
                                            self.sendtips = She_Login_labels.acc_safe_tip;
                                            self.sended = false
                                            self.safety.hideAll = 0
                                            self.safety.showAll = 0
                                            self.safety.showFir = 0
                                            self.safety.showSec = 0
                                            self.safety.showThi = 0
                                            self.sendAuthVerifyCode();
                                            return false
                                        }
                                    }
                                    if(typeof GB_Login_analysis_obj != 'undefined'&&callBySignup != 'callBySignup'){
                                        GB_Login_analysis_obj.loginGAEventSend({
                                            type:"Sign",
                                            value:1
                                        })
                                    }
                                    if(callBySignup == 'callBySignup' && self.loginPage) {
                                        self.showRegSuc = true
                                        window.location.href = She_w_host+'/user/auth/register_success'
                                    }
                                    if(!self.showRegSuc) {
                                        self.$emit('login-suc-callback');
                                    }
                                    self.showRegSuc = false
                                    // self.$emit('login-suc-callback');
                                    SHEIN_W.delCookie('signin_recaptcha');
                                } else if(data.code == 300206) {
                                    window.location = She_w_host+'/user/auth/logout'
                                }else if(data.code == 1402 ){ //密码错误需要重新输入验证码
                                    grecaptcha.reset();
                                    SHEIN_W.setCookie('signin_recaptcha', 0, 3600);
                                    self.showRecaptcha = true;
                                    self.isDisabled = true;
                                    self.showRecaptchaError = false;
                                    self.loginError = She_Login_labels.login_err;
                                }else if(data.code == 1404){ //无验证码
                                    grecaptcha.reset();
                                    SHEIN_W.setCookie('signin_recaptcha', 0, 3600);
                                    self.showRecaptcha = true;
                                    self.isDisabled = true;
                                    self.showRecaptchaError = false;
                                    self.loginError = 'No verification'
                                }else if(data.code == 1403){ //验证码错误
                                    SHEIN_W.setCookie('signin_recaptcha', 0, 3600);
                                    self.showRecaptcha = true;
                                    self.isDisabled = true;
                                    grecaptcha.reset();
                                    self.showRecaptchaError = true;
                                    self.loginError = 'verification error'
                                } else {
                                    self.showRecaptcha = false;
                                    self.showRecaptchaError = false;
                                    self.isDisabled = false;
                                    self.loginError = She_Login_labels.login_err;
                                }
                                if (data.code != 0) {
                                    self.status.logining = false;
                                    if(typeof GB_Login_analysis_obj != 'undefined'&&callBySignup != 'callBySignup'){
                                        GB_Login_analysis_obj.loginGAEventSend({
                                            type:"Sign",
                                            value:0,
                                            failMsg: data.msg
                                        })
                                    }
                                }

                            })
                        }, error: function() {
                            self.status.logining = false;
                            if(typeof GB_Login_analysis_obj != 'undefined'&&callBySignup != 'callBySignup'){
                                GB_Login_analysis_obj.loginGAEventSend({
                                    type:"Sign",
                                    value:0,
                                    failMsg: 'ajax error'
                                })
                            }

                        }
                    })
                },
                sendAuthVerifyCode: function() {
                    var self = this
                    if(self.sendCodestatus) return;
                    $.ajax({
                        type:'GET',
                        url: "/critical/getResendAuthTime",
                        contentType: 'application/json',
                        success: function(data) {
                            if(data.info.time <= 0) {
                                self.codeVerify(60);
                            }else {
                                self.countdown(data.info.time);
                            }
                        },
                        error: function() {

                        }
                    })
                },
                codeVerify: function(time) {
                    var self = this
                    $.ajax({
                        type:'GET',
                        url:'/critical/sendAuthVerifyCode',
                        contentType: 'application/json',
                        success: function(data) {
                            self.countdown(time);
                            if(data.code == 0){
                                self.resendTipErr = She_Login_labels.acc_safe_code_resend;
                            }
                            else if(data.code == 400525) {
                                self.resendTipErr = She_Login_ser_err[data.code];
                            }else if(data.code == 400524) {
                                window.safety_ga_action.auth_run_out()
                                self.resendTipErr = She_Login_ser_err[data.code];
                            }
                        },
                        error: function() {
                        }
                    })
                },
                countdown: function(time) {
                    var self = this
                    var timer=time;
                    self.setTimeId=setInterval(function(){
                        if(timer<=0){
                            self.sended = false
                            self.sendtips = She_Login_labels.acc_safe_tip;
                            self.sendCodestatus = false
                            clearInterval(self.setTimeId);
                            return;
                        }
                        timer--;
                        self.sendCodestatus = true
                        self.sended = true
                        self.sendtips = timer + 's'
                    },1000);
                },
                showForPassword: function() {
                    if(this.loginPage) {
                        this.forgetPassword.showForm = true
                    }else {
                        location.href = She_w_host+'/user/auth/login?from=quicklogin';
                        this.forgetPassword.showForm = true
                    }
                },
                signup: function() {
                    var self = this;
                    var email = self.signupForm.email
                    var password = self.signupForm.password
                    var confrimPassword = self.signupForm.confrimPassword
                    self.status.signuping = true;
                    self.signupForm.emailErrorTxt = ''
                    self.signupForm.confrimPasswordErrorTxt = ''
                    var preferenceCheckbox = $('.prefer-item input:checked');
                    var preferenceData = [];
                    preferenceCheckbox.each(function(index,checkbox){
                        preferenceData.push(parseInt(checkbox.name));
                    })

                    if(She_w_lang == "us"){
                        var countryId = SHEIN_W.getCookie('countryId');
                        var keepPrivacy = false
                        if(SHEIN_W.getCookie('keepPrivacy') == 1){
                            keepPrivacy = true
                        }else{
                            keepPrivacy = false
                        }
                        if(!keepPrivacy && _gb_privacyEurCountry.indexOf(parseInt(countryId)) > -1){
                            uspop_privacyVue.showPop  = true;
                            if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                                GB_GDPR_ANALYSIS.GDPRregister('PopUps','');
                            }
                            self.status.signuping = false;
                            return false
                        }
                    }

                    self.$nextTick(function() {
                        if (!self.$refs.signupEmail.check() || !self.checkregPw(password) || !self.$refs.signupCfPwd.check()) {
                            self.status.signuping = false;
                            if(typeof GB_Login_analysis_obj != 'undefined'){
                                GB_Login_analysis_obj.loginGAEventSend({
                                    type:"Register",
                                    value:0,
                                    failMsg: 'Failure of mailbox or password check'
                                })
                            }
                            return;
                        }
                        if (password !== confrimPassword) {
                            self.signupForm.confrimPasswordErrorTxt = She_Login_labels.pwd_not_same;
                            self.status.signuping = false;
                            if(typeof GB_Login_analysis_obj != 'undefined'){
                                GB_Login_analysis_obj.loginGAEventSend({
                                    type:"Register",
                                    value:0,
                                    failMsg: 'The password and the confirmation you typed do not match'
                                })
                            }
                            return;
                        }

                        if($('.j-privacy-check-wrap').length){
                            if($('.j-privacy-check-wrap .j-privacy-checkbox').is(':checked')){
                                SHEIN_W.setCookie('keepPrivacy','1', 365 * 24 * 60 * 60) //同意一年内不再弹
                            }else{
                                self.privacyError = true
                                self.status.signuping = false;
                                return
                            }
                            if($('.j-privacy-check-wrap .j-subscrib-checkbox').is(':checked')){
                                SHEIN_W.setCookie('keepSubscribe','1', 365 * 24 * 60 * 60)
                            }
                        }

                        $.ajax({
                            type:'POST',
                            url:'/user/auth/signup',
                            contentType: 'application/json',
                            data:JSON.stringify({
                                "email": email,
                                "password": password,
                                "password_confirm": confrimPassword,
                                "prefer": preferenceData
                            }),
                            success: function(data) {
                                if(data.code == 0){
                                    if(typeof GB_Login_analysis_obj != 'undefined'){
                                        GB_Login_analysis_obj.loginGAEventSend({
                                            type:"Register",
                                            value:1,
                                            prepferences:preferenceData
                                        })
                                    }
                                    if($('.j-privacy-check-wrap').length && $('.j-privacy-check-wrap').is(":visible")){
                                        if($('.j-privacy-check-wrap .j-subscrib-checkbox').is(':checked')){
                                            if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                                                GB_GDPR_ANALYSIS.GDPRregister('register','AgreePrivacyPolicy/E-mail Subscriptions');
                                            }
                                        }else{
                                            if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                                                GB_GDPR_ANALYSIS.GDPRregister('register','AgreePrivacyPolicy');
                                            }
                                        }
                                    }

                                    if (She_w_lang == 'de' || She_w_lang == 'es' || She_w_lang == 'fr') {
                                        if (self.signupForm.regAgreeLetter) {
                                            self.subscribe(email, function() {
                                                self.login(email, password, 'callBySignup')
                                            });
                                        } else {
                                            self.login(email, password, 'callBySignup')
                                        }
                                    } else {
                                        self.login(email, password, 'callBySignup')
                                    }
                                } else if(data.code == 300206) {
                                    window.location = She_w_host+'/user/auth/logout'
                                } else if(She_Login_ser_err[data.code]){
                                    self.signupForm.emailErrorTxt = She_Login_ser_err[data.code];
                                } else {
                                    self.signupForm.emailErrorTxt = She_Login_labels.reg_err;
                                }

                                if (data.code != 0) {
                                    self.status.signuping = false;
                                    if(typeof GB_Login_analysis_obj != 'undefined'){
                                        GB_Login_analysis_obj.loginGAEventSend({
                                            type:"Register",
                                            value:0,
                                            failMsg: data.msg
                                        })
                                    }
                                }
                            },
                            error: function() {
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        type:"Register",
                                        value:0,
                                        failMsg: 'ajax error'
                                    })
                                }
                                self.status.signuping = false;
                            }
                        })
                    })


                },
                subscribe: function(email, cb) {
                    $.ajax({
                        url: '/user/auth/subscribe',
                        type: 'POST',
                        data: {email: email}
                    })
                        .always(function() {
                            if (typeof cb == 'function') {
                                cb();
                            }
                        });
                },
                googleLoginInit: function() {
                    var self = this;
                    function startApp() {
                        gapi.load('auth2', function(){
                            auth2 = gapi.auth2.init({
                                // client_id: '353013613329-9cvufbeq47ees1qve0cvqqafg8vjav1p.apps.googleusercontent.com',
                                client_id: '442372174610-mhaoa3ldik3pji23ldh6ahgnej9joe8v.apps.googleusercontent.com',
                                cookiepolicy: 'single_host_origin',
                                scope: 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email'
                            });
                            attachSignin(self.$refs.googleLogin);
                        });
                    }
                    function attachSignin(element) {
                        auth2.attachClickHandler(element, {},
                            function(googleUser) {
                                var profile = googleUser.getBasicProfile();
                                googleLoginBegin(profile.getEmail(), profile.getId())
                            }, function(error) {
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        action:"Google - sigin in",
                                        loginType:"Google",
                                        hasLabel:true,
                                        type:"login",
                                        value:0
                                    })
                                }
                                alert(She_Login_labels.login_fail+' google')
                            }
                        );
                    }
                    function googleLoginBegin(email, google_id) {
                        $.post('/user/auth/googleLogin', {email: email, google_id: google_id}, function(json) {
                            if(json.code == 0 && json.info) {
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        action:"Google - sigin in",
                                        loginType:"Google",
                                        hasLabel:true,
                                        type:"login",
                                        value:1
                                    })
                                }
                                self.$emit('login-suc-callback');
                            } else {
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        action:"Google - sigin in",
                                        loginType:"Google",
                                        hasLabel:true,
                                        type:"login",
                                        value:0
                                    })
                                }
                                alert(She_Login_labels.login_fail+' shein')
                            }

                        })
                    }
                    var st_count = 100;
                    function startAppInterval(){
                        st_count--;
                        if(typeof(gapi)!="undefined"){
                            startApp();
                            if(itervalGoogle)clearInterval(itervalGoogle)
                        }else if(st_count<0) clearInterval(itervalGoogle);
                    }
                    var itervalGoogle = setInterval(function(){
                        startAppInterval();
                    },500)
                    startAppInterval();

                },
                facebookLogin: function() {
                    if($('.j-third-privacy-tip').length){
                        SHEIN_W.setCookie('keepPrivacy','1', 365 * 24 * 60 * 60)
                    }
                    this.fbLoginBegin('login')
                },
                // Facebook 登录
                //var fbuid, fbtoken;
                fbLoginBegin:function(status, to_url) {
                    var self = this;
                    FB.login(function(response) {
                        if (response.authResponse) {
                            //var fbuid = response.authResponse.userID;
                            var fbtoken = response.authResponse.accessToken;
                            $("#foot_facebook_share").show();
                            FB.api('/me', function(response) {
                                var fbuid = response['id'];
                                var fbEmail = '';
                                if(typeof(response['email']) != 'undefined' && response['email'] !='undefined' && response['email'] ){
                                    fbEmail=response['email'];
                                }
                                self.fbLogin(fbuid,fbtoken,fbEmail);
                            });
                        } else {
                            if(typeof GB_Login_analysis_obj != 'undefined'){
                                GB_Login_analysis_obj.loginGAEventSend({
                                    action:"Facebook - sigin in",
                                    loginType:"Facebook",
                                    hasLabel:true,
                                    type:"login",
                                    value:0
                                })
                            }
                            return;
                        }
                    }, {
                        scope : 'email,publish_actions,user_likes'
                    });
                },
                fbLogin:function(fbUid,fbToken,fbEmail, email_source){
                    if (email_source === undefined) email_source = 0
                    var self = this;
                    $.ajax({
                        url: '/user/auth/fblogin',
                        type: 'POST',
                        data: {
                            email: fbEmail,
                            facebook_id:fbUid,
                            fbtoken:fbToken,
                            invite_agency: 0,
                            email_source: email_source,
                        },
                        success: function(data){
                            if(data.code == 0){
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        action:"Facebook - sigin in",
                                        loginType:"Facebook",
                                        hasLabel:true,
                                        type:"login",
                                        value:1
                                    })
                                }
                                self.$emit('login-suc-callback');
                            } else if(data.code == 400507){
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        action:"Facebook - sigin in",
                                        loginType:"Facebook",
                                        hasLabel:true,
                                        type:"login",
                                        value:0
                                    })
                                }
                                self.fbuid = fbUid;
                                self.fbtoken = fbToken;
                                self.showemailbox = true;
                            } else if (data.code == 400503) {
                                self.$refs.fbEmail.dataErrorTxt = She_Login_ser_err[data.code];
                            } else {
                                if(typeof GB_Login_analysis_obj != 'undefined'){
                                    GB_Login_analysis_obj.loginGAEventSend({
                                        action:"Facebook - sigin in",
                                        loginType:"Facebook",
                                        hasLabel:true,
                                        type:"login",
                                        value:0
                                    })
                                }
                            }
                        },
                        error: function(xhr, text, error){
                            if(typeof GB_Login_analysis_obj != 'undefined'){
                                GB_Login_analysis_obj.loginGAEventSend({
                                    action:"ClickFacebook",
                                    loginType:"Facebook",
                                    hasLabel:true,
                                    type:"login",
                                    value:0
                                })
                            }
                            var data = JSON.parse(xhr.responseText)
                            data.msg && alert(data.msg)
                        }
                    })
                },
                vkLogin: function(){
                    var source = $(".j-login-con").attr("data-login-source")||"";
                    var redirect_uri = She_w_host+'/vklogin/auth?s='+source;
                    window.open('https://oauth.vk.com/authorize?client_id=6147679&is_https=1&scope=email&response_type=code&v=5.50&redirect_uri='+encodeURIComponent(redirect_uri),'xmOpenWindow','width=700, height=550, menubar=no, resizeable=yes, status=no, scrollbars=yes');
                    // window.open('https://oauth.vk.com/authorize?client_id=6314526&redirect_uri='+redirect_uri,'xmOpenWindow','width=700, height=550, menubar=no, resizeable=yes, status=no, scrollbars=yes');
                },
                bindingMail: function() {
                    var self = this;
                    var email = this.mailBinding
                    if (!this.$refs.fbEmail.check()) {
                        return;
                    } else {
                        self.fbLogin(self.fbuid, self.fbtoken, email, 1)
                    }
                },
                privacyShow: function(){
                    welcomePrivacyVue.showContent = "fromLogin";
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('ClickPrivacyPolicy','login');
                    }
                },
                thirdPrivacyShow: function(){
                    welcomePrivacyVue.showContent = "fromLoginthiird";
                    if(typeof GB_GDPR_ANALYSIS != 'undefined'){
                        GB_GDPR_ANALYSIS.GDPRregister('ClickPrivacyPolicy','第三方登录');
                    }
                }
            }
        })
    }()




</script>



<script>
    var loginInstance = new Vue({
        el: '.j-login-container',
        data: {
            forgetPassword: {
                email: '',
                emailErrorTxt: '',
                showForm: false,
                showResult: false,
                showContinuing: false,
            },
            querys: window.location.search.slice(1).split('&').reduce(function(obj, search) {
                var arr = search.split('=');
                obj[arr[0]] = decodeURIComponent(arr[1]); return obj
            }, {}),
            pattern: /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$/,
        },
        created: function() {
            if(this.querys.action == 'show') {
                this.forgetPassword.showForm = true
            }
            if(SHEIN_W.getQueryString('from') === 'quicklogin') {
                this.forgetPassword.showForm = true
            }
        },
        methods: {
            urlRedirection: function(url) {
                var _redirection = this.querys.redirection
                var _prot = this.querys.prot
                var action = this.querys.action
                var return_to = this.querys.return_to

                // zendesk login
                if (return_to) {
                    return $.get('/user/auth/zendeskLogin' + window.location.search, function(data) {
                        if (data.url)  window.location = data.url
                    })
                }
                if(window.location.search.indexOf('direction=checkout') > -1) {
                    return window.location = She_w_host+'/checkout'
                } else if (window.location.search.indexOf('direction=nav') > -1) {
                    return window.location = She_w_host+'/user/index'
                } else if( _redirection != null ){
                    return window.location.href = She_w_host + _redirection
                }
                else {
                    if(url) {
                        return window.location.href = url
                    }else {
                        if (document.referrer) {
                            var referrer = document.referrer
                            if (referrer.indexOf('.shein.com') > -1 ||
                                referrer.indexOf('.shein.in') > -1 ||
                                referrer.indexOf('.shein.co.uk') > -1 ||
                                referrer.indexOf('.shein.tw') > -1)
                                return window.location.href = document.referrer
                        }
                        return window.location.href = She_w_host;
                    }
                }
            },
            loginSucCb: function() {
                this.urlRedirection();
            },
            showFgForm: function() {
                var email = this.forgetPassword.email

                this.forgetPassword.emailErrorTxt = ''
                if (!email.length) {
                    this.forgetPassword.emailErrorTxt = She_Login_labels.email_enter_err;
                    return
                } else if (!this.pattern.test(email)) {
                    this.forgetPassword.emailErrorTxt = She_Login_labels.email_format_err;
                    return
                }
                this.forgetPassword.showContinuing = true
                $.ajax({
                    type: 'POST',
                    url: '/user/auth/forget-password',
                    data: {
                        email: email
                    },
                    success: function(data) {
                        if (data.code == 0) {
                            this.forgetPassword.email = ''
                            this.forgetPassword.showForm = false
                            this.forgetPassword.showResult = true
                        }else if(data.code == 400505) {
                            var loginURl=She_w_host+"/user/auth/login/", contactUrl = She_w_host+"/contact-us.html";
                            this.forgetPassword.emailErrorTxt = SHEIN_W.template(loginURl,contactUrl,She_Login_labels.forgotten_wecannot);
                        }
                        this.forgetPassword.showContinuing = false
                    }.bind(this)
                })

            },
        }
    })
    if(SHEIN_W.getCookie('signin_recaptcha') && SHEIN_W.getCookie('signin_recaptcha') == 0){
        loginInstance.$refs.mainLogin.isDisabled = true
        loginInstance.$refs.mainLogin.showRecaptcha = true;
    }
    var shein_verified_callback = function(){
        if(loginInstance){
            loginInstance.$refs.mainLogin.isDisabled = false
        }
    }
    var shein_expired_callback = function(){
        if(loginInstance){
            loginInstance.$refs.mainLogin.isDisabled = true
        }
    }

</script>

<!-- google recaptcha -->
<script src='https://www.google.com/recaptcha/api.js' async="true"></script>
<script type="text/javascript">

</script>




<script>
    var s_str = SHEIN_W.getQueryString("direction");
    if(s_str!="nav"){
        $(".j-login-con").attr("data-login-source","other");
    }
    //页面信息
    var SaPageInfo = {
        page_id: 15,
        page_name:'page_login',
        page_param:''
    };
    $(function(){
        //进入页面
        sa('set','setPageData',SaPageInfo);
        sa('send','pageEnter',{start_time:new Date().getTime()});
        //退出页面
        window.onbeforeunload = function(){sa('send','pageLeave',{end_time:new Date().getTime()});};
    });
</script>
<!-- pinterest begin -->

<img height="1" width="1" alt="" src="https://ct.pinterest.com/?tid=nwUlHPKjWGP"/>
<!-- pinterest end -->


<script>
    var pageType = pageType || 0;
    var _prodid = ''

    _prodid = 'www';

</script>



<script data-id="google-rmt">

    var _google_tag_params = {};
    var _siteId = ['uae', 'au', 'de', 'es', 'fr', 'in', 'it', 'ru', 'tw', 'uk', 'us']


    _google_tag_params = {
        ecomm_prodid: '',
        ecomm_pagetype: 'signup',
        ecomm_value: ''
    }


</script>


<script>
    /* <![CDATA[ */
    var google_conversion_id = 970699152;
    var google_custom_params = _google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/970699152/?guid=ON&amp;script=0"/>
    </div>
</noscript>






<div class="c-back-wrap en-c-back-wrap j-back-wrap">


    <div class="back-wrap-show">
        <div class="back-app">
            <i class="iconfont icon-app"></i>
        </div>
        <div class="show-info">
            <h4>APP</h4>
            <p class="to-enjoy">
                <span>Download to enjoy</span>
            </p>
            <p class="er-percent">
				<span class="percent-first">
					US$3<em>OFF</em>
				</span>
                <span class="percent-sec">1st order</span>
            </p>
            <p class="code-app">
                <span>Code: SHE3</span>
            </p>
            <a class="apple-a j-app-info" data-type="IOS" target="_blank" href="https://itunes.apple.com/us/app/yub-streetwear-fashion-shopping/id878577184?mt=8"></a>
            <a class="android-a j-app-info" data-type="Android" target="_blank" href="https://play.google.com/store/apps/details?id=com.zzkko&amp;hl=en"></a>
        </div>
    </div>

    <div class="c-uptt j-uptt">
        <i class="iconfont icon-up"></i>
    </div>
</div>




<script type="text/javascript">
    // youtube 视频


    $(function() {
        var $back_wrap = $('.j-back-wrap')
        $('.j-uptt').click(function(event) {
            $('html,body').stop().animate({
                scrollTop: 0
            }, 500);
        });
        $(window).scroll(function() {
            var st = $(document).scrollTop();
            if (st<=0) {
                $back_wrap.removeClass('she-show');
            } else if (st>0 && !$back_wrap.hasClass('she-show')) {
                $back_wrap.addClass('she-show');
            }
        })
    })

</script>

<script>
    var GB_analysis_obj_top = {
        _clickStatus: {
        },
        clickLoading: function (type) {
            var self = this
            if(self._clickStatus[type]) {
                return true
            } else {
                self._clickStatus[type] = true
                setTimeout(function() {
                    self._clickStatus[type] = false
                }, 300)
                return false
            }
        },
        clickPlayVedio: function() {
            GBGaSend({
                category: 'SideWidget',
                action: 'PlayVedio'
            })
        },
        SpredOut: function() {
            GBGaSend({
                category: 'SideWidget',
                action: 'SpredOut-AppIcon',
            })
        },
        BackToTop: function() {
            GBGaSend({
                category: 'SideWidget',
                action: 'BackToTop',
            })
        },
        clickIcon: function(label) {
            GBGaSend({
                category: 'SideWidget',
                action: 'ClickIcon-app',
                label: label
            })
        },
        bindEvent: function () {
            $(document).on('click', '.j-uptt', function () {
                GB_analysis_obj_top.BackToTop()
            }).on('click', '.j-video-icon', function () {
                GB_analysis_obj_top.clickPlayVedio()
            }).on('click', '.j-app-info', function () {
                GB_analysis_obj_top.clickIcon($(this).data('type'))
            }).on('mouseenter', '.back-wrap-show', function () {
                GB_analysis_obj_top.SpredOut()
            })

        }
    }
    GB_analysis_obj_top.bindEvent()
</script>


<script>
    // 新密码规则下的埋点
    window._gaSendType = 'shein.send'
    window.safety_ga_action = {}
    window.safetyCheckEventCategory = '' // 用来区别是高风险用户还是无风险用户
    function safetyCheckGa() {
        var gaSendFunc = function(obj) {
            ga(_gaSendType, $.extend({
                hitType: 'event',
                eventCategory: window.safetyCheckEventCategory,
            }, obj))
        }

        safety_ga_action = {
            // 修改密码弹框
            need_pop: function () {
                gaSendFunc({
                    eventAction: 'PopUps-PasswordReset'
                })
            },
            // 关闭密码弹框
            close_pop: function () {
                gaSendFunc({
                    eventAction: 'ClosePopUps-PasswordReset'
                })
            },
            // 点击提交修改密码成功
            submit_succ: function () {
                gaSendFunc({
                    eventAction: 'Submit',
                    eventLabel: 'Success',
                    eventValue: 1,
                })
            },
            // 点击提交修改密码失败，返回失败原因
            submit_fail: function (msg) {
                gaSendFunc({
                    eventAction: 'Submit',
                    eventLabel: 'Fail-' + msg,
                    eventValue: 0,
                })
            },
            // 邮件验证次数已用完
            auth_run_out: function () {
                gaSendFunc({
                    eventAction: 'PopUps-EmailsUsedUp'
                })
            },
            // 个人中心修改密码
            change_pass_succ: function () {
                gaSendFunc({
                    eventCategory: 'MyAccount',
                    eventAction: 'Submit-ChangePassword',
                    eventLabel: 'Success',
                    eventValue: 1,
                })
            },
            change_pass_fail: function (msg) {
                gaSendFunc({
                    eventCategory: 'MyAccount',
                    eventAction: 'Submit-ChangePassword',
                    eventLabel: 'Fail-' + msg,
                    eventValue: 0,
                })
            },
        }

        // 公共监听事件
        // 点击重新发送验证码
        $(document).on('click', '.j-send-authcode', function () {
            gaSendFunc({
                eventAction: 'ClickResent'
            })
        })
        // todo: 点击重新发送验证码

        // 输入验证码
        $(document).on('focus', '.j-auth-code', function () {
            gaSendFunc({
                eventAction: 'EnterVerificationCode'
            })
        })
        // 输入旧密码
        $(document).on('focus', '.j-safe-old-pass', function () {
            gaSendFunc({
                eventAction: 'EditOldPassword'
            })
        })
        // 输入新密码
        $(document).on('focus', '.j-safe-new-pass', function () {
            gaSendFunc({
                eventAction: 'EditNewPassword'
            })
        })
        // 输入确认新密码
        $(document).on('focus', '.j-safe-new-con-pass', function () {
            gaSendFunc({
                eventAction: 'ConfirmNewPassword'
            })
        })
        // 点击联系邮箱
        $(document).on('click', '.j-contact-email', function () {
            gaSendFunc({
                eventAction: 'ClickContactEmail'
            })
        })
        // 点击个人中心修改密码链接
        $(document).on('click', '.j-account-edit-pass', function () {
            gaSendFunc({
                eventCategory: 'MyAccount',
                eventAction: 'ClickChangePassword'
            })
        })
        // 输入个人中心旧密码
        $(document).on('focus', '.j-account-old-pass', function () {
            gaSendFunc({
                eventCategory: 'MyAccount',
                eventAction: 'ChangePassword',
                eventLabel: 'EditOldPassword',
            })
        })
        // 输入个人中心新密码
        $(document).on('focus', '.j-account-new-pass', function () {
            gaSendFunc({
                eventCategory: 'MyAccount',
                eventAction: 'ChangePassword',
                eventLabel: 'EditNewPassword',
            })
        })
        // 输入个人中心确认新密码
        $(document).on('focus', '.j-account-con-pass', function () {
            gaSendFunc({
                eventCategory: 'MyAccount',
                eventAction: 'ChangePassword',
                eventLabel: 'ConfirmNewPassword',
            })
        })

    }

    safetyCheckGa()
</script>

<!-- emarsys -->
<script type="text/html" id="category_recommender_template">
    <div class="c-recommend-goodsd j-emarsys-goodsd" data-key="{{=SC.key }}" data-title="{{=SC.titleEn}}">
        {{ if (SC.page.products.length) { }}


        <h2 class="goodsd-module-h {{ if (SC.isTitleCenter) { }}module-center-h{{ } }}" data-title="{{=SC.title }}">
            {{ if (SC.title) { }}
            {{=SC.title }}
            {{ } else { }}
            Customers Also Viewed
            {{ } }}
        </h2>

        <div class="recommend-con" style="position: relative;">
            <div class="recommend-prev swiper-button-prev iconfont icon-left j-rec-prev j-also-prev"></div>
            <div class="swiper-container j-rec"><!--列表页底部Recommendations for you-->
                <div class="swiper-wrapper">
                    {{ var _price_key = SC.currency.toLowerCase() === 'usd' ? 'price' : 'c_price_'+SC.currency.toLowerCase(); }}
                    {{ for(var i=0; i < SC.page.products.length; i++) { }}
                    {{ var item = SC.page.products[i]; }}

                    {{ var _itemUrl = item["c_link_" + "www"]; }}
                    {{ var _itemTitle = item["c_title_" + "www"]; }}

                    <div class="swiper-slide j-swiper-slide" data-scarabitem="{{=item.id }}" alt1="{{=item.id }}" data-sku="{{=item.c_sku }}" data-spu="{{=item.c_relation_id }}" data-title="{{=item.title }}" data-price="{{=item[_price_key]}}" data-cat_id="{{=item.c_catid }}">
                        <div class="j-recommend-item j-recommend-item-{{=item.id }}">

                            <a class="recommend-img j-emarsys-recommend-img" data-goods_id="{{=item.id }}" href="{{=(_itemUrl&&_itemUrl.replace(/^http:/,''))}}" title="{{=item.title}}">
                                <img class="j-verlok-lazy"
                                     src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                     data-src="{{=SC.transformImg(item.image)}}"
                                     data-webp="{{=SC.GB_SHEIN_transform_webp_img(item.image)}}"
                                     alt="{{=item.title}}">
                            </a>


                            {{ if (SC.hasName) { }}
                            <p class="recommend-name">{{=_itemTitle}}</p>
                            <p class="recommend-price recommend-price-left recommend-price-red">{{=item.amountWithSymbol}}</p>
                            {{ } else { }}
                            <p class="recommend-price">{{=item.amountWithSymbol}}</p>
                            {{ if(SC.commentInfo[item.id].comment_rank_average > 0){ }}
                            <div class="recommend-rank">
                                <div class="c-star">
                                    {{ for(var j=0;j<(Math.floor(SC.commentInfo[item.id].comment_rank_average));j++){ }}
                                    <i class="iconfont icon-star"></i>
                                    {{ } }}
                                    {{ if((SC.commentInfo[item.id].comment_rank_average)%1 > 0){ }}
                                    <i class="iconfont icon-star2"></i>
                                    {{ } }}
                                    {{ for(var u=0;u<(5-(Math.ceil(SC.commentInfo[item.id].comment_rank_average)));u++){ }}
                                    <i class="iconfont icon-star1"></i>
                                    {{ } }}
                                </div>
                                ({{= SC.commentInfo[item.id].comment_num }})
                            </div>
                            {{ } }}
                            {{ } }}
                        </div>


                        {{ if (item.relatedColor && item.relatedColor.length>0) { }}
                        <div class="btm-related-color j-multi-color-ctn j-multi-color-ctn-{{=item.id }}">
                            {{ for(var k=0; k < item.relatedColor.length; k++) { }}
                            {{ var item_k = item.relatedColor[k]; }}
                            <a class="j-multi-color-img j-multi-color-img-show {{ if (item_k.goods_id==item.id) { }}color-active first-active{{ } }} j-emarsys-recommend-color"
                               data-goods_id="{{=item_k.goods_id}}"
                               data-init_id="{{=item.id }}"
                               href="{{=SC.getGoodsUrl(item_k.goods_url_name, item_k.goods_id, item_k.cat_id)}}"
                               target="_blank">
                                <img class="can-change-color j-verlok-lazy"
                                     src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                     data-src="{{=SC.transformImg(item_k.original_img.replace('.jpg', '_thumbnail_100x100.jpg'))}}"
                                     data-webp="{{=SC.GB_SHEIN_transform_webp_img(item_k.original_img.replace('.jpg', '_thumbnail_100x100.jpg'))}}"/>
                            </a>
                            {{ } }}
                            <div class="multi-color-omit j-multi-color-omit">
                                <span class="j-multi-color-span-omit j-emarsys-recommend-morecolor">+</span>
                                <div class="multi-color-omit-ctn j-multi-color-omit-ctn">
                                    {{ for(var j=0; j < item.relatedColor.length; j++) { }}
                                    {{ var item_j = item.relatedColor[j]; }}
                                    <a class="j-multi-color-img j-multi-color-img-omit {{ if (item_j.goods_id==item.id) { }}color-active first-active{{ } }} j-emarsys-recommend-color"
                                       data-goods_id="{{=item_j.goods_id}}"
                                       data-init_id="{{=item.id }}"
                                       href="{{=SC.getGoodsUrl(item_k.goods_url_name, item_k.goods_id, item_k.cat_id)}}"
                                       target="_blank">
                                        <img class="can-change-color j-opt-color-img-omit j-verlok-lazy"
                                             src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                                             data-src="{{=SC.transformImg(item_j.original_img.replace('.jpg', '_thumbnail_100x100.jpg'))}}"
                                             data-webp="{{=SC.GB_SHEIN_transform_webp_img(item_j.original_img.replace('.jpg', '_thumbnail_100x100.jpg'))}}"/>
                                    </a>
                                    {{ } }}
                                </div>
                            </div>
                        </div>
                        {{ } }}
                    </div>
                    {{ } }}
                </div>
            </div>
            <div class="recommend-next swiper-button-next iconfont icon-right j-rec-next j-also-next"></div>
        </div>
        {{ } }}
    </div>
</script>

<script src="//sheinsz.ltwebstatic.com/she_dist/libs/template.js"></script>

<!-- 用于emarsys spu 颜色切换 -->
<script id="recommend_item_art_tpl" type="text/html">
    <div class="j-recommend-item-{{init_id}}">
        <a class="recommend-img j-emarsys-recommend-img" data-goods_id="{{item.goods_id }}" href="{{link}}" title="{{item.name}}" data="change">
            <img class="j-verlok-lazy"
                 src="//sheinsz.ltwebstatic.com/she_dist/images/bg-grey.png"
                 data-src="{{image}}"
                 data-webp="{{image}}"
                 alt="{{item.name}}">
        </a>
        {{ if SC.hasName }}
        <p class="recommend-name">{{item.name}}</p>
        <p class="recommend-price recommend-price-left recommend-price-red">{{price}}</p>
        {{ else }}
        <p class="recommend-price">{{price}}</p>
        {{ /if }}
    </div>
</script>


<script>
    var GB_SHEIN_emarsys_cacheData = {}
    //显示emarsys site

    var GB_cartInitSend, GB_emarsysList, GB_cartInitSend_cart, GB_emarsysClearGa, GB_emarsysQuickSend;  // 提供外部使用接口

    // 避免重复加载emarsys
    if(PageGroupEmarsys == 'other') {
        ;(function() {

            var userInfoEmail = SHEIN_W.getCookie('userinfo_email'),
                emarsys_reco_arr = new Array(),
                gaCache = {},
                emarsysCache = {},
                cart_items = [],
                page_type = 'false'

            // clear ga
            GB_emarsysClearGa = function(key) {
                gaCache[key] = {};
                $('.j-emarsys-goodsd').removeAttr('viewed');
            }

            // swiper初始化
            function initSwiper(opt) {
                var _swiper = '#' + opt.el + ' .j-rec';
                var _prev = '#' + opt.el + ' .j-rec-prev';
                var _next = '#' + opt.el + ' .j-rec-next';

                var _Swiper = new Swiper (_swiper, {
                    direction: 'horizontal',
                    prevButton: _prev,
                    nextButton: _next,
                    slidesPerView: opt.num*1,
                    slidesPerGroup : opt.num*1,
                    spaceBetween: opt.imgRange*1,
                    observer:true,//修改swiper自己或子元素时，自动初始化swiper
                    onSlideChangeEnd: function(swiper){
                        if(swiper.container.height() > 0) {
                            var _arrList = [];
                            var eventName = "";
                            for (var i=swiper.activeIndex; i<(swiper.activeIndex + opt.num) && i<opt.goods.length; i++) {
                                if(!eventName){
                                    eventName = saSend.getEventName($(swiper.container[0]));
                                }
                                emarsysGa.analysis_view(opt.goods[i], i, opt, _arrList,eventName);
                                sdkEvent.addPayload(opt.goods[i], i, swiper.snapIndex + 1)

                            }
                        }
                        if (typeof GB_SHEIN_lazyLoadInstance != 'undefined') {
                            GB_SHEIN_lazyLoadInstance.update()
                        }
                    },
                    onSlidePrevEnd: function(swiper){
                        if(swiper.container.height() > 0) {
                            emarsysGa.analysis_clickArrow('Prev', opt);
                        }
                    },
                    onSlideNextEnd: function(swiper){
                        if(swiper.container.height() > 0) {
                            emarsysGa.analysis_clickArrow('Next', opt);
                        }
                    },
                    onClick: function(swiper){
                        // emarsysGa.analysis_clickGap(opt.goods[swiper.clickedIndex], swiper.clickedIndex, opt)
                    },
                    onInit: function() {
                        $(document).off('click.j-emarsys-recommend-img').on('click.j-emarsys-recommend-img', '.j-emarsys-recommend-img', function() {
                            var index = $(this).parents('.swiper-slide').index();
                            emarsysGa.analysis_clickGap(opt.goods[index], index, opt);
                            saSend.click({
                                index: index + 1,
                                goods_id: opt.goods[index].id,
                                eventName: saSend.getEventName($(this))
                            })
                            if(page_type == 'goodsDetail') {
                                sdkEvent.click(opt.goods[index], index, 1)
                            }
                        })
                    }
                });

                emarsysCache[opt.key] = opt
                gaCache[opt.key] = {}

                if (typeof GB_SHEIN_lazyLoadInstance != 'undefined') {
                    GB_SHEIN_lazyLoadInstance.update()
                }

                return _Swiper;
            }

            var emarsys_product_spu = {
                data: {
                    orig_data: {},  // SC
                    orig_sku_arr: [],
                    spu_data: {},
                    price_data: {}
                },
                start: function(data) {
                    var self = this;
                    self.data.orig_data = data;
                    self.get_orig_sku(self.data.orig_data);
                    return new Promise(function(resolve, reject) {
                        self.get_product(self.data.orig_sku_arr, self.data.orig_data, resolve)
                    })
                },
                get_orig_sku: function(orig_data) {
                    var self = this;
                    var products = orig_data.page.products
                    for (var i = 0; i < products.length; i++) {
                        if (products[i].c_sku && products[i].c_sku.length > 0) {
                            self.data.orig_sku_arr.push(products[i].c_sku);
                        }
                    }
                },
                get_product: function(orig_sku_arr, orig_data, resolve) {
                    var self = this;
                    $.ajax({
                        url: '/product/getRelatedBySKU',
                        type: 'POST',
                        data: {sku: orig_sku_arr}
                    })
                        .done(function(json) {
                            if (typeof json == 'string') {json = $.parseJSON(json)}
                            if (json.code == '0' && json.info.products) {
                                var products = json.info.products
                                var orig_products = orig_data.page.products

                                for (var i = 0; i < products.length; i++) {
                                    if (products[i].relatedColor && Array.isArray(products[i].relatedColor) && products[i].relatedColor.length>0) {
                                        for (var j = 0; j < orig_products.length; j++) {
                                            if (orig_products[j].id == products[i].goods_id) {
                                                orig_products[j].relatedColor = products[i].relatedColor
                                            }
                                        }
                                        for (var k = 0; k < products[i].relatedColor.length; k++) {
                                            var relatedColor = products[i].relatedColor[k]
                                            self.data.spu_data[relatedColor.goods_id] = {
                                                goods_id: relatedColor.goods_id,
                                                sku: relatedColor.goods_sn,
                                                relation_id: relatedColor.goods_relation_id,
                                                name: relatedColor.goods_name,
                                                cat_id: relatedColor.cat_id,
                                                image: relatedColor.goods_thumb
                                            }
                                        }
                                    }
                                }
                                // 获取价格
                                var ids = [];
                                for (var variable in self.data.spu_data) {
                                    ids.push(self.data.spu_data[variable].goods_id)
                                }
                                if(!ids.length) return
                                $.post('/product/getPrices', {goods_ids: ids, t: Date.now()}, function(json) {
                                    if(json.code == 0) {
                                        self.data.price_data = json.info.prices || json.info.price;

                                    }
                                });
                                // console.log('spu_data', self.data.spu_data);
                            }
                        })
                        .always(function() {
                            if (typeof resolve == 'function') {resolve()}
                            // console.log("complete");
                        });
                },
                bind_event: function(opt) {
                    var self = this;
                    $(document).off('click.j-emarsys-recommend-img').on('click.j-emarsys-recommend-img', '.j-emarsys-recommend-img', function() {
                        var $this = $(this).parents('.swiper-slide').index();
                        saSend.click({
                            index: $this + 1,
                            goods_id: opt.goods[$this].id
                        })
                        self.multi_color_ga_addproduct($(this), opt)
                    }).off('click.j-emarsys-recommend-color').on('click.j-emarsys-recommend-color', '.j-emarsys-recommend-color', function() {
                        self.multi_color_ga_addproduct($(this), opt, 'is_color')
                    }).off('click.j-emarsys-recommend-morecolor').on('click.j-emarsys-recommend-morecolor', '.j-emarsys-recommend-morecolor', function() {
                        ga('shein.send',{
                            hitType: 'event',
                            eventCategory: '推荐列表',
                            eventAction: 'ShowMoreColor'
                        })
                    })

                    $('.j-multi-color-img').on('mouseenter.ga-ViewItems-hover', function() {
                        if (!$(this).hasClass('first-active')) {
                            var goods_id = $(this).data('goods_id');
                            var item = self.data.spu_data[goods_id];
                            var sku = item.sku
                            var index = $(this).parents('.j-swiper-slide').index()
                            var params = {
                                id: item.relation_id || sku,
                                name: sku,
                                list:  PageGroup + '-推荐列表-emarsys-RELATED',
                                category: item.cat_id,
                                position: 1000 + index,
                                price: parseFloat(GB_ga_transformPrice(self.data.price_data[goods_id].salePrice.amount))
                            }

                            ga("shein.ec:addImpression", params)

                            GBGaSend({
                                category: '推荐列表',
                                action: 'ViewItems-hover',
                                label: self.data.orig_data.title
                            })
                        }
                        $(this).off('mouseenter.ga-ViewItems-hover')
                    })

                    $('.j-multi-color-img').mouseenter(function(event) {
                        var $this = $(this);
                        var $this_goods_id = $this.data('goods_id');
                        var $this_init_id = $this.data('init_id');
                        var item = self.data.spu_data[$this_goods_id];

                        $('.j-multi-color-ctn-'+$this_init_id+' .j-multi-color-img').removeClass('color-active');
                        $this.addClass('color-active');

                        $('.j-recommend-item-'+$this_init_id).replaceWith(
                            template('recommend_item_art_tpl', {
                                SC: self.data.orig_data,
                                item: item,
                                image: transformImg(item.image),
                                link: SHEIN_W.getGoodsUrl(item.name, item.goods_id, item.cat_id),
                                price: self.data.price_data[$this_goods_id].salePrice.amountWithSymbol,
                                init_id: $this_init_id
                            })
                        )
                    });

                    $('.j-multi-color-span-omit').click(function(event) {
                        $(this).siblings('.j-multi-color-omit-ctn').fadeIn('200');
                    });
                    $('.j-multi-color-omit').mouseleave(function(event) {
                        $(this).children('.j-multi-color-omit-ctn').fadeOut('200');
                    });

                    var color_resize_timeout;
                    $(window).resize(function(event) {
                        if (color_resize_timeout) {
                            clearTimeout(color_resize_timeout)
                        }
                        color_resize_timeout = setTimeout(function() {
                            self.show_related_color();
                        }, 1000);
                    });

                    self.show_related_color();
                },
                show_related_color: function() {
                    var self = this;
                    var item_width = $('.j-recommend-item').width()

                    $('.j-multi-color-omit').hide()
                    $('.j-multi-color-img-show').show()
                    $('.j-multi-color-img-omit').hide()

                    $('.j-multi-color-ctn').each( function(index, element) {

                        var color_show = $(element).find('.j-multi-color-img-show')
                        if (color_show.length > 1 && item_width <= 95) {
                            $(element).find('.j-multi-color-img-show:nth-child(1)~.j-multi-color-img-show').hide()
                            $(element).find('.j-multi-color-omit').show()
                        } else if(color_show.length > 2 && item_width <= 115) {
                            $(element).find('.j-multi-color-img-show:nth-child(2)~.j-multi-color-img-show').hide()
                            $(element).find('.j-multi-color-omit').show()
                        } else if(color_show.length > 3 && item_width <= 140) {
                            $(element).find('.j-multi-color-img-show:nth-child(3)~.j-multi-color-img-show').hide()
                            $(element).find('.j-multi-color-omit').show()
                        } else if(color_show.length > 4) {
                            $(element).find('.j-multi-color-img-show:nth-child(4)~.j-multi-color-img-show').hide()
                            $(element).find('.j-multi-color-omit').show()
                        }

                        var color_omit = $(element).find('.j-multi-color-img-omit')
                        if (color_omit.length > 1 && item_width <= 95) {
                            $(element).find('.j-multi-color-img-omit:nth-child(1)~.j-multi-color-img-omit').show()
                        } else if(color_omit.length > 2 && item_width <= 115) {
                            $(element).find('.j-multi-color-img-omit:nth-child(2)~.j-multi-color-img-omit').show()
                        } else if(color_omit.length > 3 && item_width <= 140) {
                            $(element).find('.j-multi-color-img-omit:nth-child(3)~.j-multi-color-img-omit').show()
                        } else if(color_omit.length > 4) {
                            $(element).find('.j-multi-color-img-omit:nth-child(4)~.j-multi-color-img-omit').show()
                        }
                    })

                    // if (!isShowOmit || GB_isMobile_she()) {
                    // 	$('.j-multi-color-omit-ctn').hide()
                    // }
                },
                multi_color_ga_addproduct: function($this, opt, is_color) {
                    var self = this;
                    var goods_id = $this.data('goods_id');
                    var index = $this.parents('.swiper-slide').index();
                    var val = self.data.spu_data[goods_id]
                    var val_price = self.data.price_data[goods_id];
                    var orig_data_goods = self.data.orig_data.page.products[index]
                    if(typeof(ga) == 'function') {
                        var spu = orig_data_goods.c_relation_id=="undefined"||orig_data_goods.c_relation_id=="null"?"":orig_data_goods.c_relation_id;
                        var _PageGroup = typeof(PageGroupEmarsysList) == 'undefined' ? PageGroup : PageGroupEmarsysList
                        ga('shein.ec:addProduct', {
                            'id': spu||orig_data_goods.c_sku,
                            'name': (val&&val.sku)||orig_data_goods.c_sku,
                            'category': (val&&val.cat_id)||orig_data_goods.c_catid,
                            'position': opt.key*1000 + index,
                            'price': (val_price&&val_price.salePrice.usdAmount.replace('.00',''))||orig_data_goods.price
                        });
                        ga('shein.ec:setAction', 'click', {list: _PageGroup + '-推荐列表-emarsys-' + opt.type});
                        ga('shein.send', 'event', '推荐列表', is_color?'SelectColor':'ClickItems', opt.titleEn || opt.title);


                    }
                }
            }

            function getPrices(SC){
                var goodIdArray = [];
                for(var i = 0;i<SC.page.products.length;i++){
                    goodIdArray.push(SC.page.products[i].id);
                }
                var _promise = $.post('/product/getPrices', {goods_ids: goodIdArray, t: Date.now()}, function() {});
                return _promise;
            }
            function getAllRank(SC){
                return $.ajax({
                    url: '/product/getAllRank',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        goods_ids: SC.page.products.map(function(item) {return item.id})
                    })
                })
            }
            // emasys推荐列表
            var emarsys_reco_also_view = {};
            var emarsysList_swiper_opt;
            GB_emarsysList = function(opt, cb1, cb2) {
                if(document.getElementById(opt.el)) {

                    emarsys_reco_also_view.logic = opt.type
                    emarsys_reco_also_view.container = opt.el;
                    emarsys_reco_also_view.template = "category_recommender_template";
                    emarsys_reco_also_view.limit = 25;
                    emarsys_reco_also_view.success = function(SC, render) {
                        GB_SHEIN_emarsys_cacheData.render = render
                        if(SC.page.products.length<14) {
                            // 数量少于14使用内部emasys数据推荐回调
                            if(typeof(cb1) == 'function') { cb1(); }
                        } else {
                            var currency = SHEIN_W.getCookie('currency') || SHEIN_W.getCookie('default_currency') || 'USD'
                            var symbol_left = {"USD":{"currency_id":"2","code":"USD","symbol_left":"US$","symbol_right":"","decimal_place":"2","value":"1.00000000","date_modified":"2018-09-03 11:00:59","status":"0","default":"1","country_flag":"images/currency/USD.jpg","dec_point":".","thousands_sep":",","title":"US Dollar"},"EUR":{"currency_id":"3","code":"EUR","symbol_left":"","symbol_right":"€","decimal_place":"2","value":"0.87184000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/EUR.jpg","dec_point":",","thousands_sep":".","title":"Euro"},"GBP":{"currency_id":"1","code":"GBP","symbol_left":"GBP£","symbol_right":"","decimal_place":"2","value":"0.78009200","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/GBP.jpg","dec_point":".","thousands_sep":",","title":"Pound Sterling"},"CAD":{"currency_id":"10","code":"CAD","symbol_left":"CA$","symbol_right":"","decimal_place":"2","value":"1.32187700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/CAD.jpg","dec_point":".","thousands_sep":",","title":"Canadian Dollar"},"NOK":{"currency_id":"15","code":"NOK","symbol_left":"N.Kr.","symbol_right":"","decimal_place":"2","value":"8.48176400","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/NOK.jpg","dec_point":".","thousands_sep":",","title":"Norwegian Krone"},"AED":{"currency_id":"24","code":"AED","symbol_left":"AED.","symbol_right":"","decimal_place":"2","value":"3.67280000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/AED.jpg","dec_point":".","thousands_sep":",","title":"United Arab Emirates Dirham"},"INR":{"currency_id":"30","code":"INR","symbol_left":"₹","symbol_right":"","decimal_place":"0","value":"71.00000000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/INR.jpg","dec_point":"","thousands_sep":",","title":"Indian Rupee"},"SEK":{"currency_id":"16","code":"SEK","symbol_left":"","symbol_right":"kr","decimal_place":"0","value":"9.25925900","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SEK.jpg","dec_point":"","thousands_sep":" ","title":"Swedish Krona"},"SAR":{"currency_id":"19","code":"SAR","symbol_left":"S.R.","symbol_right":"","decimal_place":"2","value":"3.75040000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SAR.jpg","dec_point":".","thousands_sep":",","title":"Saudi Arabian Riyal"},"PLN":{"currency_id":"18","code":"PLN","symbol_left":"zł","symbol_right":"","decimal_place":"2","value":"3.75093800","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/PLN.jpg","dec_point":",","thousands_sep":".","title":"Polish Zloty"},"HKD":{"currency_id":"12","code":"HKD","symbol_left":"HK$","symbol_right":"","decimal_place":"2","value":"7.93021400","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/HKD.jpg","dec_point":".","thousands_sep":",","title":"Hongkong Dollar"},"MXN":{"currency_id":"14","code":"MXN","symbol_left":"$MXN","symbol_right":"","decimal_place":"2","value":"19.49317700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/MXN.jpg","dec_point":".","thousands_sep":",","title":"Mexican Peso"},"DKK":{"currency_id":"17","code":"DKK","symbol_left":"D.Kr.","symbol_right":"","decimal_place":"2","value":"6.49772600","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/DKK.jpg","dec_point":",","thousands_sep":".","title":"Danish Krona"},"JPY":{"currency_id":"9","code":"JPY","symbol_left":"JPY¥","symbol_right":"","decimal_place":"0","value":"112.35955100","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/JPY.jpg","dec_point":"","thousands_sep":",","title":"Japanese Yen"},"BRL":{"currency_id":"21","code":"BRL","symbol_left":"R$","symbol_right":"","decimal_place":"2","value":"4.05450000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/BRL.jpg","dec_point":",","thousands_sep":"","title":"Brazil Reais"},"SGD":{"currency_id":"22","code":"SGD","symbol_left":"S$","symbol_right":"","decimal_place":"2","value":"1.38677000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/SGD.jpg","dec_point":".","thousands_sep":",","title":"Singapore Dollar"},"RUB":{"currency_id":"8","code":"RUB","symbol_left":"","symbol_right":"руб.","decimal_place":"0","value":"68.96551700","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/RUB.jpg","dec_point":"","thousands_sep":" ","title":"Russian Ruble"},"QAR":{"currency_id":"25","code":"QAR","symbol_left":"QR.","symbol_right":"","decimal_place":"2","value":"3.65000000","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/QAR.jpg","dec_point":".","thousands_sep":",","title":"Qatar Riyal"},"NZD":{"currency_id":"28","code":"NZD","symbol_left":"$NZ.","symbol_right":"","decimal_place":"2","value":"1.52811700","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/NZD.jpg","dec_point":".","thousands_sep":",","title":"New Zealand Dollar"},"BHD":{"currency_id":"27","code":"BHD","symbol_left":"BD.","symbol_right":"","decimal_place":"2","value":"0.37800000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/BHD.jpg","dec_point":".","thousands_sep":",","title":"Bahrain Dinar"},"KWD":{"currency_id":"23","code":"KWD","symbol_left":"K.D.","symbol_right":"","decimal_place":"2","value":"0.30250000","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/KWD.jpg","dec_point":".","thousands_sep":",","title":"Kuwait Dinar"},"AUD":{"currency_id":"11","code":"AUD","symbol_left":"AU$","symbol_right":"","decimal_place":"2","value":"1.40706300","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/AUD.jpg","dec_point":".","thousands_sep":",","title":"Australian Dollar"},"CHF":{"currency_id":"13","code":"CHF","symbol_left":"CHF$","symbol_right":"","decimal_place":"2","value":"0.98087300","date_modified":"2018-09-03 11:00:58","status":"0","default":"0","country_flag":"images/currency/CHF.jpg","dec_point":",","thousands_sep":".","title":"Switzerland Francs"},"TWD":{"currency_id":"29","code":"TWD","symbol_left":"NT$","symbol_right":"","decimal_place":"0","value":"31.05590100","date_modified":"2018-09-03 11:00:59","status":"0","default":"0","country_flag":"images/currency/TWD.jpg","dec_point":"","thousands_sep":",","title":"New Taiwan Dollar"}}[currency].symbol_left
                            SC.currency = currency
                            SC.symbol_left = symbol_left
                            SC.title = opt.title || ''                      // 标题
                            SC.titleEn = opt.titleEn || ''                  //英文标题
                            SC.key = opt.key || 1                           // 位置
                            SC.hasName = opt.hasName || false               // 是否展示商品名称
                            SC.isTitleCenter = opt.isTitleCenter || false   // title居中
                            SC.transformImg = transformImg
                            SC.GB_SHEIN_transform_webp_img = GB_SHEIN_transform_webp_img
                            SC.getGoodsUrl = SHEIN_W.getGoodsUrl
                            $.when(getPrices(SC)).done(function(data){
                                if(data.code == 0){
                                    for(var i = 0;i<SC.page.products.length;i++){
                                        var id = SC.page.products[i].id;
                                        if(data.info.prices[id]){
                                            SC.page.products[i].amountWithSymbol = data.info.prices[id].salePrice.amountWithSymbol;
                                        }else{//不做处理
                                            SC.page.products[i].amountWithSymbol = GB_transform_price_symbol(SC.page.products[i]['c_price_'+SC.currency.toLowerCase()],SC.currency) ;
                                        }
                                    }
                                }
                            }).always(function(){
                                $.when(getAllRank(SC)).done(function(data){
                                    if(data && data.info){
                                        SC.commentInfo = data.info
                                        if (opt.is_spu) {
                                            emarsys_product_spu.start(SC).then(function(){
                                                GB_SHEIN_emarsys_cacheData[emarsys_reco_also_view.goods_id] = SC
                                                render(SC)
                                                $('.j-dt-recommend1').removeClass('she-visibility0')
                                                var _opts = {
                                                    el: opt.el,
                                                    type: opt.type,
                                                    key: opt.key || 1,
                                                    title: opt.title || '',
                                                    titleEn: opt.titleEn || '',
                                                    goods: SC.page.products,
                                                    num:5,
                                                    imgRange: opt.imgRange || 15
                                                }
                                                emarsysList_swiper_opt = _opts;
                                                var _Swiper = initSwiper(_opts)
                                                emarsys_product_spu.bind_event(_opts);
                                                if(typeof(cb2) == 'function') {
                                                    cb2({
                                                        swiper: _Swiper,
                                                        opt: _opts,
                                                        gaCache: gaCache
                                                    });
                                                }
                                                $(window).scroll()
                                                console.log('emarsys: true.')
                                            })
                                        } else {
                                            GB_SHEIN_emarsys_cacheData[emarsys_reco_also_view.goods_id] = SC
                                            render(SC)
                                            $('.j-dt-recommend1').removeClass('she-visibility0')
                                            var _opts = {
                                                el: opt.el,
                                                type: opt.type,
                                                key: opt.key || 1,
                                                title: opt.title || '',
                                                titleEn: opt.titleEn || '',
                                                goods: SC.page.products,
                                                num: 5,
                                                imgRange: opt.imgRange || 15
                                            }
                                            emarsysList_swiper_opt = _opts;
                                            var _Swiper = initSwiper(_opts)
                                            if(typeof(cb2) == 'function') {
                                                cb2({
                                                    swiper: _Swiper,
                                                    opt: _opts,
                                                    gaCache: gaCache
                                                });
                                            }
                                            $(window).scroll()
                                            console.log('emarsys: true.')
                                        }
                                    }
                                })
                                $('.j-list-recommend').show();
                            });
                            // console.log('SC', SC);
                        }
                    }
                    emarsys_reco_arr.push(emarsys_reco_also_view)
                }
            }

            // 购物车命令初始化及发送
            GB_cartInitSend = function(cb) {


                // 非购物车
                if(typeof(cart_module) != 'undefined') {
                    $.when(cart_module.cartPromise).done(function(json) {
                        setNormalSend(cb)
                        cart_items = json.info && json.info.carts && json.info.carts.map(function(item) {
                            return {
                                item: item.product.goods_id,
                                price: GB_ga_transformPrice(item.totalPrice.amount)*1,
                                quantity: parseFloat(item.quantity)
                            }
                        }) || [];
                        ScarabQueue.push(['cart',cart_items]);
                        if(typeof PageGroup !== 'undefined' && PageGroup === '商品详情页') {
                            doSend(GB_SHEIN_goods_detail.data.cur_goods_id)
                        } else {
                            doSend()
                        }
                    })
                } else {
                    $.get('/cart/checkcart', function(json){
                        setNormalSend(cb)
                        cart_items = json.info.carts.map(function(item) {
                            return {
                                item: item.product.goods_id,
                                price: GB_ga_transformPrice(item.totalPrice.amount)*1,
                                quantity: parseFloat(item.quantity)
                            }
                        })
                        ScarabQueue.push(['cart',cart_items]);
                        doSend()
                    })
                }


            }

            // 发送go命令
            function doSend(goods_id) {
                emarsys_reco_also_view.goods_id = goods_id
                // 详情页
                if(typeof PageGroup !== 'undefined' && PageGroup === '商品详情页' && goods_id) {
                    if(GB_SHEIN_emarsys_cacheData.render && GB_SHEIN_emarsys_cacheData[goods_id]) {
                        GB_SHEIN_emarsys_cacheData.render(GB_SHEIN_emarsys_cacheData[goods_id])
                        initSwiper(emarsysList_swiper_opt)
                        $('.j-dt-recommend1').removeClass('she-visibility0')
                        return
                    }
                    ScarabQueue.push(['view', goods_id])
                }


                if(typeof emarsys_reco_arr !== 'undefined' && emarsys_reco_arr.length) {
                    emarsys_reco_arr.forEach(function(item) {
                        ScarabQueue.push(["recommend", {
                            logic: item.logic,
                            containerId: item.container,
                            templateId: item.template,
                            limit: item.limit,
                            success: item.success
                        }]);
                    })
                }
                ScarabQueue.push(['go']);
            }
            window.GB_emarsys_doSend = doSend

            function setNormalSend(cb) {
                // 发送recommend命令


                // 发送setEmail命令
                if(typeof userInfoEmail !== 'undefined' && userInfoEmail !== '') {
                    ScarabQueue.push(['setEmail',userInfoEmail]);
                }
                // 详情页，发送view命令


                // 实体分类页跟属性页


                //支付成功页

            }

            GB_emarsysQuickSend = function(id){
                ScarabQueue.push(['view',String(id)]);
                ScarabQueue.push(['go']);
            }
            $(function(){

                GB_cartInitSend()

            })


            // 埋点--------------------------------
            var emarsysGa = {
                analysis_view: function(val, index, opt, _arrList,_eventName) {
                    var self = this;
                    if(gaCache[opt.key] && gaCache[opt.key][index]) return;
                    // 详情页 yar may aslo like 上报
                    saSend.addPayload({
                        index: index + 1,
                        goods_id: val.id,
                        eventName: _eventName
                    })
                    if(typeof(ga) == 'function' && val) {
                        var spu = val.c_relation_id=="undefined"||val.c_relation_id=="null"?"":val.c_relation_id;

                        var _PageGroup = typeof(PageGroupEmarsysList) == 'undefined' ? PageGroup : PageGroupEmarsysList

                        ga('shein.ec:addImpression', {
                            'id': spu||val.c_sku,
                            'name': val.c_sku,//val.goods_name,
                            'list': _PageGroup + '-推荐列表-emarsys-'+ opt.type,
                            'category': val.c_catid,
                            'position': opt.key*1000 + index,
                            'price': val.price
                        });

                        _arrList.push(index+1+':'+val.id)

                        if(index%opt.num == (opt.num-1) || index == (opt.goods.length-1)) {

                            ga('shein.send', 'event', '推荐列表', 'ViewItems', opt.titleEn || opt.title);



                            saSend.view()
                        }

                        if(gaCache[opt.key]) {
                            gaCache[opt.key][index] = true;
                        }
                    }
                },
                analysis_clickGap: function(val, index, opt) {
                    var self = this;
                    if(typeof(ga) == 'function' && val) {

                        var spu = val.c_relation_id=="undefined"||val.c_relation_id=="null"?"":val.c_relation_id;


                        var _PageGroup = typeof(PageGroupEmarsysList) == 'undefined' ? PageGroup : PageGroupEmarsysList


                        ga('shein.ec:addProduct', {
                            'id': spu||val.c_sku,
                            'name': val.c_sku,//val.goods_name,
                            // 'list': PageGroup + '-推荐列表',
                            'category': val.c_catid,
                            'position': opt.key*1000 + index,
                            'price': val.price
                        });
                        ga('shein.ec:setAction', 'click', {list: _PageGroup + '-推荐列表-emarsys-'+ opt.type});
                        ga('shein.send', 'event', '推荐列表', 'ClickItems', opt.titleEn || opt.title);


                    }
                },
                // Next / Prev
                analysis_clickArrow: function(type, opt) {
                    var self = this;
                    if(typeof(ga) == 'function'){
                        // ga('shein.send',{
                        //     hitType: 'event',
                        //     eventCategory: '推荐列表',
                        //     eventAction: 'Click' + type + 'Arrow',
                        //     eventLabel: opt.titleEn || opt.title
                        // })
                    }
                },
            }

            var sdkEvent = {
                trackIdCache: {},
                prePayload: [],
                addPayload: function(item, index, page) {
                    var goods_id

                    var trackId = this.trackIdCache[goods_id] = 'rec-' + GB_SDK.guid()
                    index++
                    var paylaod = {
                        e_t: 'rec',
                        e_t_l: 'view',
                        e_gid: item.id,
                        e_gpos: index,
                        e_gp: page,
                        e_cid: goods_id,
                        e_s_id: trackId
                    }
                    this.prePayload.push(paylaod)
                    if(index % 6 == 0) {
                        this.view()
                    }
                },
                view: function() {
                    if(this.prePayload.length) {
                        GB_SDK.report(this.prePayload)
                        this.prePayload = []
                    }
                },
                click: function(item, index, page) {
                    var goods_id


                    var trackId = this.trackIdCache[goods_id]
                    index++
                    var paylaod = {
                        e_t: 'rec',
                        e_t_l: 'click',
                        e_gid: item.id,
                        e_gpos: index,
                        e_gp: page,
                        e_cid: goods_id,
                        e_s_id: trackId
                    }
                    GB_SDK.report(paylaod)
                }
            }
            var saSend = {
                prePayload: [],
                getEventName: function($item) {//还是无法解决多个emarsis推荐同时存在的情况
                    var name =$item.closest('.j-emarsys-goodsd[data-title]').attr('data-title') || 'customers_also_viewed';
                    name = name.trim().toLowerCase().replace(/\s/g,'_');
                    return name;
                },
                addPayload: function(params){
                    this.prePayload.push(params);
                },
                posKey:'',
                getPosKey:function(eventName){
                    // if(!this.posKey){
                    switch(eventName){
                        case 'you_may_also_like':this.posKey = 'YouMayAlsoLike';break;
                        case 'customers_also_viewed':this.posKey = 'CustomersAlsoViewed';break;
                        case 'best_sellers':this.posKey = 'BestSellers';break;
                        case 'recommendations_for_you':this.posKey = 'RecommendationsForYou';break;
                        case 'recently_viewed':this.posKey = 'RecentlyViewed';break;
                        default:break;
                    }
                    //页面类型判断
                    var pageStr = '';
                    switch(SaPageInfo.page_id){
                        case 16:pageStr = 'shein_pc_search_';break;
                        case 13:pageStr = 'shein_pc_category_';break;
                        case 3:pageStr = 'shein_pc_category_';break;
                        case 2:pageStr = 'shein_pc_category_';break;
                        case 21:pageStr = 'shein_pc_category_';break;
                        case 7:pageStr = 'shein_pc_product_detail_';break;
                        case 8:
                            pageStr = 'shein_pc_cart_';

                            break;
                        case 6:pageStr = 'shein_pc_order_';break;
                        case 10:pageStr = 'shein_pc_order_';break;
                        case 10:pageStr = 'shein_pc_order_';break;
                        case 10:pageStr = 'shein_pc_order_';break;
                        default:break;
                    }
                    this.posKey = pageStr+this.posKey;
                    // }
                    return this.posKey;
                },
                view: function() {
                    if(this.prePayload.length) {
                        var dataGroup = {};//对数据进行分类，可能同时存在两种事件的数据
                        this.prePayload.forEach(function(value,index,arr){
                            if(value.eventName){
                                if(!dataGroup[value.eventName]){
                                    dataGroup[value.eventName] = [];
                                }
                                dataGroup[value.eventName].push(value.index + '`' + value.goods_id)
                            }
                        });
                        for(var eventName in dataGroup){
                            var traceid = gbExposeTraceid('setComponent', {
                                componentName: eventName
                            })
                            var ABTInfo = getABTInfoByPosKey(this.getPosKey(eventName));
                            sa('send',{
                                    activity_name: 'expose_' + eventName,
                                    activity_param: $.extend({
                                        goods_list: dataGroup[eventName].join(','),
                                        traceid: traceid
                                    },ABTInfo)
                                }
                            );
                        }
                        this.prePayload = []
                    }
                },
                click: function(params) {
                    var eventName =params.eventName;
                    var ABTInfo = getABTInfoByPosKey(this.getPosKey(eventName));
                    var traceid = gbExposeTraceid('getComponent', {
                        componentName: eventName
                    })
                    sa('send',{
                            activity_name: 'click_' + eventName,
                            activity_param: $.extend({
                                goods_list: params.index + '`' + params.goods_id,
                                traceid: traceid
                            },ABTInfo)
                        }
                    );

                    gbExposeTraceid('setProduct', {
                        goods_id: params.goods_id,
                        traceid: traceid
                    })
                }
            }

            // ga scroll-- start
            $(window).scroll(function() {
                $('.j-emarsys-goodsd:not([viewed=true])').each(function(){
                    var $this = $(this);
                    var eventName = "";
                    if($this.css('visibility') == 'hidden' || $this.height() == 0) return;
                    if ($this.offset().top+$this.height()-$(window).scrollTop()-$(window).height()<0) {0
                        $this.attr({'viewed':true})
                        var re = emarsysCache[$this.data('key')] || {};
                        var _arrList = [];
                        for (var i=0; i<re.num && i<re.goods.length; i++) {
                            if(!eventName){
                                eventName = saSend.getEventName($this);
                            }
                            emarsysGa.analysis_view(re.goods[i], i, re, _arrList,eventName);
                            gaCache[re.key][i] = true;

                        }
                    }
                })
            });

        })()

    }


</script>

<script>
    var S_TopBannerGA={ //加载topbanner完才触发
        viewTopBanner:function(label,pitPos,url){
            ga('shein.send', 'event', 'Banner', 'ViewBanner', label, {
                nonInteraction: true
            });
            //不曝光了
            //sa('send',{'activity_name':'expose_top_banner','activity_param':{content_list:pitPos+'`'+url}});
        },
        PromoTopBanner:function(label){
            ga('shein.ec:addPromo', {'name': label});
        },
        ClickSearch: function() {
            GBGaSend({
                category: '导航栏',
                action: 'ClickSearch'
            })
        },
        EditSearch: function() {
            GBGaSend({
                category: '导航栏',
                action: 'EditSearch'
            })
        },
        ClickSearchIcon: function(val) {
            // if(val.length > 0) {
            //   GBGaSend({
            //     category: '导航栏',
            //     action: 'GoToResult',
            //     label: val + '&ClickIcon'
            //   })
            // } else {
            //   GBGaSend({
            //     category: '导航栏',
            //     action: 'GoToResult',
            //     label: '0&ClickIcon'
            //   })
            // }
        },
        menuHover:function(_item){
            var name = _item.find('.j-category-title').text();
            var url = _item.find('.j-category-title').attr('href');
            var pitPos = _item.prevAll().length+1;
            sa('send',{'activity_name':'expose_navigation_menu','activity_param':{navbar_hole:pitPos,navbar_content:name,navbar_url:url}});
            this.bannerHover(_item);
        },
        bannerHover:function(_item){
            var name = _item.find('.j-category-title').text();
            var pitPos = _item.prevAll().length+1;
            var banners = '';
            var banner_urls = '';
            _item.find('.info-pic-inner a').each(function(index){
                banners += (index+1)+'`'+$(this).attr('title')+',';
                banner_urls += (index+1)+'`'+$(this).attr('href')+',';
            })
            if(banners.length>0){
                banners = banners.substring(0,banners.length-1);
                sa('send',{'activity_name':'expose_navigation_banner','activity_param':{navbar_hole:pitPos,navbar_content:name,banner:banners,banner_url:banner_urls}});
            }
        },
    }
    $(function () {
        function parseIciIcn(search) {
            // 运营配制时链接中 ici 或 icn中会包含 & 符号 或者 没有ici或icn字段，需做单独解析
            var regx = /icn=(.*)&ici=(.*)/,
                results = regx.exec(search),
                ici = 0 , icn = 0

            if(results) {
                icn = results[1]
                ici = results[2]
            } else {
                results = SHEIN_W.queryString.parse(search)
                if(results.ici) ici = results.ici
                if(results.icm) icn = results.icn
            }
            return ici + ' ' + icn
        }

        function ecAddProduct(params, action) {
            ga("shein.ec:addProduct", params)
            ga("shein.ec:setAction", action)
        }

        $(document).on('click', 'img.ga_promo .j-icon-del', function () {
            var label = SHEIN_W.queryString.parse($('.top-banner').find('a').attr('href')).ici
            handleBanner({
                action: 'CloseBanner',
                name: label
            })
        });

        $(document).on('click', '.init-j-top-banner a', function (e) {
            if(e.target.tagName !='A')return;
            var pitPos = $(this).parents('.banner-wrapper').prevAll().length+1;
            var href = $(this).attr('href');
            sa('send',{'activity_name':'click_top_banner','activity_param':{content_list:pitPos+'`'+href}});
        });

        $(document).on('click','.header-nav .j-change-lang',function(e){
            var lang = $(this).data('lang');
            sa('send',{'activity_name':'click_top_site_sub_site','activity_param':{sub_site:lang}});
        });
        $(document).on('click','.header-nav .j-change-currency',function(e){
            var currency = $(this).data('currency');
            sa('send',{'activity_name':'click_top_site_money_type','activity_param':{money_type:currency}});
        });
        $(document).on('click','.header-nav .j-free-shipping a',function(e){
            var href = $(this).attr('href');
            sa('send',{'activity_name':'click_top_site_activity','activity_param':{activity_content:href}});
        });
        $(document).on('click','.header-nav .sa_account .member-menu a',function(e){
            var pitPos = $(this).parent().prevAll().length+1;
            var url = $(this).attr('href');
            var text = url.substring(url.lastIndexOf('/')+1);
            sa('send',{'activity_name':'click_top_site_account','activity_param':{account_content:pitPos+'`'+text}});
        });

        $(document).on('click', '.j-online-help', function () {
            GBGaSend({
                category: '导航栏',
                action: 'ClickOnlineHelp'
            })
        });

        $(document).on('click', '.j-ga-submit-ticket', function () {
            GBGaSend({
                category: '导航栏',
                action: 'ClickSubmitATicket'
            })
        });

        $(document).on('click', '.j-ga-submit-faq', function () {
            GBGaSend({
                category: '导航栏',
                action: 'ClickFAQ'
            })
        });

        $(document).on('click', '.j-ga-submit-call', function () {
            GBGaSend({
                category: '导航栏',
                action: 'ClickCallReservation'
            })
        });

        $(document).on('click', '.j-header-search-input', function () {
            // GBGaSend({
            //   category: '导航栏',
            //   action: 'EditSearch'
            // })
        });

        $('input[name=header-search]').on('keyup', function (e) {
            // var val = $(this).val().trim()
            // if (e.keyCode == '13') {
            //   if (val.length > 0) {
            //     GBGaSend({
            //       category: '导航栏',
            //       action: 'GoToResult',
            //       label: val + '&ClickEnter'
            //     })
            //   } else {
            //     GBGaSend({
            //       category: '导航栏',
            //       action: 'GoToResult',
            //       label: '0&ClickEnter'
            //     })
            //   }
            // }
        });

        $(document).on('click', '.j-fast-wish', function () {
            GBGaSend({
                category: '导航栏',
                action: 'ClickWishlist'
            })
            var param = $(this).find('span').text();
            sa('send',{'activity_name':'click_top_site_collect','activity_param':{collect_count:param}});
        });
        $(document).on('click', '.j-fast-cart .icon-bag', function () {
            GBGaSend({
                category: '导航栏',
                action: 'ClickBag'
            })
            var param = $(this).text();
            sa('send',{'activity_name':'click_top_site_bag','activity_param':{bag_goods_count:param,type:1}});
        });
        $(document).on('click','.header-nav .view-bag' ,function(e){
            var param = $('.j-fast-cart .cart-num').text();
            sa('send',{'activity_name':'click_top_site_bag','activity_param':{bag_goods_count:param,type:2}});
        });
        $(document).on('click', '.j-hbag-box', function (e) {
            var $this = $(this),
                $target = $(e.target), action, label,
                $item = $target.parents('.c-bag-item'),
                sku = $item.attr('sku'),
                params = {
                    id: $item.attr('spu'),
                    name: sku,
                    quantity: $item.attr('quantity'),
                    category: $item.attr('cat_id'),
                    price: GB_ga_transformPrice($item.attr('price')),
                }

            if ($target.hasClass('goods-name')) {
                action = 'ClickItems'
                label = sku
            } else if ($target.hasClass('icon-delate')) {
                ecAddProduct(params, 'remove')
                action = 'ClickDelete'
                label = sku
            } else if ($target.hasClass('j-a-view-bag')) {
                action = 'ClickViewBag'
            } else if ($target.hasClass('j-hbag-sign-in')) {
                action = 'ClickSignin'
            }
            if(action) {
                GBGaSend({
                    category: '快捷购物车',
                    action: action,
                    label: label
                })
            }
        });

        $(document).on('click', '.j-navbar-list a', function () {
            // var label = $(this).attr('title')
            var href = $(this).attr('href')
            var vcRegx = /.+-vc-(\d+).+/
            var cRegx = /.+-c-(\d+).+/
            var cat_id = vcRegx.exec(href) || cRegx.exec(href)
            var e_l_n = ''

            href = href.split('?')[1]
            // var results = SHEIN_W.queryString.parse(href)
            var label = parseIciIcn(href)

            if(cat_id) {
                cat_id = cat_id[1]
                e_l_n = cat_id
            }
            GB_SDK.report({
                e_l_n: e_l_n,
                e_t: 'list',
                e_t_l: 'start'
            })
            //sa三级栏目上报逻辑
            var name = $(this).attr('title');
            var param = '';
            var url = $(this).attr('href');
            if($(this).parent().hasClass('j-navbar-list')){//一级分类
                var pitPos = $(this).parent().prevAll().length+1;
                sa('send',{'activity_name':'click_navigation_menu','activity_param':{navbar_hole:pitPos,navbar_content:name,navbar_url: url}});
            }else{
                var topMenuDom = $(this).parents('.j-navbar-list').find('.j-category-title');
                var pitPos_topMenu = topMenuDom.parent().prevAll().length+1;
                var name_topMenu = topMenuDom.attr('title');
                if($(this).parent().hasClass('info-pic-inner')){//下拉框右侧banner
                    var pitPos = $(this).parent().prevAll().length+1;
                    sa('send',{'activity_name':'click_navigation_banner','activity_param':{navbar_hole:pitPos_topMenu,navbar_content:name_topMenu,banner:pitPos+'`'+name,banner_url:url}});
                }else if($(this).parent().get(0).tagName == 'H6'){//二级分类
                    var pitPos = $(this).parent().prevAll().filter('h6:not(".other-line")').length+1;
                    sa('send',{'activity_name':'click_navigation_menu','activity_param':{navbar_hole:pitPos_topMenu,navbar_content:name_topMenu,first_menu_hole:pitPos,first_menu_content: name,first_menu_url:url}});
                }else{//三级分类
                    var prevSiblings = $(this).parent().prevAll().filter(':not(".other-line")');
                    var pitPos = 1;
                    //得到三级分类位置
                    for(var i = 0; i <= prevSiblings.length-1;i++){
                        if(prevSiblings[i].tagName == 'H6'){
                            pitPos = i+1;
                            break;
                        }
                    }
                    //得到二级分类位置
                    var pitPos_secMenu = $(prevSiblings[i]).prevAll().filter('h6:not(".other-line")').length+1;
                    var name_secMenu = $(prevSiblings[i]).find('a').attr('title');
                    sa('send',{'activity_name':'click_navigation_menu','activity_param':{navbar_hole:pitPos_topMenu,navbar_content:name_topMenu,first_menu_hole:pitPos_secMenu,first_menu_content:name_secMenu,second_menu_hole: pitPos,second_menu_content: name,second_menu_url:url}});
                }
            }


        });
        $('.header-nav .c-navbar .j-navbar-list').hover(function(e){
            clearTimeout(S_TopBannerGA.hoverTimeout);
            var item = $(this);
            S_TopBannerGA.hoverTimeout = setTimeout(function(){S_TopBannerGA.menuHover(item);},1000);
        },function(){
            clearTimeout(S_TopBannerGA.hoverTimeout);
        });
        $(document).on('click', '.j-app-icon .iconfont', function () {
            GBGaSend({
                category: 'footer',
                action: 'ClickIcon',
                label: $(this).data('type')
            })
        });

        $(document).on('click', '.ft-left-list a', function () {
            GBGaSend({
                category: 'footer',
                action: 'ClickInfo',
                label: $(this).text()
            })
        });


    });
</script>


<script>
    var thisHREF=encodeURIComponent(document.referrer);
    var thisURL=encodeURIComponent(document.URL);
    $(function(){
        $.ajax({
            type:'get',
            dataType: 'jsonp',
            jsonp: 'callback',
            data:'urlfrom='+thisHREF+'&urlcurrent='+thisURL,
            url:'/index.php?model=origin&action=init',
            success:function(json){
                if(json){
                    if(json.result == 1 ){
                        $("#wholesale_newsletter").show();
                    }
                }
            }
        });
    })

</script>
<link type='text/css' href="//count.shein.com/none.css" rel="stylesheet">

<!-- RU站新增RTBhouse营销代码 -->

</body>
</html>
