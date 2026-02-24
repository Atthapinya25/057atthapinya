<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.3 สูตรคูณ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        /* สไตล์ตารางสูตรคูณเพิ่มเติม */
        .multiplication-row:nth-child(even) { background-color: #fdf8f6; }
        /* กำหนดสี SaddleBrown */
        .text-saddlebrown { color: #8B4513; }
        .bg-saddlebrown { background-color: #8B4513; }
        .border-saddlebrown { border-color: #8B4513; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <nav class="bg-[#8B4513] text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-[#A0522D] p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center text-orange-100">
            <a href="#" class="hover:text-white transition">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-white transition">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-white transition">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[420px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 border-l-4 border-[#8B4513] pl-4">2.3 สูตรคูณ</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกแม่สูตรคูณ</label>
                    <input type="number" id="multiplierInput" placeholder="กรอกแม่สูตรคูณ" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513]/50 bg-gray-50">
                </div>
                <div class="flex gap-4">
                    <button onclick="generateTable()" class="flex-1 bg-[#8B4513] hover:bg-[#A0522D] text-white py-3 rounded-lg font-medium transition duration-200 shadow-md">
                        แสดงสูตรคูณ
                    </button>
                    <button onclick="resetTable()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-600 py-3 rounded-lg font-medium transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultContainer" class="mt-8 hidden overflow-hidden rounded-lg border border-orange-100">
                    <div class="bg-[#8B4513] text-white text-center py-2 font-bold" id="resultHeader"></div>
                    <div id="tableBody" class="max-h-60 overflow-y-auto bg-white">
                        </div>
                </div>
            </div>

            <div class="bg-[#D2B48C] p-10 flex-1 text-[#5D2E0A] flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">รายละเอียดโจทย์</h2>
                <p class="mb-6 text-center leading-relaxed font-medium">
                    กรอก **แม่สูตรคูณ** ที่ต้องการ (เช่น 2, 3, 5) แล้วระบบจะแสดงตารางสูตรคูณตั้งแต่ 1 ถึง 12
                </p>
                <div class="space-y-4 text-sm bg-white/40 p-6 rounded-xl border border-[#8B4513]/20">
                    <p class="font-bold underline text-[#8B4513]">**เงื่อนไขการคำนวณ**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-90">
                        <li>แสดงผลการคูณของตัวเลขในช่วง 1 ถึง 12</li>
                        <li>สูตรคูณตามแม่ที่ผู้ใช้กรอก</li>
                        <li>รูปแบบตารางที่อ่านง่าย</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#8B4513] text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์  นางสาวอัฐภิญญา  ศรีนิล
    </footer>

    <script>
        function generateTable() {
            const num = parseInt(document.getElementById('multiplierInput').value);
            const container = document.getElementById('resultContainer');
            const tableBody = document.getElementById('tableBody');
            const header = document.getElementById('resultHeader');

            if (isNaN(num)) {
                alert("กรุณากรอกแม่สูตรคูณเป็นตัวเลขครับ");
                return;
            }

            header.innerText = `แม่สูตรคูณแม่ ${num}`;
            tableBody.innerHTML = '';
            container.classList.remove('hidden');

            for (let i = 1; i <= 12; i++) {
                const row = document.createElement('div');
                row.className = 'multiplication-row flex justify-between px-10 py-2 border-b border-gray-100 text-gray-700';
                row.innerHTML = `
                    <span class="font-medium">${num} x ${i}</span>
                    <span class="font-bold text-[#8B4513]">= ${num * i}</span>
                `;
                tableBody.appendChild(row);
            }
        }

        function resetTable() {
            document.getElementById('multiplierInput').value = "";
            document.getElementById('resultContainer').classList.add('hidden');
        }
    </script>
</body>
</html>