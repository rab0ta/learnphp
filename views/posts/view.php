<?php view('partials/header') ?>

<main class="container">
  <table class="table">
    <tbody>
        <tr>
            <th>ID</th>
            <td><?=$post->id?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?=$post->title?></td>
        </tr>
        <tr>
            <th>Body</th>
            <td><?=$post->body?></td>
        </tr>
    </tbody>
  </table>
  <a type="button" class="btn btn-primary" href="/admin/posts">Return</a>
</main>

<?php view('partials/footer') ?>