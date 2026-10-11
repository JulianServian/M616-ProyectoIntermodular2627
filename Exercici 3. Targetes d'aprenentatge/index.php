<?php

$conceptos = [
    [
        "nombre" => "Variables",
        "bloque" => "PHP",
        "explicacion" => "Sirven para guardar datos y utilizarlos más adelante.",
        "ejemplo" => '$nombre = "Julián";',
        "destacado" => true
    ],
    [
        "nombre" => "Arrays",
        "bloque" => "PHP",
        "explicacion" => "Permiten guardar varios valores en una misma variable.",
        "ejemplo" => '$colores = ["azul", "verde"];',
        "destacado" => true
    ],
    [
        "nombre" => "Condicionales",
        "bloque" => "PHP",
        "explicacion" => "Permiten ejecutar código distinto según una condición.",
        "ejemplo" => 'if ($edad >= 18) { echo "Adulto"; }',
        "destacado" => false
    ],
    [
        "nombre" => "Bucles",
        "bloque" => "PHP",
        "explicacion" => "Sirven para repetir una acción varias veces.",
        "ejemplo" => 'for ($contador = 0; $contador < 5; $contador++) { echo $contador; }',
        "destacado" => true
    ],
    [
        "nombre" => "Variables JavaScript",
        "bloque" => "JavaScript",
        "explicacion" => "Guardan información que podemos usar en un programa.",
        "ejemplo" => 'let nombre = "Julián";',
        "destacado" => true
    ],
    [
        "nombre" => "Funciones",
        "bloque" => "JavaScript",
        "explicacion" => "Agrupan instrucciones para usarlas cuando las necesitemos.",
        "ejemplo" => 'function saludar() { alert("Hola"); }',
        "destacado" => true
    ],
    [
        "nombre" => "Condicionales",
        "bloque" => "JavaScript",
        "explicacion" => "Permiten tomar decisiones según una condición.",
        "ejemplo" => 'if (edad >= 18) { alert("Adulto"); }',
        "destacado" => false
    ],
    [
        "nombre" => "Arrays",
        "bloque" => "JavaScript",
        "explicacion" => "Guardan varios elementos en una misma estructura.",
        "ejemplo" => 'let frutas = ["manzana", "pera"];',
        "destacado" => false
    ],
    [
        "nombre" => "Selectores CSS",
        "bloque" => "CSS",
        "explicacion" => "Indican qué elementos HTML queremos cambiar visualmente.",
        "ejemplo" => 'h1 { color: blue; }',
        "destacado" => true
    ],
    [
        "nombre" => "Clases CSS",
        "bloque" => "CSS",
        "explicacion" => "Permiten aplicar los mismos estilos a varios elementos.",
        "ejemplo" => '.tarjeta { padding: 20px; }',
        "destacado" => false
    ],
    [
        "nombre" => "Flexbox",
        "bloque" => "CSS",
        "explicacion" => "Ayuda a ordenar y alinear elementos dentro de un bloque.",
        "ejemplo" => '.contenedor { display: flex; }',
        "destacado" => true
    ],
    [
        "nombre" => "Media queries",
        "bloque" => "CSS",
        "explicacion" => "Adaptan el diseño a distintos tamaños de pantalla.",
        "ejemplo" => '@media (max-width: 600px) { h1 { font-size: 24px; } }',
        "destacado" => true
    ],
    [
        "nombre" => "Etiquetas HTML",
        "bloque" => "HTML",
        "explicacion" => "Organizan el contenido de una página web.",
        "ejemplo" => '<h1>Hola, mundo</h1>',
        "destacado" => true
    ],
    [
        "nombre" => "Enlaces",
        "bloque" => "HTML",
        "explicacion" => "Permiten ir a otra página o recurso.",
        "ejemplo" => '<a href="https://google.com">Abrir página</a>',
        "destacado" => false
    ],
    [
        "nombre" => "Imágenes",
        "bloque" => "HTML",
        "explicacion" => "Sirven para mostrar imágenes en una página.",
        "ejemplo" => '<img src="foto.jpg" alt="Foto">',
        "destacado" => false
    ],
    [
        "nombre" => "Formularios",
        "bloque" => "HTML",
        "explicacion" => "Permiten escribir y enviar información.",
        "ejemplo" => '<input type="text" placeholder="Nombre">',
        "destacado" => true
    ]
];

$totalConceptos = 0;
$totalBloques = 0;
$totalDestacados = 0;
$bloques = [];
$totalPhp = 0;
$totalJavascript = 0;
$totalCss = 0;
$totalHtml = 0;

