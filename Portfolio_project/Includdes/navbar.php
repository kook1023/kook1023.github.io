<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- ^^ Inside container-fluid Div ^^ -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/Jaar%202/Portfolio_project/home.php') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/Jaar%202/Portfolio_project/about.php') {
                                            echo 'active';
                                        } ?>" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/Jaar%202/Portfolio_project/contact.php') {
                                            echo 'active';
                                        } ?>" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/Jaar%202/Portfolio_project/accomplish.php') {
                                            echo 'active';
                                        } ?>" href="accomplish.php">Accomplished</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/Jaar%202/Portfolio_project/dvd.php') {
                                            echo 'active';
                                        } ?>" href="dvd.php">DVD</a>
                </li>
            </ul> <!-- All items inside the navbar -->
        </div> <!-- Div for when you open the navbar on mobile -->
    </div> <!-- Div with container-fluid so the width is 100% so it works on mobile and PC -->
</nav> <!-- Nav voor de navbar -->