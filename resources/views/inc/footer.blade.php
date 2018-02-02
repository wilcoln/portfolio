<div id="contact-me">
    <footer class="footer">
            <div class="container pt-5">
                <div class="row">
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
                        <i class="text-danger">&hearts;</i> and
                        <i class="text-success">&curarr;</i>
                    </div>
                    <div class="col-12 text-center">
                        &copy; Copyright 2018 Wilfried Lincoln Bounsi Djatcheu &rarr; wilcoln
                    </div>
                </div>
            </div>
    </footer>
</div>