@extends('layouts.main')

@section('title', 'reportar bug')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @foreach($formularios as $formulario)

    <div id="reportBug-create-container" class="col-md6 offset-md3"></div>
        <h2>Reporte Bug</h2>
        <div class="mb-3">
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Selecione o tipo de bug</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Visual
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Sonoro
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
      Físico
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
      Glitch
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-4">
      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5">
      Financeiro
    </label>
	</div>
  </div>
</div>

<!-- Appended Input-->
<div class="mb-3">
  <label for="formFileMultiple" class="form-label"></label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>

    </div>

  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descreva seu bug</label>
  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
    </div>
<input class="btn btn-primary" type="submit" value="Enviar">
</div>
  </div>
</fieldset>
</body>

    @endforeach

   <a href="/">voltar para home</a>

@endsection
