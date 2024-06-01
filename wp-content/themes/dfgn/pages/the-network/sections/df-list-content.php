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
                        <li><a href="#" class="active">All Continents</a></li>
                        <li><a href="#" class="" data-filter="america">Americas</a></li>
                        <li><a href="#" class="" data-filter="asia">Asia Pacific</a></li>
                        <li><a href="#" class="" data-filter="europe">Europe and the Middle East</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="df-list-items row" id="factoryItemsContainer">

        </div>
        <div id="loading" style="display:none;">
            <div style="text-align:center; padding:50px">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin: auto; background: none; display: block;" width="60px" height="60px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#FFF" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                    </circle>
                </svg>

            </div>
        </div>

    </div>

</div>

<div id="factoryCardsContainer" style="display:none;">
    <div class="card-factory col-xl-6 col-lg-6 grid-facto factory-continent">
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
                            <a href="#" class="rm" data-toggle="modal" data-target="#factoryModal" data-factory-id="295">Read more</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <div class="user-image" style="background: #3b3b3b59;aspect-ratio:1/1;width: auto;">
                        <img class="factory-profileImage" style="width: 100%;height:100%;object-fit: cover;">
                    </div>
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

<div id="factoryModal" class="modal fade" role="dialog">
    <div class="modal-dialog factory-detail" style="width: auto;margin: 0 auto; min-height: 100vh;display: flex;justify-content: center;align-items: center; ">
        <div class="container modal-content">
            <div class="modal-body">
                <div class="body-pop">
                    <div class="row mb-50" style="align-items: center;">
                        <div class="col-xl-5 col-md-5 f-country">
                            <img id="modalCountryFlag" src="" alt="">
                            <span id="modalCountryName"></span>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="innerf">
                                <div id="modalFactoryName" class="fussion-title"></div>
                                <div class="fussion-year">
                                    <p>Founded year &nbsp;&nbsp;<strong id="modalFactoryYear"></strong></p>
                                    <a href="#" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() ?>img/assets/close-popup.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-md-5 logo-factories">
                            <img id="modalLogo" src="" alt="">
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="text">
                                <div id="modalFactoryFocus" class="text-wrapper"></div>
                                <p id="modalFactoryDescription" class="div"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-30">
                        <div class="col-xl-5 col-md-5">
                            <div class="pp-profil">
                                <div class="prof">
                                    <div class="user-image" style="background: #3b3b3b59;aspect-ratio:1/1;width: auto;">
                                        <img id="modalProfilePicture" style="width: 100%;height:100%;object-fit: cover;">
                                    </div>
                                </div>
                                <div class="somd">
                                    <h1 id="modalProfileName"></h1>
                                    <p id="modalProfilePosition"></p>
                                    <a id="modalProfileEmail" href="#"><img src="img/assets/df/icw_email.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="border-black">
                                <div class="list-smd">
                                    <a id="modalLinkedIn" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_linkedin.png'; ?>" alt=""></a>
                                    <a id="modalFacebook" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw-fb.png'; ?>" alt=""></a>
                                    <a id="modalInstagram" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw-ig.png'; ?>" alt=""></a>
                                    <a id="modalX" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw-x.png'; ?>" alt=""></a>
                                </div>
                                <div class="btn-f-web">
                                    <a id="modalWebsiteLink" href="#" target="_blank">Visit website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php RenderJS::start() ?>
<script>
    $(document).ready(function() {
        fetchFactoryData();

        function fetchFactoryData(continent) {
            var url = '<?php echo home_url(); ?>/wp-json/api/v1/designfactory';
            showLoading();
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    continent: continent
                },
                success: function(data) {
                    renderFactoryItems(data);
                    // console.log(data);
                    hideLoading();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching factory data:', status);
                    hideLoading();
                },
            });
        }

        function showLoading() {
            $("#loading").show();
        }

        function hideLoading() {
            setTimeout(function() {
                $("#loading").hide();
            }, 1000);
        }

        var $grid = $(".df-list-items").isotope({
            itemSelector: ".card-factory",
            percentPosition: true,
            masonry: {
                columnWidth: ".card-factory"
            }
        });

        async function renderFactoryItems(data) {
            var factoryItemsContainer = $('#factoryItemsContainer');
            factoryItemsContainer.empty();

            await $.each(data, function(index, factory) {
                var factoryCard = $('#factoryCardsContainer .card-factory').clone();
                factoryCard.find('.factory-flag').attr('src', factory.flagImage);
                factoryCard.find('.factory-country').text(factory.country);
                factoryCard.find('.factory-year').text(factory.year);
                factoryCard.find('.factory-image').attr('src', factory.image);
                factoryCard.find('.factory-name').text(factory.name);
                factoryCard.find('.factory-profileImage').attr('src', factory.profile_image ?? '');
                if (!factory.profile_image) {
                    factoryCard.find('.factory-profileImage').remove();
                }
                factoryCard.find('.factory-profileName').text(factory.profileName);
                factoryCard.find('.factory-profileLinkedIn').attr('href', factory.profileLinkedIn);
                factoryCard.find('.factory-profileEmail').attr('href', 'mailto:' + factory.profileEmail);

                factoryItemsContainer.append(factoryCard);
            });

            gsap.utils.toArray('.card-factory').forEach(function(card) {
                gsap.fromTo(card, {
                    opacity: 0,
                    y: 50
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 100%',
                        end: '+=40%',
                        scrub: true
                    }
                });
            });
            // $(window).trigger('resize');
            window.dispatchEvent(new Event('resize'));
        }

        // var $grid = $(".factory-active").isotope({
        //     itemSelector: ".grid-facto",
        //     percentPosition: true,
        //     masonry: {
        //         // use outer width of grid-sizer for columnWidth
        //         // columnWidth: 1
        //     }
        // });

        $(".filter-factory").on("click", "a", function(event) {
            $('.filter-factory a.active').removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr("data-filter");
            fetchFactoryData(filterValue);

            $grid.isotope('layout');

            // $grid.isotope({
            //     filter: filterValue
            // });
            // tambah efek ketika data di load

            event.preventDefault();

        });

        // Modal Function

        $(".df-list-items").on("click", ".rm", function(event) {
            var factoryId = $(this).data("factory-id");
            fetchFactoryDetail(factoryId);
        });

        function fetchFactoryDetail(factoryId) {
            var url = '<?php echo home_url(); ?>/wp-json/api/v1/designfactory/detail/' + factoryId;
            // showLoading();
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    renderFactoryDetail(data);
                    // hideLoading();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching factory detail:', status);
                    // hideLoading();
                },
            });
        }

        function renderFactoryDetail(factoryDetail) {
            $('#modalCountryFlag').attr('src', factoryDetail.flagImage);
            $('#modalCountryName').text(factoryDetail.country);
            $('#modalFactoryName').text(factoryDetail.name);
            $('#modalFactoryYear').text(factoryDetail.year);
            $('#modalLogo').attr('src', factoryDetail.image);
            $('#modalFactoryFocus').html(factoryDetail.description.focus);
            $('#modalFactoryDescription').html(factoryDetail.description.signatureCourses + "<br>" + factoryDetail.description.collaborationPartners);
            $('#modalProfilePicture').attr('src', factory.profile_image ?? '');
            $('#modalProfileName').text(factoryDetail.profileName);
            $('#modalProfilePosition').text(factoryDetail.profilePosition);
            $('#modalProfileEmail').attr('href', 'mailto:' + factoryDetail.profileEmail);
            $('#modalLinkedIn').attr('href', factoryDetail.profileLinkedIn);
            // Set other elements similarly
        }
    });
</script>
<?php RenderJS::end() ?>