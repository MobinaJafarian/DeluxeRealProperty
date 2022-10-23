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
                            <span><a href="<?= route("admin.slide.create") ?>" class="btn btn-success">Create</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">

                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Url</th>
                                            <th>Address</th>
                                            <th>Price</th>
                                            <th>Picture</th>
                                            <th style="min-width: 16rem; text-align: left;">Setting</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($slides as $key => $slide) { ?>
                                        <tr>
                                            <td><?= $key += 1 ?></td>
                                            <td><?= $slide->title ?></td>
                                            <td><?= $slide->url ?></td>
                                            <td><?= $slide->address ?></td>
                                            <td><?= $slide->amount ?></td>
                                            <td><img style="width: 90px;" src="<?= $slide->image ?>" alt=""></td>
                                            <td style="min-width: 16rem; text-align: left;">
                                                <a href="<?= route('admin.slide.edit', ['id' => $slide->id]) ?>" class="btn btn-info">Edit</a>
                                                <form class="d-inline" action="<?= route('admin.slide.delete', ['id' => $slide->id]) ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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