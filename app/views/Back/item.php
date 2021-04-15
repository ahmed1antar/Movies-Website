
<?php require_once('header.php') ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Items Table</h4>
                  <div><a href="<?=URL?>adminitem/add" class="btn btn-success">ADD</a></div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Video
                        </th>
                        <th>
                          Cat_Name
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
                            <?=$value['ID']?>
                          </td>
                          <td>
                          <?=$value['Name']?>
                          </td>
                          <td>
                          <?=$value['Description']?>
                          </td>
                          <td>
                            <img src="<?=URL . $value['Image']?>" width="100px" height="100px" alt="">
                          
                          </td>
                          <td>
                            <video width="100px" height="100px" controls>
                              <source src="<?=URL . $value['Video']?>" type="video/mp4">
                            </video>
                          </td>
                          <td>
                          <?=$value['Cat_Name']?>
                          </td>
                          <td>
                          <?=$value['Date']?>
                          </td>
                          <td>
                            <a href="<?=URL?>adminitem/update/<?=$value['ID']?>" class="btn btn-warning">Update</a>
                          </td>
                          <td class="text-primary">
                            <a href="<?=URL?>adminitem/delete/<?=$value['ID']?>" class="btn btn-danger">Delete</a>
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