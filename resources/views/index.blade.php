@extends('template')
@section('content')
<section id = "main-section">
  <div class = "row">
    <div class = "col-md-4" id = "about">
      <div class = "content">
        <h3>About</br><span>Me</span></h3>
        <a href = "/about-me"><button>more</button></a>
      </div>
    </div>
    <div class = "col-md-4" id = "portfolio">
     <div class = "content">
       <h3>View</br><span>Portfolio</span></h3>
        <a href = "/portfolio"><button>more</button></a>
     </div>
    </div>
    <div class = "col-md-4" id = "latest-updates">
      <div class = "content">
        <h3>Latest</br><span>Updates</span></h3>
         <a href = "/latest-updates"><button>more</button></a>
      </div>
    </div>
  </div>
</section>
@endsection
