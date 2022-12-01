<!doctype html>
<html lang="en">
    <head>
        @include("admin.css")
    </head>

    <body data-topbar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include("admin.header_top")
            <!-- ========== Left Sidebar Start ========== -->
            @include("admin.left_sidebar")
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield("content")

                <!-- End Page-content -->
               
                @include("admin.footer")
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        @include("admin.js")
    </body>

</html>