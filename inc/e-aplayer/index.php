<?php

/*
Plugin Name: 侧栏音乐播放器
Description: 使用网上多个开源项目打包而成，支持多个音乐平台，曲库更全
Author: 后宫学长
Version: 1.0.1
Author URI: https://haremu.com/
*/

define('PLAYER_VERSION', '1.10.1');
define('PLAYER_URL', get_bloginfo('template_directory')."/inc/e-aplayer/");


if (!wp_is_mobile() || get_option('eaplayer_options')['mobile']) {
    add_action('wp_enqueue_scripts', 'eaplayer_scripts');
    function eaplayer_scripts()
    {
        wp_enqueue_style('player', 'https://cdn.jsdelivr.net/npm/aplayer@latest/dist/APlayer.min.css', array(), PLAYER_VERSION, 'all');
        wp_enqueue_style('player', 'https://cdn.jsdelivr.net/npm/aplayer@latest/dist/APlayer.min.css.map', array(), PLAYER_VERSION, 'all');
        wp_enqueue_script('player-js', 'https://cdn.jsdelivr.net/npm/aplayer@latest/dist/APlayer.min.js', array(), PLAYER_VERSION, true);
        wp_enqueue_script('player-js', 'https://cdn.jsdelivr.net/npm/aplayer@latest/dist/APlayer.min.js.map', array(), PLAYER_VERSION, true);
        wp_enqueue_script('meting-js', 'https://cdn.jsdelivr.net/npm/meting@latest/dist/Meting.min.js', array(), PLAYER_VERSION, true);
    }

    add_action('wp_head', 'eaplayer_css');
    function eaplayer_css()
    { ?>
        <style type="text/css">
            .aplayer.aplayer-fixed {
                text-transform: uppercase;
                border-radius: 0 15px 15px 0;
                max-width: 418px;
                padding: 10px 10px 0 10px;
                left: 0;
                z-index: 9999999 !important;
            }

            .aplayer.aplayer-fixed .aplayer-list {
                border: none;
                margin-bottom: 86px;
            }

            .aplayer.aplayer-fixed .aplayer-body {
                background: none;
            }

            .aplayer.aplayer-fixed .aplayer-miniswitcher {
                opacity: .5;
                overflow: hidden;
                border-radius: 0 15px 15px 0;
            }

            .aplayer.aplayer-fixed:hover .aplayer-miniswitcher {
                opacity: .63;

            }

            .aplayer.aplayer-withlist.aplayer-fixed.aplayer-narrow,
            .aplayer.aplayer-withlist.aplayer-fixed.aplayer-narrow .aplayer-body {
                left: -66px !important;
            }

            .aplayer.aplayer-withlist.aplayer-fixed.aplayer-narrow:hover .aplayer-body {
                left: 0 !important;
            }

            #landlord {
                left: 90px;
            }

            .aplayer {
                z-index: 10001 !important;
                background: rgba(255, 255, 255, .63);
            }

            .aplayer .aplayer-info {
                margin-left: 86px;
                height: 86px;
                padding-top: 20px;
            }

            .aplayer .aplayer-pic {
                height: 86px;
                width: 86px;
            }

            .aplayer .aplayer-list.aplayer-list-hide {
                margin-bottom: 76px !important;
            }

            .aplayer .aplayer-notice {
                display: none;
            }

            .aplayer.aplayer-fixed .aplayer-lrc {
                background: rgba(0, 0, 0, 0.5);
                margin: auto;
                bottom: 0;
                max-width: 800px;
                border-radius: 10px;
            }
        </style>
    <?php }

    add_action('wp_footer', 'eaplayer_html');
    function eaplayer_html()
    { ?>
        <meting-js
                server="<?php echo get_option('eaplayer_options')['source']; ?>"
                type="<?php echo get_option('eaplayer_options')['type']; ?>"
                id="<?php echo get_option('eaplayer_options')['mid']; ?>"
                fixed="true"
                autoplay="<?php echo get_option('eaplayer_options')['autoplay']; ?>"
                order="<?php echo get_option('eaplayer_options')['random']; ?>"
        >
        </meting-js>
    <?php }
}

