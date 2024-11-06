<!DOCTYPE html>
<html lang="en">
  <head>
    <title> <?= $title ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-theme-neutral-dark);
        background: var(--dl-color-theme-neutral-light);

        fill: var(--dl-color-theme-neutral-dark);
      }
      td {
        text-align: center;
        padding: 5px;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <style>
      @keyframes fade-in-left {
        0% {
          opacity: 0;
          transform: translateX(-20px);
        }
        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }
    </style>
    <link rel="stylesheet" href="<?= site_url('public/css/style.css') ?>" />
    <link href="<?= site_url('public/css/home.css') ?>" rel="stylesheet" />
  </head>
  <body>
      <div>
        <div class="home-container">
          <navbar-wrapper class="navbar-wrapper">
            <!--Navbar component-->
            <header class="navbar-container">
              <header data-thq="thq-navbar" class="navbar-navbar-interactive">
                <img
                  alt="Company Logo"
                  src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/84ec08e8-34e9-42c7-9445-d2806d156403/fac575ac-7a41-484f-b7ac-875042de11f8?org_if_sml=1&amp;force_format=original"
                  class="navbar-image1"
                />
                <div data-thq="thq-navbar-nav" class="navbar-desktop-menu">
                  <nav class="navbar-links1">
                  <a href="<?= base_url('') ?>">
                      <span class="thq-link thq-body-small">
                        <span>Daftar Barang</span>
                      </span>
                      </a>
                      <a href="<?= base_url('outtransaction/') ?>">
                      <span class="thq-link thq-body-small">
                        <span>Barang Keluar</span>
                      </span>
                      </a>
                      <a href="<?= base_url('intransaction/') ?>">
                      <span class="thq-link thq-body-small">
                        <span>Barang Masuk</span>
                      </span>
                      </a>
                  </nav>
                  <?php
                  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
                    <a href="<?= base_url('login/')?>">
                      <div class="navbar-buttons1">
                          <button class="navbar-action11 thq-button-animated thq-button-filled">
                          <span class="thq-body-small">Login</span>
                          </button>
                      </div>
                    </a>
                  <?php else: ?>
                      <div class="navbar-buttons1">
                          <a href="<?= base_url('admin/index/')?>">
                              <button class="navbar-action11 thq-button-animated thq-button-filled">
                              <span class="thq-body-small">Admin Dashboard</span>
                              </button>
                          </a>
                      </div>
                  <?php endif; ?>
                </div>
                <div data-thq="thq-burger-menu" class="navbar-burger-menu">
                  <svg viewBox="0 0 1024 1024" class="navbar-icon1">
                    <path
                      d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                  </svg>
                </div>
                <div data-thq="thq-mobile-menu" class="navbar-mobile-menu">
                  <div class="navbar-nav">
                    <div class="navbar-top">
                      <img
                        alt="Company Logo"
                        src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/84ec08e8-34e9-42c7-9445-d2806d156403/fac575ac-7a41-484f-b7ac-875042de11f8?org_if_sml=1&amp;force_format=original"
                        class="navbar-logo"
                      />
                      <div data-thq="thq-close-menu" class="navbar-close-menu">
                        <svg viewBox="0 0 1024 1024" class="navbar-icon3">
                          <path
                            d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <nav class="navbar-links2">
                      <a href="<?= base_url('') ?>">
                      <span class="thq-link thq-body-small">
                        <span>Daftar Barang</span>
                      </span>
                      </a>
                      <a href="<?= base_url('outtransaction/') ?>">
                      <span class="thq-link thq-body-small">
                        <span>Barang Keluar</span>
                      </span>
                      </a>
                      <a href="<?= base_url('intransaction/') ?>">
                      <span class="thq-link thq-body-small">
                        <span>Barang Masuk</span>
                      </span>
                      </a>
                    </nav>
                  </div>
                  <?php
                  if (!isset($_SESSION['loggen_in']) || $_SESSION['loggen_in'] !== true): ?>
                      <a href="<?= base_url('login/')?>">
                      <div class="navbar-buttons2">
                          <button class="thq-button-filled">Login</button>
                      </div>
                      </a>
                  <?php else: ?>
                      <div class="navbar-buttons2">
                          <a href="<?= base_url('admin/index')?>">
                              <button class="thq-button-filled">Admin Dashboard</button>
                          </a>
                      </div>
                  <?php endif; ?>
                </div>
              </header>
            </header>
          </navbar-wrapper>
