<div id="contact-me">
    <footer class="footer">
            <div class="container pt-5">
                <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="mb-5 d-block">Follow me</h1> <br/>
                    <div class="media-links">
                      <ul class="list-unstyled d-inline">
                            <li class="media-link media-link__twitter d-inline-block"><a href="https://twitter.com/wilcolnB"> <i class="fa fa-twitter"> </i></a></li>
                            <li class="media-link media-link__facebook d-inline-block"><a href="https://web.facebook.com/wilcolnB"> <i class="fa fa-facebook"> </i></a></li>
                            <li class=" media-link media-link__linkedin d-inline-block"><a href="https://www.linkedin.com/in/wilcoln"> <i class="fa fa-linkedin"> </i></a></li>
                          <li class="media-link media-link__github d-inline-block"><a href="https://www.github.com/wilcoln"> <i class="fa fa-github"> </i></a></li>
                      </ul>
                      <address class="row mt-5">
                        <p class="m-auto text-center">
                       <i class="fa fa-envelope"></i> &nbsp; contact@wilcoln.com<br><br>
                        <i class="fa fa-phone"></i> &nbsp;  (+33) 698 69 55 80<br><br>
                        <i class="fa fa-map-marker"></i> &nbsp;  France, Dijon
                            <br><br>
                        </p>
                        
                      </address>
                    </div>
                  </div>
                    <div class="col-md-6 ml-auto">
                        <div class="row text-center">
                            <div class="col">
                                <h1 class="px-5 pb-2 d-inline-block">Contact me</h1>
                            </div>
                        </div>
                        <form id="contact-form" class="form" action="/submit" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="message">Message
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success btn-lg" value="send">
                        </form>
                    </div>
                </div>
                <div class="row copyright text-muted">
                    <div class="col-12 text-center">
                        Made with
                        <i class="text-danger">&hearts;</i>
                    </div>
                    <div class="col-12 text-center">
                        &copy; Copyright 2019 wilcoln
                    </div>
                </div>
            </div>
    </footer>
</div>