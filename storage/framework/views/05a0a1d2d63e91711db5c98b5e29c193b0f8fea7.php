<?php
  $conn = new mysqli ("localhost", "root", "", "laravel");
  $p = DB::table ('products')->count ();
  $nachal = $_GET ["nachal"] ?? null;
  $conec = $_GET ["conec"] ?? null;
  $stranici = 20;
  if ($conec) {
    $result = $conn->query("SELECT * FROM products  LIMIT $nachal, $conec");
  } else {
    $nachal = $p - $stranici;
    $conec = $p;
    $result = $conn->query("SELECT * FROM products  LIMIT $nachal, $conec");}
    $f=0;
    $i=0;
    $arr = [];
    while ($id = mysqli_fetch_row($result)) {
      $arr[] = 	$id[0];
      $f++;
    }
 ?>

<div class="container overflow-hidden">
  <div class="row gy-5">
    <?php foreach( array_chunk($arr, 4) as $value): ?>
    <?php foreach($value as $item): ?>
      <div class="col-6">
        <div class="p-3 border bg-light"> <?php echo $__env->make('card_pagin', ['key'=>'item'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div>
      </div>
    <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</div>
<table class="table table-borderless">
<tr>
<?php
$k =0;
$i = $p;
$ii = $i/$stranici;
$iii = ceil($ii);
for ($scht=1 ;$scht <= $iii; $scht++) {
  echo "<td>";
?>


  <a href="/?nachal=<?= 0 + ($k * 20)?>&conec=<?= 20 ?>"><button type="button" class="btn btn-warning"><?= $scht?></button></a>
<?php
  echo  "</td>";
  $k++;
}
?>
  </tr>
</table>
<?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/paginac.blade.php ENDPATH**/ ?>