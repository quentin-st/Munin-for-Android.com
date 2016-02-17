<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet">

    <title>Munin for Android</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

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

    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(["setDomains", ["*.munin-for-android.com"]]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//piwik.s-quent.in/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 5]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//piwik.s-quent.in/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-wrap">
                    <div class="logo-wrap">
                        <img src="img/logo-light.png" alt="Munin for Android" /> <h1>Munin for Android</h1>
                    </div>
                    <div class="menu">
                        <a href="https://play.google.com/store/apps/details?id=com.chteuchteu.munin"><i class="mdi mdi-google-play"></i> Download</a>
                        <a href="https://github.com/chteuchteu/Munin-for-Android"><i class="mdi mdi-github-circle"></i> GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 content">
                <div class="row">
                    <div class="content-top">
                        <div class="row">
                            <div class="col-md-6 col-sm-7">
                                <div class="slogan">Keep an eye on your servers,<br />whenever, wherever!</div>
                                <div class="header-features">
                                    <ul>
                                        <li><i class="mdi mdi-check"></i> Multi-servers support</li>
                                        <li><i class="mdi mdi-check"></i> Labels</li>
                                        <li><i class="mdi mdi-check"></i> Grids</li>
                                        <li><i class="mdi mdi-check"></i> Alerts</li>
                                        <li><i class="mdi mdi-check"></i> Notifications*</li>
                                        <li><i class="mdi mdi-check"></i> Widgets*</li>
                                        <li><i class="mdi mdi-check"></i> Apache Basic & Digest* Auth support</li>
                                        <li><i class="mdi mdi-check"></i> SSL support</li>
                                    </ul>
                                    <div class="asterix">* available with the Features Pack</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <img src="img/screenshot.png" class="header-right" alt="Munin for Android" />
                            </div>
                        </div>
                    </div>

                    <div id="gplay_container" class="gplay_container">
                        <div id="gplay" class="gplay">
                            <a href="https://play.google.com/store/apps/details?id=com.chteuchteu.munin" class="gplay_link button button-elevated">
                                <img src="img/logo-mdpi.png" alt="Download Munin for Android on Google Play" />
                                Munin for Android<br />FREE
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.chteuchteu.muninforandroidfeaturespack" class="gplay_link button button-elevated">
                                <img src="img/logo-fp-hdpi.png" alt="Download Munin for Android Features Pack on Google Play" />
                                MfA Features Pack<br />$1.5
                            </a>
                        </div>
                    </div>
                </div>

                <div id="mainContent" class="mainContent">
                    <div class="share">
                        <div class="addthis_native_toolbox"></div>
                    </div>
                    <h2>What is Munin for Android?</h2>
                    <p>Munin for Android is an Android app allowing you to display Munin graphs of your server on your Android-based device. It is very simple:</p>
                    <div class="row steps">
                        <div class="col-sm-4 step">
                            <div class="green round">1</div><h3>Install the app</h3>
                            <div class="stepText">Download the app from Google Play on your device(s). The oldest supported Android version is Ice Cream Sandwich (4.0).</div>
                        </div>
                        <div class="col-sm-4 step">
                            <div class="green round">2</div><h3>Add your server(s)</h3>
                            <div class="stepText">Configure your servers into the app. The easy to use configuration wizard does all the work for you! :)</div>
                        </div>
                        <div class="col-sm-4 step">
                            <div class="green round">3</div><h3>Enjoy!</h3>
                            <div class="stepText">Display Munin graphs quickly using Graphs, or setup labels and grids to unleash the power of Munin for Android</div>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <h3>Open source</h3>
                    <div class="gitHubButtons">
                        <iframe src="https://ghbtns.com/github-btn.html?user=chteuchteu&repo=Munin-for-Android&type=star&count=true" frameborder="0" scrolling="0" width="170px" height="20px"></iframe>
                        <iframe src="https://ghbtns.com/github-btn.html?user=chteuchteu&repo=Munin-for-Android&type=watch&count=true&v=2" frameborder="0" scrolling="0" width="170px" height="20px"></iframe>
                    </div>
                    <p>Munin for Android is open-source! You can contribute on its <a href="https://github.com/chteuchteu/Munin-for-Android">public repository on GitHub</a>.</p>
                    <a href="https://hosted.weblate.org/engage/munin-for-android/?utm_source=widget" class="translationNotice">
                        <img src="https://hosted.weblate.org/widgets/munin-for-android/-/svg-badge.svg" alt="Translation status" />
                    </a>
                    <p>If the app isn't available in your native language, you can help translating it using <a href="https://hosted.weblate.org/projects/munin-for-android/strings/">this easy to use online tool</a>!</p>
                    <p>Also, you can follow <a href="http://twitter.com/muninforandroid/">Munin for Android on Twitter</a> to be notified about new versions, known issues, and more!</p>


                    <div class="space"></div>

                    <h2>Features</h2>
                    <p>Munin for Android has a lot of great features! If you wish to add one, don't hesitate to <a href="mailto:support@munin-for-android.com">ask</a>!</p>

                    <?php
                    $free_features = array(
                        '<b>Multi-server</b> support',
                        '<b>Port</b> selection <span style="font-size:9px;">(ex: 88.180.108.192<u>:85</u>)</span>',
                        '<b>2</b> sample servers to try the app',
                        'Save graphs on SD card',
                        '<b>Labels</b>',
                        'Plugins documentation',
                        'MunStrap compatibility',
                        '8 <b>languages</b>*',
                        '<b>SSL</b> support',
                        '<b>HTTP Basic Auth</b> support'
                    );
                    $premium_features = array(
                        '<b>HTTP Digest Auth</b> support',
                        'Graphs <b>grids</b>',
                        'Servers configuration import/export',
                        'Graph widget',
                        'Alerts widget',
                        'Chromecast Support'
                    );
                    ?>

                    <table class="features elevation-low">
                        <thead>
                            <tr>
                                <td></td>
                                <td>Munin for Android</td>
                                <td>Features Pack</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i=0;
                            foreach ($free_features as $free_feature) { ?>
                                <tr class="<?php echo ($i%2==0)?'ft_i':'' ?>">
                                    <td><?php echo $free_feature ?></td>
                                    <td colspan="2"><i class="mdi mdi-check"></i></td>
                                </tr>
                                <?php
                                $i++;
                            }

                            foreach ($premium_features as $premium_feature) { ?>
                                <tr class="<?php echo ($i%2==0)?'ft_i':'' ?>">
                                    <td><?php echo $premium_feature ?></td>
                                    <td><i class="mdi mdi-close"></i></td>
                                    <td><i class="mdi mdi-check"></i></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td>Price</td>
                                <td>FREE!</td>
                                <td>$1.49</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="notice"><i>* the app is available in english, french, german, russian, spanish, italian,
                            ukrainian, hungarian, japanese, chinese and dutch</i></div>

                    <div class="space"></div>

                    <div class="row">
                        <div class="col-md-7">
                            <h2>Is my server supported?</h2>
                            <p>Yes it is! Munin for Android is compatible with almost every Munin version and server configuration,
                                even if you use <a href="https://github.com/jonnymccullagh/munstrap#munstrap">Munstrap</a>.
                                If you think that your server isn't supported, feel free to
                                <a href="mailto:support@munin-for-android.com">contact me</a> so we can discuss about it!</p>
                        </div>
                        <div class="col-md-5">
                            <h2>Changelog</h2>
                            <p>You can browse each version changelog on <a href="https://github.com/chteuchteu/Munin-for-Android/releases" target="_blank">GitHub</a>.</p>
                        </div>
                    </div>

                    <div class="space"></div>
                </div>
            </div>
            <div class="col-md-12 copyright">
                <p>&copy; <?php echo date('Y'); ?> <a href="http://www.s-quent.in" target="_blank">Quentin Stoeckel</a></p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
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
    </script>

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-55687235-1', 'auto');
	  ga('send', 'pageview');
	</script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543b9bcb351959fb" async></script>
</body>
</html>
