<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
        <meta name="author" content="Web Dezan - Agência Digital">
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $voResultadoConfiguracoes->titulo ?>"/>
        <meta property="og:description" content="<?php echo substr(strip_tags(trim($voResultadoConfiguracoes->descricao)), 0, strrpos(substr(strip_tags(trim($voResultadoConfiguracoes->descricao)), 0, 197), ' ')) . '...'; ?>"/>
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL ?>"/>
        <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
        <?php
        $vsSqlFacebook = "SELECT link FROM redes_sociais WHERE id_redes_sociais = 1";
        $vrsExecutaFacebook = mysqli_query($Conexao, $vsSqlFacebook) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
        while ($voResultadoFacebook = mysqli_fetch_object($vrsExecutaFacebook)) {
            ?>
            <meta property="fb:admins" content="<?php echo $voResultadoFacebook->link ?>"/>
        <?php } ?>
        <link rel="shortcut icon" type="image/png" href="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->favicon ?>">
        <title><?php echo $voResultadoConfiguracoes->titulo ?></title>
        <style type="text/css">.load-position .logo{margin:0 auto;width:150px}.load-complete .ball-clip-rotate>div{border-color:#002f59 #002f59 transparent;background-color:#002f59;margin:0 auto;display:block;top:50%;position:absolute;left:0;right:0}.load-complete{position:fixed;background:#fff;width:100%;height:100%;left:0;right:0;top:0;bottom:0;z-index:1031}.load-complete .logo{color:#4c4c4c;text-align:center;display:block;margin-bottom:20px;font-family:Roboto,sans-serif;font-size:50px}.load-complete .load-position h6{text-align:center;color:#000;font-size:12px;font-weight:400;font-style:italic}.load-complete .load-position{position:absolute;top:50%;left:0;z-index:999;right:0;margin-top:-100px}.load-complete .loading{position:absolute;width:100%;height:1px;margin:20px auto;left:0;right:0}.load-complete .loading-line{position:absolute;background:#eee;width:100%;height:2px}.load-complete .loading-break{position:absolute;background:#059664;width:15px;height:2px}.load-complete .loading-dot-1{-webkit-animation:loading 2s infinite;-moz-animation:loading 2s infinite;-ms-animation:loading 2s infinite;-o-animation:loading 2s infinite;animation:loading 2s infinite}.load-complete .loading-dot-2{-webkit-animation:loading 2s .5s infinite;-moz-animation:loading 2s .5s infinite;-ms-animation:loading 2s .5s infinite;-o-animation:loading 2s .5s infinite;animation:loading 2s .5s infinite}.load-complete .loading-dot-3{-webkit-animation:loading 2s 1s infinite;-moz-animation:loading 2s 1s infinite;-ms-animation:loading 2s 1s infinite;-o-animation:loading 2s 1s infinite;animation:loading 2s 1s infinite}@keyframes loading{from{left:0}to{left:100%}}@-moz-keyframes loading{from{left:0}to{left:100%}}@-webkit-keyframes loading{from{left:0}to{left:100%}}@-ms-keyframes loading{from{left:0}to{left:100%}}@-o-keyframes loading{from{left:0}to{left:100%}}.ball-pulse-sync>div,.ball-pulse>div{width:15px;height:15px;margin:2px;display:inline-block}.ball-pulse-sync>div,.ball-pulse>div,.ball-scale>div{background-color:#fff;border-radius:100%}@-webkit-keyframes scale{0%,80%{-webkit-transform:scale(1);transform:scale(1);opacity:1}45%{-webkit-transform:scale(.1);transform:scale(.1);opacity:.7}}@keyframes scale{0%,80%{-webkit-transform:scale(1);transform:scale(1);opacity:1}45%{-webkit-transform:scale(.1);transform:scale(.1);opacity:.7}}.ball-pulse>div:nth-child(0){-webkit-animation:scale .75s -.36s infinite cubic-bezier(.2,.68,.18,1.08);animation:scale .75s -.36s infinite cubic-bezier(.2,.68,.18,1.08)}.ball-pulse>div:nth-child(1){-webkit-animation:scale .75s -.24s infinite cubic-bezier(.2,.68,.18,1.08);animation:scale .75s -.24s infinite cubic-bezier(.2,.68,.18,1.08)}.ball-pulse>div:nth-child(2){-webkit-animation:scale .75s -.12s infinite cubic-bezier(.2,.68,.18,1.08);animation:scale .75s -.12s infinite cubic-bezier(.2,.68,.18,1.08)}.ball-pulse>div:nth-child(3){-webkit-animation:scale .75s 0s infinite cubic-bezier(.2,.68,.18,1.08);animation:scale .75s 0s infinite cubic-bezier(.2,.68,.18,1.08)}.ball-pulse>div{-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes ball-pulse-sync{33%{-webkit-transform:translateY(10px);transform:translateY(10px)}66%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes ball-pulse-sync{33%{-webkit-transform:translateY(10px);transform:translateY(10px)}66%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.ball-pulse-sync>div:nth-child(0){-webkit-animation:ball-pulse-sync .6s -.21s infinite ease-in-out;animation:ball-pulse-sync .6s -.21s infinite ease-in-out}.ball-pulse-sync>div:nth-child(1){-webkit-animation:ball-pulse-sync .6s -.14s infinite ease-in-out;animation:ball-pulse-sync .6s -.14s infinite ease-in-out}.ball-pulse-sync>div:nth-child(2){-webkit-animation:ball-pulse-sync .6s -.07s infinite ease-in-out;animation:ball-pulse-sync .6s -.07s infinite ease-in-out}.ball-pulse-sync>div:nth-child(3){-webkit-animation:ball-pulse-sync .6s 0s infinite ease-in-out;animation:ball-pulse-sync .6s 0s infinite ease-in-out}.ball-pulse-sync>div{-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes ball-scale{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}@keyframes ball-scale{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}.ball-scale>div{height:60px;width:60px;animation:ball-scale 1s 0s ease-in-out infinite}.ball-scale-random>div,.ball-scale>div{display:inline-block;margin:2px;-webkit-animation:ball-scale 1s 0s ease-in-out infinite}.ball-scale-random{width:37px;height:40px}.ball-scale-random>div{background-color:#fff;border-radius:100%;position:absolute;height:30px;width:30px;animation:ball-scale 1s 0s ease-in-out infinite}.ball-rotate>div,.ball-rotate>div:after,.ball-rotate>div:before{background-color:#fff;width:15px;height:15px;border-radius:100%}.ball-rotate,.ball-rotate>div{position:relative}.ball-scale-random>div:nth-child(1){margin-left:-7px;-webkit-animation:ball-scale 1s .2s ease-in-out infinite;animation:ball-scale 1s .2s ease-in-out infinite}.ball-scale-random>div:nth-child(3){margin-left:-2px;margin-top:9px;-webkit-animation:ball-scale 1s .5s ease-in-out infinite;animation:ball-scale 1s .5s ease-in-out infinite}@-webkit-keyframes rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.ball-rotate>div{margin:2px;-webkit-animation-fill-mode:both;animation-fill-mode:both}.ball-rotate>div:first-child{-webkit-animation:rotate 1s 0s cubic-bezier(.7,-.13,.22,.86) infinite;animation:rotate 1s 0s cubic-bezier(.7,-.13,.22,.86) infinite}.ball-rotate>div:after,.ball-rotate>div:before{margin:2px;content:"";position:absolute;opacity:.8}.ball-rotate>div:before{top:0;left:-28px}.ball-rotate>div:after{top:0;left:25px}.ball-clip-rotate>div{border-radius:100%;margin:2px;border:2px solid #fff;border-bottom-color:transparent;height:80px;width:80px;background:0 0!important;display:inline-block;-webkit-animation:rotate .75s 0s linear infinite;animation:rotate .75s 0s linear infinite}@keyframes rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes scale{30%{-webkit-transform:scale(.3);transform:scale(.3)}100%{-webkit-transform:scale(1);transform:scale(1)}}.ball-clip-rotate-pulse{position:relative;-webkit-transform:translateY(-15px);-ms-transform:translateY(-15px);transform:translateY(-15px)}.ball-clip-rotate-pulse>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute;top:0;left:0;border-radius:100%}.ball-clip-rotate-pulse>div:first-child{background:#fff;height:16px;width:16px;top:7px;left:-7px;-webkit-animation:scale 1s 0s cubic-bezier(.09,.57,.49,.9) infinite;animation:scale 1s 0s cubic-bezier(.09,.57,.49,.9) infinite}.ball-clip-rotate-pulse>div:last-child{position:absolute;width:30px;height:30px;left:-16px;top:-2px;background:0 0;border:2px solid;border-color:#fff transparent;-webkit-animation:rotate 1s 0s cubic-bezier(.09,.57,.49,.9) infinite;animation:rotate 1s 0s cubic-bezier(.09,.57,.49,.9) infinite;-webkit-animation-duration:1s;animation-duration:1s}@keyframes rotate{0%{-webkit-transform:rotate(0) scale(1);transform:rotate(0) scale(1)}50%{-webkit-transform:rotate(180deg) scale(.6);transform:rotate(180deg) scale(.6)}100%{-webkit-transform:rotate(360deg) scale(1);transform:rotate(360deg) scale(1)}}.ball-clip-rotate-multiple{position:relative}.ball-clip-rotate-multiple>div{position:absolute;left:-20px;top:-20px;border:2px solid #fff;border-bottom-color:transparent;border-top-color:transparent;border-radius:100%;height:35px;width:35px;-webkit-animation:rotate 1s 0s ease-in-out infinite;animation:rotate 1s 0s ease-in-out infinite}.ball-clip-rotate-multiple>div:last-child{display:inline-block;top:-10px;left:-10px;width:15px;height:15px;-webkit-animation-duration:.5s;animation-duration:.5s;border-color:#fff transparent;-webkit-animation-direction:reverse;animation-direction:reverse}@-webkit-keyframes ball-scale-ripple{0%{-webkit-transform:scale(.1);transform:scale(.1);opacity:1}70%{-webkit-transform:scale(1);transform:scale(1);opacity:.7}100%{opacity:0}}@keyframes ball-scale-ripple{0%{-webkit-transform:scale(.1);transform:scale(.1);opacity:1}70%{-webkit-transform:scale(1);transform:scale(1);opacity:.7}100%{opacity:0}}.ball-scale-ripple>div{height:50px;width:50px;border-radius:100%;border:2px solid #fff;-webkit-animation:ball-scale-ripple 1s 0s infinite cubic-bezier(.21,.53,.56,.8);animation:ball-scale-ripple 1s 0s infinite cubic-bezier(.21,.53,.56,.8)}@-webkit-keyframes ball-scale-ripple-multiple{0%{-webkit-transform:scale(.1);transform:scale(.1);opacity:1}70%{-webkit-transform:scale(1);transform:scale(1);opacity:.7}100%{opacity:0}}@keyframes ball-scale-ripple-multiple{0%{-webkit-transform:scale(.1);transform:scale(.1);opacity:1}70%{-webkit-transform:scale(1);transform:scale(1);opacity:.7}100%{opacity:0}}.ball-scale-ripple-multiple{position:relative;-webkit-transform:translateY(-25px);-ms-transform:translateY(-25px);transform:translateY(-25px)}.ball-scale-ripple-multiple>div:nth-child(0){-webkit-animation-delay:-.8s;animation-delay:-.8s}.ball-scale-ripple-multiple>div:nth-child(1){-webkit-animation-delay:-.6s;animation-delay:-.6s}.ball-scale-ripple-multiple>div:nth-child(2){-webkit-animation-delay:-.4s;animation-delay:-.4s}.ball-scale-ripple-multiple>div:nth-child(3){-webkit-animation-delay:-.2s;animation-delay:-.2s}.ball-scale-ripple-multiple>div{position:absolute;top:-2px;left:-26px;width:50px;height:50px;border-radius:100%;border:2px solid #fff;-webkit-animation:ball-scale-ripple-multiple 1.25s 0s infinite cubic-bezier(.21,.53,.56,.8);animation:ball-scale-ripple-multiple 1.25s 0s infinite cubic-bezier(.21,.53,.56,.8)}@-webkit-keyframes ball-beat{50%{opacity:.2;-webkit-transform:scale(.75);transform:scale(.75)}100%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes ball-beat{50%{opacity:.2;-webkit-transform:scale(.75);transform:scale(.75)}100%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}.ball-beat>div{background-color:#fff;width:15px;height:15px;border-radius:100%;margin:2px;display:inline-block;-webkit-animation:ball-beat .7s 0s infinite linear;animation:ball-beat .7s 0s infinite linear}.ball-beat>div:nth-child(2n-1){-webkit-animation-delay:-.35s!important;animation-delay:-.35s!important}@-webkit-keyframes ball-scale-multiple{0%{-webkit-transform:scale(0);transform:scale(0);opacity:0}5%{opacity:1}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}@keyframes ball-scale-multiple{0%{-webkit-transform:scale(0);transform:scale(0);opacity:0}5%{opacity:1}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}.ball-scale-multiple{position:relative;-webkit-transform:translateY(-30px);-ms-transform:translateY(-30px);transform:translateY(-30px)}.ball-scale-multiple>div:nth-child(2){-webkit-animation-delay:-.4s;animation-delay:-.4s}.ball-scale-multiple>div:nth-child(3){-webkit-animation-delay:-.2s;animation-delay:-.2s}.ball-scale-multiple>div{background-color:#fff;border-radius:100%;position:absolute;left:-30px;top:0;opacity:0;margin:0;width:60px;height:60px;-webkit-animation:ball-scale-multiple 1s 0s linear infinite;animation:ball-scale-multiple 1s 0s linear infinite}@-webkit-keyframes ball-triangle-path-1{33%{-webkit-transform:translate(25px,-50px);transform:translate(25px,-50px)}66%{-webkit-transform:translate(50px,0);transform:translate(50px,0)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-triangle-path-1{33%{-webkit-transform:translate(25px,-50px);transform:translate(25px,-50px)}66%{-webkit-transform:translate(50px,0);transform:translate(50px,0)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@-webkit-keyframes ball-triangle-path-2{33%{-webkit-transform:translate(25px,50px);transform:translate(25px,50px)}66%{-webkit-transform:translate(-25px,50px);transform:translate(-25px,50px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-triangle-path-2{33%{-webkit-transform:translate(25px,50px);transform:translate(25px,50px)}66%{-webkit-transform:translate(-25px,50px);transform:translate(-25px,50px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@-webkit-keyframes ball-triangle-path-3{33%{-webkit-transform:translate(-50px,0);transform:translate(-50px,0)}66%{-webkit-transform:translate(-25px,-50px);transform:translate(-25px,-50px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-triangle-path-3{33%{-webkit-transform:translate(-50px,0);transform:translate(-50px,0)}66%{-webkit-transform:translate(-25px,-50px);transform:translate(-25px,-50px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.ball-triangle-path{position:relative;-webkit-transform:translate(-29.99px,-37.51px);-ms-transform:translate(-29.99px,-37.51px);transform:translate(-29.99px,-37.51px)}.ball-triangle-path>div:nth-child(1){-webkit-animation-name:ball-triangle-path-1;animation-name:ball-triangle-path-1;-webkit-animation-delay:0;animation-delay:0;-webkit-animation-duration:2s;animation-duration:2s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.ball-triangle-path>div:nth-child(2){-webkit-animation-name:ball-triangle-path-2;animation-name:ball-triangle-path-2;-webkit-animation-delay:0;animation-delay:0;animation-duration:2s;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.ball-triangle-path>div:nth-child(2),.ball-triangle-path>div:nth-child(3){-webkit-animation-duration:2s;-webkit-animation-timing-function:ease-in-out}.ball-triangle-path>div:nth-child(3){-webkit-animation-name:ball-triangle-path-3;animation-name:ball-triangle-path-3;-webkit-animation-delay:0;animation-delay:0;animation-duration:2s;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.ball-triangle-path>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute;width:10px;height:10px;border-radius:100%;border:1px solid #fff}.ball-grid-beat>div,.ball-pulse-rise>div{background-color:#fff;height:15px;border-radius:100%;margin:2px}.ball-triangle-path>div:nth-of-type(1){top:50px}.ball-triangle-path>div:nth-of-type(2){left:25px}.ball-triangle-path>div:nth-of-type(3){top:50px;left:50px}@-webkit-keyframes ball-pulse-rise-even{0%{-webkit-transform:scale(1.1);transform:scale(1.1)}25%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}50%{-webkit-transform:scale(.4);transform:scale(.4)}75%{-webkit-transform:translateY(30px);transform:translateY(30px)}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-transform:scale(1);transform:scale(1)}}@keyframes ball-pulse-rise-even{0%{-webkit-transform:scale(1.1);transform:scale(1.1)}25%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}50%{-webkit-transform:scale(.4);transform:scale(.4)}75%{-webkit-transform:translateY(30px);transform:translateY(30px)}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes ball-pulse-rise-odd{0%{-webkit-transform:scale(.4);transform:scale(.4)}25%{-webkit-transform:translateY(30px);transform:translateY(30px)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}75%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-transform:scale(.75);transform:scale(.75)}}@keyframes ball-pulse-rise-odd{0%{-webkit-transform:scale(.4);transform:scale(.4)}25%{-webkit-transform:translateY(30px);transform:translateY(30px)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}75%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-transform:scale(.75);transform:scale(.75)}}.ball-pulse-rise>div{width:15px;-webkit-animation-fill-mode:both;animation-fill-mode:both;display:inline-block;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:cubic-bezier(.15,.46,.9,.6);animation-timing-function:cubic-bezier(.15,.46,.9,.6);-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-delay:0;animation-delay:0}.ball-pulse-rise>div:nth-child(2n){-webkit-animation-name:ball-pulse-rise-even;animation-name:ball-pulse-rise-even}.ball-pulse-rise>div:nth-child(2n-1){-webkit-animation-name:ball-pulse-rise-odd;animation-name:ball-pulse-rise-odd}@-webkit-keyframes ball-grid-beat{50%{opacity:.7}100%{opacity:1}}@keyframes ball-grid-beat{50%{opacity:.7}100%{opacity:1}}.ball-grid-beat{width:57px}.ball-grid-beat>div:nth-child(1){-webkit-animation-delay:.44s;animation-delay:.44s;-webkit-animation-duration:1.27s;animation-duration:1.27s}.ball-grid-beat>div:nth-child(2){-webkit-animation-delay:.2s;animation-delay:.2s;-webkit-animation-duration:1.52s;animation-duration:1.52s}.ball-grid-beat>div:nth-child(3){-webkit-animation-delay:.14s;animation-delay:.14s;-webkit-animation-duration:.61s;animation-duration:.61s}.ball-grid-beat>div:nth-child(4){-webkit-animation-delay:.15s;animation-delay:.15s;-webkit-animation-duration:.82s;animation-duration:.82s}.ball-grid-beat>div:nth-child(5){-webkit-animation-delay:-.01s;animation-delay:-.01s;-webkit-animation-duration:1.24s;animation-duration:1.24s}.ball-grid-beat>div:nth-child(6){-webkit-animation-delay:-.07s;animation-delay:-.07s;-webkit-animation-duration:1.35s;animation-duration:1.35s}.ball-grid-beat>div:nth-child(7){-webkit-animation-delay:.29s;animation-delay:.29s;-webkit-animation-duration:1.44s;animation-duration:1.44s}.ball-grid-beat>div:nth-child(8){-webkit-animation-delay:.63s;animation-delay:.63s;-webkit-animation-duration:1.19s;animation-duration:1.19s}.ball-grid-beat>div:nth-child(9){-webkit-animation-delay:-.18s;animation-delay:-.18s;-webkit-animation-duration:1.48s;animation-duration:1.48s}.ball-grid-beat>div{width:15px;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:ball-grid-beat;animation-name:ball-grid-beat;animation-iteration-count:infinite;-webkit-animation-delay:0;animation-delay:0}.ball-grid-beat>div,.ball-grid-pulse>div{display:inline-block;float:left;-webkit-animation-iteration-count:infinite}@-webkit-keyframes ball-grid-pulse{0%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(.5);transform:scale(.5);opacity:.7}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes ball-grid-pulse{0%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(.5);transform:scale(.5);opacity:.7}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1}}.ball-grid-pulse{width:57px}.ball-grid-pulse>div,.ball-spin-fade-loader>div{background-color:#fff;width:15px;height:15px;border-radius:100%;margin:2px}.ball-grid-pulse>div:nth-child(1){-webkit-animation-delay:.58s;animation-delay:.58s;-webkit-animation-duration:.9s;animation-duration:.9s}.ball-grid-pulse>div:nth-child(2){-webkit-animation-delay:.01s;animation-delay:.01s;-webkit-animation-duration:.94s;animation-duration:.94s}.ball-grid-pulse>div:nth-child(3){-webkit-animation-delay:.25s;animation-delay:.25s;-webkit-animation-duration:1.43s;animation-duration:1.43s}.ball-grid-pulse>div:nth-child(4){-webkit-animation-delay:-.03s;animation-delay:-.03s;-webkit-animation-duration:.74s;animation-duration:.74s}.ball-grid-pulse>div:nth-child(5){-webkit-animation-delay:.21s;animation-delay:.21s;-webkit-animation-duration:.68s;animation-duration:.68s}.ball-grid-pulse>div:nth-child(6){-webkit-animation-delay:.25s;animation-delay:.25s;-webkit-animation-duration:1.17s;animation-duration:1.17s}.ball-grid-pulse>div:nth-child(7){-webkit-animation-delay:.46s;animation-delay:.46s;-webkit-animation-duration:1.41s;animation-duration:1.41s}.ball-grid-pulse>div:nth-child(8){-webkit-animation-delay:.02s;animation-delay:.02s;-webkit-animation-duration:1.56s;animation-duration:1.56s}.ball-grid-pulse>div:nth-child(9){-webkit-animation-delay:.13s;animation-delay:.13s;-webkit-animation-duration:.78s;animation-duration:.78s}.ball-grid-pulse>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:ball-grid-pulse;animation-name:ball-grid-pulse;animation-iteration-count:infinite;-webkit-animation-delay:0;animation-delay:0}@-webkit-keyframes ball-spin-fade-loader{50%{opacity:.3;-webkit-transform:scale(.4);transform:scale(.4)}100%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes ball-spin-fade-loader{50%{opacity:.3;-webkit-transform:scale(.4);transform:scale(.4)}100%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}.ball-spin-fade-loader{position:relative;top:-10px;left:-10px}.ball-spin-fade-loader>div:nth-child(1){top:25px;left:0;-webkit-animation:ball-spin-fade-loader 1s -.96s infinite linear;animation:ball-spin-fade-loader 1s -.96s infinite linear}.ball-spin-fade-loader>div:nth-child(2){top:17.05px;left:17.05px;-webkit-animation:ball-spin-fade-loader 1s -.84s infinite linear;animation:ball-spin-fade-loader 1s -.84s infinite linear}.ball-spin-fade-loader>div:nth-child(3){top:0;left:25px;-webkit-animation:ball-spin-fade-loader 1s -.72s infinite linear;animation:ball-spin-fade-loader 1s -.72s infinite linear}.ball-spin-fade-loader>div:nth-child(4){top:-17.05px;left:17.05px;-webkit-animation:ball-spin-fade-loader 1s -.6s infinite linear;animation:ball-spin-fade-loader 1s -.6s infinite linear}.ball-spin-fade-loader>div:nth-child(5){top:-25px;left:0;-webkit-animation:ball-spin-fade-loader 1s -.48s infinite linear;animation:ball-spin-fade-loader 1s -.48s infinite linear}.ball-spin-fade-loader>div:nth-child(6){top:-17.05px;left:-17.05px;-webkit-animation:ball-spin-fade-loader 1s -.36s infinite linear;animation:ball-spin-fade-loader 1s -.36s infinite linear}.ball-spin-fade-loader>div:nth-child(7){top:0;left:-25px;-webkit-animation:ball-spin-fade-loader 1s -.24s infinite linear;animation:ball-spin-fade-loader 1s -.24s infinite linear}.ball-spin-fade-loader>div:nth-child(8){top:17.05px;left:-17.05px;-webkit-animation:ball-spin-fade-loader 1s -.12s infinite linear;animation:ball-spin-fade-loader 1s -.12s infinite linear}.ball-spin-fade-loader>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute}@-webkit-keyframes ball-spin-loader{75%{opacity:.2}100%{opacity:1}}@keyframes ball-spin-loader{75%{opacity:.2}100%{opacity:1}}.ball-spin-loader{position:relative}.ball-spin-loader>span:nth-child(1){top:45px;left:0;-webkit-animation:ball-spin-loader 2s .9s infinite linear;animation:ball-spin-loader 2s .9s infinite linear}.ball-spin-loader>span:nth-child(2){top:30.68px;left:30.68px;-webkit-animation:ball-spin-loader 2s 1.8s infinite linear;animation:ball-spin-loader 2s 1.8s infinite linear}.ball-spin-loader>span:nth-child(3){top:0;left:45px;-webkit-animation:ball-spin-loader 2s 2.7s infinite linear;animation:ball-spin-loader 2s 2.7s infinite linear}.ball-spin-loader>span:nth-child(4){top:-30.68px;left:30.68px;-webkit-animation:ball-spin-loader 2s 3.6s infinite linear;animation:ball-spin-loader 2s 3.6s infinite linear}.ball-spin-loader>span:nth-child(5){top:-45px;left:0;-webkit-animation:ball-spin-loader 2s 4.5s infinite linear;animation:ball-spin-loader 2s 4.5s infinite linear}.ball-spin-loader>span:nth-child(6){top:-30.68px;left:-30.68px;-webkit-animation:ball-spin-loader 2s 5.4s infinite linear;animation:ball-spin-loader 2s 5.4s infinite linear}.ball-spin-loader>span:nth-child(7){top:0;left:-45px;-webkit-animation:ball-spin-loader 2s 6.3s infinite linear;animation:ball-spin-loader 2s 6.3s infinite linear}.ball-spin-loader>span:nth-child(8){top:30.68px;left:-30.68px;-webkit-animation:ball-spin-loader 2s 7.2s infinite linear;animation:ball-spin-loader 2s 7.2s infinite linear}.ball-spin-loader>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute;width:15px;height:15px;border-radius:100%;background:green}.ball-zig-zag-deflect>div,.ball-zig-zag>div{background-color:#fff;width:15px;height:15px;border-radius:100%;margin:2px 2px 2px 15px;top:4px;left:-7px}@-webkit-keyframes ball-zig{33%{-webkit-transform:translate(-15px,-30px);transform:translate(-15px,-30px)}66%{-webkit-transform:translate(15px,-30px);transform:translate(15px,-30px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-zig{33%{-webkit-transform:translate(-15px,-30px);transform:translate(-15px,-30px)}66%{-webkit-transform:translate(15px,-30px);transform:translate(15px,-30px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@-webkit-keyframes ball-zag{33%{-webkit-transform:translate(15px,30px);transform:translate(15px,30px)}66%{-webkit-transform:translate(-15px,30px);transform:translate(-15px,30px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-zag{33%{-webkit-transform:translate(15px,30px);transform:translate(15px,30px)}66%{-webkit-transform:translate(-15px,30px);transform:translate(-15px,30px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.ball-zig-zag{position:relative;-webkit-transform:translate(-15px,-15px);-ms-transform:translate(-15px,-15px);transform:translate(-15px,-15px)}.ball-zig-zag>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute}.ball-zig-zag>div:first-child{-webkit-animation:ball-zig .7s 0s infinite linear;animation:ball-zig .7s 0s infinite linear}.ball-zig-zag>div:last-child{-webkit-animation:ball-zag .7s 0s infinite linear;animation:ball-zag .7s 0s infinite linear}@-webkit-keyframes ball-zig-deflect{17%,84%{-webkit-transform:translate(-15px,-30px);transform:translate(-15px,-30px)}34%,67%{-webkit-transform:translate(15px,-30px);transform:translate(15px,-30px)}100%,50%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-zig-deflect{17%,84%{-webkit-transform:translate(-15px,-30px);transform:translate(-15px,-30px)}34%,67%{-webkit-transform:translate(15px,-30px);transform:translate(15px,-30px)}100%,50%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@-webkit-keyframes ball-zag-deflect{17%,84%{-webkit-transform:translate(15px,30px);transform:translate(15px,30px)}34%,67%{-webkit-transform:translate(-15px,30px);transform:translate(-15px,30px)}100%,50%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes ball-zag-deflect{17%,84%{-webkit-transform:translate(15px,30px);transform:translate(15px,30px)}34%,67%{-webkit-transform:translate(-15px,30px);transform:translate(-15px,30px)}100%,50%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.ball-zig-zag-deflect{position:relative;-webkit-transform:translate(-15px,-15px);-ms-transform:translate(-15px,-15px);transform:translate(-15px,-15px)}.ball-zig-zag-deflect>div{-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute}.ball-zig-zag-deflect>div:first-child{-webkit-animation:ball-zig-deflect 1.5s 0s infinite linear;animation:ball-zig-deflect 1.5s 0s infinite linear}.ball-zig-zag-deflect>div:last-child{-webkit-animation:ball-zag-deflect 1.5s 0s infinite linear;animation:ball-zag-deflect 1.5s 0s infinite linear}@-webkit-keyframes line-scale{0%,100%{-webkit-transform:scaley(1);transform:scaley(1)}50%{-webkit-transform:scaley(.4);transform:scaley(.4)}}@keyframes line-scale{0%,100%{-webkit-transform:scaley(1);transform:scaley(1)}50%{-webkit-transform:scaley(.4);transform:scaley(.4)}}.line-scale>div:nth-child(1){-webkit-animation:line-scale 1s -.4s infinite cubic-bezier(.2,.68,.18,1.08);animation:line-scale 1s -.4s infinite cubic-bezier(.2,.68,.18,1.08)}.line-scale>div:nth-child(2){-webkit-animation:line-scale 1s -.3s infinite cubic-bezier(.2,.68,.18,1.08);animation:line-scale 1s -.3s infinite cubic-bezier(.2,.68,.18,1.08)}.line-scale>div:nth-child(3){-webkit-animation:line-scale 1s -.2s infinite cubic-bezier(.2,.68,.18,1.08);animation:line-scale 1s -.2s infinite cubic-bezier(.2,.68,.18,1.08)}.line-scale>div:nth-child(4){-webkit-animation:line-scale 1s -.1s infinite cubic-bezier(.2,.68,.18,1.08);animation:line-scale 1s -.1s infinite cubic-bezier(.2,.68,.18,1.08)}.line-scale>div:nth-child(5){-webkit-animation:line-scale 1s 0s infinite cubic-bezier(.2,.68,.18,1.08);animation:line-scale 1s 0s infinite cubic-bezier(.2,.68,.18,1.08)}.line-scale>div{animation-fill-mode:both;display:inline-block}.line-scale-party>div,.line-scale>div{background-color:#fff;border-radius:2px;margin:2px;width:4px;height:35px;-webkit-animation-fill-mode:both}@-webkit-keyframes line-scale-party{0%,100%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(.5);transform:scale(.5)}}@keyframes line-scale-party{0%,100%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(.5);transform:scale(.5)}}.line-scale-party>div:nth-child(1){-webkit-animation-delay:-.09s;animation-delay:-.09s;-webkit-animation-duration:.83s;animation-duration:.83s}.line-scale-party>div:nth-child(2){-webkit-animation-delay:.33s;animation-delay:.33s;-webkit-animation-duration:.64s;animation-duration:.64s}.line-scale-party>div:nth-child(3){-webkit-animation-delay:.32s;animation-delay:.32s;-webkit-animation-duration:.39s;animation-duration:.39s}.line-scale-party>div:nth-child(4){-webkit-animation-delay:.47s;animation-delay:.47s;-webkit-animation-duration:.52s;animation-duration:.52s}.line-scale-party>div{animation-fill-mode:both;display:inline-block;-webkit-animation-name:line-scale-party;animation-name:line-scale-party;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-delay:0;animation-delay:0}@-webkit-keyframes line-scale-pulse-out{0%,100%{-webkit-transform:scaley(1);transform:scaley(1)}50%{-webkit-transform:scaley(.4);transform:scaley(.4)}}@keyframes line-scale-pulse-out{0%,100%{-webkit-transform:scaley(1);transform:scaley(1)}50%{-webkit-transform:scaley(.4);transform:scaley(.4)}}.line-scale-pulse-out>div{background-color:#fff;width:4px;height:35px;border-radius:2px;margin:2px;display:inline-block;-webkit-animation:line-scale-pulse-out .9s -.6s infinite cubic-bezier(.85,.25,.37,.85);animation:line-scale-pulse-out .9s -.6s infinite cubic-bezier(.85,.25,.37,.85)}.line-scale-pulse-out>div:nth-child(2),.line-scale-pulse-out>div:nth-child(4){-webkit-animation-delay:-.4s!important;animation-delay:-.4s!important}.line-scale-pulse-out>div:nth-child(1),.line-scale-pulse-out>div:nth-child(5){-webkit-animation-delay:-.2s!important;animation-delay:-.2s!important}@-webkit-keyframes line-scale-pulse-out-rapid{0%,90%{-webkit-transform:scaley(1);transform:scaley(1)}80%{-webkit-transform:scaley(.3);transform:scaley(.3)}}@keyframes line-scale-pulse-out-rapid{0%,90%{-webkit-transform:scaley(1);transform:scaley(1)}80%{-webkit-transform:scaley(.3);transform:scaley(.3)}}.line-scale-pulse-out-rapid>div{background-color:#fff;width:4px;height:35px;border-radius:2px;margin:2px;display:inline-block;-webkit-animation:line-scale-pulse-out-rapid .9s -.5s infinite cubic-bezier(.11,.49,.38,.78);animation:line-scale-pulse-out-rapid .9s -.5s infinite cubic-bezier(.11,.49,.38,.78)}.line-scale-pulse-out-rapid>div:nth-child(2),.line-scale-pulse-out-rapid>div:nth-child(4){-webkit-animation-delay:-.25s!important;animation-delay:-.25s!important}.line-scale-pulse-out-rapid>div:nth-child(1),.line-scale-pulse-out-rapid>div:nth-child(5){-webkit-animation-delay:0s!important;animation-delay:0s!important}@-webkit-keyframes line-spin-fade-loader{50%{opacity:.3}100%{opacity:1}}@keyframes line-spin-fade-loader{50%{opacity:.3}100%{opacity:1}}.line-spin-fade-loader{position:relative;top:-10px;left:-4px}.line-spin-fade-loader>div:nth-child(1){top:20px;left:0;-webkit-animation:line-spin-fade-loader 1.2s -.84s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.84s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(2){top:13.64px;left:13.64px;-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:line-spin-fade-loader 1.2s -.72s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.72s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(3){top:0;left:20px;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);-webkit-animation:line-spin-fade-loader 1.2s -.6s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.6s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(4){top:-13.64px;left:13.64px;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:line-spin-fade-loader 1.2s -.48s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.48s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(5){top:-20px;left:0;-webkit-animation:line-spin-fade-loader 1.2s -.36s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.36s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(6){top:-13.64px;left:-13.64px;-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:line-spin-fade-loader 1.2s -.24s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.24s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(7){top:0;left:-20px;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);-webkit-animation:line-spin-fade-loader 1.2s -.12s infinite ease-in-out;animation:line-spin-fade-loader 1.2s -.12s infinite ease-in-out}.line-spin-fade-loader>div:nth-child(8){top:13.64px;left:-13.64px;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:line-spin-fade-loader 1.2s 0s infinite ease-in-out;animation:line-spin-fade-loader 1.2s 0s infinite ease-in-out}.line-spin-fade-loader>div{background-color:#fff;border-radius:2px;margin:2px;-webkit-animation-fill-mode:both;animation-fill-mode:both;position:absolute;width:5px;height:15px}@-webkit-keyframes triangle-skew-spin{25%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(0);transform:perspective(100px) rotateX(180deg) rotateY(0)}50%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(180deg);transform:perspective(100px) rotateX(180deg) rotateY(180deg)}75%{-webkit-transform:perspective(100px) rotateX(0) rotateY(180deg);transform:perspective(100px) rotateX(0) rotateY(180deg)}100%{-webkit-transform:perspective(100px) rotateX(0) rotateY(0);transform:perspective(100px) rotateX(0) rotateY(0)}}@keyframes triangle-skew-spin{25%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(0);transform:perspective(100px) rotateX(180deg) rotateY(0)}50%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(180deg);transform:perspective(100px) rotateX(180deg) rotateY(180deg)}75%{-webkit-transform:perspective(100px) rotateX(0) rotateY(180deg);transform:perspective(100px) rotateX(0) rotateY(180deg)}100%{-webkit-transform:perspective(100px) rotateX(0) rotateY(0);transform:perspective(100px) rotateX(0) rotateY(0)}}.triangle-skew-spin>div{width:0;height:0;border-left:20px solid transparent;border-right:20px solid transparent;border-bottom:20px solid #fff;-webkit-animation:triangle-skew-spin 3s 0s cubic-bezier(.09,.57,.49,.9) infinite;animation:triangle-skew-spin 3s 0s cubic-bezier(.09,.57,.49,.9) infinite}@-webkit-keyframes square-spin{25%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(0);transform:perspective(100px) rotateX(180deg) rotateY(0)}50%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(180deg);transform:perspective(100px) rotateX(180deg) rotateY(180deg)}75%{-webkit-transform:perspective(100px) rotateX(0) rotateY(180deg);transform:perspective(100px) rotateX(0) rotateY(180deg)}100%{-webkit-transform:perspective(100px) rotateX(0) rotateY(0);transform:perspective(100px) rotateX(0) rotateY(0)}}@keyframes square-spin{25%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(0);transform:perspective(100px) rotateX(180deg) rotateY(0)}50%{-webkit-transform:perspective(100px) rotateX(180deg) rotateY(180deg);transform:perspective(100px) rotateX(180deg) rotateY(180deg)}75%{-webkit-transform:perspective(100px) rotateX(0) rotateY(180deg);transform:perspective(100px) rotateX(0) rotateY(180deg)}100%{-webkit-transform:perspective(100px) rotateX(0) rotateY(0);transform:perspective(100px) rotateX(0) rotateY(0)}}.square-spin>div{width:50px;height:50px;background:#fff;border:1px solid red;-webkit-animation:square-spin 3s 0s cubic-bezier(.09,.57,.49,.9) infinite;animation:square-spin 3s 0s cubic-bezier(.09,.57,.49,.9) infinite}.pacman>div:first-of-type,.pacman>div:nth-child(2){width:0;height:0;border-right:25px solid transparent;border-top:25px solid #fff;border-left:25px solid #fff;border-bottom:25px solid #fff;border-radius:25px;position:relative;left:-30px}@-webkit-keyframes rotate_pacman_half_up{0%,100%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}50%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotate_pacman_half_up{0%,100%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}50%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes rotate_pacman_half_down{0%,100%{-webkit-transform:rotate(90deg);transform:rotate(90deg)}50%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes rotate_pacman_half_down{0%,100%{-webkit-transform:rotate(90deg);transform:rotate(90deg)}50%{-webkit-transform:rotate(0);transform:rotate(0)}}@-webkit-keyframes pacman-balls{75%{opacity:.7}100%{-webkit-transform:translate(-100px,-6.25px);transform:translate(-100px,-6.25px)}}@keyframes pacman-balls{75%{opacity:.7}100%{-webkit-transform:translate(-100px,-6.25px);transform:translate(-100px,-6.25px)}}.pacman{position:relative}.pacman>div:nth-child(3){-webkit-animation:pacman-balls 1s -.66s infinite linear;animation:pacman-balls 1s -.66s infinite linear}.pacman>div:nth-child(4){-webkit-animation:pacman-balls 1s -.33s infinite linear;animation:pacman-balls 1s -.33s infinite linear}.pacman>div:nth-child(5){-webkit-animation:pacman-balls 1s 0s infinite linear;animation:pacman-balls 1s 0s infinite linear}.pacman>div:first-of-type{-webkit-animation:rotate_pacman_half_up .5s 0s infinite;animation:rotate_pacman_half_up .5s 0s infinite}.pacman>div:nth-child(2){-webkit-animation:rotate_pacman_half_down .5s 0s infinite;animation:rotate_pacman_half_down .5s 0s infinite;margin-top:-50px}.pacman>div:nth-child(3),.pacman>div:nth-child(4),.pacman>div:nth-child(5),.pacman>div:nth-child(6){background-color:#fff;border-radius:100%;margin:2px;width:10px;height:10px;position:absolute;-webkit-transform:translate(0,-6.25px);-ms-transform:translate(0,-6.25px);transform:translate(0,-6.25px);top:25px;left:70px}@-webkit-keyframes cube-transition{25%{-webkit-transform:translateX(50px) scale(.5) rotate(-90deg);transform:translateX(50px) scale(.5) rotate(-90deg)}50%{-webkit-transform:translate(50px,50px) rotate(-180deg);transform:translate(50px,50px) rotate(-180deg)}75%{-webkit-transform:translateY(50px) scale(.5) rotate(-270deg);transform:translateY(50px) scale(.5) rotate(-270deg)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}@keyframes cube-transition{25%{-webkit-transform:translateX(50px) scale(.5) rotate(-90deg);transform:translateX(50px) scale(.5) rotate(-90deg)}50%{-webkit-transform:translate(50px,50px) rotate(-180deg);transform:translate(50px,50px) rotate(-180deg)}75%{-webkit-transform:translateY(50px) scale(.5) rotate(-270deg);transform:translateY(50px) scale(.5) rotate(-270deg)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}.cube-transition{position:relative;-webkit-transform:translate(-25px,-25px);-ms-transform:translate(-25px,-25px);transform:translate(-25px,-25px)}.cube-transition>div{width:10px;height:10px;position:absolute;top:-5px;left:-5px;background-color:#fff;-webkit-animation:cube-transition 1.6s 0s infinite ease-in-out;animation:cube-transition 1.6s 0s infinite ease-in-out}.cube-transition>div:last-child{-webkit-animation-delay:-.8s;animation-delay:-.8s}@-webkit-keyframes spin-rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spin-rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.semi-circle-spin{position:relative;width:35px;height:35px;overflow:hidden}.semi-circle-spin>div{position:absolute;border-width:0;border-radius:100%;-webkit-animation:spin-rotate .6s 0s infinite linear;animation:spin-rotate .6s 0s infinite linear;background-image:-webkit-linear-gradient(transparent 0,transparent 70%,#fff 30%,#fff 100%);background-image:linear-gradient(transparent 0,transparent 70%,#fff 30%,#fff 100%);width:100%;height:100%}@-webkit-keyframes bar-progress{0%,100%{-webkit-transform:scaleY(20%);transform:scaleY(20%);opacity:1}25%,75%{-webkit-transform:translateX(6%) scaleY(10%);transform:translateX(6%) scaleY(10%);opacity:.7}50%{-webkit-transform:translateX(20%) scaleY(20%);transform:translateX(20%) scaleY(20%);opacity:1}}@keyframes bar-progress{0%,100%{-webkit-transform:scaleY(20%);transform:scaleY(20%);opacity:1}25%,75%{-webkit-transform:translateX(6%) scaleY(10%);transform:translateX(6%) scaleY(10%);opacity:.7}50%{-webkit-transform:translateX(20%) scaleY(20%);transform:translateX(20%) scaleY(20%);opacity:1}}.bar-progress{width:30%;height:12px}.bar-progress>div{position:relative;width:20%;height:12px;border-radius:10px;background-color:#fff;-webkit-animation:bar-progress 3s cubic-bezier(.57,.1,.44,.93) infinite;animation:bar-progress 3s cubic-bezier(.57,.1,.44,.93) infinite;opacity:1}.bar-swing,.bar-swing>div{height:8px;width:30%}@-webkit-keyframes bar-swing{0%,100%{left:0}50%{left:70%}}@keyframes bar-swing{0%,100%{left:0}50%{left:70%}}.bar-swing>div{position:relative;border-radius:10px;background-color:#fff;-webkit-animation:bar-swing 1.5s infinite;animation:bar-swing 1.5s infinite}@-webkit-keyframes bar-swing-container{0%,100%{left:0;-webkit-transform:translateX(0);transform:translateX(0)}50%{left:70%;-webkit-transform:translateX(-4px);transform:translateX(-4px)}}@keyframes bar-swing-container{0%,100%{left:0;-webkit-transform:translateX(0);transform:translateX(0)}50%{left:70%;-webkit-transform:translateX(-4px);transform:translateX(-4px)}}.bar-swing-container{width:20%;height:8px;position:relative}.bar-swing-container div:nth-child(1){position:absolute;width:100%;background-color:rgba(255,255,255,.2);height:12px;border-radius:10px}.bar-swing-container div:nth-child(2){position:absolute;width:30%;height:8px;border-radius:10px;background-color:#fff;-webkit-animation:bar-swing-container 2s cubic-bezier(.91,.35,.12,.6) infinite;animation:bar-swing-container 2s cubic-bezier(.91,.35,.12,.6) infinite;margin:2px 2px 0}</style>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-PCCFF7G');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body onLoad="fecha_loader()">
        <div id="site-loader" class="load-complete">
            <div class="loader">
                <div class="loader-inner ball-clip-rotate">
                    <div></div>
                </div>
            </div>
        </div>
        <section class="ss_index_one">
            <div class="container-fluid">
                        <?php
                        // MENU
                        include 'php/menu.php';
                        ?>
                <div class="ss_banner_main">
                    <div class="row">
<?php
$vsSqlBanner = "SELECT imagem, titulo, descricao, link FROM banner WHERE id_banner = 1";
$vrsExecutaBanner = mysqli_query($Conexao, $vsSqlBanner) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoBanner = mysqli_fetch_object($vrsExecutaBanner)) {
    ?>
                            <div class="col-lg-5">
                                <div class="ss_banner_left">
                                    <h2><?php echo $voResultadoBanner->titulo ?></h2>
                                    <h1><?php echo $voResultadoBanner->descricao ?></h1>
                                    <a href="<?php echo $voResultadoBanner->link ?>" data-toggle="modal" class="white_btn">Faça um Orçamento</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="ss_banner_right">
                                    <img class="img-fluid ss_cloud_one" src="<?php echo URL . "wdadmin/uploads/banners_slideshow/" . $voResultadoBanner->imagem ?>" title="<?php echo $voResultadoBanner->titulo ?>" alt="<?php echo $voResultadoBanner->titulo ?>"/>
                                    <img class="img-fluid ss_cloud" src="<?php echo URL . "assets/images/cloud.png" ?>" alt="Banner Background"/>
                                </div>
                            </div>
    <?php
}
?>
                    </div>
                </div>
            </div>
        </section>

        <section id="quem-somos" class="ss_section_three wow fadeIn">
            <div class="container"> 
                <div class="row">
