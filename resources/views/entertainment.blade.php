<html > 
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="{{ url('css/api.css')}}" rel="stylesheet"> 
<script src="{{url('js/pagina_personale.js')}}" defer="true"></script> 
<script type= "text/javascript"> const BASE_URL= "{{ url('entertainment_api')}}/";</script>
 
</head> 
<body> 
<h1>Discover News</h1> 
<h1>Ecco tutte le nuove notizie sull'intrattenimento:</h1>
<nav> 
      <a id="barra_in_alto" href="{{url('logout')}}">Logout</a>     
      <a id="barra_in_alto" href="{{url ('home')}}">Home</a> 
      <a id= "barra_in_alto" href="{{url ('preferiti')}}"> Preferiti</a>
</nav> 

<article id="album-view">

</article> 
 
</body> 
</html>