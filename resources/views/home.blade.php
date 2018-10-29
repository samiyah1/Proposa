@extends('layouts.app')

@section('content')

<div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
     <h2>Proposa</h2>
     <br>
      <br>
      <p> Increase Your sales by tracking Your documents</p>
      <br>
        <br>
          <br>
      <button class="button"><span>TEST IT FOR FREE</span></button>
    </div>
   <div class="col-md-6">
    <img style="width:600px;" src="sales.png">
  </div>
 </div>
</div>

<div class="jumbotron" style="margin-top:100px;background-color:white;">
  <div class="container">
    <div class="row">
<div class="col-md-4">
  <img src="rates.png" style="width:120px;">
  <h4>Conversion rate</h4>
  <p>Significantly boost your conversion rates
  in little time</p>
</div>
<div class="col-md-4">
  <img src="saveicon.png">
<h4>Save time</h4>
<p>Optimise your sales process
reduce your sales cycle</p>
</div>
<div class="col-md-4">
  <img src="savicon.png"style="width:150px;">
<h4>Documments</h4>
<p>Send or make your documents available in a space
completely branded to your company</p>
</div>
</div>
</div>
<div>
<div class="container" style="margin-top:100px;">
  <div class="row">
    <div class="col-md-6">
<img src="docex.png">
  </div>
  <div class="col-lg-6">
    <h3>One Platform, multiple possbilities</h3>
    <p> Personalise the view containing your documents to the clours and logo of your company
    and send any document format to your contracts:PDF,Microsoft Office documents,images,videos..</p>
  </div>
  <div class="row" style="margin-top:100px;">
  <div class="col-lg-6">
<h3>Track your documents and be alerted in real-time as to how they're read</h3>
<p> You receive an alert each time one of your documents is read. You'll know what has been
  read & how long for tanks to the in depth statics on your prospect & client's alert-heading
behaviour(even page per page!)</p>
  </div>
  <div class="col-md-6">
<img style="width:350px;margin-left:200px;"src="tracdoc.png">
  </div>
<p></p>
  </div>
    </div>
    <div class="row" style="margin-top:100px;">
      <div class="col-md-6">
    <img style="width:350px;margin-right:200px;"src="savetim.png">
      </div>
    <div class="col-lg-6">
  <h3>Save time</h3>
  <p> You can easily identify your most interested prospects and get back to them at the right time
    with the right arguments.On average, on clients save 24minutes a day using Proposa </p>
    </div>


    </div>
      </div>
</div>
<div class="jumbotron" style="background-color:#6cb2eb;">
<div class="container">
<div class="row">
<div class="col-md-3">
<h4>About Proposa</h4>
<a href="#">Our story</a><br>
<a href="#">News</a><br>
<a href="#">Privacy Policy</a><br>
</div>
<div class="col-md-3">
  <h4>For Buyers</h4>
  <a href="#">Categories</a><br>
  <a href="#">Resources</a><br>
  <a href="#">Blog</a><br>
</div>
<div class="col-md-3">
  <h4>For vendors</h4>
  <a href="#">Program Overview</a><br>
  <a href="#">Advertise With Us</a><br>
  <a href="#">Testimonials</a><br>
</div>
<div class="col-md-3">
  <h4>Contact Us</h4>
  <a href="#">Our story</a><br>
  <a href="#">News</a><br>
  <a href="#">Privacy Policy</a><br>
</div>
</div>

</div>
<div class="footer-social-icons">
    <h4 class="_14">Follow us on</h4>
    <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
</div>
@endsection
