<header>
    <div class="header-wrapper">
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('frontend/image/logo.jpg') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panels <i
                                    class="fa-solid fa-chevron-down text-dark"></i></a>
                            <ul type="none" class="drop-menu">
                                <li class="drop-behind"><a href="{{ route('admin_login.page') }}">Admin Panel</a></li>
                                <li class="drop-behind"><a href="signUp.html">Teacher Panel</a></li>
                                <li class="drop-behind"><a href="signUp.html">Student Panel</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admission.page') }}">Admissinos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('course.page') }}">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.page') }}">Contact</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('form.page') }}">Form</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </div><!-- /.header-wrapper -->
</header>
