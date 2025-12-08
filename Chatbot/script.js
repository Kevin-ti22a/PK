async function sendMessage() {
    const input = document.getElementById('userInput');
    const message = input.value.trim();
    
    if (message === '') return;
    
    // Tampilkan pesan user
    displayMessage(message, 'user');
    input.value = '';
    
    // Tampilkan indikator typing
    showTypingIndicator();
    
    // Kirim ke server untuk mendapatkan respons
    try {
        const response = await fetch('chatbot.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `question=${encodeURIComponent(message)}`
        });
        
        const data = await response.json();
        
        // Hapus indikator typing
        hideTypingIndicator();
        
        // Tampilkan respons dari bot
        setTimeout(() => {
            displayMessage(data.response || 'Maaf, terjadi kesalahan dalam memproses permintaan Anda.', 'bot');
        }, 500);
        
    } catch (error) {
        console.error('Error:', error);
        hideTypingIndicator();
        displayMessage('Maaf, terjadi kesalahan koneksi. Silakan coba lagi.', 'bot');
    }
}

function sendQuickQuestion(type) {
    // Ambil pertanyaan dari JSON data yang sudah dimuat
    if (window.faqData && window.faqData.faq) {
        const faq = window.faqData.faq.find(item => item.id === type);
        if (faq) {
            // Isi input dengan pertanyaan
            const input = document.getElementById('userInput');
            input.value = faq.pertanyaan;
            
            // Kirim otomatis
            sendMessage();
            return;
        }
    }
    
    // Fallback jika data belum dimuat
    const questions = {
        'jurusan': 'Apa saja jurusan yang tersedia di SMK Taruna Bangsa?',
        'pendaftaran': 'Bagaimana cara mendaftar sebagai siswa baru?',
        'kontak': 'Siapa yang bisa saya hubungi untuk informasi lebih lanjut?',
        'biaya': 'Berapa biaya pendidikan di SMK Taruna Bangsa?',
        'fasilitas': 'Apa saja fasilitas yang tersedia di sekolah?'
    };
    
    if (questions[type]) {
        const input = document.getElementById('userInput');
        input.value = questions[type];
        sendMessage();
    }
}

function displayMessage(content, sender) {
    const chatArea = document.getElementById('chatArea');
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${sender}-message`;
    
    const contentDiv = document.createElement('div');
    contentDiv.className = 'message-content';
    
    // Ganti newline dengan <br> untuk format multi-line
    const formattedContent = content.replace(/\n/g, '<br>');
    contentDiv.innerHTML = `<p>${formattedContent}</p>`;
    
    messageDiv.appendChild(contentDiv);
    chatArea.appendChild(messageDiv);
    
    // Scroll ke bawah
    chatArea.scrollTop = chatArea.scrollHeight;
}

function showTypingIndicator() {
    const chatArea = document.getElementById('chatArea');
    
    const typingDiv = document.createElement('div');
    typingDiv.className = 'message bot-message';
    typingDiv.id = 'typingIndicator';
    
    const contentDiv = document.createElement('div');
    contentDiv.className = 'message-content typing-indicator';
    contentDiv.innerHTML = `
        <div class="typing-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <p>Mengetik...</p>
    `;
    
    typingDiv.appendChild(contentDiv);
    chatArea.appendChild(typingDiv);
    chatArea.scrollTop = chatArea.scrollHeight;
}

function hideTypingIndicator() {
    const typingIndicator = document.getElementById('typingIndicator');
    if (typingIndicator) {
        typingIndicator.remove();
    }
}

// Muat data FAQ untuk quick questions
async function loadFAQData() {
    try {
        const response = await fetch('data.json');
        window.faqData = await response.json();
        populateQuickQuestions();
    } catch (error) {
        console.error('Gagal memuat data FAQ:', error);
    }
}

function populateQuickQuestions() {
    if (!window.faqData || !window.faqData.quick_questions) return;
    
    const quickQuestionsContainer = document.querySelector('.quick-questions');
    if (!quickQuestionsContainer) return;
    
    // Kosongkan container terlebih dahulu
    const questionsContainer = quickQuestionsContainer.querySelector('.questions-container') || quickQuestionsContainer;
    
    // Hapus pertanyaan lama (kecuali judul)
    const title = questionsContainer.querySelector('h3');
    questionsContainer.innerHTML = '';
    if (title) questionsContainer.appendChild(title);
    
    // Buat container baru untuk pertanyaan
    const newContainer = document.createElement('div');
    newContainer.className = 'questions-container';
    
    // Tambahkan quick questions
    window.faqData.quick_questions.forEach(questionId => {
        const faq = window.faqData.faq.find(item => item.id === questionId);
        if (faq) {
            const questionDiv = document.createElement('div');
            questionDiv.className = 'quick-question';
            questionDiv.textContent = faq.pertanyaan;
            questionDiv.onclick = () => sendQuickQuestion(questionId);
            newContainer.appendChild(questionDiv);
        }
    });
    
    questionsContainer.appendChild(newContainer);
}

// Muat data saat halaman dimuat
document.addEventListener('DOMContentLoaded', loadFAQData);