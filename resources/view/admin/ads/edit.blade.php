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
                            <h4 class="card-title">Edit</h4>
                            <span><a href="<?= route("admin.ads.index") ?>" class="btn btn-success">Back</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route("admin.ads.update",[$advertise->id]) ?>" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="_method" value="put">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="title">Title</label>
                                            <input value="<?= oldOrValue('title', $advertise->title) ?>" name="title" type="text" id="title" class="form-control <?= errorClass('title') ?>" placeholder="Title ...">
                                            <?= errorText('title') ?>
                                        </fieldset>
                                    </div>



                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="image">Picture</label>
                                            <input name="image" type="file" id="image" class="form-control-file <?= errorClass('image') ?>">
                                            <?= errorText('image') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="address">Address</label>
                                            <input value="<?= oldOrValue('address', $advertise->address) ?>" name="address" type="text" id="address" class="form-control <?= errorClass('address') ?>" placeholder="Address ...">
                                            <?= errorText('address') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="floor">Floor</label>
                                            <input value="<?= oldOrValue('floor', $advertise->floor) ?>" name="floor" type="text" id="floor" class="form-control <?= errorClass('floor') ?>" placeholder="Floor ...">
                                            <?= errorText('floor') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="year">Year of construction</label>
                                            <input value="<?= oldOrValue('year', $advertise->year) ?>" name="year" type="text" id="year" class="form-control <?= errorClass('year') ?>" placeholder="Year of construction ...">
                                            <?= errorText('year') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="amount">Price</label>
                                            <input value="<?= oldOrValue('amount', $advertise->amount) ?>" name="amount" type="text" id="amount" class="form-control <?= errorClass('amount') ?>" placeholder="Price ...">
                                            <?= errorText('amount') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="area">Meterage</label>
                                            <input value="<?= oldOrValue('area', $advertise->area) ?>" name="area" type="text" id="area" class="form-control <?= errorClass('area') ?>" placeholder="Meterage...">
                                            <?= errorText('area') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="room">Bedroom</label>
                                            <input value="<?= oldOrValue('room', $advertise->room) ?>" name="room" type="text" id="room" class="form-control <?= errorClass('room') ?>" placeholder="Bedroom ...">
                                            <?= errorText('room') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="tag">Tag</label>
                                            <input value="<?= oldOrValue('tag', $advertise->tag) ?>" name="tag" type="text" id="tag" class="form-control <?= errorClass('tag') ?>" placeholder="Tag ...">
                                            <?= errorText('tag') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control <?= errorClass('description') ?>" id="description" rows="5" name="description" placeholder="Description ..."><?= oldOrValue('description', $advertise->description) ?></textarea>
                                            <?= errorText('description') ?>
                                        </section>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="storeroom">Storeroom</label>
                                                <select name="storeroom" class="select2 form-control <?= errorClass('storeroom') ?>">
                                                    <option value="0" <?= oldOrValue('storeroom',$advertise->storeroom) == 0 ? 'selected' : '' ?>>no</option>
                                                    <option value="1" <?= oldOrValue('storeroom',$advertise->storeroom) == 1 ? 'selected' : '' ?>>yes</option>
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
                                                    <option value="0" <?= oldOrValue('balcony', $advertise->balcony) == 0 ? 'selected' : '' ?>>no</option>
                                                    <option value="1" <?= oldOrValue('balcony', $advertise->balcony) == 1 ? 'selected' : '' ?>>yes</option>
                                                </select>
                                                <?= errorText('balcony') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="toilet">Bathroom</label>
                                                <input value="<?= oldOrValue('toilet', $advertise->toilet) ?>" name="toilet" type="text" id="toilet" class="form-control <?= errorClass('toilet') ?>" placeholder="Bathroom ...">
                                                <?= errorText('toilet') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="sell_status">Ad Type</label>
                                                <select name="sell_status" class="select2 form-control <?= errorClass('sell_status') ?>">
                                                    <option value="0"  <?= oldOrValue('sell_status', $advertise->sell_status) == 0 ? 'selected' : '' ?>>Buy</option>
                                                    <option value="1"  <?= oldOrValue('sell_status', $advertise->sell_status) == 0 ? 'selected' : '' ?>>Rent</option>
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
                                                    <option value="0" <?= oldOrValue('type', $advertise->type) == 0 ? 'selected' : '' ?>>Apartment</option>
                                                    <option value="1" <?= oldOrValue('type', $advertise->type) == 1 ? 'selected' : '' ?>>Villa</option>
                                                    <option value="2" <?= oldOrValue('type', $advertise->type) == 2 ? 'selected' : '' ?>>Land</option>
                                                    <option value="3" <?= oldOrValue('type', $advertise->type) == 3 ? 'selected' : '' ?>>Niches</option>
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
                                                    <option value="0" <?= oldOrValue('parking', $advertise->parking) == 0 ? 'selected' : '' ?>>no</option>
                                                    <option value="1" <?= oldOrValue('parking', $advertise->parking) == 1 ? 'selected' : '' ?>>yes</option>
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
                                                    <option value="<?= $categorySelect->id ?>" <?= oldOrValue('cat_id', $advertise->cat_id) == $categorySelect->id ? 'selected' : '' ?>><?= $categorySelect->name ?></option>
                                                    <?php } ?>
                                                </select>
                                                <?= errorText('cat_id') ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">Edit</button>
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
