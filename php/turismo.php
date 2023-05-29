<?php
require_once 'consultasTurismo.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Turismo</title>
  <link rel="icon" href="../assets/logo.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;400;700&display=swap" rel="stylesheet" />
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyv9qrgbuEmCZu5KD4qoPEeY-TYPmh-0Q&callback=initMap"
    defer></script>
  <link rel="stylesheet" href="../styles/map.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>


  <aside id="map-slider" class="map-slider">

    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>INSTRUCCIONES</h2>
        <hr>
        <br>
        <p>Es importante que conozcas cómo funciona nuestro sistema de recomendación. Para obtener un
          resultado desde tu perspectiva, deberás ponderar/valorar los factores que se encuentran en la barra
          lateral por orden de importancia en un rango de 0 a 10.</p>
        <br>
        <p>Ejemplo:</p>
        <br>
        <div class="variables">
          <div>
            <h3>Seguridad</h3>
          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>

        <p>A modo de ejemplo, el sistema cuenta con valores predeterminados, sin embargo, tienes la opción de
          definir tus propios valores.</p>
        <hr style="margin-top: 5px;">
        <button id="continue-btn">Entendido</button>
      </div>
    </div>

    <a href="https://srugeociit.azurewebsites.net/html/seccion.html">
      <button id="salir-btn" class="salir-btn">
        <svg viewBox="0 0 13 10" height="10px" width="15px">
          <path d="M1,5 L11,5"></path>
          <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
        <span>Salir</span>
      </button>
    </a>

    <a href="https://srugeociit.azurewebsites.net">
      <img id="navbar-logo" class="navbar-logo" src="../assets/logo.png" alt="Logo" />      
    </a>

    <hr class="slider-line" />

    <div class="slider-selectors">
      <h1 class="titulo-seccion">Turismo</h1>
      <h2>Consideraciones</h2>
      <p style="font-size: 18px;">
        Valore las consideraciones por orden de importancia donde 1 es la
        calificación más baja y 10 es la más alta.
      </p>


      <hr class="slider-line" />

      <div class="scroll">

        <br><br>

        <!--   Población   -->

        <div class="variables">
          <div>
          <h3 id="poblacion" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere a la cantidad total que existe de población dentro de cada municipio, al añadir esta variable aseguras que, al establecerte, te establecerás en un municipio con la mayor cantidad de habitantes. Con esto, tendremos la certeza de que tu inversión crecerá puesto que tu principal ingreso serán las personas que habiten dentro de este municipio.">
          Población</h3>

          <script>
          document.getElementById("poblacion").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la población:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion-1">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangePoblacion" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>

        
        <!--   Inversión   -->

        <div class="variables">
          <div>
          <h3 id="inversion" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere a la inversión que se ha realizado a este municipio en el ultimo año, al añadir esta variable aseguras que, al establecerte, te establecerás en un municipio con la mayor cantidad de inversión extranjera. Con esto, tendremos la certeza de que tu inversión estará en el lugar correcto puesto que los antecedentes de este municipio lo respaldan.">
          Inversión</h3>

          <script>
          document.getElementById("inversion").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la inversión:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion-2">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeInversion" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>



        <!--   Seguridad   -->

        <div class="variables">
          <div>
          <h3 id="seguridad" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere a la seguridad que existe dentro de cada municipio, al añadir esta variable aseguras que, al establecerte, te establecerás en un municipio seguro. Con esto, tendremos la certeza de que tu inversión tendrá crecimiento puesto que la seguridad es uno de los mayores influyentes en cuanto a la inversión se refiere.">
          Seguridad</h3>

          <script>
          document.getElementById("seguridad").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la seguridad:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeSeguridad" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>


        
        <!--   PIB   -->

        <div class="variables">
          <div>
          <h3 id="pbi" style="padding-right: 55px; cursor: pointer;" title="Esta consideración se refiere a el Producto Interno Bruto, esto significa el valor total de los bienes y servicios producidos por un municipio, al añadir esta variable aseguras que, te establecerás en un municipio con el valor mayor de bienes y servicios. Con esto, tendremos la certeza de que tu inversión estará en un municipio dentro del cual podrías tener un crecimiento.">
          PIB</h3>

          <script>
          document.getElementById("pbi").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre el PIB:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangePIB" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>



        <!--   Infraestructura   -->

        <div class="variables">
          <div>
          <h3 id="infraestructura" style="cursor: pointer;" title="Esta consideración se refiere a la cantidad de infraestructura de transporte con el que cada municipio cuenta, al añadir esta variable aseguras que, te establecerás en un municipio con la mayor cantidad de infraestructura en cuanto a transporte nos referimos. Con esto, tendremos la certeza de que tu inversión estará dentro de un municipio que tenga diferentes vías de comunicación lo cual atrae muchos más turistas puesto que esto les facilita la llegada a el municipio.">
          Infraestrucura</h3>

          <script>
          document.getElementById("infraestructura").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la infraestructura:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeInfraestructura" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>


        <!--   Obras Públicas   -->

        <div class="variables">
          <div>
          <h3 id="obrasPublicas" style="cursor: pointer;" title="Esta consideración se refiere a la cantidad de obras públicas realizadas dentro de cada municipio, al añadir esta variable aseguras que, te establecerás en un municipio con la mayor cantidad de obras realizadas por el gobierno. Con esto, tendremos la certeza de que tu inversión estará en un municipio que es tomado en cuenta por el gobierno y suele beneficiarse por este tipo de obras.">
          Obras Públicas</h3>

          <script>
          document.getElementById("obrasPublicas").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre las Obras Públicas:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeObrasPublicas" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>


        <!--   Rezago Social   -->

        <div class="variables">
          <div>
          <h3 id="rezagoSocial" style="cursor: pointer;" title="Esta consideración se refiere a la cantidad de rezago social que existe dentro de cada municipio, al añadir esta variable aseguras que, te establecerás dentro de un municipio con el menor rezago social. Con esto, tendremos la certeza de que tu inversión estará en un municipio con la menor cantidad de rezago social.">
          Rezago Social</h3>

          <script>
          document.getElementById("rezagoSocial").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre Rezago Social:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeRezagoSocial" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>



        <!--   Visitantes   -->

        <div class="variables">
          <div>
          <h3 id="visitantes" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere a la cantidad de visitantes que recibe cada municipio por año, al añadir esta variable aseguras que, te establecerás dentro de un municipio con la mayor cantidad de visitantes recibidos por año. Con esto, tendremos la certeza de que, al establecerte, te establecerás dentro de un municipio que recibe una buena cantidad de visitantes por año, lo cual es una ventaja puesto que el turismo que recibirás será una realidad desde que te establezcas.">
          Visitantes</h3>

          <script>
          document.getElementById("visitantes").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre Visitantes:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeVisitantes" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>




        <!--   Alojamiento   -->

        <div class="variables">
          <div>
          <h3 id="alojamiento" style="cursor: pointer;" title="Esta consideración se refiere a la cantidad de infraestructura de alojamiento que cada municipio tiene, al añadir esta variable aseguras que, te establecerás dentro de un municipio que cuenta con la mayor cantidad de infraestructura en cuanto a alojamiento se refiere. Con esto, tendremos la certeza de que el turismo que pueda recibir el municipio tendrá las instalaciones suficientes para abastecer este servicio.">
          Alojamiento</h3>

          <script>
          document.getElementById("alojamiento").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre Alojamiento:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeAlojamiento" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>

        

        <!--   Oferta Turística   -->

        <div class="variables">
          <div>
          <h3 id="ofertaTuristica" style="cursor: pointer;" title="Esta consideración se refiere a la cantidad de oferta turística que cada municipio puede ofrecer, al añadir esta variable aseguras que, te establecerás dentro de un municipio que cuenta con la mayor cantidad de oferta turística (Playas, Ríos, Arroyos, Parques, lugares emblemáticos). Con esto, tendremos la certeza de que el turismo que pueda recibir el municipio una variedad de lugares para disfrutar.">
          Oferta Turística</h3>

          <script>
          document.getElementById("ofertaTuristica").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la Oferta Turística:\n\n" + title;
            alert(alertMessage);
          });
          </script>

          </div>

          <div class="range">
            <div class="slideValue">
              <span class="ponderacion">5</span>
            </div>
            <div class="field">
              <div class="value left">0</div>
              <input id="rangeOfertaTuristica" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>
      </div>
      <a style="cursor: pointer;" class="select-btn" onclick="geoCalizar()">Enviar</a>
    </div>
  </aside>
  <button id="slider-btn" class="slider-btn">
    <input type="checkbox" id="btn-menu"
      onclick="toggleElementVisibilityAndWidth('salir-btn', 'navbar-logo', 'map-slider')">
    <label for="btn-menu" class="lbl-menu">
      <span id="spn1"></span>
      <span id="spn2"></span>
      <span id="spn3"></span>
    </label>
  </button>

  <div id="map"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

