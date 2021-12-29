<!DOCTYPE html>
<html lang="zh-EN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/bootstrap.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/swiper.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/animate.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/font_2461737_iw5mgbjsy8.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/hover-min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/video-js.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/share.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/base1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/common1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/index1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/aboutus1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/news_list1.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/album_list.css">
<script src="{pboot:sitedomain}/style/js/jquery.min.js"></script>
<script src="{pboot:sitedomain}/style/js/swiper.min.js"></script>
<script src="{pboot:sitedomain}/style/js/bootstrap.min.js"></script>
<script src="{pboot:sitedomain}/style/js/count.js"></script>
<script src="{pboot:sitedomain}/style/js/video.min.js"></script>
<script src="{pboot:sitedomain}/style/js/social-share.min.js"></script>
<script src="{pboot:sitedomain}/style/js/swiper.animate1.0.3.min.js"></script>
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/baguetteBox.min.css">
<script src="{pboot:sitedomain}/style/js/baguetteBox.min.js"></script>
</head>
<body>
<!-- 头部 -->
<div class="headsbox">
  <div class="heads">
    <div class="container">
      <div class="row justify-content-between align-items-center headsbig">
        <div class="headlogo"> <a href="{pboot:sitedomain}/" class="headlogo_box">
          <div class="headlogo_boximg"> <img src="{pboot:sitelogo}" alt="{pboot:companyname}"> </div>
          </a> </div>
        <div class="headnav">
          <div class="headnav_item {pboot:if(0=='{sort:tcode}')} active {/pboot:if}"> <a href="{pboot:sitedomain}/" class="headnav_itema "> <span>首页</span> </a> </div>
          {pboot:nav}
          <div class="headnav_item {pboot:if('[nav:scode]'=='{sort:tcode}')} active {/pboot:if}"> <a href="[nav:link]" class="headnav_itema"> <span>[nav:name]</span> {pboot:if([nav:soncount]>0)}<i class="iconfont icon-xiangshang"></i>{/pboot:if} </a> {pboot:if([nav:soncount]>0)}
            <div class="headnav_qtxl">
              <div class="headnav_qtxl_box"> {pboot:2nav parent=[nav:scode]} <a href="[2nav:link]" class="headnav_qtxl_boxitem">[2nav:name]</a> {/pboot:2nav} </div>
            </div>
            {/pboot:if} </div>
          {/pboot:nav} </div>
        <div class="headqt">
          <div class="headqt_ss"> <i class="iconfont icon-sousuo"></i>
            <div class="headqt_ssdw">
              <form method="get" action="{pboot:scaction}" class="headqt_ssdwbox">
                <input type="text" name="keyword" value="" id="top-keywords" class="headqt_ssdwboxsr" placeholder="搜索">
                <input type="submit" name="" id="" class="headqt_ssdwboxtj" value="">
              </form>
            </div>
          </div>
          <div class="mb_btn"> <i class="iconfont icon-daohang"></i> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 占位 -->
<div class="headsbox_zw"></div>
<script>
        // 头部产品下拉
        $(".headnav_item.on").hover(function () {
            $(this).children(".headnav_cqxl").stop().slideDown()
        }, function () {
            $(this).children(".headnav_cqxl").stop().slideUp()
        })
        // 语言
        $(".headqt_yy").hover(function () {
            $(this).children(".headqt_yydw").stop().slideDown()
        }, function () {
            $(this).children(".headqt_yydw").stop().slideUp()
        })
        // 头部其它下拉
        $(".headnav_item").hover(function () {
            $(this).children('.headnav_qtxl').stop().slideDown()
        }, function () {
            $(this).children('.headnav_qtxl').stop().slideUp()
        })
        // 搜索

        $('.headqt_ss i').click(function () {
            if ($(this).hasClass('icon-sousuo')) {
                $(this).removeClass('icon-sousuo')
                $(this).addClass('icon-guanbi')
                $(this).siblings('.headqt_ssdw').toggleClass('on')
            } else {
                $(this).addClass('icon-sousuo')
                $(this).removeClass('icon-guanbi')
                $(this).siblings('.headqt_ssdw').toggleClass('on')
            }
        })
    </script>
