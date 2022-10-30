@extends('app.layouts.app')

@section('head-tag')
<title>Blog Page</title>
@endsection

@section('content')
<div class="hero-wrap" style="background-image: url('<?= asset('images/bg_1.jpg') ?>');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= route('home.index') ?>">Home</a></span> <span class="mr-2"><a href="<?= route('home.all.post') ?>">Blogs</a></span> <span><?= $post->title ?></span></p>
          <h1 class="mb-3 bread">Blog</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <h2 class="mb-3"><?= $post->title ?></h2>
          <img src="<?= asset($post->image) ?>" alt="" class="img-fluid">
      
     <p>
        <?= html_entity_decode($post->body) ?>
     </p>


          <div class="pt-5 mt-5">
            <h3 class="mb-5">Comments</h3>
            <ul class="comment-list">
              <?php foreach($comments as $comment) { ?>
              <li class="comment">
                <div class="vcard bio">
                  <img src="<?= asset($comment->user()->avatar) ?>" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3><?= $comment->user()->first_name . ' ' . $comment->user()->last_name ?></h3>
                  <div class="meta"><?= $comment->created_at ?></div>
                  <p><?= $comment->comment ?></p>
                </div>
                <?php 
                $childComments = $comment->child()->get();
                if(!empty($childComments)) { 
                 ?>
                <ul class="children">
                  <?php foreach($childComments as $childComment) { ?>
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="<?= asset($comment->user()->avatar) ?>" alt="Image placeholder">
                    </div>
                               <div class="comment-body">
                           <h3>Admins answer : <?= $childComment->user()->first_name . ' ' . $childComment->user()->last_name ?></h3>
                           <div class="meta"><?= $childComment->created_at ?></div>
                           <p><?= $childComment->comment ?></p>
                          </div>
                  </li>
                  <?php } ?>
                </ul>
                <?php } ?>
              </li>
              <?php } ?>

            </ul>
            <!-- END comment-list -->
            
            <div class="comment-form-wrap pt-5">
              <?php if(\System\Auth\Auth::checkLogin()) { ?>
              <h3 class="mb-5">add comment</h3>
              <form action="<?= route('home.post.comment', [$post->id]) ?>" class="p-5 bg-light" method="POST">
                <div class="form-group">
                  <label for="message">پیام</label>
                  <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="ارسال نطر" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
              <?php } else { ?>
                <p>
                To post a comment, you must first login into your account
                <div>
                  <a href="<?= route('auth.login.view') ?>" class="btn btn-success"><span class="icon-user m-2 p-4">Login</span></a>
                  <a href="<?= route('auth.register.view') ?>" class="btn btn-primary"><span class="icon-pencil m-2 p-4">Registe</span></a>
                </div>
              </p>
              <?php } ?>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
         
            <div class="sidebar-box ftco-animate">
                <div class="categories">
                    <h3>Categories</h3>
                    <?php foreach($categories as $category) { ?>
                    <li><a href="<?= route('home.category', [$category->id]) ?>"><?= $category->name ?> <span><?= count($category->ads()->get()) ?></span></a></li>
                    <?php } ?>
                </div>
            </div>

            <div class="sidebar-box ftco-animate">
                <h3>Latest blogs</h3>
                <?php foreach($posts as $post) { ?>
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url('<?= asset($post->image) ?>');"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#"><?= $post->title ?></a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span><?= $post->created_at ?></a></div>
                            <div><a href="#"><span class="icon-person"></span> <?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
       

          
      </div>
    </div>
  </section> <!-- .section -->
      

@endsection