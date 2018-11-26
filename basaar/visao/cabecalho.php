        <!-- Header -->
            <header id="header">
                <a class="logo" href="./produto">SNK</a>
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>

        <!-- Nav -->
            <nav id="menu">
                <ul class="links">
                            <?php if (!authIsLoggedIn()) { ?>
            <li><a href="./login">Entrar</a></li>
        <?php } elseif (authGetUserRole() == 'admin' && authIsLoggedIn()) { ?>
            <li><a href="./login/logout">Sair da conta</a></li> 
            <li><a href="./usuario">Usuario</a></li>
            <li><a href="./">Produto</a></li>
            <li><a href="./cupom/adicionar">Cupom</a></li>   
        <?php } else { ?>
            <li><a href="./carrinho">Carrinho</a></li>
            <li><a href="./">Produto</a></li>
            <li><a href="./login/logout">Sair da conta</a></li> 

        <?php } ?>
                <li><a href="./cupom/">Ver Cupons</a></li>   

                </ul>
            </nav>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h1>SNK</h1>
                    <p>Adquira os modelos de Shingeki no Kyojin</p>
                </div>
                <video autoplay loop muted playsinline src="images/banner.mp4"></video>
            </section>
<nav>
    <ul>



    </ul>
</nav>