<!-- 内页背景 -->
{pboot:sort scode={sort:tcode}}
<div class="nybg" style="background-image: url([sort:pic]);">
    <div class="container">
        <div class="row align-items-center nybgt">
            <div class="nybgt_txt">
                <div class="nybgt_txth"> [sort:name] </div>
                <div class="nybgt_txtx"></div>
            </div>
        </div>
        <div></div>
    </div>
    <div class="nybgb">
        <div class="container">
            <div class="row align-items-center nybgbbig">
                <div class="nymbx">{pboot:position}</div>
            </div>
        </div>
    </div>
</div>
{/pboot:sort}
<!-- 数值 -->
<div class="shuzhi">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-5 numCount ">
            <div class="col shuzhi_item">
                <div class="shuzhi_itembox">
                    <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="0" data-endval="11"
                            data-speed="1.5" data-decimals="0" id="mumC5">11</span> <sup></sup> </div>
                    <div class="shuzhi_itembox"> 国内外生产基地 </div>
                </div>
            </div>
            <div class="col shuzhi_item">
                <div class="shuzhi_itembox">
                    <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="1000" data-endval="20"
                            data-speed="1.5" data-decimals="0" id="mumC1">20</span> <sup>M</sup> </div>
                    <div class="shuzhi_itembox"> 年生产能力（千伏安时） </div>
                </div>
            </div>
            <div class="col shuzhi_item">
                <div class="shuzhi_itembox">
                    <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="0" data-endval="105"
                            data-speed="1.5" data-decimals="0" id="mumC2">105</span> <sup></sup> </div>
                    <div class="shuzhi_itembox">拥有电池生产线</div>
                </div>
            </div>
            <div class="col shuzhi_item">
                <div class="shuzhi_itembox">
                    <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="400000" data-endval="900"
                            data-speed="1" data-decimals="0" id="mumC3">900</span> <sup>+</sup> </div>
                    <div class="shuzhi_itembox"> 累计获得国际认证专利 </div>
                </div>
            </div>
            <div class="col shuzhi_item">
                <div class="shuzhi_itembox">
                    <div class="shuzhi_itemboxt"> <span class="numCX" data-startval="0" data-endval="2000"
                            data-speed="1.5" data-decimals="0" id="mumC4">2000</span> <sup>+</sup> </div>
                    <div class="shuzhi_itembox"> 产品种类 </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var countCXArr = [];
    var countCX = function () {
        $('.numCount').each(function (i, dom) {
            if (countCXArr[i] && countCXArr[i] === true) {
                return;
            }
            var sT;
            var ncTop;
            sT = $(window).scrollTop();
            ncTop = $(dom).offset().top;
            var id, decimals, startVal, endVal, duration;
            if (sT > ncTop - $(window).height() && sT < ncTop) {
                $(dom).find('.numCX').each(function () {
                    id = $(this).attr('id');
                    decimals = $(this).attr('data-decimals'),
                        startVal = $(this).attr('data-startVal'),
                        endVal = $(this).attr('data-endVal'),
                        duration = $(this).attr('data-speed');
                    new CountUp(id, startVal, endVal, decimals, duration, {
                        useEasing: true, //效果
                        separator: '' //数字分隔符
                    }).start();
                    // target：目标元素id, startVal：你想要开始的值, endVal：你想要到达的值, decimals：小数位数，默认值为0, duration：动画持续时间为秒，默认值为2, options：选项的可选对象
                    countCXArr[i] = true;
                })
            }
        })
    }
    countCX();
    $(window).on("scroll", function () {
        countCX();
    })
</script>
<!--公司说明  -->
<div class="gssm">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 gssmbox">
            <div class="gssmboxl"> <img src="{pboot:sitedomain}/style/images/a1.jpg" alt="{pboot:sitecompanyname}">
                <!-- 定位 -->
                <div class="gssmboxdw" style="background-image: url({pboot:sitedomain}/style/images/a1.jpg);"> </div>
            </div>
            <div class="gssmboxr">
                <div class="gssmboxr_txt">
                    <div class="gssmboxr_txth"> 公司简介 </div>
                    <div class="gssmboxr_txtct">
                        <div class="swiper-container gssm_container">
                            <div class="swiper-wrapper gssm_wrapper">
                                <div class="swiper-slide gssm_slide">
                                    {content:content}
                                </div>
                            </div>
                            <!-- Add Scroll Bar -->
                            <div class="swiper-scrollbar gssm_scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var gssmSwiper = new Swiper('.gssm_container', {
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: true,
        scrollbar: {
            el: '.gssm_scrollbar',
            draggable: true,
        },
        mousewheel: true,
    });
