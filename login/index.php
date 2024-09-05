<body>
    <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-6 mt-5 p-2">
            <?php
            if(@$_GET["alert"]=="pass-failed"){
                echo '<div class="alert alert-danger" role="alert">Tekrar Deneyiniz.</div>';
            }
            if(@$_GET["alert"]=="logout"){
                echo '<div class="alert alert-success" role="alert">Çıkış yaptınız</div>';
            }
            ?>
            <div class="card">
                <div class="card-header text-center">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="card-body">
                    <form method="POST" action="core/login.php">

                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-key"></i> Şifrenizi Giriniz.</label>
                            <input type="password" name="password" class="form-control" placeholder="*****" required>
                            <div class="form-text">Şifrenizi kimseyle paylaşmayınız.</div>
                        </div>

                        <div class="form-group d-grid gap-2 col-6 mx-auto text-center">
                            <button type="submit" class="btn btn-primary" name="login">
                                <i class="bi bi-box-arrow-in-left"></i> Giriş
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>