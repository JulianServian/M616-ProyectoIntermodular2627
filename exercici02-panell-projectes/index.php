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
    3,
    4
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">

</head>

<body>

    <header class="cap">

        <div class="logo">
            <i class="logo-icon fa-solid fa-layer-group" aria-hidden="true"></i>

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

                <i class="icona fa-solid fa-folder-open" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $totalProjectes; ?></strong>
                    <h3>Projectes</h3>
                    <p>Projectes registrats al panell</p>
                </div>

            </div>


            <div class="estadistica vermell">

                <i class="icona fa-solid fa-triangle-exclamation" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $prioritatAlta; ?></strong>
                    <h3>Prioritat alta</h3>
                    <p>Projectes amb prioritat alta</p>
                </div>

            </div>


            <div class="estadistica verd">

                <i class="icona fa-solid fa-clock" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $totalHores; ?> h</strong>
                    <h3>Hores estimades</h3>
                    <p>Suma total d'hores dels projectes</p>
                </div>

            </div>


            <div class="estadistica lila">

                <i class="icona fa-solid fa-code" aria-hidden="true"></i>

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
                <option value="prioritat">Ordenar per prioritat</option>

            </select>

        </section>


        <section class="projectes">

            <?php

            for ($i = 0; $i < $totalProjectes; $i++) {

                $prioritat = $prioritats[$i];


                if ($prioritat >= 1 && $prioritat <= 3) {
                    $classificacio = "Baixa";
                    $classe = "baixa";
                } elseif ($prioritat >= 4 && $prioritat <= 6) {
                    $classificacio = "Mitjana";
                    $classe = "mitjana";
                } else {
                    $classificacio = "Alta";
                    $classe = "alta";
                }

                if (($i + 1) % 2 == 0) {

                    $parellSenar = "Parell";

                } else {

                    $parellSenar = "Senar";

                }

            ?>

                <article class="targeta">

                    <div class="part-superior">

                        <span class="numero">
                            #<?php echo $i + 1; ?>
                        </span>

                        <h3>
                            <?php echo $nomProjectes[$i]; ?>
                        </h3>

                        <span class="prioritat <?php echo $classe; ?>">
                            <?php echo $classificacio; ?>
                        </span>

                    </div>

                    <div class="informacio">

                        <p>
                            
                            <strong>Tipus:</strong>

                            <?php echo $tipusProjectes[$i]; ?>
                        </p>

                        <p class="descripcio">

                            <?php

                            if ($i == 0) {
                                echo "Landing page moderna i responsive.";
                            } elseif ($i == 1) {
                                echo "Catàleg de productes artesans.";
                            } elseif ($i == 2) {
                                echo "Blog amb notícies i articles.";
                            } elseif ($i == 3) {
                                echo "Revisió i millores de versió mòbil.";
                            } elseif ($i == 4) {
                                echo "Pàgina de servei amb formulari.";
                            } elseif ($i == 5) {
                                echo "Galeria filtrable de projectes.";
                            } elseif ($i == 6) {
                                echo "Connexió amb API externa.";
                            } else {
                                echo "Botiga amb productes i pagament.";
                            }

                            ?>

                        </p>

                    </div>


                    <div class="part-inferior">

                        <span>
                            <i class="icona fa-solid fa-clock" aria-hidden="true"></i>
                            <?php echo $hores[$i]; ?> h
                        </span>

                        <span class="prioritat-numero <?php echo $classe; ?>">
                            Prioritat: <?php echo $prioritat; ?>/10
                        </span>

                    </div>


                    <div class="parell">
                        <?php echo $parellSenar; ?>
                    </div>

                </article>

            <?php

            }

            ?>

        </section>

       <section class="inferior">

    <div class="resum">

        <h2>Resum automàtic</h2>

        <p>Estadístiques generals dels projectes</p>

        <div class="resum-dades">

            <div>
                <i class="icona fa-solid fa-folder-open" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $totalProjectes; ?></strong>
                    <p>Projectes totals</p>
                </div>
            </div>


            <div>
                <i class="resum-icon vermell-text fa-solid fa-triangle-exclamation" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $prioritatAlta; ?></strong>
                    <p>Prioritat alta</p>
                </div>
            </div>


            <div>
                <i class="resum-icon verd-text fa-solid fa-clock" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $totalHores; ?> h</strong>
                    <p>Hores totals</p>
                </div>
            </div>


            <div>
                <i class="resum-icon blau-text fa-solid fa-globe" aria-hidden="true"></i>

                <div>
                    <strong><?php echo $totalWeb; ?></strong>
                    <p>Projectes web</p>
                </div>
            </div>

        </div>

    </div>


    <div class="tecnologies">

        <h2>Tecnologies</h2>

        <p>Eines utilitzades en els projectes del curs</p>

        <div class="etiquetes">

            <span class="html">HTML</span>
            <span class="css">CSS</span>
            <span class="php">PHP</span>
            <span class="docker">Docker</span>
            <span class="wordpress">WordPress</span>
            <span class="shopify">Shopify</span>

        </div>

    </div>

</section>



    </main>

</body>

</html>