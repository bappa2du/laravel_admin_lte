<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>btcl</title>
    <base href="/">

    <!-- Bootstrap -->
    <link href="assets/web/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="assets/web/css/style.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="assets/web/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/web/css/jquery.signaturepad.css" rel="stylesheet">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="container">
    <div class="form_wrapper">
        <div class="row">
            <div class="col-md-12">
                <header class="text-center">
                    <img src="assets/web/images/logo.png" class="img-responsive center-block" alt="">
                    <h1>Bangladesh Telecommunications Company Limited</h1>
                    <p>DIGITAL DATA NETWORK ACCESS APPLICATION FORM</p>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-primary">
                    <h1 class="text-center">Edit Form</h1>
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form role="form" method="post" action="{{ action('AdminController@postUpdateApplication') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form_headding"><h3>REGISTRANT INFORMATION</h3></div>
                    <!-- <hr class="colorgraph"> -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Registrant Name *</label>
                            <div class="form-group">
                                <input type="text" name="REGISTRANT[name]" id="reg_name" class="form-control input-lg" placeholder="Name" value="{{$apps->name}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Address *</label>
                            <div class="form-group">
                                <input type="text" name="REGISTRANT[address]" id="address" class="form-control input-lg" placeholder="Address" value="{{$apps->address}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>City *</label>
                            <div class="form-group">
                                <input type="text" name="REGISTRANT[city]" id="city" class="form-control input-lg" placeholder="City" value="{{$apps->city}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Postal Code *</label>
                            <div class="form-group">
                                <input type="number" name="REGISTRANT[postal]" id="number" class="form-control input-lg" placeholder="Number" value="{{$apps->postal}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Email Address *</label>
                            <div class="form-group">
                                <input type="text" name="REGISTRANT[email]" id="email" class="form-control input-lg" placeholder="Email" value="{{$apps->email}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Phone *</label>
                            <div class="form-group">
                                <input type="number" name="REGISTRANT[phone]" id="number" class="form-control input-lg" placeholder="Phone No" value="{{$apps->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <label>Fax *</label>
                            <div class="form-group">
                                <input type="text" name="REGISTRANT[fax]" id="fax" class="form-control input-lg" placeholder="Fax" value="{{$apps->fax}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <label>Registrant Category</label>
                            <select id="subject" name="REGISTRANT[category]" class="form-control input-lg">
                                <option value="" selected>Choose One:</option>
                                <option value="service" {{$apps->category=='service'?'selected':''}}>Educational</option>
                                <option value="govt" {{$apps->category=='govt'?'selected':''}}>Government</option>
                                <option value="industrial" {{$apps->category=='industrial'?'selected':''}}>Industrial</option>
                                <option value="isp" {{$apps->category=='isp'?'selected':''}}>ISP</option>
                                <option value="international" {{$apps->category=='international'?'selected':''}}>International Org.</option>
                                <option value="foreign" {{$apps->category=='foreign'?'selected':''}}>Foreign Org.</option>
                                <option value="others" {{$apps->category=='others'?'selected':''}}>Others.</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <label>Registrant Status</label>
                            <select id="subject" name="REGISTRANT[status]" class="form-control input-lg">
                                <option value="" selected="">Choose One:</option>
                                <option value="service">Government</option>
                                <option value="autonomous">Autonomous</option>
                                <option value="private">Private</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <label>Connection Type</label>
                            <select id="subject" name="REGISTRANT[connection_type]" class="form-control input-lg">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">Permanent</option>
                                <option value="suggestions">Temporary</option>
                                <option value="product">Others.</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <label style="margin-top:20px;">Connection Eligible for Discount
                                <input type="radio" name="REGISTRANT[is_eligible]" value="1" checked> Yes
                                <input type="radio" name="REGISTRANT[is_eligible]" value="0"> No
                            </label>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <span class="button-checkbox">
                                <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                            </span>
                        </div>
                    </div>
                <hr class="colorgraph"> -->
                    <div class="form_headding"><h3>CONTACT INFORMATION</h3></div>
                    <h3>[A] Administrative Contact</h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Full Name *</label>
                            <div class="form-group">
                                <input type="text" name="Administrative[full_name]" id="full_name" class="form-control input-lg" placeholder="Full Name" value="{{$admin->full_name}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Title/Occupation *</label>
                            <div class="form-group">
                                <input type="text" name="Administrative[title]" id="title" class="form-control input-lg" placeholder="" value="{{$admin->title}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Organisation (if applicable) *</label>
                            <div class="form-group">
                                <input type="text" name="Administrative[subject]" id="subject" class="form-control input-lg" placeholder="" value="{{$admin->subject}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Address *</label>
                            <div class="form-group">
                                <input type="text" name="Administrative[address]" id="address" class="form-control input-lg" placeholder="" value="{{$admin->address}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>City *</label>
                            <div class="form-group">
                                <input type="text" name="Administrative[city]" id="city" class="form-control input-lg" placeholder="" value="{{$admin->city}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Post Code *</label>
                            <div class="form-group">
                                <input type="number" name="Administrative[number]" id="number" class="form-control input-lg" placeholder="" value="{{$admin->number}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Email Address *</label>
                            <div class="form-group">
                                <input type="text" name="Administrative[email]" id="email" class="form-control input-lg" placeholder="" value="{{$admin->email}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Phone *</label>
                            <div class="form-group">
                                <input type="number" name="Administrative[number]" id="number" class="form-control input-lg" placeholder="" value="{{$admin->email}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Fax *</label>
                            <div class="form-group">
                                <input type="fax" name="Administrative[fax]" id="fax" class="form-control input-lg" placeholder="" value="{{$admin->fax}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div method="post" action="" class="sigPad">
                                <label>Signature *</label>
                                <ul class="sigNav">
                                    <li class="drawIt"><a href="#draw-it" >Draw It</a></li>
                                    <li class="clearButton"><a href="#clear">Clear</a></li>
                                </ul>
                                <div class="sig sigWrapper">
                                    <div class="typed"></div>
                                    <canvas class="pad" width="198" height="55"></canvas>
                                    <input type="hidden" name="Administrative[signature]" class="output" value="{{$admin->signature}}">
                                </div>
                                <!-- <button type="submit">I accept the terms of this agreement.</button> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Date *</label>
                            <div class="form-group">
                                <input type="date" name="Administrative[date]" id="date" class="form-control input-lg" placeholder="" value="{{$admin->date}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Choose image *</label>
                            <div class="form-group">
                                <input id="file-input" type="file" name="image1" />
                            </div>
                        </div>
                    </div>


                    <h3>[B] Technical Contact</h3>
                    <p>If this information is the same as the Administrative Contact information, you may keep it
                        blank. Otherwise, please complete this section with the appropriate information.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Full Name *</label>
                            <div class="form-group">
                                <input type="text" name="Technical[full_name]" id="full_name" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Title/Occupation *</label>
                            <div class="form-group">
                                <input type="text" name="Technical[title]" id="title" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Organisation (if applicable) *</label>
                            <div class="form-group">
                                <input type="text" name="Technical[subject]" id="subject" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Address *</label>
                            <div class="form-group">
                                <input type="text" name="Technical[address]" id="address" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>City *</label>
                            <div class="form-group">
                                <input type="text" name="Technical[city]" id="city" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Post Code *</label>
                            <div class="form-group">
                                <input type="number" name="Technical[number]" id="number" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Email Address *</label>
                            <div class="form-group">
                                <input type="text" name="Technical[email]" id="email" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Phone *</label>
                            <div class="form-group">
                                <input type="number" name="Technical[phone]" id="number" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Fax *</label>
                            <div class="form-group">
                                <input type="fax" name="Technical[fax]" id="fax" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div method="post" action="" class="sigPad">
                                <label>Signature *</label>
                                <ul class="sigNav">
                                    <li class="drawIt"><a href="#draw-it" >Draw It</a></li>
                                    <li class="clearButton"><a href="#clear">Clear</a></li>
                                </ul>
                                <div class="sig sigWrapper">
                                    <div class="typed"></div>
                                    <canvas class="pad" width="198" height="55"></canvas>
                                    <input type="hidden" name="Technical[signature]" class="output">
                                </div>
                                <!-- <button type="submit">I accept the terms of this agreement.</button> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Date *</label>
                            <div class="form-group">
                                <input type="date" name="Technical[date]" id="date" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Choose image *</label>
                            <div class="form-group">
                                <input id="file-input" type="file" name="image2" />
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form_headding"><h3>TECHNICAL INFORMATION</h3></div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Desired Speed of connection</label>
                            <select id="subject" name="Technical[speed]" class="form-control input-lg">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">KBPA</option>
                                <option value="suggestions">MBPS</option>
                                <option value="product">GB</option>
                                <option value="product">Others</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Desired Speed of connection</label>
                            <div class="form-group">
                                <input type="text" name="Technical[local1]" id="address" class="form-control input-lg" placeholder="(A) Local End">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label></label>
                            <div class="form-group">
                                <input type="text" name="Technical[remote1]" id="address" class="form-control input-lg" placeholder="(B) Remote End">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Description of End Equipment</label>
                            <div class="form-group">
                                <input type="text" name="Technical[local2]" id="address" class="form-control input-lg" placeholder="(B) Remote End">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label></label>
                            <div class="form-group">
                                <input type="text" name="Technical[remote2]" id="address" class="form-control input-lg" placeholder="(B) Remote End">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Purpose of Connectivity</label>
                            <div class="form-group">
                                <input type="text" name="Technical[purpose]" id="address" class="form-control input-lg" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form_headding"><h3>FOR OFFICIAL USE ONLY</h3></div>

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Registration Number</label>
                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Registration Number" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Date</label>
                            <div class="form-group">
                                <input type="date" name="date" id="date" class="form-control input-lg" placeholder="Date" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div method="post" action="" class="sigPad">
                                <label>Signature *</label>
                                <ul class="sigNav">
                                    <li class="drawIt"><a href="#draw-it" >Draw It</a></li>
                                    <li class="clearButton"><a href="#clear">Clear</a></li>
                                </ul>
                                <div class="sig sigWrapper">
                                    <div class="typed"></div>
                                    <canvas class="pad" width="198" height="55"></canvas>
                                    <input type="hidden" name="output" class="output" >
                                </div>
                                <!-- <button type="submit">I accept the terms of this agreement.</button> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Date *</label>
                            <div class="form-group">
                                <input type="date" name="date" id="date" class="form-control input-lg" placeholder="" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label>Choose image *</label>
                            <div class="form-group">
                                <input id="file-input" type="file" name="image3"/>
                            </div>
                        </div>
                    </div>


                    <div class="submit_button">
                        <button type="button" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/web/js/bootstrap.min.js"></script>


<script src="assets/web/js/jquery.signaturepad.js"></script>
<script>
    $(document).ready(function() {
        $('.sigPad').signaturePad({drawOnly:true});
    });
</script>
<script src="assets/web/js/json2.min.js"></script>
</body>
</html>