</script>
<!-- 公司展示 -->
<div class="gszs">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 gszsbox">
            <div class="gszsboxl">
                <div class="gszsboxllb">
                    <div class="gszsboxllb_title"> 企业风采 </div>
                    <div class="gszsboxllb_ct">
                        <div class="swiper-container gallery-thumbs gszsl_thumbs">
                            <div class="swiper-wrapper gszsl_wrapper">
                                <div class="swiper-slide gszsl_slide">
                                    <a target="_blank" class="gszsl_slidea">
                                        <i class="iconfont icon-double-circle"></i>
                                        <span>文化建设</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gszsboxr">
                <!-- 定位 -->
                <div class="gszsboxrdw" style="background-image: url({pboot:sitedomain}/style/images/aboutbg02.jpg.png);">
                </div>
                <div class="gszsboxr_ct">
                    <div class="swiper-container gallery-top gszsr_top">
                        <div class="swiper-wrapper gszsr_wrapper baguetteBoxOne">
                            {pboot:list scode=13 num=20}
                            <div class="swiper-slide gszsr_slide">
                                <a href="[list:ico]" class="gszsr_slidea">
                                    <img src="[list:ico]" alt="[list:title]">
                                </a>
                            </div>
                            {/pboot:list}
                        </div>
                    </div>
                    <!-- 定位 -->
                    <div class="gszsboxr_per"> <i class="iconfont icon-xiangzuo"></i> </div>
                    <div class="gszsboxr_next"> <i class="iconfont icon-xiangyou-copy"></i> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var gszslGalleryThumbs = new Swiper('.gszsl_thumbs', {
        slidesPerView: 'auto',
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            0: { //当屏幕宽度大于等于320
                spaceBetween: 0,
                slidesPerView: 1,
                slidesPerColumnFill: 'row',
                slidesPerColumn: 6,
            },
            768: { //当屏幕宽度大于等于320
                spaceBetween: 0,
                slidesPerView: 1,
                slidesPerColumnFill: 'row',
                slidesPerColumn: 6,
            },
            992: { //当屏幕宽度大于等于768 
                spaceBetween: 0,
                slidesPerView: 1,
                slidesPerColumnFill: 'row',
                slidesPerColumn: 6,
            },
            1200: { //当屏幕宽度大于等于1280
                spaceBetween: 0,
                slidesPerView: 1,
                slidesPerColumnFill: 'row',
                slidesPerColumn: 6,
            }
        }
    });
    var gszsrGalleryTop = new Swiper('.gszsr_top', {
        spaceBetween: 0,
        navigation: {
            nextEl: '.gszsboxr_next',
            prevEl: '.gszsboxr_per',
        },
        thumbs: {
            swiper: gszslGalleryThumbs
        }
    });
    $('.gszsl_thumbs .gszsl_slide').mouseover(function () {
        var gszslIndex = $(this).index()
        gszsrGalleryTop.slideTo(gszslIndex, 500, false);
    })
    $(window).resize(function () {
        var winw = $(window).width();
        var gssmboxw = $('.gssmbox').width()
        var gssmboxdw = (winw - gssmboxw) / 2
        var gssmboxl = $('.gssmboxl').width()
        $('.gssmboxdw').css('width', gssmboxdw + gssmboxl)
        $('.gszsboxrdw').css('width', gssmboxdw + gssmboxl)
    })
    $(window).resize();
   
