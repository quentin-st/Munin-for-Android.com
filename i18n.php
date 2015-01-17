<!DOCTYPE html>
<html>
<head>
    <title>Munin for Android</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
</head>
<body>
    <?php $target = 'https://hosted.weblate.org/projects/munin-for-android/strings/'; ?>

    <div class="card i18n_container"><h2>Thank you for contributing!</h2> You will be redirected in <b><span id="secs">5</span></b> seconds to the online tool we're using
        to manage translations. If not, <a href="<?php echo $target; ?>">click here</a>.</div>

    <script>
        var remainingSecs = 5;

        setTimeout(
            function() {
                eachSecond();
            }, 1000);

        function eachSecond() {
            remainingSecs--;

            if (remainingSecs <= 0)
                window.location.replace("<?php echo $target; ?>");
            else {
                document.getElementById('secs').innerHTML = remainingSecs;

                setTimeout(
                    function() {
                        eachSecond();
                    }, 1000);
            }
        }
    </script>

</body>