@extends('app.layouts.app')

@section('head-tag')
<title>
Deluxe Real Property
</title>
@endsection

@section('content')


<section class="home-slider owl-carousel">

    <?php foreach($slides as $slide) {?>
    <div class="slider-item" style="background-image:url('<?= asset($slide->image) ?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
                <div class="col-md-6 text p-4 ftco-animate" style="direction: rtl;">
                    <h1 class="mb-3"><?= $slide->title ?></h1>
                    <span class="location d-block mb-3"><i class="icon-my_location"></i> <?= $slide->address ?></span>
                    <p><?= html_entity_decode($slide->body) ?></p>
                    <span class="price"><?= $slide->amount ?> </span>
                    <a href="<?= $slide->url ?>" class="btn-custom p-3 px-4 bg-primary">View details<span class="icon-plus mr-1"></span></a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</section>

<section class="ftco-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 search-wrap">
                <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span>Search</h2>

                <form action="<?= route('home.search') ?>" class="search-property" method="GET">
                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Ad Title</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-pencil "></span></div>
                                    <input type="text" name="search" class="form-control text-right" placeholder="Title">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="Search" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-pin"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Find a home anywhere </h3>
                        <p>Easily choose your desired home anywhere</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-detective"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Active agents</h3>
                        <p>you can count on us to guide you in every step of the process</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Buy Or Rent</h3>
                        <p>Deluxe Real Property can help you easily find a home or apartment for rent that you'll love.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-purse"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Double profit</h3>
                        <p>Benefit for buyer and seller</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-properties">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Advertising</span>
                <h2 class="mb-4">Latest ads</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="properties-slider owl-carousel ftco-animate">
                    <?php foreach($newestAds as $advertise) {?>
                    <div class="item">
                        <div class="properties">
                            <a href="<?= route('home.ads', [$advertise->id]) ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <span class="status <?= $advertise->sellStatus() == 'Buy' ? 'sale' : 'rent' ?>"><?= $advertise->sellStatus() ?></span>
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="<?= route('home.ads', [$advertise->id]) ?>"><?= $advertise->title ?></a></h3>
                                        <p><?= $advertise->type() ?></p>
                                    </div>
                                    <div class="two">
                                        <span class="price"><?= $advertise->amount ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Special offers</span>
                <h2 class="mb-4">Best Ads</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php foreach($bestAds as $advertise) { ?>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="properties">
                    <a href="<?= route('home.ads', [$advertise->id]) ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <span class="status sale">Buy</span>
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="<?= route('home.ads', [$advertise->id]) ?>"><?= $advertise->title ?></a></h3>
                                <p>Villa</p>
                            </div>
                            <div class="two">
                                <span class="price"><?= $advertise->amount ?></span>
                            </div>
                        </div>
                        <p><?= substr(html_entity_decode($advertise->description), 0, 40)  ?></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection mx-1"></i><?= $advertise->area ?></span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i><?= $advertise->room ?></span>
                            <span><i class="flaticon-bed"></i><?= $advertise->toilet ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Some interesting information</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $postsCount ?>">0</strong>
                                <span>Blogs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $adsCount ?>">0</strong>
                                <span>Ads</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $usersCount ?>">0</strong>
                                <span>Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $sumArea ?>">0</strong>
                                <span>Total area</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">articles</span>
                <h2>Latest Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($posts as $post) { ?>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('<?= asset($post->image) ?>');">
                    </a>
                    <div class="text mt-3 d-block">
                        <h3 class="heading mt-3 text-center"><a href="#" class="text-center"><?= $post->title ?></a></h3>
                        <div class="meta mb-3">
                            <div><a href="#"><?= $post->created_at ?></a></div>
                            <div><a href="#"><?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></div>
                            <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>






@endsection

@section('script')
<script>

    $(window).on('load', function(){
        $.ajax({
            url : "<?= route('home.last.posts') ?>",
            success: function(result){
                posts = result;
                var htmlString = '';
                for (var i = 0; i < posts.length; i++){
                    var post = posts[i];
                    htmlString += '<div class="col-md-3 d-flex fadeIn ftco-animated">';
                        htmlString += '<div class="blog-entry align-self-strech">';
                            htmlString += '<a href="'+ post.url +'" class="block-20" style="background-image: url('+ post.image +');">';
                                htmlString += '</a>';
                                htmlString += '<div class="text mt-3 d-block">';
                                    htmlString += '<h3 class="heading mt-3"><a href="'+ post.url +'">'+ post.title +'</a></h3>';
                                    htmlString += '<div class="meta mb-3">';
                                        htmlString += '<div>' + post.created_at + '</div>';
                                        htmlString += '<div>' + post.user + '</div>';
                                    htmlString += '</div>';
                                 htmlString += '</div>';
                            htmlString += '</div>';
                        htmlString += '</div>';
                }
                $('#last_posts').html(htmlString);
            }
        });
    });


</script>
@endsection
