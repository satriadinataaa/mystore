<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:32 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    @include('includes.manager.styles')

</head>

<body>

    <div id="wrapper">

        @include('includes.manager.navigation')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
           
        </div>
            <ul class="nav navbar-top-links navbar-right">
               
               

                <li>
                    <a href="login.html">
                        <form method="POST" action={{ route('logout') }}>
                            <button type="submit"  class="btn btn-danger"><i class="fa fa-sign-out"></i> Log Out</button>
                        </form>
                       
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Tables</h2>
                    
                </div>
                
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('content')
        </div>
        @include('includes.manager.footer')

        </div>
        </div>



    <!-- Mainly scripts -->
    @include('includes.manager.script')

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:37 GMT -->
</html>
