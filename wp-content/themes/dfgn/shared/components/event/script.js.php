<?php RenderJS::start() ?>
<script>
    function addToCalendar(eventId, title, description, startTime, endTime, location) {
        const icsContent =
            "BEGIN:VCALENDAR\n" +
            "VERSION:2.0\n" +
            "PRODID:-//Your Organization//NONSGML v1.0//EN\n" +
            "BEGIN:VEVENT\n" +
            "UID:" + eventId + "\n" +
            "DTSTAMP:" + new Date().toISOString().replace(/[-:]/g, '').split('.')[0] + "Z\n" +
            "ORGANIZER;CN=Organizer Name:MAILTO:organizer@example.com\n" +
            "DTSTART:" + new Date(startTime).toISOString().replace(/[-:]/g, '').split('.')[0] + "Z\n" +
            "DTEND:" + new Date(endTime).toISOString().replace(/[-:]/g, '').split('.')[0] + "Z\n" +
            "SUMMARY:" + title + "\n" +
            "DESCRIPTION:" + description + "\n" +
            "LOCATION:" + location + "\n" +
            "END:VEVENT\n" +
            "END:VCALENDAR";

        const blob = new Blob([icsContent], {
            type: 'text/calendar'
        });
        const url = URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = 'event.ics';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }
</script>

<script>
    function initializeCountdown(countdownElement) {
        const endTime = parseInt(countdownElement.getAttribute('data-end-time') + "000");
        const countdownElements = {
            days: countdownElement.querySelector('.days'),
            hours: countdownElement.querySelector('.hours'),
            minutes: countdownElement.querySelector('.minutes')
        };

        function updateCountdown() {
            const now = new Date();
            const nowFormatted = now.toDateString();
            const nowTime = now.getTime();
            const distance = endTime - nowTime;

            console.log(`Now: ${nowTime}, End time: ${endTime}, Distance: ${distance}`);

            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

                countdownElements.days.textContent = days ?? 0;
                countdownElements.hours.textContent = hours ?? 0;
                countdownElements.minutes.textContent = minutes ?? 0;
            } else {
                countdownElements.days.textContent = 0;
                countdownElements.hours.textContent = 0;
                countdownElements.minutes.textContent = 0;
            }
        }

        updateCountdown();
        setInterval(updateCountdown, 60000);
    }

    document.querySelectorAll('.countdown').forEach(initializeCountdown);
</script>

<script>
    $(document).ready(function() {
        $(".grid-events").imagesLoaded(function() {
            var $grid = $(".grid-events").isotope({
                itemSelector: ".grid-events-items",
                layoutMode: 'fitRows'
            });

            // Trigger layout after initialization
            $grid.isotope('layout');

            $('#select-event').on('change', function() {
                var filterValue = $(this).val();
                $grid.isotope({
                    filter: filterValue
                });
            });
        });
    });
</script>

<?php RenderJS::end() ?>