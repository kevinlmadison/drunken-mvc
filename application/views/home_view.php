
<?php $this->render('common/meta'); ?>
<body onscroll="GetScrollPositions()">

    <?php $this->render('common/header'); ?>

    <div id="content" class="global_width">
        <?php $this->render('modules/fuse'); ?>

        <div id="left_content_container">
            <br>
            <img src="/images/logo_full.png" />
            <p>      orem ipsum dolor sit amet, consectetur adipiscing elit. Etiam justo ante, pharetra ac nulla eget, ultricies convallis odio. Nullam vitae felis consequat, mollis ex id, consectetur elit. Vestibulum quis quam molestie dolor lacinia eleifend. Proin at bibendum tellus, ac tempor purus. Ut eu commodo mauris. Donec risus dui, congue sit amet erat et, blandit faucibus enim. Donec malesuada quam massa, non aliquam mauris fermentum vel. Nulla ullamcorper tincidunt nisi ac volutpat.</p>
            <p>     Quisque eget augue lacus. Nulla purus lacus, congue at magna et, auctor dignissim leo. In hac habitasse platea dictumst. Donec ullamcorper lectus vitae interdum molestie. Donec urna dolor, sodales vitae placerat consectetur, congue eget neque. Duis suscipit justo nec sollicitudin faucibus. Ut lacus purus, tristique sed tristique sit amet, luctus ut mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque, purus vitae dignissim consequat, sapien sapien rutrum metus, eget tempor arcu velit sed nibh. Morbi tincidunt semper lectus vel auctor.</p>
            
            <?php $this->render('modules/video_drome'); ?>
        </div>
        <div id="right_content_container">
            <?php $this->render('modules/twitter_feed'); ?>
        </div>
        <div class="clear"></div>
    </div>
    
    <?php $this->render('common/footer'); ?>
</body>
