<html>
<head>
    <title>Login</title>
    <link rel='stylesheet' href="{{url('css/accesso.css')}}">
</head>
<header>
    <h1>Accedi alla tua area personale</h1>
</header>
<body>

    @if($error == 'empty_fields')
    <section class='error'> Compilare tutti i campi</section>
    @elseif($error == 'wrong')
    <section class='error'> Account errato o non esistente</section>
    @endif

    

<main>
    <img src="images/sfondo.png ">
    <div id='login' ></div>
    <form name='login' method='post'>
        @csrf
        <h1>Login</h1>
    <p>
        <label> <input type='text' name='email' placeholder='Inserire email'value='{{ old("email") }}'></label>
    </p>
    <p>
         <label> <input type='password' name='password' placeholder='Inserire password'></label>
    </p>
    <p>
         <label>&nbsp;<input type='submit'></label>
        </p>
    <p class="registrati">
    Non hai ancora un account?<a href="{{url('register')}}">Registrati</a></p>
    
    </form>
</main>
</body>
</html>