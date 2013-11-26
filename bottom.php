<textarea cols="95" rows="5">
<?php
include('vadmin/db.php');
$result = mysql_query("SELECT * FROM tags ORDER BY tag_id ASC");
while($row = mysql_fetch_assoc($result)){
?>
<div class="taglink"><a href="/categories/<?php echo urlrenamer($row['tag']).".shtml"; ?>" target="_blank" title="<?php echo ucwords($row['tag']); ?> Tubes"><?php echo ucwords($row['tag']); ?></a></div>
<?php
}
?>
</textarea>
teatdgvsff