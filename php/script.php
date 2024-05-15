<script src="<?php echo URL . "assets/js/jquery.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/bootstrap.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/jquery.magnific-popup.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/isotope.pkgd.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/swiper.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/wow.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/ekko-lightbox.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/script.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/jquery.mask.min.js" ?>"></script>
<script src="<?php echo URL . "wdadmin/assets/plugins/sweetalert/sweetalert.min.js" ?>"></script>
<script src="<?php echo URL . "wdadmin/js/contato.min.js" ?>"></script>
<script src="<?php echo URL . "assets/js/orcamento.min.js" ?>"></script>
<link href="<?php echo URL . "wdadmin/assets/plugins/sweetalert/sweetalert.min.css" ?>" rel="stylesheet">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCCFF7G"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178250927-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-178250927-1');
</script>
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s)
    {
        if (f.fbq)
            return;
        n = f.fbq = function () {
            n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq)
            f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '703241403921173');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=703241403921173&ev=PageView&noscript=1"
               /></noscript>
<!-- End Facebook Pixel Code -->
<?php /* WhatsHelp */ ?>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?php echo "55" . str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>", // WhatsApp number
            call_to_action: "Entre em contato conosco", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>