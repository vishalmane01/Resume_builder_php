<?php
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<a href="whatsapp://send?text=<?=$actual_link?>" class="btn btn-light btn-sm"><i class="bi bi-whatsapp"></i> Share </a>