</script>
<!-- 公司附加展示 -->
<div class="gsfjzs">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 gsfjzsbox">
            <div class="gsfjzsboxl">
                <!-- 定位 -->
                <img src="{pboot:sitedomain}/style/images/be22a75484644c1e.jpg" alt="企业文化">
                <div class="gsfjzsboxdw"
                    style="background-image: url({pboot:sitedomain}/style/images/be22a75484644c1e.jpg);"> </div>
            </div>
            <div class="gsfjzsboxr">
                <div class="gsfjzsboxr_ct">
                    <div class="gsfjzsboxr_ctitem">
                        <h6>企业文化</h6>
                    </div>
                    <div class="gsfjzsboxr_ctitem">
                        {pboot:content id=20}[content:content]{/pboot:content}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(window).resize(function () {
        var winw = $(window).width();
        var gssmboxw = $('.gssmbox').width()
        var gssmboxdw = (winw - gssmboxw) / 2
        var gssmboxl = $('.gssmboxl').width()
        $('.gssmboxdw').css('width', gssmboxdw + gssmboxl)
        $('.gszsboxrdw').css('width', gssmboxdw + gssmboxl)
        $('.gsfjzsboxdw').css('width', gssmboxdw + gssmboxl)
    })
    $(window).resize();
</script>
<!-- 公司历史 -->
<div class="gsls" id="gongsils">
    <div class="container">
        <div class="row justify-content-center gsls_title"> 发展历程 </div>
        <div class="row row-cols-1">
            <div class="col gslsct">
                <div class="swiper-container gslsct_container">
                    <div class="swiper-wrapper gslsct_wrapper">
                        {pboot:list scode=15 num=99 order=sorting}
                        <div class="swiper-slide gslsct_slide">
                            <div class="gslsct_slideitem">
                                <div class="gslsct_slideitem_x"> </div>
                                <div class="gslsct_slideitem_sj"> [list:title] </div>
                                <div class="gslsct_slideitem_img">
                                    <div> <img src="[list:ico]" alt="[list:subtitle]"> </div>
                                </div>
                                <div class="gslsct_slideitem_txt">
                                    <p>[list:content drophtml=1 dropblank=1 len=65 more='...']</p>
                                </div>
                            </div>
                        </div>
                        {/pboot:list}
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination gslsct_pagination"></div>
                </div>
                <!-- 定位按钮 -->
                <div class="gslsct_per"> <i class="iconfont icon-xiangzuo"></i> </div>
                <div class="gslsct_next"> <i class="iconfont icon-xiangyou-copy"></i> </div>
                <!-- 定位白线 -->
                <div class="gslsct_xl"> </div>
                <div class="gslsct_xr"> </div>
            </div>
        </div>
    </div>
</div>
<script>
    var gslsctSwiper = new Swiper('.gslsct_container', {
        spaceBetween: 0,
        slidesPerView: 2,
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.gslsct_next',
            prevEl: '.gslsct_per',
        },
        breakpoints: {
            768: { //当屏幕宽度大于等于320
                spaceBetween: 0,
                slidesPerView: 3,
            },
            992: { //当屏幕宽度大于等于768 
                spaceBetween: 0,
                slidesPerView: 4,
            },
            1200: { //当屏幕宽度大于等于1280
                spaceBetween: 0,
                slidesPerView: 4,
            }
        }
    });
    $(window).resize(function () {
        var gsls = $('.gslsct_slide').width()
        var gslsx = (gsls / 2) - 8
        $(".gslsct_xl").css('width', gslsx)
        $(".gslsct_xr").css('width', gslsx)
    });
    $(window).resize()
</script>
<!-- 公司荣誉 -->
<div class="gsry">
    <div class="container">
        <div class="row justify-content-between  align-items-center gsrytitle">
            <div class="gsrytitlel"> 荣誉资质 </div>
            
        </div>
        <div class="row gsryct">
            <!-- 定位 -->
            <div class="gsry_next"> <i class="iconfont icon-xiangyou-copy"></i> </div>
            <div class="gsry_prev"> <i class="iconfont icon-xiangzuo"></i> </div>
            <div class="swiper-container gsry_container">
                <div class="swiper-wrapper gsry_wrapper baguetteBoxTwo">
                    {pboot:list scode=16 num=99 order=sorting}
                    <div class="swiper-slide gsry_slide"> 
                        <a href="[list:ico]" class="gsry_slidea"> 
                            <img  src="[list:ico]" alt="[list:title]">
                        </a>
                    </div>
                    {/pboot:list}
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var gsrySwiper = new Swiper('.gsry_container', {
        slidesPerView: 2,
        spaceBetween: 16,
        navigation: {
            nextEl: '.gsry_next',
            prevEl: '.gsry_prev',
        },
        breakpoints: {
            768: { //当屏幕宽度大于等于320
                spaceBetween: 20,
                slidesPerView: 3,
            },
            992: { //当屏幕宽度大于等于768 
                spaceBetween: 16,
                slidesPerView: 4,
            },
            1200: { //当屏幕宽度大于等于1280
                spaceBetween: 16,
                slidesPerView: 4,
            }
        }
    });
    window.onload = function () {
        baguetteBox.run('.baguetteBoxOne')
            baguetteBox.run('.baguetteBoxTwo')
        }
