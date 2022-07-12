<?php 

	require "vendor/autoload.php";

	use Spipu\Html2Pdf\Html2Pdf;
	use Spipu\Html2Pdf\Exception\Html2PdfException;
	use Spipu\Html2Pdf\Exception\ExceptionFormatter;

	try{

		$html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8', [0,0,0,0]);
		$html2pdf->pdf->SetDisplayMode('fullpage');
		ob_start();
		include "sample.php";
		$content = ob_get_clean();
		$html2pdf->writeHTML($content);
		error_reporting(0);
		$html2pdf->createIndex('', 30, 12, false, true, 1, "helvetica");
		$html2pdf->output("sample.pdf");

	}catch (Html2PdfException $e){

		$formatter = new ExceptionFormatter($e);
		echo $formatter->getHtmlMessage();

	}
 ?>