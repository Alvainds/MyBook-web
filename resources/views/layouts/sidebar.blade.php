<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>

            </h6>
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <i class="bi bi-house-door-fill me-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}" aria-current=" page"
                    href="{{ route('roles.index') }}">
                    <i class="bi bi-toggle-on me-2"></i>
                    Roles
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" aria-current=" page"
                    href="{{ route('users.index') }}">
                    <i class="bi bi-people-fill me-2"></i>
                    Users
                </a>
            </li>



        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Operations</span>

        </h6>
        <ul class="nav flex-column mb-2">

            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('book.*') ? 'active' : '' }}" aria-current=" page"
                    href="{{ route('book.index') }}">
                    <i class="bi bi-book-fill me-2"></i>
                    Book
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('category.*') ? 'active' : '' }}" aria-current=" page"
                    href="{{ route('category.index') }}">
                    <i class="bi bi-tags-fill me-2"></i>
                    Category
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('author.*') ? 'active' : '' }}" aria-current=" page"
                    href="{{ route('author.index') }}">
                    <i class="bi bi-person-workspace me-2"></i>
                    Author
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ request()->routeIs('publisher.*') ? 'active' : '' }}" aria-current=" page"
                    href="{{ route('publisher.index') }}">
                    <i class="bi bi-person-lines-fill me-2"></i>
                    Publisher
                </a>
            </li>
        </ul>
    </div>
</nav>
