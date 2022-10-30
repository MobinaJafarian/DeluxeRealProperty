@extends('app.layouts.app')

@section('head-tag')
<title>Ads</title>
@endsection

@section('content')


<div class="hero-wrap" style="background-image: url('<?= asset('images/bg_1.jpg') ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= route('home.index') ?>">Home</a></span> <span class="mr-2"><a href="blog.html">Ads</a></span> <span><?= $advertise->title ?></span></p>
                <h1 class="mb-3 bread">Ads</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <?php foreach($galleries as $gallery) { ?>
                            <div class="item">
                                <div class="properties-img" style="background-image: url('<?= asset($gallery->image) ?>');"></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate" style="direction: rtl">
                        <h2><?= $advertise->title ?></h2>
                        <p class="rate mb-4">
                            <span class="loc"><a href="#"><i class="icon-map"></i> <?= $advertise->address ?></a></span>
                        </p>
                        <p><?= html_entity_decode($advertise->description) ?></p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
                                <li><span>Meterage : </span><?= $advertise->area ?></li>
                                <li><span>Bedroom : </span> <?= $advertise->room ?></li>
                                <li><span>Bathroom : </span> <?= $advertise->toilet ?></li>
                                <li><span>Parking : </span> <?= $advertise->parking ?></li>
                            </ul>
                            <ul class="ml-md-5">
                                <li><span>Type of flooring : </span> <?= $advertise->floor ?></li>
                                <li><span>Year of construction : </span> <?= $advertise->year ?></li>
                                <li><span>Warehouse : </span> <?= $advertise->storeroom ?></li>
                                <li><span>the balcony : </span> <?= $advertise->balcony == 1 ? 'yes' : 'no' ?></li>
                                <li><span>Property Type : </span> <?= $advertise->type() ?></li>
                                <li><span>Ad type : </span> <?= $advertise->sellStatus() ?></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Related ads</h4>
                        <div class="row">
                            <?php foreach($relatedAds as $advertise) { ?>
                            <div class="col-md-6 ftco-animate">
                                <div class="properties">
                                    <a href="<?= route('home.ads', [$advertise->id]) ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status <?= $advertise->sellStatus() == 'Buy ' ? 'sale' : 'rent' ?>"><?= $advertise->sellStatus() ?></span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="<?= route('home.ads', [$advertise->id]) ?>"><?= $advertise->title ?></a></h3>
                                                <p><?= $advertise->type() ?></p>
                                            </div>
                                            <div class="two">
                                                <span class="price"><?= $advertise->amount ?></span>
                                            </div>
                                        </div>
                                        <p><?= html_entity_decode(substr($advertise->description, 0, 100)) ?> ...</p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="flaticon-selection"></i><?= $advertise->area ?></span>
                                            <span class="ml-auto"><i class="flaticon-bathtub"></i> <?= $advertise->room ?></span>
                                            <span><i class="flaticon-bed"></i> <?= $advertise->toilet ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <?php foreach($categories as $category) { ?>
                        <li><a href="<?= route('home.category', [$category->id]) ?>"><?= $category->name ?> <span><?= count($category->ads()->get()) ?></span></a></li>
                        <?php } ?>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>The latest blogs</h3>
                    <?php foreach($posts as $post) { ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('<?= asset($post->image) ?>');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#"><?= $post->title ?></a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span><?= $post->created_at ?></a></div>
                                <div><a href="#"><span class="icon-person"></span> <?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>


</section>
<!-- .section -->

@endsection
