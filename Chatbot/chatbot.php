<?php
header('Content-Type: application/json');

// Muat data dari file JSON
$dataFile = 'data.json';
$data = json_decode(file_get_contents($dataFile), true);

// Ambil pertanyaan dari POST request
$question = isset($_POST['question']) ? strtolower(trim($_POST['question'])) : '';

// Cek jika pertanyaan kosong
if (empty($question)) {
    echo json_encode([
        'status' => 'error',
        'response' => $data['default_responses']['tidak_mengerti']
    ]);
    exit;
}

// Cek pertanyaan khusus
if (strpos($question, 'terima kasih') !== false || strpos($question, 'makasih') !== false) {
    echo json_encode([
        'status' => 'success',
        'response' => $data['default_responses']['terimakasih']
    ]);
    exit;
}

if (strpos($question, 'halo') !== false || strpos($question, 'hai') !== false || strpos($question, 'selamat') !== false) {
    echo json_encode([
        'status' => 'success',
        'response' => $data['default_responses']['salam']
    ]);
    exit;
}

// Cari jawaban di FAQ
$foundResponse = null;
foreach ($data['faq'] as $faq) {
    // Cek berdasarkan keyword
    foreach ($faq['keyword'] as $keyword) {
        if (strpos($question, $keyword) !== false) {
            $foundResponse = $faq['jawaban'];
            break 2;
        }
    }
    
    // Cek berdasarkan pertanyaan yang mirip
    similar_text($question, strtolower($faq['pertanyaan']), $percent);
    if ($percent > 70) { // 70% kemiripan
        $foundResponse = $faq['jawaban'];
        break;
    }
}

// Jika tidak ditemukan, berikan response default
if ($foundResponse === null) {
    $foundResponse = $data['default_responses']['tidak_mengerti'];
    
    // Coba berikan saran berdasarkan kata kunci
    $suggestions = [];
    foreach ($data['faq'] as $faq) {
        foreach ($faq['keyword'] as $keyword) {
            if (strpos($question, substr($keyword, 0, 4)) !== false) {
                $suggestions[] = $faq['pertanyaan'];
                break;
            }
        }
    }
    
    if (!empty($suggestions)) {
        $foundResponse .= "\n\nMungkin yang Anda maksud:\n";
        foreach (array_slice($suggestions, 0, 3) as $suggestion) {
            $foundResponse .= "- " . $suggestion . "\n";
        }
    }
}

echo json_encode([
    'status' => 'success',
    'response' => $foundResponse
]);
?>