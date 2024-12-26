@include('layouts.header')
<section>
    <div class="container-fluid px-lg-5 px-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-lg-12">
                <h2 class="title"><span>videos</span></h2>
            </div>
        </div>
        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 gy-lg-4 gy-4 mb-lg-5 mb-3">
            @foreach($videos as $item )
            <div class="col content">
            <iframe width="560" style="width:100%;" height="315" src="{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a class="btn-theme" id="loadMore" href="#">Load More</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')