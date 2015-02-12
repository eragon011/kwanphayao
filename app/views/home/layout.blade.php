<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <title><?php echo trans('text.encyclopaedia') ?> :: ยินดีต้อนรับ</title>

    <!-- Bootstrap -->
    <!-- <link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="/app/home/stylesheets/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <nav class="tab-bar show-for-small">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon">
                    <span></span>
                </a>
            </section>

            <section class="middle tab-bar-section">
                <h3 class="title"><?php echo trans('text.encyclopaedia') ?></h3>
            </section>
        </nav>

        <aside class="left-off-canvas-menu">
            <div>
                <a href="/">
                    <img src="/app/home/images/logo.png" width="50%">
                </a>
            </div>
            <ul class="off-canvas-list">
                <li><label><?php echo trans('text.encyclopaedia') ?></label></li>
                <li></li>
            </ul>
        </aside>

        <div>
            @yield('content')
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/components/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/components/foundation/js/foundation.min.js"></script>
<script src="/components/foundation/js/foundation/foundation.offcanvas.js"></script>

<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/components/angular/angular.js"></script>
<script src="/components/angular-bootstrap/ui-bootstrap.min.js"></script>
<script src="/components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
<script src="/components/angular-resource/angular-resource.min.js"></script>
<script src="/components/angular-ui-router/release/angular-ui-router.min.js"></script>
@yield('javascript')
</body>
</html>