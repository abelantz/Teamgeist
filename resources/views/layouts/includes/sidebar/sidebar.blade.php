<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Clubs', 'url' => 'clubs'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Teams', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Staff', 'url' => '#'])
                <li class="nav-header"></li>
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Matchday', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Training', 'url' => '#'])
                <li class="nav-header"></li>
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Live match', 'url' => '#'])
                <li class="nav-header"></li>
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Roles', 'url' => '/roles'])
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
