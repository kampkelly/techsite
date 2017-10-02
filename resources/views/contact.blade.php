@extends('layouts.master')

@section('content')
  <div class="container">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="topspace">
    <div class="col-sm-9 kk">
       <h4 class="text-center">Leave a message and I will get back to you shortly.</h4><br><br>
            <form action="/contact" method="POST" class="form-horizontal first-form" role="form" files="true" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                        <label for="contact_name" class="col-xs-12 col-sm-3 col-md-3 col-lg-4 control-label">Name <span class="asterisks">*</span></label>
                        <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6">
                            <input type="text" name="contact_name" id="contact_name" class="form-control" required="required" placeholder="Name" required="true" minlength="4">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="contact_email" class="col-xs-12 col-sm-3 col-md-3 col-lg-4 control-label">Email <span class="asterisks">*</span></label>
                        <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6">
                            <input type="text" name="contact_email" id="contact_email" class="form-control" required="required" placeholder="Email Address" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_msg" class="col-xs-12 col-sm-3 col-md-3 col-lg-4 control-label">Message <span class="asterisks">*</span></label>
                        <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6">
                        <textarea class="form-control" rows="5" placeholder="Your Message" name="contact_msg"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
                            <button type="submit" class="btn btn-primary btn-block btn-sm">
                                Send
                            </button>
                        </div>
                    </div>
            </form>
       
      

    </div>
     @include('../partials/newright-sidebar')
     

</div>
</div>
<div style="height: 20px;"></div>
@endsection