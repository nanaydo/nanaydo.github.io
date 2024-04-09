<?php
// Incluir el archivo de validación de sesión
require_once 'validar_sesion.php';

// Llamar a la función para validar la sesión
validarSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPARTAN - Halo</title>
    <link rel="stylesheet" href="styles.css">
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
    <h1>SPARTAN - Halo</h1>
    <nav>
        <ul>
            <li><a href="Pagina1.php">Página 1</a></li>
            <li><a href="Pagina2.php">Página 2</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Introducción</h2>
    <img src="https://i.redd.it/cfprkkat0uz31.jpg" alt="Introducción Sangheili">
    <p>Los Spartans o Programas SPARTAN son miembros de una serie de proyectos del Comando Espacial de las Naciones
       Unidas diseñados para crear supersoldados física, genética, tecnológica y mentalmente superiores como unidades de combate especiales .</p>
        <h2>Fondo</h2>
        <p>El concepto básico de los programas SPARTAN existe desde finales del siglo XXII, cuando se desarrollaron
         los primeros protocolos de bioingeniería para la Guerra Interplanetaria . [4] Desde el establecimiento de 
         estos protocolos, los humanos han estado utilizando equipos y aumentos para mejorar el rendimiento para
          hacerlos más fuertes y más rápidos de lo que antes era posible. Los espartanos han sido desplegados en 
          numerosas ocasiones durante los conflictos humanos, antes y durante la Guerra Human-Covenant . La idea 
          de crear supersoldados surgió por primera vez como un plan para convertir a los soldados humanos normales 
          en comandos de operaciones especiales poderosamente aumentados. Inicialmente, los tres programas separados 
          fueron los diversos intentos de la humanidad de crear los soldados perfectos para patrullar las colonias, 
          proteger a las poblaciones civiles y gubernamentales, aplastar los levantamientos en su infancia y garantizar 
          que otros no se levanten como resultado.</p>

    <h2>Historia</h2>
    <p>La génesis de los programas SPARTAN se produjo en el año 2321 con la activación del Proyecto ORION . Lanzado por
       la Oficina de Inteligencia Naval , el proyecto lleva el nombre del héroe mitológico griego Orión . El objetivo de
       ORION era aprovechar los protocolos de bioingeniería establecidos en 2164 y crear soldados más fuertes y mejores
       que cualquiera de los anteriores.</p>
      <p>Los inicios iniciales de ORION fueron simplemente una prueba para ver qué se podía lograr con los avances de esa 
        época, y los candidatos del proyecto ORION eran todos voluntarios de las fuerzas armadas militares; estos pocos 
        candidatos pasaron por numerosas pruebas y aumentos a lo largo de todo el mundo. la duración del proyecto. Sin 
        embargo, los resultados fueron mucho menores de lo esperado y, finalmente, los candidatos fueron colocados en la
        cadena de mando regular después de que el proyecto fuera declarado ineficaz y terminado.</p>

    <h2>El relanzamiento de ORION</h2>
    <img src="https://qph.cf2.quoracdn.net/main-qimg-125a21e5ee5d2432de4bd5c82ff93eb4-lq" alt="Introducción Sangheili">
    <p>En 2491 , la Autoridad Militar Colonial relanzó ORION en secreto, con el nuevo objetivo de aprender de los errores 
       del intento anterior y crear un soldado diferente a todo lo visto antes, y desplegar estos soldados detrás de las 
       líneas enemigas y sofocar las insurgencias en su infancia. o destruir las insurgencias establecidas destruyendo su 
       cadena de mando y expandiéndose hacia afuera.</p>
    <p>El proyecto tenía su sede en uno de los muchos muelles orbitales en el mundo fortaleza Reach , y los candidatos fueron,
         una vez más, voluntarios seleccionados de las Fuerzas Especiales del UNSC . Esta iteración del proyecto utilizó técnicas
         de adoctrinamiento y aumento biológico más avanzadas, y después de una agotadora serie de pruebas físicas y mentales,
         el primer grupo de soldados, 165 en total, pasó con éxito y pasó a la siguiente fase. En 2496, el CSNU lanzó la Operación:
        CARLOMAGO en respuesta a los secesionistas coloniales que ejecutaron una serie de ataques contra Eridanus II , que
        resultaron en numerosas muertes y secuestros de funcionarios civiles y gubernamentales en 2494 . Este marcó el primer
        despliegue operativo de los soldados de ORION, que obtuvieron una victoria decisiva y salieron de la batalla con una 
        sola baja. Los soldados de ORION pudieron completar la misión sin siquiera ser vistos , alimentando así una serie de 
        teorías de conspiración y especulaciones en los medios; Esto resultó ser muy útil para los esfuerzos propagandísticos 
        de la ONI en las próximas décadas. Aunque los soldados de ORION fueron efectivos, sus habilidades no cumplieron con las 
        esperanzas de los científicos, y su desarrollo y puesta en servicio costó demasiado: en 2506 el proyecto fue desactivado
        y los soldados fueron reasignados a varias unidades de operaciones especiales. </p>

        <h2>ESPARTANO-II</h2>
        <img src="https://i.ytimg.com/vi/9jYx1TdUu68/maxresdefault.jpg" alt="Introducción Sangheili">
        <p>En los años posteriores a la desactivación del Proyecto ORION en 2506, la Insurrección se volvió demasiado grande para 
        que el UNSC pudiera manejarla con pequeños equipos de Fuerzas Especiales. A medida que los ataques insurreccionistas se 
        volvían más efectivos y las respuestas militares más duras; La necesidad de campañas militares a gran escala se hacía cada 
        vez más necesaria. El programa SPARTAN-II fue concebido por la Dra. Catherine Halsey de la Sección 3 de la ONI, como el sucesor
        del proyecto ORION original y la mejor solución posible para poner fin al conflicto con los Insurreccionistas.</p>
        <p>Mientras que los antiguos Spartans eran voluntarios de las fuerzas armadas químicamente mejorados, los SPARTAN-II eran niños 
        pequeños que fueron secuestrados, adoctrinados y criados como soldados desde los seis años de edad, siendo mejorados quirúrgica,
        genética y cibernéticamente una vez que llegaron. Alcanzó la madurez física. Aunque se consideró tremendamente poco ético y lleno 
        de controversia, el programa secreto produjo resultados y, lo que es más importante, los soldados Spartan-II demostraron ser los 
        soldados más efectivos jamás desplegados por una fuerza armada humana y el arma más poderosa en la batalla contra la Insurrección. 
        Sin embargo, en 2525 , el repentino estallido de la Guerra Humano-Covenant resultó ser la guerra más desafiante y desalentadora jamás 
        librada por humanos, y los SPARTAN-II estaban equipados con MJOLNIR , la armadura mecanizada más avanzada de la historia de la humanidad.</p>
        <p>Mientras la guerra con el Covenant continuaba progresando y la Insurrección fue efectivamente cortada, los Spartan-II continuaron enfrentándose
        a facciones insurreccionistas que permanecían lo suficientemente fuertes como para representar una amenaza genuina para el CSNU. Los Spartan-II 
        continuaron realizando sus misiones casi sin problemas y mataron sin piedad a los líderes rebeldes mientras se enfrentaban a las fuerzas Covenant, 
        haciendo todo lo necesario para proteger los intereses del UNSC.</p>

        <h2>ESPARTANO-III</h2>
        <img src="https://halo.wiki.gallery/images/thumb/8/81/BetaC.png/1200px-BetaC.png" alt="Introducción Sangheili">
        <p>A medida que avanzaba la Guerra Humano-Covenant y las bajas aumentaban exponencialmente, la ONI activó otro programa que posiblemente era incluso
        más cuestionable moralmente que el programa SPARTAN-II. Encabezado por un destacado oponente al programa SPARTAN-II de Halsey, el coronel James 
        Ackerson , el programa SPARTAN-III se estableció utilizando el programa anterior como prueba de concepto.</p>

    <p>Diseñado para producir supersoldados más rápidamente, a menor costo y con una menor expectativa de vida, el programa SPARTAN-III estaba destinado 
    a operaciones de riesgo extremadamente alto realizadas al más alto nivel de secreto. Los candidatos de SPARTAN-III volvieron a ser niños; sin embargo, 
    en lugar de robar niños de sus camas, esta vez los "candidatos" fueron reclutados en orfanatos después de la pérdida de sus hogares y familias por la 
    invasión del Covenant, dándoles la oportunidad de contraatacar al Covenant. Los candidatos del S-III fueron llevados al planeta Onyx y estaban bajo el 
    liderazgo del teniente comandante del Spartan-II Kurt Ambrose . La mayoría de los Spartan-III estaban equipados con armadura de infiltración semipotenciada , 
    que es menos avanzada y más barata de producir en masa que los trajes MJOLNIR entregados a los Spartan-II. A lo largo de la Guerra Humano-Covenant, se 
    entrenaron y desplegaron tres compañías de Spartan-III, con tasas de bajas extremadamente altas. La primera compañía de S-III, la Compañía Alpha , logró
     destruir las fuerzas Covenant y rebeldes durante las batallas de Mamore , Nueva Constantinopla y en el cinturón de asteroides de Bonanza ; su última misión, 
     la Operación: PROMETHEUS en 2537 , se consideró un éxito, a pesar de que todas de los Spartans de la Compañía Alpha murieron en acción. La segunda compañía, 
     Beta , fue entrenada poco después de la pérdida de Alpha. En 2545 , la empresa participó en la Operación: TORPEDO , que también se consideró un éxito; sin 
     embargo, sólo dos Spartans, Tom-B292 y Lucy-B091 , sobrevivieron de los trescientos soldados que participaron en la operación. Tom y Lucy se convirtieron en 
     entrenadores de la tercera compañía de S-III, Gamma Company . La Compañía Gamma completó su aumento y la mayoría fueron desplegados en misiones en otros lugares 
     a finales de 2552, cuando se activó el Mundo Escudo en Onyx. [6] Una cuarta clase, la Compañía Delta , estaba programada para comenzar a entrenar alrededor de 
     finales de 2552, [7] hasta que el programa SPARTAN-III fue descontinuado después de la destrucción de Onyx y la creación del programa SPARTAN-IV . Después de 
     la guerra, a los Spartan-III supervivientes se les ofreció la oportunidad de integrarse en las incipientes Operaciones Spartan .</p>
     <p>También existían unidades más pequeñas y altamente especializadas compuestas por Spartan-III; Estos incluían a Headhunters y NOBLE Team . Estas unidades 
    estaban formadas por espartanos que eran considerados particularmente excepcionales entre sus pares, retirados de sus compañías principales y dotados de 
    equipo y armadura superiores. En particular, los miembros del equipo NOBLE recibieron conjuntos de armaduras MJOLNIR y tenían un Spartan-II como miembro permanente.</p>

     <h2>ESPARTANO-IV</h2>
     <img src="https://i0.wp.com/senpai.com.mx/wp-content/uploads/2021/11/Halo-Quien-es-el-Jefe-Maestro-compressed.jpg?fit=1280%2C720&ssl=1" alt="Introducción Sangheili">
     <p>Concebido por un "fracaso" de SPARTAN-II, el Comandante Musa-096 , el programa SPARTAN-IV se activó a principios de 2553 . Al igual que el Proyecto ORION original, 
        el programa SPARTAN-IV utiliza únicamente voluntarios adultos que dan su consentimiento, ya que el aumento de adultos ha sido posible gracias a los avances en las 
        tecnologías iniciadas por los programas Spartan anteriores. A diferencia de los SPARTAN-III principales, que se vieron obligados a utilizar equipos más baratos debido 
        a limitaciones presupuestarias, todos los Spartan-IV están equipados con armadura MJOLNIR, ahora producida en masa por varias empresas privadas. Los Spartan-IV sirven 
        en una rama de servicio dedicada del UNSC conocida como Operaciones Spartan , mientras que sus antepasados operaban dentro de otras cadenas de mando. A diferencia de 
        las otras ramas militares, los espartanos carecen por completo de una jerarquía de rango formal, y en su lugar emplean un marco más maleable basado en las habilidades 
        y especialización de un espartano individual.</p>

</div>

<footer>
    <p>© 2024 Halo Fan Page. Todos los derechos reservados.</p>
</footer>

</body>
</html>
