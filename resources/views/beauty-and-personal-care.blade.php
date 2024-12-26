@include('layouts.header')

<section>
   <div class="container-fluid px-lg-5 px-3">
       <div class="row mb-lg-5 mb-3">
           <div class="col-lg-12">
               <h2 class="title"><span>beauty-and-personal-care</span></h2>
           </div>
       </div>
       <div class="gallery">
       <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-lg-4 gy-4 mb-lg-5 mb-3">
        @foreach ($images as $item)
        <div class="col">
           <div class="photos-local">
               <a href="{{ asset('public/backend/images/image/' . $item->image) }}">
              <img class="img-fluid" src="{{ asset('backend/images/image/' . $item->image) }}" alt="" loading="lazy">
              </a>
           </div>
       </div>  
        @endforeach
       </div>
    
   </div>
</section>
@include('layouts.footer')