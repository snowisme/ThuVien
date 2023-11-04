<?php
if (isset($_GET['page']) && $_GET['page'] == 'theloai') {
    if (isset($_GET['id'])) {
        $content = $_GET['id'];
    }
}
else {
    $content = 'Tất cả sách';
}

?>

<style>
    .author-info {
    display: none;
}
#hover-book:hover .author-info {
    display: block;
}
</style>
<div class="name"><?php echo $content; ?>

</div>
<div class="content">

    <?php
        foreach ($sach as $key => $value) {
            echo '<div class="box" id="hover-book">
                    <div class="img">
                        <a href="index.php?page=sach&id='.$value['id'].'"><img src="'. $path_img . $value['hinhanh'] .'" alt="name"></a>
                     </div>
                    <div class="namesach">
                        <a href="index.php?page=sach&id='.$value['id'].'">'.$value['ten'].'</a>
                        <div class="author-info">
                        <span class="author">Tác giả: '.$value['tacgia'].'</span>
                        <span class="pushlish-year">Năm xuất bản: '.$value['namxb'].'</span>
                        </div>                                           
                     </div>            
                </div> ';
        }
    ?>


    
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.hover-book').hover(function() {
            var authorInfo = $(this).find('.author').text();
            var pushlishYear = $(this).find('.pushlish-year').text();
            $('#author-info').text(authorInfo + ' - ' + pushlishYear );
        }, function() {
            $('#author-info').text('');
        });
    });
</script> -->