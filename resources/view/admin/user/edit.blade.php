@extends('admin.layouts.app')



@section('head-tag')
    <title>User|Edit</title>
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
                            <span><a href="<?= route("admin.user.index") ?>" class="btn btn-success">Back</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route("admin.user.update", ['id' => $user->id]) ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="put">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="first_name">Name</label>
                                            <input name="first_name" type="text" id="first_name"  value="<?= oldOrValue('first_name', $user->first_name) ?>" class="form-control <?= errorClass('first_name') ?>">
                                            <?= errorText('first_name') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input name="last_name" type="text" id="last_name"  value="<?= oldOrValue('last_name', $user->last_name) ?>" class="form-control <?= errorClass('last_name') ?>">
                                            <?= errorText('last_name') ?>
                                        </fieldset>
                                    </div>
                                  

                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="avatar">Picture</label>
                                            <input name="avatar" type="file" id="avatar" class="form-control-file <?= errorClass('avatar') ?>">
                                            <?= errorText('avatar') ?>
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
