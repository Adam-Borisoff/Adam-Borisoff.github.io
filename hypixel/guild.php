
<!DOCTYPE HTML>
<html>
<head>
<title> Guild Finder | Plancke</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<!--[if lte IE 8]>
<script src="/assets/css/ie/html5shiv.js"></script><![endif]-->
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1425691752,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"e9b608bb2060db1806a86b28c480ff2c",petok:"4986b8d7ee5328ed22cd3eb3787fbb2cdd7848e0-1425932500-1800",zone:"plancke.nl",rocket:"0",apps:{"ga_key":{"ua":"UA-16820736-2","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/jquery.dropotron.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/skel-layers.min.js"></script>
<script src="/assets/js/init.js"></script>
<script type="text/javascript" src="/assets/js/jquery.tablesorter.min.js"></script>
<noscript>
<link rel="stylesheet" href="/assets/css/skel.css"/>
<link rel="stylesheet" href="/assets/css/style.css"/>
<link rel="stylesheet" href="/assets/css/style-wide.css"/>
</noscript>
<!--[if lte IE 8]>
<link rel="stylesheet" href="/assets/css/ie/v8.css"/><![endif]-->
<link rel="stylesheet" href="/assets/css/notifications.css"/>
<script>
    $(document).ready(function () {
        $('.spoiler-toggle').click(function () {
            var spoiler = $(this).next();
            if (spoiler.css('display') != 'none') {
                spoiler.slideUp(function () {
                    spoiler.css('display', 'none');
                })
            } else {
                spoiler.slideDown(function () {
                    spoiler.css('display', null);
                });
            }
        });

        $(".dismiss-notification").click(function () {
            $(this).closest(".alert-message").fadeOut('slow');
        });
    })
</script>
<style>.spoiler-toggle{cursor:pointer;}</style>
<script type="text/javascript">
        $(document).ready(function () {
            $.tablesorter.addParser({
                id: "fancyNumber",
                is: function (s) {
                    return /^[0-9]?[0-9,\.]*$/.test(s);
                },
                format: function (s) {
                    return jQuery.tablesorter.formatFloat(s.replace(/,/g, ''));
                },
                type: "numeric"
            });

            var options = {
                headers: {
                    0: {sorter: false},
                    1: {sorter: false}
                },
                showProcessing: true,
                sortInitialOrder: "desc",
                theme: 'dropbox',

                tableClass: 'tablesorter',
                cssAsc: "tablesorter-headerSortUp",
                cssDesc: "tablesorter-headerSortDown",
                cssHeader: "tablesorter-header",
                cssHeaderRow: "tablesorter-headerRow",
                cssIcon: "tablesorter-icon",
                cssChildRow: "tablesorter-childRow",
                cssInfoBlock: "tablesorter-infoOnly",
                cssProcessing: "tablesorter-processing",

                headerTemplate: '{content}{icon}'
            };
            var table = $('#guild-roster');
            table.tablesorter(options);

            console.info("Sorting roster!");
        });
    </script>
<link rel="stylesheet" type="text/css" href="/assets/css/tablesorter/dropbox.css"/>
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-16820736-2']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body>
 
<div id="header">
 
<h1><a href="/" id="logo">Plancke<em>.nl</em></a></h1>
<nav id="nav"><ul><li><a href="/">Home</a></li><li class="current"><a href="/hypixel">Hypixel</a><ul><li><a href="/hypixel/guild.php">Guild</a></li><li><a href="/hypixel/stats.php">Stats</a></li><li><a href="/hypixel/calculator.php">Calculator</a></li><li><a href="/hypixel/paintball.php">Paintball</a></li><li><a href="/hypixel/generators.php">Generators</a></li><li><a href="/hypixel/leaderboards.php">Leaderboards</a></li><li><a href="/hypixel/boosters.php">Boosters</a></li><li><a href="/hypixel/hide.php">Hide/Unhide</a></li></ul></li></ul></nav>
</div>
<section class="wrapper style1">
<div class="container">
<form id="guildForm" method="post">
<input type="text" name="guild" placeholder="Guild Name"><br/>
<input type="text" name="player" placeholder="Player Name"><br/>
<input type="submit" value="Send"/>
</form>
</div>
</section>
<div id="footer">
<div class="container">
<ul class="icons">
<li><a href="//twitter.com/Plancke" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
<li><a href="//github.com/Plancke" class="icon fa-github"><span class="label">GitHub</span></a></li>
</ul>
<div class="copyright">
<ul class="menu">
<li>&copy; Plancke</li>
<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
<li><a href="/donate.php">Donate</a></li>
</ul>
</div>
</div>
</div>
</body>
</html>
