<?php
if(! is_active_sidebar('sidebar-1')){
    return;
}
?>
 <!-- Shop Sidebar Start -->
<div class="recommend-sidebar__box">
    <?php dynamic_sidebar( 'sidebar-1' )?>
    <?php $product_tips = get_terms([
            'taxonomy' => 'pa_typing',
            'hide_empty' => true
    ])?>
    <div class="recommend-sidebar__box">
        <?php $i=0; foreach($product_tips as $product_tip) :?>
        <a href="?filter_typing=<?php echo $product_tip->slug;?>" class="recommend-sidebar__box-link">
            <label class="recommend-sidebar__label">
                <input type="checkbox" class="recommend-sidebar__checkbox">
                <span class="recommend-sidebar__custom"></span>
                <div class="recommend-sidebar__text">
                    <?php echo $product_tip->name?>
                </div>
                <?php echo $product_tip->count;?>
            </label>
        </a>
        <?php endforeach;?>
    </div>
</div>
<!-- Shop Sidebar End -->