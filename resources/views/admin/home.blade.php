<div class="container">
    <h1>Questa è la tua Admin Homepage</h1>
    <p>Benvenuto {{ auth::user()->name }}</p>


    <p>Gestisci <a href="/posts">Post</a></p>
</div>
