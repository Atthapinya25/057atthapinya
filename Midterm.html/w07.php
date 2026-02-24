<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.1 คำนวณผลรวมเลขคู่</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <nav class="bg-cyan-600 text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-cyan-500 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center">
            <a href="#" class="text-cyan-100 hover:text-white transition">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-cyan-100 transition">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-cyan-100 transition">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[400px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-cyan-800">2.1 คำนวณผลรวมเลขคู่</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกจำนวนเต็มบวก (n)</label>
                    <input type="number" id="nValue" placeholder="กรอกค่า n" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400 bg-gray-50 transition-all">
                </div>
                <div class="flex gap-4">
                    <button onclick="calculateSum()" class="flex-1 bg-cyan-500 hover:bg-cyan-600 text-white py-3 rounded-lg font-medium transition duration-200 shadow-md">
                        คำนวณ
                    </button>
                    <button onclick="clearResult()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-600 py-3 rounded-lg font-medium transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultBox" class="mt-8 p-4 bg-cyan-50 rounded-lg hidden border-l-4 border-cyan-500">
                    <p class="text-cyan-800 text-lg font-semibold" id="sumResult"></p>
                    <p class="text-cyan-600 text-sm mt-1" id="sumProcess"></p>
                </div>
            </div>

            <div class="bg-cyan-500 p-10 flex-1 text-white flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">รายละเอียดโจทย์</h2>
                <p class="mb-6 text-center leading-relaxed">
                    กรอกค่า **n** (จำนวนเต็มบวก) เพื่อคำนวณผลรวมของเลขคู่<br>ตั้งแต่ 1 ถึง **n**
                </p>
                <div class="space-y-4 text-sm opacity-95">
                    <p class="font-bold underline text-cyan-100">**เงื่อนไขการคำนวณ**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2">
                        <li>ตัวเลขที่นำมาบวกต้องเป็นเลขคู่</li>
                        <li>คำนวณผลรวมตั้งแต่ 1 ถึงค่าของ n</li>
                        <li>แสดงผลรวมของตัวเลขทั้งหมดที่เป็นเลขคู่ในช่วง</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-cyan-800 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function calculateSum() {
            const n = parseInt(document.getElementById('nValue').value);
            const resultBox = document.getElementById('resultBox');
            const sumResult = document.getElementById('sumResult');
            const sumProcess = document.getElementById('sumProcess');

            if (isNaN(n) || n < 1) {
                alert("กรุณากรอกจำนวนเต็มบวกที่มากกว่า 0 ครับ");
                return;
            }

            let sum = 0;
            let evens = [];

            for (let i = 1; i <= n; i++) {
                if (i % 2 === 0) {
                    sum += i;
                    evens.push(i);
                }
            }

            resultBox.classList.remove('hidden');
            sumResult.innerText = `ผลรวมเลขคู่คือ : ${sum}`;
            sumProcess.innerText = evens.length > 0 
                ? `(ตัวเลขที่นำมาบวก: ${evens.join(' + ')})` 
                : "ไม่มีเลขคู่ในช่วงนี้";
        }

        function clearResult() {
            document.getElementById('nValue').value = "";
            document.getElementById('resultBox').classList.add('hidden');
        }
    </script>
</body>
</html>