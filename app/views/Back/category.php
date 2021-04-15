<?php require_once('header.php') ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Categories Table</h4>
                  <div><a href="<?=URL?>admincategory/add" class="btn btn-success">ADD</a></div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Name
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Date
                        </th>
                        
                        <th>
                          Update
                        </th>
                        <th>
                          Delete
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data as $value):?>
                        <tr>
                          
                          <td>
                          <?=$value['Name']?>
                          </td>
                          <td>
                          <?=$value['Description']?>
                          </td>
                          <td>
                          <?=$value['Date']?>
                          </td>
                          <td>
                            <a href="<?=URL?>admincategory/update/<?=$value['Name']?>" class="btn btn-warning">Update</a>
                          </td>
                          <td class="text-primary">
                            <a href="<?=URL?>admincategory/delete/<?=$value['Name']?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>

<?php require_once('footer.php') ?>