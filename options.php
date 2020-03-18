<?php
function optionsframework_option_name(){
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/","_",strtolower($themename));
    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework',$optionsframework_settings);
}
function optionsframework_options(){
    $imagepath = get_template_directory_uri().'/inc/theme-options/images/';
    $options = array();
    $options[] = array(
        'name'=>'站点配置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'站点图标',
        'id'=>'site_ico',
        'std'=>'http://cdn.xiaoyou66.com/theme/logo_labe.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>'Gravatar头像服务器地址',
        'desc'=>'不确定请勿更改',
        'id'=>'gravatar_url',
        'std'=>'cn.gravatar.com/avatar',
        'type'=>'text');
    $options[] = array(
        'name'=>'PJAX',
        'desc'=>'是否启用页面PJAX加载,启用后可以实现切换页面音乐继续播放效果',
        'id'=>'page_pjax',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'站点地图',
        'desc'=>'是否启用站点地图(更新文章时生成，需要/目录的写权限)',
        'id'=>'sitemap',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'背景类型',
        'desc'=>'选择您喜欢的背景类型并修改其对应选项',
        'id'=>'background_mode',
        'std'=>'image',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'color'=>'纯色',
            'image'=>'图片','xiaoyou'));
    $options[] = array(
        'name'=>'背景颜色',
        'desc'=>'整个站点背景颜色控制(背景类型选择为纯色才有效，选择纯色后手机端的图片将无法显示)',
        'id'=>'background_index_color',
        'std'=>'#f5f5f5',
        'type'=>'color');
    $options[] = array(
        'name'=>'背景图片',
        'desc'=>'整个站点背景图片控制(背景类型选择为图片才有效)',
        'id'=>'background_index_image',
        'std'=>'http://cdn.xiaoyou66.com/theme/background.jpg',
        'type'=>'text');
    $options[] = array(
        'name'=>'开启手机背景图片',
        'id'=>'openphoneimg',
        'desc'=>'注意：只有当背景类型为图片时手机端背景图片才能正常显示',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'手机端背景图片',
        'desc'=>'勾选开启手机端背景图片后才会显示',
        'id'=>'phone_img',
        'std'=>'http://cdn.xiaoyou66.com/theme/phone-packground.jpg',
        'type'=>'upload');
    $options[] = array(
        'name'=>'主页布局',
        'desc'=>'选择[主页]布局(显示左边栏，无边栏，右边栏)，默认显示右边栏',
        'id'=>"home_side_bar",
        'std'=>"right_side",
        'type'=>"images",
        'options'=>array(
            'left_side'=>$imagepath.'col-left.png',
            'center'=>$imagepath.'col.png',
            'right_side'=>$imagepath.'col-right.png'));
    $options[] = array(
        'name'=>'文章列表布局',
        'desc'=>'选择你喜欢的列表布局，默认显示新式列表布局',
        'id'=>"list_layout",
        'std'=>"new_layout",
        'type'=>"images",
        'options'=>array(
            'old_layout'=>$imagepath.'old-layout.png',
            'new_layout'=>$imagepath.'new-layout.png'));
    $options[] = array(
        'name'=>'主页文章摘要字数',
        'desc'=>'中文建议110，英文建议40，搭配文章内的more标签使用',
        'id'=>'w_num',
        'std'=>'110',
        'type'=>'text');
    $options[] = array(
        'name'=>'分类页面',
        'desc' =>'是否启用分类页面的名称以及简介功能',
        'id'=>'show_head_cat',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'标签页面',
        'desc' =>'是否启用标签页面的名称以及简介功能',
        'id'=>'show_head_tag',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'头像本地上传',
        'desc'=>'是否允许普通用户上传本地头像',
        'id'=>'lo_ava',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'Gutenberg',
        'desc'=>'是否使用Gutenberg编辑器',
        'id'=>'use_gutenberg',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'侧边栏随动',
        'desc'=>'是否启用侧边栏小工具随动功能',
        'id'=>'site_sa',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'评论UA',
        'desc'=>'是否在评论区显示评论者UA信息',
        'id'=>'comment_ua',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'复制弹窗',
        'desc'=>'是否启用复制文章内容后弹窗提醒',
        'id'=>'copy_notice',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'页面伪静态',
        'desc'=>'是否启用自定义页面伪静态功能',
        'id'=>'page_html',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name' => '站点黑白',
        'desc' => '是否启用站点黑白功能(一般常用于悼念日)',
        'id' => 'site_bw',
        'std' => '0',
        'type' => 'checkbox');
    $options[] = array(
        'name'=>'组件配置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'自定义Font Awesome',
        'desc'=>'自定义Font Awesome 4.7字体库链接，留空将从本地加载',
        'id'=>'fa_url',
        'std'=>'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@latest/css/all.min.css',
        'type'=>'text');
    $options[] = array(
        'name'=>'自定义jQuery',
        'desc'=>'自定义jQuery链接，留空将从本地加载',
        'id'=>'jq_url',
        'std'=>'https://cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js',
        'type'=>'text');
    $options[] = array(
        'name'=>'附加JS',
        'id'=>'add_script',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'附加CSS',
        'id'=>'add_css',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'特色图片(仅针对新式布局)',
        'desc'=>'选择你喜欢的默认特色图片(留空使用随机图片)',
        'id'=>'default_image',
        'type'=>'upload');
    $options[] = array(
        'name'=>'微信展示',
        'desc'=>'是否启用微信展示按钮功能',
        'id'=>'cd_weixin',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'微信二维码',
        'desc'=>'上传你的微信二维码图片，尺寸要大于等于150px',
        'id'=>'weixin_image',
        'std'=>'',
        'type'=>'upload');
    $options[] = array(
        'name'=>'微信收款码',
        'desc'=>'上传你的微信收款二维码图片，图片尺寸要大于200px',
        'id'=>'wechatpayqr_url',
        'std'=>'http://cdn.xiaoyou66.com/theme/weixin.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>'支付婊收款码',
        'desc'=>'上传你的支付婊收款二维码图片，图片尺寸要大于200px',
        'id'=>'alipayqr_url',
        'std'=>'http://cdn.xiaoyou66.com/theme/alipay.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>'SEO配置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'关键词',
        'desc'=>'每个关键词之间用英文逗号分割',
        'id'=>'site_keywords',
        'type'=>'text');
    $options[] = array(
        'name'=>'站点描述',
        'id'=>'site_description',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'站点统计(请自行去掉SCRIPT标签)',
        'id'=>'script_tongji',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'顶部配置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'顶部显示模式',
        'id'=>'head_mode',
        'std'=>'pic',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'pic'=>'图片',
            'color'=>'纯色'));
    $options[] = array(
        'name'=>'以下为图片Header的设置',
        'desc'=>'只有顶部显示模式为图片才有效。');
    $options[] = array(
        'name'=>'顶部图片',
        'id'=>'background_image',
        'std'=>'http://cdn.xiaoyou66.com/theme/header.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>'移动端顶部图片(可留空)',
        'id'=>'background_image_mobi',
        'std'=>'http://cdn.xiaoyou66.com/theme/phone_headr.jpg',
        'type'=>'upload');
    $options[] = array(
        'name'=>'图片文字-1(可做文字标题)',
        'id'=>'background_image_text1',
        'std'=>'Kratos',
        'type'=>'text');
    $options[] = array(
        'name'=>'图片文字-2(可做站点描述)',
        'id'=>'background_image_text2',
        'std'=>'一个可爱的二次元主题',
        'type'=>'text');
    $options[] = array(
        'name'=>'移动端菜单显示模式',
        'id'=>'mobi_mode',
        'std'=>'side',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'top'=>'顶部',
            'side'=>'侧栏')
    );
    $options[] = array(
        'name'=>'以下为纯色Header设置',
        'desc'=>'只有顶部显示模式为纯色才有效。');
    $options[] = array(
        'name'=>'Nav Bar颜色',
        'desc'=>'请使用RGBA格式表示，默认22,23,26,.9',
        'id'=>'banner_color',
        'std'=>'22,23,26,.9',
        'type'=>'text');
    $options[] = array(
        'name'=>'移动端侧边栏菜单颜色',
        'desc'=>'请使用RGBA格式表示，默认42,42,42,.9',
        'id'=>'mobi_color',
        'std'=>'42,42,42,.9',
        'type'=>'text');
    $options[] = array(
        'name'=>'图片Logo',
        'desc'=>'高40px，宽最大200px，不设置将显示文字Logo(只在顶部模式为纯色时正常显示)',
        'id'=>'banner_logo',
        'type'=>'upload');
    $options[] = array(
        'name'=>'底部配置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'建站时间',
        'desc'=>'输入你的建站时间，格式MM/DD/YYYY hh:mm:ss',
        'id'=>'createtime',
        'std'=>'03/20/2019 00:00:00',
        'type'=>'text');
    $options[] = array(
        'name'=>'Footer颜色',
        'desc'=>'请使用RGBA格式表示，默认35,40,45,1',
        'id'=>'footer_color',
        'std'=>'35,40,45,1',
        'type'=>'text');
    $options[] = array(
        'name'=>'工信部备案信息',
        'desc'=>'输入您的工信部备案号，针对国际版没有备案信息栏目的功能',
        'id'=>'icp_num',
        'type'=>'text');    
    $options[] = array(
        'name'=>'公安网备案信息',
        'desc'=>'输入您的公安网备案号',
        'id'=>'gov_num',
        'type'=>'text');    
    $options[] = array(
        'name'=>'公安网备案连接',
        'desc'=>'输入您的公安网备案的链接地址',
        'id'=>'gov_link',
        'type'=>'text');
    $options[] = array(
        'name'=>'新浪微博',
        'desc'=>'连接前要带有 http:// 或者 https:// ',
        'id'=>'social_weibo',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'腾讯微博',
        'desc'=>'连接前要带有 http:// 或者 https:// ',
        'id'=>'social_tweibo',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'Twitter',
        'desc'=>'连接前要带有 http:// 或者 https:// ',
        'id'=>'social_twitter',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'FaceBook',
        'desc'=>'连接前要带有 http:// 或者 https:// ',
        'id'=>'social_facebook',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'LinkedIn',
        'desc'=>'连接前要带有 http:// 或者 https:// ',
        'id'=>'social_linkedin',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'GayHub',
        'desc'=>'连接前要带有 http:// 或者 https:// ',
        'id'=>'social_github',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'Mail',
        'desc'=>'连接前要带有mailto: ',
        'id'=>'social_mail',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'bilibili',
        'desc'=>'输入B站uid ',
        'id'=>'social_bilibili',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'文章设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'文章页面布局',
        'desc'=>'选择[文章]页面布局(显示左边栏，无边栏，右边栏)，默认显示右边栏',
        'id'=>"side_bar",
        'std'=>"right_side",
        'type'=>"images",
        'options'=>array(
            'left_side'=>$imagepath.'col-left.png',
            'center'=>$imagepath.'col.png',
            'right_side'=>$imagepath.'col-right.png'));
    $options[] = array(
        'name'=>'版权声明',
        'desc'=>'是否启用 CC BY-SA 4.0 声明',
        'id'=>'post_cc',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'分享按钮',
        'desc'=>'是否启用文章分享功能',
        'id'=>'post_share',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'打赏按钮',
        'desc'=>'是否启用文章打赏功能',
        'id'=>'post_like_donate',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'页面设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'页面布局',
        'desc'=>'选择[页面]布局(显示左边栏，无边栏，右边栏)，默认显示右边栏',
        'id'=>"page_side_bar",
        'std'=>"right_side",
        'type'=>"images",
        'options'=>array(
            'left_side'=>$imagepath.'col-left.png',
            'center'=>$imagepath.'col.png',
            'right_side'=>$imagepath.'col-right.png'));    
    $options[] = array(
        'name'=>'版权声明',
        'desc'=>'是否启用 CC BY-SA 4.0 声明',
        'id'=>'page_cc',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'分享按钮',
        'desc'=>'是否启用页面分享功能',
        'id'=>'page_share',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'打赏按钮',
        'desc'=>'是否启用页面打赏功能',
        'id'=>'page_like_donate',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'轮播设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'主页轮播',
        'desc'=>'是否启用轮播功能',
        'id'=>'kratos_banner',
        'std'=>'0',
        'type'=>'checkbox',);
    $options[] = array(
        'name'=>'注意：',
        'desc'=>'图片宽度建议大于750px，所有图片比例须一致');
    $options[] = array(
        'name'=>'轮播图片-1',
        'id'=>'kratos_banner1',
        'type'=>'upload');
    $options[] = array(
        'name'=>'轮播链接-1',
        'desc'=>'链接可以留空',
        'id'=>'kratos_banner_url1',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'轮播图片-2',
        'id'=>'kratos_banner2',
        'type'=>'upload');
    $options[] = array(
        'name'=>'链接2',
        'desc'=>'链接可以留空',
        'id'=>'kratos_banner_url2',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'轮播图片-3',
        'id'=>'kratos_banner3',
        'type'=>'upload');
    $options[] = array(
        'name'=>'链接3',
        'desc'=>'链接可以留空',
        'id'=>'kratos_banner_url3',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'轮播图片-4',
        'id'=>'kratos_banner4',
        'type'=>'upload');
    $options[] = array(
        'name'=>'链接4',
        'desc'=>'链接可以留空',
        'id'=>'kratos_banner_url4',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'轮播图片-5',
        'id'=>'kratos_banner5',
        'type'=>'upload');
    $options[] = array(
        'name'=>'链接5',
        'desc'=>'链接可以留空',
        'id'=>'kratos_banner_url5',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'邮件设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'SMTP服务',
        'desc'=>'是否启用SMTP邮件发送服务',
        'id'=>'mail_smtps',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'发信人',
        'desc'=>'请填写发件人姓名',
        'id'=>'mail_name',
        'std'=>'Moe-dog Services Team',
        'type'=>'text');
    $options[] = array(
        'name'=>'邮件服务器',
        'desc'=>'请填写SMTP服务器地址',
        'id'=>'mail_host',
        'std'=>'smtp.office365.com',
        'type'=>'text');
    $options[] = array(
        'name'=>'服务器端口',
        'desc'=>'请填写SMTP服务器端口',
        'id'=>'mail_port',
        'std'=>'587',
        'type'=>'text');
    $options[] = array(
        'name'=>'邮箱帐号',
        'desc'=>'请填写邮箱账号',
        'id'=>'mail_username',
        'std'=>'no_reply@fczbl.vip',
        'type'=>'text');
    $options[] = array(
        'name'=>'邮箱密码',
        'desc'=>'请填写邮箱密码',
        'id'=>'mail_passwd',
        'std'=>'123456789',
        'type'=>'password');
    $options[] = array(
        'name'=>'启用SMTPAuth服务',
        'desc'=>'是否启用SMTPAuth服务',
        'id'=>'mail_smtpauth',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'SMTPSecure设置',
        'desc'=>'若启用SMTPAuth服务则填写ssl，若不启用则留空；office365的邮箱请填写STARTTLS',
        'id'=>'mail_smtpsecure',
        'std'=>'STARTTLS',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'站点雪花',
        'desc'=>'是否启用站点雪花功能',
        'id'=>'site_snow',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'移动端是否显示',
        'desc'=>'配置移动端是否显示，默认是',
        'id'=>'snow_xb2016_mobile',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'雪花数量',
        'desc'=>'数值越大雪花数量越多，默认150',
        'id'=>'snow_xb2016_flakecount',
        'std'=>'150',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花大小',
        'desc'=>'为基准值，数值越大雪花越大，默认2',
        'id'=>'snow_xb2016_size',
        'std'=>'2',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花距离',
        'desc'=>'雪花距离鼠标指针的最小值，小于这个距离的雪花将受到鼠标的排斥，默认100',
        'id'=>'snow_xb2016_mindist',
        'std'=>'100',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花速度',
        'desc'=>'为基准值，数值越大雪花速度越快，默认0.5',
        'id'=>'snow_xb2016_speed',
        'std'=>'0.5',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花横移度',
        'desc'=>'为基准值，数值越大雪花横移幅度越大，0为竖直下落，默认1',
        'id'=>'snow_xb2016_stepsize',
        'std'=>'1',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花颜色',
        'desc'=>'请用RGB格式表示，默认255,255,255',
        'id'=>'snow_xb2016_snowcolor',
        'std'=>'255,255,255',
        'type'=>'text');
    $options[] = array(
        'name'=>'雪花不透明度',
        'desc'=>'为基准值，范围0~1，1为不透明，默认0.3',
        'id'=>'snow_xb2016_opacity',
        'std'=>'0.3',
        'type'=>'text');
    $options[] = array(
        'name'=>'注册登录设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'注册登录页面背景',
        'desc'=>'因为默认使用了Bing每日美图API，所以这里只能手动写链接了...',
        'id'=>'login_bak',
        'std'=>'http://cdn.xiaoyou66.com/theme/R9K.jpg',
        'type'=>'text');
    $options[] = array(
        'name'=>'注册登录页面站点图标',
        'id'=>'login_logo',
        'std'=>'http://cdn.xiaoyou66.com/theme/logo.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>'以下为用户注册部分的设置');
    $options[] = array(
        'name'=>'使用密码注册',
        'desc'=>'是否允许用户输入密码注册(免邮箱验证)',
        'id'=>'mail_reg',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'域名限制模式',
        'desc'=>'如果不想限制邮箱，请将此部分设置保持默认。',
        'id'=>'dmode',
        'std'=>'black',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'white'=>'白名单模式',
            'black'=>'黑名单模式','xiaoyou'));
    $options[] = array(
        'name'=>'域名白名单列表(一行一个)',
        'id'=>'dwhite',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'域名黑名单列表(一行一个)',
        'id'=>'dblack',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'错误信息',
        'desc'=>'用户域名被阻止时的提示信息',
        'id'=>'derror',
        'std'=>'本站禁止此域名的邮箱注册，请更换邮箱再试。',
        'type'=>'text');
    $options[] = array(
        'name'=>'以下为用户登录限制部分设置',
        'desc'=>'默认不启用，但是建议手动启用此功能');
    $options[] = array(
        'name'=>'用户登录限制',
        'desc'=>'是否启用登录限制功能(只有启用此项，下面的设置才有效)',
        'id'=>'login_limit',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'登录尝试机会',
        'desc'=>'允许输错密码的次数，默认3',
        'id'=>'allowed_retries',
        'std'=>'3',
        'type'=>'text');
    $options[] = array(
        'name'=>'初始锁定时间',
        'desc'=>'单位秒，不应小于60，默认1200(20分钟)',
        'id'=>'lockout_duration',
        'std'=>'1200',
        'type'=>'text');
    $options[] = array(
        'name'=>'增加锁定时间所需锁定次数',
        'desc'=>'默认3次',
        'id'=>'allowed_lockouts',
        'std'=>'3',
        'type'=>'text');
    $options[] = array(
        'name'=>'增加后的锁定时间',
        'desc'=>'单位秒，不应小于3600，默认86400(24小时)',
        'id'=>'long_duration',
        'std'=>'86400',
        'type'=>'text');
    $options[] = array(
        'name'=>'自动清除锁定IP的时间',
        'desc'=>'单位秒，默认43200(12小时)',
        'id'=>'valid_duration',
        'std'=>'43200',
        'type'=>'text');
    $options[] = array(
        'name'=>'控制Cookie登录',
        'desc'=>'是否控制Cookie登录',
        'id'=>'cookies',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'邮件提醒',
        'desc'=>'是否启用锁定邮件提醒功能(请在下方设置提醒阈值)',
        'id'=>'lockout_notify_m',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'锁定提醒阈值',
        'desc'=>'默认2次(启用上方的邮件提醒功能才有效)',
        'id'=>'notify_email_after',
        'std'=>'2',
        'type'=>'text');
    $options[] = array(
        'name'=>'其他设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'开启音乐播放器插件',
        'desc'=>'将会开启Qplayer音乐播放器',
        'id'=>'openmusicplug',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'显示文章目录模块',
        'desc'=>'将会在文章页面显示目录',
        'id'=>'opencontent',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'开启看板娘',
        'desc'=>'将会在你的网站显示看板娘',
        'id'=>'openlive2d',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'开启文章订阅功能',
        'desc'=>'开启后将会在用户个人资料页显示订阅选项',
        'id'=>'openpassage',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'显示RSS订阅',
        'desc'=>'将会在底部显示RSS订阅按钮',
        'id'=>'show_rss',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'编辑器增强',
        'desc'=>'将会启用tinymce插件,编辑器将会有更多功能可供选择',
        'id'=>'open_tinymce',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'代码插件',
        'desc'=>'将会启用enlighter插件,可以获得更好的代码插入体验',
        'id'=>'open_enlighter',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'音乐播放默认开合状态',
        'desc'=>'勾选后默认展开音乐播放',
        'id'=>'open_music',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'文章动画加载效果',
        'desc'=>'勾选后全站会启用动画加载效果',
        'id'=>'animal_load',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'侧边栏个人头像',
        'desc'=>'将在手机端侧边栏展示',
        'id'=>'phone_sideer_image',
        'std'=>'http://cdn.xiaoyou66.com/theme/admin_avatar-96x96.jpg',
        'type'=>'upload');
    $options[] = array(
        'name'=>'昵称',
        'desc'=>'将在手机端侧边栏展示',
        'id'=>'person_nickname',
        'std'=>'小游',
        'type'=>'text');
    $options[] = array(
        'name'=>'头像跳转链接',
        'desc'=>'点击头像后将跳转的链接',
        'id'=>'person_link',
        'std'=>'https://xiaoyou66.com/about/',
        'type'=>'text');
    $options[] = array(
        'name'=>'个性签名',
        'desc'=>'将在手机端侧边栏展示(字数最好不要太多)',
        'id'=>'person_sign',
        'std'=>'二次元技术宅',
        'type'=>'text');
    $options[] = array(
        'name'=>'B站UID',
        'desc'=>'用于追番界面显示你的追番',
        'id'=>'bilibili_uid',
        'std'=>'343147393',
        'type'=>'text');
    $options[] = array(
        'name'=>'B站cookie数据',
        'desc'=>'用于追番界面显示追番的详细情况',
        'id'=>'bilibili_cookie',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'首页指定目录过滤',
        'desc'=>'可以过滤某个目录的内容。格式为"-5,-6" (负号加上id号用英文逗号分割开)',
        'id'=>'filter',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'离开标签页显示的标题',
        'desc'=>'当用户切换网页时网页标签显示的内容(留空将不会开启该功能)',
        'id'=>'title_change',
        'std'=>'404啦！!!!∑(ﾟДﾟノ)ノ',
        'type'=>'text');
    $options[] = array(
        'name'=>'重新点击标签显示的标题',
        'desc'=>'当用户回到网页时标签显示的内容(留空将不会开启该功能)',
        'id'=>'title_back',
        'std'=>'哈哈，骗你的！ヾ(ﾟ∀ﾟゞ)',
        'type'=>'text');
    $options[] = array(
        'name'=>'鼠标点击显示的内容',
        'desc'=>'在网站任何页面点击后显示的文字(注意内容必须必须加上英文的双引号以及用英文的逗号分开)',
        'id'=>'click_content',
        'std'=>'"技术宅", "二次元", "小白", "富有想象", "*:ஐ٩(๑´ᵕ`)۶ஐ:* 学习使我进步", "(๑*◡*๑)", "✧*｡٩(ˊᗜˋ*)و✧*｡" ,"（づ￣3￣）づ╭❤～", "╰( ´・ω・)つ──☆✿✿✿", "充满激情", "(((┏(;￣▽￣)┛装完逼就跑", "熬夜成瘾(,,•﹏•,,)"',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'自定义随机文章背景图像',
        'desc'=>'注意:默认的会失效，只会显示下面的(一行一个),为空就显示默认的,注意链接是完整的(需要带http://或https://)',
        'id'=>'random_image',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'自定义随机头像',
        'desc'=>'注意:默认的会失效，只会显示下面的(一行一个),为空就显示默认的,注意链接是完整的(需要带http://或https://)',
        'id'=>'random_avatar',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>'看板娘贴边方向',
        'desc'=>'看板娘贴边方向，例如 left:0(靠左 0px), right:30(靠右 30px)',
        'id'=>'wifuside',
        'std'=>'left:30',
        'type'=>'text');
    $options[] = array(
        'name'=>'文章页看板娘换边',
        'desc'=>'在文章页看板娘自动到和主页不同的一边(比如主页在左边,那么在文章就会到右边)',
        'id'=>'wifuchange',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'B博界面设置',
        'type'=>'heading');
    $options[] = array(
        'name'=>'是否开启B博功能',
        'desc'=>'注意开启时你必须新建一个模板为B博的页面否则将无法跳转',
        'id'=>'bibo_open',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'B博页面地址',
        'desc'=>'这里放你B博页面的链接',
        'id'=>'bibo_pagelink',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>'默认直接跳转到B博界面(不填页面地址无法跳转)',
        'desc'=>'开启后访问主页将直接显示B博界面',
        'id'=>'bibo_gotobibo',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'B站个人认证说明',
        'desc'=>'这里将会显示你的个人认证内容',
        'id'=>'bibo_auth',
        'std'=>'一个永远都火不了的可怜up主',
        'type'=>'text');
    $options[] = array(
        'name'=>'地点',
        'desc'=>'这里填你所在的地方,不填的话就不会再首页显示',
        'id'=>'bibo_palce',
        'std'=>'来自遥远的二次元世界',
        'type'=>'text');
    $options[] = array(
        'name'=>'个人简介',
        'desc'=>'这里填你的个人简介，也可以填其他的文本内容',
        'id'=>'bibo_descript',
        'std'=>'喜欢捣鼓软件和硬件的二次元技术宅',
        'type'=>'text');
    $options[] = array(
        'name'=>'B博背景',
        'desc'=>'这里设置你的B博背景',
        'id'=>'bibo_background',
        'std'=>'http://cdn.xiaoyou66.com/theme/3O1R.jpg',
        'type'=>'upload');
    $options[] = array(
        'name'=>'推广链接文本',
        'desc'=>'这里可以填任意文本，点击将会进行跳转',
        'id'=>'bibo_push',
        'std'=>'爱心箱',
        'type'=>'text');
    $options[] = array(
        'name'=>'推广链接地址',
        'desc'=>'这里填跳转地址',
        'id'=>'bibo_pushlink',
        'std'=>'https://xiaoyou66.com/%e7%88%b1%e5%bf%83%e7%ae%b1',
        'type'=>'text');
    $options[] = array(
        'name'=>'查看更多跳转地址',
        'desc'=>'这里填跳转地址',
        'id'=>'bibo_more',
        'std'=>'https://xiaoyou66.com/about',
        'type'=>'text');
    $options[] = array(
        'name'=>'公告内容',
        'desc'=>'填的内容将在公告板显示(如果不填就不显示公告)',
        'id'=>'bibo_post',
        'std'=>'新功能正在测试中。。。',
        'type'=>'text');
    $options[] = array(
        'name'=>'是否开启友情链接',
        'desc'=>'勾选将会开启友情链接，将会显示主题添加的友情链接',
        'id'=>'bibo_friend',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>'是否开启热门文章',
        'desc'=>'勾选将会显示热门文章',
        'id'=>'bibo_hot',
        'std'=>'1',
        'type'=>'checkbox');
    return $options;
}