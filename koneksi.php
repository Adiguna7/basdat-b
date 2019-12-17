<?php
$koneksi = mysqli_connect("localhost", "root", "123", "banin");

if (!$koneksi){
	echo "koneksi gagal";
}

function registrasi($data){
	global $koneksi;
	
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi ,$data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

	//cek username
	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
	// var_dump($result); die;

	if(mysqli_fetch_assoc($result)){
		echo 
		"
		<script>
			alert('Username sudah ada')
		</script>
		";
		return false;

	}
	
	//cek konfirmasi password
	if($password !== $password2){
		echo
		"<script>
			alert('password tidak sesuai');
		</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	// tambah data
	mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '$username', '$password')");

	//cek berhasil atau tidak
	return mysqli_affected_rows($koneksi); 

}

?>