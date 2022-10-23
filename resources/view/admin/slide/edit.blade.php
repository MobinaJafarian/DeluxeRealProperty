@extends('admin.layouts.app')



@section('head-tag')
<title>Admin|Slide</title>
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
                            <h4 class="card-title">Slide</h4>
                            <span><a href="<?= route("admin.slide.index") ?>" class="btn btn-success">Back</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route("admin.slide.update", ['id' => $slide->id]) ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="put">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="title">Title</label>
                                            <input name="title" type="text" id="title"  value="<?= oldOrValue('title', $slide->title) ?>" class="form-control" placeholder="Title ...">
                                            <?= errorText('title') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="url">Url</label>
                                            <input name="url" type="text" id="url" value="<?= oldOrValue('url', $slide->url) ?>" class="form-control" placeholder="Url ...">
                                            <?= errorText('url') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="address">Address</label>
                                            <input name="address" type="text" id="address"  value="<?= oldOrValue('address', $slide->address) ?>" class="form-control" placeholder="Address ...">
                                            <?= errorText('address') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="amount">Price</label>
                                            <input name="amount" type="text" id="amount"  value="<?= oldOrValue('amount', $slide->amount) ?>" class="form-control" placeholder="Price ...">
                                            <?= errorText('amount') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="image">Picture</label>
                                            <input name="image" type="file" id="image" class="form-control-file">
                                            <?= errorText('file') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="body">Text</label>
                                            <textarea class="form-control" id="body" rows="5" name="body" placeholder="Text ...">
                                                <?= oldOrValue('body', $slide->body) ?>
                                            </textarea>
                                            <?= errorText('body') ?>
                                        </section>
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
        CKEDITOR.replace( 'body' );
    </script>
@endsection
