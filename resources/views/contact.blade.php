@extends('layouts.navbar')

@section('title', 'Contact Us | Crypto Merchant')
@section('body')
               
              <div class="content">
                <div class="title-online m-b-md">
               Contact Us
                </div>
                <div class="contact-sub">Having a trouble accessing your account? Processing payments? Do you need a help in addressing some concerns? Good thing we’ve got you covered! Our customer service is more than willing to assist you in anyway we can. Just shoot us an email at info@cyrptomerchants.online and we’ll take care of you.</div>
            </div>

                
    <div class="" style="">
    <div class="container">

        <div class="col-md-12 contact-note">
          <h6>Note: Or you can submit through this form</h6>
          </div>

          <div class="col-md-6">
          <form method="POST" action="{{ url('/inquiry') }}" role="form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
              <div class="col-md-12 contact-text">
          
                <input type="text" id="name" class="form-control" placeholder="Your Name" name="name">
              </div>
              
          

            
              <div class="col-md-12 contact-text">
            
                <input type="text" id="email" class="form-control" placeholder="Your email address" name="email">
              </div>
          

            
              <div class="col-md-12 contact-text">
                
                <input type="text" id="subject" class="form-control" placeholder="Your subject for this message" name="subject">
              </div>
          

            
              <div class="col-md-12 contact-text">
                
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
              </div>
          
            <div class="contact-text">
              <button type="submit" class="btn btn-primary btn-md but-col">Message Us Now!</button>
            </div>

          </form>   
        </div>

        
      </div>
      </div>
      
    </div>
  </div>
       

       
@endsection        
