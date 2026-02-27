<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.2 คำนวณภาษีรถยนต์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* เปลี่ยนพื้นหลังหลักเป็น DarkOliveGreen แบบจาง หรือใช้สีที่เข้ากัน */
        body { 
            font-family: 'Kanit', sans-serif; 
            background-color: #f0f2ee; /* สีพื้นหลังเทาอมเขียวอ่อนเพื่อให้ DarkOliveGreen ดูเด่น */
        }
        
        /* ปรับ Gradient เป็นโทน DarkOliveGreen */
        .gradient-bg { 
            background: linear-gradient(135deg, #556b2f 0%, #2e3b19 100%); 
        }
    </style>
</head>
<body class="min-h-screen">

    <nav class="bg-[#556b2f] text-white py-4 px-8 flex justify-between items-center shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <div class="bg-white/20 hover:bg-white/30 p-1.5 rounded-lg transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold tracking-wide">สอบกลางภาค</span>
        </div>
        <div class="flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-yellow-200 transition self-center">คำอธิบาย</a>

            <div class="relative group py-2">
                <button class="hover:text-yellow-200 transition flex items-center gap-1 focus:outline-none">
                    การเขียนโปรแกรมแบบมีเงื่อนไข ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-gray-100 mt-0 w-56 py-2 z-50">
                    <a href="w01.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">1.1 คำนวณเงินเดือน</a>
                    <a href="w02.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">1.2 ภาษีรถยนต์</a>
                    <a href="w03.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">1.3 ค่าไฟฟ้า</a>
                    <a href="w04.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">1.4 ค่าแรงพนักงาน</a>
                    <a href="w05.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">1.5 ค่าเน็ต</a>
                    <a href="w06.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">1.6 เช็คเลขคู่หรือคี่</a>
                </div>
            </div>

            <div class="relative group py-2">
                <button class="hover:text-yellow-200 transition flex items-center gap-1 focus:outline-none">
                    เขียนโปรแกรมวนซ้ำ ▾
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg border border-gray-100 mt-0 w-56 py-2 z-50">
                    <a href="w07.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.1 คำนวณผลรวมเลขคู่</a>
                    <a href="w08.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.2 คำนวณผลคูณของตัวเลข</a>
                    <a href="w09.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.3 ตาราฃสูตรคูณ</a>
                    <a href="w10.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</a>
                    <a href="w11.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.5 สร้างรูปพีระมิดดาว</a>
                    <a href="w12.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.6 คำนวณเลขยกกำลัง</a>
                    <a href="w13.php" class="block px-4 py-2 text-gray-700 hover:bg-[#556b2f] hover:text-white transition">2.7 ค้นหสจำนวนเฉพาะ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-12 mb-12 px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-gray-100">
            
            <div class="flex-1 p-10 lg:p-14">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-[#556b2f] pl-4">1.2 คำนวณภาษีรถยนต์</h2>
                
                <div class="space-y-6">
                    <div class="group">
                        <label class="block text-gray-600 mb-2 font-medium group-focus-within:text-[#556b2f] transition">ขนาด CC ของรถยนต์</label>
                        <input type="number" id="cc" placeholder="เช่น 1500" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-[#556b2f] focus:ring-4 focus:ring-[#556b2f]/10 transition-all bg-gray-50">
                    </div>

                    <div class="group">
                        <label class="block text-gray-600 mb-2 font-medium group-focus-within:text-[#556b2f] transition">ประเภทของรถยนต์</label>
                        <select id="carType" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-[#556b2f] focus:ring-4 focus:ring-[#556b2f]/10 transition-all bg-gray-50 appearance-none cursor-pointer">
                            <option value="personal">รถยนต์ส่วนบุคคล</option>
                            <option value="truck">รถกระบะ</option>
                        </select>
                    </div>

                    <div class="group">
                        <label class="block text-gray-600 mb-2 font-medium group-focus-within:text-[#556b2f] transition">อายุของรถยนต์ (ปี)</label>
                        <input type="number" id="age" placeholder="เช่น 6" class="w-full border-2 border-gray-100 rounded-xl p-4 outline-none focus:border-[#556b2f] focus:ring-4 focus:ring-[#556b2f]/10 transition-all bg-gray-50">
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button onclick="calculateTax()" class="flex-1 bg-[#556b2f] hover:bg-[#6b8e23] text-white font-bold py-4 rounded-xl shadow-lg shadow-gray-200 transition-all active:scale-95">
                            คำนวณภาษี
                        </button>
                        <button onclick="clearForm()" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-4 rounded-xl transition-all active:scale-95">
                            เคลียร์ผลลัพธ์
                        </button>
                    </div>

                    <div id="result" class="mt-8 p-6 bg-[#f4f7f0] rounded-2xl border-2 border-dashed border-[#556b2f]/30 hidden">
                        <p class="text-sm text-[#556b2f] mb-1 font-medium">ผลการคำนวณภาษีสุทธิ</p>
                        <p id="taxValue" class="text-4xl font-bold text-[#2e3b19] tracking-tight"></p>
                        <p id="discountLabel" class="text-xs text-[#556b2f] mt-2 font-medium"></p>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-[#556b2f] p-10 lg:p-14 text-white flex flex-col justify-center relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-8 flex items-center gap-2 text-yellow-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        โปรแกรมคำนวณภาษีรถยนต์
                    </h3>
                    
                    <div class="space-y-8 text-sm opacity-90">
                        <section>
                            <h4 class="font-bold text-lg mb-3 border-b border-white/20 pb-1 text-yellow-100">รถยนต์ส่วนบุคคล</h4>
                            <ul class="space-y-1 ml-4 list-disc marker:text-yellow-200">
                                <li>CC ไม่เกิน 1,500: 500 บาท</li>
                                <li>CC 1,501 - 2,000: 1,000 บาท</li>
                                <li>CC มากกว่า 2,000: 1,500 บาท</li>
                            </ul>
                        </section>

                        <section>
                            <h4 class="font-bold text-lg mb-3 border-b border-white/20 pb-1 text-yellow-100">รถกระบะ</h4>
                            <ul class="space-y-1 ml-4 list-disc marker:text-yellow-200">
                                <li>CC ไม่เกิน 1,500: 400 บาท</li>
                                <li>CC 1,501 - 2,000: 800 บาท</li>
                                <li>CC มากกว่า 2,000: 1,200 บาท</li>
                            </ul>
                        </section>

                        <section class="bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <h4 class="font-bold text-lg mb-2 text-yellow-100">ส่วนลดตามอายุรถยนต์</h4>
                            <ul class="space-y-1 ml-4">
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-yellow-200 rounded-full"></span>
                                    มากกว่า 5 ปี: ลด 10%
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-yellow-200 rounded-full"></span>
                                    มากกว่า 10 ปี: ลด 20%
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function calculateTax() {
            const cc = parseFloat(document.getElementById('cc').value);
            const carType = document.getElementById('carType').value;
            const age = parseFloat(document.getElementById('age').value);
            const resultDiv = document.getElementById('result');
            const taxValue = document.getElementById('taxValue');
            const discountLabel = document.getElementById('discountLabel');

            if (isNaN(cc) || isNaN(age)) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            let baseTax = 0;

            if (carType === 'personal') {
                if (cc <= 1500) baseTax = 500;
                else if (cc <= 2000) baseTax = 1000;
                else baseTax = 1500;
            } else {
                if (cc <= 1500) baseTax = 400;
                else if (cc <= 2000) baseTax = 800;
                else baseTax = 1200;
            }

            let discountRate = 0;
            if (age > 10) discountRate = 0.20;
            else if (age > 5) discountRate = 0.10;

            const finalTax = baseTax * (1 - discountRate);

            resultDiv.classList.remove('hidden');
            taxValue.innerText = finalTax.toLocaleString() + ' บาท';
            discountLabel.innerText = discountRate > 0 
                ? `(ได้รับส่วนลดอายุรถ ${discountRate * 100}% จากราคาปกติ ${baseTax} บาท)` 
                : 'ไม่มีส่วนลดอายุรถ';
        }

        function clearForm() {
            document.getElementById('cc').value = '';
            document.getElementById('age').value = '';
            document.getElementById('carType').selectedIndex = 0;
            document.getElementById('result').classList.add('hidden');
        }
    </script>

    <footer class="bg-[#2e3b19] text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

</body>
</html>