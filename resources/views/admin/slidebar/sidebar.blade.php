<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="index.html">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{ url('users') }}" class="" >
                    <i class="icon_document_alt"></i>
                    <span>Users</span>

                </a>
                {{--<ul class="sub">--}}
                    {{--<li><a class="" href="form_component.html">Form Elements</a></li>--}}
                    {{--<li><a class="" href="form_validation.html">Form Validation</a></li>--}}
                {{--</ul>--}}
            </li>
            <li class="sub-menu">
                <a href="{{ url('projects') }}" class="">
                    <i class="icon_desktop"></i>
                    <span>Projects</span>

                </a>

            </li>
            <li>
                <a class="" href="{{ url('/adminMaterials') }}">
                    <i class="icon_genius"></i>
                    <span>Materials</span>
                </a>
            </li>
            <li>
                <a class="" href="/adminProgress">
                    <i class="icon_piechart"></i>
                    <span>Progress</span>

                </a>

            </li>



        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>