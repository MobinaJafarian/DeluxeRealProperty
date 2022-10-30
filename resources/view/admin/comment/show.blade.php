@extends('admin.layouts.app')



@section('head-tag')
<title>Admin|Comment</title>
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
                            <h4 class="card-title">Comment</h4>
                            <span><a href="<?= route("admin.comment.index") ?>" class="btn btn-success">Back</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h2><?= $comment->user()->first_name . ' ' . $comment->user()->last_name ?></h2>
                                        <p><?= $comment->comment ?></p>
                                    </div>

                                    <div class="col-md-12 mt-4 pt-4 border-top">
                                        <form action="<?= route('admin.comment.answer', [$comment->id]) ?>" method="post">
                                            <section class="form-group">
                                                <label for="comment">Answer</label>
                                                <textarea class="form-control <?= errorClass('comment') ?>" id="comment" rows="5" name="comment" placeholder="Answer ..."></textarea>
                                                <?= errorText('comment') ?>
                                            </section>
                                            <div class="col-md-6">
                                                <section class="form-group">
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </section>
                                            </div>
                                        </form>
                                    </div>
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