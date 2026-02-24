<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.5 สร้างรูปดาวแบบพีระมิด</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        .star-output {
            line-height: 1.2;
            letter-spacing: 0.1em;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body class="bg-amber-50 min-h-screen flex flex-col">

    <nav class="bg-[#EEC900] text-amber-900 p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-white/40 p-1 rounded shadow-inner">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center font-medium">
            <a href="#" class="text-amber-800 hover:text-black transition">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-black transition">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-black transition">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[420px] border border-amber-100">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-amber-800 border-l-4 border-[#EEC900] pl-4">2.5 สร้างรูปดาวแบบพีระมิด</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกจำนวนแถว (n)</label>
                    <input type="number" id="rowInput" placeholder="กรอกค่า n" 
                        class="w-full p-3 border border-amber-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#EEC900] bg-amber-50/30">
                </div>
                <div class="flex gap-4">
                    <button onclick="generatePyramid()" class="flex-1 bg-[#EEC900] hover:bg-[#D4B100] text-amber-950 font-bold py-3 rounded-lg transition duration-200 shadow-md">
                        แสดงรูปแบบ
                    </button>
                    <button onclick="clearAll()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-600 py-3 rounded-lg font-medium transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultArea" class="mt-8 p-6 bg-amber-50 rounded-lg hidden border border-amber-200 overflow-x-auto">
                    <pre id="starOutput" class="star-output text-center text-lg text-amber-900 font-bold"></pre>
                </div>
            </div>

            <div class="bg-[#FFEC8B] p-10 flex-1 text-amber-900 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">รายละเอียดโจทย์</h2>
                <p class="mb-6 text-center leading-relaxed font-medium">
                    กรอกจำนวนแถวที่ต้องการ แล้วโปรแกรมจะแสดงรูปแบบดาวแบบพีระมิด
                </p>
                <div class="space-y-4 text-sm bg-white/50 p-6 rounded-xl border border-amber-200 shadow-inner">
                    <p class="font-bold underline text-amber-800">**เงื่อนไขการคำนวณ**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-95">
                        <li>ใช้ Loop ซ้อนเพื่อตรวจสอบการเว้นวรรคและการแสดงผลเครื่องหมายดาว</li>
                        <li>แถวแรกมี 1 ดาว, แถวถัดไปเพิ่มทีละ 2 จนถึงแถวที่ n</li>
                        <li>จัดกึ่งกลางเพื่อให้เป็นรูปพีระมิด</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-amber-800 text-amber-50 text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function generatePyramid() {
            const n = parseInt(document.getElementById('rowInput').value);
            const resultArea = document.getElementById('resultArea');
            const starOutput = document.getElementById('starOutput');

            if (isNaN(n) || n < 1) {
                alert("กรุณากรอกจำนวนแถวที่มากกว่า 0 ครับ");
                return;
            }

            let result = "";
            for (let i = 1; i <= n; i++) {
                let spaces = " ".repeat(n - i);
                let stars = "*".repeat(2 * i - 1);
                result += spaces + stars + "\n";
            }

            resultArea.classList.remove('hidden');
            starOutput.textContent = result;
        }

        function clearAll() {
            document.getElementById('rowInput').value = "";
            document.getElementById('resultArea').classList.add('hidden');
            document.getElementById('starOutput').textContent = "";
        }
    </script>
</body>
</html>