<?php require_once('header.php') ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Item</h4>
                </div>
                <div class="card-body">
                  <form action="<?=URL?>adminitem/postUpdate" method="POST" enctype="multipart/form-data">
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
                        <div >
                        <label for="myfile">Image:</label>
                        <input type="file" id="myfile" name="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                        <select name="cat_name" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected disabled>Choose...</option>
                          <?php foreach($data as $value):?>
                          <option value="<?= $value['Name']?>"><?= $value['Name']?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Description About Item.</label>
                            <textarea class="form-control" name="desc" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Item</button>
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


<?php require_once('footer.php')?>