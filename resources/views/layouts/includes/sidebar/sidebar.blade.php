<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Amigol') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Dashboard', 'url' => route('dashboard')])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Teams', 'url' => route('teams')])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Sponsors', 'url' => route('sponsors')])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Invoices', 'url' => route('invoices')])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Memberships', 'url' => '#'])
                @include('layouts.includes.sidebar.includes.link', ['title' => 'Contracts', 'url' => route('contracts')])
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
