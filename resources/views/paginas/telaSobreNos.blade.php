<x-layout titulo="loginPaciente">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png" alt="Logo" style="width: 250px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex align-items-center mx-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobrenos">Sobre-nós</a>
                    </li>
                </ul>
                <form class="d-flex justify-content-center" role="search">
                    <button class="btn btn-outline-primary mx-2" type="button" onclick="window.location.href='/loginPaciente'">Paciente</button>
                    <button class="btn btn-outline-primary mx-2" type="button" onclick="window.location.href='/loginFuncionario'">Funcionários</button>
                    <button class="btn btn-outline-secondary mx-2" type="button" onclick="window.location.href='/loginAdm'">Portal ADM</button>
                </form>
            </div>
        </div>
    </nav>

    

    <br>
    <!-- Inicio do footer -->
    <footer class="bg" style="background-color:#72C5E6; text-center text-lg-start text-white w-100 mt-5">
        <div class="container-fluid p-4">
            <div class="row my-4">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/animal-shelter/logo.png" height="70" alt="Hospital São Pedro" loading="lazy" />
                    </div>
                    <p class="text-center">Hospital São Pedro <br>Bem-vindo ao nosso hospital! Oferecemos atendimento de qualidade e cuidado com a sua saúde.</p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Pacientes</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/loginPaciente" class="text-white">Login</a>
                        </li>
                        <li class="mb-2">
                            <a href="/cadastrarPaciente" class="text-white">Registrar-se</a>
                        </li>
                        <li class="mb-2">
                            <a href="/consultaPaciente" class="text-white">Consultas</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Funcionários</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white">Login</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Portal ADM</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white">Registrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2025 Copyright:
            <a class="text-white">Hospital São Pedro</a>
        </div>
    </footer>
</x-layout>
