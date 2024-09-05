<body>
    <div class="d-flex justify-content-center mt-4">
        <?php
        if (@$_GET["alert"] == "login-success") {
            echo '<div class="alert alert-success" role="alert">Giriş başarılı</div>';
        }

        $posts = $db->query("SELECT * FROM $wp_posts WHERE post_status='publish' AND post_type='post' ORDER BY rand() LIMIT 1");
        $post = $posts->fetch(PDO::FETCH_ASSOC);

        ?>
        <div class="card">
            <div class="card-header text-center">
                <h2>
                    <?php echo $post["post_title"]; ?>
                </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="core/comment_add.php">

                    <div class="mb-3">
                        <input class="form-control" name="post_id" value="<?php echo $post["ID"]; ?>" required hidden>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" name="link" value="?status=control" required hidden>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rastgele Yazar Adı</label>
                        <input class="form-control" name="comment_author" value="<?php echo $comment_author =  randomname() . rand(99, 999); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rastgele Yazar Postası Adı</label>
                        <input class="form-control" name="comment_author_email" value="<?php echo permalink($comment_author) . randomservice(); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Yorumunuz</label>
                        <textarea class="form-control" rows="3" name="post_content" placeholder="Yorumunuz giriniz" required></textarea>
                    </div>

                    <div class="form-group d-grid gap-2 col-6 mx-auto text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-primary" name="new_comment">
                            <i class="bi bi-send"></i> Gönder
                        </button>
                    </div>

                </form>
                <div class="text-mute">
                    <p>
                        <b>Not:</b> IP adresi, Tarayıcı bilgileri gibi şeyler rastgele oluşturulup eklenmeye devam ediyor.
                    </p>
                </div>
            </div>
            <div class="card-footer">
                <p>
                    <i class="bi bi-heart-fill"></i> Sadece bir defa bile yorumlarında "https://sosyalseyler.com/" dan bahsedersen bu yazılımı desteklemiş olursun.
                </p>
            </div>
        </div>
    </div>
</body>