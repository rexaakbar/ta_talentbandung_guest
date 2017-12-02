<?php 

	session_start();
	$con = new mysqli('localhost','root','','jarambah');

	class data{
		function data_recent_news(){
			global $con;
			$query_1 = $con->query("SELECT * FROM article ORDER BY created_at DESC LIMIT 2  ");
			$i = 0;
			while ($row_1 = $query_1->fetch_assoc()) {
			    $resultData[$i]['nama_wisata'] = $row_1['nama_wisata'];
			    $resultData[$i]['isi_konten'] = $row_1['isi_konten'];
			    $i = $i + 1;
			}
			$resultEncoded = json_encode($resultData);
			$resultDecoded = json_decode($resultEncoded);

			return $resultDecoded;
		}
	}

	$data = new data();
?>