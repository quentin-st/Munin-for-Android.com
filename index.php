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
                            <div class="stepText">Configure your servers into the app. The easy to use configuration wizard makes all the work for you! :)</div>
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

                <div class="space"></div>

                <h2>Features</h2>
                <p>Munin for Android has a lot of great features! If you wish to add one, don't hesitate to <a href="mailto:support@munin-for-android.com">ask</a>!</p>

                <?php
                $free_features = array(
                    '<b>Multi-server</b> support',
                    '<b>Port</b> selection <span style="font-size:9px;">(ex: 88.180.108.192<u>:85</u>)</span>',
                    '<b>2</b> sample servers to try the app',
                    '4 <b>languages</b>*',
                    'Save graphs on SD card',
                    '<b>Labels</b>',
                    'Plugins documentation',
                    'MunStrap compatibility',
                    '<b>HTTP Basic Auth</b> support'
                );
                $premium_features = array(
                    '<b>HTTP Digest Auth</b> support',
                    '<b>SSL</b> support',
                    'Graphs <b>grids</b>',
                    'Servers configuration import/export'
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
                <p>Only the major updates are shown below.</p>
                <div class="changelog">
                    <div class="tabContainer">
                        <ul class="digiTabs" id="sidebarTabs">
                            <li id="tab1" onclick="tabs(this);">1.1</li><!--
                            --><li id="tab2" onclick="tabs(this);">1.2</li><!--
                            --><li id="tab3" onclick="tabs(this);">1.3</li><!--
                            --><li id="tab4" onclick="tabs(this);">1.4</li><!--
                            --><li id="tab6" onclick="tabs(this);">1.4.2</li><!--
                            --><li id="tab8" onclick="tabs(this);">2.0</li><!--
                            --><li id="tab9" onclick="tabs(this);">2.1</li><!--
                            --><li id="tab11" onclick="tabs(this);">2.3</li><!--
                            --><li id="tab12" onclick="tabs(this);">2.4</li><!--
                            --><li id="tab13" onclick="tabs(this);">2.5</li><!--
                            --><li id="tab14" onclick="tabs(this);">2.6</li><!--
                            --><li id="tab16" onclick="tabs(this);">2.7</li><!--
                            --><li id="tab17" onclick="tabs(this);">2.8</li><!--
                            --><li id="tab18" onclick="tabs(this);" class="selected">3.0</li>
                        </ul>
                        <div id="tabContent" class="card"><ul>
                            <li><span class="new">new</span>Servers import/export</li>
                            <li><span class="new">new</span>Rescan masters for servers and plugins</li>
                            <li><span class="new">new</span>Plugins documentation</li>
                            <li><span class="new">fix</span>Fixed notifications battery drain</li>
                            <li><span class="new">new</span>Connection information (SSL, basic/digest auth) information now
                                attached to masters</li>
                            <li><span class="fix">fix</span>Performances optimisations</li>
                            <li><span class="new">new</span>MunStrap compatibility</li>
                            <li><span class="new">new</span>Global search</li>
                            <li><span class="new">new</span>HD Graphs</li>
                            <li><span class="new">new</span>Dropped loading splash screen</li>
                            <li><span class="new">new</span>Open plugin in browser</li>
                            <li><span class="new">new</span>Tablets compatibility enhanced</li>
                            <li><span class="new">new</span>Fields description</li>
                            <li><span class="new">new</span>Flat/expanded alerts list</li>
                            <li><span class="new">new</span>Graph zoom now deactivatable</li>
                            <li><span class="new">new</span>Server configuration wizard redesigned</li>
                            <li><span class="new">new</span>Contextual actions (rename servers, delete labels, ...)</li>
                            <li><span class="new">new</span>Enhanced alerts loading</li>
                            <li><span class="new">new</span>Vibration on notification</li>
                        </ul></div>
                    </div>

                    <div id="tab1Content" style="display:none;"><ul>
                        <li><span class="new">new</span> First stable release</li>
                    </ul></div>
                    <div id="tab2Content" style="display:none;"><ul>
                        <li><span class="new">new</span> <strong>Munin 2.0 support</strong></li>
                        <li><span class="new">new</span> Graph favs</li>
                        <li><span class="new">new</span> Tutorial on first launch</li>
                        <li><span class="new">new</span> Design enhancements</li>
                    </ul></div>
                    <div id="tab3Content" style="display:none;"><ul>
                        <li><span class="new">new</span> <strong>Apache Basic Auth support</strong></li>
                        <li><span class="new">new</span> 2 settings pages: Server + Settings</li>
                        <li><span class="new">new</span> Choose default scale: day / week / month / year</li>
                        <li><span class="new">new</span> Android 2.X: design enhancement</li>
                    </ul></div>
                    <div id="tab4Content" style="display:none;"><ul>
                        <li><span class="new">new</span> <strong>Multi-server support!</strong></li>
                        <li><span class="new">new</span> <strong>Multi-touch on-graph zoom</strong></li>
                        <li><span class="new">new</span> Plugins real name now displayed</li>
                        <li><span class="fix">fix</span> Critical issues correction</li>
                        <li><span class="fix">fix</span> Graph double-load fixed</li>
                        <li><span class="new">new</span> Design changes</li>
                        <li><span class="new">new</span> Package size reduction (~80% of the previous version size)</li>
                    </ul></div>
                    <div id="tab6Content" style="display:none;"><ul>
                        <li><span class="new">new</span> <b>Design enhancements</b></li>
                        <li><span class="fix">fix</span> Critical issues fixed</li>
                        <li><span class="fix">fix</span> Server deleting fixed</li>
                        <li><span class="new">new</span> Local database optimisations</li>
                        <li><span class="fix">fix</span> Fixed app crash with plugins whose name contaied special chars</li>
                    </ul></div>
                    <div id="tab8Content" style="display:none;"><ul>
                        <li><span class="new">new</span>SSL Support</li>
                        <li><span class="new">new</span>GUI redesign</li>
                        <li><span class="new">new</span>French translation</li>
                        <li><span class="fix">fix</span>Detection algorithms rewritten</li>
                        <li><span class="fix">fix</span>Enhanced Android 2.X compatibility
                        <li><span class="new">new</span>Save graph button</li>
                        <li><span class="fix">fix</span>'Add a server': keyboard won't hide the half of the screen anymore</li>
                        <li><span class="new">new</span>PluginsList: added search button</li>
                        <li><span class="fix">fix</span>Server removal fixed!</li>
                        <li><span class="fix">fix</span>Fixed active state on main buttons</li>
                    </ul></div>
                    <div id="tab9Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Swipe gesture for graphs</li>
                        <li><span class="new">new</span>Graphs preload</li>
                        <li><span class="fix">fix</span>Fixed Settings crash on german devices</li>
                        <li><span class="new">new</span>Removed ads</li>
                        <li><span class="new">new</span>Disabled force orientation on graphs view</li>
                    </ul></div>
                    <div id="tab11Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Alerts</li>
                        <li><span class="fix">fix</span>Fixed widget issue #1</li>
                    </ul></div>
                    <div id="tab12Content" style="display:none;"><ul>
                        <li><span class="new">new</span>New icon</li>
                        <li><span class="new">new</span>Servers reorganisation</li>
                        <li><span class="fix">fix</span>Bug fixes</li>
                    </ul></div>
                    <div id="tab13Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Notifications</li>
                        <li><span class="new">new</span>Easily switch from one server to another while displaying graph</li>
                        <li><span class="fix">fix</span>Stability enhancements</li>
                        <li><span class="fix">fix</span>Bug fixes</li>
                        <li><span class="new">new</span>Design enhancements</li>
                    </ul></div>
                    <div id="tab14Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Labels</li>
                        <li><span class="new">new</span>German translation</li>
                        <li><span class="new">new</span>Digest auth</li>
                        <li><span class="fix">fix</span>Fixed crash on device boot</li>
                        <li><span class="new">new</span>Contextual drawer menu</li>
                        <li><span class="new">new</span>New server adding wizard</li>
                        <li><span class="new">new</span>Plugin category</li>
                        <li><span class="new">new</span>Android 2.X graphview : drop-down actions list</li>
                        <li><span class="new">new</span>URLs history when adding servers</li>
                    </ul></div>
                    <div id="tab16Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Graphs grids</li>
                        <li><span class="new">new</span>Russian translation</li>
                        <li><span class="new">new</span>Graphs auto-update</li>
                        <li><span class="new">new</span>Disable screen dim when displaying graphs</li>
                    </ul></div>
                    <div id="tab17Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Servers grouped by master</li>
                        <li><span class="fix">fix</span>Bug fixes</li>
                    </ul></div>
                    <div id="tab18Content" style="display:none;"><ul>
                        <li><span class="new">new</span>Servers import/export</li>
                        <li><span class="new">new</span>Rescan masters for servers and plugins</li>
                        <li><span class="new">new</span>Plugins documentation</li>
                        <li><span class="new">fix</span>Fixed notifications battery drain</li>
                        <li><span class="new">new</span>Connection information (SSL, basic/digest auth) information now
                            attached to masters</li>
                        <li><span class="fix">fix</span>Performances optimisations</li>
                        <li><span class="new">new</span>MunStrap compatibility</li>
                        <li><span class="new">new</span>Global search</li>
                        <li><span class="new">new</span>HD Graphs</li>
                        <li><span class="new">new</span>Dropped loading splash screen</li>
                        <li><span class="new">new</span>Open plugin in browser</li>
                        <li><span class="new">new</span>Tablets compatibility enhanced</li>
                        <li><span class="new">new</span>Fields description</li>
                        <li><span class="new">new</span>Flat/expanded alerts list</li>
                        <li><span class="new">new</span>Graph zoom now deactivatable</li>
                        <li><span class="new">new</span>Server configuration wizard redesigned</li>
                        <li><span class="new">new</span>Contextual actions (rename servers, delete labels, ...)</li>
                        <li><span class="new">new</span>Enhanced alerts loading</li>
                        <li><span class="new">new</span>Vibration on notification</li>
                    </ul></div>
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