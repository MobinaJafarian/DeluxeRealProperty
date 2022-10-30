@extends('app.layouts.app')

@section('head-tag')
<title>Ads</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= route('home.index') ?>">Home</a></span> <span>Ads</span></p>
                <h1 class="mb-3 bread">Ads</h1>
            </div>
        </div>
    </div>
</div>



<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php foreach(paginate($ads, 2) as $advertise) { ?>
            <div class="col-md-4 ftco-animate">
                <div class="properties">
                    <a href="<?= route('home.ads', [$advertise->id]) ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
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
                        <p><?= html_entity_decode(substr($advertise->description, 0, 100 )) ?></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection"></i><?= $advertise->area ?></span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i> <?= $advertise->toilet ?> </span>
                            <span><i class="flaticon-bed"></i> <?= $advertise->room ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
      
     
  
        </div>
      <?= paginateView($ads, 2) ?>
    </div>
</section>




@endsection
