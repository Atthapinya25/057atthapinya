<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.2 คำนวณผลคูณของตัวเลข</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        /* กำหนดสี YellowGreen เพิ่มเติมสำหรับส่วนที่ Tailwind พื้นฐานไม่มี */
        .bg-yellowgreen { background-color: #9ACD32; }
        .text-yellowgreen { color: #9ACD32; }
        .border-yellowgreen { border-color: #9ACD32; }
        .hover-bg-yellowgreen:hover { background-color: #8dbb2d; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <nav class="bg-yellowgreen text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center">
            <a href="#" class="text-white/80 hover:text-white transition">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-white transition">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-white transition">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[420px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-slate-800 border-l-4 border-yellowgreen pl-4">2.2 คำนวณผลคูณของตัวเลข</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกจำนวนเต็มบวก (n)</label>
                    <input type="number" id="nValue" placeholder="กรอกค่า n" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 bg-gray-50 transition-all">
                </div>
                <div class="flex gap-4">
                    <button onclick="calculateProduct()" class="flex-1 bg-yellowgreen hover-bg-yellowgreen text-white py-3 rounded-lg font-medium transition duration-200 shadow-md">
                        คำนวณ
                    </button>
                    <button onclick="resetForm()" class="flex-1 bg-[#cbd5e0] hover:bg-[#a0aec0] text-[#4a5568] py-3 rounded-lg font-medium transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultBox" class="mt-8 p-4 bg-yellow-50 rounded-lg hidden border-l-4 border-yellowgreen">
                    <p class="text-green-800 text-lg font-bold" id="productResult"></p>
                    <p class="text-green-700 text-sm mt-1 break-all" id="productProcess"></p>
                </div>
            </div>

            <div class="bg-yellowgreen p-10 flex-1 text-white flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">รายละเอียดโจทย์</h2>
                <p class="mb-6 text-center leading-relaxed">
                    กรอกค่า **n** (จำนวนเต็มบวก) เพื่อคำนวณผลคูณของตัวเลข<br>ตั้งแต่ 1 ถึง **n**
                </p>
                <div class="space-y-4 text-sm bg-white/10 p-6 rounded-xl border border-white/20">
                    <p class="font-bold underline text-white">**เงื่อนไขการคำนวณ**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-95">
                        <li>คำนวณผลคูณของตัวเลขในช่วง 1 ถึง n</li>
                        <li>ค่าของ n ต้องเป็นจำนวนเต็มบวก</li>
                        <li>แสดงผลลัพธ์เป็นผลคูณทั้งหมด</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-slate-800 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์  นางสาวอัฐภิญญา  ศรีนิล
    </footer>

    <script>
        function calculateProduct() {
            const n = parseInt(document.getElementById('nValue').value);
            const resultBox = document.getElementById('resultBox');
            const productResult = document.getElementById('productResult');
            const productProcess = document.getElementById('productProcess');

            if (isNaN(n) || n < 1) {
                alert("กรุณากรอกจำนวนเต็มบวกที่มากกว่า 0");
                return;
            }

            let total = 1;
            let processArr = [];

            for (let i = 1; i <= n; i++) {
                total *= i;
                processArr.push(i);
            }

            resultBox.classList.remove('hidden');
            productResult.innerText = `ผลคูณทั้งหมดคือ : ${total.toLocaleString()}`;
            productProcess.innerText = `(วิธีคิด: ${processArr.join(' × ')})`;
        }

        function resetForm() {
            document.getElementById('nValue').value = "";
            document.getElementById('resultBox').classList.add('hidden');
        }
    </script>
</body>
</html>