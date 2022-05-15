     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2F303A">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/icon/Logo.png" alt="" width="50" height="45" class="d-inline-block align-text-top">
                Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="/"> <span
                                class="{{ $title == 'Home' ? 'blue' : '' }}"> Home </span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="tentang kami"> <span
                                class="{{ $title == 'Tentang Kami' ? 'blue' : '' }}"> About </span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kontak"> <span
                                class="{{ $title == 'Kontak' ? 'blue' : '' }}">Contact</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Navbar-->
