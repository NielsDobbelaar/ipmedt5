<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet"> 
    <title>Mailbox</title>
</head>
<body>
    <header><h1>Insert Title</h1></header>

    <main class="wrapper">
        <section class="UpperSection">
            <h2>MAIL</h2>
            @if($mailbox->mail_in_mailbox == true)
                <p class="GreenText">RECIEVED</p>
            @else
                <p class="RedText">EMPTY</p>
            @endif
        </section>

        <section class="UpperSection">
            <h2>KEY LOCK</h2>
            @if($mailbox->is_mailbox_open == true)
                <p class="GreenText">OPEN</p>
            @else
                <p class="RedText">LOCKED</p>
            @endif
            <button>Lock / Unlock</button>
        </section>

        <section class="LastSection">
            <h2>MAILBOX FREE SPACE</h2>
            <p>{{$mailbox->percentage_space_in_mailbox}}%</p>
            <progress value="{{$mailbox->percentage_space_in_mailbox}}" max="100"></progress>
        </section>
    </main>
</body>
</html>