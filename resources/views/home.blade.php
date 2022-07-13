<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ url ('css/profilo_personale.css')}}">
</head>
<body>
<h1>Discover News</h1>
<section>
<h3>Benvenuto/a , {{ $nome }}</h3>
</section>
<nav>
      <a id="barra_in_alto" href="{{url('logout')}}">Logout</a> 
      <a id="barra_in_alto" href="{{url('preferiti')}}">Preferiti</a> 
</nav>
<img src="images/giornale.png" />

<h2>Scopri tutto quello che vuoi su:</h2>
<nav id="category">
    <a id="categorie" href="{{url('sport')}}">Sport</a>
    <a id="categorie" href="{{url('tecnology')}}">Tecnologia</a>
    <a id="categorie" href="{{url('scienza')}}">Scienza</a>
    <a id="categorie" href="{{url('business')}}">Business</a>
    <a id="categorie" href="{{url('health')}}">Health</a>
    <a id="categorie" href="{{url('general')}}">Notizie generali</a>
    <a id="categorie" href="{{url('entertainment')}}">Intrattenimento</a>
    <a id="categorie" href="{{url('bbc')}}">Principali titoli BBC News</a>


</nav>





</body>
</html>