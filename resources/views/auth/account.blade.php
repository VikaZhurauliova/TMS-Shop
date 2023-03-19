@extends('app')
@section('content')
    <!-- Page Content -->
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Account details</span>
                            <p class="text-muted">You will receive an email notification to confirm this action in
                                order to completed changes.</p>
                        </div>
                        <div class="card-body">
                            <form id="form1" class="form-validate">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <div class="input-group show-hide-password">
                                            <input class="form-control" name="password" placeholder="Enter password" type="password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password2">Confirm Password</label>
                                        <div class="input-group show-hide-password">
                                            <input class="form-control" name="password2" placeholder="Enter password" type="password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="surname">Surname</label>
                                        <input type="text" class="form-control" name="surname" placeholder="Enter your Surname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" required>
                                            <option value="">Select your gender</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                            <option>Rather not say</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gender">Date of Birth</label>
                                        <input class="form-control" type="date" name="dateofbirth" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="telephone">Telephone</label>
                                        <input class="form-control" type="tel" name="telephone" placeholder="Enter your Telephone number" required>
                                    </div>
                                </div>
                                <div class="h5 mb-4">Mailing Address</div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter your Street Address" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address2">Address 2</label>
                                        <input type="text" class="form-control" name="address2" placeholder="Enter your Apartment, studio, or floor" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="Enter your City" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Zip Code:</label>
                                        <input type="number" class="form-control" name="zip" placeholder="Enter Zip Code" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="state">State</label>
                                        <select name="state" class="form-control" required>
                                            <option value="">Australia</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control" required>
                                            <option value="">United States</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-1 mt-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="reminders" id="reminders" class="custom-control-input" value="1" required>
                                        <label class="custom-control-label" for="reminders">Send me occasional
                                            reminders
                                            about these settings</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input" value="1" required>
                                        <label class="custom-control-label" for="terms_conditions">By checking
                                            this
                                            option, you agree to acceot with the <a href="#">Terms and
                                                Conditions</a>.</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn m-t-30 mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6 col-md-8">
                                    <span class="h4">Add new card</span>
                                    <p class="text-muted">Safe money transfer using your bank account. We support
                                        Mastercard, Visa, Paypa, American Express, Visa Electron and Maestro</p>
                                </div>
                                <div class="col-7 col-md-4 text-right">
                                    <img alt="Image placeholder" src="images/card-images.png" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Card number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" data-mask="0000 0000 0000 0000" placeholder="1234 5678 9101 1123">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="far fa-credit-card"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Name on card</label>
                                            <input type="text" class="form-control" placeholder="John Doe">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Expiry date</label>
                                            <input type="text" class="form-control" data-mask="00/00" placeholder="MM/YY">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">CVV code</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" data-mask="000" placeholder="746">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="far fa-question-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-sm">Update card</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic form</h5>
                            <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Textarea</label>
                                    <textarea class="form-control" placeholder="Textarea" rows="1" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label w-100">File input</label>
                                    <input type="file">
                                    <small class="form-text text-muted">Example block-level help text here.</small>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" required>
                                        <span class="custom-control-label">Check me out</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Horizontal form</h5>
                            <h6 class="card-subtitle text-muted">Horizontal Bootstrap layout.</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2 text-sm-right">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2 text-sm-right">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2 text-sm-right">Textarea</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Radios</label>
                                        <div class="col-sm-10">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input name="custom-radio-3" type="radio" class="custom-control-input" checked="">
                                                    <span class="custom-control-label">Default radio</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input name="custom-radio-3" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Second default radio</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input name="custom-radio-3" type="radio" class="custom-control-input" disabled="">
                                                    <span class="custom-control-label">Disabled radio</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Checkbox</label>
                                    <div class="col-sm-10">
                                        <label class="custom-control custom-checkbox m-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Check me out</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 ml-sm-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Form row</h5>
                            <h6 class="card-subtitle text-muted">Bootstrap column layout.</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Check me out</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Change your password</span>
                            <p class="text-muted">Change your account password</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Old password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">New password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Confirm password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="button" class="btn btn-sm">Update password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Profile</span>
                            <p class="text-muted">Change your account information</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabProfile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabBilling" role="tab" aria-controls="contact" aria-selected="false">Billing Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabPassword" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tabProfile" role="tabpanel" aria-labelledby="tab-profile">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="surname">Surname</label>
                                                    <input type="text" class="form-control" name="surname" placeholder="Enter your Surname" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Gender</label>
                                                    <select class="form-control" name="gender" required>
                                                        <option value="">Select your gender</option>
                                                        <option>Female</option>
                                                        <option>Male</option>
                                                        <option>Rather not say</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Date of Birth</label>
                                                    <input class="form-control" type="date" name="dateofbirth" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="telephone">Telephone</label>
                                                    <input class="form-control" type="tel" name="telephone" placeholder="Enter your Telephone number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabBilling" role="tabpanel" aria-labelledby="tab-billing">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Enter your Street Address" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address2">Address 2</label>
                                                    <input type="text" class="form-control" name="address2" placeholder="Enter your Apartment, studio, or floor" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="city">City</label>
                                                    <input type="text" class="form-control" name="city" placeholder="Enter your City" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Zip Code:</label>
                                                    <input type="number" class="form-control" name="zip" placeholder="Enter Zip Code" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">State</label>
                                                    <select name="state" class="form-control" required>
                                                        <option value="">Australia</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="country">Country</label>
                                                    <select name="country" class="form-control" required>
                                                        <option value="">United States</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabPassword" role="tabpanel" aria-labelledby="tab-password">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Old password</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">New password</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Confirm password</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="button" class="btn btn-sm">Save changes</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Contact</span>
                            <p class="text-muted">Get in touch with us</p>
                        </div>
                        <div class="card-body">
                            <form id="form2" class="form-validate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="txtName" class="form-control" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea name="txtMsg" class="form-control" placeholder="Your Message" style="width: 100%; min-height: 160px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-menu">
                        <ul>
                            <label>Elements</label>
                            <li>
                                <a href="shortcode-according.html">Accordions</a>
                            </li>
                            <li>
                                <a href="shortcode-alerts.html">Alerts</a>
                            </li>
                            <li><a href="shortcode-animations.html">Animations</a></li>
                            <li><a href="shortcode-avatar.html">Avatar</a></li>
                            <li>
                                <a href="shortcode-audio-video.html">Audio & Video</a>
                            </li>
                            <li>
                                <a href="shortcode-blockquotes.html">Blockquotes</a>
                            </li>
                            <li>
                                <a href="component-bootstrap-switch.html">BS
                                    Switch</a>
                            </li>
                            <li>
                                <a href="component-bootstrap-notify.html">BS
                                    Notify</a>
                            </li>
                            <li>
                                <a href="shortcode-breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li> <a href="shortcode-buttons.html">Buttons</a> </li>
                            <li><a href="shortcode-background-image.html">Background Image</a></li>
                            <li><a href="shortcode-background-overlays.html">Background Overlays</a></li>

                            <li> <a href="component-charts-chartjs.html">Charts</a> </li>
                            <li> <a href="component-calendar.html">Calendar</a></li>
                            <li><a href="shortcode-client-logo.html">Clients logos</a></li>
                            <li>
                                <a href="shortcode-calltoaction.html">Call
                                    to action</a>
                            </li>
                            <li>
                                <a href="shortcode-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="shortcode-code.html">Code</a>
                            </li>
                            <li>
                                <a href="shortcode-countdown-timer.html">Countdown Timers</a>
                            </li>
                            <li>
                                <a href="shortcode-countdown.html">Countdown</a>
                            </li>
                            <li><a href="shortcode-counters.html">Counter Numbers</a></li>
                            <li><a href="component-clipboard.html">Clipboard</a></li>
                            <li> <a href="component-datatable.html">Data Tables</a></li>
                            <li>
                                <a href="component-daterangepicker.html">Date
                                    & Time Pickers</a>
                            </li>

                            <li>
                                <a href="shortcode-dropcat-highlight.html">Dropcat & Highlight</a>
                            </li>
                            <li>
                                <a href="shortcode-dropdowns.html">Dropdown</a>
                            </li>
                            <li>
                                <a href="shortcode-team-members.html">Team members</a>
                            </li>
                            <li><a href="shortcode-forms.html">Form Controls</a></li>
                            <li><a href="shortcode-form-validation.html">Form Validation</a></li>
                            <li><a href="shortcode-form-layouts.html">Form Layouts</a></li>
                            <li><a href="shortcode-file-upload.html">File upload</a></li>
                            <li>
                                <a href="shortcode-grid.html">Grid System</a></li>
                            <li>
                                <a href="shortcode-heading-styles.html">Heading Styles</a>
                            </li>
                            <li>
                                <a href="shortcode-icon-boxes.html">Icon Boxes</a>
                            </li>
                            <li>
                                <a href="shortcode-icon-lists.html">Icons</a>
                            </li>
                            <li>
                                <a href="shortcode-images.html">Images</a>
                            </li>

                            <li>
                                <a href="shortcode-lightbox.html">Lightbox</a>
                            </li>
                            <li><a href="shortcode-lists.html">Lists</a></li>
                            <li><a href="shortcode-labels-badgets.html">Labels & Badges</a></li>
                            <li>
                                <a href="shortcode-maps.html">Maps</a>
                            </li>
                            <li>
                                <a href="shortcode-modal.html">Modal</a>
                            </li>
                            <li>
                                <a href="shortcode-modal-strip.html">Modal Strip</a>
                            </li>
                            <li>
                                <a href="shortcode-navs.html">Navbar & Navs</a>
                            </li>
                            <li>
                                <a href="shortcode-paginations.html">Pagination
                                    & Pager</a>
                            </li>
                            <li>
                                <a href="shortcode-panels.html">Panels</a>
                            </li>
                            <li> <a href="shortcode-pie-chart.html">Pie
                                    charts</a> </li>
                            <li> <a href="shortcode-popover.html">Popover</a> </li>
                            <li> <a href="shortcode-milestone-stats.html">Milestone & Stats</a> </li>

                            <li> <a href="shortcode-pricing-table.html">Pricing
                                    tables</a> </li>
                            <li>
                                <a href="shortcode-progress-bar.html">Progress bars</a>
                            </li>
                            <li>
                                <a href="shortcode-parallax.html">Parallax</a>
                            </li>
                            <li>
                                <a href="shortcode-particles.html">Particles</a>
                            </li>
                            <li>
                                <a href="shortcode-responsive-utilities.html">Responsive
                                    utilities</a>
                            </li>
                            <li>
                                <a href="component-ion-range-slider.html">Range
                                    Slider</a>
                            </li>
                            <li>
                                <a href="shortcode-sections.html">Sections</a>
                            </li>
                            <li>
                                <a href="shortcode-smooth-scrolling.html">Smooth
                                    Scrolling</a>
                            </li>
                            <li><a href="shortcode-social-icons.html">Social Icons</a></li>
                            <li><a href="shortcode-spinners.html">Spinners</a></li>
                            <li><a href="component-toggles-radio-checkboxes.html">Switch Toggle</a></li>
                            <li><a href="shortcode-shape-dividers.html">Shape Dividers</a></li>

                            <li><a href="shortcode-ratings.html">Ratings</a></li>
                            <li><a href="shortcode-tables.html">Tables</a></li>
                            <li>
                                <a href="shortcode-textbox.html">Text
                                    Boxes</a>
                            </li>
                            <li><a href="shortcode-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="shortcode-testimonial.html">Testimonials</a>
                            </li>
                            <li><a href="shortcode-toggles.html">Toggles</a></li>
                            <li><a href="shortcode-tooltips.html">Tooltips</a></li>
                            <li>
                                <a href="shortcode-typography.html">Typography</a>
                            </li>
                            <li><a href="shortcode-text-rotator.html">Text Rotator</a></li>
                            <li><a href="shortcode-timeline.html">Timeline</a></li>
                            <li><a href="shortcode-video-background.html">Video Background</a></li>
                            <li><a href="shortcode-wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Page Content -->
@endsection
