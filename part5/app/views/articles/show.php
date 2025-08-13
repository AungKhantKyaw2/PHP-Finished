<?php require APPURL.'/views/layout/header.php'?>

    <section class="col-md-12 mx-auto py-5">
        <div class="container">

            <div class="row">
                 <div class="col-md-12 d-flex justify-content-between align-items-center">
                <h3>Articles Show</h3>

                    <a href="<?php echo URLROOT;?>/articles/" class="btn btn-primary btn-sm rounded-0">Back </a>
                            
                 </div>
                    
                <div class="col-md-12">
                    <div class="card  rounded-0">
                        <div class="card-body">
                           <!-- <h5 class="card-title"><?php echo ($datas['article']['title']); ?></h5> -->

                    
                           <h5 class="card-title"><?php echo ($datas['article']['title']); ?></h5>

                           <img src="<?php echo URLROOT.'/public/assets/images/'.$datas['article']['image'] ?>" class="img-thumbnail" alt="" />


                           <h5 class="small">created by: <span class="fw-bold"><?php echo $datas['user']['name']; ?></span> </h5>
                           <p class="small">created at: <span class="fw-bold"><?php echo $datas['article']['created_at']; ?></span></p>
                           <p class="small">category: <span class="fw-bold"><?php echo $datas['category']['name']; ?></span></p>
                           <p class="small">status: <span class="fw-bold"><?php echo $datas['status']['name']; ?></span></p>

                           <p class="small">Content:<?php echo $datas['article']['content'];?></p>
                           
                        </div>  


                        <div class="card-footer">
                           <div class="d-flex float-end">
                                <?php  if($datas['article']['user_id'] ==$_SESSION['user_id']): ?>
                                    <div>
                                            <form action="<?php echo URLROOT;?>/articles/destroy/<?php echo $datas['article']['id']; ?>" method ="POST">
                                                    <input type="submit" class="btn btn-danger btn-sm rounded-0 " value="Delete"/>
                                                </form>
                                        </div>
                                        
                                        <div>
                                        <a href="<?php echo URLROOT;?>/articles/edit/<?php echo $datas['article']['id']; ?>" 
                                        class="btn btn-primary btn-sm rounded-0 mx-3">Edit</a>
                                        </div>
                                <?php endif; ?>
                                        <div>
                                        <!-- <a href="<?php echo URLROOT;?>/articles/show/<?php $datas['article']['id']; ?>" 
                                        class="btn btn-success btn-sm rounded-0">Show</a> -->
                                        <?php
// Generate the full URL for this article's "show" page
$articleShowUrl = URLROOT .'/articles/show/'. $datas['article']['id'];

// Get the current page's URL (ignoring query parameters)
$currentUrl = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$currentUrl = rtrim($currentUrl, '/'); // Remove trailing slash

// Only show the button if NOT on the article's show page
if ($currentUrl !== rtrim($articleShowUrl, '/')) : ?>
    <a href="<?php echo $articleShowUrl; ?>" 
       class="btn btn-success btn-sm rounded-0">Show</a>
<?php endif; ?>
                                        </div>
                           </div>
                        </div>          
                    </div>
             
                                    
                 </div>

                 </div> 
            </div>
           
        </div>
    </section>


<?php require APPURL.'/views/layout/footer.php'?>