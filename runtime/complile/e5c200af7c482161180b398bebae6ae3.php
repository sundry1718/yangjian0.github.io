<!DOCTYPE html>
<html lang="zh-EN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{content:title}-{pboot:sitetitle}</title>
<meta name="keywords" content="{content:keywords}">
<meta name="description" content="{content:description}">
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
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/product_content1.css">
<!-- 产品面包屑 -->
<div class="cpmbx">
  <div class="container">
    <div class="row">
      <div class="cpmbxbox">
        <div class="cpmbxboxnav"> {pboot:position} </div>
        <div class="cpmbxboxfh"> <a href="{content:sortlink}" class="cpmbxboxfha"> <i  class="iconfont icon-fanhui"></i> <span>返回</span> </a> </div>
      </div>
    </div>
  </div>
</div>
<!-- 内部产品详情 -->
<div class="nbcpxq">
  <div class="container">
    <div class="row">
      <div class="nbcpxqbox">
        <div class="nbcpxqboxl">
          <div class="nbcpxqboxl_lb">
            <div class="swiper-container gallery-top nbcpxqt_top swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper nbcpxqt_wrapper">
               {pboot:if('{content:ispics}'==0)}
                <div class="swiper-slide nbcpxqb_slide"> <img src="{content:ico}" alt="{content:title}"> </div>
                {else}
                {pboot:pics num=10 id={content:id}}
                <div class="swiper-slide nbcpxqb_slide swiper-slide-prev"> <img src="[pics:src]" > </div>
                {/pboot:pics}
                {/pboot:if} </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> </div>
            <div class="nbcpxqb"> 
              <!-- 定位按钮 -->
              <div class="nbcpxqb_pre"> <i class="iconfont icon-xiangzuo"></i> </div>
              <div class="nbcpxqb_next swiper-button-disabled"> <i class="iconfont icon-xiangyou-copy"></i> </div>
              <div  class="swiper-container gallery-thumbs nbcpxqb_thumbs">
                <div class="swiper-wrapper nbcpxqb_wrapper"> {pboot:if('{content:ispics}'==0)}
                  <div class="swiper-slide nbcpxqb_slide"> <img src="{content:ico}" alt="{content:title}"> </div>
                  {else}
                  {pboot:pics num=10 id={content:id}}
                  <div class="swiper-slide nbcpxqb_slide"> <img src="[pics:src]" alt=""> </div>
                  {/pboot:pics}
                  {/pboot:if} </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> </div>
            </div>
          </div>
        </div>
        <div class="nbcpxqboxr">
          <div class="nbcpxqboxr_title">
            <div class="nbcpxqboxr_titleh">{content:title}</div>
            <div class="nbcpxqboxr_titleimg"> <i class="iconfont icon-erweima"></i> 
              <!-- 定位 -->
              <div class="nbcpxqboxr_titleimgdw">
                <div class="vm">
                  <div id="output">{pboot:qrcode string={pboot:httpurl}{content:link}}</div>
                  <p>手机扫一扫</p>
                </div>
              </div>
            </div>
          </div>
          <div class="nbcpxqboxr_ct">
            <div class="nbcpxqboxr_ctitem"> {content:description} </div>
          </div>
          <div class="nbcpxqboxr_link">
            <div class="nbcpxqboxr_linka"> {pboot:sort scode=11} <a href="[sort:link]" target="_blank" class="nbcpxqboxr_linkabox"> <i class="iconfont icon-tubiao-"></i> <span>留言</span> </a> {/pboot:sort} </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
        var nbcpxqbGalleryThumbs = new Swiper('.nbcpxqb_thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var nbcpxqtGalleryTop = new Swiper('.nbcpxqt_top', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.nbcpxqb_next',
                prevEl: '.nbcpxqb_pre',
            },
            thumbs: {
                swiper: nbcpxqbGalleryThumbs
            }
        });
        $(".nbcpxqboxr_links").hover(
            function () {
                $('.nbcpxqboxr_linkstdw').stop().slideDown();
            },
            function () {
                $('.nbcpxqboxr_linkstdw').stop().slideUp();
            }
        );
    </script> 
<!-- 内部产品参数 -->
<div class="nbcqcs">
  <div class="container">
    <div class="row nbcqcsbox">
      <div class="col-12 col-lg-9 nbcqcsboxl">
        <div class="nbcqcsboxl_t">
          <div
                            class="swiper-container gallery-thumbs nbcqcst_thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
            <div class="swiper-wrapper nbcqcst_wrapper">
              <div
                                    class="swiper-slide nbcqcst_slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active">
                <div class="nbcqcst_slideitem"> 产品规格表 </div>
              </div>
              <div class="swiper-slide nbcqcst_slide swiper-slide-visible swiper-slide-next">
                <div class="nbcqcst_slideitem"> 产品特性 </div>
              </div>
              <div class="swiper-slide nbcqcst_slide swiper-slide-visible">
                <div class="nbcqcst_slideitem"> 应用领域 </div>
              </div>
              <div class="swiper-slide nbcqcst_slide swiper-slide-visible">
                <div class="nbcqcst_slideitem"> 曲线图片 </div>
              </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> </div>
        </div>
        <div class="nbcqcsboxl_b">
          <div class="swiper-container gallery-top nbcqcsb_top swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper nbcqcsb_wrapper">
              <div class="swiper-slide nbcqcsb_slide" id="maximg">
                <div class="nbcqcsb_slideitem"> {content:ext_guige} </div>
              </div>
              <div class="swiper-slide nbcqcsb_slide">
                <div class="nbcqcsb_slideitem"> {content:ext_texin} </div>
              </div>
              <div class="swiper-slide nbcqcsb_slide">
                <div class="nbcqcsb_slideitem"> {content:ext_lingyu} </div>
              </div>
              <div class="swiper-slide nbcqcsb_slide">
                <div class="nbcqcsb_slideitem"> {content:content} </div>
              </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 nycqlbl">
        <div class="nycqlbldw"> </div>
        <div class="nycqlblbox"> {pboot:nav parent={sort:tcode}}
          <div class="nycqlblbox_item">
            <div class="nycqlblbox_itemtitle"> <a class="nycqlblbox_itemtitlel {pboot:if('[nav:scode]'=='{sort:scode}')} on {/pboot:if}" href="[nav:link]"> <span>[nav:name]</span> </a>
              <div class="nycqlblbox_itemtitlelr "> <span> <i class="iconfont icon-xiangxia"></i></span> </div>
            </div>
            <div class="nycqlblbox_itemct"> {pboot:2nav parent=[nav:scode]} <a href="[2nav:link]"  class="nycqlblbox_itemcta ">[2nav:name]</a> {/pboot:2nav} </div>
          </div>
          {/pboot:nav} </div>
      </div>
    </div>
  </div>
