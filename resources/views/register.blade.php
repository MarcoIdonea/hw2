<html>
    <head>
        <link rel='stylesheet' href="{{ url('css/accesso.css') }} ?>">
        <script src="{{ asset('js/validazione.js') }}" defer></script>
    </head>
    <body>
    @if($error == 'empty_fields')
<section class='error'>Compilare tutti i campi</section>
@elseif($error == 'bad_password')
<section class='error'>Le password non coincidono</section>
@elseif($error == 'existing')
<section class='error'>Email già utilizzata </section>
@elseif($error == 'small_password')
<section class='error'>La password deve contenere almeno 8 caratteri </section>
@endif
<main>
<img src="images/sfondo.png ">
    <div id='login' ></div>
    <form name='login' method='post'>
        @csrf
        <h1>Registrazione</h1>
        <p>
            <label><input id='nome' type='text' name='nome'placeholder=' nome' value='{{ old("nome") }}'></label>
            <div id='nome_er'></div>
        </p>
        <p>
            <label><input id='cognome' type='text' name='cognome'placeholder='cognome'value='{{ old("cognome") }}'></label>
            <div id='cognome_er'></div>
        </p>
        <p>
            <label> <input id='email' type='text' name='email'placeholder=' email'></label>
             <div id='email_er'></div>
        </p>
        <p>
         <label><input id='password' type='password' name='password'placeholder='password'></label>
         <div id="password_er"></div>
    </p>
    <p>
         <label> <input id='conferma_password' type='password' name='conferma_password'placeholder='conferma password'></label>
         <div id="conferma_password_er"></div>
        </p>
    <p>
         <label>&nbsp;<input type='submit'></label>
        </p>
    <p>
    hai gia' un account?<a href="{{ url ('login') }}">Accedi</a></p>
    
    </form>
        
</main>
    </body>
</html>