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

    <nav class="bg-[#008B8B] text-white p-4 flex justify-between items-center px-10 shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 p-1 rounded">
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
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-cyan-200 transition flex items-center gap-1 focus:outline-none font-bold">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-cyan-50 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">2.4 สร้างรูปตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-gray-700 hover:bg-cyan-50 hover:text-[#008B8B] transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-[#008B8B] font-bold bg-cyan-50 border-l-4 border-[#008B8B]">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[450px] border border-cyan-100">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-slate-800 border-l-4 border-[#008B8B] pl-4">2.7 ค้นหาจำนวนเฉพาะ</h2>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">ช่วงเริ่มต้น (Start)</label>
                    <input type="number" id="startInput" placeholder="กรอกตัวเลขเริ่มต้น" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#008B8B]/30 bg-gray-50 transition-all">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-1 text-sm font-medium">ช่วงสิ้นสุด (End)</label>
                    <input type="number" id="endInput" placeholder="กรอกตัวเลขสิ้นสุด" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#008B8B]/30 bg-gray-50 transition-all">
                </div>

                <div class="flex gap-4">
                    <button onclick="findPrimes()" class="flex-1 bg-[#008B8B] hover:bg-[#006666] text-white py-3 rounded-lg font-bold transition duration-200 shadow-lg active:scale-95">
                        ค้นหา
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-500 py-3 rounded-lg font-bold transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultArea" class="mt-8 p-4 bg-cyan-50 rounded-xl border-l-4 border-[#008B8B] hidden shadow-inner">
                    <p class="text-sm text-[#008B8B] font-bold mb-2 uppercase">จำนวนเฉพาะที่พบ:</p>
                    <div id="primeList" class="text-cyan-900 break-words font-medium text-lg leading-relaxed"></div>
                </div>
            </div>

            <div class="bg-[#20B2AA] p-10 flex-1 text-white flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center drop-shadow-sm">ตรรกะจำนวนเฉพาะ</h2>
                <p class="mb-6 text-center leading-relaxed font-medium opacity-90">
                    โปรแกรมจะตรวจสอบตัวเลขทุกตัวในช่วงที่กำหนด ว่ามีตัวหารนอกจาก 1 และตัวเองหรือไม่
                </p>
                
                

                <div class="space-y-4 text-sm bg-white/20 p-6 rounded-2xl border border-white/20 backdrop-blur-sm shadow-inner mt-4">
                    <p class="font-bold underline text-cyan-50">**หลักการทำงาน**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-95">
                        <li>วน Loop จากช่วงเริ่มต้นถึงสิ้นสุด</li>
                        <li>ใช้ฟังก์ชันตรวจสอบเศษ (Modulo)</li>
                        <li>กรองเฉพาะตัวเลขที่เป็น Prime</li>
                        <li>จัดรูปแบบผลลัพธ์ด้วยจุลภาค</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#006666] text-white text-center py-4 text-sm tracking-widest">
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
            const startStr = document.getElementById('startInput').value;
            const endStr = document.getElementById('endInput').value;
            const resultArea = document.getElementById('resultArea');
            const primeList = document.getElementById('primeList');

            if (startStr === "" || endStr === "") {
                alert("กรุณากรอกตัวเลขให้ครบถ้วน");
                return;
            }

            const start = parseInt(startStr);
            const end = parseInt(endStr);

            let primes = [];
            const min = Math.min(start, end);
            const max = Math.max(start, end);

            for (let i = min; i <= max; i++) {
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
            const resultArea = document.getElementById('resultArea');
            resultArea.classList.add('hidden');
            document.getElementById('primeList').innerText = "";
        }
    </script>
</body>
</html>