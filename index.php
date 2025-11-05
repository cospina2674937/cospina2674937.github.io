<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MTB de Pradera Pa' El Mundo 31KM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      overflow-x: hidden;
    }

    /* ----- CABECERA ----- */
header {
    background-color: #0013ea;
    color: white;
  
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between; /* logo izquierda, título derecha */
    flex-wrap: wrap;
}

.logo-container {
    flex: 0 0 auto;
}

.logo {
    height: 90px;
    width: auto;
    filter: drop-shadow(2px 2px 5px rgba(0,0,0,0.3));
}

.title-container {
    flex: 1;
    text-align: center;
}

.event-title {
    font-family: 'Orbitron', sans-serif;
    font-weight: 800;
    font-size: 2rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    line-height: 1.2;
    color: #ffffff;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
    margin: 0;
    animation: fadeInDown 1s ease;
}

.event-title .highlight {
    color: #00ffcc;
    font-size: 2.3rem;
}

.event-title .subtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 1.3rem;
    color: #dcdcdc;
    text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



    /* ----- BANNER ----- */
    .banner {
      width: 100%;
      height: 400px;
      background: url('bann2.jpg') center center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
      font-size: 28px;
      font-weight: bold;
    }

    /* ----- FORMULARIO ----- */
    .form-container {
      max-width: 900px;
      background-color: white;
      margin: 50px auto;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      animation: aparecer 0.6s ease-out;
    }

    @keyframes aparecer {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-container h2 {
      text-align: center;
      color: #0013ea;
      margin-bottom: 30px;
      font-size: 26px;
    }

    form {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px 25px;
    }

    .input-icon {
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .input-icon i {
      position: absolute;
      top: 38px;
      left: 12px;
      color: #0013ea;
      font-size: 16px;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
      color: #333;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px 12px 10px 38px;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 15px;
      transition: all 0.3s ease;
      box-sizing: border-box;
    }

    input:focus, select:focus, textarea:focus {
      border-color: #0013ea;
      box-shadow: 0 0 6px rgba(0, 19, 234, 0.3);
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
      grid-column: 1 / -1;
      padding-left: 12px;
    }

    button {
      grid-column: 1 / -1;
      background: linear-gradient(135deg, #0013ea, #2a52ff);
      color: white;
      padding: 12px 35px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      width: fit-content;
      margin: 20px auto 0;
      display: block;
    }

    button:hover {
      background: linear-gradient(135deg, #2a52ff, #0013ea);
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* ----- CICLISTA ----- */
    #ciclista {
      position: fixed;
      bottom: 0;
      right: 20px;
      width: 120px;
      animation: pedalear 0.8s infinite linear;
      z-index: 1000;
    }

    @keyframes pedalear {
      0%, 100% { transform: rotate(0deg); }
      50% { transform: rotate(2deg); }
    }

    @keyframes bajarMontana {
      0% { top: -150px; right: -120px; }
      50% { transform: translate(-50vw, 50vh) rotate(-5deg); }
      100% { bottom: 0; right: 20px; }
    }

    /* ----- FOOTER ----- */
    footer {
      background-color: #0013ea;
      color: white;
      text-align: center;
      padding: 20px;
      font-size: 14px;
      margin-top: 50px;
    }

    /* ----- RESPONSIVE ----- */
    @media (max-width: 768px) {
      header h1 {
        font-size: 22px;
        margin-right: 0;
        text-align: center;
      }
      header img {
        height: 55px;
      }
      .form-container {
        padding: 25px;
      }
      form {
        grid-template-columns: 1fr;
      }
      .banner {
        height: 200px;
        font-size: 22px;
      }
      #ciclista {
        width: 80px;
        right: 10px;
      }
    }
/* ----- SECCIÓN TÉRMINOS CON SCROLL ----- */
.terms-container {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  margin-top: 30px;
  font-size: 15px;
  color: #333;
  max-width: 900px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  grid-column: 1 / -1;
}

.terms-title {
  color: #0013ea;
  font-size: 18px;
  margin-bottom: 10px;
  text-transform: uppercase;
  font-weight: bold;
}

/* Scroll activo desde el inicio (no depende del tamaño de pantalla) */
.terms-scroll {
  max-height: 150px; /* controla la altura visible */
  overflow-y: scroll; /* fuerza el scroll siempre que haya texto */
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #f9f9f9;
  margin-bottom: 15px;
  scroll-behavior: smooth;
}

/* Barra de scroll personalizada */
.terms-scroll::-webkit-scrollbar {
  width: 8px;
}
.terms-scroll::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 8px;
}
.terms-scroll::-webkit-scrollbar-thumb {
  background: #0013ea;
  border-radius: 8px;
}
.terms-scroll::-webkit-scrollbar-thumb:hover {
  background: #5564eb;
}

/* Checkbox */
.checkbox-container {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.checkbox-container input[type="checkbox"] {
  width: 18px;
  height: 18px;
  accent-color: #0013ea;
  margin-top: 3px;
  flex-shrink: 0;
}

.checkbox-container label {
  line-height: 1.4;
  font-size: 15px;
  color: #333;
}

/* Responsive */
@media (max-width: 768px) {
  .terms-container {
    padding: 15px;
    font-size: 14px;
  }
  .terms-title {
    font-size: 16px;
  }
  .terms-scroll {
    max-height: 140px;
  }
  .checkbox-container label {
    font-size: 14px;
  }
}

.payment-section {
  background-color: #e8f0ff; /* azul muy claro */
  border: 1px solid #ccd4ff; /* borde sutil */
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  grid-column: 1 / -1; /* ocupa el ancho completo del formulario */
  box-shadow: 0 2px 8px rgba(0, 19, 234, 0.08);
  margin-top: 15px;
}

.payment-section h3 {
  color: #0013ea;
  margin-bottom: 10px;
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
}

.payment-section p {
  color: #333;
  margin: 5px 0;
}

.upload-box {
  margin-top: 15px;
  border: 1px dashed #5564eb;
  padding: 15px;
  border-radius: 10px;
  background-color: #ffffff;
  text-align: left;
}

.upload-box label {
  font-weight: 600;
  color: #0013ea;
  display: block;
  margin-bottom: 10px;
}

.upload-box input[type="file"] {
  border: none;
  background: #f0f2ff;
  padding: 8px;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

.upload-box small {
  display: block;
  margin-top: 8px;
  font-size: 13px;
  color: #444;
}

.payment-note {
  margin-top: 20px;
  background-color: #f9fbff;
  border-left: 4px solid #5564eb;
  padding: 10px;
  border-radius: 8px;
  font-size: 14px;
  color: #333;
}

@media (max-width: 768px) {
  .payment-section {
    padding: 15px;
    font-size: 14px;
  }
  .payment-section h3 {
    font-size: 18px;
  }
}





   





    
  </style>
</head>
<body>

  <!-- CABECERA -->
<header>
    <div class="header-container">
        <div class="logo-container">
            <img src="logo.png" alt="Logo MTB" class="logo">
        </div>
        <div class="title-container">
            <h1 class="event-title">
                <span class="highlight">MTB</span> de Pradera<br>
                <span class="subtitle">Pa' El Mundo <strong>31KM</strong></span>
            </h1>
        </div>
    </div>
</header>

  <!-- BANNER -->
  <div class="banner">
    
  </div>

  <!-- FORMULARIO -->
  <div class="form-container">
    <h2>Formulario de Inscripción</h2>
   <!--  <form action="guardar.php" method="post">-->
      <form action="procesar_formulario.php" method="POST">

      <div class="input-icon">
        <label>Nombre</label>
        <i class="fa-solid fa-user"></i>
        <input type="text" name="nombre" required>
      </div>

      <div class="input-icon">
        <label>Apellido</label>
        <i class="fa-solid fa-user-pen"></i>
        <input type="text" name="apellido" required>
      </div>

      <div class="input-icon">
        <label>Documento</label>
        <i class="fa-solid fa-id-card"></i>
        <input type="text" name="documento" required>
      </div>

      <div class="input-icon">
        <label>Edad</label>
        <i class="fa-solid fa-calendar"></i>
        <input type="number" name="edad" required>
      </div>

      <div class="input-icon">
        <label>Teléfono</label>
        <i class="fa-solid fa-phone"></i>
        <input type="text" name="telefono" required>
      </div>

      <div class="input-icon">
        <label>Correo</label>
        <i class="fa-solid fa-envelope"></i>
        <input type="email" name="correo" required>
      </div>

      <!--
      <div class="input-icon">
        <label>Categoría</label>
        <i class="fa-solid fa-medal"></i>
        <select name="categoria" required>
          <option value="">Seleccione...</option>
          <option value="elite">Élite</option>
          <option value="juvenil">Juvenil</option>
          <option value="recreativa">Recreativa</option>
        </select>
      </div>-->

       <div class="input-icon">
        <label>País</label>
        <i class="fa-solid fa-city"></i>
        <input type="text" name="pais" required>
      </div>
      <div class="input-icon">
        <label>Ciudad</label>
        <i class="fa-solid fa-city"></i>
        <input type="text" name="ciudad" required>
      </div>

       <div class="input-icon">
        <label>Direccion</label>
        <i class="fa-solid fa-city"></i>
        <input type="text" name="direccion" required>
      </div>

       <!-- NUEVO CAMPO: Tipo de Sangre -->
  <div class="input-icon">
    <label>Tipo de sangre:</label>
    <i class="fa-solid fa-droplet"></i>
    <select id="tipo_sangre" name="tipo_sangre" required>
      <option value="">Seleccione</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
  </div>

  <!-- NUEVO CAMPO: Contacto de emergencia -->
  <div class="input-icon">
    <label>Nombre de contacto de emergencia:</label>
     <i class="fa-solid fa-user"></i>
    <input type="text" name="contacto_nombre" required>
  </div>

  <div class="input-icon">
    <label>Teléfono de contacto de emergencia:</label>
     <i class="fa-solid fa-phone"></i>
    <input type="tel"  name="contacto_telefono" required>
  </div>
 <div class="payment-section">
  <h3><i class="fas fa-credit-card"></i> Información de Pago</h3>
  <p><strong>Valor de inscripción:</strong> $25.000 COP</p>
  <p><strong>Cuenta de ahorro Bancolombia:</strong> 86492477312</p>
  <p><strong>Cuenta Nequi:</strong> 3108554382</p>

  <div class="upload-box">
    <label for="comprobante"><i class="fas fa-upload"></i> Subir comprobante de pago:</label>
    <input type="file" id="comprobante" name="comprobante" accept=".jpg, .png, .pdf" required>
    <small>Formatos permitidos: JPG, PNG o PDF — Tamaño máximo 5MB</small>
  </div>

  <div class="payment-note">
    <p>📸 Envía tu comprobante de pago al número de WhatsApp 3104263982  o súbelo aquí para validar tu inscripción.</p>
  </div>
</div>


<!-- ----- TÉRMINOS Y CONDICIONES CON SCROLL ----- -->
<div class="terms-container" style="grid-column: 1 / -1;">
  <h3 class="terms-title">Términos y Condiciones</h3>
  <div class="terms-scroll">
    <p>Declaro que de forma voluntaria he decidido participar en el evento <strong>MTB de Pradera Pa’ El Mundo 31 KM</strong>, que se llevará a cabo en la fecha y recorrido que la organización determine. Afirmo que me encuentro en perfectas condiciones físicas, mentales y de salud, y que he realizado los exámenes médicos que considere necesarios para participar.</p>
    <p>Entiendo que debo acatar las indicaciones de la organización, de los árbitros, y cumplir los protocolos de seguridad vigentes. Reconozco que la organización podrá retirarme del evento si no cumplo con los puntos de control, tiempos establecidos o normas de seguridad.</p>
    <p>Asumo todos los riesgos derivados de la participación en este evento deportivo, incluyendo pero no limitado a: caídas, accidentes, enfermedades, condiciones climáticas, tránsito vehicular, vías públicas, robo o hurto de mis pertenencias. Libero a la organización, sus patrocinadores, autoridades locales y cualquier entidad vinculada al evento de toda responsabilidad por daños, pérdidas o reclamaciones.</p>
    <p>He leído detenidamente el reglamento del evento y acepto que la inscripción no es reembolsable. En caso de no poder participar, la organización podrá permitir el envío del kit a domicilio (gastos asumidos por el participante) o el traspaso del cupo a otra persona según políticas vigentes.</p>
    <p>Al marcar la casilla “Acepto” estoy manifiestamente aceptando estos términos y condiciones.</p>
  </div>
  <div class="checkbox-container">
    <input type="checkbox" id="terminos" name="terminos" required>
    <br>
    <label for="terminos">He leído y acepto los términos y condiciones del evento.</label>
  </div>
</div>




    

      <button type="submit"><i class="fa-solid fa-paper-plane"></i> Enviar Registro</button>
    </form>
  </div>

  <!-- CICLISTA -->
  <img id="ciclista" src="ciclista.png" alt="Ciclista">

  <!-- FOOTER -->
  <footer>
    © 2025 MTB de Pradera Pa' El Mundo — Todos los derechos reservados.
  </footer>

  <script>
    // Animación inicial del ciclista bajando la montaña
    const ciclista = document.getElementById('ciclista');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50 && !ciclista.classList.contains('bajando')) {
        ciclista.classList.add('bajando');
        ciclista.style.animation = 'bajarMontana 2.5s ease-in-out, pedalear 0.8s infinite linear 2.5s';
      }
    });
  </script>

</body>
</html>
