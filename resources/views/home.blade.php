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
        <section id="about-me">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1 class="px-5 pb-4 d-inline-block">About Me</h1>
                        <span class="heading-bottom"></span>
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-4">
                        <img class="img-fluid" src="img/me2.jpg" alt="Wilfried Bounsi">
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="row">
                            <div class="col">
                                <blockquote class="blockquote mb-5">
                                    <p class="blockquote about-me__text text-justify">
                                        "I am a computer software engineering student, serious, passionate and challenge lover !"
                                    </p>
                                    <footer class="blockquote-footer text-right"> Wilfried Bounsi</cite>
                                    </footer>
                                </blockquote>
                                <div class="row mt-4">
                                    <div class="col-sm-4 ml-auto">
                                        <button data-toggle="collapse" data-target="#more-about-me" class="btn btn-outline-success btn-block btn-lg">Learn more</button>
                                    </div>
                                </div>
                                <div id="more-about-me" class="collapse mt-4 mb-0">
                                    <div class="card">
                                        <div class="card-body">
                                           <div class="row align-items-center">
                                               <div class="col-2 text-center">
                                                    <i class="display-4 icon icon-basic-gunsight"></i>&nbsp;&nbsp;
                                               </div>
                                               <div class="col-10">
                                                    <p class="text-justify">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nobis dolorem vero earum ex, quae saepe totam ducimus, tempore,
                                                        dolores adipisci? Quibusdam iste maiores, magnam tenetur beatae ex aperiam culpa.
                                                    </p>
                                               </div>
                                           </div>
                                             <hr>
                                            <div class="row align-items-center">
                                                <div class="col-2 text-center">
                                                    <i class="display-4 icon icon-basic-world"></i>&nbsp;&nbsp;
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-justify">
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nobis dolorem vero earum ex, quae saepe totam ducimus, tempore,
                                                        dolores adipisci? Quibusdam iste maiores, magnam tenetur beatae ex aperiam culpa.
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row align-items-center">
                                                <div class="col-2 text-center">
                                                    <i class="display-4 icon icon-basic-display"></i>&nbsp;&nbsp;
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-justify">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nobis dolorem vero earum ex, quae saepe totam ducimus, tempore,
                                                        dolores adipisci? Quibusdam iste maiores, magnam tenetur beatae ex aperiam culpa.
                                                    </p>
                                                </div>
                                            </div>
                                            <hr> 
                                            <div class="row align-items-center">
                                                <div class="col-2 text-center">
                                                    <i class="display-4 icon icon-basic-heart"></i>&nbsp;&nbsp;
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-justify">
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nobis dolorem vero earum ex, quae saepe totam ducimus, tempore,
                                                        dolores adipisci? Quibusdam iste maiores, magnam tenetur beatae ex aperiam culpa.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="my-skills">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1 class="px-5 pb-4 d-inline-block">My Skills</h1>
                        <span class="heading-bottom"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <div class="row">
                            <p class="col text-justify">
                                Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam
                                dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum
                                dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando
                                cu est.
                            </p>
                        </div>
                        <div class="row my-5">
                            <div class="col-sm-6 m-auto">
                                <button class="btn btn-outline-primary btn-block btn-lg">contact me</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 px-5 my-skills-progress">
                        <h2>HTML/CSS</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%;">90%</div>
                        </div>
                        <h2>Javascript</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%;">80%</div>
                        </div>
                        <h2>PHP/MYSQL</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%;">80%</div>
                        </div>
                        <h2>Java</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%;">90%</div>
                        </div>
                        <h2>Android Development</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%;">70%</div>
                        </div>
                        <h2>Illustrator</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%;">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </section>
        <section id="my-resume">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1 class="px-5 pb-4 d-inline-block">My Resume</h1>
                        <span class="heading-bottom"></span>
                    </div>
                </div>
                <!-- Tmp content -->
                <div class="row d-flex align-items-center">
                    <div class="col-6 m-auto text-center">
                        <p class="tmp">Coming soon...</p>
                        <p>
                            But as a temporary solution you can instead take a look to my
                            <br/>
                            <a href="https://www.linkedin.com/in/wilcoln" target="_blank">LinkedIn Profile</a>
                        </p>

                    </div>
                </div>
                <!-- /Tmp content -->
            </div>
        </section>
        <div class="section-separator"></div>

        <section id="my-portfolio">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1 class="px-5 pb-4 d-inline-block">Portfolio</h1>
                        <span class="heading-bottom"></span>
                    </div>
                </div>
                <!-- Tmp content -->
                <div class="row d-flex align-items-center">
                    <div class="col-6 m-auto text-center">
                        <p class="tmp">Coming soon...</p>
                        <p>
                            But as a temporary solution you can instead take a look to my
                            <br/>
                            <a href="https://www.linkedin.com/in/wilcoln" target="_blank">LinkedIn Profile</a>
                        </p>

                    </div>
                </div>
                <!-- /Tmp content -->
            </div>
            <!-- Start Testimonial -->
            
            <!-- End Testimonial -->
        </section>
    </main>
    <div id="contact-me">
        @include('inc.footer')
    </div>

    <script src="js/app.js"></script>
    <script>

        // Décalage du chargement du fond de l'élément main.
        setTimeout(function () {
            document.querySelector("main").style.background = "url('img/design-miax.jpg')";
            document.querySelector("main").style.backgroundAttachment = "fixed";
            document.querySelector("main").style.backgroundSize = "cover";
        }, 1000);

        // Navbr animation
        onscroll = function(){
            let nav = document.querySelector("nav");
            let img = document.querySelector("img");
            if(scrollY > 100){
                nav.style.background = "#202020";
            }
            else{
                nav.style.background = "rgba(0,0,0, 0.6)"
            }
        }
        //------------------------------------Training Begins Here ------------------------------------------//



        //------------------------------------Training Ends Here ------------------------------------------//
    </script>

</body>

</html>