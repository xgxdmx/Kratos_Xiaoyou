<?php
/**
template name: bilibili追番模板
*/
get_header(); ?>

<div id="container" class="container" >
    <div class="page-header">
        <h1>我的追番
         <?php
             require_once ("bilibili/bilibiliAnime.php");
             $bili=new bilibiliAnime(kratos_option('bilibili_uid'),kratos_option('bilibili_cookie'));
            echo "<small>当前已追".$bili->sum."部，继续加油！（随机显示15部）</small></h1></div><div class=\"bilibili\">";
            function precentage($str1,$str2)
            {
                if(is_numeric($str1) && is_numeric($str2)) return $str1/$str2*100;
                else if ($str1=="没有记录!") return 0;
                else return 100;
            }
            for($i=0;$i<15;$i++)
            {   
                $j=mt_rand(0,$bili->sum-1);
                echo "<a class=\"bgm-item\" href=\"https://www.bilibili.com/bangumi/play/ss".$bili->season_id[$j]."/ \" target=\"_blank\"><div class=\"bgm-item-thumb\" style=\"background-image:url(".$bili->image_url[$j].")\"></div><div class=\"bgm-item-info\"><span class=\"bgm-item-titlemain\">".$bili->title[$j]."</span><span class=\"bgm-item-title\">".$bili->evaluate[$j]."</span></div><div class=\"bgm-item-statusBar-container\"><div class=\"bgm-item-statusBar\" style=\"width:".precentage($bili->progress[$j],$bili->total[$j])."%\"></div>进度".$bili->progress[$j]."/". $bili->total[$j]."</div></a>";
            }
        ?>
    </div>
  </div>

<?php get_footer(); ?>










