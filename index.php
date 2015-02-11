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
    <div class="container">
        <div class="header">
            <img src="img/logo-hdpi.png" class="logo" alt="Munin for Android" /> <h1>Munin for Android</h1>
            <img src="img/screenshot1.png" class="header-right" alt="Screenshot" />
            <div class="slogan">Keep an eye on your servers,<br />whenever, wherever!</div>
            <div class="header-features">
                <ul>
                    <li>Multi-servers support</li>
                    <li>Labels</li>
                    <li>Grids</li>
                    <li>Alerts</li>
                    <li>Notifications*</li>
                    <li>Widgets*</li>
                    <li>Apache Basic & Digest* Auth support</li>
                    <li>SSL support*</li>
                </ul>
                <div class="asterix">* available with the Features Pack</div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="gplay_container" class="gplay_container">
            <div id="gplay" class="gplay">
                <a href="https://play.google.com/store/apps/details?id=com.chteuchteu.munin" class="gplay_link">
                    <img src="img/logo-mdpi.png" alt="Download Munin for Android on Google Play" />Munin for Android<br />FREE</a>
                <a href="https://play.google.com/store/apps/details?id=com.chteuchteu.muninforandroidfeaturespack" class="gplay_link">
                    <img src="img/logo-fp-hdpi.png" alt="Download Munin for Android Features Pack on Google Play" />MfA Features Pack<br />$1.5</a>
            </div>
        </div>
        <div id="mainContent" class="mainContent">
            <div class="share">
                <div class="addthis_native_toolbox"></div>
            </div>
            <div class="container-fluid">
                <h2>What is Munin for Android?</h2>
                <p>Munin for Android is an Android app allowing you to display Munin graphs of your server on your Android-based device. It is very simple:</p>
                <div class="steps">
                    <div class="step">
                        <div class="card">
                            <div class="green round">1</div><h3>Install the app</h3>
                            <div class="stepText">Download the app from Google Play on your device(s). The oldest supported Android version is Ice Cream Sandwich (4.0).</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="card">
                            <div class="green round">2</div><h3>Add your server(s)</h3>
                            <div class="stepText">Configure your servers into the app. The easy to use configuration wizard does all the work for you! :)</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="card">
                            <div class="green round">3</div><h3>Enjoy!</h3>
                            <div class="stepText">Display Munin graphs quickly using Graphs, or setup labels and grids to unleash the power of Munin for Android</div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <h3>Open source</h3>
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
                    '4 <b>languages</b>*',
                    '<b>HTTP Basic Auth</b> support'
                );
                $premium_features = array(
                    '<b>HTTP Digest Auth</b> support',
                    '<b>SSL</b> support',
                    'Graphs <b>grids</b>',
                    'Servers configuration import/export',
                    'Graph widget',
                    'Alerts widget'
                );
                ?>

                <table class="features card">
                    <tr class="ft_head">
                        <td class="ft_h"></td>
                        <td class="ft_h">Munin for Android</td>
                        <td class="ft_h">Features Pack</td>
                    </tr>
                    <?php
                    $i=0;
                    foreach ($free_features as $free_feature) { ?>
                        <tr class="ft_line <?php echo ($i%2==0)?'ft_i':'' ?>">
                            <td class="ft_b"><?php echo $free_feature ?></td>
                            <td colspan="2" class="ft_c"><img src="img/navigation_accept.png" alt="Included" /></td>
                        </tr>
                        <?php
                        $i++;
                    }

                    foreach ($premium_features as $premium_feature) { ?>
                        <tr class="ft_line <?php echo ($i%2==0)?'ft_i':'' ?>">
                            <td class="ft_b"><?php echo $premium_feature ?></td>
                            <td class="ft_c"><img src="img/navigation_cancel.png" alt="Not included" /></td>
                            <td class="ft_c"><img src="img/navigation_accept.png" alt="Included" /></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                    <tr class="ft_foot">
                        <td class="ft_f1">Price</td>
                        <td class="ft_f">FREE!</td>
                        <td class="ft_f">$1.49</td>
                    </tr>
                </table>
                <span class="notice"><i>* the app is available in english, french, german and russian</i></span>

                <div class="space"></div>

                <img src="img/screenshot2.png" class="aside-img" alt="Screenshot" />

                <h2>Is my server supported?</h2>
                <p>Yes it is! Munin for Android is compatible with almost every Munin version and server configuration, even if you use <a href="https://github.com/jonnymccullagh/munstrap#munstrap">Munstrap</a>.
                    If you think that your server isn't supported, feel free to <a href="mailto:support@munin-for-android.com">contact me</a> so we can discuss about it!</p>

                <div class="space"></div>

                <h2>Changelog</h2>
                <?php
                $changelog = array(
                    array(
                        'version' => '1.1',
                        'changelog' => array(
                            ['new', 'First stable release']
                        )
                    ),
                    array(
                        'version' => '1.2',
                        'changelog' => array(
                            ['new', '<strong>Munin 2.0 support</strong>'],
                            ['new', 'Graph favs'],
                            ['new', 'Tutorial on first launch'],
                            ['new', 'Design enhancements']
                        )
                    ),
                    array(
                        'version' => '1.3',
                        'changelog' => array(
                            ['new', '<strong>Apache Basic Auth support</strong>'],
                            ['new', '2 settings pages: Server + Settings'],
                            ['new', 'Choose default scale: day / week / month / year'],
                            ['new', 'Android 2.X: design enhancement']
                        )
                    ),
                    array(
                        'version' => '1.4',
                        'changelog' => array(
                            ['new', '<strong>Multi-server support!</strong>'],
                            ['new', '<strong>Multi-touch on-graph zoom</strong>'],
                            ['new', 'Plugins real name now displayed'],
                            ['fix', 'Critical issues correction'],
                            ['fix', 'Graph double-load fixed'],
                            ['new', 'Design changes'],
                            ['new', 'Package size reduction (~80% of the previous version size)']
                        )
                    ),
                    array(
                        'version' => '1.4.2',
                        'changelog' => array(
                            ['new', '<b>Design enhancements</b>'],
                            ['fix', 'Critical issues fixed'],
                            ['fix', 'Server deleting fixed'],
                            ['new', 'Local database optimisations'],
                            ['fix', 'Fixed app crash with plugins whose name contaied special chars']
                        )
                    ),
                    array(
                        'version' => '2.0',
                        'changelog' => array(
                            ['new', 'SSL Support'],
                            ['new', 'GUI redesign'],
                            ['new', 'French translation'],
                            ['fix', 'Detection algorithms rewritten'],
                            ['fix', 'Enhanced Android 2.X compatibility'],
                            ['new', 'Save graph button'],
                            ['fix', '\'Add a server\': keyboard won\'t hide the half of the screen anymore'],
                            ['new', 'PluginsList: added search button'],
                            ['fix', 'Server removal fixed!'],
                            ['fix', 'Fixed active state on main buttons']
                        )
                    ),
                    array(
                        'version' => '2.1',
                        'changelog' => array(
                            ['new', 'Swipe gesture for graphs'],
                            ['new', 'Graphs preload'],
                            ['fix', 'Fixed Settings crash on german devices'],
                            ['new', 'Removed ads'],
                            ['new', 'Disabled force orientation on graphs view']
                        )
                    ),
                    array(
                        'version' => '2.3',
                        'changelog' => array(
                            ['new', 'Alerts'],
                            ['fix', 'Fixed widget issue']
                        )
                    ),
                    array(
                        'version' => '2.4',
                        'changelog' => array(
                            ['new', 'New icon'],
                            ['new', 'Servers reorganisation'],
                            ['fix', 'Bug fixes']
                        )
                    ),
                    array(
                        'version' => '2.5',
                        'changelog' => array(
                            ['new', 'Notifications'],
                            ['new', 'Easily switch from one server to another while displaying graph'],
                            ['fix', 'Stability enhancements'],
                            ['fix', 'Bug fixes'],
                            ['new', 'Design enhancements']
                        )
                    ),
                    array(
                        'version' => '2.6',
                        'changelog' => array(
                            ['new', 'Labels'],
                            ['new', 'German translation'],
                            ['new', 'Digest auth'],
                            ['fix', ' Fixed crash on device boot'],
                            ['new', 'Contextual drawer menu'],
                            ['new', 'New server adding wizard'],
                            ['new', 'Plugin category'],
                            ['new', ' Android 2.X graphview : drop-down actions list'],
                            ['new', 'URLs history when adding servers']
                        )
                    ),
                    array(
                        'version' => '2.7',
                        'changelog' => array(
                            ['new', 'Graphs grids'],
                            ['new', 'Russian translation'],
                            ['new', 'Graphs auto-update'],
                            ['new', 'Disable screen dim when displaying graphs']
                        )
                    ),
                    array(
                        'version' => '2.8',
                        'changelog' => array(
                            ['new', 'Servers grouped by master'],
                            ['fix', 'Bug fixes']
                        )
                    ),
                    array(
                        'version' => '3.0',
                        'changelog' => array(
                            ['new', 'Servers import/export'],
                            ['new', 'Rescan masters for servers and plugins'],
                            ['new', 'Plugins documentation'],
                            ['fix', 'Fixed notifications battery drain'],
                            ['new', 'Connection information (SSL, basic/digest auth) information now attached to masters'],
                            ['fix', 'Performances optimisations'],
                            ['new', 'MunStrap compatibility'],
                            ['new', 'Custom user agent (<i>MuninForAndroid/3.0 (Android 4.4.4 KITKAT)</i> for example)'],
                            ['new', 'Global search'],
                            ['new', 'HD Graphs'],
                            ['new', 'Dropped loading splash screen'],
                            ['new', 'Open plugin in browser'],
                            ['new', 'Tablets compatibility enhanced'],
                            ['new', 'Fields description'],
                            ['new', 'Flat/expanded alerts list'],
                            ['new', 'Graph zoom now deactivatable'],
                            ['new', 'Server configuration wizard redesigned'],
                            ['new', 'Contextual actions (rename servers, delete labels, ...)'],
                            ['new', 'Enhanced alerts loading'],
                            ['new', 'Vibration on notification']
                        )
                    ),
                    array(
                        'version' => '3.2',
                        'changelog' => array(
                            ['new', 'Dynazoom integration'],
                            ['fix', 'Crashs fix']
                        )
                    ),
                    array(
                        'version' => '3.4',
                        'changelog' => array(
                            ['new', 'Now displaying error reason on graph view'],
                            ['new', 'SNI compatibility'],
                            ['fix', 'Misc bug fixes']
                        )
                    ),
                    array(
                        'version' => '3.4.5',
                        'changelog' => array(
                            ['new', 'Munin for Android is now open-source!'],
                            ['new', 'Grids: using HD graphs only if needed'],
                            ['fix', 'HD Graphs & Dynazoom bug fixes']
                        )
                    ),
                    array(
                        'version' => '3.4.7',
                        'changelog' => array(
                            ['new', 'Now displaying an indication if the SSL connection is secure or not'],
                            ['fix', 'Bug fixes']
                        )
                    ),
                    array(
                        'version' => '3.4.8',
                        'changelog' => array(
                            ['new', 'Now displaying an indication on graph view wether the connection is secure or not'],
                            ['fix', 'Fixed SSL on servers using self-signed certificates']
                        )
                    ),
                    array(
                        'version' => '3.4.9',
                        'changelog' => array(
                            ['new', 'Better translations'],
                            ['new', 'Spanish language'],
                            ['new', 'Speed & network usage optimizations'],
                            ['new', 'Updated plugins documentation']
                        )
                    )
                );
                ?>
                <p>Only the major updates are shown below.</p>
                <div class="changelog">
                    <div class="tabContainer">
                        <ul class="digiTabs" id="sidebarTabs">
                            <?php
                            $i = 1;
                            foreach ($changelog as $item) {
                                ?><li id="tab<?php echo $i; ?>" onclick="tabs(this);" <?php echo $i == count($changelog) ? 'class="selected"' : ''; ?>><?php echo $item['version']; ?></li><?php
                                $i++;
                            }
                            ?>
                        </ul>
                        <div id="tabContent" class="card"><ul>
                            <?php
                            $item = $changelog[count($changelog)-1];
                            foreach ($item['changelog'] as $change) {
                                ?><li><span class="<?php echo $change[0]; ?>"><?php echo $change[0]; ?></span> <?php echo $change[1]; ?></li><?php
                            }
                            ?>
                        </ul></div>
                    </div>

                    <?php
                    $i = 1;
                    foreach ($changelog as $item) {
                        ?> <div id="tab<?php echo $i; ?>Content" style="display:none;"><ul><?php
                            foreach ($item['changelog'] as $change) {
                                ?><li><span class="<?php echo $change[0]; ?>"><?php echo $change[0]; ?></span> <?php echo $change[1]; ?></li><?php
                            }
                        ?> </ul></div> <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function tabs(x) {
            var lis=document.getElementById("sidebarTabs").childNodes; //gets all the LI from the UL

            for(i=0;i<lis.length;i++) {
                lis[i].className=""; //removes the classname from all the LI
            }
            x.className="selected"; //the clicked tab gets the classname selected
            var res=document.getElementById("tabContent");  //the resource for the main tabContent
            var tab=x.id;
            res.innerHTML=document.getElementById(tab + "Content").innerHTML;
        }

        $(window).scroll(function() {
            if ($(window).width() < 646)
                $('#gplay').removeClass('gplay_cont_fixed');
            else {
                if ($(this).scrollTop() > $('#gplay_container').position().top)
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