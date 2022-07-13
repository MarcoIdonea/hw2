
<html>
      <head> 

      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

      <link rel='stylesheet' href="{{ url('css/api.css') }} ?>">
        <script src="{{ asset('js/preferiti.js') }}" defer></script>
        <script type= "text/javascript"> const ciao = "{{ url('preferiti_view') }}/";</script>
        <script type= "text/javascript"> const URL1 = "{{ url('preferiti_delete') }}/";</script>
        <script type= "text/javascript"> const BASE = "{{ url('/') }}/";</script>
 
      </head> 
      <body> 
      <h1>Discover News</h1> 
      <h1>Ecco i tuoi articoli preferiti:</h1>
      <nav> 
      <a id="barra_in_alto" href="{{url('logout')}}">Logout</a>     
      <a id="barra_in_alto" href="{{url ('home')}}">Home</a> 
      </nav> 

      <article id="album-view">

</article>
</body>

</html>