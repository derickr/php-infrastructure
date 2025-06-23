<?php
$presentationDir = 'presentations';
$baseDir = '/';
$showScript = 'show';
$showSpecialScript = 's2';
$helpPage = 'help.php';
$baseFontSize = '10pt';
$flashFontScale = 18;
$pdfFontScale = 12;
$pdfResourceFile = '/usr/local/share/fonts/pdflib.upr';
$pdf_font = "Times-Roman";  // Look in your pdfResourceFile for more options
$pdf_font_bold = "Times-Bold";
$pdf_example_font = "Courier";
$jsKeyboard = true; // enable javascript handling of keyboard events
$topic_cols = 3;

// Convert em font sizing to flash font sizes
function flash_fixsize($ht)
{
    global $flashFontScale;

    if (strstr($ht, 'em')) {
        $ht = ((float) $ht * $flashFontScale);
    }
    return $ht;
}

function pdf_fixsize($ht)
{
    global $pdfFontScale;

    if (strstr($ht, 'em')) {
        $ht = ((float) $ht * $pdfFontScale);
    }
    return $ht;
}
