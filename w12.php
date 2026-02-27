<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.6 คำนวณเลขยกกำลัง</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-stone-50 min-h-screen flex flex-col">

    <nav class="bg-[#8B6914] text-white p-4 flex justify-between items-center px-10 shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-stone-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-stone-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-stone-100 mt-0 w-56 py-2 z-50">
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-stone-200 transition flex items-center gap-1 focus:outline-none font-bold">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-stone-100 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-[#8B6914] font-bold bg-stone-50 border-l-4 border-[#8B6914]">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-gray-700 hover:bg-stone-50 hover:text-[#8B6914] transition">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[450px] border border-stone-200">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-stone-800 border-l-4 border-[#8B6914] pl-4">2.6 คำนวณเลขยกกำลัง</h2>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">ฐาน (Base)</label>
                    <input type="number" id="baseInput" placeholder="กรอกตัวเลขฐาน" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B6914]/50 bg-gray-50 transition-all">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">เลขชี้กำลัง (Exponent)</label>
                    <input type="number" id="expInput" placeholder="กรอกเลขชี้กำลัง" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B6914]/50 bg-gray-50 transition-all">
                </div>

                <div class="flex gap-4">
                    <button onclick="calculatePower()" class="flex-1 bg-[#8B6914] hover:bg-[#6b5110] text-white py-3 rounded-lg font-bold transition duration-200 shadow-lg shadow-stone-200 active:scale-95">
                        คำนวณ
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-stone-100 hover:bg-stone-200 text-stone-500 py-3 rounded-lg font-bold transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultArea" class="mt-8 p-4 bg-stone-50 rounded-xl border-l-4 border-[#8B6914] hidden">
                    <p class="text-sm text-stone-500 font-medium">ผลลัพธ์ที่ได้:</p>
                    <p id="resultText" class="text-2xl font-bold text-[#8B6914]"></p>
                </div>
            </div>

            <div class="bg-[#B8860B] p-10 flex-1 text-white flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center drop-shadow-sm">ตรรกะเลขยกกำลัง</h2>
                <p class="mb-6 text-center leading-relaxed font-medium opacity-90">
                    คำนวณโดยการนำฐานมาคูณตัวเองซ้ำๆ ตามจำนวนเลขชี้กำลัง
                </p>
                
                <div class="space-y-4 text-sm bg-white/20 p-6 rounded-2xl border border-white/20 backdrop-blur-sm">
                    <p class="font-bold underline text-stone-100">**หลักการทำงาน**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-95">
                        <li>ใช้ Loop ในการคูณฐาน (Base)</li>
                        <li>รองรับเลขชี้กำลังที่เป็นลบ (1/x)</li>
                        <li>แสดงผลลัพธ์แบบทศนิยมแม่นยำ</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#5e470d] text-white text-center py-4 text-sm tracking-wide">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function calculatePower() {
            const base = parseFloat(document.getElementById('baseInput').value);
            const exp = parseInt(document.getElementById('expInput').value);
            const resultArea = document.getElementById('resultArea');
            const resultText = document.getElementById('resultText');

            if (isNaN(base) || isNaN(exp)) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วนครับ");
                return;
            }

            let result = 1;
            const absoluteExp = Math.abs(exp);

            for (let i = 0; i < absoluteExp; i++) {
                result *= base;
            }

            if (exp < 0) {
                result = 1 / result;
            }

            resultArea.classList.remove('hidden');
            resultText.innerText = result.toLocaleString(undefined, { maximumFractionDigits: 5 });
        }

        function clearForm() {
            document.getElementById('baseInput').value = "";
            document.getElementById('expInput').value = "";
            const resultArea = document.getElementById('resultArea');
            resultArea.classList.add('hidden');
        }
    </script>
</body>
</html>