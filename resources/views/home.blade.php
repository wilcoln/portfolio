<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wilfried Bounsi | Developer</title>
    <!-- Icons  -->
    <link rel="stylesheet" href="css/linea-icons.css">
    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @include('inc.navbar')
    @include('inc.alerts')
    <main>
        @include('inc.header')

        @include('inc.about')

        @include('inc.skills')

        @include('inc.resume')
        
        <div class="section-separator"></div>

        @include('inc.portfolio')
    </main>
    
    @include('inc.footer')
    

    <script src="js/app.js"></script>
    <script>

        // Décalage du chargement du fond de l'élément main.
        setTimeout(function () {
            $("main").css('background',"url('images/design-miax.jpg')");
            $("main").css('background-attachment','fixed');
            $("main").css('background-size','cover');
        }, 500);

        // Navbr animation
        onscroll = function(){
            let nav = $("nav");
            let img = $("img");
            if(scrollY > 100){
                nav.css('background','#202020');
            }
            else{
                nav.css('background','rgba(0,0,0, 0.6)');
            }
        }
        //------------------------------------Training Begins Here ------------------------------------------//



        //------------------------------------Training Ends Here ------------------------------------------//
    </script>

</body>

</html>