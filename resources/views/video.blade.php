@include('layouts.header2')
<section>
    <div class="container-fluid px-lg-5 px-3">
        <div class="row mb-lg-5 mb-3 justify-content-center">
            <div class="col-md-3 mt-5">
                <div class="photos-local reels-toutube">
                    <a href="{{url('reels-view')}}">
                        <img class="img-fluid" src="https://www.internetmatters.org/wp-content/uploads/2020/08/https___specials-images.forbesimg.com_imageserve_5f2b4c9efc3ed7b0659d27ae_0x0.jpg" alt="">
                    </a>
                    <h5 class="title"><span></span></h5>
                    <h2 class="title reels mt-3  text-start text-md-center"><span>Reels</span></h2>
                </div>
            </div>

            <div class="col-md-3 mt-5">
                <div class="photos-local reels-toutube">
                    <a href="{{'video-view'}}">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/768px-YouTube_full-color_icon_%282017%29.svg.png?20240107144800" alt="">
                    </a>
                    <div class="col-lg-12">
                        <h5 class="title"><span></span></h5>
                        <h2 class="title toutube mt-3  text-start text-md-center"><span>Youtube</span></h2>
                            </div>
                    </div>
            </div>
        </div>

        
        
          
</section>
@include('layouts.footer')