</script>
<!-- 内页新闻 -->

<!-- 底部 -->
<div class="foot">
    <div class="container">
        <div class="row row-cols-3 foot_title">
            <a href="tel:{pboot:companymobile}">
                <div class="foot_title_item">
                    <div class="foot_title_itemi"> <i class="iconfont icon-mobilephone_fill"></i> </div>
                    <div class="foot_title_itemtxt">
                        <p>{pboot:companymobile}</p>
                        <span>电话</span>
                    </div>
                </div>
            </a>
            <a href="mailto:{pboot:companyemail}">
                <div class="foot_title_item">
                    <div class="foot_title_itemi"> <i class="iconfont icon-mail"></i> </div>
                    <div class="foot_title_itemtxt">
                        <p>{pboot:companyemail}</p>
                        <span>邮箱</span>
                    </div>
                </div>
            </a>
            {pboot:sort scode=11}
            <a href="[sort:link]" target="_blank">
                <div class="foot_title_item">
                    <div class="foot_title_itemi"> <i class="iconfont icon-message_fill"></i> </div>
                    <div class="foot_title_itemtxt">
                        <p>{pboot:companyemail}</p>
                        <span>留言</span>
                    </div>
                </div>
            </a>
            {/pboot:sort}
        </div>
        <div class="row foot_ct">
            <div class="col-12 col-lg-auto foot_cl"> <a class="foot_cllogo">
                    <div class="foot_cllogoimg"> <img src="{pboot:sitelogo}" alt="{pboot:companyname}"> </div>

                </a>
                <div class="foot_fx"> </div>
            </div>
            <div class="col-12 col-lg foot_ctbox">
                <div class="row-cols-1  row-cols-lg-4 row justify-content-end justify-content-md-start">
                    {pboot:nav num=4}
                    <div class="foot_ctbox_item col">
                        <div class="foot_ctbox_itemtit"> <a href="[nav:link]">[nav:name]</a> <i
                                class="iconfont iconplus-line foot_ctbox_itemtitbtn"></i> </div>
                        <div class="foot_ctbox_itemct">
                            {pboot:2nav parent=[nav:scode]}
                            <a href="[2nav:link]" class="foot_ctbox_itemcta">[2nav:name]</a>
                            {/pboot:2nav}
                        </div>
                    </div>
                    {/pboot:nav}

                </div>
            </div>
        </div>
        <div class="row justify-content-sm-between foot_db justify-content-center">
            <div class="foot_dbl">
                {pboot:sitecopyright}
                <a href="https://beian.miit.gov.cn" target="_blank">{pboot:siteicp}</a>
            </div>
	 <div class="fr"><a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML地图</a> 技术支持：<a href="https://www.adminbuy.cn/" target="_blank" title="网站模板">网站模板</a></div>
        </div>
    </div>
</div>
<script>
    $('.foot_ctbox_itemtitbtn').click(function () {
        // 替换字体图标类名
        $(this).toggleClass('iconminus iconplus-line')
        $('.foot_ctbox_itemct:visible').slideUp().siblings('.foot_ctbox_itemtit').find('i').addClass('iconplus-line').removeClass('iconminus')
        var subnav1 = $(this).parents('.foot_ctbox_item').find('.foot_ctbox_itemct')
        // console.log(subnav.is(':hidden'));
        if (subnav1.is(':hidden')) {
            subnav1.slideDown()
        } else {
            subnav1.slideUp()
        };
    })
