<?php
header('Content-Type: application/json');

// Muat data JSON
$dataFile = 'data.json';
$data = json_decode(file_get_contents($dataFile), true);

// Ambil pertanyaan
$question = isset($_POST['question']) ? strtolower(trim($_POST['question'])) : '';

if (empty($question)) {
    echo json_encode([
        'status' => 'error',
        'response' => $data['default_responses']['tidak_mengerti']
    ]);
    exit;
}

// Respon terima kasih
if (preg_match('/\b(terima kasih|makasih)\b/i', $question)) {
    echo json_encode([
        'status' => 'success',
        'response' => $data['default_responses']['terimakasih']
    ]);
    exit;
}

// Respon salam
if (preg_match('/\b(halo|hai|selamat)\b/i', $question)) {
    echo json_encode([
        'status' => 'success',
        'response' => $data['default_responses']['salam']
    ]);
    exit;
}

// Fungsi cek keyword lebih akurat
function matchKeyword($text, $keyword) {
    return preg_match('/\b' . preg_quote($keyword, '/') . '\b/i', $text);
}

$foundResponse = null;

// Cari jawaban berdasarkan keyword
foreach ($data['faq'] as $faq) {
    foreach ($faq['keyword'] as $kw) {
        if (matchKeyword($question, $kw)) {
            $foundResponse = $faq['jawaban'];
            break 2;
        }
    }
}

// Jika tidak ketemu → berikan saran
if (!$foundResponse) {
    $foundResponse = $data['default_responses']['tidak_mengerti'];

    $suggestions = [];
    foreach ($data['faq'] as $faq) {
        foreach ($faq['keyword'] as $kw) {
            if (strpos($question, substr($kw, 0, 3)) !== false) {
                $suggestions[] = $faq['pertanyaan'];
                break;
            }
        }
    }

    if (!empty($suggestions)) {
        $foundResponse .= "\n\nMungkin yang Anda maksud:\n";
        foreach (array_slice($suggestions, 0, 3) as $s) {
            $foundResponse .= "- $s\n";
        }
    }
}

echo json_encode([
    'status' => 'success',
    'response' => $foundResponse
]);
?>
