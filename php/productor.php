<?php
require_once 'consultas.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Productor</title>
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
            <h3>Producción</h3>
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
      <h1 class="titulo-seccion">Productor</h1>
      <h2>Consideraciones</h2>
      <p style="font-size: 18px;">
        Seleccione un tipo de cultivo y valore las consideraciones por orden de importancia donde 1 es la
        calificación más baja y 10 es la más alta.
      </p>


      <div class="variables" style="margin-bottom: 0px;">
        <div>
          <h3 >Cultivo</h3>
        </div>
        <div class="wrapper" style="margin-top: 0px;">
          <div class="select-btn-cbox">
            <span id="opcionCbox">Seleccionar</span>
            <i class="uil uil-angle-down"></i>
          </div>
          <div class="content">
            <div class="search">
              <i class="uil uil-search"></i>
              <input spellcheck="false" type="text" placeholder="Buscar">
            </div>
            <ul class="options"></ul>
          </div>
        </div>
      </div>


      <hr class="slider-line" />

      <div class="scroll">

        <br><br>

        <div class="variables">
          <div>
          <h3 id="produccion" style="cursor: pointer;" title="Esta consideración se refiere a la cantidad del cultivo producido en un municipio. Al añadir esta variable, aseguras establecerte en un municipio de donde suele salir la cantidad de producción del cultivo que te interesa. Con esto, tendremos la certeza de que tu producción se convertirá en una de las mayores en el mercado.">
          Producción</h3>

          <script>
          document.getElementById("produccion").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la producción:\n\n" + title;
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
              <input id="rangeProduccion" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>


        <div class="variables">
          <div>
          <h3 id="suelo" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere al tipo de suelo que existe sobre cada municipio. Al añadir esta variable, te aseguras de establecerte en un municipio que tiene el suelo más favorable para tu cultivo. Con esto, tendrás la certeza de que tu producción estará en las mejores manos (las suyas) y las mejores tierras.">
          Suelo</h3>

          <script>
          document.getElementById("suelo").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre el suelo:\n\n" + title;
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
              <input id="rangeSuelo" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>


        <div class="variables">
          <div>
          <h3 id="vegetacion" style="padding-right: 3px; cursor: pointer;" title="Esta consideración se refiere al tipo de vegetación que existe sobre cada municipio. Al añadir esta variable, aseguras establecerte en un municipio que tiene el tipo de vegetación más apto para tu cultivo. Con esto, tendremos la certeza de que tu producción crecerá en un ambiente favorable.">
          Vegetación</h3>

          <script>
          document.getElementById("vegetacion").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la vegetación:\n\n" + title;
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
              <input id="rangeVegetacion" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>

        <div class="variables">
          <div>
          <h3 id="clima" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere al tipo de clima que existen dentro del municipio. Al añadir esta variable, aseguras establecerte en un municipio que tiene el tipo de clima más favorable para tu cultivo. Con esto, tendremos la certeza de que tu producción crecerá en un clima favorable, y no tendrás problemas con ello.">
          Clima</h3>

          <script>
          document.getElementById("clima").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre el clima:\n\n" + title;
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
              <input id="rangeClima" type="range" min="0" max="10" value="5" step="1">
              <div class="value right">10</div>
            </div>
          </div>
        </div>


        <div class="variables">
          <div>
          <h3 id="lluvia" style="padding-right: 20px; cursor: pointer;" title="Esta consideración se refiere al nivel de lluvia mínimo y máximo que existe en el municipio. Al añadir esta variable, aseguras establecerte en un municipio que tiene los niveles de lluvia más favorables para tu cultivo. Con esto, tendremos la certeza de que tu producción no sufrirá de sequías o inundaciones.">
          Lluvia</h3>

          <script>
          document.getElementById("lluvia").addEventListener("click", function() {
            var title = this.getAttribute("title");
            var alertMessage = "Información sobre la lluvia:\n\n" + title;
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
              <input id="rangeLluvia" type="range" min="0" max="10" value="5" step="1">
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





  //Buscador de cultivo

  const wrapper = document.querySelector(".wrapper"),
    selectBtn = wrapper.querySelector(".select-btn-cbox"),
    searchInp = wrapper.querySelector("input"),
    options = wrapper.querySelector(".options");

  var nombresCultivos = "";
  nombresCultivos = JSON.parse('<?php echo json_encode($nombresCultivos);?>');

  let x = nombresCultivos;
  let siembra = x.split(", ");

  function addCountry(selectedCultivo) {
    options.innerHTML = "";
    siembra.forEach((country) => {
      let isSelected = country == selectedCultivo ? "selected" : "";
      let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
      options.insertAdjacentHTML("beforeend", li);
    });
  }
  addCountry();


  function updateName(selectedLi) {
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;

    /*if (selectedLi.innerText == "Agave") {
      alert("Agave");
    }*/
  }


  searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = siembra
      .filter((data) => {
        return data.toLowerCase().startsWith(searchWord);
      })
      .map((data) => {
        let isSelected =
          data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
      })
      .join("");
    options.innerHTML = arr
      ? arr
      : `<p style="margin-top: 10px; color=white;">No hay registros</p>`;
  });

  selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));

  //_______________________________________________



  // Valores de rangos

  function obtenerSumatoria() {
    var sumatoria = parseInt(document.getElementById('rangeProduccion').value)
      + parseInt(document.getElementById('rangeSuelo').value)
      + parseInt(document.getElementById('rangeVegetacion').value)
      + parseInt(document.getElementById('rangeClima').value)
      + parseInt(document.getElementById('rangeLluvia').value);
    return sumatoria;
  }

  function rangoProduccion() {
    var rangoProduc = document.getElementById('rangeProduccion');
    var produccion = parseInt(rangoProduc.value);

    return (produccion * 100) / obtenerSumatoria();
  }

  function rangoSuelo() {
    var rangoSue = document.getElementById('rangeSuelo');
    var suelo = parseInt(rangoSue.value);
    return (suelo * 100) / obtenerSumatoria();
  }

  function rangoVegetacion() {
    var rangoVeg = document.getElementById('rangeVegetacion');
    var vegetacion = parseInt(rangoVeg.value);
    return (vegetacion * 100) / obtenerSumatoria();
  }

  function rangoClima() {
    var rangoCli = document.getElementById('rangeClima');
    var clima = parseInt(rangoCli.value);
    return (clima * 100) / obtenerSumatoria();
  }

  function rangoLluvia() {
    var rangoLluv = document.getElementById('rangeLluvia');
    var lluvia = parseInt(rangoLluv.value);
    return ((lluvia * 100) / obtenerSumatoria())/2;
  }



  var marcadores = [];

  function geoCalizar() {
    enviarDatos();
  }

  function enviarDatos() {
    var box = document.getElementById('opcionCbox');
    if (box.innerText == 'Seleccionar') {
      alert('Por favor seleccione un cultivo');
    } else {
      var cultivo = box.innerText;
      var produccion = rangoProduccion();
      var suelo = rangoSuelo();
      var vegetacion = rangoVegetacion();
      var clima = rangoClima();
      var lluvia = rangoLluvia();

      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'consultas.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Aquí puedes manejar la respuesta del servidor si es necesario
          console.log(xhr.responseText);

          // Obtener los resultados de la consulta en PHP después de enviar los datos
          obtenerResultados();
        }
      };
      xhr.send('cultivo=' + encodeURIComponent(cultivo) +
        '&produccion=' + encodeURIComponent(produccion) +
        '&suelo=' + encodeURIComponent(suelo) +
        '&vegetacion=' + encodeURIComponent(vegetacion) +
        '&clima=' + encodeURIComponent(clima) +
        '&lluvia=' + encodeURIComponent(lluvia));

      //Funcion para quitar el contenedor de las consideraciones en pantallas moviles
      checkMobileScreenSize();
    }
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
    xhr.open('GET', 'obtener_resultados.php', true);
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
    const seguridad = Number(resultado['Seguridad']); // Obtener la seguridad del resultado y convertirlo a número
    const viasCumunicacion = resultado['ViasComunicacion']; // Obtener las vías de comunicación del resultado
    const suelo = resultado['Suelo']; // Obtener el municipio del resultado
    const vegetacion = resultado['Vegetacion']; // Obtener el municipio del resultado
    const lluviaMin = resultado['NivelesLluviaMin']; // Obtener el municipio del resultado
    const lluviaMax = resultado['NivelesLluviaMax']; // Obtener el municipio del resultado
    const clima = resultado['Clima']; // Obtener el municipio del resultado
    

    const marker = new google.maps.Marker({
      position: { lat: lat, lng: lng },
      map: map,
      title: municipio,
      icon: icono
    });

    const infoWindow = new google.maps.InfoWindow();
infoWindow.setContent(
  `<div>
  <br>
    <h2 style="font-size: 18px; font-weight: 700; color: #AA9863; text-align: center;">${municipio}</h2>
  </div>
  <br><hr><br>
  <h3 style="font-size: 15px; color: #AA9863;">Datos Geográficos:</h3>

  <br>

  <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Seguridad: </h3>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${seguridad.toFixed(1)} %</p>
  
  <br><br>
  
  <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Vías de Comunicación: </h3>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${viasCumunicacion}</p>
  
  <br><br>

  <h3 style="font-size: 15px; color: #AA9863;">Datos Ambientales:</h3>

  <br>

  <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Suelo: </h3>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${suelo}</p>

  <br><br>

  <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Vegetación: </h3>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${vegetacion}</p>

  <br><br>

  <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Niveles de Lluvia: </h3>
  <br><br>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">Mínima: ${lluviaMin}</p>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0; margin-left: 10px;">Máxima: ${lluviaMax}</p>

  <br><br>

  <h3 style="font-size: 13.5px; font-weight: 700; display: inline;">Clima: </h3>
  <p style="font-size: 13.5px; font-weight: normal; display: inline; margin: 0;">${clima}</p>

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