</section>
<footer>
    <div id="footer"<?php echo ' style="background:rgba('.kratos_option('footer_color').')"'; ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer-list text-center">
                    <p class="kratos-social-icons"><?php
                        echo (!kratos_option('social_weibo'))?'':'<a class="weibo-tip" target="_blank" rel="nofollow" href="'.kratos_option('social_weibo').'"><i class="fab fa-weibo fa-2x" ></i></a>';
                        echo (!kratos_option('social_mail'))?'':'<a class="mail-tip" target="_blank" rel="nofollow" href="'.kratos_option('social_mail').'"><i class="fas fa-envelope fa-2x"></i></a>';
                        echo (!kratos_option('social_twitter'))?'':'<a class="twitter-tip" target="_blank" rel="nofollow" href="'.kratos_option('social_twitter').'"><i class="fab fa-twitter fa-2x"></i></a>';
                        echo (!kratos_option('social_facebook'))?'':'<a class="facebook-tip" target="_blank" rel="nofollow" href="'.kratos_option('social_facebook').'"><i class="fab fa-facebook-official fa-2x"></i></a>';
                        echo (!kratos_option('social_linkedin'))?'':'<a class="linkedin-tip" target="_blank" rel="nofollow" href="'.kratos_option('social_linkedin').'"><i class="fa fa-linkedin-square fa-2x"></i></a>';
                        echo (!kratos_option('social_github'))?'':'<a class="github-tip" target="_blank" rel="nofollow" href="'.kratos_option('social_github').'"><i class="fab fa-github fa-2x"></i></a>';
                        echo (!kratos_option('show_rss'))?'':'<a class="rss-tip" title="RSS订阅" target="_blank" rel="nofollow" href="';
                        if(kratos_option('show_rss')){ bloginfo('url');
                            echo '/feed"><i class="fas fa-rss fa-2x"></i></a>';}
                        //B站logo
                        if(kratos_option('social_bilibili'))
                        {
                            echo '<a class="bilibili-tip" target="_blank" rel="nofollow" href="https://space.bilibili.com/'.kratos_option('social_bilibili').'"><img style="height: 30px;top:-9px;position:relative;left:-4px;" title="bilibili" src="';
                            bloginfo('template_url');
                            echo '/static/images/ua/bilibili.png"></a>';
                        }?>

                    </p>
                    <p> © 2017 - <?php echo date('Y'); ?> <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.<br><?php _e('已在风雨中度过','moedog'); ?> <span id="span_dt_dt">Loading...</span><br>Theme <a href="https://xiaoyou66.com/%e6%9c%ac%e7%ab%99%e4%b8%bb%e9%a2%98%e6%ad%a3%e5%bc%8f%e5%bc%80%e6%ba%90%ef%bc%81/" target="_blank" rel="nofollow">Kratos</a> Made by <a href="https://www.fczbl.vip" target="_blank" rel="nofollow">moedog</a> Modified by <a href="https://xiaoyou66.com" target="_blank" rel="nofollow">XiaoYou</a><?php if(kratos_option('sitemap')) echo ' <br><a href="'.get_option('home').'/sitemap.html" target="_blank">Sitemap</a>'; ?>
                        <?php if(kratos_option('icp_num')) echo '<br><a href="https://beian.miit.gov.cn" rel="external nofollow" target="_blank">'.kratos_option('icp_num').'</a>';
                        if(kratos_option('gov_num')) echo '<br><a href="'.kratos_option('gov_link').'" rel="external nofollow" target="_blank"><i class="govimg"></i>'.kratos_option('gov_num').'</a>'; ?>
                        <br>
                    </p>
                    <div>
                        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1276246943'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/z_stat.php%3Fid%3D1276246943%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
                    </div>
                    <div style="margin-bottom: 0.5em;">
                        <a href="https://996.icu"><img src="https://img.shields.io/badge/link-996.icu-red.svg" alt="996.icu" /></a>
                    </div>
                    <div title="MySSL 安全签章" id="myssl_seal" onclick="window.open('https://myssl.com/seal/detail?domain=www.xgxdmx.com','MySSL安全签章','height=800,width=470,top=0,right=0,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no')" style="text-align: center;display: inline-block;margin: 10px">
                    	<img src="https://sealres.myssl.com/seal/img/2x/seal.svg?domain=www.xgxdmx.com" alt="MySSL 安全签章" style="width: 100px; height: auto; cursor: pointer"/>
                    </div>
                    <div title="Vultr" id="Vultr" onclick="window.open('https://www.vultr.com/?ref=8374185-6G')" style="text-align: center;display: inline-block;margin: 10px">
                    	<img src="https://www.vultr.com/media/logo_ondark.svg" alt="Vultr" style="width: 135px;height: auto;cursor: pointer;"/>
                </div>
            </div>
        </div>
        <div class="cd-tool text-center">
            <div class="<?php if(kratos_option('cd_weixin')) echo 'gotop-box2 '; ?>gotop-box"><div class="gotop-btn"><span class=""><i class="fas fa-chevron-up"></i></span></div></div>
            <?php if(kratos_option('cd_weixin')) echo '<div id="wechat-img" class="wechat-img"><span class="fa fa-weixin"></span><div id="wechat-pic"><img src="'.kratos_option('weixin_image').'"></div></div>'; ?>
            <?php if(kratos_option('bibo_open')) {?>
                <?php if(kratos_option('bibo_pagelink')){?>
                    <div class="bilbili-box">
                        <?php if($_COOKIE['goto_bibo']==1){?>
                            <a href="<?php echo site_url();?>?style=krato"> <span class=""  title="切换风格"><i class="fas fa-exchange-alt"></i></span></a>
                        <?php }else{?>
                            <a href="<?php echo site_url();?>?style=bibo"> <span class=""  title="切换风格"><i class="fas fa-exchange-alt"></i></span></a>
                        <?php }?>
                    </div>
                <?php } ?>
            <?php }?>
            <div class="search-box">
                <span class=""><i class="fas fa-search"></i></span>
                <form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                    <input type="text" name="s" id="search" placeholder="Search..." style="display:none"/>
                </form>
            </div>
        </div>
        <?php if(kratos_option('site_snow')&&(!wp_is_mobile()||wp_is_mobile()&&kratos_option('snow_xb2016_mobile'))){ ?>
            <div class="xb-snow">
                <canvas id="Snow" data-count="<?php echo kratos_option('snow_xb2016_flakecount'); ?>" data-dist="<?php echo kratos_option('snow_xb2016_mindist'); ?>" data-color="<?php echo kratos_option('snow_xb2016_snowcolor'); ?>" data-size="<?php echo kratos_option('snow_xb2016_size'); ?>" data-speed="<?php echo kratos_option('snow_xb2016_speed'); ?>" data-opacity="<?php echo kratos_option('snow_xb2016_opacity'); ?>" data-step="<?php echo kratos_option('snow_xb2016_stepsize'); ?>"></canvas>
            </div>
        <?php } ?>
    </div>
