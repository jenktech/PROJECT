<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets/asset0/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/asset0/vendor/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/asset0/css/style.css')}}">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{asset('assets/asset0/images/bloody2.jpg')}}" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{route('donor.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                   
                                    <input type="hidden" name="user_id" id="phone_number" value="{{Auth::user()->id}}" />
                                </div>
                                <div class="form-input">
                                   
                                    <input type="hidden" name="weight" id="phone_number" value="weight" value="weight"  />
                                </div>
                                <div class="form-input">
                                   
                                    <input type="hidden" name="blood_type" id="phone_number" value="blood_type"  value="blood type" />
                                </div>
                                <div class="form-input">
                                   
                                    <input type="hidden" name="blood_pressure" id="phone_number" value="blood pressure" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Company</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">address</label>
                                    <input type="text" name="address" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Location</label>
                                        
                                    </div>
                                    <div class="select-list">
                                        <select name="region" id="region">
                                            <option value="Kilimanjaro">Kilimanjaro</option>
                                            <option value="Hai">Hai</option>
                                            <option value="Sia">Sia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Gender</label>
                                        
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="male" checked value="Male">
                                            <label for="cash">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="cheque" value="Female">
                                            <label for="cheque">Female</label>
                                            <span class="check"></span>
                                        </div>
                                        
                                    </div>
                                  
                                </div>
                              
                                <div class="form-input">
                                    <label for="payable">Age</label>
                                    <input type="date" name="age" id="payable" />
                                </div>
                            </div>
                            
                        </div>
                        <div class="donate-us">
                            <label>Donate us</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div id="slider-margin"></div>
                                <span class="donate-value" id="value-lower"></span>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('assets/asset0/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/asset0/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/asset0/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('assets/asset0/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/asset0/vendor/jquery-validation/dist/additional-methods.min.js')}}"}}></script>
    <script src="{{asset('assets/asset0/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>