</div>
<script>
        var nbcqcstGalleryThumbs = new Swiper('.nbcqcst_thumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var nbcqcsbGalleryTop = new Swiper('.nbcqcsb_top', {
            spaceBetween: 10,
            thumbs: {
                swiper: nbcqcstGalleryThumbs
            },
            noSwiping: true,
        });
        $('.nycqlblbox_itemtitlelr').click(function () {
            // 替换字体图标类名
            $(this).toggleClass('on on1')
            $('.nycqlblbox_itemct:visible').slideUp().siblings('.nycqlblbox_itemtitle').find('.nycqlblbox_itemtitlelr').removeClass('on').addClass('on1')
            var subnav1 = $(this).parents('.nycqlblbox_item').find('.nycqlblbox_itemct')
            // console.log(subnav.is(':hidden'));
            if (subnav1.is(':hidden')) {
                subnav1.slideDown()
            } else {
                subnav1.slideUp()
            };
        })
    </script> 
<!-- 内部产品特点 -->
<div class="nbcptd">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 nbcptdbox">
      <div class="col nbcptdbox_item">
        <div class="nbcptdbox_itembox">
          <div class="nbcptdbox_itemboximg"> <img src="{pboot:sitedomain}/style/images/p1.png"  alt="强大的性能"> </div>
          <div class="nbcptdbox_itemboxtxt">
            <h6>强大的性能</h6>
            <p> </p>
            <p>可以带来强大的力量</p>
          </div>
        </div>
      </div>
      <div class="col nbcptdbox_item">
        <div class="nbcptdbox_itembox">
          <div class="nbcptdbox_itemboximg"> <img src="{pboot:sitedomain}/style/images/p2.png" alt="免维护"> </div>
          <div class="nbcptdbox_itemboxtxt">
            <h6>免维护</h6>
            <p> </p>
            <p>全密封和免维护</p>
          </div>
        </div>
      </div>
      <div class="col nbcptdbox_item">
        <div class="nbcptdbox_itembox">
          <div class="nbcptdbox_itemboximg"> <img src="{pboot:sitedomain}/style/images/p3.png" alt="出色的使用寿命"> </div>
          <div class="nbcptdbox_itemboxtxt">
            <h6>出色的使用寿命</h6>
            <p> </p>
            <p>比行业平均寿命长</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 其他产品 -->
<div class="rmproduct">
  <div class="container">
    <div class="row justify-content-center rmproduct_title"> 相关产品 </div>
    <div class="row row-cols-1 rmproduct_box"> 
      <!-- 定位按钮 -->
      <div class="rmproduct_next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide"
                    aria-disabled="true"> <i class="iconfont  icon-xiangyou-copy"></i> </div>
      <div class="rmproduct_prev swiper-button-disabled" tabindex="0" role="button"
                    aria-label="Previous slide" aria-disabled="true"> <i class="iconfont icon-xiangzuo"></i> </div>
      <div
                    class="swiper-container rmproduct_container swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-wrapper rmproduct_wrapper" style="transform: translate3d(0px, 0px, 0px);"> {pboot:list scode={sort:tcode} num=8 page=0}
          {pboot:if('[list:id]'!='{content:id}')}
          <div class="swiper-slide"> <a href="[list:link]" target="_blank" class="rmproduct_slidea">
            <div class="rmproduct_slidea_img"> <img src="[list:ico]" alt="[list:title]"> </div>
            <div class="rmproduct_slidea_txt">[list:title]</div>
            </a> </div>
          {/pboot:if}
          {/pboot:list} </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> </div>
    </div>
  </div>
</div>
<script>
        var rmproductSwiper = new Swiper('.rmproduct_container', {
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: {
                nextEl: '.rmproduct_next',
                prevEl: '.rmproduct_prev',
            },
            breakpoints: {
                768: { //当屏幕宽度大于等于320
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                992: { //当屏幕宽度大于等于768 
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                1200: { //当屏幕宽度大于等于1280
                    slidesPerView: 5,
                    spaceBetween: 20,
                }
            }
        });
    </script> 
<!-- 内页其他引导 --> 

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

</html>
<?php return array (
  0 => 'D:/phpstudy_pro/WWW/pboot02.com/template/default/head.html',
  1 => 'D:/phpstudy_pro/WWW/pboot02.com/template/default/foot.html',
); ?>