@extends('layouts.contact')

@include('partials.navbar')

@section('content')

{{-- Page Title --}}
<div class="contact-section">
    <h1>CONTACT ME</h1>
  </div>
{{-- End of Page Title --}}

<div class="container">
    <div class="row justify-content-evenly">
      <div class="col-md-3">
        <div class="thumbnail">
            <a href="https://www.facebook.com/rahmi.najla.5" target="_blank" rel="noopener noreferrer"><img src="/assets/images/fb.png" alt="" style="width:100%"></a>
        </div>
      </div>
    
      <div class="col-md-3">
        <div class="thumbnail">
            <a href="https://twitter.com/rahmiinajla" target="_blank" rel="noopener noreferrer"><img src="/assets/images/twt.png" alt="" style="width:100%"></a>
        </div>
      </div>
    
      <div class="col-md-3">
        <div class="thumbnail"> 
            <a href="https://www.instagram.com/rahmiinajla/" target="_blank" rel="noopener noreferrer"> <img src="/assets/images/ig.png" alt="" style="width:100%"></a>
        </div>
      </div>
    </div>
  </div>
@endsection