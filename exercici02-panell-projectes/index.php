<?php

$nomProjectes = [
    "Landing per a clínica dental",
    "Catàleg de productes",
    "Blog corporatiu escola",
    "Auditoria responsive",
    "Fitxa de servei amb CTA",
    "Galeria de projectes",
    "Integració amb API",
    "Botiga en línia bàsica"
];

$tipusProjectes = [
    "Web",
    "Ecommerce",
    "CMS",
    "Qualitat",
    "Web",
    "CMS",
    "Web",
    "Ecommerce"
];

$hores = [
    6, 
    4, 
    3, 
    5, 
    2, 
    4, 
    8, 
    3
];

$prioritats = [
    7,
    5,
    2,
    8,
    4,
    3,
    5,
    7
];

$totalProjectes = count($nomProjectes);
$totalHores = 0;
$prioritatAlta = 0;
$totalWeb = 0;

for ($i = 0; $i < $totalProjectes; $i++) {

    $totalHores = $totalHores + $hores[$i];

    if ($prioritats[$i] >= 7) {
        $prioritatAlta = $prioritatAlta + 1;
    }

    if ($tipusProjectes[$i] == "Web") {
        $totalWeb = $totalWeb + 1;
    }
}

?>

<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panell intern de projectes</title>

    <link rel="stylesheet" href="index.css">

</head>

<body>

    <header class="cap">

        <div class="logo">
            <div class="logo-icon"></div>

            <div>
                <h1>Panell intern de projectes</h1>
                <p>Agència digital - Gestió de projectes d'estudi</p>
            </div>
        </div>

        <nav>

            <a class="actiu" href="#">
                Inici
            </a>

            <a href="#">
                Projectes
            </a>

            <a href="#">
                Tecnologies
            </a>

            <a href="#">
                Sobre
            </a>

        </nav>

    </header>


    <main>


        <section class="estadistiques">

            <div class="estadistica blau">

                <div class="icona"></div>

                <div>
                    <strong><?php echo $totalProjectes; ?></strong>
                    <h3>Projectes</h3>
                    <p>Projectes registrats al panell</p>
                </div>

            </div>


            <div class="estadistica vermell">

                <div class="icona"></div>

                <div>
                    <strong><?php echo $prioritatAlta; ?></strong>
                    <h3>Prioritat alta</h3>
                    <p>Projectes amb prioritat alta</p>
                </div>

            </div>


            <div class="estadistica verd">

                <div class="icona"></div>

                <div>
                    <strong><?php echo $totalHores; ?> h</strong>
                    <h3>Hores estimades</h3>
                    <p>Suma total d'hores dels projectes</p>
                </div>

            </div>


            <div class="estadistica lila">

                <div class="icona"></div>

                <div>
                    <strong>6</strong>
                    <h3>Tecnologies</h3>
                    <p>Eines i tecnologies utilitzades</p>
                </div>

            </div>

        </section>



        <section class="titol-projectes">

            <div>

                <h2>Projectes actius</h2>

                <p>
                    Llista de projectes del curs.
                    Cada targeta mostra la informació principal i la seva prioritat.
                </p>

            </div>

            <select>
                <option value="opcion1">Ordenar per prioritat</option>
                <option value="opcion2">Opción 2</option>
            </select>

        </section>


    </main>

</body>

</html>