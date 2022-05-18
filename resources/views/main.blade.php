@extends('layouts.main')

@include('partials.navbar')


@section('content')

<div id="home">
<div class="container mt-5">

</div>
<img class="my-photo" src="/assets/images/lala.png" alt=" " style="width:50%">
</div>

    <div class="container">
        <div class="col">
                <h1 class="col-name"> Hi, I'm Rahmi Najla </h1>
                <h2 class="col-work"> College Student </h2>
                <h3 class="col-desc"> I'm one of Informatics Student at Syiah Kuala University. I'm currently studying in semester 4. I'm graduated from MAS Insan Qurani. I'm interested in Data Mining and Web-Based Programming</h3>      
        </div>
    </div>
</div>




{{-- Page Title About --}}

<div id="about">
    <h1  class="about-section"> <hr> ABOUT ME</h1>
{{-- End of Page Title --}}

{{-- Content --}}

<div class="container">
  <div class="col">
      <h2 class="my-info">PERSONAL INFO </h2>
  </div>

        
<div class="row">
  <div class="col-sm">
    <h4>
      <p> Name: Rahmi Najla </p>                 
      <p> Age: 19 </p>                            
      <p> Email: rahminajla2002@gmail.com </p>    
      <p> Address: Banda Aceh </p>                
    </h4>
  </div>
  <div class="col-sm">
    <h4>
      <p> Job: College Student </p>
      <p> Skill: Teaching </p>
      <p> Experience: 2 Years </p>
      <p> Language: Bahasa Indonesia, English, Arabic </p>
    </h4>
  </div>
</div> 
</div>
</div>

<hr> 


{{-- Page Title --}}
<div id="contact">
    <h1 class="contact-section">CONTACT ME</h1>
    <h2 class="description">FIND ME ON</h2>
 
{{-- End of Page Title --}}

<div class="container">
    <div class="row justify-content-evenly">
      <div class="col-md-3">
        <div class="thumbnail">
            <a href="https://www.facebook.com/rahmi.najla.5" target="_blank" rel="noopener noreferrer"><img class="sosmed" src="/assets/images/fb.png" alt="" style="width:100%"></a>
            <p class="caption">FACEBOOK</p>
        </div>
      </div>
    
      <div class="col-md-3">
        <div class="thumbnail">
            <a href="https://twitter.com/rahmiinajla" target="_blank" rel="noopener noreferrer"><img class="sosmed" src="/assets/images/twt.png" alt="" style="width:100%"></a>
            <p class="caption">TWITTER</p>
        </div>
      </div>
    
      <div class="col-md-3">
        <div class="thumbnail"> 
            <a href="https://www.instagram.com/rahmiinajla/" target="_blank" rel="noopener noreferrer"> <img class="sosmed" src="/assets/images/ig.png" alt="" style="width:100%"></a>
            <p class="caption">INSTAGRAM</p>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End of Content --}}
@endsection






