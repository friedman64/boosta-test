<?php // Template Name: Home ?>

<?php get_header(); ?>

<?php $banner = get_field('home_banner'); ?>
<?php $banner_slides = $banner['home_banner_slides']; ?>
    <!--  START MAIN  -->
    <main>
        <div class="banner" style="background-image: url('<?php echo $banner['home_banner_image'] ?>');">
            <div class="container">
                <?php if(!empty($banner_slides)) : ?>
                    <div class="banner-slider">
                        <?php foreach ($banner_slides as $slide) : ?>
                            <div class="banner-slide">
                                <h3 class="banner-slide__title"><?php echo $slide['slide_title']; ?></h3>
                                <div class="banner-slide__text"><?php echo $slide['slide_text']; ?></div>

                                <?php if (!empty($slide['slide_link'])) : ?>
                                    <a href="<?php $slide['slide_link'] ?>" class="button">Learn more</a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    <?php $story = get_field('story'); ?>

        <?php if(!empty($story)) : ?>
            <div class="story">
                <div class="container">
                    <div class="story-container">
                        <div class="story-col">
                            <img src="<?php echo $story['story_image']; ?>" class="story__image" alt="image">
                        </div>
                        <div class="story-col">
                            <h3 class="story__title"><?php echo $story['story_title']; ?></h3>
                            <div class="story__text">
                                <?php echo $story['story_text']; ?>
                            </div>
                            <a href="<?php echo $story['link']; ?>" class="button">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    <?php $video = get_field('video'); ?>

        <?php if(!empty($video)) : ?>
            <div class="video js-video-section" style="background-image: url('<?php echo $video['video_image'] ?>');">
                <div class="container">
                    <div class="video__play js-play-btn">
                        <div style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/play.png')"></div>
                        <span><?php echo $video['video_text']; ?></span>
                    </div>

                    <div class="video-container js-video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video['video_id']; ?>?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    <?php $exp = get_field('exp'); ?>
    <?php $exp_items = $exp['exp_items']; ?>

        <?php if(!empty($exp)) : ?>
            <div class="expertise">
                <div class="container">
                    <div class="section-title">
                        <h3><?php echo $exp['exp_title']; ?></h3>
                        <span><?php echo $exp['exp_subtitle']; ?></span>
                    </div>
                    <div class="expertise-blocks">
                        <?php foreach ($exp_items as $exp_item) : ?>
                            <div class="expertise-block">
                                <img src="<?php echo $exp_item['e_icon']; ?>" alt="icon">
                                <h4><?php echo $exp_item['e_title']; ?></h4>
                                <div><?php echo $exp_item['e_text']; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>
    <!--  END MAIN  -->

<?php get_footer(); ?>