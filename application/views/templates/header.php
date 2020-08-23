<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voters</title> 
     
<link rel="stylesheet"  href="<?= base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
</head>
<body class="container_">
<div class="">

<nav class="navbar navbar-expand-lg  p-3 navbar-light">
  <a class="navbar-brand brand" href="#">Voters</a>
  <button class="navbar-toggler toggle-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <?php if (!empty($this->session->userdata('USER_ID')) && $this->session->userdata('USER_ID') > 0) { ?>
                    <!-- User isLogin -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link"  href="<?= base_url('dashboard')?>">Dashboard</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?= base_url('profile')?>">Profile</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link"  href="<?= base_url('pollingstations')?>">Polling Station</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link"  href="<?= base_url('users')?>">Users</a>
          </li>
          <li class="nav-item <">
            <a class="nav-link"  href="<?= base_url('membertype')?>">Member Types</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/logout')?>">Logout</a>
          </li>
        </ul>
				<?php } else { ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
          </li>
        </ul>
				<?php } ?>
  </div>
</nav>
