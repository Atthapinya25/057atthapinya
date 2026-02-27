<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.4 คำนวณค่าแรงพนักงาน</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #fef2f2; }
        /* ใช้โทนสีแดง Red-400 สำหรับกล่องขวา */
        .bg-red-soft { background-color: #f87171; } 
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <nav class="bg-red-700 text-white py-4 px-10 flex justify-between items-center shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-red-800 p-1.5 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-tight">สอบกลางภาค</span>
        </div>
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-red-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-red-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-red-50 mt-0 w-56 py-2 z-50">
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-red-200 transition flex items-center gap-1 focus:outline-none">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-red-50 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-6">
        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row border border-red-100">
            
            <div class="flex-1 p-10 lg:p-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-10 border-l-4 border-red-600 pl-4">1.4 คำนวณค่าแรงพนักงาน</h2>
                
                <div class="space-y-8">
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">จำนวนชั่วโมงทำงาน</label>
                        <input type="number" id="hours" placeholder="กรอกจำนวนชั่วโมงทำงาน" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-red-500 focus:ring-4 focus:ring-red-500/10 transition-all bg-gray-50">
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">ประเภทงาน</label>
                        <select id="jobType" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-red-500 bg-gray-50 cursor-pointer appearance-none">
                            <option value="50">งานทั่วไป (50.-/ชม.)</option>
                            <option value="100">งานพิเศษ (100.-/ชม.)</option>
                            <option value="150">งานเร่งด่วน (150.-/ชม.)</option>
                        </select>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button onclick="calculateWage()" class="flex-1 bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded-xl shadow-lg transition-all active:scale-95">
                            คำนวณค่าแรง
                        </button>
                        <button onclick="clearForm()" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-4 rounded-xl transition-all">
                            เคลียร์ผลลัพธ์
                        </button>
                    </div>

                    <div id="result" class="mt-8 p-6 bg-red-50 rounded-2xl border-2 border-dashed border-red-200 hidden">
                        <p class="text-sm text-red-700 mb-1 font-medium">รายได้สุทธิที่พนักงานจะได้รับ</p>
                        <p id="totalWage" class="text-4xl font-bold text-red-700"></p>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-red-soft p-10 lg:p-16 text-white flex flex-col justify-center">
                <h3 class="text-2xl font-bold mb-10 text-center uppercase tracking-widest border-b border-red-200/30 pb-4 drop-shadow-sm">เงื่อนไขการคำนวณ</h3>
                
                <ul class="space-y-6 text-lg bg-white/20 p-6 rounded-2xl backdrop-blur-sm border border-white/20">
                    <li class="flex items-start gap-3">
                        <span class="bg-red-800/40 px-2 rounded font-bold">•</span>
                        <span>**งานทั่วไป**: ชั่วโมงละ 50 บาท</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="bg-red-800/40 px-2 rounded font-bold">•</span>
                        <span>**งานพิเศษ**: ชั่วโมงละ 100 บาท</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="bg-red-800/40 px-2 rounded font-bold">•</span>
                        <span>**งานเร่งด่วน**: ชั่วโมงละ 150 บาท</span>
                    </li>
                    <li class="mt-8 bg-white/30 p-5 rounded-2xl border border-white/10 italic text-red-50">
                        <p class="text-sm leading-relaxed font-medium">
                            💡 ชั่วโมงที่เกิน 8 ชั่วโมง คิดค่า OT ให้เป็น 1.5 เท่าของเรตประเภทงานนั้นๆ
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="bg-red-900 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function calculateWage() {
            const hours = parseFloat(document.getElementById('hours').value);
            const rate = parseFloat(document.getElementById('jobType').value);
            const resultDiv = document.getElementById('result');
            const totalWageP = document.getElementById('totalWage');

            if (isNaN(hours) || hours <= 0) {
                alert("กรุณากรอกจำนวนชั่วโมงทำงานให้ถูกต้อง");
                return;
            }

            let total = 0;
            if (hours <= 8) {
                total = hours * rate;
            } else {
                const normalHours = 8;
                const otHours = hours - 8;
                total = (normalHours * rate) + (otHours * rate * 1.5);
            }

            resultDiv.classList.remove('hidden');
            totalWageP.innerText = total.toLocaleString() + " บาท";
        }

        function clearForm() {
            document.getElementById('hours').value = '';
            document.getElementById('jobType').selectedIndex = 0;
            document.getElementById('result').classList.add('hidden');
        }
    </script>
</body>
</html>