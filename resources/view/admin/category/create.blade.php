@extends('admin.layouts.app')

@section('head-tag')
<title>Admin|Create Category</title>
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
                        <h4 class="card-title">Category</h4>
                        <span><a href="<?= route('admin.category.index') ?>" class="btn btn-success">Back</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <form class="row" action="<?= route('admin.category.store') ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="helperText">Category Name</label>
                                        <input value="<?= old('name') ?>" name="name" type="text" id="helperText" class="form-control <?= errorClass('name') ?>" placeholder="Name ...">
                                        <?= errorText('name') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="form-group">
                                            <label for="helperText">Parent category</label>
                                            <select name="parent_id" class="select2 form-control <?= errorClass('parent_id') ?>">
                                                <option value="">If there is a parent, select it</option>
                                                <?php foreach($categories as $categorySelect){ ?>
                                                <option value="<?= $categorySelect->id ?>" <?= old('parent_id') == $categorySelect->id ? 'selected' : '' ?>><?= $categorySelect->name ?></option>
                                                    <?php } ?>
                                            </select>
                                            <?= errorText('parent_id') ?>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </fieldset>
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