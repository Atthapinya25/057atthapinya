<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.1 คำนวณเงินเดือนพนักงาน</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-rose-50 min-h-screen">

    <nav class="bg-[#8b0a50] text-white p-4 flex justify-between items-center px-10 shadow-md">
        <div class="flex items-center gap-2">
            <div class="bg-white/30 p-1 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </div>
            <span class="text-xl font-bold uppercase drop-shadow-sm">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 text-sm font-medium">
            <a href="index.php" class="hover:text-rose-200 transition">คำอธิบาย</a>
            <a href="#" class="hover:text-rose-200 transition">การเขียนโปรแกรมแบบมีเงื่อนไข ▾</a>
            <a href="#" class="hover:text-rose-200 transition">เขียนโปรแกรมวนซ้ำ ▾</a>
        </div>
    </nav>

    <div class="flex justify-center items-center mt-20 px-4 mb-10">
        <div class="flex flex-col md:row bg-white rounded-3xl shadow-xl overflow-hidden max-w-4xl w-full border border-rose-100 md:flex-row">
            
            <div class="p-10 flex-1">
                <h2 class="text-2xl font-bold mb-6 text-slate-700 border-l-4 border-[#8b0a50] pl-4">1.1 คำนวณเงินเดือนพนักงาน</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-slate-600 mb-1">ชื่อพนักงาน</label>
                        <input type="text" id="name" placeholder="กรอกชื่อพนักงาน" class="w-full border border-rose-200 rounded-xl p-3 focus:ring-2 focus:ring-[#8b0a50]/30 outline-none bg-rose-50/10">
                    </div>

                    <div>
                        <label class="block text-slate-600 mb-1">จำนวนชั่วโมงทำงาน</label>
                        <input type="number" id="hours" placeholder="เช่น 170" class="w-full border border-rose-200 rounded-xl p-3 focus:ring-2 focus:ring-[#8b0a50]/30 outline-none bg-rose-50/10">
                    </div>

                    <div>
                        <label class="block text-slate-600 mb-1">ตำแหน่งพนักงาน</label>
                        <select id="position" class="w-full border border-rose-200 rounded-xl p-3 focus:ring-2 focus:ring-[#8b0a50]/30 outline-none bg-white cursor-pointer">
                            <option value="100">ปฏิบัติการ (100 บ./ชม.)</option>
                            <option value="200">หัวหน้างาน (200 บ./ชม.)</option>
                            <option value="300">ผู้จัดการ (300 บ./ชม.)</option>
                        </select>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <button onclick="calculateSalary()" class="bg-[#8b0a50] hover:bg-[#700840] text-white font-bold py-3 px-6 rounded-xl transition duration-200 shadow-sm w-full">
                            คำนวณเงินเดือน
                        </button>
                        <button onclick="clearForm()" class="bg-slate-200 hover:bg-slate-300 text-slate-600 font-bold py-3 px-6 rounded-xl transition duration-200 w-full">
                            เคลียร์ผลลัพธ์
                        </button>
                    </div>

                    <div id="result" class="mt-6 p-4 bg-rose-50 rounded-xl border-l-4 border-[#8b0a50] hidden">
                    </div>
                </div>
            </div>

            <div class="bg-rose-100 p-10 flex-1 text-slate-700 flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-6 text-center text-[#8b0a50] drop-shadow-sm">โปรแกรมคำนวณเงินเดือน</h2>
                <p class="mb-4 text-sm leading-relaxed bg-white/50 p-4 rounded-xl border border-rose-200">
                    ให้เขียนโปรแกรมที่รับค่าชื่อพนักงาน (name) จำนวนชั่วโมงทำงาน (hours) จากช่อง input และตำแหน่งพนักงาน (position) จาก dropdown โดยมีเงื่อนไขดังนี้
                </p>
                <ul class="space-y-2 text-sm ml-2 font-medium text-[#8b0a50]">
                    <li class="flex items-start">
                        <span class="mr-2 text-[#8b0a50] font-bold">✔</span> พนักงานระดับปฏิบัติการ: ชั่วโมงละ 100 บาท
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 text-[#8b0a50] font-bold">✔</span> พนักงานระดับหัวหน้างาน: ชั่วโมงละ 200 บาท
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 text-[#8b0a50] font-bold">✔</span> พนักงานระดับผู้จัดการ: ชั่วโมงละ 300 บาท
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 text-[#8b0a50] font-bold">✔</span> เกิน 160 ชม. เพิ่มเงินพิเศษ 1.5 เท่าในส่วนที่เกิน
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function calculateSalary() {
            const name = document.getElementById('name').value;
            const hours = parseFloat(document.getElementById('hours').value);
            const rate = parseFloat(document.getElementById('position').value);
            const resultDiv = document.getElementById('result');

            if (!name || isNaN(hours)) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            let totalSalary = 0;
            let overtimeHours = 0;

            if (hours <= 160) {
                totalSalary = hours * rate;
            } else {
                overtimeHours = hours - 160;
                totalSalary = (160 * rate) + (overtimeHours * rate * 1.5);
            }

            resultDiv.classList.remove('hidden');
            // เปลี่ยนสีข้อความผลลัพธ์ให้เข้ากับธีมใหม่
            resultDiv.innerHTML = `
                <p class="font-bold text-[#8b0a50]">คุณ ${name}</p>
                <p class="text-gray-700">เงินเดือนสุทธิ: <span class="text-2xl text-[#8b0a50] font-bold">${totalSalary.toLocaleString()}</span> บาท</p>
                ${overtimeHours > 0 ? `<p class="text-xs text-[#8b0a50] font-medium">(รวมค่าล่วงเวลา ${overtimeHours} ชม. เรต 1.5 เท่าแล้ว)</p>` : ''}
            `;
        }

        function clearForm() {
            document.getElementById('name').value = '';
            document.getElementById('hours').value = '';
            document.getElementById('position').selectedIndex = 0;
            document.getElementById('result').classList.add('hidden');
        }
    </script>

    <footer class="bg-red-800 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
    </footer>


</body>
</html>