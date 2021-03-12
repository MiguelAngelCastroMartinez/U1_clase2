<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Tipografias</title>
</head>
<body>

<div class="jumbotron text-center">
        <h1>Semana 2 trabajando interfaces con bootstrap</h1>
        <p>Este sitio incluye Bootstrap y es un ejemplo del diseño responsive.</p>
    </div> 
    <br>
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="./index.php">Columnas</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">textoTipografia</a>
    </li>
    </ul>
</nav>
    <br>

    <h2 class="jumbotron text-center">Tabajando con Textos y Tipografias</h2>

    <div class="container text-primary text-center">
        <h1>Titulos</h1>
        <p>Bootstrap 4 estilos de encabezados HTML (h1 a h6) con un peso de fuente más audaz y un tamaño de fuente aumentado:</p>
        <h1>Titulo de Bootstrap (2.5rem = 40px)</h1>
        <h2>Titulo de Bootstrap (2rem = 32px)</h2>
        <h3>Titulo de Bootstrap (1.75rem = 28px)</h3>
        <h4>Titulo de Bootstrap (1.5rem = 24px)</h4>
        <h5>Titulo de Bootstrap (1.25rem = 20px)</h5>
        <h6>Titulo de Bootstrap (1rem = 16px)</h6>
    </div>


    <div class="container text-success text-center">
        <h1>Encabezados</h1>
        <p>Los títulos de visualización se utilizan para destacar más que los títulos normales (tamaño de fuente más grande y peso de fuente más ligero)</p>
        <h1 class="display-1">Encabezado 1</h1>
        <h1 class="display-2">Encabezado 2</h1>
        <h1 class="display-3">Encabezado 3</h1>
        <h1 class="display-4">Encabezado 4</h1>
    </div>
    
    <div class="container text-info text-center">
        <h1>Texto secundario mas claro</h1>
        <p>El elemento pequeño se utiliza para crear un texto secundario más ligero en cualquier encabezado:</p>       
        <h1>Texto secundario del encabezado pequeño</small></h1>
        <h2>Texto secundario del encabezado pequeño</small></h2>
        <h3>Texto secundario del encabezado pequeño</small></h3>
        <h4>Texto secundario del encabezado pequeño</small></h4>
        <h5>Texto secundario del encabezado pequeño</small></h5>
        <h6>Texto secundario del encabezado pequeño</small></h6>
    </div>

    <div class="container text-danger text-center">
        <h1>Marca</h1>    
        <p>Utilice el elemento de marca para <mark>resaltar</mark> el texto.</p>
    </div>

    <div class="container text-warning text-center">
        <h1>Abreviaturas</h1>
        <p>El elemento abbr se utiliza para marcar una abreviatura o un acrónimo:</p>
        <p>El primero episodio de <abbr title="Dragon ball Z">Dbz</abbr> fue transmitida el 26 de abril de 1989.</p>
    </div>

    <div class="container text-secondary text-center">
        <h1>Cita en bloque</h1>
        <p>Agregue la clase .blockquote a un blockquote cuando cite bloques de contenido de otra fuente:</p>
        <blockquote class="blockquote">
           <p>WWE celebra cada semana varios eventos televisados, tales como Monday Night Raw, SmackDown o NXT. Además, una o dos veces al mes celebra eventos especiales de PPV, siendo Wrestlemania, Royal Rumble, Survivor Series y Summerslam los más conocidos.</p>
           <footer class="blockquote-footer">Del sitio web de Solowrestling</footer>
        </blockquote>
    </div>

    <div class="container text-dark text-center">
        <h1>Listas de descripción</h1>    
        <p>El elemento dl indica una lista de descripción:</p>
        <dl>
           <dt>Arbol</dt>
             <dd>- Tiene hojas verdes y tallo cafe </dd>
           <dt>Coche</dt>
             <dd>- Es de color azul y muy rapido</dd>
        </dl>     
    </div>

    <div class="container text-primary text-center">
        <h1>Fragmentos de código</h1>
        <p>Los fragmentos de código en línea deben estar incrustados en el elemento de código:</p>
        <p>Los siguientes elementos HTML: <code>tramo</code>, <code>seccion</code>, y <code>div</code> define una sección en un documento.</p>
    </div>

    <div class="container text-success text-center">
        <h1>Entradas de teclado</h1>
        <p>Para indicar la entrada que normalmente se ingresa a través del teclado, use el elemento kbd:</p>
        <p>Usa <kbd>ctrl + c</kbd> para copiar.</p>
    </div>

    <div class="container text-info text-center">
        <h1>Multiple Code Lines</h1>
        <p>For multiple lines of code, use the pre element:</p>
        <pre>
Text in a pre element
is displayed in a fixed-width
font, and it preserves
both      spaces and
line breaks.
        </pre>
    </div>

</body>
</html>