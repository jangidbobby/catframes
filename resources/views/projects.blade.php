@include('layouts.header')
<section>
    <div class="container-fluid px-lg-5 px-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-lg-12">
                <h2 class="title"><span>photos</span></h2>
            </div>
        </div>
       
        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 gy-lg-4 gy-4 mb-lg-5 mb-3">
            <div class="col">
                <div class="photos-local">
                    <a href="{{'beauty-and-personal-care'}}">
                   <img class="img-fluid" src="front/image/p8.jpg" alt="" loading="lazy">
                   </a>
                </div>
            </div>
              <div class="col">
                <div class="photos-local">
                    <a href="{{'electronics'}}">
                   <img class="img-fluid" src="front/image/p9.jpg" alt="" loading="lazy">
                   </a>
                </div>
            </div>
          
        </div>
            
       
     
    </div>
</section>
@include('layouts.footer')