</footer>
</div>
</div>
<?php
if (! wp_is_mobile() && kratos_option('openlive2d')) {
    echo '<div class="waifu" >
        <!--提示框 -->
        <div class="waifu-tips" ></div >
        <!--看板娘画布 -->
        <canvas id = "live2d" class="live2d" ></canvas >
        <!--工具栏 -->
        <div class="waifu-tool" >
            <span class="fui-home" ><i class="fas fa-home" aria-hidden="true"></i></span >
            <span class="fui-chat" ><i class="fas fa-comments" aria-hidden="true"></i></span >
            <span class="fui-eye" ><i class="fas fa-sync-alt" aria-hidden="true"></i></span >
            <span class="fui-user" ><i class="fas fa-eye" aria-hidden="true"></i></span >
            <span class="fui-photo" ><i class="fas fa-camera-retro" aria-hidden="true"></i></span >
            <span class="fui-info-circle" ><i class="fas fa-question-circle" aria-hidden="true"></i></span >
            <span class="wifu-moon" ><i class="fas fa-moon" aria-hidden="true"></i></span >
            <span class="fui-cross" ><i class="fas fa-times" aria-hidden="true"></i></span >
        </div >
    </div >
    <script src = "';
    echo  bloginfo('template_url');
    echo '/inc/live2d/waifu-tips.js" ></script ><script src = "';
    echo  bloginfo('template_url');
    echo '/inc/live2d/live2d.js" ></script ><script type = "text/javascript" >initModel("';
    echo  bloginfo('template_url');
    echo '/inc/live2d/waifu-tips.json")</script >';
}
?>
<!--Qplayer-->
<!--动态加载效果-->


<?php wp_footer();if(kratos_option('add_script')){ ?>
    <script type="text/javascript">
        <?php echo kratos_option('add_script'); ?>
    </script>
<?php } ?>

<!--切换标签实现网页标题变化-->
<script type="text/javascript">
    /*自动刷新页面，避免无法访问*/
    var OriginTitile = document.title;
    var titleTime;
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            <?PHP if(kratos_option('title_change')){?>
            document.title = '<?php echo kratos_option('title_change'); ?> ';
            clearTimeout(titleTime);
            <?php }?>
        }
        else {
            <?php if(kratos_option('title_back')){?>
            document.title = '<?php echo kratos_option('title_back'); ?>';
            titleTime = setTimeout(function() {
                document.title = OriginTitile;
            }, 3000);
            <?php } ?>
        }
    });

</script>

<!--       鼠标特效 -->
<script type="text/javascript">
    var a_idx = 0;
    jQuery(document).ready(function($) {
        $("body").click(function(e) {
            var a = new Array(<?php echo kratos_option('click_content'); ?>);
            var $i = $("<span />").text(a[a_idx]);
            a_idx = (a_idx + 1) % a.length;
            var x = e.pageX,
                y = e.pageY;
            $i.css({
                "z-index": 99999999999999999999999999999999999999999999999999999999999999999999999999 ,
                "top": y - 20,
                "left": x,
                "position": "absolute",
                "font-weight": "bold",
                "color": "#ff7bb0"
            });
            $("body").append($i);
            $i.animate({
                    "top": y - 180,
                    "opacity": 0
                },
                1500,
                function() {
                    $i.remove();
                });
        });
    });
</script>
</body>
<script type="text/javascript" src="<?php echo  bloginfo('template_url').'/static/js/crisp.js';?>" async></script>
</html>