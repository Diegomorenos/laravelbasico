@extends ('layouts.app')

@section('content')
<form class="form form-control text-light container bg-secondary w-25 mt-5 p-3" method="POST" action="{{ route('country.store') }}">
@csrf
<h1 class="text-center">Registro de Pais</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Código Pais</label>
    <input type="text" class="form-control" id="exampleInput1" name="codigo_pais">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInput2" name="nombre">
  </div>
  <!-- <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" class="form-control" name="" id="" placeholder="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-success">Submit</button>
</form>

<div class="accordion container col-4 mt-5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        ABREME
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        BOOOH!!!!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        MIRAME
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        BOOOH!!!!
      </div>
    </div>
  </div>
</div>
@endsection
