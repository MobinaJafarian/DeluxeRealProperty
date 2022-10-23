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
                            <h4 class="card-title">Ads</h4>
                            <span><a href="<?= route("admin.ads.create") ?>" class="btn btn-success">create</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Address</th>
                                            <th>picture</th>
                                            <th>Info</th>
                                            <!-- <th>Tag</th> -->
                                            <th>User</th>
                                            <th style="width: 22rem;">Setting</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($ads as $key => $advertise) { ?>
                                        <tr>
                                            
                                            <td><?= $key +=1 ?></td>
                                            <td><?= $advertise->title ?></td>
                                            <td><?= $advertise->category()->name ?></td>
                                            <td><?= $advertise->address ?></td>
                                            <td><img style="width: 90px;" src="<?= asset($advertise->image) ?>" alt=""></td>
                                            <td>
                                                <ul>
                                                    <li>floor : <?= $advertise->floor ?></li>
                                                    <li>year : <?= $advertise->year ?></li>
                                                    <li>storeroom : <?= $advertise->storeroom ?></li>
                                                    <li>balcony : <?= $advertise->balcony ?></li>
                                                    <li>area : <?= $advertise->area ?></li>
                                                    <li>room : <?= $advertise->room ?></li>
                                                    <li>bathroom : <?= $advertise->toilet ?></li>
                                                    <li>parking : <?= $advertise->parking ?></li>
                                                </ul>
                                            </td>
                                            <!-- <td><?= $advertise->tag ?></td> -->
                                            <td><?= $advertise->user()->first_name . ' ' . $advertise->user()->last_name ?></td>
                                            <td style="width: 22rem;">
                                                <a href="<?= route('admin.ads.gallery', ['id' => $advertise->id]) ?>" class="btn btn-block bg-gradient-primary mb-1">Gallery</a>
                                                <a href="<?= route('admin.ads.edit', ['id' => $advertise->id]) ?>" class="btn btn-block bg-gradient-info mb-1">Edit</a>
                                                <form class="d-inline" action="<?= route('admin.ads.delete', ['id' => $advertise->id]) ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-block bg-gradient-danger">Delete</button>
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