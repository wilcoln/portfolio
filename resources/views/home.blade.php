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
        }, 250);

       // Navbr and skills animation
onscroll = function () {
    let nav = $("nav");
    let img = $("img");
    if (scrollY > 100) {
        nav.css('animation', 'navAnime 1s 0s ease-out');
        nav.css('background', 'rgba(20,20,20, .8)');
        nav.css('border-bottom', '2px solid #2196F3');
        nav.css('box-shadow', '0 0.1rem 1rem rgba(0,0,0,.8)');
        nav.css('text-shadow', 'none');
    }
    else {
        nav.css('text-shadow', '0 .1rem 1rem rgba(0,0,0,.5)')
        nav.css('background', 'none');
        nav.css('animation', 'none');
        nav.css('border-bottom', 'none');
        nav.css('box-shadow', 'none');
    }
    if (scrollY > 1000) {
        $('.my-skills-verbose').css('animation', 'moveInRightSoft 1.5s 0s ease-out');
        $('.my-skills-progress').css('animation', 'moveInLeftSoft 1.5s 0s ease-out');
        $('.my-skills-verbose').css('visibility', 'visible');
        $('.my-skills-progress').css('visibility', 'visible');
    }
}
    </script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

</body>

</html>