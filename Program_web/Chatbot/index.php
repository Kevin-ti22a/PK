<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot SMK Taruna Bangsa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="chatbot-container">
        <!-- Header -->
        <div class="chatbot-header">
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
                <div>
                    <h2>Chatbot SMK Taruna Bangsa</h2>
                    <p>Selamat datang di SMK Taruna Bangsa! Ada yang bisa kami bantu hari ini?</p>
                </div>
            </div>
        </div>

        <!-- Chat Area -->
        <div class="chat-area" id="chatArea">
            <!-- Pesan sambutan -->
            <div class="message bot-message">
                <div class="message-content">
                    <p>Halo! Saya AI Agen SMK Taruna Bangsa. Saya di sini untuk membantu Anda mendapatkan informasi tentang SMK Taruna Bangsa.</p>
                </div>
            </div>
            
            <!-- Quick Questions -->
            <div class="quick-questions">
                <h3>Pertanyaan Populer:</h3>
                <div class="quick-question" onclick="sendQuickQuestion('jurusan')">
                    Apa saja jurusan yang tersedia di SMK Taruna Bangsa?
                </div>
                <div class="quick-question" onclick="sendQuickQuestion('pendaftaran')">
                    Bagaimana cara mendaftar sebagai siswa baru?
                </div>
                <div class="quick-question" onclick="sendQuickQuestion('kontak')">
                    Siapa yang bisa saya hubungi untuk informasi lebih lanjut?
                </div>
            </div>
        </div>

        <!-- Input Area -->
        <div class="input-area">
            <input 
                type="text" 
                id="userInput" 
                placeholder="Tulis pesan Anda..."
                onkeypress="if(event.keyCode === 13) sendMessage()"
            >
            <button onclick="sendMessage()">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>