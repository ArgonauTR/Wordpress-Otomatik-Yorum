<?php
$all_comments = 0;
$draft_comments = 0;
$publish_comments = 0;

$commentask = $db->prepare("SELECT * FROM $wp_comments");
$commentask->execute();
while ($commentfetch = $commentask->fetch(PDO::FETCH_ASSOC)) {

    if ($commentfetch["comment_approved"] == "1") {
        $publish_comments++;
    }

    if ($commentfetch["comment_approved"] == "0") {
        $draft_comments++;
    }

    $all_comments++;

}

?>

<body>
    <div class="d-flex justify-content-center">
        <div class="row">

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card text-center border-success">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $all_comments; ?></h1>
                        <p class="card-text">Toplam Yorum</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card text-center border-success">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $publish_comments; ?></h1>
                        <p class="card-text">Onaylı Yorum</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card text-center border-success">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $draft_comments; ?></h1>
                        <p class="card-text">Bekleyen Yorum</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h1 class="card-title"><?php if($publish=="1"){echo "Yayın";}else{echo "Taslak";} ?></h1>
                        <p class="card-text">Yayın Durumu</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h1 class="card-title"><?php if($type=="classic"){echo "Klasik";}else{echo "Pro";} ?></h1>
                        <p class="card-text">Görünüm</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo "2.0"; ?></h1>
                        <p class="card-text">Sürüm</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo phpversion(); ?></h1>
                        <p class="card-text">PhP</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo date("H:i");?></h1>
                        <p class="card-text">Sistem Saati</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>