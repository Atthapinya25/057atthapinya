<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.5 คำนวณค่าบริการอินเทอร์เน็ต</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        /* เพิ่มการไล่เฉดสีพื้นหลังแบบนุ่มนวล */
        .bg-soft-gradient { 
            background: linear-gradient(135deg, #f5f7ff 0%, #ffffff 100%); 
        }
    </style>
</head>
<body class="bg-soft-gradient min-h-screen flex flex-col">

    <nav class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white py-4 px-10 flex justify-between items-center shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 hover:bg-white/30 p-1.5 rounded-lg transition-colors backdrop-blur-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-pink-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-pink-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-2xl rounded-xl border border-gray-100 mt-0 w-64 py-2 z-50 overflow-hidden">
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-pink-200 transition flex items-center gap-1 focus:outline-none">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-2xl rounded-xl border border-gray-100 mt-0 w-64 py-2 z-50 overflow-hidden">
                    <a href="w07.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex-grow flex items-center justify-center p-6">
        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row border border-indigo-50">
            
            <div class="flex-1 p-10 lg:p-14">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-8 border-indigo-500 pl-4">1.5 คำนวณค่าเน็ต</h2>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">จำนวนชั่วโมงใช้งาน</label>
                        <input type="number" id="hours" placeholder="กรอกจำนวนชั่วโมง" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 transition-all bg-gray-50/50">
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">แพ็กเกจอินเทอร์เน็ต</label>
                        <select id="package" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-indigo-500 bg-gray-50/50 cursor-pointer appearance-none">
                            <option value="basic">Basic Package</option>
                            <option value="premium">Premium Package</option>
                        </select>
                    </div>

                    <div class="flex gap-4 pt-4">
                        <button onclick="calculateInternet()" class="flex-[2] bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-4 rounded-xl transition-all shadow-lg active:scale-95">
                            คำนวณค่าบริการ
                        </button>
                        <button onclick="clearForm()" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-4 rounded-xl transition-all">
                            ล้างข้อมูล
                        </button>
                    </div>

                    <div id="result" class="mt-8 p-6 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl border-2 border-dashed border-indigo-200 hidden">
                        <p class="text-sm text-indigo-700 font-medium mb-1">สรุปค่าบริการสุทธิ:</p>
                        <p id="totalCharge" class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600"></p>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 p-10 lg:p-14 text-white flex flex-col justify-center">
                <h3 class="text-2xl font-bold mb-6 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    รายละเอียดแพ็กเกจ
                </h3>
                
                <div class="space-y-8">
                    <div class="bg-white/10 p-5 rounded-2xl backdrop-blur-sm border border-white/20">
                        <h4 class="font-bold text-lg mb-3 text-pink-200">★ แพ็กเกจ Basic</h4>
                        <ul class="space-y-2 opacity-90 text-sm">
                            <li class="flex justify-between border-b border-white/10 pb-1"><span>0-20 ชม.</span> <span>10.-/ชม.</span></li>
                            <li class="flex justify-between border-b border-white/10 pb-1"><span>21-50 ชม.</span> <span>8.-/ชม.</span></li>
                            <li class="flex justify-between border-b border-white/10 pb-1"><span>51 ชม. ขึ้นไป</span> <span>5.-/ชม.</span></li>
                            <li class="mt-2 text-indigo-100 font-semibold italic">* ค่าบริการคงที่: 100 บาท</li>
                        </ul>
                    </div>

                    <div class="bg-white/10 p-5 rounded-2xl backdrop-blur-sm border border-white/20">
                        <h4 class="font-bold text-lg mb-3 text-indigo-200">★ แพ็กเกจ Premium</h4>
                        <ul class="space-y-2 opacity-90 text-sm">
                            <li class="flex justify-between border-b border-white/10 pb-1"><span>0-20 ชม.</span> <span>15.-/ชม.</span></li>
                            <li class="flex justify-between border-b border-white/10 pb-1"><span>21-50 ชม.</span> <span>12.-/ชม.</span></li>
                            <li class="flex justify-between border-b border-white/10 pb-1"><span>51 ชม. ขึ้นไป</span> <span>10.-/ชม.</span></li>
                            <li class="mt-2 text-indigo-100 font-semibold italic">* ค่าบริการคงที่: 200 บาท</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 text-gray-500 py-6 text-center text-xs tracking-widest">
        © 2024 MIDTERM EXAM | ALL RIGHTS RESERVED BY นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function calculateInternet() {
            const hours = parseFloat(document.getElementById('hours').value);
            const pkg = document.getElementById('package').value;
            const resultDiv = document.getElementById('result');
            const totalChargeP = document.getElementById('totalCharge');

            if (isNaN(hours) || hours < 0) {
                alert("กรุณากรอกจำนวนชั่วโมงให้ถูกต้อง");
                return;
            }

            let hourlyRate = 0;
            let fixedCharge = 0;

            if (pkg === 'basic') {
                fixedCharge = 100;
                if (hours <= 20) hourlyRate = 10;
                else if (hours <= 50) hourlyRate = 8;
                else hourlyRate = 5;
            } else { // premium
                fixedCharge = 200;
                if (hours <= 20) hourlyRate = 15;
                else if (hours <= 50) hourlyRate = 12;
                else hourlyRate = 10;
            }

            const total = (hours * hourlyRate) + fixedCharge;

            resultDiv.classList.remove('hidden');
            totalChargeP.innerText = total.toLocaleString() + " บาท";
        }

        function clearForm() {
            document.getElementById('hours').value = '';
            document.getElementById('package').selectedIndex = 0;
            document.getElementById('result').classList.add('hidden');
        }
    </script>
</body>
</html>