// ==================== MODUL CETAK CV TERPISAH ====================
// File: print-cv.js

class CVPrinter {
    constructor() {
        this.biodata = null;
        this.printContainer = null;
        this.loadingWatermark = null;
    }
    
    async init() {
        console.log('CV Printer initialized');
        this.printContainer = document.getElementById('print-container');
        this.loadingWatermark = document.getElementById('loadingWatermark');
        
        // Load biodata saat init
        await this.loadBiodata();
    }
    
    async loadBiodata() {
        try {
            const response = await fetch('biodata.json');
            const data = await response.json();
            this.biodata = data.biodata;
            console.log('Biodata loaded successfully');
            return this.biodata;
        } catch (error) {
            console.error('Error loading biodata:', error);
            this.biodata = this.getDefaultBiodata();
            return this.biodata;
        }
    }
    
    getDefaultBiodata() {
        return {
            npm: "2022330071",
            nama_lengkap: "Dimas Bayu Sagara",
            tanggal_lahir: "Bekasi, 07 Januari 2005",
            alamat_lengkap: "Jl. Harapan Baru I / 58 Rt. 010/003 Bekasi Timur",
            pendidikan_formal: [
                { jenjang: "SD", nama_sekolah: "SDN 02 pagi di Bekasi", tahun_lulus: "1988" },
                { jenjang: "SMP", nama_sekolah: "SMPN 153 di Bekasi", tahun_lulus: "1991" },
                { jenjang: "SMA", nama_sekolah: "SMA 32 di Bekasi", tahun_lulus: "1994" }
            ],
            pendidikan_nonformal: [
                { jenis: "Kursus bahasa Inggris", lembaga: "Lembaga Bahasa LIA (LB-LIA)", tahun_lulus: "1994" },
                { jenis: "Kursus komputer Paket Operator Terpadu", keterangan: "Microsoft Office XP", tahun_lulus: "2002" },
                { jenis: "Kursus Database Administrator", lembaga: "Microsoft", tahun_lulus: "2003" }
            ],
            pengalaman_organisasi: [
                { jabatan: "Ketua Remaja Masjid Al – Barkah", lokasi: "Bekasi – Timur", periode: "1993 s.d tahun 1995" },
                { jabatan: "Ketua PPS Betako Merpati Putih", lokasi: "Kolat RS. Pelni Pertamburan", periode: "1990 s.d sekarang" }
            ],
            foto_url: "",
            tanggal_pembuatan: "Bekasi, 22 September 2025",
            ttd_nama: "Dimas Bayu Segara"
        };
    }
    