</body>

</html>

<script>

  // Slider rangos

  const slideValues = document.querySelectorAll('.slideValue span');
  const inputSliders = document.querySelectorAll('input[type="range"]');

  let ventanaInformacionAbierta = null;


  const updateSlideValue = (index) => {
    const value = inputSliders[index].value;
    slideValues[index].textContent = value;
    slideValues[index].style.left = (value / 10) * 100 + '%';
    slideValues[index].classList.add('show');
  };

  inputSliders.forEach((slider, index) => {
    slider.addEventListener('input', () => {
      updateSlideValue(index);
    });

    slider.addEventListener('blur', () => {
      slideValues[index].classList.remove('show');
    });
  });


  // Ventana Emergente

  // Obtener la ventana modal
  var modal = document.getElementById("myModal");

  // Obtener el botón que abre la ventana modal
  var btn = document.getElementById("myBtn");



  // Obtener el botón de cierre
  var span = document.getElementsByClassName("close")[0];

  // Cuando el usuario haga clic en el botón, abrir la ventana modal
  window.onload = function () {
    modal.style.display = "block";
  }

  // Cuando el usuario haga clic en el botón de cierre, cerrar la ventana modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  document.getElementById("continue-btn").onclick = function () {
    modal.style.display = "none";
  }

  // Cuando el usuario haga clic en el botón "Continuar", cerrar la ventana modal
  var continueBtn = document.getElementById

  //Iniciar Mapa

  let map;

  function initMap() {
    const mapElement = document.querySelector("#map");

    const mapOptions = {
      center: { lat: 18.090042, lng: -95.654058 },
      zoom: 7,
    };



    const directionRequest = {
      origin: "Salina Cruz, Oaxaca",
      destination: "Coatzacoalcos, Veracruz",
      travelMode: google.maps.TravelMode.DRIVING,
    };

    const validStatus = "OK";

    const markers = [
      {
        markerData: {
          position: { lat: 16.168776, lng: -95.198727 },
          map: map,
          title: "Salina Cruz",
        },
        infoWindow: {
          content:
            "<h3>Salina Cruz</h3><p>Punto de origen del corredor interoceánico</p>",
        },
      },
      {
        markerData: {
          position: { lat: 18.142986, lng: -94.479976 },
          map: map,
          title: "Coatzacoalcos",
        },
        infoWindow: {
          content:
            "<h3>Coatzacoalcos</h3><p>Punto de destino del corredor interoceánico</p>",
        },
      },
    ];

    map = new google.maps.Map(mapElement, mapOptions);

    const directionsRenderer = new google.maps.DirectionsRenderer();
    const directionsService = new google.maps.DirectionsService();

    directionsRenderer.setMap(map);
    directionsRenderer.setPanel(document.getElementById("directions-panel"));

    directionsService.route(directionRequest, (result, status) => {
      if (status === validStatus) {
        directionsRenderer.setDirections(result);
      }
    });

    markers.forEach(({ markerData, infoContent }) => {
      const marker = new google.maps.Marker(markerData);
      const infoWindow = new google.maps.InfoWindow(infoContent);
      marker.addListener("click", () => infoWindow.open(map, marker));
    });
  }




  //_______________________________________________



  // Valores de rangos

  function obtenerSumatoria() {
    var sumatoria =
        parseInt(document.getElementById('rangePoblacion').value)
      + parseInt(document.getElementById('rangeInversion').value)
      + parseInt(document.getElementById('rangeSeguridad').value)
      + parseInt(document.getElementById('rangePIB').value)
      + parseInt(document.getElementById('rangeInfraestructura').value)
      + parseInt(document.getElementById('rangeObrasPublicas').value)
      + parseInt(document.getElementById('rangeRezagoSocial').value)
      + parseInt(document.getElementById('rangeVisitantes').value)
      + parseInt(document.getElementById('rangeAlojamiento').value)
      + parseInt(document.getElementById('rangeOfertaTuristica').value);
    return sumatoria;
  }



  function rangoPoblacion() {
    var rangoPobla = document.getElementById('rangePoblacion');
    var poblacion = parseInt(rangoPobla.value);

    return (poblacion * 100) / obtenerSumatoria();
  }

  function rangoInversion() {
    var rangoInver = document.getElementById('rangeInversion');
    var inversion = parseInt(rangoInver.value);
    return (inversion * 100) / obtenerSumatoria();
  }

  function rangoSeguridad() {
    var rangoSegur = document.getElementById('rangeSeguridad');
    var seguridad = parseInt(rangoSegur.value);
    return (seguridad * 100) / obtenerSumatoria();
  }

  function rangoPIB() {
    var rangoPib = document.getElementById('rangePIB');
    var pbi = parseInt(rangoPib.value);
    return (pbi * 100) / obtenerSumatoria();
  }

  function rangoInfraestructura() {
    var rangoInfra = document.getElementById('rangeInfraestructura');
    var infraestructura = parseInt(rangoInfra.value);
    return (infraestructura * 100) / obtenerSumatoria();
  }

  function rangoObrasPublicas() {
    var rangoObrasPublic = document.getElementById('rangeObrasPublicas');
    var obrasPublicas = parseInt(rangoObrasPublic.value);

    return (obrasPublicas * 100) / obtenerSumatoria();
  }

  function rangoRezagoSocial() {
    var rangoRezagoSoci = document.getElementById('rangeRezagoSocial');
    var rezagoSocial = parseInt(rangoRezagoSoci.value);
    return (rezagoSocial * 100) / obtenerSumatoria();
  }

  function rangoVisitantes() {
    var rangoVisitan = document.getElementById('rangeVisitantes');
    var visitantes = parseInt(rangoVisitan.value);
    return (visitantes * 100) / obtenerSumatoria();
  }

  function rangoAlojamiento() {
    var rangoAloja = document.getElementById('rangeAlojamiento');
    var alojamiento = parseInt(rangoAloja.value);
    return (alojamiento * 100) / obtenerSumatoria();
  }

  function rangoOfertaTuristica() {
    var rangoOfertaTuris = document.getElementById('rangeOfertaTuristica');
    var ofertaTuristica = parseInt(rangoOfertaTuris.value);
    return ((ofertaTuristica * 100) / obtenerSumatoria())/2;
  }


  var marcadores = [];

  function geoCalizar() {
    enviarDatos();
  }

