<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href=" {{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js') }}"></script>


</head>
<body>
<section id="container" class="">
    @include('admin.header.header')
    @include('admin.slidebar.sidebar')
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-user"></i> Users</h3>

                </div>
            </div>
            <section class="panel">
                <header class="panel-heading">
                    Input Details
                </header>
                <div class="panel-body">
                    <div class="form">
                        {!! Form::model($project, ['url' => ['updateProject', $project->id], 'method' => 'POST']) !!}
                        {{ csrf_field() }}

                        {!! Form::label('name','Project Name:') !!}
                        {{ Form::text('name', null, ['class' => 'form-control input-lg']) }}

                        {!! Form::label('description','Description:') !!}
                        {{ Form::text('description', null, ['class' => 'form-control input-lg']) }}

                        <div class="form-group ">
                            <label for="cpassword" class="control-label col-lg-2">Project Assign To <span class="required">*</span></label>

                            <select name="assign_to">
                                @foreach($users as $user)
                                    <option value="{{ $user->first_name }}">{{ $user->first_name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-sm-2">
                            {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </section>
        </section>
    </section>
</section>



<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}" ></script>
<!-- jQuery full calendar -->
<<script src="{{ asset('js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
<script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('js/calendar-custom.js') }}"></script>
<script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('js/jquery.customSelect.min.js') }}" ></script>
<script src="{{ asset('assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- custom script for this page-->
<script src="{{ asset('js/sparkline-chart.js') }}"></script>
<script src="{{ asset('js/easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('js/xcharts.min.js') }}"></script>
<script src="{{ asset('js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('js/gdp-data.js') }}"></script>
<script src="{{ asset('js/morris.min.js') }}"></script>
<script src="{{ asset('js/sparklines.js') }}"></script>
<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

</body>
</html>