<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?= session()->get('nama_user') . " | " . $title; ?></title>

  <!-- search -->
  <style>
    .leaflet-container .leaflet-control-search {
      position: relative;
      float: left;
      background: #fff;
      color: #1978cf;
      border: 2px solid rgba(0, 0, 0, 0.2);
      background-clip: padding-box;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      background-color: rgba(255, 255, 255, 0.8);
      z-index: 1000;
      margin-left: 10px;
      margin-top: 10px;
    }

    .leaflet-control-search.search-exp {
      /*expanded*/
      background: #fff;
      border: 2px solid rgba(0, 0, 0, 0.2);
      background-clip: padding-box;
    }

    .leaflet-control-search .search-input {
      display: block;
      float: left;
      background: #fff;
      border: 1px solid #666;
      border-radius: 2px;
      height: 22px;
      padding: 0 20px 0 2px;
      margin: 4px 0 4px 4px;
    }

    .leaflet-control-search.search-load .search-input {

      background: url('<?= base_url() ?>/search/images/loader.gif') no-repeat center right #fff;
    }

    .leaflet-control-search.search-load .search-cancel {
      visibility: hidden;
    }

    .leaflet-control-search .search-cancel {
      display: block;
      width: 22px;
      height: 22px;
      position: absolute;
      right: 28px;
      margin: 6px 0;
      background: url('<?= base_url() ?>/search/images/search-icon.png') no-repeat 0 -46px;
      text-decoration: none;
      filter: alpha(opacity=80);
      opacity: 0.8;
    }

    .leaflet-control-search .search-cancel:hover {
      filter: alpha(opacity=100);
      opacity: 1;
    }

    .leaflet-control-search .search-cancel span {
      display: none;
      /* comment for cancel button imageless */
      font-size: 18px;
      line-height: 20px;
      color: #ccc;
      font-weight: bold;
    }

    .leaflet-control-search .search-cancel:hover span {
      color: #aaa;
    }

    .leaflet-control-search .search-button {
      display: block;
      float: left;
      width: 30px;
      height: 30px;
      background: url('<?= base_url() ?>/search/images/search-icon.png') no-repeat 4px 4px #fff;
      border-radius: 4px;
    }

    .leaflet-control-search .search-button:hover {
      background: url('<?= base_url() ?>/search/images/search-icon.png') no-repeat 4px -20px #fafafa;
    }

    .leaflet-control-search .search-tooltip {
      position: absolute;
      top: 100%;
      left: 0;
      float: left;
      list-style: none;
      padding-left: 0;
      min-width: 120px;
      max-height: 122px;
      box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.4);
      background-color: rgba(0, 0, 0, 0.25);
      z-index: 1010;
      overflow-y: auto;
      overflow-x: hidden;
      cursor: pointer;
    }

    .leaflet-control-search .search-tip {
      margin: 2px;
      padding: 2px 4px;
      display: block;
      color: black;
      background: #eee;
      border-radius: .25em;
      text-decoration: none;
      white-space: nowrap;
      vertical-align: center;
    }

    .leaflet-control-search .search-button:hover {
      background-color: #f4f4f4;
    }

    .leaflet-control-search .search-tip-select,
    .leaflet-control-search .search-tip:hover {
      background-color: #fff;
    }

    .leaflet-control-search .search-alert {
      cursor: pointer;
      clear: both;
      font-size: .75em;
      margin-bottom: 5px;
      padding: 0 .25em;
      color: #e00;
      font-weight: bold;
      border-radius: .25em;
    }
  </style>

  <link rel="stylesheet" href="<?= base_url() ?>/search/dist/style.css" />
  <link rel="stylesheet" href="<?= base_url() ?>/leaflet/leaflet.ajax.js" />


  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="<?= base_url() ?>/dist/js/klik.js"></script>
  <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>

  <!-- Semantic UI -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.0/dist/semantic.min.css">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>

  <!-- Extra Markers -->
  <link rel="stylesheet" href="<?= base_url() ?>/dist/css/leaflet.extra-markers.min.css" />
  <script src="<?= base_url() ?>/dist/js/leaflet.extra-markers.min.js"></script>

  <script href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"> </script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

  <!-- Sweet Alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

  <style>
    a,
    p {
      font-size: 10pt;
      margin: 0;
    }
  </style>

  <!-- Dropdown -->
  <style>
    @media (min-width: 992px) {
      .dropdown-menu .dropdown-toggle:after {
        border-top: .3em solid transparent;
        border-right: 0;
        border-bottom: .3em solid transparent;
        border-left: .3em solid;
      }

      .dropdown-menu .dropdown-menu {
        margin-left: 0;
        margin-right: 0;
      }

      .dropdown-menu li {
        position: relative;
      }

      /* .nav-item .submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
      }

      .nav-item .submenu-left {
        right: 100%;
        left: auto;
      }

      */
      .dropdown-menu>li:hover {
        background-color: #f1f1f1;
      }

      .dropdown-menu>li:hover>.submenu {
        display: block;
        margin-top: -30%;
      }
    }
  </style>

  <!-- Animated Collapsibles -->
  <style>
    .collapsible {
      cursor: pointer;
      border: none;
      text-align: left;
      outline: none;
    }

    .collapsible:after {
      content: '\002B';
      font-size: 16pt;
      font-weight: bold;
      float: right;
    }

    .active:after {
      content: "\2212";
    }

    .konten {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-out;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">