@extends('admin.layouts.app')


@section('head-tag')
    <title>admin/gallery</title>
@endsection


@section('content')

            <div class="content-header row">

            </div>
            <div class="content-body">

                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ad - Gallery</h4>
                                    <span><a href="<?= route('admin.ads.index') ?>" class="btn btn-success">Back</a></span>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <form class="row" action="<?= route('admin.ads.store.gallery.image', [$advertise->id]) ?>" method="post" enctype="multipart/form-data">

                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="image">Picture</label>
                                                    <input name="image" type="file" id="image" class="form-control-file <?= errorClass('image') ?>">
                                                    <?= errorText('image') ?>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12">
                                                <section class="form-group">
                                                    <button type="submit" class="btn btn-primary">Upload Picture</button>
                                                </section>
                                            </div>
                                        </form>
                                        <div class="col-md-12 mt-4 pt-4">
                                            <div class="row">
                                                <?php foreach($galleries as $gallery){ ?>
                                                    <div class="col-md-3 text-center">
                                                        <div>
                                                            <img style="width: 100%;" src="<?= asset($gallery->image) ?>" alt="">
                                                        </div>
                                                        <a class="btn btn-danger mt-1" href="<?= route('admin.ads.delete.gallery.image', [$gallery->id]) ?>">Delete</a>
                                                    </div>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @endsection
