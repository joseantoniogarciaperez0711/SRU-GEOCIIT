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


// Slider rangos

const slideValues = document.querySelectorAll('.slideValue span');
const inputSliders = document.querySelectorAll('input[type="range"]');

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






//Buscador de cultivo

const wrapper = document.querySelector(".wrapper"),
    selectBtn = wrapper.querySelector(".select-btn-cbox"),
    searchInp = wrapper.querySelector("input"),
    options = wrapper.querySelector(".options");

    let x = "Agave, Ajonjoli, Arboles, Caf� cereza, cana de azucar, chile verde, copra, frijol, Hule hevea, Limon, Maiz grano, Mango, Melon, Mezquite, Naranja, Palma africana, Papaya, Pina, Sandia, Sorgo grano, Tabaco, Tomate rojo";
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

    if (selectedLi.innerText == "Aguacate") {
        aguacate(map);
    }

    if (selectedLi.innerText == "Frijol") {
        frijol(map);
    }

    if (selectedLi.innerText == "Maíz") {
        maiz(map);
    }

    if (selectedLi.innerText == "Limón") {
        limon(map);
    }
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
        : `<p style="margin-top: 10px;">No hay registros</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));