function enviarDatos() {
  var poblacion = rangoPoblacion();  
  var inversion = rangoInversion();
  var seguridad = rangoSeguridad();
  var pib = rangoPIB();
  var infraestructura = rangoInfraestructura();
  var obrasPublicas = rangoObrasPublicas();
  var rezagoSocial = rangoRezagoSocial();
  var visitantes = rangoVisitantes();
  var alojamiento = rangoAlojamiento();
  var ofertaTuristica = rangoOfertaTuristica();
  
  

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'consultasTurismo.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Aquí puedes manejar la respuesta del servidor si es necesario
      console.log(xhr.responseText);

      // Obtener los resultados de la consulta en PHP después de enviar los datos
      obtenerResultados();
    }
  };
  xhr.send(
    'poblacion=' + encodeURIComponent(poblacion) +
    '&inversion=' + encodeURIComponent(inversion) +
    '&seguridad=' + encodeURIComponent(seguridad) +
    '&pib=' + encodeURIComponent(pib) +
    '&infraestructura=' + encodeURIComponent(infraestructura) +
    '&obrasPublicas=' + encodeURIComponent(obrasPublicas) +
    '&rezagoSocial=' + encodeURIComponent(rezagoSocial) +
    '&visitantes=' + encodeURIComponent(visitantes) +
    '&alojamiento=' + encodeURIComponent(alojamiento) +
    '&ofertaTuristica=' + encodeURIComponent(ofertaTuristica)
  );

  //Funcion para quitar el contenedor de las consideraciones en pantallas moviles
  checkMobileScreenSize();
}


  var btnMenu = document.getElementById('btn-menu');

  function checkMobileScreenSize() {
    var mediaQuery = window.matchMedia('(max-width: 844px)');

    if (mediaQuery.matches) {
      // Simular el clic en el botón btn-menu
      btnMenu.click();
    }
  }


  function obtenerResultados() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'obtener_resultadosTurismo.php', true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        const resultados = JSON.parse(xhr.responseText);
        // Eliminar los marcadores existentes antes de mostrar los nuevos
        for (let i = 0; i < marcadores.length; i++) {
          marcadores[i].setMap(null);
        }
        marcadores = [];
        // Mostrar los marcadores en el mapa con los resultados actualizados        
        mostrarMarcadores(resultados);
      }
    };
    xhr.send();
  }
  

  function mostrarMarcadores(resultados) {

  const icono = {
    url: '../assets/map-icono.png',
    scaledSize: new google.maps.Size(55, 55),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(16, 32)
  };

  // Recorrer los resultados y generar los marcadores
  resultados.forEach((resultado) => {
    const lat = parseFloat(resultado['Coord_x']); // Obtener la latitud del resultado
    const lng = parseFloat(resultado['Coord_y']); // Obtener la longitud del resultado
    const municipio = resultado['Municipio']; // Obtener el municipio del resultado
    const poblacion = resultado['Poblacion']; // Obtener la población del resultado
    const inversion = resultado['Inversion']; // Obtener la inversión del resultado
    const seguridad = Number(resultado['Seguridad']); // Obtener la seguridad del resultado y convertirlo a número
    const pib = Number(resultado['PIB']); // Obtener el PIB del resultado y convertirlo a número
    const infraestructura = resultado['Infraestructura']; // Obtener la infraestructura del resultado
    const obrasPublicas = resultado['Obras']; // Obtener las obras públicas del resultado
    const rezagoSocial = resultado['Rezago']; // Obtener el rezago social del resultado
    const visitantes = resultado['Visitantes']; // Obtener el número de visitantes del resultado
    const alojamiento = resultado['Alojamiento']; // Obtener el número de alojamientos del resultado
    const ofertaTuristica = resultado['Turismo']; // Obtener la oferta turística del resultado



    const marker = new google.maps.Marker({
      position: { lat: lat, lng: lng },
      map: map,
      title: municipio,
      icon: icono
    });

    const infoWindow = new google.maps.InfoWindow();
    infoWindow.setContent(
    `
    <div>
    <br>
    <h2 style="font-size: 18px; font-weight: 700; color: #AA9863; text-align: center;">${municipio}</h2>
    </div>
    <br><hr><br>
    <h3 style="font-size: 15px; color: #AA9863;">Datos Geográficos:</h3>
    <br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Seguridad: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${seguridad.toFixed(1)} %</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Población: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${poblacion}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Inversión: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${inversion}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">PIB: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${pib.toFixed(1)}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Infraestructura: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${infraestructura}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Obras Públicas: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${obrasPublicas}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Rezago Social: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${rezagoSocial}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Número de Visitantes: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${visitantes}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Número de Alojamientos: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${alojamiento}</p>
    <br><br>
    <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Oferta Turística: </h3>
    <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${ofertaTuristica}</p>

    `
);


marker.addListener("click", () => {
      // Cerrar ventana de información anterior si existe
      if (ventanaInformacionAbierta) {
        ventanaInformacionAbierta.close();
      }

      infoWindow.open(map, marker);
      ventanaInformacionAbierta = infoWindow;
    });

    marcadores.push(marker);
  });
}


  // Mostrar los marcadores en el mapa inicialmente con resultados vacíos
  mostrarMarcadores([]);




  // Función para que al pulsar el boton de menú en movil, desaparezca al contenedor
  function toggleElementVisibilityAndWidth(...elementIds) {
    elementIds.forEach(elementId => {
      var element = document.getElementById(elementId);
      if (element.classList.contains("oculto")) {
        element.classList.remove("oculto");
      } else {
        element.classList.add("oculto");
      }
    });
  }

</script>