    generateCVHTML() {
        if (!this.biodata) {
            return '<div style="color: red; padding: 20mm;">Error: Data biodata tidak ditemukan</div>';
        }
        
        const biodata = this.biodata;
        
        // Format pendidikan formal
        let pendidikanFormalHTML = '';
        biodata.pendidikan_formal.forEach((item, index) => {
            pendidikanFormalHTML += `
                <tr>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">${index + 1}</td>
                    <td style="border: 1px solid #000; padding: 6px;">${item.nama_sekolah}</td>
                    <td style="border: 1px solid #000; padding: 6px;">${item.tahun_lulus}</td>
                </tr>
            `;
        });
        
        // Format pendidikan non-formal
        let pendidikanNonFormalHTML = '';
        biodata.pendidikan_nonformal.forEach((item, index) => {
            pendidikanNonFormalHTML += `
                <tr>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">${index + 1}</td>
                    <td style="border: 1px solid #000; padding: 6px;">
                        ${item.jenis}
                        ${item.keterangan ? ` (${item.keterangan})` : ''}
                        ${item.lembaga ? `<br><em>${item.lembaga}</em>` : ''}
                    </td>
                    <td style="border: 1px solid #000; padding: 6px;">${item.tahun_lulus}</td>
                </tr>
            `;
        });
        
        // Format pengalaman organisasi
        let pengalamanHTML = '';
        biodata.pengalaman_organisasi.forEach((item, index) => {
            pengalamanHTML += `
                <tr>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">${index + 1}</td>
                    <td style="border: 1px solid #000; padding: 6px;">
                        ${item.jabatan}<br>
                        <em>${item.lokasi}</em>
                    </td>
                    <td style="border: 1px solid #000; padding: 6px;">${item.periode}</td>
                </tr>
            `;
        });
        
        return `
            <div style="padding: 20mm; font-family: 'Times New Roman', Times, serif; font-size: 12pt; min-height: 297mm;">
                <!-- JUDUL UTAMA -->
                <div style="text-align: center; margin-bottom: 15mm;">
                    <h1 style="font-size: 16pt; font-weight: bold; text-decoration: underline; margin-bottom: 5mm;">
                        DAFTAR RIWAYAT HIDUP
                    </h1>
                    <div style="border: 2px solid #000; padding: 3mm; display: inline-block; font-weight: bold;">
                        FORMULIR BIODATA
                    </div>
                </div>
                
                <!-- I. BIODATA MAHASISWA -->
                <div style="margin-bottom: 10mm; page-break-inside: avoid;">
                    <h2 style="font-size: 14pt; font-weight: bold; margin-bottom: 3mm; text-decoration: underline;">
                        I. Biodata Mahasiswa
                    </h2>
                    
                    <table style="width: 100%; margin-bottom: 5mm; border-spacing: 0;">
                        <tr>
                            <td style="width: 30%; font-weight: bold; padding: 2mm 0;">NPM</td>
                            <td style="width: 5%; padding: 2mm 0;">:</td>
                            <td style="width: 65%; padding: 2mm 0;">${biodata.npm}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 2mm 0;">Nama Lengkap</td>
                            <td style="padding: 2mm 0;">:</td>
                            <td style="padding: 2mm 0;">${biodata.nama_lengkap}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 2mm 0;">Tanggal Lahir</td>
                            <td style="padding: 2mm 0;">:</td>
                            <td style="padding: 2mm 0;">${biodata.tanggal_lahir}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 2mm 0;">Alamat Lengkap</td>
                            <td style="padding: 2mm 0;">:</td>
                            <td style="padding: 2mm 0;">${biodata.alamat_lengkap}</td>
                        </tr>
                    </table>
                </div>
                
                <!-- II. PENDIDIKAN FORMAL -->
                <div style="margin-bottom: 10mm; page-break-inside: avoid;">
                    <h2 style="font-size: 14pt; font-weight: bold; margin-bottom: 3mm; text-decoration: underline;">
                        II. Pendidikan Formal
                    </h2>
                    
                    <div style="margin-left: 5mm; margin-bottom: 3mm;">
                        <strong>A. Formal</strong>
                    </div>
                    
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #000; font-size: 11pt; margin-bottom: 5mm;">
                        <thead>
                            <tr style="background-color: #f5f5f5;">
                                <th style="border: 1px solid #000; padding: 6px; text-align: center; width: 10%;">No</th>
                                <th style="border: 1px solid #000; padding: 6px; text-align: left; width: 60%;">Nama Sekolah / Institusi</th>
                                <th style="border: 1px solid #000; padding: 6px; text-align: center; width: 30%;">Tahun Lulus</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${pendidikanFormalHTML}
                        </tbody>
                    </table>
                    
                    <div style="margin-left: 5mm; margin-bottom: 3mm;">
                        <strong>B. Tidak Formal</strong>
                    </div>
                    
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #000; font-size: 11pt;">
                        <thead>
                            <tr style="background-color: #f5f5f5;">
                                <th style="border: 1px solid #000; padding: 6px; text-align: center; width: 10%;">No</th>
                                <th style="border: 1px solid #000; padding: 6px; text-align: left; width: 60%;">Jenis Kursus / Pelatihan</th>
                                <th style="border: 1px solid #000; padding: 6px; text-align: center; width: 30%;">Tahun Lulus</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${pendidikanNonFormalHTML}
                        </tbody>
                    </table>
                </div>
                
                <!-- III. RIWAYAT PENGALAMAN -->
                <div style="margin-bottom: 10mm; page-break-inside: avoid;">
                    <h2 style="font-size: 14pt; font-weight: bold; margin-bottom: 3mm; text-decoration: underline;">
                        III. Riwayat Pengalaman berorganisasi / pekerjaan
                    </h2>
                    
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #000; font-size: 11pt;">
                        <thead>
                            <tr style="background-color: #f5f5f5;">
                                <th style="border: 1px solid #000; padding: 6px; text-align: center; width: 10%;">No</th>
                                <th style="border: 1px solid #000; padding: 6px; text-align: left; width: 50%;">Jabatan / Pekerjaan</th>
                                <th style="border: 1px solid #000; padding: 6px; text-align: center; width: 40%;">Periode</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${pengalamanHTML}
                        </tbody>
                    </table>
                </div>
                
                <!-- FOTO DAN TANDA TANGAN -->
                <div style="margin-top: 15mm; page-break-inside: avoid;">
                    <table style="width: 100%; border-spacing: 0;">
                        <tr>
                            <td style="width: 50%; vertical-align: top;">
                                <!-- Kosong untuk align -->
                            </td>
                            <td style="width: 50%; text-align: center; vertical-align: top;">
                                <div style="margin-bottom: 5mm;">
                                    <div style="font-weight: bold; margin-bottom: 2mm;">Pas Photo</div>
                                    <div style="border: 1px solid #000; width: 30mm; height: 40mm; margin: 0 auto; position: relative; background-color: #f9f9f9;">
                                        ${biodata.foto_url && biodata.foto_url.trim() !== '' ? `
                                            <img src="${biodata.foto_url}" 
                                                 alt="Foto 3x4" 
                                                 style="width: 100%; height: 100%; object-fit: cover;"
                                                 onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'padding-top: 15mm; color: #666;\'>[Foto 3x4]</div>';">
                                        ` : `
                                            <div style="text-align: center; padding-top: 15mm; color: #666;">
                                                [Foto 3x4]
                                            </div>
                                        `}
                                    </div>
                                    <div style="font-size: 10pt; margin-top: 2mm;">Ukuran: 3x4 cm</div>
                                </div>
                                
                                <div style="margin-top: 15mm;">
                                    <div style="margin-bottom: 20mm; font-style: italic;">
                                        ${biodata.tanggal_pembuatan}
                                    </div>
                                    <div style="border-top: 1px solid #000; width: 60mm; margin: 0 auto; padding-top: 2mm;">
                                        <strong>${biodata.ttd_nama}</strong>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        `;
    }
    