<?php
$vsSqlQuemSomos = "SELECT texto FROM sobre";
$vrsExecutaQuemSomos = mysqli_query($Conexao, $vsSqlQuemSomos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoQuemSomos = mysqli_fetch_object($vrsExecutaQuemSomos)) {
    ?>
                        <div class="col-lg-12 align-self-center">
                            <h3 class="wow fadeInRightBig">Quem Somos</h3>
                            <h1 class="wow fadeIn">A Solive</h1>
                            <p><?php echo $voResultadoQuemSomos->texto ?></p>
    <?php
    $vsSqlMVV = "SELECT texto_missao, texto_visao, texto_valores FROM missao_visao_valores";
    $vrsExecutaMVV = mysqli_query($Conexao, $vsSqlMVV) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
    while ($voResultadoMVV = mysqli_fetch_object($vrsExecutaMVV)) {
        ?>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default wow fadeInLeft animated">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseMissao">
                                                    <span class="fa fa-flag"></span>Missão
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseMissao" class="panel-collapse collapse">
                                            <div class="panel-body"><?php echo $voResultadoMVV->texto_missao ?></div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default wow fadeInLeft animated">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseVisao">
                                                    <span class="fa fa-eye"></span>Visão
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseVisao" class="panel-collapse collapse">
                                            <div class="panel-body"><?php echo $voResultadoMVV->texto_visao ?></div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default wow fadeInLeft animated">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseValores">
                                                    <span class="fa fa-trophy"></span>Valores
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseValores" class="panel-collapse collapse">
                                            <div class="panel-body"><?php echo $voResultadoMVV->texto_valores ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        ?>
                        </div>
                                    <?php
                                }
                                ?>
                    <div class="col-lg-12">
                        <div class="ss_pv_two_right wow fadeInRightBig">
                            <h1 class="mb-4">Vantagens da energia solar</h1>
                            <div id="counter" class="pv_value">
<?php
$vsSqlVantangens = "SELECT titulo FROM informacoes WHERE id_conteudo_personalizado = 4";
$vrsExecutaVantangens = mysqli_query($Conexao, $vsSqlVantangens) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoVantangens = mysqli_fetch_object($vrsExecutaVantangens)) {
    ?>
                                    <div class="ss_box_bg text-center wow fadeIn" data-wow-delay="0.1s">
                                        <h2><?php echo $voResultadoVantangens->titulo ?></h2>
                                    </div>
    <?php
}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="como-funciona" class="ss_section_five ss_section_sec_bg como-funciona-section wow fadeIn">
            <div class="container-fluid"> 
                <h3 class="ss_h3_center text-center wow fadeInRightBig">Como Funciona</h3>
                <h1 class="text-center mb-5">Conheça mais sobre energia solar</h1>
                <div class="row"> 
                    <div class="col-xl-4 col-lg-6">
                        <div class="ss_four_left wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s" >
