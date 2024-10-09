<!DOCTYPE html>
<html
  class="wide wow-animation"
  lang="en"
>
  <head>
    <meta
      name="author"
      content="Luis Fernando Sanchez en colaboración con Codelium."
    />
    <meta
      name="description"
      content="CODELIUM es un equipo multidisciplinario especializado en desarrollo web, 
      inteligencia de negocios y análisis de datos. Ofrecemos soluciones personalizadas y 
      gestión de proyectos eficiente mediante metodologías ágiles."
    />
    <meta
      name="keywords"
      content="CODELIUM, desarrollo web, inteligencia de negocios, análisis de datos, programas personalizados, 
      aplicaciones personalizadas, metodologías ágiles, gestión de proyectos, equipo multidisciplinario."
    />

    <title>Isla de Pascua Rapanui</title>
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0"
    />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <link
      rel="icon"
      href="images/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900"
    />
    <link
      rel="stylesheet"
      href="css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="css/fonts.css"
    />
    <link
      rel="stylesheet"
      href="css/style.css"
    />
    <style>
      .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
      }
      html.ie-10 .ie-panel,
      html.lt-ie-10 .ie-panel {
        display: block;
      }
    </style>
  </head>
  <body>
    <!-- <div class="ie-panel">
      <a href="http://windows.microsoft.com/en-US/internet-explorer/"
        ><img
          src="images/ie8-panel/warning_bar_0000_us.jpg"
          height="42"
          width="820"
          alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."
      /></a>
    </div> -->
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <a
      class="section section-banner d-none d-xl-block"
      href="https://codelium.cl/"
      target="_blank"
      style="
        background-image: url(./images/background-02-1920x60.png);
        background-image: -webkit-image-set(
          url(./images/background-02-1920x60.png) 1x,
          url(./images/background-02-3840x120.png) 2x
        );
      "
      ><img
        src="images/foreground-02-1600x60.png"
        srcset="
          images/foreground-02-1600x60.png  1x,
          images/foreground-02-3200x120.png 2x
        "
        alt="image"
        class="img-fluid"
    /></a>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav
            class="rd-navbar rd-navbar-classic"
            data-layout="rd-navbar-fixed"
            data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-static"
            data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static"
            data-lg-stick-up-offset="46px"
            data-xl-stick-up-offset="46px"
            data-xxl-stick-up-offset="46px"
            data-lg-stick-up="true"
            data-xl-stick-up="true"
            data-xxl-stick-up="true"
          >
            <div
              class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
              data-rd-navbar-toggle=".rd-navbar-collapse"
            >
              <span></span>
            </div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
              <div class="rd-navbar-aside">
                <ul class="list-inline navbar-contact-list">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left">
                        <span class="icon text-middle fa-phone"></span>
                      </div>
                      <div class="unit-body">
                        <a
                          id="textColor"
                          href="tel:#"
                          >+56 9 8390 7880</a
                        >
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left">
                        <span class="icon text-middle fa-envelope"></span>
                      </div>
                      <div class="unit-body">
                        <a
                          id="textColor"
                          href="mailto:#"
                          >contacto@codelium.cl</a
                        >
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left">
                        <span class="icon text-middle fa-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a
                          id="textColor"
                          href="#"
                          >Chile, División: Rapa Nui - Región: Valparaiso</a
                        >
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="social-links">
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-linkedin"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram"
                      href="#"
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button
                    class="rd-navbar-toggle"
                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"
                  >
                    <span></span>
                  </button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a
                      class="brand"
                      href="index.html"
                      ><img
                        class="brand-logo-dark"
                        src="images/logo-default-200x34.png"
                        alt="Logo de Rapa Nui"
                        width="100"
                        height="17" /><img
                        class="brand-logo-light"
                        src="images/logo-inverse-200x34.png"
                        alt="image"
                        width="100"
                        height="17"
                    /></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active">
                        <a
                          class="rd-nav-link"
                          href="index.html"
                          >Inicio</a
                        >
                      </li>
                      <li class="rd-nav-item">
                        <a
                          class="rd-nav-link"
                          href="about.html"
                          >Acerca de Rapa Nui</a
                        >
                      </li>
                      <li class="rd-nav-item">
                        <a
                          class="rd-nav-link"
                          href="typography.html"
                          >Apoyo a Microempresarios</a
                        >
                      </li>
                      <li class="rd-nav-item">
                        <a
                          class="rd-nav-link"
                          href="contacts.html"
                          >Promociónate Aquí</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Main section-->
      <section
        class="section main-section parallax-scene-js"
        style="
          background: url('./images/bg-1-1700x803.png') no-repeat center center;
          background-size: cover;
        "
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-12">
              
                <h1
                  class="text-white text-xl-center wow slideInRight"
                  data-wow-delay=".3s"
                >
                  <span
                    class="align-top offset-top-30 d-inline-block font-weight-bold prefix-text"
                  >
                  </span>
                  <span
                    class="big font-weight-bold d-inline-flex offset-right-170"
                    >Isla de Pascua Chile</span
                  ><span class="big d-xl-flex"> </span>
                </h1>
              
            </div>
            <div
              class="col-12 text-center offset-top-75"
              data-wow-delay=".2s"
            >
              <a
                class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center"
                href="#"
                data-custom-scroll-to="about"
                ><span class="fa-chevron-down"></span
              ></a>
            </div>
          </div>
        </div>
