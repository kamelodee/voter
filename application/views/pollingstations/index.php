<?php   $this->load->view('/templates/header'); ?>
<div class="container"> 
  <h1 class="text-center">List of Polling Stations</h1>
<a href="<?= base_url('pollingstation/create') ?>"    class="btn-bg btn mb-1">Create New</a>
<table class="table table-bordered" id="voters-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Polling station Name</th>
      <th scope="col">Location</th>
      <th scope="col" class="text-center">Actions</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
            foreach($pollingstations as $value){
        ?>
    <tr>
      <th scope="row"> <?php echo $value->id; ?></th>
      <td> <?php echo $value->name; ?></td>
      <td><?php echo $value->location; ?></td>
      <td class="text-center">
          <a href="<?= base_url('pollingstation/edit') ?>/<?= $value->id; ?>" class="btn btn-bg">Edit</a>
         
          <a href="<?= base_url('pollingstation/delete') ?>/<?= $value->id; ?>" class="btn btn-danger">Delete</a>
    
    </td>
    </tr>
    <?php
            }
        ?>
  </tbody>
</table>

</div>
<?php   $this->load->view('/templates/footer'); ?>

    