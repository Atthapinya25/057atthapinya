<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.3 คำนวณค่าไฟฟ้า</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #f0fdf4; }
        /* เปลี่ยนพื้นหลังด้านขวาเป็นสีเขียวอ่อน */
        .bg-green-soft { background-color: #6ee7b7; } 
        
        .custom-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2310b981' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 1rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <nav class="bg-emerald-600 text-white py-4 px-10 flex justify-between items-center shadow-md">
        <div class="flex items-center gap-2">
            <div class="bg-emerald-700 p-1 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-tight">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-light">
            <a href="#" class="hover:text-emerald-200 transition">คำอธิบาย</a>
            <a href="#" class="text-emerald-100 border-b-2 border-emerald-100 pb-1">การเขียนโปรแกรมแบบมีเงื่อนไข ▾</a>
            <a href="#" class="hover:text-emerald-200 transition">เขียนโปรแกรมวนซ้ำ ▾</a>
        </div>
    </nav>

    <div class="flex-grow flex items-center justify-center p-6">
        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row border border-emerald-50">
            
            <div class="flex-1 p-10 lg:p-14">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-8 border-emerald-500 pl-4">1.3 คำนวณค่าไฟฟ้า</h2>
                
                <div class="space-y-5">
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">จำนวนหน่วยไฟฟ้า</label>
                        <input type="number" id="units" placeholder="กรอกจำนวนหน่วยไฟฟ้า" class="w-full border border-gray-200 rounded-xl p-4 outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all bg-gray-50/50">
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">ประเภทผู้ใช้ไฟฟ้า</label>
                        <select id="userType" class="w-full border border-gray-200 rounded-xl p-4 outline-none focus:border-emerald-500 bg-gray-50/50 cursor-pointer appearance-none custom-select">
                            <option value="home">บ้านอยู่อาศัย</option>
                            <option value="business">ร้านค้า/ธุรกิจ</option>
                        </select>
                    </div>

                    <div class="flex gap-4 pt-4">
                        <button onclick="calculateElectric()" class="flex-[1.5] bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-4 rounded-xl shadow-lg transition-all active:scale-95 text-lg">
                            คำนวณค่าไฟ
                        </button>
                        <button onclick="clearForm()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-700 font-bold py-4 rounded-xl transition-all text-lg">
                            เคลียร์ผลลัพธ์
                        </button>
                    </div>

                    <div id="result" class="mt-8 p-6 bg-emerald-50 rounded-2xl space-y-1 hidden border border-emerald-100">
                        <p class="text-lg font-medium text-emerald-900">ประเภทผู้ใช้ไฟฟ้า: <span id="resUserType" class="font-bold"></span></p>
                        <p class="text-lg font-medium text-emerald-900">จำนวนหน่วยที่ใช้: <span id="resUnits" class="font-bold"></span> หน่วย</p>
                        <p class="text-lg font-medium text-emerald-900">ค่าไฟฟ้าที่ต้องชำระ: <span id="totalPrice" class="font-bold text-xl text-emerald-600"></span> บาท</p>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-green-soft p-10 lg:p-14 text-emerald-900 flex flex-col justify-center">
                <h3 class="text-3xl font-bold mb-10 text-white drop-shadow-md">เงื่อนไขการคำนวณค่าไฟ</h3>
                
                <div class="space-y-6 bg-white/30 p-6 rounded-2xl backdrop-blur-sm border border-white/40">
                    <section>
                        <h4 class="font-bold text-xl mb-2 text-emerald-950">**บ้านอยู่อาศัย**</h4>
                        <ul class="space-y-2 text-lg ml-6 list-disc font-medium text-emerald-900">
                            <li>0 - 100 หน่วย: 3 บาท/หน่วย</li>
                            <li>101 - 200 หน่วย: 4 บาท/หน่วย</li>
                            <li>มากกว่า 200 หน่วย: 5 บาท/หน่วย</li>
                        </ul>
                    </section>

                    <section>
                        <h4 class="font-bold text-xl mb-2 text-emerald-950">**ร้านค้า/ธุรกิจ**</h4>
                        <ul class="space-y-2 text-lg ml-6 list-disc font-medium text-emerald-900">
                            <li>0 - 100 หน่วย: 4 บาท/หน่วย</li>
                            <li>101 - 200 หน่วย: 5 บาท/หน่วย</li>
                            <li>มากกว่า 200 หน่วย: 6 บาท/หน่วย</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-emerald-800 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา  ศรีนิล
    </footer>

    <script>
        // Logic JavaScript คงเดิมตามคำขอ
        function calculateElectric() {
            const unitsInput = document.getElementById('units');
            const units = parseFloat(unitsInput.value);
            const userType = document.getElementById('userType').value;
            const resultDiv = document.getElementById('result');
            
            if (isNaN(units) || units < 0) {
                alert("กรุณากรอกจำนวนหน่วยไฟฟ้าให้ถูกต้อง");
                return;
            }

            let total = 0;
            let typeLabel = (userType === 'home') ? "บ้านอยู่อาศัย" : "ร้านค้า/ธุรกิจ";

            if (userType === 'home') {
                if (units <= 100) {
                    total = units * 3;
                } else if (units <= 200) {
                    total = (100 * 3) + ((units - 100) * 4);
                } else {
                    total = (100 * 3) + (100 * 4) + ((units - 200) * 5);
                }
            } else {
                if (units <= 100) {
                    total = units * 4;
                } else if (units <= 200) {
                    total = (100 * 4) + ((units - 100) * 5);
                } else {
                    total = (100 * 4) + (100 * 5) + ((units - 200) * 6);
                }
            }

            resultDiv.classList.remove('hidden');
            document.getElementById('resUserType').innerText = typeLabel;
            document.getElementById('resUnits').innerText = units.toLocaleString();
            document.getElementById('totalPrice').innerText = total.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
        }

        function clearForm() {
            document.getElementById('units').value = '';
            document.getElementById('userType').selectedIndex = 0;
            document.getElementById('result').classList.add('hidden');
        }
    </script>
</body>
</html>