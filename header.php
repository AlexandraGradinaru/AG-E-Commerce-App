<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sass/style.css">
    <title>AG Fashion</title>
</head>

<body>
    <header class="header">
        <div class="header--top">
            <div class="logo">
                <a href="index.php" class="logo__link">
                    <img class="logo__img" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="header--top__container">
                <div class="search">
                    <div class="search__icon">
                        <i class="fas fa-search" id="search-btn"></i>
                        <p>Caută aici</p>
                    </div>
                    <div class="search__container">
                        <div>
                            <img class="logo__img logo__img-search" src="images/logo.png" alt="">
                            <i class="fas fa-times" id="close-btn"></i>
                        </div>
                        <input id="search-input" type="text" placeholder="Ce căutați?">
                        <div class="search__results">

                        </div>
                    </div>
                </div>
                <div class="user-commands">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#111" class="bi bi-person user-commands__icon"
                        id="user-profile" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg>
                    <a href="wishlist.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#111" class="bi bi-heart user-commands__heart" 
                        id="user-heart" viewBox="0 0 16 16">
                        <path
                            d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg></a>
                    <div class="cart-counter">
                        <span id="cart-counter">
                    <?php /* if(!isset($_SESSION['user_id'])){
                        echo '0';
                    }else {
                        $userId=$_SESSION['user_id'];
                        $cartCount=$cart->countCarts($userId);
                        echo $cartCount['count'];
                    } */?>
                        </span><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" fill="#111" class="bi bi-bag user-commands__bag" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg>
                    </div>
                </div>
            </div>
            
        </div>
        <i class="fas fa-bars navbar__icon"></i>
        <nav class="navbar">
                <div class="container">
                    <h2>Produse</h2>
                    <!-- <i class="fas fa-times navbar__close-icon" id="close-btn"></i> -->
                </div>
                <ul class="navbar__ul">
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="items.php">Noutăti</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Rochii</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Salopete</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Fuste</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Jachete</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Paltoane</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Topuri</a></li>
                    <li class="navbar__list"><a class="navbar__link navbar__link--hover" href="">Jeans</a></li>
                </ul>
        </nav>
    </header>
