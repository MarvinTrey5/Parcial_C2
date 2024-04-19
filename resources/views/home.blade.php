<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{asset('styles/estilosPrin.css')}}">
</head>
<body>
<header>
    <img src="https://w1.pngwing.com/pngs/968/193/png-transparent-india-design-library-digital-library-academic-library-digital-library-of-india-education-learning-ebook-thumbnail.png" alt="Imagen de biblioteca">
    <h1>Biblioteca Virtual</h1>
    <p>Un universo de conocimiento a tu alcance</p>
  </header>

  <main>
    <section class="caracteristicas">
      <h2>Características principales</h2>
      <ul>
        <li>Préstamo de libros en línea</li>
        <li>Amplia colección de materiales</li>
        <li>Disponibilidad en tiempo real</li>
        <li>Listas de lectura personalizadas</li>
        <li>Acceso a recursos en línea</li>
      </ul>
    </section>

    <section class="llamada-accion">
        <h2>¡Empieza a disfrutar hoy mismo!</h2>
        <a href="{{ url ('/listado') }}" target="_blank" class="btn btn-explorar">Explora nuestra colección</a>
      </section>
  </main>

  <footer>
    <p>&copy; Parcial II</p>
    <a href="#" class="contacto">Contáctanos</a>
  </footer>
</body>
</html>