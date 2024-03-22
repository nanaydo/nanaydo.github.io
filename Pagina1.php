<?php
// Incluir el archivo de validación de sesión
require_once 'validar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sangheili - Halo</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza tu archivo CSS externo -->
    <style>
        /* Estilos para el menú horizontal */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333; /* Color de fondo del menú */
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav li a:hover {
            background-color: #111; /* Color de fondo al pasar el mouse sobre el enlace */
        }
    </style>
</head>
<body>

<header>
    <h1>Sangheili - Halo</h1>
    <nav>
        <ul>
            <li><a href="pagina1.php">Página 1</a></li>
            <li><a href="pagina2.php">Página 2</a></li>
             <!-- Utilizar hasRole() para mostrar el botón de administrador -->
             <?php if (hasRole('admin')): ?>
                <li><a href="panel_admin.php">Panel de Administrador</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Introducción</h2>
    <img src="https://cdna.artstation.com/p/assets/images/images/019/107/858/large/lexington-dath-samurai-zealot-wide.jpg?1562054349" alt="Introducción Sangheili">
    <p>Los Sangheili, conocidos comúnmente como Elites, son una raza alienígena prominente en el universo de Halo. 
        Son una especie guerrera y honorable, conocida por su habilidad en el combate y su código de honor.</p>
        <h2>Fisiología</h2>
        <p>Los Sangheili son saurianos bípedos con altos y musculosos cuerpos. Sus cuerpos están completamente 
            cubiertos por escamas, con alargadas cabezas con cuatro mandíbulas llenas de filosos dientes. Los 
            Sangheili pueden separar sus mandíbulas pero tienden a mantenerlas cerradas, especialmente cuando 
            se comunican. Los Sangheili tienen largos y musculosos brazos que terminan en manos zigodáctilas 
            (Dos dedos adelante y dos atrás) con largos pero diestros dedos (dos pulgares y dos dedos índice).
             Sus piernas son digitígradas (que solo se apoyan en sus dedos) y bien adaptadas para correr largas
              distancias. Las mandíbulas de los Sangheili adultos se pueden encontrar en diferentes formas,
              tamaños y rangos de destreza y son tan distintivas como una huella digital.</p>
    <h2>Historia</h2>
    <p>Los Sangheili han jugado roles importantes en la historia de la guerra entre el Covenant y la humanidad en 
        la serie de juegos de Halo. Originalmente aliados con el Covenant, los Sangheili se volvieron contra sus 
        antiguos aliados cuando descubrieron la verdad detrás de los Anillos Halos y el Gran Viaje.</p>

    <h2>Cultura</h2>
    <p>La cultura Sangheili está profundamente arraigada en el honor y la tradición. Son conocidos por su habilidad 
       en el combate y su fuerte sentido del deber hacia su especie y su honor personal.</p>

    <h2>Armas y Tecnología</h2>
    <p>Los Sangheili son maestros en el uso de armas de energía y tecnología avanzada. Su armamento incluye rifles 
        de plasma, espadas de energía y una variedad de dispositivos tecnológicos.</p>

    <h2>Estructura de Rangos</h2>
    <img src="https://cdnb.artstation.com/p/assets/images/images/019/107/679/large/lexington-dath-lineuprenders.jpg?1562053274" alt="Introducción Sangheili">
    <p>El avance a través de las filas dependía del mérito individual y personal, generalmente medido en la cantidad 
        de muertes que uno había asegurado. Los Sangheili que alcanzaron los niveles más altos del servicio militar 
        pueden tener miles de muertes contra enemigos en combate cuerpo a cuerpo. Si bien este método fue ciertamente 
        eficaz para lograr que los guerreros más experimentados asumieran el liderazgo, también creó un vacío en las 
        estructuras de mando, dejando espacio para posibles vulnerabilidades dentro de su jerarquía general. 
        Los Sangheili mantuvieron la mayoría de estos valores marciales mucho antes de que se aliaran con los San'Shyuum, 
        pero la formación de Covenant finalmente proporcionó una vía directa para mantener y perfeccionar estas tradiciones 
        en grados aún mayores. </p>
    <p>Los Sangheili de alto rango demuestran habilidades excelentes en combate y notables habilidades tácticas; por 
        ejemplo un Sangheili Zealot personalmente ha asesinado a cientos de enemigos para conseguir su rango. Los privilegios
         de los altos rangos incluyen Escudos de Energía más fuertes, una mejor Armadura, y la habilidad para manejar Armas Especiales
         , tales como la Espada de Energía, un arma religiosa que es un indicador externo del estatus; sólo aquellos Sangheilis 
         llamados Aristócratas tienen derecho a usar ésta arma, una extremadamente poderosa arma de combate cuerpo a cuerpo. 
         El rango más bajo conocido es el de Menor, sirven como infantería básica o como líderes de escuadrón, generalmente de Unggoy o Kig-Yar.</p>

    <h2>Armaduras</h2>
    <p>Los Sangheili usan arneses de combate extremadamente avanzados y refinados, con una construcción impregnada de las ricas
         tradiciones de su pasado y bendecidos por San'Shyuum para uso sagrado en la búsqueda del Gran Viaje. La mayoría de las 
         armaduras Sangheili empleaban poderosos sistemas de escudos de energía y poseían una variedad de módulos y conectores 
         que aumentaban y maximizaban las habilidades individuales de cada guerrero. Aparte de las claras distinciones hechas 
         por autoridad o funciones prácticas, la armadura Sangheili difería cosméticamente de una flota a otra, existiendo como
         un reflejo del ministerio al que servían o la designación que se les dio al momento de la comisión. Hay un número casi
         ilimitado de variedades entre los guerreros del Covenant.</p>
</div>

<footer>
    <p>© 2024 Halo Fan Page. Todos los derechos reservados.</p>
</footer>

</body>
</html>
