<h1 class="page-title">Plongez au cœur de l’actualité IT, Tech et Digital</h1>
<div class="wrapper">
    <?php if (empty($articles)): ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
    <?php foreach ($articles as $article): ?>

        <a class="card" href="detail.php?id=<?= $article['id'] ?>">
            <div class="card-banner">
                <p class="category-tag popular">Talent-IT</p>
                <img class="banner-img" src='<?= $article['cover'] ?>' alt='<?= $article['title'] ?>'>
            </div>
            <div class="card-body">
                <p class="blog-hashtag">#Sport #Info</p>
                <h2 class="blog-title"><?= $article['title'] ?></h2>
                <p class="blog-description"><?= $article['content'] ?></p>

                <div class="card-profile">
                    <img class="profile-img" src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpYJQKSoM7S75P_KMRtQHqAAIPh133CSxByw&usqp=CAU' alt=''>
                    <div class="card-profile-info">
                        <h3 class="profile-name">Eleanor Pea</h3>
                        <p class="profile-followers">5.2k followers</p>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>



</div>