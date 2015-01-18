            @include('shoulderscms::AdminLTE.partials.header')
            @include('shoulderscms::AdminLTE.partials.nav')

			<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

            	@yield('main')
            	
            </aside><!-- /.right-side -->
        @include('shoulderscms::AdminLTE.partials.footer')