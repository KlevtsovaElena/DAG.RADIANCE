<?php require_once('../classes/autoload.php'); ?>
<?php $profile = require('works/check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../client/css/style.css">  
    <link rel="stylesheet" href="css/admin.css">


</head>
<body>
    
    <div id="containerPage">
        <div class="cabinet">
        <?php include "cabinet-menu.php";?>

            <div class="work-area">
                <div class="work-area__title">
                    <h1>ОТЗЫВЫ</h1>
                </div>
            
                <div class="work-area__contaner">
                    <div class="catalog-container">

                        <!-- НОВЫЕ ОТЗЫВЫ -->
                        <div class="new-reviews">
                            <div class="reviews-category">Новые отзывы на проверку</div>


                            <div class="new-reviews__container">
                                <?php
                                    $reviews = Reviews::getLinesApiStatus(2); 
                                    foreach ($reviews as $review) {
                                        $date = new DateTime($review['date-time'], new DateTimeZone('Etc/GMT'));
                                        $date->setTimeZone(new DateTimeZone('Europe/Moscow'));
                                        
                                ?>

                                <div class="reviews"> 
                                    <form class="form-feedback-new" method="post">
                                        <input type="hidden" name="id" value="<?=$review['id'];?>">
                                        <input type="hidden" id="photo" name="photo" value="<?=$review['photo'];?>">
                                        <input type="hidden" id="name" name="name" value="<?=$review['name'];?>" readonly>
                                        <input type="hidden" id="date-reg" name="date-time" value="<?=$review['date-time'];?>" readonly>
                                        <input type="hidden" id="rating" name="rating" value="<?=$review['rating'];?>" readonly>
                                        <input type="hidden" id="title" name="title"  value="<?=$review['title'];?>" readonly>
                                        <input type="hidden" id="description" name="description" value="<?=$review['description'];?>" readonly>
                                        <input type="hidden" id="connection" name="connection" value="<?=$review['connection'];?>" readonly>
                                        


                                        <div class="ta-center">
                                            <input class="btn-admin" type="submit" formaction="works/edit-review.php?status=1" formmethod="post" value="ОПУБЛИКОВАТЬ" />
                                            <input class="btn-admin btn-delete" type="submit" formaction="works/edit-review.php?status=0" formmethod="post" value="НЕ ПУБЛИКОВАТЬ" />
                                        </div>

                                        <div class="section1">
                                            <div class="avatar">
                                                <div class="photo-avatar" style="background-image: url('../client/<?=$review['photo'];?>');"></div>
                                            </div>
                                            <div class="section1__2">
                                                <div class="name-guest"><?=$review['name'];?> </div> <span>от <?=$date->format('d.m.Y H:i');?></span><br>
                                                <span>Рейтинг:</span><div class="rating"><?=$review['rating'];?></div>
                                            </div>
                                        </div>

                                        <div class="title-review"><?=$review['title'];?></div>
                                        <div class="text-review"><?=$review['description'];?></div>
                                        <div class="connection-guest">Способ связи: 
                                            <div><?=$review['connection'];?></div>
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- ОПУБЛИКОВАННЫЕ ОТЗЫВЫ -->
                        <div class="view-reviews">
                            <span title="показать" class="show-reviews" onclick="showViewReviews()">&#128065; </span><div class="reviews-category">Опубликованные отзывы</div>
                        
                            <div class="view-reviews__container d-none">
                                <?php
                                    $reviews = Reviews::getLinesApiStatus(1); 
                                    foreach ($reviews as $review) {
                                        $date = new DateTime($review['date-time'], new DateTimeZone('Etc/GMT'));
                                        $date->setTimeZone(new DateTimeZone('Europe/Moscow'));
                                ?>

                                <div class="reviews"> 
                                    <form class="form-feedback-new" method="post">
                                        <input type="hidden" name="id" value="<?=$review['id'];?>">
                                        <input type="hidden" id="photo" name="photo" value="<?=$review['photo'];?>">
                                        <input type="hidden" id="name" name="name" value="<?=$review['name'];?>" readonly>
                                        <input type="hidden" id="date-reg" name="date-time" value="<?=$review['date-time'];?>" readonly>
                                        <input type="hidden" id="rating" name="rating" value="<?=$review['rating'];?>" readonly>
                                        <input type="hidden" id="title" name="title"  value="<?=$review['title'];?>" readonly>
                                        <input type="hidden" id="description" name="description" value="<?=$review['description'];?>" readonly>
                                        <input type="hidden" id="connection" name="connection" value="<?=$review['connection'];?>" readonly>
                                        
                                        <div class="ta-center">
                                            <input class="btn-admin btn-delete" type="submit" formaction="works/edit-review.php?status=0" formmethod="post" value="СНЯТЬ С ПУБЛИКАЦИИ" />
                                        </div>

                                        <div class="section1">
                                            <div class="avatar">
                                                <div class="photo-avatar" style="background-image: url('../client/<?=$review['photo'];?>');"></div>
                                            </div>
                                            <div class="section1__2">
                                                <div class="name-guest"><?=$review['name'];?> </div> <span>от <?=$date->format('d.m.Y H:i');?></span><br>
                                                <span>Рейтинг:</span><div class="rating"><?=$review['rating'];?></div>
                                            </div>
                                        </div>

                                        <div class="title-review"><?=$review['title'];?></div>
                                        <div class="text-review"><?=$review['description'];?></div>
                                        <div class="connection-guest">Способ связи: 
                                            <div><?=$review['connection'];?></div>
                                        </div>
                                        
                                    </form>
                                    
                                </div>

                                <?php } ?>
                            </div>
                        </div>

                        <!-- СНЯТЫЕ С ПУБЛИКАЦИИ -->
                        <div class="hidden-reviews">
                            <span title="показать" class="show-reviews" onclick="showHiddenReviews()">&#128065; </span><div class="reviews-category">Снятые с публикации отзывы</div>
                        
                            <div class="hidden-reviews__container d-none">
                                <?php
                                    $reviews = Reviews::getLinesApiStatus(0); 
                                    foreach ($reviews as $review) {
                                        $date = new DateTime($review['date-time'], new DateTimeZone('Etc/GMT'));
                                        $date->setTimeZone(new DateTimeZone('Europe/Moscow'));
                                ?>

                                <div class="reviews"> 
                                    <form class="form-feedback-new" method="post">
                                        <input type="hidden" name="id" value="<?=$review['id'];?>">
                                        <input type="hidden" id="photo" name="photo" value="<?=$review['photo'];?>">
                                        <input type="hidden" id="name" name="name" value="<?=$review['name'];?>" readonly>
                                        <input type="hidden" id="date-reg" name="date-time" value="<?=$review['date-time'];?>" readonly>
                                        <input type="hidden" id="rating" name="rating" value="<?=$review['rating'];?>" readonly>
                                        <input type="hidden" id="title" name="title"  value="<?=$review['title'];?>" readonly>
                                        <input type="hidden" id="description" name="description" value="<?=$review['description'];?>" readonly>
                                        <input type="hidden" id="connection" name="connection" value="<?=$review['connection'];?>" readonly>
                                        
                                        <div class="ta-center">
                                            <input class="btn-admin" type="submit" formaction="works/edit-review.php?status=1" formmethod="post" value="ОПУБЛИКОВАТЬ" />
                                        </div>

                                        <div class="section1">
                                            <div class="avatar">
                                            <div class="photo-avatar" style="background-image: url('../client/<?=$review['photo'];?>');"></div>
                                            </div>
                                            <div class="section1__2">
                                                <div class="name-guest"><?=$review['name'];?> </div> <span>от <?=$date->format('d.m.Y H:i');?></span><br>
                                                <span>Рейтинг:</span><div class="rating"><?=$review['rating'];?></div>
                                            </div>
                                        </div>

                                        <div class="title-review"><?=$review['title'];?></div>
                                        <div class="text-review"><?=$review['description'];?></div>
                                        <div class="connection-guest">Способ связи: 
                                            <div><?=$review['connection'];?></div>
                                        </div>
                                        
                                    </form>
                                    
                                </div>

                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="js/main.js"></script>
</body>
</html>