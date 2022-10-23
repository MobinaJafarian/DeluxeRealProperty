@extends('admin.layouts.app')

@section('head-tag')
<title>Admin|Category
</title>
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
                        <span><a href="<?= route('admin.category.create') ?>" class="btn btn-success">Create</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Parent category</th>
                                        <th style="min-width: 6rem; text-align: left;">Setting</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($categories as $key => $category) { ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?= $key +=1 ?></td>
                                            <td><?= $category->name ?></td>
                                            <td><?= empty($category->parent_id) ? '' : $category->parent()->name ?></td>
                                            <td style="min-width: 6rem; text-align: left;">
                                                <a href="<?= route('admin.category.edit', [$category->id]) ?>" class="btn btn-info waves-effect waves-light">Edit</a>
                                                <form class="d-inline" action="<?= route('admin.category.delete', [$category->id]) ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
</div>
@endsection