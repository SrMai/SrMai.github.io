<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Fotos</title>
  </head>

  <body style="background-image: url(03.jpg); background-repeat: no-repeat; background-size: cover;">
    
    <h1 class="text-center display-4 my-4" style="color: white;">Galería de imágenes</h1>

    <div class="container">

      <div class="card-columns" id="galeria">

        <!-- <div class="card">
          <a href="#" data-toggle="modal" data-target="#exampleModal">
            <img src="img/1.jpg" alt="" class="card-img-top">
          </a>  
        </div>

        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          
          <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <img src="img/1.png" alt="" class="img-fluid rounded">
          </div>
        </div>
      </div> -->

    </div>

    <script>
      var imagenes = [1,2,3,4,5,6];
      var galeria = document.getElementById('galeria');
      
      for(imagen of imagenes){
        galeria.innerHTML += `
        <div class="card">
        <a href="#" data-toggle="modal" data-target="#id${imagen}">
          <img src="img/${imagen}.png" alt="" class="card-img-top">
        </a>  
        </div>

        <!-- Modal -->
        <div class="modal fade" id="id${imagen}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          
          <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <img src="img/${imagen}.png" alt="" class="img-fluid rounded">
          </div>
        </div>
        ` 
      }
      </script>
    
      <div style="text-align: center;">
        <a href="./index.php"><button type="button" class="btn btn-outline-light mb-2 mb-sm-0" data-toggle="modal" data-target="#regresar">Regresar</button></a>
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>