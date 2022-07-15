@section('card')
<style>
        .slide {
            background-color: rgba(255, 255, 255, 0.4);
            height: 300px;
            margin: 10px;
        }

        .slide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
       
</style>

    <div class="slider">
        <div class="slide">
                <h3>Du texte</h3>
            </div>
            <div class="slide">
                <img src="../img/zelda.avif" alt="Fonzy 2">
            </div>
            <div class="slide">
                <img src="../img/pokemon.jpg" alt="Fonzy 3">
            </div>
            <div class="slide">
                <h3>4</h3>
            </div>
            
        </div>
        <!-- <div class="containCard ">
            <div class="cardGame ">
                    <img src="../img/zelda.avif" alt="Pochette de jeu zelda Awakening">
                    <h3>Link's Awakening</h3>
                    <ul>
                        <li>Genre</li>
                        <li>Plateforme</li>
                    </ul>
                    <h4>DESCRIPTION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla pariatur ab excepturi incidunt voluptatibus blanditiis? Aperiam quidem repellat doloribus, ipsa eius soluta enim delectus voluptate nobis dolore temporibus neque odio.</p>
                    <button>En savoir plus</button>
            </div>
            <div class="cardGame">
                    <img src="../img/zelda.avif" alt="Pochette de jeu zelda Awakening">
                    <h3>Link's Awakening</h3>
                    <ul>
                        <li>Genre</li>
                        <li>Plateforme</li>
                    </ul>
                    <h4>DESCRIPTION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla pariatur ab excepturi incidunt voluptatibus blanditiis? Aperiam quidem repellat doloribus, ipsa eius soluta enim delectus voluptate nobis dolore temporibus neque odio.</p>
                    <button>En savoir plus</button>
            </div>
            <div class="cardGame">
                    <img src="../img/zelda.avif" alt="Pochette de jeu zelda Awakening">
                    <h3>Link's Awakening</h3>
                    <ul>
                        <li>Genre</li>
                        <li>Plateforme</li>
                    </ul>
                    <h4>DESCRIPTION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla pariatur ab excepturi incidunt voluptatibus blanditiis? Aperiam quidem repellat doloribus, ipsa eius soluta enim delectus voluptate nobis dolore temporibus neque odio.</p>
                    <button>En savoir plus</button>
            </div>

        <div class="containCard2">
            <div class="cardGame">
                    <img src="../img/pokemon.jpg" alt="Pochette de jeu zelda Awakening">
                    <h3>Link's Awakening</h3>
                    <ul>
                        <li>Genre</li>
                        <li>Plateforme</li>
                    </ul>
                    <h4>DESCRIPTION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla pariatur ab excepturi incidunt voluptatibus blanditiis? Aperiam quidem repellat doloribus, ipsa eius soluta enim delectus voluptate nobis dolore temporibus neque odio.</p>
                    <button>En savoir plus</button>
            </div>
            <div class="cardGame">
                    <img src="../img/zelda.avif" alt="Pochette de jeu zelda Awakening">
                    <h3>Link's Awakening</h3>
                    <ul>
                        <li>Genre</li>
                        <li>Plateforme</li>
                    </ul>
                    <h4>DESCRIPTION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla pariatur ab excepturi incidunt voluptatibus blanditiis? Aperiam quidem repellat doloribus, ipsa eius soluta enim delectus voluptate nobis dolore temporibus neque odio.</p>
                    <button>En savoir plus</button>
            </div>
            <div class="cardGame">
                    <img src="../img/pokemon.jpg" alt="Pochette de jeu zelda Awakening">
                    <h3>Link's Awakening</h3>
                    <ul>
                        <li>Genre</li>
                        <li>Plateforme</li>
                    </ul>
                    <h4>DESCRIPTION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla pariatur ab excepturi incidunt voluptatibus blanditiis? Aperiam quidem repellat doloribus, ipsa eius soluta enim delectus voluptate nobis dolore temporibus neque odio.</p>
                    <button>En savoir plus</button>
            </div>
        </div> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            
        $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        });
                
        </script>


@show