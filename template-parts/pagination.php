<?php if (paginate_links()):  ?>
<!-- pagenation -->
<div class="pagenation">

<?php 
echo 
paginate_links(
array(
'mid_size' => 1, //もし2に変更した場合、両方のファイルを修正する必要がある
'prev_next' => true,
'prev_text' => '<i class="fas fa-angle-left"></i>',
'next_text' => '<i class="fas fa-angle-right"></i>',
)
);
?>

</div><!-- /pagenation -->
</php endif; ?>