</script>

<!-- 移动侧边 -->

<div class="a_txt">
    <div class="div1 a_closed"></div>
    <div class="div2"> <a href="javascript:;" class="a_closed"> <img src="{pboot:sitedomain}/style/images/close.png"
                width="22"></a> </div>
    <div class="div3">
        <ul>
            <li>
                <div class="mblink_item">
                    <a href="{pboot:sitedomain}/" class="mblink_itema">
                        <div class="mblink_itematxt">首页</div>
                    </a>
                </div>
                <div class="a_txt2"> </div>
            </li>

            {pboot:nav}
            <li>
                <div class="mblink_item">
                    <a href="[nav:link]" class="mblink_itema">
                        <div class="mblink_itematxt">[nav:name]</div>
                    </a>
                    {pboot:if([nav:soncount]>0)}
                    <i class="mblink_itemi iconfont icon-jia"></i>
                    {/pboot:if}
                </div>
                {pboot:if([nav:soncount]>0)}
                <div class="a_txt2">
                    {pboot:2nav parent=[nav:scode]}
                    <a href="[2nav:link]">[2nav:name]</a>
                    {/pboot:2nav}
                </div>
                {/pboot:if}
            </li>
            {/pboot:nav}

            <div class="clear"></div>
        </ul>
    </div>
</div>
<script>
    //点击逐渐展开移动端导航
    $(".mb_btn").click(
        function () {
            $(".a_txt").stop(true, false).delay(0).animate({
                width: "100%",
                height: "100%"
            }, 0);
            $(".a_txt").find(".div1").stop(true, false).delay(0).animate({
                opacity: "0.95"
            }, 500);
            $(".a_txt").find(".div2").stop(true, false).delay(0).animate({
                opacity: "1"
            }, 500);
            $(".a_txt").find(".div3").stop(true, false).delay(0).animate({
                right: "0"
            }, 500);
        }
    )
    //点击关闭，逐渐隐藏
    $(".a_closed").click(
        function () {
            $(".a_txt").stop(true, false).delay(500).animate({
                width: "0",
                height: "0"
            }, 0);
            $(".a_txt").find(".div1").stop(true, false).delay(0).animate({
                opacity: "0"
            }, 500);
            $(".a_txt").find(".div2").stop(true, false).delay(0).animate({
                opacity: "0"
            }, 500);
            $(".a_txt").find(".div3").stop(true, false).delay(0).animate({
                right: "-80%"
            }, 500);
        }
    )
    // 点击展开关闭子导航
    $('.mblink_item>i').click(function () {
        // 替换字体图标类名
        $(this).toggleClass('icon-jia')
        $(this).toggleClass('icon-jian')
        $('.a_txt2:visible').slideUp().siblings('.mblink_item').find('i').addClass('icon-jian')
        var subnav = $(this).parents('li').find('.a_txt2')
        // console.log(subnav.is(':hidden'));
        if (subnav.is(':hidden')) {
            subnav.slideDown()
        } else {
            subnav.slideUp()
        };
    })
</script>
<!--右侧客服-->
<div class="cndns-right">

    <div class="cndns-right-meau meau-top" id="top-back"> <a href="javascript:" class="cndns-right-btn"
            onclick="topBack()"> <span class="demo-icon icon-up-open-big">&#xe818;</span></a> </div>
</div>
<div id="top-backs" class="daotop">
    <div> <a href="javascript:" class="cndns-right-btn" onclick="topBack()"> <span class="iconfont">&#xe609;</span>
        </a> </div>
</div>
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/zxkf.css">
<script type="text/javascript">
    //置顶图标显示
    $('.cndns-right').hide()
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".cndns-right").fadeIn();
        } else {
            $(".cndns-right").fadeOut();
        }
    })
    //置顶事件
    function topBack() {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
    }
    $('.cndns-right .cndns-right-btn:first').css({
        border: "none"
    });
</script>
</div>
</body>

</html><?php return array (
  0 => 'D:/phpstudy_pro/WWW/pboot02.com/template/default/head.html',
  1 => 'D:/phpstudy_pro/WWW/pboot02.com/template/default/foot.html',
); ?>