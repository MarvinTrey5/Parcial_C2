<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{asset('styles/estilosPrin.css')}}">
    <link rel="icon" href="{{asset('icon/IconB.png')}}">
</head>
<body>
<header>
    <img src="https://www.pngitem.com/pimgs/m/9-94185_libro-los-libros-libros-de-la-biblioteca-la.png" alt="Imagen de biblioteca">
    <h1>Biblioteca Virtual</h1>
    <h2>Un universo de conocimiento a tu alcance</h2>
  </header>
  <nav>
        <ul>
            <li><a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <p id="parrafo">
            ¡Bienvenido a nuestra biblioteca virtual, donde el conocimiento y la imaginación convergen en un universo digital sin límites! Aquí, 
            cada clic es una invitación a explorar un vasto océano de libros electrónicos, revistas académicas y recursos educativos de todas las 
            disciplinas imaginables. Ya sea que busques sumergirte en las páginas de la literatura clásica, descubrir las últimas investigaciones 
            científicas o explorar nuevos horizontes en el arte y la cultura, nuestra biblioteca virtual está lista para acompañarte en tu viaje 
            intelectual. Con la comodidad de acceso desde cualquier lugar y en cualquier momento, te invitamos a embarcarte en una experiencia de
            aprendizaje sin fronteras. ¡Bienvenido a un mundo donde el conocimiento es infinito y la curiosidad es bienvenida!.

            En nuestra biblioteca virtual, cada sección es un mundo por descubrir. Desde las estanterías digitales repletas de clásicos de la literatura mundial 
            hasta las bases de datos abarrotadas de investigaciones científicas de vanguardia, aquí encontrarás un vasto tesoro de conocimiento que espera ser 
            explorado. Sumérgete en las profundidades de la historia antigua, donde las civilizaciones perdidas cobran vida a través de relatos fascinantes, o 
            aventúrate en los confines del universo conocido y desconocido con los últimos avances en astronomía y cosmología. Si el arte y la creatividad son 
            tu pasión, déjate inspirar por galerías virtuales que albergan obras maestras de todos los estilos y épocas, o explora las colecciones de música y 
            cine que abarcan géneros y culturas de todo el mundo. Además, nuestra biblioteca no se limita a las palabras escritas; también ofrece una amplia gama 
            de recursos audiovisuales, interactivos y multimedia que enriquecerán tu experiencia de aprendizaje de maneras nuevas y emocionantes. Con acceso 
            instantáneo desde cualquier dispositivo conectado a internet, esta biblioteca virtual se convierte en tu compañero constante en el viaje hacia el 
            conocimiento, la comprensión y la inspiración.
            </p>          
            <div class="datos">
              <label>
                Los tomos de anime son como vastos océanos de creatividad y emoción, donde cada episodio es una ola que nos sumerge en un mundo lleno de aventura, 
                intriga y pasión. Desde las cumbres de las montañas más altas hasta las profundidades del espacio infinito, cada tomo nos lleva en un viaje inolvidable 
                a través de paisajes exuberantes y escenarios impresionantes. Los personajes cobran vida con cada trazo de animación, revelando capas de complejidad y 
                profundidad que nos cautivan y nos hacen conectar con sus luchas y triunfos. Cada tomo es un lienzo en movimiento, donde se entrelazan la narrativa, la 
                música y la animación para crear una experiencia sensorial que nos transporta a mundos más allá de nuestra imaginación.
                La producción de un tomo de anime implica un equipo multidisciplinario que incluye guionistas, directores, animadores, diseñadores de personajes, 
                compositores de música y otros profesionales creativos. Juntos, trabajan para dar vida a los mundos y personajes, creando una experiencia inmersiva para 
                el espectador.Cada tomo de anime puede tener una duración variable, desde unos pocos episodios hasta decenas, dependiendo de la complejidad de la historia 
                y de las decisiones de producción. Algunas series adaptan material de manga o novelas ligeras, mientras que otras presentan historias originales creadas 
                específicamente para la animación.La popularidad del anime ha crecido significativamente a nivel mundial en las últimas décadas, lo que ha llevado a la 
                producción de una amplia gama de tomos que abordan temas diversos y atraen a una audiencia global. Los tomos de anime no solo entretienen, sino que también
                pueden transmitir mensajes importantes, explorar temas profundos y ofrecer una ventana a la cultura japonesa y a la creatividad de sus creadores.
              </label>
            </div>
        </article>
        <div>
          <h4>TOP DE NUESTRA BIBLIOTECA VIRTUAL</h4>
        </div>
        <main>
          <div class="card">
            <img src="https://www.figurasmranime.cl/wp-content/uploads/2022/12/jujutsu-kaisen-tomo004.png"> 
            <div class="info">
              <h3>Jujutsu Kaisen</h3>
              <p>
                Yuji Itadori se traga un dedo maldito para salvar a alguien de su clase y ahora Ryomen Sukuna, un poderoso hechicero malvado conocido como el Rey de las 
                Maldiciones, vive en su alma. Las maldiciones son seres sobrenaturales creadas a partir de las emociones negativas de los humanos. Esta energía maldita 
                puede usarse como fuente de poder por parte de los hechiceros y de los espíritus malditos.
              </p>
              <a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a>
            </div>
          </div>
          <div class="card">
            <img src="https://images.cdn3.buscalibre.com/fit-in/360x360/e4/1d/e41d16f1a9d0822c4baaa864c1f8a22d.jpg"> 
            <div class="info">
              <h3>Frieren: Ascending to the Skies</h3>
              <p>
                La maga Frieren formaba parte del grupo del héroe Himmel, quienes derrotaron al Rey Demonio tras un viaje de 10 años y devolvieron la paz al reino. 
                Frieren es una elfa de más de mil años de vida, así que al despedirse de Himmel y sus compañeros promete que regresará para verlos y parte de viaje 
                sola.
              </p>
              <a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a>
            </div>
          </div>
          <div class="card">
            <img src="https://m.media-amazon.com/images/I/81bfP2ZLKqL._AC_UF1000,1000_QL80_.jpg"> 
            <div class="info">
              <h3>Kimetsu No Yaiba</h3>
              <p>
                Estamos en la era Taisho de Japón. Tanjiro, un joven que se gana la vida vendiendo carbón, descubre un día que su familia ha sido asesinada por un 
                demonio. Para empeorar las cosas, su hermana menor Nezuko, la única superviviente de la masacre, ha sufrido una transformación en demonio.
              </p>
              <a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a>
            </div>
          </div>
        </main>
        <main>
          <div class="card">
            <img src="https://m.media-amazon.com/images/I/91vMRinz5vL._SL1500_.jpg"> 
            <div class="info">
              <h3>Fate Zero</h3>
              <p>
              Se trata de un mundo paralelo dentro de la línea temporal de Fate. Este animese centra en la Tercera Guerra por el Santo Grial y las cosas que 
              suceden harían que la Cuarta Guerra no ocurriera, por lo tanto esta cronología estaría mal –lo bueno es que no es así.
              </p>
              <a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a>
            </div>
          </div>
          <div class="card">
            <img src="https://www.manga-news.com/public/images/vols/Boku-no-Kokoro-no-Yabai-Yatsu-3-jp.jpg"> 
            <div class="info">
              <h3>Boku no Kokoro no Yabai Yatsu</h3>
              <p>
                Ichikawa es un estudiante de secundaria de actitud sombría al que le fastidia todo. Yamada, por su parte, es una amante de las golosinas 
                que irradia por todo lo alto. ¿Será Yamada la luz de Ichikawa necesita para salir de las manos de las sombreas? ¡¡Una comedia romántica 
                entre dos polos opuestos!!
              </p>
              <a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a>
            </div>
          </div>
          <div class="card">
            <img src="https://d3tvwjfge35btc.cloudfront.net/Assets/29/007/L_p1005100729.jpg"> 
            <div class="info">
              <h3>Naruto</h3>
              <p>
              Naruto Uzumaki es un niño marginado en la aldea ninja en la que vive. En su interior reside el poder de una bestia que estuvo al borde de 
              destruir el pueblo años atrás, el Kyubi, el zorro de nueve colas, lo que hace que nadie quiera acercarse a él por considerarlo maldito. 
              Pese a su soledad y su tristeza, Naruto quiere ser un ninja, pero no uno cualquiera: quiere ser Hokage, el líder de la aldea
              </p>
              <a href="{{ url ('/listado') }}" target="_self" class="explorar">Explora nuestra colección</a>
            </div>
          </div>
        </main>
  <footer>
   <span>
    UNIVERSIDAD GERARDO BARRIOS
    PRESENTACIÓN PARCIAL COMPUTO II
   </span>
  </footer>
</body>
</html>