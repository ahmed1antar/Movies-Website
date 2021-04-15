<?php require_once('header.php') ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Category</h4>
                </div>
                <div class="card-body">
                  <form action="<?=URL?>admincategory/postUpdate" method="POST">
                    <input type="hidden" name="name1" value="<?=$name?>">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Description About Category.</label>
                            <textarea class="form-control" name="desc" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>


<?php require_once('footer.php') ?>