    showLoading() {
        if (this.loadingWatermark) {
            this.loadingWatermark.style.display = 'flex';
            this.loadingWatermark.style.opacity = '1';
        }
    }
    
    hideLoading() {
        if (this.loadingWatermark) {
            this.loadingWatermark.style.opacity = '0';
            setTimeout(() => {
                this.loadingWatermark.style.display = 'none';
            }, 300);
        }
    }
    
    async printCV() {
        try {
            console.log('Starting CV print process...');
            this.showLoading();
            
            // Ensure biodata is loaded
            if (!this.biodata) {
                await this.loadBiodata();
            }
            
            // Preload foto if exists
            if (this.biodata.foto_url && this.biodata.foto_url.trim() !== '') {
                await new Promise((resolve) => {
                    const img = new Image();
                    img.onload = resolve;
                    img.onerror = resolve; // Continue even if error
                    img.src = this.biodata.foto_url;
                });
            }
            
            // Generate HTML
            const cvHTML = this.generateCVHTML();
            
            // Clear any existing content from previous prints
            if (this.printContainer) {
                this.printContainer.innerHTML = '';
                this.printContainer.style.display = 'block';
                this.printContainer.innerHTML = cvHTML;
            } else {
                // Create a temporary print container if needed
                const tempContainer = document.createElement('div');
                tempContainer.id = 'temp-print-container';
                tempContainer.style.cssText = 'position: absolute; left: -9999px; top: 0;';
                tempContainer.innerHTML = cvHTML;
                document.body.appendChild(tempContainer);
                this.printContainer = tempContainer;
            }
            
            // Wait for DOM to render
            await new Promise(resolve => setTimeout(resolve, 500));
            
            // Execute print
            window.print();
            
            // Clean up
            setTimeout(() => {
                if (this.printContainer && this.printContainer.id === 'temp-print-container') {
                    document.body.removeChild(this.printContainer);
                } else if (this.printContainer) {
                    this.printContainer.style.display = 'none';
                    this.printContainer.innerHTML = '';
                }
                
                this.hideLoading();
                console.log('CV print completed');
            }, 100);
            
        } catch (error) {
            console.error('Error in printCV:', error);
            alert('Terjadi kesalahan saat mencetak CV. Silakan coba lagi.');
            this.hideLoading();
        }
    }
}

// ==================== INISIALISASI GLOBAL ====================

let cvPrinter = null;

// Initialize CV printer when DOM is ready
document.addEventListener('DOMContentLoaded', async function() {
    cvPrinter = new CVPrinter();
    await cvPrinter.init();
    
    // Add event listener for print CV button
    const printCVButton = document.getElementById('printCVButton');
    if (printCVButton) {
        printCVButton.addEventListener('click', function() {
            if (cvPrinter) {
                cvPrinter.printCV();
            }
        });
    }
    
    // Export to global scope for manual calls
    window.cvPrinter = cvPrinter;
});

// Export untuk module (jika menggunakan ES6 modules)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { CVPrinter };
}