foreach ($conceptos as $concepto) {
    $totalConceptos++;
    $bloqueActual = $concepto["bloque"];
    $bloques[$bloqueActual] = $bloqueActual;

    if ($concepto["destacado"]) {
        $totalDestacados++;
    }

    if ($bloqueActual === "PHP") {
        $totalPhp++;
        if ($totalPhp === 1) {
            $totalBloques++;
        }
    } elseif ($bloqueActual === "JavaScript") {
        $totalJavascript++;
        if ($totalJavascript === 1) {
            $totalBloques++;
        }
    } elseif ($bloqueActual === "CSS") {
        $totalCss++;
        if ($totalCss === 1) {
            $totalBloques++;
        }
    } else {
        $totalHtml++;
        if ($totalHtml === 1) {
            $totalBloques++;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía digital DAW2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecera">
        <div class="contenedor">
            <p class="etiqueta">DAW2 · GUÍA DE ESTUDIO</p>
            <h1>Guía digital DAW2</h1>
            <p>Los conceptos más importantes del curso, explicados de forma sencilla.</p>

            <div class="datos-cabecera">
                <div>
                    <strong><?php echo $totalConceptos; ?></strong>
                    <span>Conceptos</span>
                </div>
                <div>
                    <strong><?php echo $totalBloques; ?></strong>
                    <span>Bloques</span>
                </div>
                <div>
                    <strong><?php echo $totalDestacados; ?></strong>
                    <span>Destacados</span>
                </div>
            </div>
        </div>
    </header>

    <main class="contenedor">
        <section class="introduccion">
            <h2>Repasamos el curso</h2>
            <p>Consulta las tarjetas para recordar conceptos, explicaciones y ejemplos de código.</p>
        </section>

        <section class="resumen">
            <h2>Resumen de los conceptos</h2>
            <div class="resumen-cuadricula">
                <div class="resumen-tarjeta">
                    <span class="numero"><?php echo $totalPhp; ?></span>
                    <span>Conceptos PHP</span>
                </div>
                <div class="resumen-tarjeta">
                    <span class="numero"><?php echo $totalJavascript; ?></span>
                    <span>Conceptos JavaScript</span>
                </div>
                <div class="resumen-tarjeta">
                    <span class="numero"><?php echo $totalCss; ?></span>
                    <span>Conceptos CSS</span>
                </div>
                <div class="resumen-tarjeta">
                    <span class="numero"><?php echo $totalHtml; ?></span>
                    <span>Conceptos HTML</span>
                </div>
            </div>
        </section>

        <section class="listado">
            <div class="titulo-listado">
                <h2>Todas las tarjetas</h2>
                <span><?php echo $totalConceptos; ?> conceptos disponibles</span>
            </div>

            <div class="tarjetas">
                <?php foreach ($conceptos as $indice => $concepto): ?>
                    <?php
                    if ($concepto["bloque"] === "PHP") {
                        $claseBloque = "php";
                    } elseif ($concepto["bloque"] === "JavaScript") {
                        $claseBloque = "javascript";
                    } elseif ($concepto["bloque"] === "CSS") {
                        $claseBloque = "css";
                    } else {
                        $claseBloque = "html";
                    }

                    if ($concepto["destacado"]) {
                        $textoDestacado = "Concepto destacado";
                        $claseDestacado = "destacado";
                    } else {
                        $textoDestacado = "Concepto básico";
                        $claseDestacado = "basico";
                    }

                    $claseParidad = $indice % 2 === 0 ? "par" : "impar";
                    ?>
                    <article class="tarjeta <?php echo $claseBloque; ?> <?php echo $claseParidad; ?>">
                        <div class="tarjeta-cabecera">
                            <span class="bloque"><?php echo $concepto["bloque"]; ?></span>
                            <span class="numero-tarjeta">#<?php echo $indice + 1; ?></span>
                        </div>

                        <h3><?php echo $concepto["nombre"]; ?></h3>
                        <p><?php echo $concepto["explicacion"]; ?></p>

                        <div class="ejemplo">
                            <span>EJEMPLO</span>
                            <code><?php echo htmlspecialchars($concepto["ejemplo"]); ?></code>
                        </div>

                        <div class="estado <?php echo $claseDestacado; ?>">
                            <?php echo $textoDestacado; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="bloques-utilizados">
            <h2>Bloques utilizados</h2>
            <div class="lista-bloques">
                <?php foreach ($bloques as $bloque): ?>
                    <span class="bloque-resumen"><?php echo $bloque; ?></span>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>
