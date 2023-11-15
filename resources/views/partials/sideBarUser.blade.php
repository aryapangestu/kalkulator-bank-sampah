<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ $title === 'Dashboard' ? '' : 'collapsed' }}" href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $title === 'Input' ? '' : 'collapsed' }}" href="/input">
                <i class="bi bi-card-list"></i>
                <span>Input</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $title === 'Kategori' ? '' : 'collapsed' }}" href="/kategori">
                <i class="bi bi-card-list"></i>
                <span>Kategori (Admin)</span>
            </a>
        </li><!-- End Register Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
