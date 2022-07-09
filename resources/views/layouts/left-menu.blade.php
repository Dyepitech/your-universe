@section('left-menu')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="containerLeft">
            <header>
                <div class="headerTop">
                    <img src="img/Logo_fond_fonce.png" alt="Une manette jeu en logo">
                    <h1 class="fontTitle">Your Universes</h1>
                </div>
                <?php if (!empty($_SESSION)){?>
                    <div class="cardConnected">
                        <div class="glass"></div>
                        <div class="avatar"></div>
                        <div class="pseudo">
                            <p class="pseudoFont"><?php echo $result['username'];?></p>
                            <i class="fa-solid fa-user"></i>
                            <p class="rank" style="margin-left: 30px;">
                        </div>

                        <div class="levelBx">
                            <div>
                                <p class="indigo">Level</p>
                                <p class="white"><?php echo $result['level'];?></p>
                            </div>
                            <div>
                                <p class="indigo">Today</p>
                                <p class="white dosis">32.5K</p>
                            </div>
                        </div>
                    <?php } ?>
                    <nav>
                        <ul class="menu">
                            <li><i class="fa-solid fa-house"></i>Accueil</li>
                            <li><i class="fa-solid fa-star"></i>Avis</li>
                            <li><i class="fa-solid fa-hand-spock"></i>Actualités</li>
                            <li><i class="fa-solid fa-fire"></i>Bons plans</li>
                        </ul>
                            <a href="./login.php"><input class="connected" type="submit" value="Connexion"></a>
                            <a href="./logout.php"><input class="connected" type="submit" value="Déconnexion"></a>
                    </nav>
                    
                </div>
            </header>
        </div>
</div>
@show