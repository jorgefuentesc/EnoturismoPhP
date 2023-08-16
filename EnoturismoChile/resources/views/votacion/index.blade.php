<!-- resources/views/home.blade.php -->
@extends('base')

@section('title', 'Título de la Página de Inicio')



@section('contenido')
    
<form id="envio_formulario">
  {% csrf_token %}
  <div id="contenedor-vinnas" name="contenedor-vinnas">

  </div>



  <!-- <div>

    <div class="row" style="margin: 7%">
      <div class="col-md-6">

        <h1 class="col-md-12 titulo_form ">Para enviar tu votación debes completar los siguientes datos</h1>
        <div style="text-align: center;">
          <img src="{{ asset('img/logo-votacion.PNG') }}" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card confirmation-form formulario-fondo col-md-12 col-lg-12">
          <div class="card-body">
            <h3 class="card-title titulo_encabezado_form">Ingresa tus datos</h3>
            <br>
            <div class="form-group ">
              <label class="titulo_input" for="documento">CI o Pasaporte:</label>
              <input type="text" class="form-control formulario-input " required oninput="checkRut(this)" id="documento"
                placeholder="XXXXXXXX-X" disabled>
              <label id="label-error" style="color: red;" hidden>Ingrese un run valido</label>
              <div id="radioGroup" style="margin-top: 4px;margin-top: 4px;
            padding-left: 2%;">
                <label for="run" style="color: #C1632F;"> Run: </label>
                <input type="radio" class="radio-input rd_color" name="inp_tipo_id" id="run" value="run">
                <label for="pasaporte" style="color: #C1632F;"> Pasaporte: </label>
                <input type="radio" class="radio-input rd_color" name="inp_tipo_id" id="pasaporte" value="pasaporte">
              </div>
            </div>
            <div class="form-group ">
              <label class="titulo_input" for="correo">Nombre:</label>
              <input type="text" class="form-control formulario-input" id="nombre" placeholder="ejemplonombre">

            </div>
            <div class="form-group ">
              <label class="titulo_input" for="correo">Correo Electrónico:</label>
              <input type="email" class="form-control formulario-input" id="correo" placeholder="ejemplo@correo">
            </div>
            <br>
            <div class="text-center ">
              <button class="btn-enviar" type="submit">
                <h4 style="letter-spacing: 0.75px;
                color: #F4C2A6;
                opacity: 1;">Enviar Votación</h4>
              </button><br>
              <label id="error_envio" style="color: red;" hidden>Ingrese un run valido</label>
            </div>
          </div>

        </div>
      </div>

    </div> -->
</form>


@endsection



@section('script')
<!-- <script>
  const radioGroup = document.getElementById('radioGroup');
  const radioButtons = radioGroup.querySelectorAll('.radio-input');
  radioButtons.forEach(radio => {
    radio.addEventListener('change', () => {
      const valorSeleccionado = radio.value;
      if (valorSeleccionado == 'run') {
        var documento_d = document.getElementById('documento');
        documento_d.removeAttribute('disabled');
        documento_d.value = "";
        documento.setAttribute('oninput', 'checkRut(this)');
      } else {
        const inputElement = document.getElementById('documento');
        inputElement.removeAttribute('oninput');
        inputElement.value = "";
        inputElement.removeAttribute('disabled');
      }
      console.log('Valor seleccionado:', valorSeleccionado);
    });
  });
</script> -->

<!-- <script>

  function checkRut(rut) {

      var valor = rut.value.replace('.', '');
      valor = valor.replace('-', '');
      cuerpo = valor.slice(0, -1);
      dv = valor.slice(-1).toUpperCase();
      rut.value = cuerpo + '-' + dv
      if (cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false; }
      suma = 0;
      multiplo = 2;
      for (i = 1; i <= cuerpo.length; i++) {
        index = multiplo * valor.charAt(cuerpo.length - i);

        suma = suma + index;
        if (multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

      }
      dvEsperado = 11 - (suma % 11);

      dv = (dv == 'K') ? 10 : dv;
      dv = (dv == 0) ? 11 : dv;

      if (dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }

      rut.setCustomValidity('');

  }
</script> -->

@endsection
