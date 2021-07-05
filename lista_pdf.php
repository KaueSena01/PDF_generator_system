<?php 
	include 'fpdf/fpdf.php';

	class PDF extends FPDF {
		function Header() {

			$this->SetXY(10, 10);
			$this->Rect(10, 10, 190, 280);

			$this->SetFont('Arial','B',15);
			$this->Cell(190, 20,utf8_decode('Usuários cadastrados'),1,0,'C');
			$this->Ln();

			$l=5;
			$this->SetFillColor(232, 232, 232);
			$this->SetTextColor(0, 0, 0);
			$this->SetFont('Arial', 'B', 8);
			$this->Cell(20, $l, '#', 1, 0, 'L', 1);
			$this->Cell(85, $l, 'Nome', 1, 0, 'L', 1);
			$this->Cell(85, $l, 'Email', 1, 0, 'L', 1);
}
		function Footer() {
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');


}
}
	include 'conexao.php';


	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$y = 35;

	$sql = mysqli_query($conn, "SELECT * FROM dados");
	$l = 5;
	while($dados = mysqli_fetch_array($sql)) {
		$id = utf8_decode($dados['0']);
		$nome = utf8_decode($dados['1']);
		$email = utf8_decode($dados['2']);

		$pdf->SetY($y);
		$pdf->SetX(10);
		$pdf->Rect(10, $y, 20, 5);
		$pdf->MultiCell(51, 6, $id, 0, 10);


		$pdf->SetY($y);
		$pdf->SetX(30);
		$pdf->Rect(30, $y, 85, 5);
		$pdf->MultiCell(51, 5, $nome, 0, 10,);

		$pdf->SetY($y);
		$pdf->SetX(115);
		$pdf->Rect(115, $y, 85, 5);
		$pdf->MultiCell(51, 5, $email, 0, 10,);

		$y += $l;
	}

	$pdf->Output();

?>