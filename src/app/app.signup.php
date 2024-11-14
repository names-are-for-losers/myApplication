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
      <div style="flex: 17; overflow: hidden;">
        <button class="sign_up_header_button">Sign up</button> 
        <button class="header_button">Button example 2</button> 
        <button class="header_button">Button example 3</button> 
        <button class="header_button">Button example 4</button> 
      </div>
      <div id="user-icon" style="flex: 1; overflow: hidden;"><a><img src="default user icon.png" alt="Website icon" width="60px"></a></div>
    </div>
    <div>
      <div id="side_panel">
        <div class="frosted-glass-strong" style="border-radius: 10px 10px 0px 0px; margin: 0; text-align: center; font-weight: bold;">
          Settings
        </div>
        <div class="frosted-glass" style="border-radius: 0px 0px 10px 10px; margin: 0; font-size: 16px; min-height: 200px;">
          Something to be said in the side panel...
        </div>
      </div>
      <div id="content" class="frosted-glass">
        <div class="image-card-holder">
          <div class="image-card" style="background-image: url('event_banner0.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="card-content">
              <h2>Event 1</h2>
              <p>Description of the currently running event.</p>
            </div>
          </div>
          <div class="image-card" style="background-image: url('event_banner1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
              <div class="card-content">
                  <h2>Event 2</h2>
                  <p>Description of the currently running event.</p>
              </div>
          </div>
          <div class="image-card" style="background-image: url('event_banner2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
              <div class="card-content">
                  <h2>Event 3</h2>
                  <p>Description of the currently running event.</p>
              </div>
          </div>
          <div class="image-card" style="background-image: url('event_banner3.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
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
