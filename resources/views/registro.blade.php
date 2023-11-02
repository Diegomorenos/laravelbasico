@extends ('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body class="">
@section('content')
<form class="form form-control text-light container bg-secondary w-25 mt-5 p-3" method="POST" action="{{route('registro')}}">
@csrf  
<h1 class="text-center">Registro de Pais</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Código Pais</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>