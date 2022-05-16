@extends('layouts.about')

@include('partials.navbar')

@section('content')

{{-- Page Title --}}
<div class="about-section">
    <h1>ABOUT ME</h1>
  </div>
{{-- End of Page Title --}}

{{-- Content --}}

<div class="container">
  <div class="col">
      <p class="col-name">
          <h2>PERSONAL INFO </h2>
      </p>

      <p class="col-1">
          <h4>
            <p> Name: Rahmi Najla </p>                 
            <p> Age: 19 </p>                            
            <p> Email: rahminajla2002@gmail.com </p>    
            <p> Address: Banda Aceh </p>                
          </h4>
        </div>

      <p class="col-2">
        <h4>
      <p> Job: College Student </p>
      <p> Skill: Teaching </p>
      <p> Experience: 2 Years </p>
      <p> Language: Bahasa Indonesia, English, Arabic </p>
        </h4>
      </p>
{{-- End of Content --}}

@endsection