<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('inicio.index')}}">Inicio</a></li>
        <li><a href="{{route('amigos.index')}}">Amigos</a></li>
        <li><a href="{{route('grupos.index')}}">Grupos</a></li>
        <li><a href="{{route('fotos.index')}}">Fotos</a></li>
        <li><a href="{{route('perfil.index')}}">Perfil</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>