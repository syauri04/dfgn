<?php RenderJS::start() ?>
<script>
    //  tab scroll 
    // seharusnya taro secara global
    document.addEventListener('DOMContentLoaded', () => {
        const listChronicles = document.querySelector('.scroll-container');
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
            const walk = (x - startX) * 1;
            listChronicles.scrollLeft = scrollLeft - walk;
        });
    });
</script>
<?php RenderJS::end() ?>