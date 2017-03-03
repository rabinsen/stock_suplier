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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

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
                    <h3 class="page-header"><i class="fa fa-user"></i> Projects</h3>

                </div>
            </div>

            <div class="row">
               <div class="col-lg-12">
                   <div class="col-lg-6">
                       <form method="GET" action="{{ url('/searchProjects') }}">
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <input type="text" name="titlesearch" class="form-control" placeholder="Enter Title For Search" value="{{ old('titlesearch') }}">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <button class="btn btn-success">Search</button>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
                   <div class="col-lg-3">
                       <button class="btn btn-default" type="submit"><a  href="{{ url('addProjects') }}">Add Project</a></button>
                   </div>
               </div>
                {{--<button class="btn btn-primary" >Save</button>--}}
                <section class="panel">
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th><i class="icon_profile"></i> Project Name</th>
                                <th><i class="icon_profile"></i> Description</th>
                                <th><i class="icon_mail_alt"></i> Assigned To</th>
                                {{--<th><i class="icon_pin_alt"></i> City</th>--}}
                                {{--<th><i class="icon_mobile"></i> Mobile</th>--}}
                                <th><i class="icon_user"></i> Date</th>
                                <th><i class="icon_cogs"></i> Edit</th>
                                <th><i class="icon_cogs"></i> Delete</th>
                            </tr>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->assign_to }}</td>
                                    <td>{{ $project->created_at }}</td>
                                    {{--<td>176-026-5992</td>--}}
                                    <td>

                                        <a class="btn btn-primary" href="{{ url('/editProjects', $project->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['url' => ['deleteProject', $project->id], 'method' => 'DELETE' ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
        </section>
    </section>

</section>

<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js" ></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>

</body>
</html>