<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MA_Faiss
 */

get_header();
?>
<main id="primary" class="site-main">
    <section class="kristal__landing">
        <article class="kristal__article">
            <h2 class="kristal__heading">Welkom!</h2>
            <p class="kristal__sub">
            Van harte welkom op onze website! Hier bij Kristal Helder Licht streven we ernaar om jou te begeleiden op je weg naar innerlijke balans en welzijn. Ontdek ons aanbod van holistische therapieën, handgemaakte Orgonite producten en inspirerende content. Neem de tijd om rond te kijken, vind de ondersteuning die je zoekt en laat ons je helpen om een leven vol helderheid en licht te creëren. We zijn er voor jou, elke stap van de weg
            </p>
        </article>
        <img class="kristal_img" src="https://33278.hosts1.ma-cloud.nl/wp-content/uploads/2023/06/Linda-cutout.png" alt="">
    </section>
    <section class="kristal__section about-me_kristal">
        <div class="kristal__textbox">
            <h3 class="kristal__title">
                Even voorstellen 
            </h3>
            <br>
            <p class="kristal__p">
                Ik ben Linda Baaij, getrouwd en moeder van 2 kinderen. Vanaf jongs af aan ben ik hoog sensitief. Dat heb ik dat pas later ontdekt, nadat ik zelf moeder werd en merkte hoe gevoelig mijn kinderen zijn voor energieën, omgeving en voeding.

                Ik ben me erin gaan verdiepen en heb ik meerdere leuke cursussen en opleidingen op spiritueel, energetisch en ook Medische basiskennis behaald.

                Waarin ik met de nodige uitdagingen op mijn pad mocht gaan ervaren hoe ik dit in praktijk samen mocht brengen. Ik geloof heel sterk dat alles in het leven gebeurd met een reden en de paden die wij bewandelen komen altijd uit op wat er voor ons bestemd is. Daarin geeft het lichaam ons zoveel signalen die dieper gaan dan alleen de ziekte, of klacht.

                Wat wilt ons lichaam ons echt vertellen?

                Met alle liefde ontvang ik jullie in mijn praktijk voor Sensi Therapie of Bars behandelingen.

                Nieuwsgierig naar wat de bijdrage voor jouw kan zijn?

                Email of bel mij voor meer informatie.

                Veel liefs
                <br>
                <span>Linda Baaij</span>
            </p>
        </div>
        <img class="kristal__img" src="https://33278.hosts1.ma-cloud.nl/wp-content/uploads/2023/06/Image-1.png" alt="">
    </section>
    <section class="kristal__section kristal_producten">
        <h2 class="kristal__heading">
            Producten voor jou
        </h2>
        <ul class="kristal__product-card-list">
            <?php
            $args = array(
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'posts_per_page' => 3, // Display 3 products
                'orderby'        => 'rand', // Randomize the order
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_tag',
                        'field'    => 'slug',
                        'terms'    => 'featured',
                    ),
                ),
            );

            $featured_products = new WP_Query($args);

            if ($featured_products->have_posts()) {
                while ($featured_products->have_posts()) {
                    $featured_products->the_post();
                    global $product;

                    // Output the product information here
                    echo '<li class="kristal__product-cards">';
                    echo '<a href="' . esc_url(get_permalink($product->get_id())) . '">';
                    echo '<img class="kristal__product-img" src="' . get_the_post_thumbnail_url($product->get_id(), 'thumbnail') . '" alt="' . get_the_title() . '">';
                    echo '</a>';

                    echo '<h2 class="kristal__product-title">' . get_the_title() . '</h2>';
                    echo '<p class="kristal__product-price">' . $product->get_price_html() . '</p>';
                    echo '<a href="' . esc_url(get_permalink($product->get_id())) . '" class="button add_to_cart_button">Bekijken</a>';

                    echo '</li>';
                }
            }

            wp_reset_postdata();

            ?>
        </ul>
    </section>
    <section class="kristal__section diensten_kristal">
        <h2 class="kristal__heading">Diensten</h2>

        <ul class="kristal__cards_list">
            <li class="kristal__card_item">
                <span>Sensi-therapie</span>
                <p>Sensi-therapie is een holistische benadering van therapie die zich richt op het herstellen van de balans tussen lichaam en geest. Het combineert verschillende technieken, waaronder energetische behandelingen, massage, voeding en emotionele ondersteuning, om het zelfgenezend vermogen van het lichaam te stimuleren. Sensi-therapie tracht blokkades op te heffen en het welzijn te bevorderen, zodat fysieke en emotionele klachten verminderen en het individu zich weer in balans voelt.</p>
            </li>
            <li class="kristal__card_item">
                <span>
                    Holistic Pulsing
                </span>
                <p>Holistic Pulsing is een zachte, ritmische en therapeutische techniek die diepe ontspanning, lichaamsbewustzijn en het natuurlijke genezingsproces van het lichaam bevordert. Het maakt gebruik van wiegende bewegingen, zachte aanrakingen en subtiele trillingen om een kalmerende en harmoniserende ervaring te bieden. Het helpt bij het verminderen van stress, het loslaten van spanningen en het herstellen van balans in het lichaam en de geest.</p>
            </li>
            <li class="kristal__card_item">
                <span>Drukpunt-massage</span>
                <p>Drukpunt-massage is een therapeutische massagetechniek die gebruikmaakt van de toepassing van gerichte druk op specifieke punten op het lichaam. Deze punten, ook wel drukpunten genoemd, bevinden zich op de meridianen of energiebanen van het lichaam. Door druk uit te oefenen op deze punten, wordt de energiestroom gestimuleerd en in balans gebracht, waardoor het zelfgenezend vermogen van het lichaam wordt bevorderd.</p>
            </li>
            <a href="<?php echo get_permalink(get_page_by_title('Diensten')); ?>" class="kristal__diensten-b">
                <span>
                    Bekijk hier al onze diensten
                </span>
            </a>
        </ul>
    </section>
</main>

<?php
get_footer();
