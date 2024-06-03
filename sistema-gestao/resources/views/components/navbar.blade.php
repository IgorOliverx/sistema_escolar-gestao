<style>
    .navbar-nav .nav-item:not(:last-child) {
        margin-right: 20px;
    }

    .nav-item a {
        font-family: "Archivo Black", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .icons-container {
        display: flex;
        align-items: center;
    }

    .icons-container .navbar-nav {
        width: auto;
        display: flex;
        gap: 20px;
    }
</style>

<nav class="navbar navbar-expand-lg" style="background-color: #e30707">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">
            <img src="/images/logo_senai_branco.png" alt="Logo-Senai" width="180px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="">Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Gráficos</a>
                </li>
            </ul>
            <div class="icons-container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user fa-2x mb-3" style="color: #ffffff;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-inbox fa-2x mb-3" style="color: #ffffff;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
