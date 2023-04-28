<?php
/**
 * Cars Listing
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param int|string $post_id The post ID this block is saved to.
 */

$cars = get_field('cars');
?>

<section class="cars-listing"
    <?php if (!empty($block['data']['background_color'])) { ?>
        style="background-color: <?php echo $block['data']['background_color']; ?>"
    <?php } ?>
>
    <div class="container">
        <div class="cars-listing__wrapper">
            <?php if ($block['data']['title']): ?>
                <h1 class="cars-listing__title"><?php echo $block['data']['title']; ?></h1>
            <?php endif; ?>

            <?php if ($block['data']['description']): ?>
                <div class="cars-listing__description"><?php echo $block['data']['description']; ?></div>
            <?php endif; ?>

            <div class="cars-listing__cards">
                <?php foreach ($cars as $car):
                    $car_image = get_the_post_thumbnail($car->ID);
                    $car_title = $car->post_title;
                    $car_price = get_field('price', $car->ID); ?>

                <div class="cars-listing__card-wrapper">
                    <a href="#" class="cars-listing__card">
                        <?php if (!empty($car_image)) { ?>
                            <span class="cars-listing__card-image">
                                <?php echo $car_image; ?>
                            </span>
                        <?php } ?>

                        <div class="cars-listing__card-data">
                            <?php if (!empty($car_title)) { ?>
                                <div>
                                    <h6>Name:</h6>

                                    <div><?php echo $car_title; ?></div>
                                </div>
                            <?php } ?>

                            <?php $cur_terms = get_the_terms($car->ID, 'models'); ?>
                            <?php if (is_array($cur_terms)) { ?>
                                <div>
                                    <h6>Model:</h6>

                                    <div>
                                        <?php foreach ($cur_terms as $cur_term) {
                                            echo $cur_term->name;
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php $cur_terms = get_the_terms($car->ID, 'types'); ?>
                            <?php if (is_array($cur_terms)) { ?>
                                <div>
                                    <h6>Type:</h6>

                                    <div>
                                        <?php foreach ($cur_terms as $cur_term) {
                                            echo $cur_term->name;
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php $cur_terms = get_the_terms($car->ID, 'colors'); ?>
                            <?php if (is_array($cur_terms)) { ?>
                                <div>
                                    <h6>Color:</h6>

                                    <div>
                                        <?php foreach ($cur_terms as $cur_term) {
                                            echo $cur_term->name;
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php $cur_terms = get_the_terms($car->ID, 'years'); ?>
                            <?php if (is_array($cur_terms)) { ?>
                                <div>
                                    <h6>Year:</h6>

                                    <div>
                                        <?php foreach ($cur_terms as $cur_term) {
                                            echo $cur_term->name;
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <div>
                                <h6>Price:</h6>

                                <div class=""><?php echo $car_price; ?></div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>
