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

<div id="factoriesContainer" class="row">
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
            var button = $(event.relatedTarget); // Button that triggered the modal
            var factory = button.data('factory'); // Extract info from data-* attributes

            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content.
            var modal = $(this);
            modal.find('#modalCountryFlag').attr('src', factory.countryFlag);
            modal.find('#modalCountry').text(factory.country);
            modal.find('#modalName').text(factory.name);
            modal.find('#modalYear').text(factory.year);
            modal.find('#modalLogo').attr('src', factory.logo);
            modal.find('#modalFocus').text(factory.focus);
            modal.find('#modalDescription').text(factory.description);
        });
    });
</script>


<div class="row factory-active">
    <!-- <div class="tab1"> -->

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/es.svg" alt="">
                    <span>Barcelona, Spain</span>
                </div>
                <div class="f-year">
                    <span>2017</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/fusiopoint.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Fusion Point</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#fusion">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/fusion-profil.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Laura Bellorini</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:laura.bellorini@esade.edu"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <!-- FUSION POINT -->
    <div id="fusion" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/es.svg" alt="">
                                <span>Barcelona, Spain</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Fusion Point
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2017</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/fusiopoint.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to
                                        navigate uncertainty and create a positive impact for a sustainable future.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Challenge Based Innovation (CBI): A program at CERN IdeaSquare that connects its research with societal
                                        challenges, leveraging technologies to address Sustainable Development Goals through multidisciplinary student
                                        teams.<br />Technology for Social Innovation (TeSI): This program integrates CERN&#39;s science and technology
                                        to tackle societal issues, focusing on disruptive applications and innovative business models. It teaches
                                        students to develop, assess, and communicate the impacts of new technologies on society.
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Health &amp; Wellness​, <br />Mobility &amp; Transport​, <br />Twin Transition (Green&amp;Digital),
                                        <br />Sustainability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/fusion-profil.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Laura Bellorini</h1>
                                        <p>Fusion Point Manager</p>
                                        <a href="mailto:laura.bellorini@esade.edu"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.esade.edu/en/learning-innovation/rambla/fusion-point" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>
    <div class="col-xl-6 col-md-6 grid-facto america">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/co.svg" alt="">
                    <span>Bogotá, Colombia</span>
                </div>
                <div class="f-year">
                    <span>2016</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-5.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Javeriana</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#dfjaveriana">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/dfjaveriana.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Lucas Rafael Ivorra Peñafort</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:ivorral@javeriana.edu.co"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <!-- DF JEVARIANA -->
    <div id="dfjaveriana" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/co.svg" alt="">
                                <span>Bogotá, Colombia</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Javeriana
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2016</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-5.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        DFJBOG sees innovation grounded on actual, dynamic needs of the different sectors of society, including people, other forms of life and private, public and civil-society organizations. We believe that innovation processes need to be supported by a strong sense of community, deeper emotional connections and solid trust bonds.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        "Open-Mind Fridays" (community-building)
                                        Every friday afternoon we invite the community from our campus at Pontificia Universidad Javeriana (Bogotá), to participate in different non-academic/non-professional activities, that aim to strengthen the sense of community, the trust and the emotional connections. This initiative looks for "spreading the word" of our DF, foster new connections, motivate new projects and increase the community wellbeing.
                                        <br>
                                        "Classroom Exercises" (Working with external partners)
                                        This initiative facilitates the interaction between external organizations (Private, public and civil-society) and our students, where the organizations launch a challenge and a team of students and a lecturer address the challenge. The level of detail of the possible solutions and strategies depend on the defined project scope. This initiative is based on open-innovation, challenge-based ad project-based learning strategies.
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Government, <br />
                                        banks<br />
                                        insurance companies<br />
                                        food <br />
                                        clothes<br />

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/dfjaveriana.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Lucas Rafael Ivorra Peñafort</h1>
                                        <p>Coordinator of the DFJBOGss</p>
                                        <a href="mailto:ivorral@javeriana.edu.co"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="https://www.instagram.com/designfactorypujbog/" target="_blank"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/ch.svg" alt="">
                    <span>Geneva, Switzerland</span>
                </div>
                <div class="f-year">
                    <span>2014</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/cern.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>CERN IdeaSquare</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#cern">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/cern_user.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Catarina Batista</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:catarina.batista@cern.ch"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="cern" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/ch.svg" alt="">
                                <span>Geneva, Switzerland</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        CERN IdeaSquare
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2014</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/cern.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Experimental Education, Disruptive Thinking, Interplanetary Innovation.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Challenge-Based Innovation (CBI): CBI is a project course where multidisciplinary student teams and their instructors collaborate to discover novel solutions for the future of humankind. The underpinning approach intersects societal needs anchored in the Sustainable Development Goals (SDGs) with fundamental research and deep tech to develop meaningful interventions that address global challenges.
                                        <br><br>
                                        IdeaSquare Planet: IdeaSquare's forthcoming educational endeavour, IdeaSquare Planet, is taking us on a cosmic journey to an exoplanet and then back to Earth. At its core, this approach hinges on a bold question: What if humanity were compelled to start anew on an entirely different planet?
                                        This includes designing the travel to an exoplanet, considering who and what to bring, the survival phase at landing, and how teams will be able to establish a first sustainable settlement on this exoplanet. The students then bring these learnings back to planet Earth as they consider how the solutions could be implemented to Earth systems, both in a short and long-term perspective.
                                        By making order of magnitude calculations and systemic impact assessments, students look at societal systems in a holistic and comprehensive manner, considering possible ripple effects or unintended consequences of their actions and ideas. (edited)
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Universities, <br>
                                        research instituitions, <br>
                                        executive education organisations, <br>
                                        INGOs.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/cern_user.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Catarina Batista</h1>
                                        <p>Mindset Accelerator/Educational Programmes Co-coordinator</p>
                                        <a href="mailto:ivorral@javeriana.edu.co"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://ideasquare.cern/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/it.svg" alt="">
                    <span>Bologna, Italy</span>
                </div>
                <div class="f-year">
                    <span>2019</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/operspace.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Oper.Space</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#operspace">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/operspace_user.png) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Matteo Vignoli</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:m.vignoli@unibo.it"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="operspace" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/it.svg" alt="">
                                <span>Bologna, Italy</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Oper.Space
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2019</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/operspace.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Oper.space enables the potential of individuals and organizations as innovators. We cultivate a new culture of creativity and sensitivity towards innovation connecting universities, businesses, and institutions to collectively address complex societal issues through innovation pathways that generate solutions focused on real people's needs.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        OPER.CBI (Challenge Based Innovation)
                                        A multidisciplinary innovation program where teams of students from University of Bologna tackle innovation challenges proposed by local businesses, using technologies and knowledge from CERN. Among the various skills available at CERN, we focus on those related to data management and digital transformation, which are extremely relevant in almost every field today.
                                        <br>
                                        SUGAR Network for Design Innovation
                                        A 9-month international collaboration program aimed at addressing an innovation challenge through the collaboration between two selected multidisciplinary teams of students, coming from two universities within the <a href="https://sugar-network.org/" target="_blank">Sugar network.</a> During the program the students and the corporate partners collaborate together following the Design Thinking human centred approach.
                                        <br>
                                        Recovery education practices for lower secondary school
                                        <br>
                                        The project will start in 2025 and it will be two years long. It aims to support and promote the mental well-being of middle school students through co-design workshops that follow the methodologies of the Recovery college and Design Thinking. These methodologies would be included in a path in which university students and middle school students are guided by coaches with the aim of developing new ideas to improve students' conditions.



                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Food, <br> Healthcare, <br> Automotive, <br> Manufacturing 4.0,<br> Services,

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/operspace_user.png) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Matteo Vignoli</h1>
                                        <p>Professor</p>
                                        <a href="mailto:m.vignoli@unibo.it"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://site.unibo.it/operspace/it " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/au.svg" alt="">
                    <span>Sydney, Australia</span>
                </div>
                <div class="f-year">
                    <span>2020</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/nandin.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Nandin Innovation Centre</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#nandin">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/nandin_user.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Carol Azzam Mackay</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:carol.mackay@ansto.gov.au"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="nandin" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/au.svg" alt="">
                                <span>Sydney, Australia</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Oper.Space
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2020</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/nandin.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        nandin is ANSTO’s catalyst for innovation and collaboration in the nuclear science & technology sector. nandin means “look ahead” in the local Indigenous Dharawal language, which frames our forward-thinking and imaginative approach to innovation. We embrace a culture of co-creation, creativity, and experimentation through our programs and initiatives. Our vibrant community brings together ANSTO, entrepreneurs, students, and industry to advance nuclear science and technology and tackle the challenges of tomorrow.
                                        At nandin, imagination and invention converge to bring ideas to life.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1. nandin Network: The nandin Network supports startups, businesses, students, and research teams to grow and succeed through mentoring, innovation workshops, and commercialisation support.
                                        <br>
                                        2. ANSTO Core Challenges: ANSTO Core Challenges is about connecting industry capability with complex ANSTO projects. The future of nuclear is interdisciplinary, so our Nuclear Innovation Program invites entrepreneurial minds from all sectors to upskill and collaborate on these projects.



                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        business,<br> education,<br> science,<br> deep tech,<br> nuclear,<br> manufacturing,<br> training
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/nandin_user.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Carol Azzam Mackay</h1>
                                        <p>Design and Innovation Manager</p>
                                        <a href="mailto:carol.mackay@ansto.gov.au"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://nandin.com.au" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/it.svg" alt="">
                    <span>Salerno, Italy</span>
                </div>
                <div class="f-year">
                    <span>2023</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/SEIUNISA.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>SEIUNISA</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#seiunisa">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/seiunisa_user.jpeg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Roberto Parente</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:rparente@unisa.it"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="seiunisa" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/it.svg" alt="">
                                <span>Salerno, Italy</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        SEIUNISA
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2023</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/SEIUNISA.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Student Entrepreneurship
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        - Innovators: A training fellowship aimed at Masters' Degree students enrolled in one of the 17 UNISA Departments. More than 100 hours of training on the themes of business creation, mentoring by Evangelists and study tours to vibrant international ecosystem of innovation.
                                        <br>
                                        - Grants A.L.I.: This initiative provides grants to students' entrepreneurial teams. The grants will allow them to transform their dreams in reality. SEIUNISA will offer connections with Investors, Experts, and technology Infrastructures for product development.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Start up incubators, <br> Venture Capital,<br> Evangelists,<br> Corporations,<br> Startegic Advisors
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/seiunisa_user.jpeg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Roberto Parente</h1>
                                        <p>Full Professor of Entrepreneurship and Innovation</p>
                                        <a href="mailto:rparente@unisa.itr"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://seiunisa.it/en/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/ee.svg" alt="">
                    <span>Tartu, Estonia</span>
                </div>
                <div class="f-year">
                    <span>2018</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/sandbox.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Sandbox University of Tartu</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#sandbox">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/sandbox_user.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Maria Laanelepp</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:maria.laanelepp@ut.ee"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="sandbox" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/ee.svg" alt="">
                                <span>Tartu, Estonia</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Sandbox
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2018</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/sandbox.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Our main focus is on Digital Product Management. As we are part of a digital society and also belong to the University of Tartu, Institute of Computer Science, this is quite an obvious choice. We are the hotspot for (future) product managters.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Sandbox is bridging the cap between product designers and developers. We are the only educational institution in Estonia that focuses on digital product management. We bring together students and professionals from various fields to develop innovative digital solutions. The study module covers everything you need to know about creating digital services from scratch.
                                        <br>
                                        Our program also includes a micro degree for already established PMs, community events for students and professionals, industry collaboration with companies and many more.
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Product Designers &amp; Managers
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/sandbox_user.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Maria Laanelepp</h1>
                                        <p>Program Manager</p>
                                        <a href="mailto:maria.laanelepp@ut.ee"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://sandbox.cs.ut.ee/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto america">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/cl.svg" alt="">
                    <span>Santiago & Concepción, Chile</span>
                </div>
                <div class="f-year">
                    <span>2021</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/icubo.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>iCubo UDD</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#icubo">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/icubo_user.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Paul O'Toole</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:paul@udd.cl"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="icubo" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/cl.svg" alt="">
                                <span>Santiago & Concepción, Chile</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        iCubo UDD
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2021</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/icubo.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Innovation and interdisciplinarity
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1. dLab is an innovative program that brings together students from diverse fields such as design, business, and engineering. Over the course of a year, these students work in teams, guided by the principles of design thinking, to tackle complex problems within a specific thematic area. Through this interdisciplinary approach, they combine their unique perspectives and expertise to develop creative solutions and prototypes that address real-world challenges.
                                        <br>
                                        2. Interdisciplinary Labs: provide a dynamic environment where students from different academic backgrounds collaborate on projects centered around specific challenges. These labs offer a hands-on learning experience that prepares students for the complexities of today's interconnected world, emphasizing the importance of collaboration and interdisciplinary thinking in addressing complex problems.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Government and international public entities
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/icubo_user.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Paul O'Toole</h1>
                                        <p>Executive Director</p>
                                        <a href="mailto:paul@udd.cl"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://icubo.udd.cl/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/pt.svg" alt="">
                    <span>Portugal</span>
                </div>
                <div class="f-year">
                    <span>2021</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-aveiro.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Aveiro</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#dfaveiro">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df-aveiro-user.jpeg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Afonso Borges</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:design.factory@pci.pt"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="dfaveiro" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/pt.svg" alt="">
                                <span>Portugal</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Aveiro
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2021</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-aveiro.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Our main vocation is the articulation between research and industry, developing design, prototyping and communication projects for industry, shaping and implementing new technologies and solutions.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        I´X — Experimental research is a publisher by Design Factory Aveiro with vocation to support students in the development of new products in the areas of product and communication design.
                                        Community Capacitation involves a series of workshops aimed at equipping our community with the tools and techniques essential for developing their projects within our workshop environment.
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        National Scientific System, <br>Technological Testbeds,<br> Energy Industry, <br>Local Government
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df-aveiro-user.jpeg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Afonso Borges</h1>
                                        <p>Scientific Coordinator</p>
                                        <a href="mailto:design.factory@pci.pt"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="www.designfactoryaveiro.org" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/nz.svg" alt="">
                    <span>Hamilton, New Zealand </span>
                </div>
                <div class="f-year">
                    <span>2017</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df_nz.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory NZ</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#dfnz">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df-aveiro-user.jpeg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Margi Moore</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:design.factory@pci.pt"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="dfnz" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/nz.svg" alt="">
                                <span>Hamilton, New Zealand</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory NZ
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2017</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df_nz.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        A co-creation space where students work with industry and community partners to solve complex problems.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Design Factory Industry Project - a final-year one-semester elective course for undergraduate students across multiple degree programmes, working in multidisciplinary teams to solve an industry-led challenge.
                                        <br>
                                        Master of Applied Innovation - full-time 18-month postgraduate programme where students use transdisciplinary research methods to create a change innovation for an industry or community partner.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Local Government,<br> Not-for-profit community organisations, <br>Organisations &amp; businesses focused on social or environmental good

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df_nz_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Margi Moore</h1>
                                        <p>Design Factory Lead</p>
                                        <a href="mailto:margi.moore@wintec.ac.nz"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.wintec.ac.nz/designfactory" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/de.svg" alt="">
                    <span>Germany </span>
                </div>
                <div class="f-year">
                    <span>2018</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/inno_space.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>inno.space Design Factory Mannheim</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#innospace">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/inno_space_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Prof. Kirstin Kohler</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:design.factory@pci.pt"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="innospace" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/de.svg" alt="">
                                <span>Germany</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        inno.space Design Factory Mannheim
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2018</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/inno_space.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Our unique focus lies in human-centered innovation, driven by a passion for rapid prototyping to cultivate 21st-century skills among our students. By emphasizing hands-on experimentation and iterative design processes, we empower learners to tackle real-world challenges creatively and adaptively.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        CBI A3: CBI A3, in collaboration with Design Factory Melbourne and IdeaSquare CERN, merges CERN technologies and UN Sustainable Development Goals, enabling students to design applications for future scenarios that bridge the gap between cutting-edge science and societal needs.
                                        <br>
                                        iPdP: In cooperation with HAMK, iPDP engages bachelor and master students in resolving broad business and societal challenges through design thinking methods. Teams develop innovative products and service concepts. Close collaboration with a corporate partner ensures the practical relevance of solutions, preparing students for tomorrow's innovations.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        City of Mannheim, <br> Healthcare Sector, <br>Green Industry,<br> Sustainable innovations

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/inno_space_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Prof. Kirstin Kohler</h1>
                                        <!-- <p>Design Factory Lead</p> -->
                                        <a href="#"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://inno-space.de" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto america">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/us.svg" alt="">
                    <span>New York City, U.S.A. </span>
                </div>
                <div class="f-year">
                    <span>2016</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/NYCDF_logo-01.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>NYC Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#nyc">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/nyc_u.png) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Andreea Cotoranu</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:acotoranu@pace.edu"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="nyc" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/us.svg" alt="">
                                <span>New York City, U.S.A. </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        NYC Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2016</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/NYCDF_logo-01.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Our expertise spans a broad range of technology topics including artificial intelligence, cybersecurity, gaming and human-centered design. We integrate design thinking and innovation methods with technology to prepare students with the skills needed to develop sustainable, inclusive, and future-focused solutions that prioritize the needs of both individuals and society.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Product Development –innovating water for the protection of human and environmental health -- in collaboration with the Pace Center for Technology, Policy and the Environment - Blue CoLab
                                        Product Development – creating technology solutions to enhance Access to Justice --- in collaboration with Pace Law School

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Our partners come from a variety of industries including but not limited to technology, <br>environment,<br> policy,<br> legal,<br> and government.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/nyc_u.png) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Andreea Cotoranu</h1>
                                        <p>Director</p>
                                        <a href="mailto:acotoranu@pace.edu"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.pace.edu/seidenberg/faculty-and-research/centers-and-labs/nyc-design-factory" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/de.svg" alt="">
                    <span>Stuttgart, Germany </span>
                </div>
                <div class="f-year">
                    <span>2021</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df_stutgart.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Stuttgart</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#dfstutgart">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df_stutgart_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Scarlett Spiegeler Castañeda</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:scarlett.spiegeler@arena2036.de"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="dfstutgart" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/us.svg" alt="">
                                <span>Stuttgart, Germany</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Stuttgart
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2021</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df_stutgart.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Our location at ARENA2036, the ecosystem, Design Thinking, Scrum, Kintsugi, Ikigai and Changemanagement

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1. agile student teams who get work experience by collaborating in R&D projects with industry
                                        <br>
                                        2. Professional trainings and tailored workshops

                                    </p>
                                    <!-- <div class="text-wrapper-2">Collaboration Partners</div>
                                                        <p class="div">
                                                            Our partners come from a variety of industries including but not limited to technology, <br>environment,<br> policy,<br> legal,<br> and government.
                                                            
                                                        </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df_stutgart_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Scarlett Spiegeler Castañeda</h1>
                                        <p>Head of Design Factory Stuttgart & Community Coach of ARENA2036 e.V </p>
                                        <a href="mailto:scarlett.spiegeler@arena2036.de"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="www.designfactorystuttgart.de " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/pt.svg" alt="">
                    <span>Porto, Portugal </span>
                </div>
                <div class="f-year">
                    <span>2015</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df_porto.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Porto Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#dfporto">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df_porto_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>José Reis</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:miguel.reis@sc.ipp.pt"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="dfporto" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/pt.svg" alt="">
                                <span>Porto, Portugal</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Porto Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2015</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df_stutgart.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Indistrial design and Product and Service Development

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        GTI - Global Team Based innovation is a 9 month Post-Graduation course in product and service innovation, in which students work in transdisciplinary and international teams, developing solutions for real companies.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Retail & Consumer Goods <br> Health <br> Furniture <br> Wine

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/df_stutgart_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>José Reis</h1>
                                        <p>Educational Programs Teaching Assistant & Researcher</p>
                                        <a href="mailto:miguel.reis@sc.ipp.pt"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.portic.ipp.pt/ " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/lv.svg" alt="">
                    <span>Riga, Latvia </span>
                </div>
                <div class="f-year">
                    <span>2016</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/rtu.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>RTU Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#rtu">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/rtu_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Elina Mikelsone</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:elina.mikelsone@rtu.lv"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="rtu" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/lv.svg" alt="">
                                <span>Riga, Latvia </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Porto Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2016</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/rtu.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Inspiring all RTU students to become innovators

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Student innovation activities- a variety of well-established student innovation grant programs and events, for example, IdeaLab for idea development, PAP for prototype development, VIP for collaboration in innovative scientific projects, CreativeTuesdays amazing workshops, Hack and Snack- prototype and eat, Innovation Horror Stories- students sharing innovation failure stories etc. amazing innovation activities!
                                        Coopetitions- new type of hackathons where students not only compete but also collaborate with other teams, public, private and academic sector

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Industry,<br> government, <br> all innovation ecosystem members

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/rtu_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Elina Mikelsone</h1>
                                        <p>DF manager</p>
                                        <a href="mailto:elina.mikelsone@rtu.lv"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.rtu.lv/en/innovations/science-and-innovation-centre/design-factory-2" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/cn.svg" alt="">
                    <span>Shanghai, China </span>
                </div>
                <div class="f-year">
                    <span>2010</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/sfc_cina.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Sino-Finnish Centre</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#sfc">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/sfc_cina_u.png) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Xihan Cheng (Hanna)</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:chengxihan@tongji.edu.cn"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="sfc" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/cn.svg" alt="">
                                <span>Shanghai, China </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Sino-Finnish Centre
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2010</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/sfc_cina.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Sino-Finnish Centre aims to create a strategic paradigm in innovative education, research and practice. Sino-Finnish Centre is a joint effort of Tongji University in China and Aalto University in Finland. It is a hotspot for people who want to make their ideas into reality. We believe that bringing students, companies and researchers together can create extraordinary outcomes. Sino-Finnish Centre supports the mutual goal of Aalto and Tongji to become world-class universities. Sino-Finnish Centre offers new learning experiences through international and interdisciplinary activities. Courses, workshops and lectures range from product design, innovation and sustainability to business management etc. Sino-Finnish Centre and Aalto-Tongji Design Factory welcome leading scholars and future talents from Aalto, Tongji and our key partner universities. Co-operation with leading companies, organizations and researchers is also key to our ecosystem.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Tongji-Aalto Smart Campus Summer Camp

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        The Consulate General of Finland in Shanghai; The Finnish National Agency for Education

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/sfc_cina_u.png) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Xihan Cheng (Hanna)</h1>
                                        <p>Operations Manager</p>
                                        <a href="mailto:chengxihan@tongji.edu.cn"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://sfc.tongji.edu.cn/ " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/tr.svg" alt="">
                    <span>Ankara, Türkiye</span>
                </div>
                <div class="f-year">
                    <span>2016</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/Metudf.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>METU Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#metu">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/Metudf_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Arzu Gönenç Sorguç</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:arzug@metu.edu.tr"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="metu" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/tr.svg" alt="">
                                <span>Ankara, Türkiye </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        METU Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2016</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/Metudf.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Bringing together academics from various departments of our university, METU DF prioritizes interdisciplinary work and collaborates with the industry, considering students as an integral part of this culture with its infrastructure suitable for R&D and P&D projects with various scopes and different scales.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Interdisciplinary Design Studio [course]: open to all students from all levels and all disciplines. aiming to convert theoretical knowledge and practical expertise of students into innovative product ideas and solutions to societal problems.
                                        <br><br>
                                        ECITE [project]: Emergence of Creative Industries and Transformation of Economy of Gaming, Wearables and New Generation Film Production

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        NGOs, health, aerospace, energy systems, smart solutions (for homes, cities, industries), software development, artificial intelligence, mobility, white goods, human machine interaction.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/Metudf_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Arzu Gönenç Sorguç</h1>
                                        <p>Director </p>
                                        <a href="mailto:arzug@metu.edu.tr"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://tf.metu.edu.tr/ " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto america">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/us.svg" alt="">
                    <span>Queens, NY, USA</span>
                </div>
                <div class="f-year">
                    <span>2019</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/stqueensny.webp" alt="">
                </div>
                <div class="f-factories-name">
                    <span>St. John's University Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#stqueens">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/stqueensny_u.png) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Max Hergenrother</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:hergenrm@stjohns.edu"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="stqueens" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/us.svg" alt="">
                                <span>Queens, NY, USA </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        St. John's University Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2019</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/stqueensny.webp" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        The Design Factory is an interdisciplinary product design and learning center that connects students, faculty, and industry leaders. Our mission is to develop a culture of passion-based learning at St. John’s University that pays special/unique attention to strengthen highly sought professional skills such as problem solving, innovation, and entrepreneurship for our students.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1. Business Model Competition - Interdisciplinary collaboration that helps bring inventors' IP to market. <br>2. Artifact Prototyping for Entrepreneurs - MVP prototyping and testing for entrepreneurial students trying to bring ideas to market

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Game Development, Cybersecurity, Sport Management, Television and Film, Criminal Justice, Advertising, Entrepreneurship

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/stqueensny_u.png) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Max Hergenrother</h1>
                                        <p>Associate Dean of Academic Technology and Pedagogic Innovation </p>
                                        <a href="mailto:hergenrm@stjohns.edu"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.stjohns.edu/academics/schools/college-professional-studies/innovation-and-entrepreneurship/design-factory " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/gb.svg" alt="">
                    <span>London</span>
                </div>
                <div class="f-year">
                    <span>2020</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/londondf.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory London</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#londondf">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/london_df_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Ryan Smith</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:Ryan.smith@brunel.ac.uk"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="londondf" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/gb.svg" alt="">
                                <span>London</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory London
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2020</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/londondf.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Design Factory London Overview: 1. **Interdisciplinary Collaboration:** - We advocate for interdisciplinary collaboration, where the most groundbreaking solutions emerge from the intersection of different disciplines. Students, researchers, and industry experts come together to work on real-world challenges collaboratively. 2. **Innovation and Creativity:** - We foster a culture of innovation and creativity, celebrating unconventional ideas and pushing the boundaries of what's possible. 3. **Problem-Solving:** - We are dedicated to solving real-world problems by identifying challenges and developing innovative solutions that have a meaningful impact on society, industry, and the world at large. 4. **Hands-On Learning:** - Through project-based learning, we provide hands-on, experiential learning opportunities, allowing students to apply their knowledge in practical, real-world contexts, preparing them for their future careers. 5. **Entrepreneurship and Startups:** - We nurture the entrepreneurial spirit by providing support and resources for students and researchers interested in entrepreneurship and startup ventures, encouraging the development of new businesses and initiatives with a positive impact. 6. **Technology and Digitalization:** - Embracing technology and digitalization as tools for innovation, we explore emerging technologies and digital trends, leveraging them to create cutting-edge solutions to complex challenges. 7. **Global Perspective:** - We collaborate with partners from around the world, encouraging cross-cultural exchange and collaboration to address global challenges, believing in the power of diversity and the importance of a global perspective.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Design Factory London runs The Chelsea Challenge which is in its 3rd iteration, The Global Design Challenge with 9 countries involved.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        local companies, Business groups, councils and also Professional Development arm of Brunel

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/london_df_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Ryan Smith</h1>
                                        <!-- <p>Associate Dean of Academic Technology and Pedagogic Innovation </p> -->
                                        <a href="mailto:Ryan.smith@brunel.ac.uk"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="Designfactorylondon.com " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/gb.svg" alt="">
                    <span>Manchester, UK</span>
                </div>
                <div class="f-year">
                    <span>2023</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/manchesterdf.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory, Manchester</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#manchester">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/manchesterdf_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Paul Bason</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:p.bason@mmu.ac.uk"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="manchester" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/gb.svg" alt="">
                                <span>Manchester, UK</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Manchester
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2023</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/manchesterdf.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Sustainability and reuse. Creative industries. New business models. Ethical use of technology.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1) Hackathon with Co-operatives UK exploring innovative approaches to new technology in business. <br> 2) Using student projects and other university resources to stimulate teh digital and creative industries in a town in Greater Manchester.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Businesses, development agencies, other educational institutions, arts organisations, local government, community groups

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/manchesterdf_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Paul Bason</h1>
                                        <p>Reader in Digital and Creative Industries </p>
                                        <a href="mailto:p.bason@mmu.ac.uk"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="# " target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto america">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/co.svg" alt="">
                    <span>Cali, Colombia </span>
                </div>
                <div class="f-year">
                    <span>2017</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/cali_df-01.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Cali Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#cali">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user//cali_df_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Diana Riveros</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:riveros@javerianacali.edu.co"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="cali" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/co.svg" alt="">
                                <span>Cali, Colombia</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Cali Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2017</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/cali_df-01.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        "Anyone can Cook" - Chef Gusteau. Ratatouille. At CDF we design beyond disciplinary boundaries for the global good. We believe that in this common home of ours (Laudato Si) we are all connected (Fratelli Tutti) and design is a tool for a better understanding of each other, greater comprehention of the big problems of the world and a pathway towards action and transformation.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        PDP and Design of Experiences and Services

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Agritech, Healthtech, Edutech, Government (social innovation), Food tech.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/cali_df_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Diana Riveros</h1>
                                        <p>Director of Innovation and Entrepreneurship </p>
                                        <a href="mailto:riveros@javerianacali.edu.co"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.javerianacali.edu.co/centro-de-innovacion-y-emprendimiento" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/nl.svg" alt="">
                    <span>Friesland, Netherlands </span>
                </div>
                <div class="f-year">
                    <span>2015</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/netherlanddf.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Future Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#futurenl">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/netherlanddf_u.jpeg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Eric Voigt</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:eric.voigt@nhlstenden.com"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="futurenl" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/nl.svg" alt="">
                                <span>Friesland, Netherlands</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Future Design Factory

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2015</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/netherlanddf.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        A passion-based and created learning atelier at NHL Stenden University of Applied Science for national and international students, teachers, researchers and the business community. Using Future Thinking theory in combination with Design Based Education, we build Futures Visions for a better everyday life and design new solutions for people and planet.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Future Design Weeks, intense interdisciplinairy weeks organised for students, researchers and industry. Goal is to design a future vision for the challenge at hand.
                                        <br><br>
                                        BLØKHAUS: a interdisciplinary collaboration of 4 minors where students, teachers and industry create educational innovation together.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        The field of education, but also local and regional government and industry in general. We work together under the umbrella of Broad Prosperity, a vision in with we all strive to create a better Future.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/cali_df_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Eric Voigt</h1>
                                        <p>Coordinator Future Design Factory </p>
                                        <a href="mailto:eric.voigt@nhlstenden.com"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.linkedin.com/company/86045761/admin/feed/posts/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/lt.svg" alt="">
                    <span>Vilnius, Lithuania</span>
                </div>
                <div class="f-year">
                    <span>2021</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-6.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>VILNIUS TECH</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#vilnus">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/vilnus_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Monika Grinevičiūtė</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:monika.grineviciute@vilniustech.lt"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="vilnus" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/lt.svg" alt="">
                                <span>Vilnius, Lithuania</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        VILNIUS TECH

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2021</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-6.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Connecting the [im]possibles – we are blurring the lines between rapid prototyping technologies and media with a touch of virtual production. We excel in creating interdisciplinary fields and forging unique pathways for students.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        MAKERS 5.0 – an intensive short programme tailored for local and international students focusing on rapid prototyping, design thinking, and product development, spiced with hands-on experiences.
                                        <br><br>
                                        Coordinating the new initiative in the virtual production industry – managing the newly opened virtual production studio in Lithuania, VILNIUS TECH 'Faux Real Studio.' This initiative is tailored for interdisciplinary work among artists, students, and the film industry.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Tech & engineering; creative industries; arts & social business

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/vilnus_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Monika Grinevičiūtė</h1>
                                        <p>Creative project manage </p>
                                        <a href="mailto:monika.grineviciute@vilniustech.lt"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://vilniustech.lt/linkmenu-fabrikas/103864?lang=2" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto america">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/cl.svg" alt="">
                    <span>Santiago, Chile</span>
                </div>
                <div class="f-year">
                    <span>2012</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/ddhub.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>DDHUB - Duoc Design Hub</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#ddhub">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/ddhub_u.png) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Paulo Caviglia</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:pcavilgia@duoc.cl"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="ddhub" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/cl.svg" alt="">
                                <span>Santiago, Chile</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        DDHUB - Duoc Design Hub

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2012</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/ddhub.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        We believe in the transformative power of design, so our purpose is to promote transformations through design.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Aplica Diseño: is an academic program to link the students of the Duoc's School of Design with public and/or private companies and organizations by carrying out collaborative projects in which the students apply the skills acquired to solve real problems. The program is implemented throughout the School of Design, in all our programs (Graphic design, Industrial design, Fashion design, Interior design, Web development and design, illustration).
                                        Strategic projects: DDHUB is the unit in charge of leading the R+D+i activities carried out by Duoc's School of Design school, generating projects and forming dedicated research teams.


                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        We work with public and private companies of different sizes in diverse areas and fields, generally linked to the disciplinary areas that the School of Design programs address.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/ddhub_u.png) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Paulo Caviglia</h1>
                                        <p>Subdirector de Proyectos Escuelas </p>
                                        <a href="mailto:pcavilgia@duoc.cl"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://diseno.duoc.cl/ddhub/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/kr.svg" alt="">
                    <span>Seoul, Republic of Korea</span>
                </div>
                <div class="f-year">
                    <span>2015</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/korseldf-01.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Korea</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#korsel">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/korseldf_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Hyun-Kyung Lee</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:designfactorykorea@yonsei.ac.kr"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="korsel" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/kr.svg" alt="">
                                <span>Seoul, Republic of Korea</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Korea

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2012</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/korseldf-01.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Design Factory Korea is an open platform where education meets industries to solve real problems based on interdisciplinary team projects. DFK creates values through problem based learning, providing an experimental learning environment to build innovative knowledge ecosystem.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1) Capstone Project
                                        The Capstone Project is a project-based course in which students come up with innovative and marketable products or services through the 4-stage development process, including definition, conceptualization, prototyping and evaluation. Students have presentation about their final result at the Capstone Gala Night which is an annual event finalizing the class.
                                        <br><br>
                                        2) UNOSD SDGs Youth Summer Camp
                                        The UNOSD SDGs Youth Summer Camp is a global gathering where young adults from various countries come together to address global social issues. Using the Design Thinking process, participants define problems related to the Sustainable Development Goals (SDGs), ideate solutions, create prototypes, and deliver them.


                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Educational Institution, Government, Non-profit Organization, Business

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/korseldf_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Hyun-Kyung Lee</h1>
                                        <p>Director </p>
                                        <a href="mailto:designfactorykorea@yonsei.ac.kr"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://dfk.yonsei.ac.kr/sss" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/sg.svg" alt="">
                    <span>Singapore</span>
                </div>
                <div class="f-year">
                    <span>2018</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/SIT.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory SIT</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#sit">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/SIT_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Ho Hung Yi</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:hungyi.ho@singaporetech.edu.sg"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="sit" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/sg.svg" alt="">
                                <span>Singapore</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory SIT

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2018</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/SIT.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Design Factory@SIT (DF@SIT) adopts a user-centric model, supporting industry partners through collaborative innovation projects. This approach creates authentic interdisciplinary and collaborative learning opportunities for students while enhancing the workplace learning continuum. DF@SIT guides businesses in discovering unique value propositions through a multidisciplinary co-creation approach in design innovation and experimentation!

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        1. A Design Thinking course with volunteer managers from Singapore’s National Council of Social Service!
                                        <br>
                                        2. Developing an intuitive and 3D-printable compliant mechanism for microsurgery practice, optimising the clamping effect to ensure ease of assembly and compliance with medical standards.


                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Healthcare Partners (local hospitals and doctors), Heritage Institutions, Social Service Institutions
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/SIT_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Ho Hung Yi</h1>
                                        <p>Centre Manager for DF@SIT</p>
                                        <a href="mailto:hungyi.ho@singaporetech.edu.sg"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.singaporetech.edu.sg/DesignFactory" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/es.svg" alt="">
                    <span>Spain</span>
                </div>
                <div class="f-year">
                    <span>2017</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/upv.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>UPV Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#upv">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/upv_u.jpeg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Fanny Collado</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:age@upv.es"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="upv" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/es.svg" alt="">
                                <span>Spain</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        UPV Design Factory

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2017</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/upv.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Soft skills development, prototyping

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        There are 60 groups working in different activities, we offer only basic training for their activities

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Local government, <br> and some sponsors supporting the teams

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/upv_u.jpeg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Fanny Collado</h1>
                                        <p>UPV Design Factory Area Director</p>
                                        <a href="mailto:dage@upv.es"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://generacionespontanea.upv.es/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/au.svg" alt="">
                    <span>Melbourne, Australia</span>
                </div>
                <div class="f-year">
                    <span>2011</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-4.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Swinburne Design Factory Melbourne</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#melbourne">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/melbournedf_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Pauliina Mattila</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:pmattila@swin.edu.au"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="melbourne" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/au.svg" alt="">
                                <span>Melbourne, Australia</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Swinburne Design Factory Melbourne

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2011</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-4.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Swinburne Design Factory Melbourne (DFM) is a world-leading innovation lab, the third founding Design Factory in a network of global partners – and the first in the southern hemisphere. A team of sector-agnostic, interdisciplinary experts, Design Factory Melbourne: unpacks your organisation’s complex problems using design thinking converts your ideas into tangible concepts operates as a sandbox to mitigate risk, test ideas, explore customer segments, and expand the market connects your organisation to Swinburne’s research ecosystem. Students from all disciplines can study with Design Factory Melbourne for an immersive, hands-on experience, living and breathing organisations’ real-world problems.
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Challenge Based Innovation (CBI)
                                        Inclusive Design

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        healthcare/technology/local councils

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/melbournedf_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Pauliina Mattila</h1>
                                        <p>Senior Lecturer</p>
                                        <a href="mailto:pmattila@swin.edu.au"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.swinburne.edu.au/design-factory-melbourne/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/il.svg" alt="">
                    <span>Tel-Aviv, Israel </span>
                </div>
                <div class="f-year">
                    <span>2019</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/dfs.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Shenkar</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#dfs">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/dfs_u.png) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Dr. Assaf Krebs</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:assaf.krebs@shenkar.ac.il"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="dfs" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/il.svg" alt="">
                                <span>Tel-Aviv, Israel </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Shenkar

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2019</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-4.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Global-Interdisciplinarity, SDG orientation, Human-AI interaction and ethics, design thinking methodology research

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Jamweek- a four-day academic course engaging students and lecturers across all departments. The course is based on cross-disciplinary workshops and sessions, unified under a central theme picked every year (aging, environment, culture, education, etc.). Multidisciplinary teams are required to tackle real-world challenges provided by various organizations.
                                        <br><br>
                                        TOM summer workshop - an internship course that addresses niche segments with special needs and creates tailor-made dedicated assistive solutions, for their physical welfare benefits.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        Social non-profit organizations, research centers, textiles, agriculture, food-tech, start-up accelerators, healthcare, municipalities.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/melbournedf_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Dr. Assaf Krebs</h1>
                                        <!-- <p>Senior Lecturer</p> -->
                                        <a href="mailto:assaf.krebs@shenkar.ac.il"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/fr.svg" alt="">
                    <span>Nantes, France </span>
                </div>
                <div class="f-year">
                    <span>2022</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/francenantes.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Nantes</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#france">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/francenantes_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Astrid Corbineau</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:Astrid.Corbineau@univ-nantes.fr"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="france" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/fr.svg" alt="">
                                <span>Nantes, France </span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Nantes

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2022</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/francenantes.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Bringing together design, engineering and the human and social sciences to train user experience professionals able to tackle companies' challenges coming from contemporary major changes and issues.es and issues.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        A training/innovation programme offering a collaborative, multidisciplinary experience with a socio-economic player, around a challenge to be met by creating a testable prototype.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        We work with all types of sectors: public authorities (health, culture, ecology, etc.), industry (energy, materials, etc.), digital companies, town planners, retail, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/francenantes_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Astrid Corbineau</h1>
                                        <p>Design Factory Nantes coordinator</p>
                                        <a href="mailto:Astrid.Corbineau@univ-nantes.fr"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href=" https://entreprises.univ-nantes.fr/innovez-grace-a-notre-recherche/design-factory-nantes-bringing-together-design-engineering-and-the-human-and-social-sciences-to-train-user-experience-professionals-able-to-tackle-companies-challenges-coming-from-contemporary-major-changes-and-issues" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/fi.svg" alt="">
                    <span>Espoo, Finland </span>
                </div>
                <div class="f-year">
                    <span>2008</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-2.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Aalto Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#alto">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/Alto_u.jpg) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>Klaus Castrén</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:klaus.e.castren@aalto.fi"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="alto" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/fi.svg" alt="">
                                <span>Espoo, Finland</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Aalto Design Factory

                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2008</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-2.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        Aalto Design Factory spearheads experimentation in collaborative product development education, research and practice, bringing together diverse stakeholders across different disciplines and organizations. We develop lighthouse initiatives and foster a community of practice for exploring novel formats of research-based development collaboration practice and interdisciplinary education.

                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        Product Development Project is our longest standing course, with over 25 years of students working with industry partners to develop functional solutions to challenges. In addition to courses, we do research and development project to create new collaboration practices for innovation.

                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        We work with the engineering, science, design, art and business programs with Aalto and a wide range of external partners, particularly technology companies.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/Alto_u.jpg) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Klaus Castrén </h1>
                                        <p>Head of Community</p>
                                        <a href="mailto:klaus.e.castren@aalto.fi"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://designfactory.aalto.fi/" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/jp.svg" alt="">
                    <span>Kyoto, Japan</span>
                </div>
                <div class="f-year">
                    <span>2017</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-3.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Kyoto Design Lab</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#kyoto">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:sushi@kit.ac.jp"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="kyoto" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/jp.svg" alt="">
                                <span>Kyoto, Japan</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Kyoto Design Lab
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2017</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-3.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Sushi Suzuki</h1>
                                        <p>N/A</p>
                                        <a href="mailto:sushi@kit.ac.jp"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/pl.svg" alt="">
                    <span>Warsaw, Poland</span>
                </div>
                <div class="f-year">
                    <span>2017</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/Warsaw_niversity.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Warsaw Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#warsaw">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:PiotrekPalka@gmail.com"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="warsaw" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/pl.svg" alt="">
                                <span>Warsaw, Poland</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Warsaw Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2017</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/Warsaw_niversity.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Piotr Palka</h1>
                                        <p>N/A</p>
                                        <a href="mailto:PiotrekPalka@gmail.com"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/fi.svg" alt="">
                    <span>Finland</span>
                </div>
                <div class="f-year">
                    <span>2019</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/hamk-design-factory-logo-valkoinen-pohja.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>HAMK Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#hamk">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:jari.jussila@hamk.fi"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="hamk" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/fi.svg" alt="">
                                <span>Finland</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        HAMK Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2019</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/hamk-design-factory-logo-valkoinen-pohja.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Jari Jussil</h1>
                                        <p>N/A</p>
                                        <a href="mailto:jari.jussila@hamk.fi"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto asia">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/kr.svg" alt="">
                    <span>Hannam, South Korea</span>
                </div>
                <div class="f-year">
                    <span>2019</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/HDF_final_color_logo.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Hannam Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#hannam">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:df@hnu.kr"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="hannam" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/kr.svg" alt="">
                                <span>Hannam, South Korea</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Hannam Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2019</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/hamk-design-factory-logo-valkoinen-pohja.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Hyo-Hyun Park</h1>
                                        <p>N/A</p>
                                        <a href="mailto:df@hnu.kr"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/de.svg" alt="">
                    <span>Pforzheim, Germany</span>
                </div>
                <div class="f-year">
                    <span>2021</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/Pforzheim.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Design Factory Pforzheim</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#pforzheim">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:caroline.bechtold@hs-pforzheim.de"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="pforzheim" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/de.svg" alt="">
                                <span>Pforzheim, Germany</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Design Factory Pforzheim
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2021</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/Pforzheim.png" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Caroline Bechtold</h1>
                                        <p>N/A</p>
                                        <a href="mailto:caroline.bechtold@hs-pforzheim.de"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/fi.svg" alt="">
                    <span>Helsinki, Finland</span>
                </div>
                <div class="f-year">
                    <span>2021</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/df-1.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Viikki Food Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#Viikki">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:laura.forsman@helsinki.fi"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="Viikki" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/fi.svg" alt="">
                                <span>Helsinki, Finland</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Viikki Food Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2021</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/df-1.png">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Laura Forsman</h1>
                                        <p>N/A</p>
                                        <a href="mailto:laura.forsman@helsinki.fi"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-md-6 grid-facto europe">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/ie.svg" alt="">
                    <span>Ireland</span>
                </div>
                <div class="f-year">
                    <span>2023</span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="img/assets/df/forge.png" alt="">
                </div>
                <div class="f-factories-name">
                    <span>Forge Design Factory</span>
                    <ul>
                        <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                             <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                        <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#forge">Read more</a></li>

                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                    </div>
                    <span>N/A</span>
                </div>
                <div class="inn-right">
                    <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="mailto:rebecca.marsden@tus.ie"><img src="img/assets/df/icw_email.png" alt=""></a>

                </div>
            </div>
        </div>
    </div>
    <div id="forge" class="modal fade" role="dialog">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="containter body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img src="img/assets/country/flags/ie.svg" alt="">
                                <span>Ireland</span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div class="fussion-title">
                                        Forge Design Factory
                                    </div>
                                    <div class="fussion-year">
                                        <p>
                                            Founded year &nbsp;&nbsp;<strong>2023</strong>
                                        </p>
                                        <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img src="img/assets/df/forge.png">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div class="text-wrapper">Unique Focus</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Signature Courses</div>
                                    <p class="div">
                                        N/A
                                    </p>
                                    <div class="text-wrapper-2">Collaboration Partners</div>
                                    <p class="div">
                                        N/A

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/404.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Rebecca Marsden</h1>
                                        <p>N/A</p>
                                        <a href="mailto:rebecca.marsden@tus.ie"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="#" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
            </div>

        </div>
    </div>
    <!-- </div> -->
</div>

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