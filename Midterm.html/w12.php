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

    <nav class="bg-[#8B6914] text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-[#B8860B] p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center">
            <a href="#" class="text-amber-200">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-amber-200 transition">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-amber-200 transition">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[450px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-stone-800 border-l-4 border-[#8B6914] pl-4">2.6 คำนวณเลขยกกำลัง</h2>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">ฐาน (Base)</label>
                    <input type="number" id="baseInput" placeholder="กรอกฐาน" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B6914]/50 bg-gray-50">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">เลขชี้กำลัง (Exponent)</label>
                    <input type="number" id="expInput" placeholder="กรอกเลขชี้กำลัง" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B6914]/50 bg-gray-50">
                </div>

                <div class="flex gap-4">
                    <button onclick="calculatePower()" class="flex-1 bg-[#8B6914] hover:bg-[#6b5110] text-white py-3 rounded-lg font-medium transition duration-200 shadow-md">
                        คำนวณ
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-600 py-3 rounded-lg font-medium transition duration-200">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
                
                <div id="resultArea" class="mt-6 text-center text-xl font-bold text-[#8B6914] hidden"></div>
            </div>

            <div class="bg-[#B8860B] p-10 flex-1 text-white flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">วิธีการคำนวณเลขยกกำลัง</h2>
                <p class="mb-6 text-center leading-relaxed">
                    โปรแกรมนี้ใช้วิธีการวนลูปเพื่อคำนวณเลขยกกำลัง<br>
                    รองรับทั้งเลขชี้กำลังบวกและลบ โดยมีเงื่อนไขดังนี้:
                </p>
                <div class="space-y-4 text-sm opacity-95">
                    <ul class="space-y-3 list-disc list-inside ml-2">
                        <li>หากเลขชี้กำลังเป็นบวก จะคูณฐานซ้ำตามจำนวนที่กำหนด</li>
                        <li>หากเลขชี้กำลังเป็นลบ จะคำนวณกลับค่าโดยใช้ 1/ผลลัพธ์</li>
                        <li>ผลลัพธ์แม่นยำด้วยการวนลูป (Looping)</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#5e470d] text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function calculatePower() {
            const base = parseFloat(document.getElementById('baseInput').value);
            const exp = parseInt(document.getElementById('expInput').value);
            const resultArea = document.getElementById('resultArea');

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
            resultArea.innerText = `ผลลัพธ์คือ : ${result.toLocaleString()}`;
        }

        function clearForm() {
            document.getElementById('baseInput').value = "";
            document.getElementById('expInput').value = "";
            document.getElementById('resultArea').innerText = "";
            document.getElementById('resultArea').classList.add('hidden');
        }
    </script>
</body>
</html>