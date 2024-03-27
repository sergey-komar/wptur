<?php
if(! is_active_sidebar('sidebar-1')){
    return;
}
?>
 <!-- Shop Sidebar Start -->
<div class="recommend-sidebar__box">
    <?php dynamic_sidebar( 'sidebar-1' )?>
   
</div>
<!-- Shop Sidebar End -->