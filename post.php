<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
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
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cum tempora adipisci
            reiciendis facilis quasi omnis natus aliquam labore laboriosam, itaque velit ipsam, rem cumque illo
            praesentium, ea veritatis odit!
            Sit temporibus accusamus magnam, ullam reiciendis itaque repellat. Itaque, suscipit! Nihil, fugit eum
            voluptatem harum aspernatur laborum accusantium voluptate officiis, eveniet labore, assumenda perspiciatis?
            Quis, voluptas! Unde non libero reiciendis.
            Hic, pariatur? Quae nemo iste delectus quidem mollitia velit culpa quaerat, dolorem ipsa est facere
            nesciunt, quas possimus voluptate quod nostrum repellendus perferendis accusantium exercitationem dolor cum
            officia architecto! Ut.
            Praesentium itaque suscipit provident a quidem totam minima illo? Quis vero, tempore voluptatum totam porro
            aspernatur sint perspiciatis unde enim, alias cum soluta minus iure quo quos molestiae earum! Doloremque!
            Ut molestiae voluptas dolores mollitia provident a dolore ab, hic maiores in voluptatem voluptate velit
            delectus sunt voluptatibus aperiam inventore odit enim perferendis ullam autem laborum unde? Eaque,
            consequuntur neque?</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cum tempora adipisci
            reiciendis facilis quasi omnis natus aliquam labore laboriosam, itaque velit ipsam, rem cumque illo
            praesentium, ea veritatis odit!
            Sit temporibus accusamus magnam, ullam reiciendis itaque repellat. Itaque, suscipit! Nihil, fugit eum
            voluptatem harum aspernatur laborum accusantium voluptate officiis, eveniet labore, assumenda perspiciatis?
            Quis, voluptas! Unde non libero reiciendis.
            Hic, pariatur? Quae nemo iste delectus quidem mollitia velit culpa quaerat, dolorem ipsa est facere
            nesciunt, quas possimus voluptate quod nostrum repellendus perferendis accusantium exercitationem dolor cum
            officia architecto! Ut.
            Praesentium itaque suscipit provident a quidem totam minima illo? Quis vero, tempore voluptatum totam porro
            aspernatur sint perspiciatis unde enim, alias cum soluta minus iure quo quos molestiae earum! Doloremque!
            Ut molestiae voluptas dolores mollitia provident a dolore ab, hic maiores in voluptatem voluptate velit
            delectus sunt voluptatibus aperiam inventore odit enim perferendis ullam autem laborum unde? Eaque,
            consequuntur neque?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
    include_once("templates/footer.php");
?>