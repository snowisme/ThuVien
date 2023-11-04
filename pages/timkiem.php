<?php
if (isset($_GET['page']) && $_GET['page'] == 'theloai') {
    if (isset($_GET['id'])) {
        $content = $_GET['id'];
    }
}
else {
    $content = 'Kết quả tìm kiếm';
}


$tensach = $_GET['search'];
$sql = "SELECT *
			FROM sach s
			WHERE s.ten LIKE '%".$tensach."%';";
	$result = mysqli_query($conn, $sql);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}

?>

<style>
    .author,
    .pushlish-year {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ccc;
}
/* .hover-book:hover .author {
    display: block;
} */
</style>
<div class="name"><?php echo $content; ?>
<div id="author-info"></div>   
</div>
<div class="content">

    <?php
        foreach ($data as $key => $value) {
            echo '<div class="box hover-book">
                    <div class="img">
                        <a href="index.php?page=sach&id='.$value['id'].'"><img src="'. $path_img . $value['hinhanh'] .'" alt="name"></a>
                     </div>
                    <div class="namesach">
                        <a href="index.php?page=sach&id='.$value['id'].'">'.$value['ten'].'</a>
                        <span class="author">Tác giả: '.$value['tacgia'].'</span>
                        <span class="pushlish-year">Năm xuất bản: '.$value['namxb'].'</span>                                        
                     </div>            
                </div> ';
        }
    ?>


    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</script>