add_action('admin_enqueue_scripts', 'admin_eaplayer_scripts');
add_action('admin_init', 'eaplayerOptions');
add_action('admin_menu', 'eaplayerSetting');
function admin_eaplayer_scripts()
{
    wp_enqueue_style('eaplayer-setting', PLAYER_URL . 'setting.css', array(), PLAYER_VERSION, 'all');
}

function eaplayerSetting()
{
    add_menu_page('播放器设置', '音乐', 'manage_options', __FILE__, 'eaplayer_page');
}

function eaplayerOptions()
{
    register_setting('eaplayer_setting_group', 'eaplayer_options');
}

function eaplayer_page()
{
    ?>
    <div class="eaplayer-page">
        <div class="eaplayer-page-inner">
            <section class="eaplayer-main">
                <h2 class="eaplayer-page-title">侧栏音乐播放器版本：<?php echo PLAYER_VERSION; ?></h2>
                <form method="post" action="options.php" class="sava-setting">
                    <?php settings_fields('eaplayer_setting_group'); $str = get_option('eaplayer_options');?>
                    <div class="block-one">
                        <div class="select-box">
                            <select id="ea-select" name="eaplayer_options[source]">
                                <option value="netease" <?php echo $str['source'] == 'netease' ? 'selected': ''; ?>>网易音乐</option>
                                <option value="tencent" <?php echo $str['source'] == 'tencent' ? 'selected': ''; ?>>QQ音乐</option>
                                <option value="xiami" <?php echo $str['source'] == 'xiami' ? 'selected': ''; ?>>虾米音乐</option>
                                <option value="kugou" <?php echo $str['source'] == 'kugou' ? 'selected': ''; ?>>酷狗音乐</option>
                                <option value="baidu" <?php echo $str['source'] == 'baidu' ? 'selected': ''; ?>>百度音乐</option>
                            </select>
                        </div>
                        <div class="select-box">
                            <select id="ea-select" name="eaplayer_options[type]">
                                <option value="song" <?php echo $str['type'] == 'song' ? 'selected': ''; ?>>单曲</option>
                                <option value="playlist" <?php echo $str['type'] == 'playlist' ? 'selected': ''; ?>>歌单</option>
                                <option value="album" <?php echo $str['type'] == 'album' ? 'selected': ''; ?>>专辑</option>
                                <option value="search" <?php echo $str['type'] == 'search' ? 'selected': ''; ?>>搜索</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" name="eaplayer_options[mid]" id="ea-mid" size="30" value="<?php echo !empty($str['mid']) ? $str['mid']: ''; ?>" placeholder="填入 ID 或关键词">
                        </div>
                    </div>
                    <div class="block-three">
                        <div class="autoplay">
                            <input type="checkbox" name="eaplayer_options[autoplay]" value="true" <?php checked('true', $str['autoplay']); ?> /><span>自动播放</span>
                        </div>
                        <div class="random">
                            <input type="checkbox" name="eaplayer_options[random]" value="random" <?php checked('random', $str['random']); ?> /><span>随机播放</span>
                        </div>
                        <div class="mobile">
                            <input type="checkbox" name="eaplayer_options[mobile]" value="true" <?php checked('true', $str['mobile']); ?> /><span>支持手机</span>
                        </div>
                    </div>
                    <div class="block-button">
                        <input type="submit" name="save" class="button" value="保存设置" />
                    </div>
                    <div class="eaplayer-copyright">
                        <p>如何获得 ID ？在官方分享 URL 中可以看到，复制下来填写进去就好了，关键词仅适用于搜索。</p>
                        <p>该插件由 <a href="https://haremu.com/" target="_blank">后宫学长</a> 使用互联网上多个开源项目整合制作，只为方便他人使用 WordPress ，并不对歌曲或代码版权负责，请勿使用于商业用途！</p>
                    </div>
                </form>
                <?php if ( isset($_REQUEST['settings-updated']) ) {
                    echo '<div id="message" class="updated"><p>设置更新成功。</p></div>';
                }?>
            </section>
        </div>
    </div>
    <?php
}
