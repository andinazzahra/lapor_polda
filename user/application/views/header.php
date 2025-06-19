<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lapor POLDA DIY</title>
	<script src="https://cdn.tailwindcss.com">
	<script src="https://cdn.tailwindcss.com></script>
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>

  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  	<style>
  	body {
      font-family: 'Inter', sans-serif;
    }
  	</style>
</head>

<body class="bg-white text-black">
	  <!-- Header -->
	<header class="bg-gray-100 border-b border-gray-300">
	<div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
	<div class="flex items-center space-x-2">
	<img src="<?php echo base_url('../assets/logo.png') ?>" alt="Logi Kepolisian" class="w-10 h-12" height="32"/>
	<div class="text-sm leading-tight">
	<p class="text-1xl font-semibold text-black">Kepolisian</p>
	<p class="text-1xl text-gray-700"> Daerah Istimewa Yogyakarta</p>
	</div>
	</div> 
	<nav class="text-sm font-normal text-black space-x-6">
     <a href="<?php echo base_url('homepage'); ?>" class="hover:underline" href="#">
      Home
     </a>
     <a href="<?php echo base_url('daftar_aduan'); ?>" class="hover:underline" href="#">
      Daftar Aduan
     </a>
    </nav>
	</div>
	</header>

</body>
</html>