<div class="sidebar" data-color="azure" data-image="{{url('public/img/sidebar-5.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/admin')}}" class="simple-text">
                    Sallon Management
                </a>
            </div>

            <ul class="nav">
                <li @if($page == 'home') class="active" @endif>
                    <a href="{{url('admin')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- <li @if($page == 'category') class="active" @endif>
                    <a href="{{url('admin/categories')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li @if($page == 'service') class="active" @endif>
                    <a href="{{url('admin/services')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Services</p>
                    </a>
                </li> -->
                <li @if($page == 'provider') class="active" @endif>
                    <a href="{{url('admin/providers')}}">
                        <i class="pe-7s-rocket"></i>
                        <p>Providers</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li> -->
               <!--  <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li> -->
                <!--<li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>