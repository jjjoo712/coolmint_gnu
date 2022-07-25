<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}
//상단을 둘로 나눠서 메인페이지에서의 상단과 그 외 페이지상단의 레이아웃구분한다.
include_once(G5_THEME_PATH.'/head_m.php');
?>
<h2 class="sound_only">최신글</h2>

<!-- 진짜 슬라이드 넣기 -->
    
    <div class="container_w ">
        
            <div class="container_1">
            <?php 
            echo latest('youtube','starterimg',1,100);
            ?>
            </div>
        
        
            <div class="container_2 " id="event_2" >
            <?php
              echo latest('slide2','portfolio',1,100);
                ?>
            </div>
        
        
            <div class="container_3 container-md mt-5" id="">
                <?php
                  echo latest('form','form',1,100);
                    ?>
            </div>
            <div class="container_4">
                <?php
                    echo latest('youcando','as',1,100);
                    ?>
            </div>
            <div class="container_5 contianer-fluid mx-auto">
                <?php echo latest('persona','persona',1,100);
                ?>
            </div>
            <div class="container_6">
                <?php echo latest('essential','essential',1,100);
                ?>
            </div>
    </div>
    




    <!-- } 최신글 끝 -->


   


<?php
include_once(G5_THEME_PATH.'/tail.php');



