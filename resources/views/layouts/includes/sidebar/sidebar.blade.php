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
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Dashboard', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Teams', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Invoices', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Sponsors', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Invoices', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Memberships', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Contracts', 'url' => '#'])
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
