<h2>Gallery</h2>
        <?php foreach($pictures as $value => $key):?>
            <a href="gallery_img/big/<?=$key?>">
                <img src="gallery_img/small/<?=$key?>" alt="photo">
            </a>
          
        <?php endforeach; ?>

<h3>Загрузить изображение</h3> 
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" name="load" value="Загрузить">
    </form> 