<!--         
        <div class="decorate-layer">
          <div class="layer-1">
            <div
              class="layer"
              data-depth=".20"
            >
              <img
                src="images/parallax-item-1-563x532.png"
                alt="image"
                width="563"
                height="266"
              />
            </div>
          </div>
          <div class="layer-2">
            <div
              class="layer"
              data-depth=".30"
            >
              <img
                src="images/parallax-item-2-276x343.png"
                alt="image"
                width="276"
                height="171"
              />
            </div>
          </div>
          <div class="layer-3">
            <div
              class="layer"
              data-depth=".40"
            >
              <img
                src="images/parallax-item-3-153x144.png"
                alt="image"
                width="153"
                height="72"
              />
            </div>
          </div>
          <div class="layer-4">
            <div
              class="layer"
              data-depth=".20"
            >
              <img
                src="images/parallax-item-4-69x74.png"
                alt="image"
                width="69"
                height="37"
              />
            </div>
          </div>
          <div class="layer-5">
            <div
              class="layer"
              data-depth=".40"
            >
              <img
                src="images/parallax-item-5-72x75.png"
                alt="image"
                width="72"
                height="37"
              />
            </div>
          </div>
          <div class="layer-6">
            <div
              class="layer"
              data-depth=".30"
            >
              <img
                src="images/parallax-item-6-45x54.png"
                alt="image"
                width="45"
                height="27"
              />
            </div>
          </div>
        </div> -->
      </section>
      <!--About-->
      <section
        class="section section-sm position-relative"
        id="about"
      >
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-6">
              <div
                class="block-decorate-img wow fadeInLeft"
                data-wow-delay=".2s"
              >
                <img
                  src="./images/home-1-570x703.png"
                  alt="image"
                  width="570"
                  height="351"
                />
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="block-sm offset-top-45">
                <div
                  class="section-name wow fadeInRight"
                  data-wow-delay=".2s"
                ></div>
                <h3
                  class="wow fadeInLeft text-capitalize devider-bottom"
                  data-wow-delay=".3s"
                >
                  ¿Qué<span class="text-primary"> Ofrecemos?</span>
                </h3>
                <p
                  class="offset-xl-40 wow fadeInUp"
                  data-wow-delay=".4s"
                >
                  La Isla de Pascua, ubicada en el Pacífico Sur, es famosa por
                  sus misteriosas estatuas Moáis, que representan un legado
                  cultural único de la antigua civilización Rapa Nui. Es uno de
                  los principales destinos turísticos de Chile debido a su
                  naturaleza y la cultura ancestral de la etnia Rapanui, cuyo
                  más notable vestigio corresponde a enormes estatuas
                  antropomorfas conocidas como Moái. Para preservar dichas
                  características, el pueblo Rapanui administra desde 2016 el
                  parque nacional Rapa Nui a través de la Comunidad Indígena
                  Polinésica Ma'u Henua, mientras que la Unesco declaró este
                  parque como Patrimonio de la Humanidad en 1995. Tenemos una
                  gran variedad gastronómica, basada principalmente en productos
                  marinos. Dentro de los platos más comunes están las empanadas
                  fritas de atún, el Umu Rapa Nui o también conocido como
                  curanto pascuense.
                </p>
                <p
                  class="default-letter-spacing font-weight-bold text-gray-dark wow fadeInUp"
                  data-wow-delay=".4s"
                >
                  La Isla de Pascua es un legado ancestral fascinante. Además,
                  ofrece paisajes naturales únicos, con volcanes y playas
                  paradisíacas.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Footer-->
      <a
        class="section section-banner"
        href="https://codelium.cl/"
        target="_blank"
        ><img
          src="./images/foreground-01-3200x620.png"
          alt="image"
      /></a>
      <footer class="section footer-classic section-sm">
        <div class="container">
			<div id="map" style="width: 1050px; height: 600px;"></div>
			
          <div class="row row-30">
            <div class="col-lg-1 wow fadeInLeft"></div>
            <div class="col-lg-3 col-sm-8 wow fadeInUp">
              <p class="footer-classic-title">Información de Contacto</p>
              <div class="d-block offset-top-0">
                Chile<span class="d-lg-block"
                  >División: Rapa Nui - Valparaiso</span
                >
              </div>
              <a
                class="d-inline-block accent-link"
                href="mailto:#"
                >contacto@codelium.cl</a
              ><a
                class="d-inline-block"
                href="tel:#"
                >+56 9 8390 7880</a
              >
            </div>
            <div
              class="col-lg-2 col-sm-4 wow fadeInUp"
              data-wow-delay=".3s"
            >
              <p class="footer-classic-title">Links</p>
              <ul class="footer-classic-nav-list">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="about.html">Acerca de Rapa Nui</a></li>
                <li><a href="contacts.html">Promociónate Aquí</a></li>
              </ul>
            </div>
            <div
              class="col-lg-4 wow fadeInLeft"
              data-wow-delay=".2s"
            >
              <p class="footer-classic-title">¡Suscríbete!</p>
              <form
                class="rd-mailform text-left footer-classic-subscribe-form"
                data-form-output="form-output-global"
                data-form-type="contact"
                method="post"
                action="bat/rd-mailform.php"
              >
                <div class="form-wrap">
                  <label
                    class="form-label"
                    for="subscribe-email"
                    >Dirección correo electrónico</label
                  >
                  <input
                    class="form-input"
                    id="subscribe-email"
                    type="email"
                    name="email"
                    data-constraints="@Email @Required"
                  />
                </div>
                <div class="form-button group-sm text-center text-lg-left">
                  <button
                    class="button button-primary button-circle"
                    type="submit"
                  >
                    enviar
                  </button>
                </div>
              </form>
              <p>
                Entérate de nuestras últimas noticias, actualizaciones y ofertas
                especiales en la Isla de Pascua.
              </p>
            </div>
          </div>
        </div>
        <div
          class="container wow fadeInUp"
          data-wow-delay=".3s"
        >
          <div class="footer-classic-aside">
            <p class="rights">
              <span>&copy;&nbsp;</span><span class="copyright-year"></span>©
              Todos los derechos reservados. Desarrollado por
              <a
                class="nav-link d-inline fw-normal p-0"
                href="https://Codelium.cl/"
                target="_blank"
                rel="noopener"
              >
                <img
                  src="./images/logoverdehorizo_800px.png"
                  alt="Codelium"
                  style="width: 80px; height: 20px"
                />
              </a>
            </p>
            <ul class="social-links">
              <li>
                <a
                  class="fa fa-linkedin"
                  href="#"
                ></a>
              </li>
              <li>
                <a
                  class="fa fa fa-twitter"
                  href="#"
                ></a>
              </li>
              <li>
                <a
                  class="fa fa-facebook"
                  href="#"
                ></a>
              </li>
              <li>
                <a
                  class="fa fa-instagram"
                  href="#"
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <div
      class="snackbars"
      id="form-output-global"
    ></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by Drel-->
	<script>

	const map = L.map('map').setView([-27.07, -109.32], 13);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 12,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
	
	// Añadir el mapa base de OpenStreetMap
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
	var locations = [
			
            { coords: [-27.12, -109.29], text: "Rano Raraku" },
            { coords: [-27.13, -109.28], text: "Ahu Tongariki" },
            { coords: [-27.19, -109.44], text: "Rano Kau" },
			{ coords: [-27.07, -109.32], text: "Anakena" }
        ];
	// Crear un array para almacenar las coordenadas de los puntos
        var markers = [];

        // Añadir marcadores con popups
        locations.forEach(function(location) {
            var marker = L.marker(location.coords)
                .addTo(map)
				
                .bindPopup(location.text)
				.openPopup();
            
            // Añadir las coordenadas de cada marcador al array
            markers.push(location.coords);
        });

        // Ajustar el mapa para que muestre todos los puntos
        var bounds = L.latLngBounds(markers);  // Crear límites con los puntos
        map.fitBounds(bounds);                 // Centrar el mapa en esos límites
</script>  
  </body>
	
</html>
