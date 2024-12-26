@include('layouts.header2')
<section>
    <div class="container-fluid px-lg-5 px-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-lg-12">
                <h2 class="title"><span>photos</span></h2>
            </div>
        </div>
        <div class="">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-lg-4 gy-4 mb-lg-5 mb-3">
         @foreach ($categories as $item)
         <div class="col">
         <div class="photos-local">
                    <a href="{{url('gallery/'.$item->id)}}">
                   <img class="img-fluid" src="{{ asset('public/backend/images/category/'.$item->image)}}" alt="" >
                   </a>
                   <div class="col-lg-12">
                <h5 class="title"><span>{{$item->category}}</span></h5>
            </div>
                </div>
        </div>  
         @endforeach
        </div>
     
    </div>
</section>
@include('layouts.footer')