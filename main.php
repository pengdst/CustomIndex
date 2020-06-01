<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Welcome to Dst Server</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
        media="screen,projection">
    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png">
    <style>
    ul.sidenav #logo-container {
        font-size: 24px;
    }

    ul.sidenav .logo {
        text-align: center;
        margin-top: 32px;
        margin-bottom: 32px;
    }

    ul.sidenav .divider {
        margin-bottom: 32px;
    }
    </style>
</head>

<body>
    <!-- START PAGE SOURCE -->
    <nav class="light-blue">
        <div class="nav-wrapper container">
            <!-- <a href="#" class="valign-wrapper">Xampp Directory Project</a> -->
            <a href="/" class="right brand-logo show-on-large hide-on-med-and-down">
                Xampp Directory Project
            </a>
            <a href="/" class="brand-logo show-on-med-and-down hide-on-large-only">
                Xampp Directory Project
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="phpmyadmin">phpMyAdmin</a></li>
                <li><a href="phpinfo.php">phpInfo</a></li>
                <li><a href="https://materializecss.com/getting-started.html">Documentation</a></li>
            </ul>

            <ul class="sidenav center-align" id="mobile-demo">
                <li class="logo">
                    <a href="/" id="logo-container">
                        Xampp
                        <i class="material-icons large left">spa</i>
                    </a>
                </li>
                <div class="divider"></div>
                <li><a href="phpmyadmin">phpMyAdmin</a></li>
                <li><a href="phpinfo.php">phpInfo</a></li>
                <li><a href="https://materializecss.com/getting-started.html">Documentation</a></li>
            </ul>
        </div>
    </nav>

    <div class="section" id="index-banner">
        <div class="container">
            <h3 class="header center orange-text"><b>Pengkuh's Server</b> Directory list</h3>
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class="row">
                <div class="collection">
                    <?php
                        while ($entry = $dir_obj->read()) {
                            if ($entry == "." || $entry == "..")
                            {
                                createCollectionItem($entry, $entry);
                            } else {
                                if (is_dir($entry)) {
                                    $label = $entry . getFileType($entry);
                                    createCollectionItem($entry, $label);
                                }
                            }
                        } 
                        $dir_obj->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var elems = document.querySelectorAll('.sidenav');
    //     var instances = M.Sidenav.init(elems, options);
    // });

    // Or with jQuery

    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    </script>
</body>

</html>