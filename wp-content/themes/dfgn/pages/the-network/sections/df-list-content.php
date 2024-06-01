<?php
include 'df-list-content.css.php';
// include 'df-list-content.js.php';
// include get_template_directory() .'/pages/the-network/components/factory-functions.php';
// echo createFactoryModal();
?>

<div class="df-list">

    <div class="df-list-tab border-head-df">
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

    <div class="df-list-items row" id="factoryItemsContainer">

    </div>
</div>

<div id="factoryCardsContainer" style="display:none;">
    <div class="card-factory col-xl-6 col-md-6 grid-facto">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="" alt="" class="factory-flag">
                    <span class="factory-country"></span>
                </div>
                <div class="f-year">
                    <span class="factory-year"></span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="" alt="" class="factory-image">
                </div>
                <div class="f-factories-name">
                    <span class="factory-name"></span>
                    <ul>
                        <li class="mr-0">
                            <a href="#" class="rm" data-toggle="modal" data-target="#factoryModal" data-factory="<?= htmlspecialchars(json_encode("data")) ?>">Read more</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <div class="user-image"></div>
                    <span class="factory-profileName"></span>
                </div>
                <div class="inn-right">
                    <a href="#" class="factory-profileLinkedIn">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_linkedin.png'; ?>" alt="">
                    </a>
                    <a href="#" class="factory-profileEmail">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_email.png'; ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetchFactoryData();
    });

    function fetchFactoryData() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '<?php echo home_url(); ?>/wp-json/api/v1/designfactory', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    renderFactoryItems(data);
                    console.log(data);
                } else {
                    console.error('Error fetching factory data:', xhr.status);
                }
            }
        };
        xhr.send();
    }

    function renderFactoryItems(data) {
        var factoryItemsContainer = document.getElementById('factoryItemsContainer');
        factoryItemsContainer.innerHTML = '';
        console.log(data);

        // Iterate over each factory in the data array
        data.forEach(function(factory) {
            // Clone the factory card template
            var factoryCard = document.querySelector('#factoryCardsContainer .card-factory').cloneNode(true);

            // Set the values for each element in the factory card
            factoryCard.querySelector('.factory-flag').src = factory.flagImage;
            factoryCard.querySelector('.factory-country').textContent = factory.country;
            factoryCard.querySelector('.factory-year').textContent = factory.year;
            factoryCard.querySelector('.factory-image').src = factory.image;
            factoryCard.querySelector('.factory-name').textContent = factory.name;
            factoryCard.querySelector('.factory-profileName').textContent = factory.profileName;
            factoryCard.querySelector('.factory-profileLinkedIn').href = factory.profileLinkedIn;
            factoryCard.querySelector('.factory-profileEmail').href = 'mailto:' + factory.profileEmail;

            // Append the factory card to the container
            factoryItemsContainer.appendChild(factoryCard);
        });
    }
</script>
