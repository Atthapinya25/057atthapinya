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

    <nav class="bg-cyan-600 text-white p-4 flex justify-between items-center px-10 shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-cyan-500 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-cyan-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-cyan-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-cyan-50 mt-0 w-56 py-2 z-50">
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-cyan-200 transition flex items-center gap-1 focus:outline-none">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-cyan-50 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 text-cyan-600 font-bold bg-cyan-50">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 transition">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[400px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-cyan-800 border-l-4 border-cyan-500 pl-4">2.1 คำนวณผลรวมเลขคู่</h2>
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