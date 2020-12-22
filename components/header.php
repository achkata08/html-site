<header class="header">
        <nav class="navbar">
            <ul class="navbar-ul base">
            <?php require 'components/links.php'; ?>
            </ul>
            <ul class="navbar-ul hamburger">
                <li class="navbar-ul">
                    <a href="javascript:void(0);" class="link"  onclick="hamburgeFunc()">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <div class="hamburger-menu" id="hamb">
                    <ul>
                    <?php require 'components/links.php'; ?>
                    </ul>
                </div>
            </ul>
        </nav>
    </header>