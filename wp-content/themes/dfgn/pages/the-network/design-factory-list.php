<div class="df-list">
    <div class="border-head-df">
        <div style="display:flex; justify-content:center;width:100%">
            <div class="scroll-container boxies" style="overflow-x: auto;">
                <div class="list-tab tab-left" style="width:max-content">
                    <ul class="filter-factory">
                        <li><a href="#" class="active" data-filter="*">All Continents</a></li>
                        <li><a href="#" class="" data-filter=".america">Americas</a></li>
                        <li><a href="#" class="" data-filter=".asia">Asia Pacific</a></li>
                        <li><a href="#" class="" data-filter=".europe">Europe and the Middle East</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS -->
    <style>
        .border-head-df {
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .df-list .list-tab {
            display: flex;
            padding: 10px;
            box-sizing: border-box;
        }

        .df-list .list-tab li {
            margin-right: 15px;
        }

        .df-list .list-tab li:last-child {
            margin-right: 0;
        }

        .df-list .list-tab li a {
            white-space: nowrap;
            cursor: pointer;
        }

        .active {
            font-weight: bold;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const listChronicles = document.querySelector('.boxies');
            let isDown = false;
            let startX;
            let scrollLeft;

            listChronicles.addEventListener('mousedown', (e) => {
                isDown = true;
                listChronicles.classList.add('active');
                startX = e.pageX - listChronicles.offsetLeft;
                scrollLeft = listChronicles.scrollLeft;
            });

            listChronicles.addEventListener('mouseleave', () => {
                isDown = false;
                listChronicles.classList.remove('active');
            });

            listChronicles.addEventListener('mouseup', () => {
                isDown = false;
                listChronicles.classList.remove('active');
            });

            listChronicles.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - listChronicles.offsetLeft;
                const walk = (x - startX) * 1; // Scroll-fast
                listChronicles.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
</div>

<div id="factoriesContainer" class="row" style="margin-bottom: 60px;">
    <?php
    include 'df-list/factory-data.php';
    include 'df-list/factory-functions.php';
    foreach ($factoriesData as $factory) {
        echo createFactoryEntry($factory);
    }
    echo createFactoryModal();
    ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#factoryModal').on('show.bs.modal', function(event) {
            $('html').addClass('modal-open');
            var button = $(event.relatedTarget); 
            var factory = button.data('factory'); 

            var modal = $(this);
            modal.find('#modalCountryFlag').attr('src', factory.countryFlag);
            modal.find('#modalCountry').text(factory.country);
            modal.find('#modalName').text(factory.name);
            modal.find('#modalYear').text(factory.year);
            modal.find('#modalLogo').attr('src', factory.logo);
            modal.find('#modalFocus').text(factory.focus);
            modal.find('#modalDescription').text(factory.description);
            
        });

        $('#factoryModal').on('hidden.bs.modal', function() {
            $('html').removeClass('modal-open');
        });
    });
</script>

<?php RenderStyle::Style() ?>
<style>
    .df-list .list-tab {
        display: flex;
        justify-content: center;
        overflow-x: auto;
        padding: 10px;
        box-sizing: border-box;
    }

    .df-list .list-tab li a {
        white-space: nowrap;
    }

    .df-list .list-tab a {
        cursor: pointer;
    }
</style>
<?php RenderStyle::EndStyle() ?>