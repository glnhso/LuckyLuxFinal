
<?php
    // Identificar a página atual
    $paginaAtual = strtolower(basename(dirname($_SERVER['PHP_SELF'])));

    // Verificar se está na página inicial
    $inicioAtivo = ($paginaAtual == 'home');
?>

<div class="luckylux-sidebar">

    <!-- Logo -->
    <div class="sidebar-brand">
        <div class="brand-icon">
            <i class="bi bi-gem"></i>
        </div>

        <div>
            <h4>LuckyLux</h4>
            <span>Hotel Management</span>
        </div>
    </div>

    <!-- Menu principal -->
    <div class="sidebar-section">
        <span class="sidebar-title">MENU PRINCIPAL</span>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link <?= $inicioAtivo ? 'active' : '' ?>" href="../home/index.php">
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Pagina Inicial</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $paginaAtual == 'quarto' ? 'active' : '' ?>" href="../quarto/">
                    <i class="bi bi-door-open-fill"></i>
                    <span>Quartos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $paginaAtual == 'formapagamento' ? 'active' : '' ?>" href="../FormaPagamento/">
                    <i class="bi bi-credit-card-fill"></i>
                    <span>Pagamentos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $paginaAtual == 'reserva' ? 'active' : '' ?>" href="../reserva/">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>Reservas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $paginaAtual == 'quartohasreserva' ? 'active' : '' ?>" href="../QuartoHasReserva/">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>Quartos e Reservas</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- Gestão de hóspedes -->
    <div class="sidebar-section">

        <span class="sidebar-title">GESTÃO DE HÓSPEDES</span>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link <?= $paginaAtual == 'categoriahospede' ? 'active' : '' ?>" href="../CategoriaHospede/">
                    <i class="bi bi-tags-fill"></i>
                    <span>Categoria Hóspedes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $paginaAtual == 'hospederesponsavel' ? 'active' : '' ?>" href="../hospedeResponsavel/">
                    <i class="bi bi-people-fill"></i>
                    <span>Hóspedes</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- Rodapé -->
    <div class="sidebar-footer">

        <div class="footer-decoration">
            <i class="bi bi-stars"></i>
        </div>

        <strong>LuckyLux Hotel</strong>
        <span>Conforto e elegância</span>

    </div>

</div>
