@extends('admin.layouts.app')


@section('head-tag')
    <title>admin/ads</title>
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
                            <h4 class="card-title">ad</h4>
                            <span><a href="<?= route("admin.ads.index") ?>" class="btn btn-success">Back</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route("admin.ads.store") ?>" method="post" enctype="multipart/form-data">

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="title">Title</label>
                                            <input value="<?= old('title') ?>"  name="title" type="text" id="title" class="form-control <?= errorClass('title') ?>" placeholder="Title ...">
                                            <?= errorText('title') ?>
                                        </fieldset>
                                    </div>



                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="image">Picture</label>
                                            <input name="image" type="file" id="image" class="form-control-file <?= errorClass('file') ?>">
                                            <?= errorText('file') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="address">Address</label>
                                            <input value="<?= old('address') ?>"  name="address" type="text" id="address" class="form-control <?= errorClass('address') ?>" placeholder="Address ...">
                                            <?= errorText('address') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="floor">Floor</label>
                                            <input value="<?= old('floor') ?>"  name="floor" type="text" id="floor" class="form-control <?= errorClass('floor') ?>" placeholder="Floor ...">
                                            <?= errorText('floor') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="year">Year of construction</label>
                                            <input value="<?= old('year') ?>"  name="year" type="text" id="year" class="form-control <?= errorClass('year') ?>" placeholder=" Year of construction ...">
                                            <?= errorText('year') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="amount">Price</label>
                                            <input value="<?= old('amount') ?>"  name="amount" type="text" id="amount" class="form-control <?= errorClass('amount') ?>" placeholder="Price ...">
                                            <?= errorText('amount') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="area">Meterage</label>
                                            <input value="<?= old('area') ?>"  name="area" type="text" id="area" class="form-control <?= errorClass('area') ?>" placeholder="Meterage ...">
                                            <?= errorText('area') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="room">Bedroom</label>
                                            <input value="<?= old('room') ?>" name="room" type="text" id="room" class="form-control <?= errorClass('room') ?>" placeholder="Bedroom ...">
                                            <?= errorText('room') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="tag">Tag</label>
                                            <input value="<?= old('tag') ?>"  name="tag" type="text" id="tag" class="form-control <?= errorClass('tag') ?>" placeholder="Tag ...">
                                            <?= errorText('tag') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control <?= errorClass('description') ?>" id="description" rows="5" name="description" placeholder="Description ..."><?= old('description') ?></textarea>
                                            <?= errorText('description') ?>
                                        </section>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="storeroom">Storeroom</label>
                                                <select name="storeroom" class="select2 form-control <?= errorClass('storeroom') ?>">
                                                    <option value="0">no</option>
                                                    <option value="1">yes</option>
                                                </select>
                                                <?= errorText('storeroom') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="balcony">Balcony</label>
                                                <select name="balcony" class="select2 form-control <?= errorClass('balcony') ?>">
                                                    <option value="0">no</option>
                                                    <option value="1">yes</option>
                                                </select>
                                                <?= errorText('balcony') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="toilet">Bathroom</label>
                                                <input value="<?= old('toilet') ?>" name="toilet" type="text" id="toilet" class="form-control <?= errorClass('toilet') ?>" placeholder="Bathroom ...">
                                                <?= errorText('toilet') ?>
                                            </div>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="sell_status">Ad Type</label>
                                                <select name="sell_status" class="select2 form-control <?= errorClass('sell_status') ?>">
                                                    <option value="0">Buy</option>
                                                    <option value="1">Rent</option>
                                                </select>
                                                <?= errorText('sell_status') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="type">Property Type</label>
                                                <select name="type" class="select2 form-control <?= errorClass('type') ?>">
                                                    <option value="0">Apartment</option>
                                                    <option value="1">Villa</option>
                                                    <option value="2">Land</option>
                                                    <option value="3">Niches</option>
                                                </select>
                                                <?= errorText('type') ?>
                                            </div>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="parking">Parking</label>
                                                <select name="parking" class="select2 form-control <?= errorClass('parking') ?>">
                                                    <option value="0">no</option>
                                                    <option value="1">yes</option>
                                                </select>
                                                <?= errorText('parking') ?>
                                            </div>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="cat_id">Category</label>
                                                <select name="cat_id" class="select2 form-control <?= errorClass('cat_id') ?>">
                                                    <?php foreach ($categories as $categorySelect) { ?>
                                                    <option value="<?= $categorySelect->id ?>"><?= $categorySelect->name ?></option>
                                                    <?php } ?>
                                                </select>
                                                <?= errorText('cat_id') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


@section('script')
    <script src="<?= asset('ckeditor/ckeditor.js'); ?>"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'description' );
    </script>
@endsection