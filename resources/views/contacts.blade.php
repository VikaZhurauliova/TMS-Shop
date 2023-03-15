@extends('app')
@section('content')

    <!-- Content -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla
                        turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada
                        fermentum bibendum.</p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                        gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                        Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                    <div class="row m-t-40">
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</h4> (123) 456-7890
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo Office</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</h4> (123) 456-7890
                            </address>
                        </div>
                    </div>
                    <div class="social-icons m-t-30 social-icons-colored">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>
                        <!--    <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                            </div> -->
                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: CONTENT -->
@endsection
