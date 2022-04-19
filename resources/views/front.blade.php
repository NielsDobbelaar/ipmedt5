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
    <header><h1>Brievenbus</h1></header>

    <main class="wrapper">
        <section>
            <h2>Mailbox Status</h2>
            @if ( end($timestamp)[0][0] == 2 )
                <p class="RedText">Full</p>
            @elseif ( end($timestamp)[0][0] == 1 )
                <p class="OrangeText">Recieved</p>
            @else
                <p class="GreenText">Empty</p>
            @endif
        </section>

        <section class="TimeStampsWrapper">
            <h2>Timestamps</h2>
            <div class="TimeStamps">
                @foreach(array_reverse($timestamp) as $t)
                    @if ( $t[0] == 2 )
                        <p class="TimeStampsText">Mailbox full at {{end($t)}}</p>
                    @elseif ( $t[0] == 1 )
                        <p class="TimeStampsText">Received mail at {{end($t)}}</p>
                    @else
                        <p class="TimeStampsText">Mailbox emptied at {{end($t)}}</p>
                    @endif
                @endforeach
            </div>
            <a href="/empty" class="Button">CLEAR DB</a>
            <a href="/" class="Button">REFRESH PAGE</a>
        </section>
    </main>
</body>
</html>
