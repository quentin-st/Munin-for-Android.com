$(document).ready(function() {
    // Keep button on top of screen when scrolling
    $(window).scroll(function() {
        if ($(window).width() < 646)
            $('#gplay').removeClass('gplay_cont_fixed');
        else {
            if ($(this).scrollTop() > $('#gplay_container').offset().top)
                $('#gplay').addClass('gplay_cont_fixed');
            else
                $('#gplay').removeClass('gplay_cont_fixed');
        }
    });

    $('#gplay').css('width', $('#gplay_container').width());
    $(window).resize(function() {
        $('#gplay').css('width', $('#gplay_container').width());
    });
});

// GCM stats
(function() {
    var blocks = [
        ['year', 60*60*24*365], ['month', 60*60*24*31], ['week', 60*60*24*7],
        ['day', 60*60*24], ['hour', 60*60], ['minute', 60], ['second', 1]
    ];
    // Two most significant units, e.g. "3 hours 12 minutes"
    function humanReadable(diff) {
        var result = [];
        for (var i = 0; i < blocks.length && result.length < 2; i++) {
            var amount = Math.floor(diff / blocks[i][1]);
            if (amount >= 1) {
                result.push(amount + ' ' + blocks[i][0] + (amount > 1 ? 's' : ''));
                diff -= amount * blocks[i][1];
            }
        }
        return result.join(' ');
    }

    fetch('https://gcm-proxy.munin-for-android.com/stats')
        .then(function(r) { if (!r.ok) throw new Error(r.status); return r.json(); })
        .then(function(json) {
            const hits = json.hits_count, last = json.last_hit;
            const $stats = $('#gcm-stats');
            $stats.find('.hits').html(String(hits).split('').map(function(d) {
                return '<div class="hit-digit">' + d + '</div>';
            }).join(''));
            $stats.find('.last-hit').text(humanReadable(Math.abs(last - Date.now() / 1000)));
            // 1470344400 is when we began to stat
            $stats.find('.frequency').text(humanReadable(Math.abs(last - 1470344400) / hits));
            $stats.prop('hidden', false);
        })
        .catch(function(e) { console.warn('Could not load GCM stats', e); });
})();
