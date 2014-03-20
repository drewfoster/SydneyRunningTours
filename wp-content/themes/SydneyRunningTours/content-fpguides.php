<li style="width: <?php echo $width; ?>%;">
            <h5><?php the_field('name'); ?></h5>
            <div class="circle">
                <a href="/tour-guides/">
                    <img src="<?php the_field('photo'); ?>">
                </a>
            </div>
            <p><?php the_field('quote'); ?></p>
</li>