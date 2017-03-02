<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="{{ url('/mdashboard') }}">
                    <i class="icon_house_alt"></i>
                    <span>Manager Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="#" class="" >
                    <i class="icon_document_alt"></i>
                    <span>Projects</span>
                </a>
                <ul class="sub">
                    {{--<li><a class="" href="form_component.html">All Projects</a></li>--}}
                    <li><a class="" href="{{ url('managerProjects') }}">New Projects</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#" class="" >
                    <i class="icon_document_alt"></i>
                    <span>Progress</span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ url('/progress') }}">View Progress</a></li>
                    {{--<li><a class="" href="{{ url('projectProgress') }}">Update Progress</a></li>--}}
                </ul>
            </li>

            <li>
                <a class="" href="{{ url('/materials') }}">
                    <i class="icon_genius"></i>
                    <span>Materials</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>