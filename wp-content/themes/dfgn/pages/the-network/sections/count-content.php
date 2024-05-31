<?php
include 'count-content.css.php';
?>

<div class="count-content">
    <div class="wrapper">
        <div class="card card-purple">
            <div class="card-wrapper">
                <div class="count-total" data-target="<?php the_field('total_df'); ?>">
                    <?php the_field('total_df'); ?>
                </div>
                <div class="label">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-home.png'; ?>" alt="">
                    <span>Design factories</span>
                </div>
            </div>
        </div>
        <div class="card card-white">
            <div class="card-wrapper">
                <div class="count-total" data-target="<?php the_field('total_countries'); ?>">
                    <?php the_field('total_countries'); ?>
                </div>
                <div class="label">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-contries.png'; ?>" alt="">
                    <span>Countries</span>
                </div>
            </div>
        </div>
        <div class="card card-green">
            <div class="card-wrapper">
                <div class="count-total" data-target="<?php the_field('total_df_people'); ?>">
                    <?php the_field('total_df_people'); ?>
                </div>
                <div class="label">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-student.png'; ?>" alt="">
                    <span>DF people</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php RenderJS::start() ?>
<script>
    $(document).ready(function() {
        const counters = document.querySelectorAll('.count-total');

        function animateCounter(counter) {
            const target = +counter.getAttribute('data-target');
            const duration = 2;
            const step = target / (duration * 60);
            let current = 0;

            function updateCounter() {
                current += step;
                if (current >= target) {
                    current = target;
                }
                counter.textContent = Math.round(current);
                if (current < target) {
                    requestAnimationFrame(updateCounter);
                }
            }

            updateCounter();
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
<?php RenderJS::end() ?>