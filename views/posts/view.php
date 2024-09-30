<?php view('partials/header') ?>

<main class="container">
  <form method="GET" action="/admin/posts/view?id=<?=$post->id?>">
    <div class="mb-3">
    <h6>Id</h6>
    <p name="Id" type="text" id="Id" value="<?=$post->id?>" ><?=$post->id?></p>
    </div>
    <div class="mb-3">
    <h6>Title</h6>
    <p name="Id" type="text" id="Id" value="<?=$post->title?>" ><?=$post->title?></p>
    </div><div class="mb-3">
    <h6>Text</h6>
    <p name="Id" type="text" id="Id" value="<?=$post->body?>" ><?=$post->body?></p>
    </div>
  </form>
</main>

<?php view('partials/footer') ?>