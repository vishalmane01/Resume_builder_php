<?php
$title = "My Resumes | Resume Builder";
require './assets/includes/header.php';
require './assets/includes/navbar.php';
// $fn->AuthPage();

$resumes = $db->query("SELECT * FROM resumes WHERE user_id = '".$fn->Auth()['id']."' ORDER BY id DESC ");
$resumes = $resumes->fetch_all(1);

?>



    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Resumes</h5>
                <div>
                    <a href="createresume.php" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                </div>
            </div>

<?php 
if($resumes){
    ?>
<div class="d-flex flex-wrap">
<?php
foreach($resumes as $resume){
?>
<div class="col-12 col-md-6 p-2">
        <div class="p-2 border rounded">
            <h5><?=$resume['resume_title']?></h5>
            <p class="small text-secondary m-0" style="font-size:12px"><i class="bi bi-clock-history"></i>
                Last Updated <?=date('d M, Y h:i A', $resume['updated_at'])?>
            </p>
            <div class="d-flex gap-2 mt-1">
                <a href="resume.php?resume=<?=$resume['slug']?>" target="_blank" class="text-decoration-none small"><i class="bi bi-file-text"></i> Open</a>
                <a href="updateresume.php?resume=<?=$resume['slug']?>" class="text-decoration-none small"><i class="bi bi-pencil-square"></i> Edit</a>
                <a href="actions/deleteresume.action.php?id=<?=$resume['id']?>" class="text-decoration-none small"><i class="bi bi-trash2"></i> Delete</a>
                <a href="" class="text-decoration-none small"><i class="bi bi-share"></i> Share</a>
                <a href="actions/clonecv.action.php?resume=<?=$resume['slug']?>" class="text-decoration-none small"><i class="bi bi-copy"></i> Clone</a>
            </div>
        </div>
    </div>
<?php    
}
?>
    
</div>


<?php
}else{
?>
    <div class="text-center py-3 border rounded mt-3" style="background-color: rgba(236, 236, 236, 0.56);">
    <i class="bi bi-file-text"></i> No Resumes Available
</div>
<?php
}
?>     
        </div>
    </div>

<section class="team-section text-center py-5" style="min-height:80vh">

        <div class="container"  >
            <h2 class="mb-5">Our Team</h2>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card team-card" style=" height:300px" >
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Vishal Mane</h5>
                            <p class="card-text">Backend</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card team-card" style=" height:300px">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Het Kalriya</h5>
                            <p class="card-text">Fullstack</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card team-card" style=" height:300px">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Harshal Lambe</h5>
                            <p class="card-text">Frontend</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card team-card" style=" height:300px">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Raj Jadhav</h5>
                            <p class="card-text">UI / UX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<?php
require './assets/includes/footer.php';
?>
