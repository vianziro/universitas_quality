<?php 	//Menentukan gambar utk setiap tipe kamar		function pilih_foto($tipe_kamar) {				$foto_kamar = "";				if($tipe_kamar == "Superior") {											$foto_kamar = "img/room-img/superior.jpg";											} else if($tipe_kamar == "Deluxe") {			$foto_kamar = "img/room-img/deluxe.jpg";		} else if($tipe_kamar == "Bussiness") {			$foto_kamar = "img/room-img/business.jpg";		} else if($tipe_kamar == "Executive") {			$foto_kamar = "img/room-img/executive.jpg";		} else if($tipe_kamar == "Suite") {			$foto_kamar = "img/room-img/suite.jpg";		}			return $foto_kamar;		}							?>