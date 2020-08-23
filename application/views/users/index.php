<?php   $this->load->view('/templates/header'); ?>

<div class="container">

<h1 class="text-center">Registered Users</h1>
<table class="table table-bordered" id="voters-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Member Type</th>
      <th scope="col">Polling Staion</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
  <?php
            foreach($users as $value){
        ?>
    <tr>
      <th scope="row"><?php echo $value->id; ?></th>
      <td><?php echo $value->fullname; ?></td>
      <td> <?php echo $value->birthdate; ?></td>
      <td><?php echo $value->phone_number; ?> </td>
      <td> <?php echo $value->membertype; ?>  </td>
      <td> <?php echo $value->polling_station; ?>  </td>
      <td><?php echo $value->location; ?> </td>
    </tr>
    <?php
            }
        ?>
   
  </tbody>
</table>

</div>

<?php   $this->load->view('/templates/footer'); ?>


    