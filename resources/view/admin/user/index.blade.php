@extends('admin.layouts.app')



@section('head-tag')
<title>Users</title>
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
                            <h4 class="card-title">Users</h4>
                            <span><a href="#>" class="btn btn-success disabled">Create</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Email</th>
                                                <th>Name</th>
                                                <th>Last Name</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th style="width: 22rem; text-align: left;">Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $key => $user) { ?>
                                            <tr>
                                                <td><?= $key += 1 ?></td>
                                                <td><?= $user->email ?></td>
                                                <td><?= $user->first_name ?></td>
                                                <td><?= $user->last_name ?></td>
                                                <td><img src="<?= asset($user->avatar) ?>" alt=""></td>
                                                <td><?= $user->is_active == 1 ? '<span class="text-success">active</span>' : '<span class="text-danger">deactive</span>' ?></td>
                                                <td style="width: 22rem; text-align: left;">
                                                    <a href="<?= route('admin.user.edit', [$user->id]) ?>" class="btn btn-info">Edit</a>
                                                    <a href="<?= route('admin.user.change.status', [$user->id]) ?>" class="btn btn-warning">Change Status</a>
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