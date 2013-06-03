<?php 
   //$bg_arr = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15');
   //shuffle($bg_arr);
   /*
   foreach ($bg_arr as $key => $value){
     print $value;
   }
   */
   // $bg_arr = ilearning_get_shuffle_array();
   //print_r($bg_arr); 
   //global $bg_arr;
?>

<?php if (!empty($title)): ?>
  <?php print $title; ?>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>

    <?php print $row; ?>

<?php endforeach; ?>
<?php $count_rows = count($rows); ?>
<?php //print $count_rows; ?>
<?php //print debug($bg_arr); ?>
<?php //foreach ($bg_arr as $key => $value): ?>
<?php //print $key; ?>
    <?php 
	//if($key+1 > $count_rows){ 
	  //print '<li>'.'<img src="'. base_path() . path_to_theme() . '/images/book_' . $value. '.png"/>' . '</li>'; 
	//} 
	?>

<?php //endforeach; ?>


