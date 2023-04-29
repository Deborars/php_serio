<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost['title'] ?>" srcset="">
    </div>

    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt laborum nam in sed illum fuga facilis,
      perferendis ducimus ipsa perspiciatis, optio necessitatibus soluta libero omnis dolorum, obcaecati nemo. Ab,
      quidem totam voluptatem corporis vel illo! Necessitatibus, hic? At nobis libero cum illum tenetur adipisci
      excepturi nisi iusto dolorem rerum nam sunt totam, praesentium deserunt maiores pariatur architecto repellat
      placeat autem laboriosam sapiente veniam consectetur porro ratione. Suscipit rem atque voluptatum magnam ad cum
      deleniti, fugit magni tenetur, architecto qui? Iste aperiam rem veniam. Neque reprehenderit exercitationem
      adipisci est corporis in excepturi nostrum nam magni perferendis architecto porro natus accusantium, deleniti
      totam doloremque quos minus consequuntur? Aspernatur aperiam pariatur, laborum, iure soluta omnis est odit minus
      veniam nobis explicabo consectetur incidunt eveniet, deserunt quo facere expedita? Modi exercitationem culpa
      similique suscipit, enim deserunt odit quae nulla dignissimos doloribus ipsum unde magni. Dicta excepturi error
      quo nisi nam enim ex labore ipsum molestias aliquid. A temporibus explicabo, vel tempora maiores ipsa iure quos
      voluptas. Itaque rerum magnam eveniet perferendis reiciendis doloribus consequatur ipsum officiis dolorem quaerat.
      Sint blanditiis accusantium, aspernatur vel, iusto dignissimos suscipit ut nulla odit doloremque quia in! Veniam
      dignissimos ipsa iure possimus, distinctio dolorum libero asperiores saepe dolores mollitia.
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost["tags"] as $tag) : ?>
      <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach ?>
    </ul>
    <h3 id="categories-tile">Categorias</h3>
    <ul id="categorias-list">
      <?php foreach ($categories as $category) : ?>
      <li><a href="#"><?= $category ?></a></li>
      <?php endforeach ?>
    </ul>
  </aside>

</main>

<?php
include_once("templates/footer.php");
?>