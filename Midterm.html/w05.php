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
    </style>
</head>
<body class="bg-[#fffbeb] min-h-screen flex flex-col">

    <nav class="bg-amber-600 text-white py-4 px-10 flex justify-between items-center shadow-md">
        <div class="flex items-center gap-2">
            <div class="bg-amber-500 hover:bg-amber-400 p-1 rounded transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold uppercase">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm">
            <a href="#" class="hover:text-amber-200 transition">คำอธิบาย</a>
            <a href="#" class="text-amber-100 font-medium">การเขียนโปรแกรมแบบมีเงื่อนไข ▾</a>
            <a href="#" class="hover:text-amber-200 transition">เขียนโปรแกรมวนซ้ำ ▾</a>
        </div>
    </nav>

    <div class="flex-grow flex items-center justify-center p-6">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row border border-amber-50">
            
            <div class="flex-1 p-10 lg:p-14">
                <h2 class="text-2xl font-bold text-gray-800 mb-8 border-l-4 border-amber-500 pl-4">1.5 คำนวณค่าบริการอินเทอร์เน็ต</h2>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">จำนวนชั่วโมงใช้งาน</label>
                        <input type="number" id="hours" placeholder="กรอกจำนวนชั่วโมง" class="w-full border border-gray-300 rounded-md p-3 outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all">
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">แพ็กเกจอินเทอร์เน็ต</label>
                        <select id="package" class="w-full border border-gray-300 rounded-md p-3 outline-none focus:ring-2 focus:ring-amber-500 bg-white cursor-pointer">
                            <option value="basic">Basic</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>

                    <div class="flex gap-4 pt-4">
                        <button onclick="calculateInternet()" class="flex-1 bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 rounded-md transition-colors shadow-sm">
                            คำนวณ
                        </button>
                        <button onclick="clearForm()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-gray-700 font-bold py-3 rounded-md transition-colors">
                            ล้างข้อมูล
                        </button>
                    </div>

                    <div id="result" class="mt-6 p-5 bg-amber-50 rounded-lg border-l-4 border-amber-500 hidden">
                        <p class="text-sm text-amber-700 font-medium">สรุปค่าบริการทั้งหมด:</p>
                        <p id="totalCharge" class="text-3xl font-bold text-amber-900"></p>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-gradient-to-br from-amber-500 to-orange-600 p-10 lg:p-14 text-white">
                <h3 class="text-2xl font-bold mb-6 text-center">รายละเอียดแพ็กเกจ</h3>
                <p class="text-sm mb-8 text-center opacity-90">เลือกแพ็กเกจอินเทอร์เน็ตและกรอกจำนวนชั่วโมงที่ใช้งานเพื่อคำนวณค่าบริการทั้งหมด</p>
                
                <div class="space-y-8 text-sm">
                    <section>
                        <h4 class="font-bold border-b border-white/40 pb-1 mb-3">** แพ็กเกจ Basic **</h4>
                        <ul class="space-y-1 opacity-90">
                            <li>- 0-20 ชั่วโมง: 10 บาท/ชั่วโมง</li>
                            <li>- 21-50 ชั่วโมง: 8 บาท/ชั่วโมง</li>
                            <li>- มากกว่า 50 ชั่วโมง: 5 บาท/ชั่วโมง</li>
                            <li>- ค่าบริการคงที่: 100 บาท</li>
                        </ul>
                    </section>

                    <section>
                        <h4 class="font-bold border-b border-white/40 pb-1 mb-3">** แพ็กเกจ Premium **</h4>
                        <ul class="space-y-1 opacity-90">
                            <li>- 0-20 ชั่วโมง: 15 บาท/ชั่วโมง</li>
                            <li>- 21-50 ชั่วโมง: 12 บาท/ชั่วโมง</li>
                            <li>- มากกว่า 50 ชั่วโมง: 10 บาท/ชั่วโมง</li>
                            <li>- ค่าบริการคงที่: 200 บาท</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-amber-900 text-amber-100/50 py-4 text-center text-xs">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์  นางสาวอัฐภิญญา  ศรีนิล
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