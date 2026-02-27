<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.6 เช็คเลขคู่หรือเลขคี่</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        /* กำหนดค่าสี Chocolate2 สำหรับคลาสเสริม */
        .text-chocolate2 { color: #ee7621; }
        .bg-chocolate2 { background-color: #ee7621; }
        .hover-chocolate2:hover { background-color: #d3681d; }
    </style>
</head>
<body class="bg-stone-50 min-h-screen flex flex-col">

    <nav class="bg-[#ee7621] text-white p-4 flex justify-between items-center px-10 shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 p-1.5 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-orange-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-orange-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-orange-50 mt-0 w-56 py-2 z-50">
                    <a href="w01.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition font-bold border-l-4 border-[#ee7621]">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-orange-200 transition flex items-center gap-1 focus:outline-none">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-orange-50 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.3 ตารางสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.4 สร้างรูปตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 hover:bg-orange-50 hover:text-[#ee7621] transition">2.7 ค้นหาจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden border border-stone-100">
            
            <div class="p-10 flex-1">
                <h2 class="text-2xl font-bold mb-6 text-slate-800 border-l-4 border-[#ee7621] pl-4">1.6 เช็คเลขคู่หรือเลขคี่</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกตัวเลข</label>
                    <input type="number" id="numberInput" placeholder="กรอกตัวเลขที่ต้องการตรวจสอบ" 
                        class="w-full p-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#ee7621]/50 bg-stone-50/50 transition-all">
                </div>
                <div class="flex gap-4">
                    <button onclick="checkNumber()" class="flex-[2] bg-[#ee7621] hover:bg-[#d3681d] text-white py-4 rounded-xl font-bold shadow-lg shadow-orange-200 transition duration-200 active:scale-95">
                        ตรวจสอบตัวเลข
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-stone-200 hover:bg-stone-300 text-stone-600 py-4 rounded-xl font-bold transition duration-200">
                        เคลียร์
                    </button>
                </div>
                <div id="resultArea" class="mt-8 text-center text-2xl font-bold min-h-[40px]"></div>
            </div>

            <div class="bg-orange-50 p-10 flex-1 text-[#8b4513] flex flex-col justify-center border-l border-orange-100">
                <h2 class="text-2xl font-bold mb-4 text-center text-[#ee7621]">ตรรกะการตรวจสอบ</h2>
                <p class="mb-6 text-center opacity-80">ใช้การหารเอาเศษ (Modulo) เพื่อแยกแยะประเภทตัวเลข</p>
                <div class="bg-white/60 p-6 rounded-2xl border border-[#ee7621]/20 backdrop-blur-sm">
                    <ul class="space-y-3 font-medium">
                        <li class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#ee7621]"></span>
                            <span>เลขคู่: หารด้วย 2 แล้วเศษเป็น 0</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#ee7621]"></span>
                            <span>เลขคี่: หารด้วย 2 แล้วมีเศษ</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#8b4513] text-orange-50 text-center py-4 text-sm tracking-wide">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

    <script>
        function checkNumber() {
            const input = document.getElementById('numberInput').value;
            const resultArea = document.getElementById('resultArea');
            
            if (input === "") {
                alert("กรุณากรอกตัวเลขก่อนครับ");
                return;
            }

            const num = parseInt(input);
            if (num % 2 === 0) {
                resultArea.innerText = `เลข ${num} คือ : เลขคู่`;
                resultArea.className = "mt-8 text-center text-2xl font-extrabold text-[#ee7621] animate-bounce";
            } else {
                resultArea.innerText = `เลข ${num} คือ : เลขคี่`;
                resultArea.className = "mt-8 text-center text-2xl font-extrabold text-[#8b4513]";
            }
        }

        function clearForm() {
            document.getElementById('numberInput').value = "";
            document.getElementById('resultArea').innerText = "";
            document.getElementById('resultArea').className = "mt-8 text-center text-2xl font-bold";
        }
    </script>
</body>
</html>