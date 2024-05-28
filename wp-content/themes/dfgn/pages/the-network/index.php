
<main>
    <section id="the-network" class="service-area pt-100 ">
        <div class="container">
            <?php include 'head-content.php' ?>
            <?php include 'total-content.php' ?>
            <?php include 'design-factory-list.php' ?>
        </div>
    </section>
    <?php _include('shared/components/contact-us-cta/index.php'); ?>
</main>


<script>
    $(".filter-factory a").on("click", function(event) {
        // Hapus class active dari semua elemen di dalam ul
        $('.filter-factory a.active').removeClass('active');

        // Tambahkan class active ke elemen yang diklik
        $(this).addClass('active');
        event.preventDefault();
    });
</script>

<script>
    // $(document).ready(function() {
    // $('#dfjaveriana').modal('show');
    // });
    // Show modal only if redirected from "Read more" link
    window.onload = function() {
        var urlParams = new URLSearchParams(window.location.search);
        var showModalParam = urlParams.get('showModal');
        $('#' + showModalParam).modal('show'); // Show the modal
        //   if (showModalParam == 'true') {
        //     $('#dfjaveriana').modal('show'); // Show the modal
        //   }
    };
</script>