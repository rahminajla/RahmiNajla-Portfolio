     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #151414">
        <div class="container">
            <a class="navbar-brand" href="#">
                Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link active"  href="#home"> <span
                                class="{{ $title == 'Home' ? 'brown' : '' }}"> Home </span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about"> <span
                                class="{{ $title == 'About' ? 'brown' : '' }}"> About </span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contact"> <span
                                class="{{ $title == 'Contact' ? 'brown' : '' }}"> Contact</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Navbar-->
