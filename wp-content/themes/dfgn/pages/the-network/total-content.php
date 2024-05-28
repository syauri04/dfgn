<div class="count-total">
    <div style="display:flex;flex-wrap:wrap; justify-content:center; gap:40px">
        <div class="card-count" style="display: flex;flex-wrap:wrap">
            <div class="df-numb-fc df">
                <div class="nums si counter" data-target="29">
                    0
                </div>
                <div class="ic-title">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-home.png'; ?>" alt="">
                    <span>Design factories</span>
                </div>
            </div>
        </div>

        <div class="card-count" style="display: flex;flex-wrap:wrap">
            <div class="df-numb-fc ctn">
                <div class="nums ip counter" data-target="25">
                    0
                </div>
                <div class="ic-title">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-contries.png'; ?>" alt="">
                    <span>Countries</span>
                </div>
            </div>
        </div>

        <div class="card-count" style="display: flex;flex-wrap:wrap">
            <div class="df-numb-fc dfp">
                <div class="nums ar counter" data-target="160">
                    0
                </div>
                <div class="ic-title">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-student.png'; ?>" alt="">
                    <span>DF people</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php RenderStyle::Style() ?>
<style>
    .count-total {
        margin-bottom: 100px;
    }

    .count-total .card-count {
        width: 443px;
    }

    .count-total .df-numb-fc {
        aspect-ratio: 1 / 1;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 991px) {
        .count-total .df-numb-fc {
        border-radius: 41px;
    }
    }
</style>
<?php RenderStyle::EndStyle() ?>

<?php RenderJS::start() ?>
<script>
    $(document).ready(function() {
        const counters = document.querySelectorAll('.counter');

        function animateCounter(counter) {
            const target = +counter.getAttribute('data-target');
            const duration = 2; // Duration in seconds
            const step = target / (duration * 60); // Calculate step per frame

            let current = 0; // Current value

            // Animation function
            function updateCounter() {
                current += step; // Add step to current value
                if (current >= target) {
                    current = target; // Ensure current value doesn't exceed target
                }
                counter.textContent = Math.round(current); // Update counter text
                if (current < target) {
                    requestAnimationFrame(updateCounter); // Recursively call updateCounter
                }
            }

            // Start animation
            updateCounter();
        }

        // Intersection Observer to trigger animation when in view
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target); // Stop observing once animation starts
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the element is in view
        });

        counters.forEach(counter => {
            observer.observe(counter); // Start observing each counter
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#select-cronogical').awselect({
            background: "#182224", //the dark blue background
            active_background: "#182224", // the light blue background
            placeholder_color: "#FFFFFF", // the light blue placeholder color
            placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
            option_color: "#FFFFFF", // the option colors
            vertical_padding: "10px", //top and bottom padding
            horizontal_padding: "22px", // left and right padding,
            immersive: false // immersive option, demonstrated at the next example
        });
    });
</script>
<?php RenderJS::end() ?>
