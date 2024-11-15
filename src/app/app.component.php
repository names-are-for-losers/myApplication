<?php
  session_start();
  phpinfo();
  
  require 'config.php';
  $_SESSION['loggedin'] = false;
  $_SESSION['username'] = 'Ahmed';
?>
<head>
  <title>Game getter</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="Ahmed M. Hassan" content="booking, events, mangos, seats, and appointments">
  <meta charset="utf-8">
</head>
<style>
    
</style>

<div id="top-line"></div>
<img id="banner" src="banner.png" alt="banner">
<body>
  <div class="background">
    <div id="header" style="display: flex; text-align: center;">
      <div id="header_logo"><a routerLink="/" aria-label="Go to Home"><img src="favicon.ico" alt="Website icon" width="60px"></a></div>
      <form style="flex: 15; overflow: hidden;">
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
          <a class="sign_up_header_button" (click)="goToSignUp()">Sign Up</a>
        <?php else: ?>
          <a class="header_button" (click)="goToSignUp()">Logout</a>
        <?php endif; ?>
        <a class="header_button">Running events</a> 
        <a class="header_button">Available bookings</a> 
        <a class="header_button">Book an apointments</a> 
      </form>
      <div id="user-icon" style="flex: 1; overflow: hidden;"><a><img src="default user icon.png" alt="Website icon" width="60px"></a></div>
    </div>
    <div>
      <div id="side_panel">
        <div class="frosted-glass-strong side_panel_top">
          Side panel
        </div>
        <div class="frosted-glass side_panel_bottom">
          Something to be said in the side panel...
        </div>
      </div>
      <div id="content" class="frosted-glass">
        <div class="image-card-holder">
          <div class="image-card" style="background-image: url('event_banner0.png')">
            <div class="card-content">
              <h2>Event 1</h2>
              <p>Description of the currently running event.</p>
            </div>
          </div>
          <div class="image-card" style="background-image: url('event_banner1.png')">
              <div class="card-content">
                  <h2>Event 2</h2>
                  <p>Description of the currently running event.</p>
              </div>
          </div>
          <div class="image-card" style="background-image: url('event_banner2.png')">
              <div class="card-content">
                  <h2>Event 3</h2>
                  <p>Description of the currently running event.</p>
              </div>
          </div>
          <div class="image-card" style="background-image: url('event_banner3.png')">
              <div class="card-content">
                  <h2>Event 4</h2>
                  <p>Description of the currently running event.</p>
              </div>
          </div>
        </div>
        <p>Some stuff here for main content. Events will be shown first, then any upcoming bookings, or apointments..</p>
      </div>
    </div>
    <footer>
      <p>
        &copy;   Copyright 2023 (Ahmed M. Hassan, Zoya Shaikh, Akhmad Masri, & Zeyad Abdalaziz) SWEN.261.600 - <a href="mailto:amh8077@rit.edu">Email us</a><br>
        Customer Support UAE <a href="tel:+971526198772">+971-52-619-8772</a>
      </p>
    </footer>
  </div>
</body>

<router-outlet />
