<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.7 ค้นหาจำนวนเฉพาะ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <nav class="bg-[#008B8B] text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-cyan-700 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center">
            <a href="#" class="text-cyan-100 hover:text-white transition">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-cyan-100">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-cyan-100">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[450px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-cyan-900 border-l-4 border-[#008B8B] pl-4">2.7 ค้นหาจำนวนเฉพาะ (prime number)</h2>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">ช่วงเริ่มต้น (start)</label>
                    <input type="number" id="startInput" placeholder="กรอกช่วงเริ่มต้น" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 bg-gray-50">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">ช่วงสิ้นสุด (end)</label>
                    <input type="number" id="endInput" placeholder="กรอกช่วงสิ้นสุด" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 bg-gray-50">
                </div>

                <div class="flex gap-4">
                    <button onclick="findPrimes()" class="flex-1 bg-[#008B8B] hover:bg-[#006666] text-white py-3 rounded-lg font-medium transition duration-200 shadow-md">
                        ค้นหา
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-600 py-3 rounded-lg font-medium transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultArea" class="mt-6 p-4 bg-cyan-50 rounded-lg hidden border-l-4 border-[#008B8B]">
                    <p class="text-gray-700 font-bold mb-2">จำนวนเฉพาะที่พบ:</p>
                    <div id="primeList" class="text-cyan-800 break-words font-medium"></div>
                </div>
            </div>

            <div class="bg-[#20B2AA] p-10 flex-1 text-white flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">รายละเอียดโจทย์</h2>
                <p class="mb-6 text-center leading-relaxed">
                    กรอกช่วงตัวเลขเริ่มต้นและสิ้นสุดเพื่อแสดงตัวเลขเฉพาะในช่วงนั้น
                </p>
                <div class="space-y-4 text-sm bg-white/20 p-6 rounded-xl border border-white/30 shadow-inner">
                    <ul class="space-y-3 list-disc list-inside ml-2">
                        <li>ตัวเลขเฉพาะต้องไม่มีตัวหารอื่น นอกจาก 1 และตัวมันเอง</li>
                        <li>โปรแกรมจะวนซ้ำตรวจสอบตัวเลขในย่านที่กำหนด</li>
                        <li>แสดงผลลัพธ์เป็นรายการตัวเลขที่คั่นด้วยจุลภาค</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#006666] text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function isPrime(num) {
            if (num <= 1) return false;
            for (let i = 2; i <= Math.sqrt(num); i++) {
                if (num % i === 0) return false;
            }
            return true;
        }

        function findPrimes() {
            const start = parseInt(document.getElementById('startInput').value);
            const end = parseInt(document.getElementById('endInput').value);
            const resultArea = document.getElementById('resultArea');
            const primeList = document.getElementById('primeList');

            if (isNaN(start) || isNaN(end)) {
                alert("กรุณากรอกตัวเลขให้ครบถ้วน");
                return;
            }

            let primes = [];
            for (let i = Math.min(start, end); i <= Math.max(start, end); i++) {
                if (isPrime(i)) {
                    primes.push(i);
                }
            }

            resultArea.classList.remove('hidden');
            if (primes.length > 0) {
                primeList.innerText = primes.join(', ');
            } else {
                primeList.innerText = "ไม่พบจำนวนเฉพาะในช่วงนี้";
            }
        }

        function clearForm() {
            document.getElementById('startInput').value = "";
            document.getElementById('endInput').value = "";
            document.getElementById('resultArea').classList.add('hidden');
            document.getElementById('primeList').innerText = "";
        }
    </script>
</body>
</html>