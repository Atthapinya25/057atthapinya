<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        .triangle-output {
            line-height: 1.5;
            letter-spacing: 0.2em;
        }
        /* กำหนดสี DeepPink (#FF1493) */
        .text-deeppink { color: #FF1493; }
        .bg-deeppink { background-color: #FF1493; }
        .border-deeppink { border-color: #FF1493; }
    </style>
</head>
<body class="bg-rose-50 min-h-screen flex flex-col">

    <nav class="bg-[#FF1493] text-white p-4 flex justify-between items-center px-10 shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 p-1.5 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-pink-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-pink-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-pink-50 mt-0 w-56 py-2 z-50">
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-pink-200 transition flex items-center gap-1 focus:outline-none font-bold">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-pink-50 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-[#FF1493] font-bold bg-pink-50 border-l-4 border-[#FF1493]">2.4 รูปตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-[#FF1493] transition">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[420px] border border-pink-100">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-2 text-gray-800 border-l-4 border-[#FF1493] pl-4">2.4 สร้างรูปแบบตัวเลข</h2>
                <h2 class="text-2xl font-bold mb-6 text-gray-800 border-l-4 border-[#FF1493] pl-4">สามเหลี่ยม</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกจำนวนแถว (n)</label>
                    <input type="number" id="rowsInput" placeholder="กรอกจำนวนแถวที่ต้องการ" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF1493]/30 bg-gray-50 transition-all">
                </div>
                <div class="flex gap-4">
                    <button onclick="generateTriangle()" class="flex-1 bg-[#FF1493] hover:bg-[#D0107A] text-white py-3 rounded-lg font-bold transition duration-200 shadow-lg shadow-pink-200 active:scale-95">
                        แสดงรูปแบบ
                    </button>
                    <button onclick="resetForm()" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-500 py-3 rounded-lg font-bold transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultArea" class="mt-8 p-6 bg-pink-50 rounded-2xl hidden border border-pink-100 shadow-inner">
                    <pre id="triangleOutput" class="triangle-output text-center font-mono text-xl font-bold text-[#FF1493]"></pre>
                </div>
            </div>

            <div class="bg-[#FFB6C1] p-10 flex-1 text-[#8B0A50] flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center drop-shadow-sm">ตรรกะการวนซ้ำ</h2>
                <p class="mb-6 text-center leading-relaxed font-medium opacity-90">
                    ใช้เทคนิค Nested Loop เพื่อควบคุมการแสดงผลตามแนวนอนและแนวตั้ง
                </p>
                
                <div class="space-y-4 text-sm bg-white/50 p-6 rounded-2xl border border-[#FF1493]/20 backdrop-blur-sm">
                    <p class="font-bold underline text-[#FF1493]">**อธิบายการทำงาน**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-95">
                        <li>Outer Loop: ควบคุมจำนวนแถวจาก 1 ถึง n</li>
                        <li>Inner Loop: พิมพ์ตัวเลขลำดับในแต่ละแถว</li>
                        <li>จัดรูปแบบด้วยฟอนต์ Mono เพื่อความแม่นยำ</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#FF1493] text-white text-center py-4 text-sm tracking-wide">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function generateTriangle() {
            const n = parseInt(document.getElementById('rowsInput').value);
            const resultArea = document.getElementById('resultArea');
            const triangleOutput = document.getElementById('triangleOutput');

            if (isNaN(n) || n < 1) {
                alert("กรุณากรอกจำนวนแถวที่มากกว่า 0 ครับ");
                return;
            }

            let pattern = "";
            for (let i = 1; i <= n; i++) {
                let row = "";
                for (let j = 1; j <= i; j++) {
                    row += j + " ";
                }
                pattern += row.trim() + "\n";
            }

            resultArea.classList.remove('hidden');
            triangleOutput.innerText = pattern;
        }

        function resetForm() {
            document.getElementById('rowsInput').value = "";
            document.getElementById('resultArea').classList.add('hidden');
        }
    </script>
</body>
</html>