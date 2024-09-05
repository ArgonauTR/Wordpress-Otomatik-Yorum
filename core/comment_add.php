<?php
// Varsayılan gerekli bilgiler getiriliyor.
include("../codex.php");

// Yorum isteği kontrol ediliyor.
if (isset($_POST["new_comment"])) {

    //gelen link alınıyor
    $link = $_POST["link"];

    // Veriler hazırlanıyor
    $comment_post_ID = $_POST['post_id'];
    $comment_author = $_POST["comment_author"];
    $comment_author_email = $_POST["comment_author_email"];
    $comment_author_url = "";
    $comment_author_IP = rand(11, 999) . '.' . rand(11, 999) . '.' . rand(11, 999) . '.' . rand(11, 999);
    $comment_date = date('Y-m-d H:i:s');
    $comment_date_gmt = date('Y-m-d H:i:s');
    $comment_content = $_POST['post_content'];
    $comment_karma = 0;
    $comment_approved = $publish;
    $comment_agent = $_SERVER['HTTP_USER_AGENT'];
    $comment_type = "comment";
    $comment_parent = 0;
    $user_id = 0;

    $wp_comments = $db->prepare("INSERT into $wp_comments set
        comment_post_ID=:comment_post_ID,
        comment_author=:comment_author,
        comment_author_email=:comment_author_email,
        comment_author_url=:comment_author_url,
        comment_author_IP=:comment_author_IP,
        comment_date=:comment_date,
        comment_date_gmt=:comment_date_gmt,
        comment_content=:comment_content,
        comment_karma=:comment_karma,
        comment_approved=:comment_approved,
        comment_agent=:comment_agent,
        comment_type=:comment_type,
        comment_parent=:comment_parent,
        user_id=:user_id
        ");

    $insert = $wp_comments->execute(array(

        'comment_post_ID' => $comment_post_ID,
        'comment_author' => $comment_author,
        'comment_author_email' => $comment_author_email,
        'comment_author_url' => $comment_author_url,
        'comment_author_IP' => $comment_author_IP,
        'comment_date' => $comment_date,
        'comment_date_gmt' => $comment_date_gmt,
        'comment_content' => $comment_content,
        'comment_karma' => $comment_karma,
        'comment_approved' => $comment_approved,
        'comment_agent' => $comment_agent,
        'comment_type' => $comment_type,
        'comment_parent' => $comment_parent,
        'user_id' => $user_id
    ));

    if ($insert) {
        header("Location: ../index.php".$link);
        exit();
    } else {
        header("Location: ../index.php".$link);
        exit();
    }
}
