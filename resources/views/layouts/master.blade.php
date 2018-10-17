<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://res.papitube.com/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/bootstrap/bootstrap-extend.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="https://res.papitube.com/vendors/animsition/animsition.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/asscrollable/asScrollable.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/switchery/switchery.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/intro-js/introjs.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/slidepanel/slidePanel.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/waves/waves.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/chartist/chartist.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/jvectormap/jquery-jvectormap.min.css">
    <link rel="stylesheet"
          href="https://res.papitube.com/vendors/chartist-plugin-tooltip/chartist-plugin-tooltip.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/toastr/toastr.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/dropify0_2_2/css/dropify.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/ionrangeslider/ionrangeslider.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/select2/select2.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/jquery-wizard/jquery-wizard.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/formvalidation/formValidation.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/site.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/vendors/asspinner/asSpinner.css">

    <link rel="stylesheet" href="{{ mix('css/base.css') }}">

{{--自定义样式--}}
@yield('style')

<!-- Fonts -->
    <link rel="stylesheet" href="https://res.papitube.com/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="https://res.papitube.com/fonts/brand-icons/brand-icons.min.css">

    <!--[if lt IE 9]>
    <script src="https://res.papitube.com/vendors/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="https://res.papitube.com/vendors/media-match/media.match.min.js"></script>
    <script src="https://res.papitube.com/vendors/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="https://res.papitube.com/vendors/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();

        function noneAvatar(image) {
            image.src = 'https://res.papitube.com/no-avatar.png'
        }
    </script>
</head>
<body class="animsition page-aside-left @yield('body-class')">
<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.
</p>
<![endif]-->

@yield('body')

<!-- Core  -->
<script src="https://res.papitube.com/vendors/babel-external-helpers/babel-external-helpers.js"></script>
<script src="https://res.papitube.com/vendors/jquery/jquery.js"></script>
<script src="https://res.papitube.com/vendors/popper-js/umd/popper.min.js"></script>
<script src="https://res.papitube.com/vendors/bootstrap/bootstrap.js"></script>
<script src="https://res.papitube.com/vendors/animsition/animsition.js"></script>
<script src="https://res.papitube.com/vendors/mousewheel/jquery.mousewheel.js"></script>
<script src="https://res.papitube.com/vendors/asscrollbar/jquery-asScrollbar.js"></script>
<script src="https://res.papitube.com/vendors/asscrollable/jquery-asScrollable.js"></script>
<script src="https://res.papitube.com/vendors/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="https://res.papitube.com/vendors/js-cookie/js.cookie.min.js"></script>
<script src="https://res.papitube.com/vendors/asscrollbar/jquery-asScrollbar.js"></script>
<script src="https://res.papitube.com/vendors/asscrollable/jquery-asScrollable.js"></script>
<script src="https://res.papitube.com/vendors/waves/waves.js"></script>
<script src="https://res.papitube.com/vendors/jquery-mmenu/jquery.mmenu.min.all.js"></script>

<script src="https://cdn.bootcss.com/vue/2.5.16/vue.js"></script>
<!-- Plugins -->
<script src="https://res.papitube.com/vendors/switchery/switchery.js"></script>
<script src="https://res.papitube.com/vendors/intro-js/intro.js"></script>
<script src="https://res.papitube.com/vendors/screenfull/screenfull.js"></script>
<script src="https://res.papitube.com/vendors/slidepanel/jquery-slidePanel.js"></script>
<script src="https://res.papitube.com/vendors/chartist/chartist.min.js"></script>
<script src="https://res.papitube.com/vendors/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
<script src="https://res.papitube.com/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="https://res.papitube.com/vendors/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="https://res.papitube.com/vendors/matchheight/jquery.matchHeight-min.js"></script>
<script src="https://res.papitube.com/vendors/peity/jquery.peity.min.js"></script>
<script src="https://res.papitube.com/vendors/toastr/toastr.min.js"></script>

<!-- Scripts -->
<script src="https://res.papitube.com/remark/js/Component.js"></script>
<script src="https://res.papitube.com/remark/js/Plugin.js"></script>
<script src="https://res.papitube.com/remark/js/Base.js"></script>
<script src="https://res.papitube.com/remark/js/Config.js"></script>

<script src="https://res.papitube.com/remark/js/Section/Menubar.js"></script>
<script src="https://res.papitube.com/remark/js/Section/GridMenu.js"></script>
<script src="https://res.papitube.com/remark/js/Section/Sidebar.js"></script>
<script src="https://res.papitube.com/remark/js/Section/PageAside.js"></script>
<script src="https://res.papitube.com/remark/js/Plugin/menu.js"></script>

<script src="https://res.papitube.com/remark/js/config/tour.js"></script>
<script src="https://res.papitube.com/remark/js/Site.js"></script>

<script src="https://res.papitube.com/remark/js/config/colors.js"></script>
<script src="https://res.papitube.com/remark/js/config/tour.js"></script>
<script>
    Config.set('assets', '/');
</script>

<!-- Page -->

<script src="https://res.papitube.com/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="https://res.papitube.com/vendors/select2/select2.full.min.js"></script>
<script src="https://res.papitube.com/vendors/dropify0_2_2/js/dropify.min.js"></script>
<script src="https://res.papitube.com/remark/js/Plugin/action-btn.js"></script>
<script src="https://res.papitube.com/qiniu.js"></script>
<script src="https://res.papitube.com/plupload.full.min.js"></script>
<script src="https://res.papitube.com/moxie.js"></script>
<script src="https://res.papitube.com/vendors/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="https://res.papitube.com/highcharts-6.1.0/code/highcharts.js"></script>
<script src="https://res.papitube.com/highcharts-6.1.0/code/highcharts-more.js"></script>
<script src="https://res.papitube.com/highcharts-6.1.0/code/modules/data.js"></script>
<script src="https://res.papitube.com/highcharts-6.1.0/code/modules/drilldown.js"></script>
<script src="https://res.papitube.com/vendors/toolbar/jquery.toolbar.js"></script>
<script src="https://res.papitube.com/remark/js/Plugin/material.js"></script>
<script src="https://res.papitube.com/vendors/clipboard.min.js"></script>
<script src="https://res.papitube.com/vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="https://res.papitube.com/vendors/jquery-wizard/jquery-wizard.js"></script>
<script src="https://res.papitube.com/vendors/formvalidation/formValidation.js"></script>
<script src="https://res.papitube.com/vendors/sortable/sortable.min.js"></script>
<script src="https://res.papitube.com/vendors/asspinner/jquery-asSpinner.min.js"></script>
<script src="https://res.papitube.com/remark/js/Plugin/asspinner.js"></script>
<script>
    (function (document, window, $) {
        'use strict';
        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>

@yield('script')

</body>
</html>
