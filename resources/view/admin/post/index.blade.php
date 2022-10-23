@extends('admin.layouts.app')
@section('head-tag')
<title>Admin|Post</title>
@endsection
@section('content')
<div class="content-header row"></div>
<div class="content-body">
   <!-- Zero configuration table -->
   <section id="basic-datatable">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Post</h4>
                  <span><a href="<?= route('admin.post.create') ?>" class="btn btn-success">Create</a></span>
               </div>
               <div class="card-content">
                  <div class="card-body card-dashboard">
                     <div class="">
                        <table class="table zero-configuration">
                           <thead>
                              <tr>
                                 <th>
                                 <th>Title</th>
                                 <th>Category</th>
                                 <th>Author</th>
                                 <th>Picture</th>
                                 <th style="min-width: 16rem; text-align: left;">Setting</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach($posts as $key => $post){ ?>
                              <tr role="row" class="odd">
                                 <td><?= $key +=1 ?></td>
                                 <td><?= $post->title ?></td>
                                 <td><?= $post->category()->name ?></td>
                                 <td><?= $post->user()->first_name . ' ' . $post->user()->last_name  ?></td>
                                 <td><img style="width: 90px;" src="<?= asset($post->image ) ?>" alt=""></td>
                                 <td style="min-width: 16rem; text-align: left;">
                                    <a href="<?= route('admin.post.edit', ['id' => $post->id]) ?>" class="btn btn-info">Edit</a>
                                    <form class="d-inline" action="<?= route('admin.post.delete', ['id' => $post->id]) ?>" method="post">
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