<?php
$vsSqlComoFunciona = "SELECT titulo, texto, imagem FROM informacoes WHERE id_conteudo_personalizado = 5 AND id_informacoes BETWEEN 18 AND 19";
$vrsExecutaComoFunciona = mysqli_query($Conexao, $vsSqlComoFunciona) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoComoFunciona = mysqli_fetch_object($vrsExecutaComoFunciona)) {
    ?>
                                <div class="ss_box_bg m-t-60 wow fadeIn">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="ss_four_one">
                                                <img class="img-fluid" src="<?php echo URL . "wdadmin/uploads/informacoes/" . $voResultadoComoFunciona->imagem ?>" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="ss_four_two">
                                                <h2><?php echo $voResultadoComoFunciona->titulo ?></h2>
                                <?php echo $voResultadoComoFunciona->texto ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    <?php
}
?>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 order-xl-last mt-lg-0 mt-md-4">
                        <div class="ss_four_left">
<?php
$vsSqlComoFunciona2 = "SELECT titulo, texto, imagem FROM informacoes WHERE id_conteudo_personalizado = 5 AND id_informacoes BETWEEN 20 AND 21";
$vrsExecutaComoFunciona2 = mysqli_query($Conexao, $vsSqlComoFunciona2) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoComoFunciona2 = mysqli_fetch_object($vrsExecutaComoFunciona2)) {
    ?>
                                <div class="ss_box_bg m-t-60 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="ss_four_one">
                                                <img class="img-fluid" src="<?php echo URL . "wdadmin/uploads/informacoes/" . $voResultadoComoFunciona2->imagem ?>" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="ss_four_two">
                                                <h2><?php echo $voResultadoComoFunciona2->titulo ?></h2>
                                <?php echo $voResultadoComoFunciona2->texto ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-0 col-lg-6 offset-lg-3">
                        <div class="ss_easy_use wow zoomIn" data-wow-delay="0.2s" data-wow-duration="1s">
                            <?php
                            $vsSqlComoFunciona3 = "SELECT titulo, imagem FROM informacoes WHERE id_conteudo_personalizado = 5 AND id_informacoes = 22";
                            $vrsExecutaComoFunciona3 = mysqli_query($Conexao, $vsSqlComoFunciona3) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoComoFunciona3 = mysqli_fetch_object($vrsExecutaComoFunciona3)) {
                                ?>
                                <img class="img-fluid" src="<?php echo URL . "wdadmin/uploads/informacoes/" . $voResultadoComoFunciona3->imagem ?>" title="<?php echo $voResultadoComoFunciona3->titulo ?>" alt="<?php echo "Imagem " . $voResultadoComoFunciona3->titulo ?>">
    <?php
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="etapas" class="solar_why_choose wow fadeIn">
            <h3 class="ss_h3_center text-center wow fadeInRightBig">Etapas</h3>
            <h1 class="text_span">Veja nossos processos</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline3">
<?php
$vsSqlEtapas = "SELECT titulo, imagem FROM informacoes WHERE id_conteudo_personalizado = 6 AND id_informacoes ORDER BY id_informacoes";
$vrsExecutaEtapas = mysqli_query($Conexao, $vsSqlEtapas) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoEtapas = mysqli_fetch_object($vrsExecutaEtapas)) {
    ?>
                                <div class="timeline">
                                    <div class="timeline-icon"><span class="year"><img src="<?php echo URL . "wdadmin/uploads/informacoes/" . $voResultadoEtapas->imagem ?>"></span></div>
                                    <div class="timeline-content">
                                        <h2 class="title"><?php echo $voResultadoEtapas->titulo ?></h2>
                                    </div>
                                </div>
    <?php
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php /*
          <section class="ss_section_eight solar_portfolio ss_section_sec_bg spacer_top spacer_bottom wow fadeIn">
          <div class="container-fluid">
          <h3 class="ss_h3_center text-center wow fadeInRightBig">Projetos</h3>
          <h1 class="text-center mb-5">Veja Abaixo os mais recentes</h1>
          <div class="swiper-container swiper-container-horizontal">
          <div class="swiper-wrapper">
          <?php
          $vsSqlProjetos = "SELECT imagem1, titulo, url_amigavel FROM galeria_imagem WHERE id_galeria_grupo = 3 ORDER BY id_galeria_imagem DESC";
          $vrsExecutaProjetos = mysqli_query($Conexao, $vsSqlProjetos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
          while ($voResultadoProjetos = mysqli_fetch_object($vrsExecutaProjetos)) {
          ?>
          <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0">
          <div class="ss_eight ss_box_wbg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
          <a href="<?php echo URL . "projetos/" . $voResultadoProjetos->url_amigavel ?>">
          <img src="<?php echo URL . "wdadmin/uploads/galeria_imagens/" . $voResultadoProjetos->imagem1 ?>" class="img-fluid" alt=""/>
          <div class="ss_product_content ss_box_bg">
          <h2><?php echo $voResultadoProjetos->titulo ?></h2>
          </div>
          </a>
          </div>
          </div>
          <?php
          }
          ?>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
          </div>
          <center>
          <a href="<?php echo URL . "projetos" ?>" class="ss_btn m-b-0 m-t-35">Ver Todos</a>
          </center>
          </div>
          </section>
         */ ?>

        <?php /*
          <div id="parceiros" class="solar_partner_section wow fadeIn">
          <h3 class="ss_h3_center text-center wow fadeInRightBig">Parceiros</h3>
          <h1 class="text_span">Confira nossas empresas de confiança</h1>
          <div class="container">
          <div class="row">
          <div class="col-12">
          <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
          <div class="swiper-wrapper">
          <?php
          $vsSqlParceiros = "SELECT imagem, descricao FROM clientes WHERE status = 1 ORDER BY id_clientes DESC";
          $vrsExecutaParceiros = mysqli_query($Conexao, $vsSqlParceiros) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
          while ($voResultadoParceiros = mysqli_fetch_object($vrsExecutaParceiros)) {
          ?>
          <div class="swiper-slide"><img src="<?php echo URL . "wdadmin/uploads/clientes/" . $voResultadoParceiros->imagem ?>" title="<?php echo $voResultadoParceiros->descricao ?>" alt="<?php echo $voResultadoParceiros->descricao ?>"></div>
          <?php
          }
          ?>
          <?php
          $vsSqlParceiros2 = "SELECT imagem, descricao FROM clientes WHERE status = 1 ORDER BY id_clientes DESC";
          $vrsExecutaParceiros2 = mysqli_query($Conexao, $vsSqlParceiros2) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
          while ($voResultadoParceiros2 = mysqli_fetch_object($vrsExecutaParceiros2)) {
          ?>
          <div class="swiper-slide"><img src="<?php echo URL . "wdadmin/uploads/clientes/" . $voResultadoParceiros2->imagem ?>" title="<?php echo $voResultadoParceiros2->descricao ?>" alt="<?php echo $voResultadoParceiros2->descricao ?>"></div>
          <?php
          }
          ?>
          </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
          </div>
          </div>
          </div>
          </div>
         */ ?>

        <section id="contato" class="ss_contact ss_section_sec_bg wow fadeIn">
            <div class="ss_box_wbg">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="ss_contact_left">
<?php
$vsSqlContato = "SELECT endereco, cidade, estado, mapa, telefone FROM enderecos";
$vrsExecutaContato = mysqli_query($Conexao, $vsSqlContato) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
while ($voResultadoContato = mysqli_fetch_object($vrsExecutaContato)) {
    ?>
                                <div class="ss_contact_one">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h2>Endereço</h2>
                                    <p><a href="<?php echo $voResultadoContato->mapa ?>" target="blank"><?php echo $voResultadoContato->endereco . " - " . $voResultadoContato->cidade . " - " . $voResultadoContato->estado ?></a></p>
                                </div>
                                <div class="ss_contact_two">
                                    <i class="fas fa-envelope"></i>
                                    <h2>E-mail</h2>
                                    <p><a href="<?php echo "mailto:" . $voResultadoConfiguracoes->email ?>"><?php echo $voResultadoConfiguracoes->email ?></a></p>
                                </div>	
                                <div class="ss_contact_three">
                                    <i class="fas fa-phone"></i>
                                    <h2>Telefone</h2>
                                    <p><a href="<?php echo "tel:55" . str_replace(array("(", ")", "-", " "), "", $voResultadoContato->telefone) ?>" target="blank"><?php echo $voResultadoContato->telefone ?></a></p>
                                </div>	
    <?php
}
?>
                        </div>	
                    </div>	
                    <div class="col-lg-8 col-md-7">
                        <div class="ss_contact_right">
                            <h3 class="wow fadeInRightBig">contato</h3>
                            <h1>Entre em contato conosco</h1>
                            <form id="form_contato">
                                <input type="hidden" id="vsUrl" name="vsUrl" value="<?php echo URL ?>">
                                <input type="hidden" id="vsEmailContato" name="vsEmailContato" value="<?php echo EMAIL_CONTATO ?>">
                                <input type="hidden" id="vsNomeEmpresa" name="vsNomeEmpresa" value="<?php echo $voResultadoConfiguracoes->nome_empresa ?>">
                                <div class="ss_contact_form">
                                    <label>Nome</label>
                                    <input type="text" id="vsNome" name="vsNome" required />
                                </div>
                                <div class="ss_contact_form">
                                    <label>Telefone</label>
                                    <input type="tel" id="vsTelefone" name="vsTelefone" required />
                                </div>
                                <div class="ss_contact_form">
                                    <label>E-Mail</label>
                                    <input type="email" id="vsEmail" name="vsEmail" required />
                                </div>
                                <div class="ss_contact_form">
                                    <label>Assunto</label>
                                    <input type="text" id="vsAssunto" name="vsAssunto" required />
                                </div>
                                <div class="ss_contact_form">
                                    <label class="ss_message">Mensagem</label>
                                    <textarea id="vsMensagem" name="vsMensagem" required></textarea>
                                </div>
                                <button type="submit" id="botao_enviar_mensagem" class="ss_btn">Enviar</button>
                            </form>
                        </div>	
                    </div>	
                </div>
            </div>
        </section>

        <?php
        // RODAPÉ
        include 'php/rodape.php';

        // MODAL ORÇAMENTO
        include 'php/modal_orcamento.php';

        // CSS
        include 'php/css.php';

        // JAVASCRIPT
        include 'php/script.php';
        ?>

    </body>
</html>