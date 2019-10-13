<div class="share-wrap" style="display: none;">
    <div class="share-group">
        <a href="javascript:;" class="share-plain twitter" onclick="share('qq');" rel="nofollow">
            <div class="icon-wrap">
                <i class="fa fa-qq"></i>
            </div>
        </a>
        <a href="javascript:;" class="share-plain weixin" onclick="share('qzone');" rel="nofollow">
            <div class="icon-wrap">
                <i class="fa fa-star"></i>
            </div>
        </a>
        <a href="javascript:;" class="share-plain weibo" onclick="share('weibo');" rel="nofollow">
            <div class="icon-wrap">
                <i class="fa fa-weibo"></i>
            </div>
        </a>
        <a href="javascript:;" class="share-plain facebook style-plain" onclick="share('facebook');" rel="nofollow">
            <div class="icon-wrap">
                <i class="fa fa-facebook"></i>
            </div>
        </a>
        <a href="javascript:;" class="share-plain twitter style-plain" onclick="share('twitter');" rel="nofollow">
            <div class="icon-wrap">
                <i class="fa fa-twitter"></i>
            </div>
        </a>
    </div>
    <script type="text/javascript">
    function share(obj){
        var qqShareURL="http://connect.qq.com/widget/shareqq/index.html?";
        var weiboShareURL="http://service.weibo.com/share/share.php?";
        var qzoneShareURL="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?";
        var facebookShareURL="https://www.facebook.com/sharer/sharer.php?";
        var twitterShareURL="https://twitter.com/intent/tweet?";
        var host_url="<?php the_permalink(); ?>";
        var title='<?php  echo str_replace("%22","%2522",rawurlencode('【'.get_the_title().'】')); ?>';
        var qqtitle='<?php echo rawurlencode('【'.get_the_title().'】'); ?>';
        var excerpt='<?php echo rawurlencode(get_the_excerpt()); ?>';
        var wbexcerpt='<?php echo str_replace("%22","%2522",rawurlencode(get_the_excerpt())); ?>';
        var pic="<?php echo share_post_image(); ?>";
        var _URL;
        if(obj=="qq"){
            _URL=qqShareURL+"url="+host_url+"&title="+qqtitle+"&pics="+pic+"&desc=&summary="+excerpt+"&site=vtrois";
        }else if(obj=="weibo"){
            _URL=weiboShareURL+"url="+host_url+"&title="+title+wbexcerpt+"&pic="+pic;
        }else if(obj=="qzone"){
            _URL=qzoneShareURL+"url="+host_url+"&title="+qqtitle+"&pics="+pic+"&desc=&summary="+excerpt+"&site=vtrois";
        }else if(obj=="facebook"){
             _URL=facebookShareURL+"u="+host_url;
        }else if(obj=="twitter"){
             _URL=twitterShareURL+"text="+title+excerpt+"&url="+host_url;
        }
        window.open(_URL);
    }
    </script>
</div>