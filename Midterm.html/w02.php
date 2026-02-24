<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.2 คำนวณภาษีรถยนต์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* ตั้งพื้นหลังหลักเป็นสี Honeydew2 (#e0eee0) */
        body { font-family: 'Kanit', sans-serif; background-color: #e0eee0; }
        
        /* ปรับ Gradient เป็นโทนเขียว Honeydew ไปหาเขียวเข้ม */
        .gradient-bg { background: linear-gradient(135deg, #e0eee0 0%, #838b83 100%); }
    </style>
</head>
<body class="min-h-screen">

    <nav class="bg-[#556b2f] text-white py-4 px-8 flex justify-between items-center shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <div class="bg-[#e0eee0]/30 hover:bg-[#e0eee0]/50 p-1.5 rounded-lg transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold tracking-wide">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm">
            <a href="index.php" class="hover:text-green-200 transition">คำอธิบาย</a>
            <a href="#" class="text-green-100 font-medium">การเขียนโปรแกรมแบบมีเงื่อนไข ▾</a>
            <a href="#" class="hover:text-green-200 transition">เขียนโปรแกรมวนซ้ำ ▾</a>
        </div>
    </nav>

    <main class="container mx-auto mt-12 mb-12 px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-green-50">
            
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
                        <button onclick="calculateTax()" class="flex-1 bg-[#556b2f] hover:bg-[#6b8e23] text-white font-bold py-4 rounded-xl shadow-lg shadow-green-100 transition-all active:scale-95">
                            คำนวณภาษี
                        </button>
                        <button onclick="clearForm()" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-4 rounded-xl transition-all active:scale-95">
                            เคลียร์ผลลัพธ์
                        </button>
                    </div>

                    <div id="result" class="mt-8 p-6 bg-[#e0eee0] rounded-2xl border-2 border-dashed border-[#838b83] hidden">
                        <p class="text-sm text-[#556b2f] mb-1 font-medium">ผลการคำนวณภาษีสุทธิ</p>
                        <p id="taxValue" class="text-4xl font-bold text-gray-800 tracking-tight"></p>
                        <p id="discountLabel" class="text-xs text-[#556b2f] mt-2 font-medium"></p>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-[#e0eee0] p-10 lg:p-14 text-gray-800 flex flex-col justify-center relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-8 flex items-center gap-2 text-[#556b2f]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        โปรแกรมคำนวณภาษีรถยนต์
                    </h3>
                    
                    <div class="space-y-8 text-sm">
                        <section>
                            <h4 class="font-bold text-lg mb-3 border-b border-[#838b83] pb-1 text-[#556b2f]">รถยนต์ส่วนบุคคล</h4>
                            <ul class="space-y-1 ml-4 list-disc marker:text-[#556b2f]">
                                <li>CC ไม่เกิน 1,500: 500 บาท</li>
                                <li>CC 1,501 - 2,000: 1,000 บาท</li>
                                <li>CC มากกว่า 2,000: 1,500 บาท</li>
                            </ul>
                        </section>

                        <section>
                            <h4 class="font-bold text-lg mb-3 border-b border-[#838b83] pb-1 text-[#556b2f]">รถกระบะ</h4>
                            <ul class="space-y-1 ml-4 list-disc marker:text-[#556b2f]">
                                <li>CC ไม่เกิน 1,500: 400 บาท</li>
                                <li>CC 1,501 - 2,000: 800 บาท</li>
                                <li>CC มากกว่า 2,000: 1,200 บาท</li>
                            </ul>
                        </section>

                        <section class="bg-white/50 p-4 rounded-2xl backdrop-blur-sm border border-[#838b83]/20">
                            <h4 class="font-bold text-lg mb-2 text-[#556b2f]">ส่วนลดตามอายุรถยนต์</h4>
                            <ul class="space-y-1 ml-4">
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[#556b2f] rounded-full"></span>
                                    มากกว่า 5 ปี: ลด 10%
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-[#556b2f] rounded-full"></span>
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

    <footer class="bg-red-800 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>

</body>
</html>