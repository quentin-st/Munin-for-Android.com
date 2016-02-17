<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet">

    <title>Munin for Android</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div class="card i18n_container"><h2>Thank you for contributing!</h2> You will be redirected in <b><span id="secs">5</span></b> seconds to the online tool we're using
        to manage translations. If not, <a href="https://hosted.weblate.org/projects/munin-for-android/strings/">click here</a>.</div>

    <script>
        var remainingSecs = 5;

        setTimeout(
            function() {
                eachSecond();
            }, 1000);

        function eachSecond() {
            remainingSecs--;

            if (remainingSecs <= 0)
                window.location.replace("https://hosted.weblate.org/projects/munin-for-android/strings/");
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
