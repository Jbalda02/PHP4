    <html lang="en">
    <header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </header>
    <body>
        <h1>Anadir Producto Nuevo</h1>
    <form action="{{url('addProduct')}}" method="post" name="requested">
        @csrf
        Nombre: <input type="text" class="form-control" name="nombre" placeholder="nombre"><br>
        Descripcion: <input type="text" class="form-control" name="descripcion" placeholder="descripcion"><br>
        Precio: <input type="text" class="form-control" name="precio" placeholder="precio"><br>
        <button type="submit" class="btn btn-success btn-submit">Submit </button>
    </form>
        <a href="{{url('product')}}" class="text-center btn btn-primary" > Return </a>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </html>
