<?php


//isi email
$bodyContent = '<h1>Reminder Kontrak Pegawai yang akan/sudah habis</h1>';
$bodyContent .= '<p>Segera Perbaharui atau Hapus kontrak</p>';
$bodyContent .= '<table border=1>
					<tr>
						<th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Habis Kontrak</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Sisa</th>
                        <th>Aksi</th>
					</tr>';


$bodyContent .= '</table>';

//jika ada pegawai yang kontraknya akan/sudah habis maka...

	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'eplace911@gmail.com';		  // SMTP username
	$mail->Password = 'mantuanbatur'; 					// SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;  

	$mail->setFrom('deny.masatu@mncgroup.com', 'a');
	$mail->addReplyTo('deny.masatu@mncgroup.com', 'EPLACE');

	//get and add recipient
	// $sql2=mysql_query("SELECT * from hrd");
	// while ($data2=mysql_fetch_array($sql2)) {
	// 	$mail->addAddress($data2['email']);   // Add a recipient
	// }
	$mail->addAddress('eggy.sudianto@gmail.com');   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);  // Set email format to HTML



	$mail->Subject = 'Reminder Kontrak Inews';
	$mail->Body    = $bodyContent;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

?>
