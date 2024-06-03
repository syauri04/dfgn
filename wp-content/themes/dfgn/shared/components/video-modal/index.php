
<?php
include 'style.css.php';
?>

<!-- Popup untuk modal -->
<!-- buat jadi komponen di panggil di page yg membutuhkan aja -->

<!-- 
    Pemanggilan cukup tambahkan
    class="video-btn" data-video-url="#" 
 -->

 <div id="videoModal" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">
                    <div class="row">
                        <div class="v-close">
                            <a>
                                <img class="closeModal" src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop"></div>


<!-- style & script bisa di wrap pakai RenderJS & RenderStyle -->
<?php RenderJS::start(); ?>
<script>
    function openModal(element) {
        var videoUrl = element.getAttribute('data-video-url');
        document.getElementById('videoIframe').src = videoUrl;
        document.getElementById('videoModal').classList.add('show');
        document.body.classList.add('modal-open');
        document.querySelector('.modal-backdrop').classList.add('show');
    }

    function closeModal() {
        document.getElementById('videoIframe').src = '';
        document.getElementById('videoModal').classList.remove('show');
        document.body.classList.remove('modal-open');
        document.querySelector('.modal-backdrop').classList.remove('show');
    }
    window.onclick = function(event) {
        var modal = document.getElementById('videoModal');
        console.log(event.target)
        console.log(event.target.classList.contains('closeModal'));
        if (event.target == modal || event.target.classList.contains('closeModal')) {
            closeModal();
        }
    }
    document.querySelectorAll('.video-btn').forEach(function(button) {
        button.onclick = function(event) {
            event.preventDefault();
            openModal(this);
        };
    });
</script>
<?php RenderJS::end(); ?>

