@extends('admin.layouts.app')

@section('head-tag')
<title>Admin|Edit Category</title>
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

                            <form class="row" action="<?= route('admin.category.update', [$category->id]) ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="_method" value="put">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="helperText">Category Name</label>
                                        <input value="<?= oldOrValue('name', $category->name) ?>" name="name" type="text" id="helperText" class="form-control <?= errorClass('name') ?>" placeholder="Name ...">
                                        <?= errorText('name') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="form-group">
                                            <label for="helperText">Parent Category</label>
                                            <select name="parent_id" class="select2 form-control <?= errorClass('parent_id') ?>">
                                                <option value="">If there is a parent, select it</option>
                                                <?php foreach($categories as $categorySelect){ ?>
                                                <option value="<?= $categorySelect->id ?>" <?= oldOrValue('parent_id', $category->parent_id) == $categorySelect->id ? 'selected' : '' ?>><?= $categorySelect->name ?></option>
                                                    <?php } ?>
                                            </select>
                                            <?= errorText('parent_id') ?>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <button type="submit" class="btn btn-primary">Edit</button>
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
